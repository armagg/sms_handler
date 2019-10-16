<?php


namespace App\Controller;


use App\Entity\Task;
use App\Form\TaskType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends AbstractController
{
    public function new(Request $request)
    {
        $task = new Task();

        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            /**saved the data from the form:)))
             * now still i cant do this
             * @todo for after learning doctrine
            **/
            return $this->redirect('task_success');
        }

        $task->setTask('khoondan baghi symfony');
        $task->setDueDate(new DateTime('now'));

        return $this->render(
            'task/newTask.twig',
            [
                'form' => $form->createView()
            ]
        );

    }

}