<?php

declare(strict_types=1);

namespace App\Movie\Action;

use App\Movie\Model\MovieList;
use App\Movie\Service\Tmdb\tmdbMovieManager;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

final class SearchAction
{
    public function __construct(
        private tmdbMovieManager $tmdbManager
    )
    {
    }

    public function __invoke(array $queryParams): MovieList
    {
        if (empty($queryParams['query'])) {
            throw new BadRequestHttpException('Query must be provided !');
        }

        if(!empty($queryParams['page'])) {
            return $this->tmdbManager->searchMovie($queryParams['query'], $queryParams['page']);
        }

        return $this->tmdbManager->searchMovie($queryParams['query']);
    }
}