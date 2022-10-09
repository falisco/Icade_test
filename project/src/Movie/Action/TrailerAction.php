<?php

declare(strict_types=1);

namespace App\Movie\Action;

use App\Movie\Model\MovieVideoResults;
use App\Movie\Service\Tmdb\tmdbMovieManager;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

final class TrailerAction
{
    public function __construct(
        private tmdbMovieManager $tmdbManager
    )
    {
    }

    public function __invoke($id): MovieVideoResults
    {
        if (empty($id)) {
            throw new BadRequestHttpException('ID must be provided !');
        }

        $videos = $this->tmdbManager->videosMovie($id);

        //Get trailer
        foreach ($videos->getResults() as $video) {
            if($video->getType() === 'Trailer' && $video->getSite() === 'YouTube') {
                return $video;
            }
        }
    }
}