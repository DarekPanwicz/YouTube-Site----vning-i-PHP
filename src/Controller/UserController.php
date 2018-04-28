<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\UserEntity;
use Symfony\Component\Form\Extension\Core\Type\{SubmitType, TextType};
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    
    public function showUserDetails()
    {
        return $this->render('user/showuserdetails.html.twig', [
            'users' => 'UserController',
        ]);
    }

    public function addUser(Request $request)
    {
        {
            $addUser = new UserEntity();
            $form = $this->createFormBuilder($addUser)

                ->add('login', TextType::class)
                ->add('password', TextType::class)
                ->add('email', TextType::class)
                ->add('save', SubmitType::class)
                ->getForm();
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid())

            {

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($addUser);
                $entityManager->flush();

                return $this->redirectToRoute('newUsers');
            }
            return $this->render('user/addUser.html.twig', [
                'form' => $form->createView(),
            ]);
        }
    }

    public function showUsers()
    {
        $user = $this
            ->getDoctrine()
            //Adding new comment to test GIT

            // ->getRepository('App\Entity\CategoryEntity')
            // jest to odnosnik do klasy w encji
            ->getRepository(userEntity::class)

            ->findAll();



        return $this->render('user/showUsers.html.twig', [
            'users' => $user,
        ]);
    }


  /*
        return $this->render('user/addUser.html.twig', [
            'users' => 'UserController',
        ]);
    */
}
