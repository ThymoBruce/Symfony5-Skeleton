<?php

namespace App\Controller;

class DefaultController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public function __construct()
    {

    }

    public function index()
    {

        return $this->render('/Pages/index.html.twig', [

        ]);
    }
}