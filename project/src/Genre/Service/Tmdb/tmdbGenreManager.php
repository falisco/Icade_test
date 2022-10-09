<?php

declare(strict_types=1);

namespace App\Genre\Service\Tmdb;

use App\Common\Service\Tmdb\tmdbManager;
use App\Genre\Model\GenreList;

final class tmdbGenreManager extends tmdbManager
{
    /**
     * Return genres list for movies
     *
     * @return GenreList
     */
    public function listGenreMovie(): GenreList
    {
        $data = $this->get('3/genre/movie/list', []);

        /** @var GenreList $genres */
        $genres = $this->deserialize($data, GenreList::class);

        return $genres;
    }
}