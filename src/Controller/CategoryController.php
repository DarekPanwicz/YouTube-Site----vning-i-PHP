<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    
    public function showFilms()
    {

        // \dump(get_called_class());
        // \dump(\debug_backtrace()[0]['function']);
        // die();

         return $this->render('category/showfilms.html.twig', [
             'category' => 'CategoryController',
         ]);
    }
}
