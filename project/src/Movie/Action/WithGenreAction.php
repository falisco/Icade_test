<?php

declare(strict_types=1);

namespace App\Movie\Action;

use App\Movie\Model\MovieList;
use App\Movie\Service\Tmdb\tmdbMovieManager;

final class WithGenreAction
{
    public function __construct(
        private tmdbMovieManager $tmdbManager
    )
    {
    }

    public function __invoke(array $queryParams): MovieList
    {
        $ids = $queryParams['ids'] ?? '';

        if (!empty($queryParams['page'])) {
            return $this->tmdbManager->withGenreMovie($ids, $queryParams['page']);
        }

        return $this->tmdbManager->withGenreMovie($ids);
    }
}