<?php

declare(strict_types=1);

namespace App\Movie\Controller;

use App\Movie\Action\WithGenreAction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class WithGenreController extends AbstractController
{
    /**
     * @Route("/genre", name="app_movie_genre")
     */
    public function __invoke(Request $request, WithGenreAction $withGenreAction): Response
    {
        $queryParams = $request->query->all();

        $movies = $withGenreAction($queryParams);

        return $this->render('components/movies.html.twig', [
            'movies' => $movies->getResults()
        ]);
    }
}