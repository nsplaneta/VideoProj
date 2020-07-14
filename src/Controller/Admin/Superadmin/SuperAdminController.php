<?php
namespace App\Controller\Admin\Superadmin;

use App\Entity\Categories;
use App\Entity\Users;
use App\Entity\Videos;
use App\Form\VideoType;
use App\Utils\LocalUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/profile/admin")
 */

class SuperAdminController extends AbstractController
{

    /**
     * @Route("/upload-video", name="upload_video")
     */

    public function videosUpload(Request  $request, LocalUploader $fileUploader)
    {
        $video = new Videos();
        $form = $this->createForm(VideoType::class,$video);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $file = $video->getUploadedVideo();
            $fileName = $fileUploader->upload($file);
            $basePath= Videos::uploadFolder;
            $video->setPath($basePath.$fileName[0]);
            $video->setTitle($fileName[1]);

            // tmp -- need function to get real duration
            $video->setDuration(rand(1,500));

            $user = $em->getRepository(Users::class)->find($this->getUser());
            $video->setUser($user);
            $em->persist($video);
            $em->flush();
            return $this->redirectToRoute('videos');
        }

        return $this->render('admin/upload_video.html.twig', [
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/delete-video/{video}/{path}", name="delete_video", requirements={"path"=".+"})
     */

    public function deleteVideo($video, $path, LocalUploader $fileUploader)
    {
        $video = $this->getDoctrine()->getRepository(Videos::class)->find($video);
        $em = $this->getDoctrine()->getManager();
        $em->remove($video);
        $em->flush();

        if( $fileUploader->delete($path) )
        {
            $this->addFlash(
                'success',
                'The video was successfully deleted.'
            );
        }
        else
        {
            $this->addFlash(
                'danger',
                'We were not able to delete. Check the video.'
            );
        }

        return $this->redirectToRoute('videos');

    }

    /**
     * @Route("/update-video-category/{video}", methods={"POST"}, name="update_video_category")
     */
    public function updateVideoCategory(Request $request, $video)
    {

        $video = $this->getDoctrine()->getRepository(Videos::class)->find($video);
        $em = $this->getDoctrine()->getManager();

        $category = $this->getDoctrine()->getRepository(Categories::class)->find($request->request->get('video_category'));

        $video->setCategory($category);

        $em->persist($video);
        $em->flush();

        return $this->redirectToRoute('videos');
    }

    /**
     * @Route("/users", name="users")
     */

    public function users()
    {
        $users = $this->getDoctrine()->getRepository(Users::class)->findAll();

        return $this->render('admin/users.html.twig',
        [
            'users' => $users
        ]);
    }

    /**
     * @Route("/delete-user/{user}", name="delete_user")
     */

    public function deleteUser($user)
    {

        $manager = $this->getDoctrine()->getManager();
        $delete_user = $manager->getRepository(Users::class)->find($user);
        $manager->remove($delete_user);
        $manager->flush();

        return $this->redirectToRoute('users');
    }


}