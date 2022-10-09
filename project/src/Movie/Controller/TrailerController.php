<?php

namespace App\Movie\Controller;


use App\Movie\Action\TrailerAction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class TrailerController extends AbstractController
{
    public function __invoke(string $id, TrailerAction $trailerAction): Response
    {
        $video = $trailerAction($id);

        return $this->render('components/trailer.html.twig', [
            'video' => $video
        ]);
    }
}