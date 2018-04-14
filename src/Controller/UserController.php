<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    
    public function showUserDetails()
    {
        return $this->render('user/showuserdetails.html.twig', [
            'users' => 'UserController',
        ]);
    }
}
