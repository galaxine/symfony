<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Name;
use Doctrine\ORM\EntityManagerInterface;

class NameController extends AbstractController
{
    /**
     * @Route("/name", name="create_name")
     */
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $name = new Name();

        $name->setFirstName('Serdar');
        $name->setLastName('Oezdemir');
        $name->setJob('Bum');

        $entityManager->persist($product);

        $entityManager->flush();

        return new Response('following person'.$product->getFirstName().' was saved with id '.$product->getId());
    }
}
