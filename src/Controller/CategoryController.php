<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\CategoryEntity;
use Symfony\Component\Form\Extension\Core\Type\{SubmitType, TextType};
use Symfony\Component\HttpFoundation\Request;


class CategoryController extends Controller
{
    public function showFilms()
    {
        $category = $this
            ->getDoctrine()
    //Adding new comment to test GIT

            // ->getRepository('App\Entity\CategoryEntity')
            // jest to odnosnik do klasy w encji 
            ->getRepository(CategoryEntity::class)
            
            ->find(1);
        \dump($category);
        \dump(CategoryEntity::class);

         return $this->render('category/showfilms.html.twig', [
             'category' => 'CategoryController',
         ]);
    }

    public function addCategory(Request $request)
    {
        $category = new CategoryEntity();
        $form = $this->createFormBuilder($category)
        ->add('name', TextType::class)
        ->add('save', SubmitType::class)
        ->getForm();
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        
        {
            
            $entityManager = $this->getDoctrine()->getManager();

            if($this->get('security.authentication_checker')->isGranted('ROLE_ADMIN')){
                $category->setHidden(false);
            }

            $entityManager->persist($category);
            $entityManager->flush();

            return $this->redirectToRoute('categories');
        }
        return $this->render('category/form.html.twig', [
            'form' => $form->createView(),
        ]);
     }

     public function showCategories()
     {
            $categories = $this
            ->getDoctrine()
            ->getRepository(CategoryEntity::class) 
            ->findHiddenCategories();
   

         return $this->render('category/showcategories.html.twig', [
             'categories' => $categories,
         ]);


     }

     public function filter($letter)
     {
        $categories = $this
        ->getDoctrine()
        ->getRepository(CategoryEntity::class) 
        ->findLetterCategories($letter);


     return $this->render('category/showcategories.html.twig', [
         'categories' => $categories,
     ]);
     }
}
