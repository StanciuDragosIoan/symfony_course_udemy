<?php
/*
    Doctrine CRUD - create

    will use the /home2 route to test tis

    will learn how to perform the create operation onto the DB with Doctrine

    performed the create operation through the DefaultController.php

        @code:


              //get entity manager who'll save data into the DB
         $entityManager = $this->getDoctrine()->getManager();   

         //create new user
         $user = new User();
         $user->setName('Robert_test_create');

         //prepare data to be saved into the DB
         $entityManager->persist($user);

         //save data into DB
         $entityManager->flush();

         //test if data saved
         dump('A new user was saved with the id of ' . $user->getId());

    Performed the same action via the fixture file (AppFixtures.php)

        in order to use data fixtures first we need to install the orm fixtures package
        first
            composer require orm-fixtures --dev

        deleted DB

        created new migration

        executed it

        ran cmd to load fixtures:

        ./bin/console doctrine:fixtures:load


*/