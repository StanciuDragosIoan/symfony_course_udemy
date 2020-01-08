<?php


/*
    Doctrine crud update

    used the /home2 route


    code:

    
    //define id, find user by id and change its name
         $id = 1;
         $user = $entityManager->getRepository(User::class)->find($id);
 
         if (!$user)
         {
             throw $this->createNotFoundException(
                 'No user found for id '.$id
             );
         }
         $user->setName('New user name!');
         $entityManager->flush();

*/