<?php

/*
    Read data from Doctrine

    //we use the repository methods 

     //read data from doctrine
        $repository = $this->getDoctrine()->getRepository(User::class);



        //find 1 record


        //search by id
         $user2 = $repository->find(6);
         dump($user2);
         die();

          //search by a certain table column
         $user2 =  $repository->findOneBy(["name" => "name - 0"]);
         dump($user2);
         die();




         //find multiple records

              //search by descending id (multiple records)
         $user2 =  $repository->findBy(["name" => "Robert_test_create"], ["id" => "DESC"]);
         dump($user2);
         die();

         findAll(); finds all the records in the Db


   

*/