<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use App\Services\GiftsService;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class DefaultController extends AbstractController
{   

    public function __construct(GiftsService $gifts)
    {   
        //note if we leave the line below uncommented it mutates the $gifts
        // $gifts->gifts = ['a', 'b', 'c', 'd'];
    }

    /**
     * @Route("/default", name="default")
     */
    public function index(GiftsService $gifts, Request $request, SessionInterface $session)
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
        // exit($request->cookies->get('PHPSESSID'));
        

        //create session
        $session->set('name', 'session value');

        //clear session
        $session->remove('name');



        //clears the entire session data not only a specific entry with a give name
        // $session->clear();  

        //check for session data and display it if it exists
        if($session->has('name'))
        {
            exit($session->get('name'));
        }
       

        //the 2 lines below have been moved to the GiftsService;
        // $gifts = ['flowers', 'car', 'piano', 'money'];

        // shuffle($gifts);
        
       
        // Flash Mesages

        //display only 1 flash
        $this->addFlash(
            'notice',
            'Your Changes were saved'
        );


        //display all flashes
        $this->addFlash(
            'warning',
            'Your Changes were saved'
        );

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'users' => $users,
            'random_gift' => $gifts->gifts
        ]);

        

         //create cookie
        //  $cookie = new Cookie(
        //     'my_cookie',  //name
        //     'cookie value',  //value
        //     time() + (2*365*24*60*60)  //expiration time (after 2 yrs in this case)
        // );

        // create new response, attach cookie to headers and send response to browser
        // $res =  new Response();
        // $res->headers->setCookie($cookie);
        // $res->send();


        //remove cookie
        // $res = new Response();
        // $res->headers->clearCookie('my_cookie');
        // $res->send();

      

     


      

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



    //note the route below uses a regexp to force us to provide a number for page parameter in the route 
    //also note that the page parameter is optional (because of the ?)
    /**
     * @Route("/blog/{page?}", name="blog_list", requirements={"page"="\d+"})
     */
    public function index2()
    {
        return new Response("Optional parameters in URL and requirements for parameters");
    }


    //route with 4 dynamic params (and default values for some of them)

    /**
     * @Route(
     *      "/articles/{_locale}/{year}/{slug}/{category}",
     *      defaults={"category": "computers"},
     *      requirements={
     *          "_locale": "en|fr",
     *          "category": "computers|rtv",
     *          "year":"\d+"
     *      }
     *  )
     */


     //http://localhost:8000/articles/en/2019/test-slug/computers
    public function index3()
    {
        return new Response("Multiple optional params + defaults for them");
    }



  
    //random route defined with 2 possibilities
    // //  * @Route({
    // //  *      "/languages",
    // //  *      "/languages2",
    // //  *      
    // //  *      }, name="languages")
   
    // //  */
    // public function index4()
    // {   
         
    //     return new Response("Translated Routes");
         
    // }


    

     /**
     * @Route({
     *      "nl": "/over-ons",
     *       "en": "/about-us"
     * }, name="about_us")
     */

 
    public function index4()
    {
        return new Response('Translated routes');
    }
    

}
