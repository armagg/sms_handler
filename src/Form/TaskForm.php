<?php


namespace App\Form;


use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskForm extends AbstractType
{
    public function BuildForm(FormBuilderInterface $builder, array $option)
    {
        $builder
            ->add('task', TextType::class)
            ->add('DueDate', DateType::class)
            ->add('save', SubmitType::class);
    }

}