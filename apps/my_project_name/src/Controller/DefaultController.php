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
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class DefaultController extends AbstractController
{   

    public function __construct(GiftsService $gifts, $logger)
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
        


        //handle exception
        // if($users)
        // {
        //     throw $this->createNotFoundException('users not found...');
        // }

        //get request data
        // exit($request->query->get('page', 'default'));

        //get server data
        // exit($request->server->get('HTTP_HOST'));
        // $request->isXmlHttpRequest();//check whether the request is ajax or not
        // $request->request->get('page'); //get post data
        // $request->file->get('foo'); //get the 'foo' uploaded file

        //create session
        // $session->set('name', 'session value');

        //clear session
        // $session->remove('name');



        //clears the entire session data not only a specific entry with a give name
        // $session->clear();  

        //check for session data and display it if it exists
        // if($session->has('name'))
        // {
        //     exit($session->get('name'));
        // }
       

        //the 2 lines below have been moved to the GiftsService;
        // $gifts = ['flowers', 'car', 'piano', 'money'];

        // shuffle($gifts);
        
       
        // Flash Mesages

        //display only 1 flash
        // $this->addFlash(
        //     'notice',
        //     'Your Changes were saved'
        // );


        //display all flashes
        // $this->addFlash(
        //     'warning',
        //     'Your Changes were saved'
        // );

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


    /**
     * @Route("generate-url/{param?}", name="generate_url")
     */
    public function generate_url()
    {
        exit($this->generateUrl(
            'generate_url',
            array('param'=> 10),
            UrlGeneratorInterface::ABSOLUTE_URL
        ));
    }

    /**
     * @Route("/download")
     */
    public function download()
    {   
        //set path to download from
        $path = $this->getParameter('download_directory');
        //download file
        return $this->file($path.'test_sample_download.txt');
    }



    //method to redirect

    /**
     * @Route("/redirect-test")
     */

     public function redirectTest()
     {
        return $this->redirectToRoute('route_to_redirect', array('param'=> 10));
     }


     //method to redirect to
    


    /**
     * @Route("/url-to-redirect/{param?}", name="route_to_redirect")
     */

    public function methodToRedirect()
    {
        exit('Test redirect method..');
    }



    //method to forward from

    /**
     * @Route("forwarding-to-controller")
     * 
     */

     public function forwardingToController()
     {
         $response = $this->forward(
             "App\Controller\DefaultController::methodToForwardTo",
             array("param" => 1)
         );

         return $response;
     }


      //method to forward to

      /**
       * @Route("/url-to-forward-to/{param?}", name="route_to_forward_to")
       */

       public function methodToForwardTo($param)
       {    
            exit("TEst controlelr forwarding - ".$param);
       }


       /**
        * @Route("/page", name="default")
        */
       public function twigExtra(Request $request)
       {
        //fetch users from DB 
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('default/indexExtra.html.twig', [
            'controller_name' => 'DefaultController',
            'users' => $users
        ]);
       }


       /**
        * @Route("/home", name="home")
        */
        public function home22(Request $request)
        {
         //fetch users from DB 
         $users = $this->getDoctrine()->getRepository(User::class)->findAll();
         return $this->render('default/indexExtra.html.twig', [
             'controller_name' => 'DefaultController',
             'users' => $users
         ]);
        }


           /**
        * @Route("/home2", name="home2")
        */
        public function home5(Request $request)
        {


         //get entity manager who'll save data into the DB
         $entityManager = $this->getDoctrine()->getManager();   

         //create new user
         $user = new User();
         $user->setName('Robert_test_create');

         //prepare data to be saved into the DB
         $entityManager->persist($user);

         //save data into DB
         $entityManager->flush();

         //test if data saved
         dump('A new user was saved with the id of ' . $user->getId());


       
         //fetch users from DB   
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
         
        //read data from doctrine
        $repository = $this->getDoctrine()->getRepository(User::class);
                    //search by id
         $user2 = $repository->find(6);
            //search by a certain table column
         $user2 =  $repository->findOneBy(["name" => "name - 0"]);
        // dump($user2);

         //search by descending id (multiple records)
         $user2 =  $repository->findBy(["name" => "Robert_test_create"], ["id" => "DESC"]);
         dump($user2);
         die();
         
         return $this->render('default/indexExtra.html.twig',[
             'controller_name' => 'test'
         ] );

        }

       

        public function mostPopularPosts($number = 3){
            //query DB

            $posts = ['post 1', 'post 2', 'post 3', 'post 4'];

            return $this->render('default/posts.html.twig', [
                'posts' => $posts
            ]);
        }


        // public function




       /**
        * @Route("/test-jq", name="home")
        */
        public function home2(Request $request)
        {
         //fetch users from DB 
         $users = $this->getDoctrine()->getRepository(User::class)->findAll();
         return $this->render('default/index-jq.html.twig');
        }


}
