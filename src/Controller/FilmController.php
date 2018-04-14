<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FilmController extends Controller
{
   
    public function showFilm()
    {
        return $this->render('film/index.html.twig', [
            'film' => 'FilmController',
        ]);
    }
}
