<?php
/*
    cookies

    how to create cookies in symfony;


    use Symfony\Component\HttpFoundation\Cookie;


     //create cookie
        //  $cookie = new Cookie(
        //     'my_cookie',  //name
        //     'cookie value',  //value
        //     time() + (2*365*24*60*60)  //expiration time (after 2 yrs in this case)
        // );

        //create new response, attach cookie to headers and send response to browser
        // $res =  new Response();
        // $res->headers->setCookie($cookie);
        // $res->send();


        //remove cookie
        // $res = new Response();
        // $res->headers->clearCookie('my_cookie');
        // $res->send();


*/