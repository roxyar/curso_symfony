<?php

namespace App\Controller\ApiController;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
//use App\Extensions\UsuarioUtilitiesTrait;
use App\Entity\Usuario;


/**
 * @Rest\Route("api/usuario")
 */

class UsuarioController extends AbstractFOSRestController{

  //  use UsuarioUtilitiesTrait;


    /**
     * @Rest\Get("/valida",name="valida_usuario")
     * @return Response
     */
    public function validaUsuario(Request $request){

     $email= $request->request->get("email");  
     $password=$request->request->get("pass"); 
     $em = $this->getDoctrine()->getManager();
     
     $query=['email'=>$email,"pass"=>$password];
     $datosUsuario=$em->getRepository(usuario::class)->findBy($query);


    
        return $this->handleView($this->view($datosUsuario,200));
    } 


}

