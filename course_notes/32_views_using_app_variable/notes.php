<?php


/*
    Install security-bundle:

         composer require symfony/security-bundle

         in the twig template:

                {{app.request.get('param')}}


                we can access app.request.get method to fetch a URL param

                in the url do ?param=test (and the line     {{app.request.get('param')}} will print test on the screen)

                we can allso access:


                    {{app.environment}};
                    {{ app.session}};


*/