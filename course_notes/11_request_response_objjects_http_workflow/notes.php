<?php

/*
    1. a user makes an action in a browser 

    2. the browser sends a request to symfony server

    3. symfony creates a request object that contains data set by the user (form data, url params, etc...)

    4. symfony generates a response object based on the data of the request object

    5. symfony server sends back to the browser the response 

    6. the browser displays the response to the user



    MVC in symfony

    Routes - map URLs to controller methods (defined as annotations or in routes.yaml)

    Controllers - call entities and load views (src/Controller) - C

    Entities - communicate with the database  (src/Entity)  - M

    Views - html templates made with twig (templates/viewname.html.twig) - V
*/