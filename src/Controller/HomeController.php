<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

private $articles = [
    1 => [
    'title' => 'ARTICLE 1',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQMiF_QYKvu_SgiciSMJ7AwfSOl7I_VLJAC_23h9X102-sKZP_3',
    'published' => true
    ],
    2 => [
    'title' => 'ARTICLE 2',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQMiF_QYKvu_SgiciSMJ7AwfSOl7I_VLJAC_23h9X102-sKZP_3',
    'published' => true
    ],
    3 => [
    'title' => 'ARTICLE 3',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQMiF_QYKvu_SgiciSMJ7AwfSOl7I_VLJAC_23h9X102-sKZP_3',
    'published' => false
    ],
    4 => [
    'title' => 'ARTICLE 4',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQMiF_QYKvu_SgiciSMJ7AwfSOl7I_VLJAC_23h9X102-sKZP_3',
    'published' => false
    ],
    5 => [
    'title' => 'ARTICLE 5',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQMiF_QYKvu_SgiciSMJ7AwfSOl7I_VLJAC_23h9X102-sKZP_3',
    'published' => true
    ],
    6 => [
    'title' => 'ARTICLE 6',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQMiF_QYKvu_SgiciSMJ7AwfSOl7I_VLJAC_23h9X102-sKZP_3',
    'published' => true
    ]
    ];

    /**
     * @Route("/", name="accueil")
     */
    public function accueil()
    {

        return $this->render('index.html.twig', [
            'articles' => $this->articles
        ]);

    }

    /**
     * @Route("article/{id}", name="article")
     */
    public function accueilArticle($id)
    {
        return $this->render('articles.html.twig', [
            'articles' => $this->articles [$id]
        ]);

    }
}
