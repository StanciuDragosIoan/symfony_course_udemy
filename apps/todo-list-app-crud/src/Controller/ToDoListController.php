<?php

namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListController extends AbstractController
{
    /**
     * @Route("/", name="to_do_list")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }



     /**
     * @Route("/create", name="create_task", methods={"POST"})
     */
    public function create(Request $request)
    {

        $title = trim($request->request->get('title'));

        if(empty($title)){
            return $this->redirectToRoute('to_do_list');
        } else {
            exit($title);
        }

        $entityManager = $this->getDoctrine->getManager();

        $task = new Task();

        $task->setTitle($title);
        //prepare
        $entityManager->persist($task);
    
        //execute
        $entityManager->flush();

        

        return $this->redirectToRoute('to_do_list');
    
    }


    /**
     * @Route("/switch-status/{id}", name="switch_status")
     */
    public function switchStatus($id)
    {   
         
        exit('todo: switch the status of a taks with the id ' . $id);
    }


    /**
     * @Route("/delete/{id}", name="task_delete")
     */
    public function delete($id)
    {   
         
        exit('todo: delete a taks with the id ' . $id);
    }
}
