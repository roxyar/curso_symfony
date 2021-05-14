<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


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


    /**
     * @Route("/login", name="default")
     * 
     */
    public function login()
    {
        return $this->render('login.html.twig', [
           
        ]);
    }
  /**
     * @Route("/login/usuario", name="validaUsuarioRest", methods={"POST"})
     * 
     */
    public function validaRest(Request $request)
    {
        $email= $request->request->get("email");  
        $password=$request->request->get("pass"); 
        //me falta llamar a la Api. con email y password


        dd($email);

        
    }






}
