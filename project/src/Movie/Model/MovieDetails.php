<?php

namespace App\Movie\Model;

use App\Genre\Model\Genre;

class MovieDetails
{
    /**
     * @var bool
     */
    protected $adult;

    /**
     * @var string|null
     */
    protected $backdropPath;

    /**
     * @var MovieDetailsBelongsToCollection[]|null
     */
    protected $belongsToCollection;

    /**
     * @var integer
     */
    protected $budget;

    /**
     * @var Genre[]
     */
    protected $genres;

    /**
     * @var string|null
     */
    protected $homepage;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $imdbId;

    /**
     * @var string
     */
    protected $originalTitle;

    /**
     * @var string
     */
    protected $originalLanguage;

    /**
     * @var string|null
     */
    protected $overview;

    /**
     * @var float
     */
    protected $popularity;

    /**
     * @var string|null
     */
    protected $posterPath;

    /**
     * @var MovieDetailsProductionCompanies[]
     */
    protected $productionCompanies;

    /**
     * @var MovieDetailsProductionCountries[]
     */
    protected $productionCountries;

    /**
     * @var string
     */
    protected $releaseDate;

    /**
     * @var integer
     */
    protected $revenue;

    /**
     * @var integer|null
     */
    protected $runtime;

    /**
     * @var MovieDetailsSpokenLanguages[]
     */
    protected $spokenLanguages;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string|null
     */
    protected $tagline;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var bool
     */
    protected $video;

    /**
     * @var integer
     */
    protected $voteCount;


    /**
     * @var float
     */
    protected $voteAverage;

    /**
     * @return bool
     */
    public function isAdult(): bool
    {
        return $this->adult;
    }

    /**
     * @param bool $adult
     */
    public function setAdult(bool $adult): void
    {
        $this->adult = $adult;
    }

    /**
     * @return string|null
     */
    public function getBackdropPath(): ?string
    {
        return $this->backdropPath;
    }

    /**
     * @param string|null $backdropPath
     */
    public function setBackdropPath(?string $backdropPath): void
    {
        $this->backdropPath = $backdropPath;
    }

    /**
     * @return int
     */
    public function getBudget(): int
    {
        return $this->budget;
    }

    /**
     * @param int $budget
     */
    public function setBudget(int $budget): void
    {
        $this->budget = $budget;
    }

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

    /**
     * @return string|null
     */
    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    /**
     * @param string|null $homepage
     */
    public function setHomepage(?string $homepage): void
    {
        $this->homepage = $homepage;
    }

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
     * @return string|null
     */
    public function getImdbId(): ?string
    {
        return $this->imdbId;
    }

    /**
     * @param string|null $imdbId
     */
    public function setImdbId(?string $imdbId): void
    {
        $this->imdbId = $imdbId;
    }

    /**
     * @return string
     */
    public function getOriginalTitle(): string
    {
        return $this->originalTitle;
    }

    /**
     * @param string $originalTitle
     */
    public function setOriginalTitle(string $originalTitle): void
    {
        $this->originalTitle = $originalTitle;
    }

    /**
     * @return string
     */
    public function getOriginalLanguage(): string
    {
        return $this->originalLanguage;
    }

    /**
     * @param string $originalLanguage
     */
    public function setOriginalLanguage(string $originalLanguage): void
    {
        $this->originalLanguage = $originalLanguage;
    }

    /**
     * @return string|null
     */
    public function getOverview(): ?string
    {
        return $this->overview;
    }

    /**
     * @param string|null $overview
     */
    public function setOverview(?string $overview): void
    {
        $this->overview = $overview;
    }

    /**
     * @return float
     */
    public function getPopularity(): float
    {
        return $this->popularity;
    }

    /**
     * @param float $popularity
     */
    public function setPopularity(float $popularity): void
    {
        $this->popularity = $popularity;
    }

    /**
     * @return string|null
     */
    public function getPosterPath(): ?string
    {
        return $this->posterPath;
    }

    /**
     * @param string|null $posterPath
     */
    public function setPosterPath(?string $posterPath): void
    {
        $this->posterPath = $posterPath;
    }

    /**
     * @return MovieDetailsProductionCompanies[]
     */
    public function getProductionCompanies(): array
    {
        return $this->productionCompanies;
    }

    /**
     * @param MovieDetailsProductionCompanies[] $productionCompanies
     */
    public function setProductionCompanies(array $productionCompanies): void
    {
        $this->productionCompanies = $productionCompanies;
    }

    /**
     * @return MovieDetailsProductionCountries[]
     */
    public function getProductionCountries(): array
    {
        return $this->productionCountries;
    }

    /**
     * @param MovieDetailsProductionCountries[] $productionCountries
     */
    public function setProductionCountries(array $productionCountries): void
    {
        $this->productionCountries = $productionCountries;
    }

    /**
     * @return string
     */
    public function getReleaseDate(): string
    {
        return $this->releaseDate;
    }

    /**
     * @param string $releaseDate
     */
    public function setReleaseDate(string $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return int
     */
    public function getRevenue(): int
    {
        return $this->revenue;
    }

    /**
     * @param int $revenue
     */
    public function setRevenue(int $revenue): void
    {
        $this->revenue = $revenue;
    }

    /**
     * @return int|null
     */
    public function getRuntime(): ?int
    {
        return $this->runtime;
    }

    /**
     * @param int|null $runtime
     */
    public function setRuntime(?int $runtime): void
    {
        $this->runtime = $runtime;
    }

    /**
     * @return MovieDetailsSpokenLanguages[]
     */
    public function getSpokenLanguages(): array
    {
        return $this->spokenLanguages;
    }

    /**
     * @param MovieDetailsSpokenLanguages[] $spokenLanguages
     */
    public function setSpokenLanguages(array $spokenLanguages): void
    {
        $this->spokenLanguages = $spokenLanguages;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getTagline(): ?string
    {
        return $this->tagline;
    }

    /**
     * @param string|null $tagline
     */
    public function setTagline(?string $tagline): void
    {
        $this->tagline = $tagline;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return bool
     */
    public function isVideo(): bool
    {
        return $this->video;
    }

    /**
     * @param bool $video
     */
    public function setVideo(bool $video): void
    {
        $this->video = $video;
    }

    /**
     * @return int
     */
    public function getVoteCount(): int
    {
        return $this->voteCount;
    }

    /**
     * @param int $voteCount
     */
    public function setVoteCount(int $voteCount): void
    {
        $this->voteCount = $voteCount;
    }

    /**
     * @return float
     */
    public function getVoteAverage(): float
    {
        return $this->voteAverage;
    }

    /**
     * @param float $voteAverage
     */
    public function setVoteAverage(float $voteAverage): void
    {
        $this->voteAverage = $voteAverage;
    }

    /**
     * @return MovieDetailsBelongsToCollection[]|null
     */
    public function getBelongsToCollection(): ?array
    {
        return $this->belongsToCollection;
    }

    /**
     * @param MovieDetailsBelongsToCollection[]|null $belongsToCollection
     */
    public function setBelongsToCollection(?array $belongsToCollection): void
    {
        $this->belongsToCollection = $belongsToCollection;
    }
}