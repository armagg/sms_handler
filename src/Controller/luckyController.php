<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class luckyController extends AbstractController
{
    /**
     * @Route("/lucky_number")
     */
    public function number()
    {
        return $this->render(
            'lucky_number.twig',
            [
                'number' => random_int(0, 1000)
            ]
        );
    }

}