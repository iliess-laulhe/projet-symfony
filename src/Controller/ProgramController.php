<?php

// src/Controller/ProgramController.php
namespace App\Controller;

use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/program", name="program_")
 */

class ProgramController extends AbstractController
{
    public function index(): Response
        /**
         * @Route("/", name="index")
         */
    {
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }
  /**
    *@Route("/{id}", requirements={"id"="\d+"}, methods={"GET"}, name="program_show")
   */

    public function show(int $id): Response{

        return $this->render( 'program/show.html.twig', [
            'id'=> $id,
        ]);
    }

}