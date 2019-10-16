<?php


namespace App\Entity;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Mapping\ClassMetadata;


use DateTime;

class Task
{
    protected $task;
    protected $dueDate;

    public static function loadValidatorMetaData(ClassMetadata $classMetadata)
    {
        $classMetadata->addPropertyConstraints(
            [
                'task' => new NotBlank(),
                'dueDate' => new NotBlank()
            ]
        );
    }
    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate(DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }

}