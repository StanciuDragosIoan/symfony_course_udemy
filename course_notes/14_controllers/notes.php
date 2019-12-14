<?php

/*
    a controller is a function that we create that reads information from the request
    object and returns a response object

    in order to view the result of a controller we need to map a URL to it via a route

    the render method takes 2 args:
        1st arg mandatory (the name of the view)
        2nd arg not mandatory (an array in which we have a key which is available 
        in our view as a variable in the twig template)

    the controller can also return a JSON object via the json method
*/