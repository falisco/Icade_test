<?php

declare(strict_types=1);

namespace App\Movie\Controller;

use App\Movie\Action\SearchAction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="app_movie_search")
     */
    public function __invoke(Request $request, SearchAction $searchAction): Response
    {
        $queryParams = $request->query->all();

        $movies = $searchAction($queryParams);

        return $this->render('search.html.twig', [
            'movies' => $movies->getResults()
        ]);
    }
}