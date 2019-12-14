<?php

/*
    ./bin/console debug:container 
    (cmd that shows us all available services)

    ./bin/console debug:autowiring  (shows all services that can be 
    used with autowiring)

    will have my GiftsService use the logger service from symfony

        composer require logger

    passed the logger as dependency to the GiftsService constructor method
    and used it before shuffle() call (this creates the dev.log file in var/log
    on each request on the page)

     $logger->info('Gifts were randomized..');

    Note that in order to use a service in another service I need to pass it in the
    constructor (cannot do it inside another method apart from the constructor)

    Only in a controller in Symfony I can use a service by passing it to any method (not
    only to the constructor)

*/