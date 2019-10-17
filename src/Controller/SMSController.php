<?php

namespace App\Controller;

use App\Entity\SMS;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SMSController extends AbstractController
{
    /**
     * @Route("/SMSs", name="SMSs")
     */
    public function index()
    {
        return $this->render('sms/index.html.twig', [
            'controller_name' => 'SMSController',
        ]);
    }

    /**
     * @Route("/create_SMS", name="create_sms")
     */
    public function createProduct(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository(SMS::class);
        $repo->findAll();
        $repo->findBy(
            [
                'senderNumber' => '09371083919',
                'receiverNumber' => '09371083919'
            ]
        );
        $SMS = new SMS();
        $SMS->setTitle('my first title for sms');
        $SMS->setSenderNumber('09371083919');
        $SMS->setReceiverNumber('09121198586');
        $SMS->setText('hahahahah Are man daram minevisam');
        $entityManager->persist($SMS);
        // literally like Supernova
        $entityManager->flush();

        return new Response('Saved new SMS with id '.$SMS->getId());
    }
}
