<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/page/{page}', name: 'app_page', requirements: ['page' => '\d+'])]
    public function index(int $page): Response
    {
        $anotherPage= rand();
        return $this->render('page/index.html.twig', [
            'page' => $page,
            'anotherPage' => $anotherPage
        ]);
    }

    #[Route('/blog/{page}', name: 'app_page_blog')]

    public function indexBlog(int|string $page): Response
    {
        $anotherPage= rand();
        return $this->render('page/index.html.twig', [
            'page' => $page,
            'anotherPage' => $anotherPage
        ]);
    }
}

