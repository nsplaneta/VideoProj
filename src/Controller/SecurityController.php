<?php

namespace App\Controller;

use App\Entity\Subscription;
use App\Entity\Users;
use App\Form\RegisterUserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login", methods={"GET", "POST"})
     */

    public function login(AuthenticationUtils $authenticationUtils) {

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('front/login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }

    /**
     * @Route("/logout", name="logout", methods={"GET"})
     */

    public function logout()
    {
        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/register/{plan}", name="register")
     */

    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, SessionInterface $session, $plan)
    {


        if($request->isMethod('GET'))
        {
            $session->set('planName', $plan);
            $session->set('planPrice', Subscription::getPlanDataPriceByName($plan));
        }


        $entityManager = $this->getDoctrine()->getManager();

        $user = new Users();
        $form = $this->createForm(RegisterUserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $password = $passwordEncoder->encodePassword($user, $form->get('password')->getData());
            $user -> setPassword($password);
            $user->setRoles(['ROLE_USER']);

            $date = new \DateTime();
            $date->modify('+1 month');
            $subscription = new Subscription();
            $subscription ->setValidTo($date);
            $subscription-> setPlan($session->get('planName'));
            if($plan == Subscription::getPlanDataNameByIndex(0)){
                $subscription->setFreePlanUsed(true);
                $subscription->setPaymentStatus('paid');
            }
            $user->setSubscription($subscription);

            $entityManager->persist($user);
            $entityManager->flush();

            $this->loginUserAutomatically($user, $password);

            return $this->redirectToRoute('admin_profile');
        }

        if($this->isGranted('IS_AUTHENTICATED_REMEMBERED') && $plan == Subscription::getPlanDataNameByIndex(0)){

           return $this->redirectToRoute('admin_profile');
        }
        elseif ($this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            return $this->redirectToRoute('payment');
        }


        return $this->render('front/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private function loginUserAutomatically($user, $password)
    {
        $token = new UsernamePasswordToken(
            $user,
            $password,
            'main',
            $user->getRoles()
        );
        $this->get('security.token_storage')->setToken($token);
        $this->get('session')->set('_security_main', serialize($token));

    }
}
