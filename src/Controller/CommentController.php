<?php

namespace App\Controller;

use App\Entity\UserEntity;
use App\Entity\CommentEntity;
use Symfony\Component\Form\Extension\Core\Type\{SubmitType, TextType};
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommentController extends Controller
{
    /**
     * @Route("/comment", name="comment")
     */
    public function newComment()
    {
        $comment = new CommentEntity();

        $form = $this ->createFormBuilder($comment)
            ->add('content', TextType::class)
            ->add('user', EntityType::class, [
        'class'=> UserEntity::class,
        ])
        ->add('save',SubmitType::class)
        ->getForm();




        return $this->render('comment/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
