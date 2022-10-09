<?php

namespace App\Movie\Model;

class MovieDetailsProductionCountries
{
    /**
     * @var string
     */
    protected $iso31661;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getIso31661(): string
    {
        return $this->iso31661;
    }

    /**
     * @param string $iso31661
     */
    public function setIso31661(string $iso31661): void
    {
        $this->iso31661 = $iso31661;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}