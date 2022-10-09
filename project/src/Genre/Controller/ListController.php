<?php

declare(strict_types=1);

namespace App\Genre\Controller;

use App\Genre\Action\ListAction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class ListController extends AbstractController
{
    public function __invoke(ListAction $listAction): Response
    {
        $genres = $listAction();

        return $this->render('components/genre_sidebar.html.twig', [
            'genres' => $genres->getGenres()
        ]);
    }
}