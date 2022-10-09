<?php

declare(strict_types=1);

namespace App\Common\Service\Tmdb;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Webmozart\Assert\Assert;
use Webmozart\Assert\InvalidArgumentException;

class tmdbManager
{
    public function __construct(
        protected HttpClientInterface $tmdbClient,
        protected SerializerInterface $serializer,
        protected LoggerInterface     $logger
    )
    {
    }

    /**
     * Execute GET requests
     *
     * @param string $endpoint
     * @param array $options
     * @return string
     */
    protected function get(string $endpoint, array $options): string
    {
        try {
            $response = $this->tmdbClient->request(Request::METHOD_GET, $endpoint, $options);
            return $response->getContent();
        } catch (\RuntimeException $e) {
            $this->logger->error('TMDB API Error: ' . $e->getMessage());
            throw new BadRequestHttpException($e->getMessage());
        }
    }

    /**
     * DTO JSON to Object Model
     *
     * @param string $data
     * @param string $class
     * @param array $context
     * @return object
     */
    protected function deserialize(string $data, string $class, array $context = []): object
    {
        try {
            Assert::notEmpty($data, 'Expected a non-empty body content');
            $object = $this->serializer->deserialize($data, $class, 'json', $context);
            Assert::object($object);
        } catch (InvalidArgumentException $invalidArgumentException) {
            throw new BadRequestHttpException($invalidArgumentException->getMessage(), $invalidArgumentException);
        } catch (\Exception $e) {
            throw new BadRequestHttpException('Invalid request: ' . $e->getMessage(), $e);
        }

        return $object;
    }
}