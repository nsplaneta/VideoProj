<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\Comment;
use App\Entity\Videos;
use App\Utils\CategoryTreeFrontPage;
use App\Utils\Interfaces\CacheInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Traits\Likes;
use App\Utils\VideoForNotValidSubscription;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



class FrontController extends AbstractController
{
    use Likes;

    /**
     * @Route("/", name="home")
     */

    public function index(VideoForNotValidSubscription $video_no_members)
    {
        $rated = $this->getDoctrine()->getRepository(Videos::class)->getTopRatedVideo();
        return $this->render('front/index.html.twig',[
            'rated'=>$rated,
            'video_no_members' => $video_no_members->check()
        ]);
    }

    /**
     * @Route("/search/results/{page}/", name="search", methods={"GET"}, defaults={"page":"1"})
     */

    public function searchResults($page, Request $request, VideoForNotValidSubscription $video_no_members)
    {
        $videos = null;
        $query = $request->get('query');

        if($query)
        {
            $videos = $this->getDoctrine()
                ->getRepository(Videos::class)
                ->findByTitle($query, $page, $request->get('sortby'));

            if(!$videos->getItems()) $videos = null;
        }

        return $this->render('front/search_results.html.twig',[
            'videos' => $videos,
            'query' => $query,
            'video_no_members' => $video_no_members->check()
        ]);
    }

    /**
     * @Route("/video-list/category/{id}/{category}/{page}", defaults={"page":"1"}, name="video_list")
     */

    public function videoList($id, $page, CategoryTreeFrontPage $categories, Request $request, VideoForNotValidSubscription $video_no_members, CacheInterface $cache){

        //Caching Video List
        $cache = $cache->cache;
        $video_list = $cache->getItem('video_list'.$id.$page.$request->get('sortby'));
        $video_list->expiresAfter(300);

        if(!$video_list->isHit()){

            $ids = $categories->getChildIds($id);
            array_push($ids, $id);
            $videos = $this->getDoctrine()->
            getRepository(Videos::class)->
            findByChildIds($ids, $page, $request->get('sortby'));
            $categories->getCategoryListAndParent($id);
            $response = $this->render('front/videos_list.html.twig', [
                'subcategories' => $categories,
                'videos' => $videos,
                'video_no_members' => $video_no_members->check()
            ]);

            $video_list->set($response);
            $cache->save($video_list);
        }
        return $video_list->get();
    }


    /**
     * @Route("/video-details/{video}/{page}", defaults={"page":"1"}, name="video_details")
     */

    public function video_details($video, $page, Request $request, PaginatorInterface $paginator, VideoForNotValidSubscription $video_no_members)
    {


        $em = $this->getDoctrine()->getManager();
        $videoDetail = $em->getRepository(Videos::class)->videoDetails($video);
        $commentList = $em->getRepository(Comment::class)->CommentsList($video,$page);
        return $this->render('front/video_details.html.twig', [
            'video'=>$videoDetail,
            'comments'=>$commentList,
            'video_no_members' => $video_no_members->check()
        ]);
    }

    /**
     * @Route("/create-comment/{video}", methods={"POST"}, name="create_comment")
     */

    public function createComment($video, Request $request)
    {
        $videos = $this->getDoctrine()->getRepository(Videos::class)->find($video);
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
        if (!empty(trim($request->request->get('comment'))))
        {
            $comment = new Comment();
            $comment->setContent($request->request->get('comment'));
            $comment->setVideo($videos);
            $comment->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

        }
        return $this->redirectToRoute('video_details', ['video'=>$videos->getId()]);
    }

    /**
     * @Route("/delete-comment/{comment}", name="delete_comment")
     * @Security ("user.getId() == comment.getUser().getId()")
     */
    public function deleteComment(Comment $comment, Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
        $em = $this->getDoctrine()->getManager();
        $em->remove($comment);
        $em->flush();
        return $this->redirect($request->headers->get('referer'));
    }


    public function categoriesList($id)
    {

        $categories = $this->getDoctrine()
            ->getRepository(Categories::class)
            ->findBy(['parent'=>null]);
        return $this->render('front/categories_list.html.twig',['categories'=>$categories, 'pathId'=>$id]);
    }

    /**
     * @Route("/video-list/{video}/rate", name="rate_video", methods={"GET"})
     * @Route("/video-list/{video}/undo-rate", name="undo_rate_video", methods={"GET"})
     */

    public function rateUndoRate($video, Request $request)
    {
        $videos = $this->getDoctrine()->getRepository(Videos::class)->find($video);
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
        switch($request->get('_route'))
        {
            case 'rate_video':
                $this->ratedVideo($videos);
                break;

            case 'undo_rate_video':
                $this->undoRatedVideo($videos);
                break;
        }

        $request->getSession()
            ->getFlashBag()
            ->add('notice', 'success');
        $referer = $request->headers->get('referer');
        return $this->redirect($referer);
    }

}

