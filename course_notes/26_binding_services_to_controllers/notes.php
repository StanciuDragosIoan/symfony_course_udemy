<?php
/*

    Binding services to controllers

        we bind services to a controller in the services.yaml file (in config directory)

        bind the service to a controller at the bottom of services.yaml file as per below:

        *keep in mind the tabbing for the .yaml

        App\Controller\DefaultController:
            bind: 
                $logger: '@monolog.logger.doctrine'
                

        Next inject the service in the constructor of the controller class so as 
        it becomes available throughout the class

        *in the constructor pass it as a simple argune ($logger in this case) without typehinting the class
        *also the service can be used without instantiation
*/