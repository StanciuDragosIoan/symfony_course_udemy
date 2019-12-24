<?php

/*  
    Embedding controllers in views
    

    created a mostPopularPosts() method in DefaultController 
        method is under the route /home2"

        created the method's twig template


        then inside indexExtra.html.twig added:

        //this calls the render method on a Controller method
            {{render(controller(
                'App\\Controller\\DefaultController::mostPopularPosts',
                { 'number' : 5}
            ))}}

*/