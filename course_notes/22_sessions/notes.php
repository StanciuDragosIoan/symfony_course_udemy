<?php

/*
    Sessions



        Cookies point

            how to get data from Cookies

            we use Symfony\Component\HttpFoundation\Request;

                exit($request->cookies->get('PHPSESSID'));  //gets session id

            we can also use Symfony\Component\HttpFoundation\Session\SessionInterface;

            //get session id from cookies:
                exit($request->cookies->get('PHPSESSID'));



    //work with session
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
*/  