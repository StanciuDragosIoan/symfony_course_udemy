<?php
/*
    Services are php classes that do useful stuff

    Some are built into symfony and some we can create us

    When executing index.php these classes are stored in the service cotnainer

    The Service Container is a php class that holds all the services

    e.g services (mailer, DB operations + our own services)

    if we create a php class in the 'src' class with the respective namespace, it gets added to 
    the container and becomes available through our app as a service

    In order to use a service from the container we need to autowire it (inject it as a dependency)
        this dependency injection is called 'autowiring' in symfony

        the service is passed in a controller method as an argument (method injection)
            we don't have to isntantiate the service manually (Symfony will do this automatically)

    


        created a $gifts array in the index() method

        shuffled the gifts with the php shuffle() method

        added the $gifts as argument in the twig array for data passed to the template

        in the template added the gift to each user in the iteration as:
                 {{ user.name }} - you won {{ random_gift[loop.index0] }}

        now each time we refresh the gifts change order randomly


        moved all this logic in a service

            created a folder 'Services' in src

            created a GiftsService class and moved the code for gifts in it as per below:

                 

                namespace App\Services;

                class GiftsService
                {
                    public $gifts = ['flowers', 'car', 'piano', 'money'];

                    public function __construct(){
                        shuffle($this->gifts);
                    }
                    
                }

                *note we put the shuffle() call in the constructor

            back in the index() method of the DefaultController we passed the service as argument 
            to index() and typehinted it->  index(GiftsService $gifts)

            and to the array for twig we replaced $gifts with $gifts->gifts (in order to access the 
            original $gifts array which is now a property of the GiftsService  class instance)

            now the code works as before and do NOTE that we did not have to manually instantiate the
            service class in order to use it (this is autowiring)


*/