<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    
    public function showFilms()
    {
        return $this->render('category/index.html.twig', [
            'category' => 'CategoryController',
        ]);
    }
}
