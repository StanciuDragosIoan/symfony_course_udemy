<?php

/*
    Installing webpack encore 

        composer require symfony/webpack-encore-bundle

        yarn install


        If you are using Symfony Flex, this will install and enable the WebpackEncoreBundle, 
        create the assets/ directory, add a webpack.config.js file, and add node_modules/ 
        to .gitignore.

        check for how to set up project:

                https://symfony.com/doc/current/frontend/encore/simple-example.html


        added JQ in twig:

        in assets/js/app.js added: 
                                    const $ = require('jquery');

        ran  yarn add jquery --save

        add these 2 lines to the app.js in (assets/js/app.js) to add jq:

            
            const $ = require('jquery');
            global.$ = global.jQuery = $;  //this line makes it so that we can use JQ in twig

        run 
            yarn encore dev (to recompile)

            other options to compile:
                                        yarn encore dev --watch (keeps watching without need to recompile)
                                        
                                        yarn encore production (creates production build)
*/