<?php

declare(strict_types=1);

namespace App\Movie\Controller;

use App\Movie\Action\DetailsAction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DetailsController extends AbstractController
{
    /**
     * @Route("/movie/{id}", name="app_movie_details")
     */
    public function __invoke(string $id, DetailsAction $detailsAction): Response
    {
        $details = $detailsAction($id);

        return $this->render('components/details.html.twig', [
            'details' => $details
        ]);
    }

}