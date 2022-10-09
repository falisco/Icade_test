<?php

declare(strict_types=1);

namespace App\Movie\Model;

class MovieVideo
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var MovieVideoResults[]
     */
    protected $results;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return MovieVideoResults[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param MovieVideoResults[] $results
     */
    public function setResults(array $results): void
    {
        $this->results = $results;
    }
}