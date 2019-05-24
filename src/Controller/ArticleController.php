<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
}