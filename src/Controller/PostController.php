<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PostController extends AbstractController
{
    #[Route('/post/{id}', name: 'app_post')]
    public function index(int $id): Response
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $sentence = "Lorem ipsum dolor sit amet consectetur";
        $ite= rand(1, 20);
        return $this->render('post/index.html.twig', [
            'ite' => $ite,
            'id' => $id,
            'sentence' => $sentence,
            'array' => $array
        ]);
    }
}
