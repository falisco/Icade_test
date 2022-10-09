<?php

declare(strict_types=1);

namespace App\Genre\Action;

use App\Genre\Model\GenreList;
use App\Genre\Service\Tmdb\tmdbGenreManager;

final class ListAction
{
    public function __construct(
        private tmdbGenreManager $tmdbManager
    )
    {
    }

    public function __invoke(): GenreList
    {
        return $this->tmdbManager->listGenreMovie();
    }
}