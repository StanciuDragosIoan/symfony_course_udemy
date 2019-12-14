<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {   
        // $users = [ 'Adam', 'Robert', 'John', 'Jack'];


        //create users and add the to DB
        // $entityManager = $this->getDoctrine()->getManager();

        // $user = new User();
        // $user->setName('Adam');

        // $user2 = new User();
        // $user2->setName('Robert');

        // $user3 = new User();
        // $user3->setName('John');

        // $user4 = new User();
        // $user4->setName('Susan');
        // //prepare to save to DB
        // $entityManager->persist($user);
        // $entityManager->persist($user2);
        // $entityManager->persist($user3);
        // $entityManager->persist($user4);
        // //save to DB
        // $entityManager->flush();


        //fetch users from DB 
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        
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
