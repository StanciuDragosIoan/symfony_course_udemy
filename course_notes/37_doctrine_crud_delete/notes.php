<?php

/*  
    Doctrine crud delete

      //find user and delete
        $id = 2;
        $user = $entityManager->getRepository(User::class)->find($id);

        $entityManager->renove($user);
        $entityManager->flush();
         dump($user); //this will throw error as user in line 8 does not exist anymore
*/