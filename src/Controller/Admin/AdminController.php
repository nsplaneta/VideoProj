<?php

namespace App\Controller\Admin;


use App\Entity\Users;
use App\Entity\Videos;
use App\Form\RegisterUserType;
use App\Utils\CategoryTreeAdminOptionList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/profile")
 */

class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin_profile", methods={"POST", "GET"})
     */

    public function index(Request $request, UserPasswordEncoderInterface $password_encoder)
    {

        $user = $this->getUser();
        $form = $this->createForm(RegisterUserType::class, $user,['user'=>$user] );
        $form->handleRequest($request);
        $is_invalid = null;
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $user->setName($form->get('name')->getData());
            $user->setLastName($form->get('last_name')->getData());
            $user->setEmail($form->get('email')->getData());
            $password = $password_encoder->encodePassword($user, $form->get('password')->getData());
            $user->setPassword($password);
            $entityManager->persist($user);
            $entityManager->flush();
//
            $this->addFlash(
                'success',
                'Your changes were saved!'
            );

            return $this->redirectToRoute('admin_profile');
        }
        elseif($request->isMethod('post'))
        {
            $is_invalid = 'is-invalid';
        }

        return $this->render('admin/my_profile.html.twig', [
            'subscription' => $this->getUser()->getSubscription(),
            'form'=>$form->createView(),
            'is_invalid' => $is_invalid
        ]);
    }

    /**
     * @Route("/cancel-plan", name="cancel_plan")
     */
    public function cancelPlan()
    {
        $user = $this->getDoctrine()->getRepository(Users::class)->find($this->getUser());

        $subscription = $user->getSubscription();
        $subscription->setValidTo(new \Datetime());
        $subscription->setPaymentStatus(null);
        $subscription->setPlan('canceled');

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->persist($subscription);
        $entityManager->flush();

        return $this->redirectToRoute('admin_profile');
    }

    /**
     * @Route("/videos", name="videos")
     */

    public function videos(CategoryTreeAdminOptionList $categories)
    {
        if($this->isGranted('ROLE_ADMIN'))
        {
            $categories->getCategoryList($categories->buildTree());
            $videos = $this->getDoctrine()->getRepository(Videos::class)->findAll();
        }
        else
        {
            $categories = null;
            $videos = $this->getUser()->getRatedVideos();
        }
        return $this->render('admin/videos.html.twig', [
            'videos' => $videos,
            'categories' => $categories
        ]);
    }



        /**
     * @Route("/delete-account", name="delete_account")
     */
    public function deleteAccount()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Users::class)->find($this->getUser());
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('home');
    }

}
