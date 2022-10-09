<?php

declare(strict_types=1);

namespace App\Genre\Model;

class GenreList
{
    /**
     * @var Genre[]
     */
    protected $genres;

    /**
     * @return Genre[]
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @param Genre[] $genres
     */
    public function setGenres(array $genres): void
    {
        $this->genres = $genres;
    }
}