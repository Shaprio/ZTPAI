<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class  Controller extends AbstractController
{
    public function __construct(
        private ArticleRepository $articleRepository
    )
    {

    }
    #[Route('/article', 'blog-articles')]
    public function mainPage(): Response
    {
        $articles = $this->articleRepository->findAll();

        $parameters = [
            'articles' => $articles,
        ];


        return $this->render('articles.html.twig', $parameters);
    }
}
