<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {   
        $users = [ 'Adam', 'Robert', 'John', 'Jack'];

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'users' => $users
        ]);


        //return JSON
        // return $this->json(
        //     ['name' => 'test']
        // );


        //return php response
        // return new Response('test');


        //return URL param
        // return new Response("Hello, $name");


        //redirect to diff page
        //  return $this->redirect('https://symfony.com');
       //  return $this->redirectToRoute("default2");

    }


    /**
     * @Route("/default2/", name="default2")
     */
    public function index2()
    {
        return new Response("I am from default 2 route");
    }
}
