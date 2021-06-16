<?php

namespace App\Controller;

use App\Entity\News;
use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class NewsController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(Environment $twig, NewsRepository $newsRepository): Response
    {
        return new Response($twig->render('News/index.html.twig', [
              'news' => $newsRepository->findAll(),
        ]));
    }
}