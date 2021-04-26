<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class homeController extends AbstractController
{
   
    /**
     * @Route("/home", name="default")
     * 
     */
    public function index()
    {
        return $this->render('home/ejercicio2.html.twig', [
            'param' => 10,
        ]);
    }






}
