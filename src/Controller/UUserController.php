<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UUserController extends Controller
{
    /**
     * @Route("/u/user", name="u_user")
     */
    public function index()
    {
        return $this->render('u_user/index.html.twig', [
            'controller_name' => 'UUserController',
        ]);
    }
}
