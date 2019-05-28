<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     * @throws \InvalidArgumentException
     */
    public function homepage ()
    {
        return new Response( "First page on Symfony" );
    }

    /**
     * @Route("/test/{testvar}")
     * @param $testvar
     * @return Response
     * @throws \InvalidArgumentException
     */
    public function test ( $testvar )
    {
        return new Response( "Here it is: $testvar" );
    }

    /**
     * @Route("/show/{testvar}")
     * @param $testvar
     *
     * @return Response
     * @throws \LogicException
     */
    public function show ( $testvar )
    {
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];

        return $this->render( 'article/show.html.twig', [
            'title' => ucwords( str_replace( '-', ' ', $testvar ) ),
            'comments' => $comments,
        ] );
    }
}