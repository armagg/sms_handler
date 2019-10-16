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
        $task->setTask('khoondan baghi symfony');
        $task->setDueDate(new DateTime('now'));


        $form = $this->createForm(TaskType::class, $task);

        return $this->render(
            'task/newTask.twig',
            [
                'form' => $form->createView()
            ]
        );

    }

}