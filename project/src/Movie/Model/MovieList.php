<?php

declare(strict_types=1);

namespace App\Movie\Model;

class MovieList
{
    /**
     * @var int
     */
    protected $page;

    /**
     * @var MovieListResults[]
     */
    protected $results;

    /**
     * @var int
     */
    protected $totalResults;

    /**
     * @var int
     */
    protected $totalPages;

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return MovieListResults[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param MovieListResults[] $results
     */
    public function setResults(array $results): void
    {
        $this->results = $results;
    }

    /**
     * @return int
     */
    public function getTotalResults(): int
    {
        return $this->totalResults;
    }

    /**
     * @param int $totalResults
     */
    public function setTotalResults(int $totalResults): void
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    /**
     * @param int $totalPages
     */
    public function setTotalPages(int $totalPages): void
    {
        $this->totalPages = $totalPages;
    }
}