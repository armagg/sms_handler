<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    public function number($max_number)
    {
        return $this->render(
            'lucky_number.twig',
            [
                'number' => random_int(0, $max_number)
            ]
        );
    }

}