<?php

namespace App\Movie\Action;

use App\Movie\Model\MovieDetails;
use App\Movie\Service\Tmdb\tmdbMovieManager;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

final class DetailsAction
{
    public function __construct(
        private tmdbMovieManager $tmdbManager
    )
    {
    }

    public function __invoke(string $id): MovieDetails
    {
        if (empty($id)) {
            throw new BadRequestHttpException('ID must be provided !');
        }

        return $this->tmdbManager->detailsMovie($id);
    }
}