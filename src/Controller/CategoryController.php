<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\CategoryEntity;

class CategoryController extends Controller
{
    public function showFilms()
    {
        $category = $this
            ->getDoctrine()

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

    public function addCategory()
    {
        $category = new CategoryEntity();
        $category -> setName('Youtube Fishing site');  
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($category);
        $entityManager->flush();
        
        return $this->redirectToRoute('index');
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
