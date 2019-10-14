<?php


namespace App\Controller;


use App\Entity\Task;
use DateTime;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends AbstractController
{
    public function new(Request $request)
    {
        $task = new Task();
        $task->setTask('khoondan baghi symfony');
        $task->setDueDate(new DateTime('now'));


        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, ['label' => 'Create new Task'])
            ->getForm();
    }

}