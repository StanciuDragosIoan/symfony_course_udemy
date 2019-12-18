<?php


/*
    MORE features about controllers


        # how to generate URL inside a controller:

                / **
                 * @Route("generate-url/{param?}", name="generate_url")
                 * /
                 * 
                public function generate_url()
                {
                    exit($this->generateUrl(
                        'generate_url',  //route name
                        array('param'=> 10),  //optional parameter
                        UrlGeneratorInterface::ABSOLUTE_URL  //make url absolute (instead of generate-url/10 url 
                        will be: http://localhost:8000/generate-url/10)
                    ));
                }



        # download route: 

            in the DefaultController.php:

            define the route for download

            set the path

            return the file

                / **
                    * @Route("/download")
                    * /
                public function download()
                {
                    //set path to download from
                    $path = $this->getParameter('download_directory');

                    //download file
                    return $this->file($path.'test_sample_download.txt');
                }

        in the services.yaml in the params: section (define the directory from which the file is to be downloaded)

                parameters:

                    download_directory: '../public/'




        # redirections:

        we use 2 methods in the controller for that:


            / **
            * @Route("/redirect-test")
            * /

            public function redirectTest()
            {
                return $this->redirectToRoute('route_to_redirect', array('param'=> 10));
            }


            //method to redirect to
            

            / **
            * @Route("/url-to-redirect/{param?}", name="route_to_redirect")
            * /

            public function methodToRedirect()
            {
                exit('Test redirect method..');
            }



        # forwarding to controller method

             //method to forward from

    / **
     * @Route("forwarding-to-controller")
     * 
     * /

     public function forwardingToController()
     {
         $response = $this->forward(
             "App\Controller\DefaultController::methodToForwardTo",
             array("param" => 1)
         );

         return $response;
     }


      //method to forward to

      / **
       * @Route("/url-to-forward-to/{param?}", name="route_to_forward_to")
       * /

       public function methodToForwardTo($param)
       {    
            exit("TEst controlelr forwarding - ".$param);
       }






*/