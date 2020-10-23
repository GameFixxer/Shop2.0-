<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Homepage extends AbstractController
{
    /**
     * @Route("/")
     * @return Response;
     */

    public function home()
    {
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/question/{wildcard}")
     * @param string $wildcard
     * @return Response
     */
    public function show(string $wildcard)
    {
        $answers = [
            'writing a hundred times what to do',
            'wasting countless hours in meetings wihout archiving anything',
            'drink even more coffee'
        ];
        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $wildcard)),
            'answers' => $answers
        ]);
    }
}
