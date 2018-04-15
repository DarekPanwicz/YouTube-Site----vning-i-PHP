<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\CategoryEntity;

class CategoryController extends Controller
{
    
    public function showFilms()
    {


        $category = new CategoryEntity();
        $category -> setName('Youtube Fishing site');

        //Wywoluje dzialanie i obiekt doctrine 
        $entityManager = $this->getDoctrine()->getManager();
        //Laczenie entityMenagera z obiektem. Przekazuje obiekt do metody flusha. cos w stylu git commita
        $entityManager->persist($category);

        //Wyslanie do bazy, cos w stylu git pusha
        $entityManager->flush();

        // \dump(get_called_class());
        // \dump(\debug_backtrace()[0]['function']);
        // die();

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
}
