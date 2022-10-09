<?php

declare(strict_types=1);

namespace App\Movie\Service\Tmdb;

use App\Common\Service\Tmdb\tmdbManager;
use App\Movie\Model\MovieDetails;
use App\Movie\Model\MovieList;
use App\Movie\Model\MovieVideo;

final class tmdbMovieManager extends tmdbManager
{
    /**
     * Get movie details
     *
     * @param string $id
     *
     * @return MovieDetails
     */
    public function detailsMovie(string $id): MovieDetails
    {
        $data = $this->get(sprintf('3/movie/%s', $id), []);

        /** @var MovieDetails $videos */
        $videos = $this->deserialize($data, MovieDetails::class);

        return $videos;
    }

    /**
     * Get movie videos
     *
     * @param string $id
     *
     * @return MovieVideo
     */
    public function videosMovie(string $id): MovieVideo
    {
        $data = $this->get(sprintf('3/movie/%s/videos', $id), []);

        /** @var MovieVideo $videos */
        $videos = $this->deserialize($data, MovieVideo::class);

        return $videos;
    }

    /**
     * Get movies by genre
     *
     * @param string $page Page number
     *
     * @return MovieList
     */
    public function withGenreMovie(string $ids, string $page = '1'): MovieList
    {
        $data = $this->get('3/discover/movie', [
            'query' => [
                'with_genres' => $ids,
                'page' => $page
            ]
        ]);

        /** @var MovieList $movies */
        $movies = $this->deserialize($data, MovieList::class);

        return $movies;
    }

    /**
     * Search for a movie with keywords
     *
     * @param string $query Keywords for search
     * @param string $page Page number
     *
     * @return MovieList
     */
    public function searchMovie(string $query, string $page = '1'): MovieList
    {
        $data = $this->get('3/search/movie', [
            'query' => [
                'query' => $query,
                'page' => $page
            ]
        ]);

        /** @var MovieList $movies */
        $movies = $this->deserialize($data, MovieList::class);

        return $movies;
    }
}