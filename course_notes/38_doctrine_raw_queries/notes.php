<?php

/*
    executed raw queries Doctrine;

*/
        /**
          * @Route("/doctrine-raw-queries", name="doctrine-raw-queries")
          */
          public function doctrineRawQueries(Request $request)
          {
              $entityManager = $this->getDoctrine()->getManager();
  
              $conn = $entityManager->getConnection();
  
              $sql = '
                  SELECT * from user u
                  WHERE u.id < :id
              ';  
  
              $stmt = $conn->prepare($sql);
              //execute statement with 3 as :id param
              $stmt->execute(['id' => '3']);
  
              dump($stmt->fetchAll());
  
              return $this->render('default/defaultTemplate.html.twig', 
                  ['controller_name' => 'DefaultController']
              );
  
          }
  

