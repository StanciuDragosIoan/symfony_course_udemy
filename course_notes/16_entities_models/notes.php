<?php

/*
    Entities and models

        created sql db

        created an entity

        ./bin/console make:entity to create entity (provide name + then fields)

            this creates the entity and the repository
                e.g I would use userRepository to select all users from the DB

            next I provide the names of the fields + value + defaults



        added the code to maniulate entities instances (create them, set a name and save to the DB)

            got an error as table does not exist

        we need to create a migration (to create the table) 

            ./bin/console make:migration

        we need to execute the migration
            ./bin/console doctrine:migrations:migrate

        this is how we fetch all users from DB:
                 //fetch users from DB 
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

            in the twig tempalte we render user.name (not only user as before as user is now an object)
*/