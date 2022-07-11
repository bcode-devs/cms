<?php

namespace App\Http;

interface ResponseInterface
{
    public function getBody();

    /**
     * @param $body
     * @return mixed
     */
    public function withBody($body);

    /**
     * @return mixed
     */
    public function getStatusCode();

    /**
     * @return mixed
     */
    public function getReasonPhrase();

    /**
     * @param mixed $code
     * @param string $reasonPhrase
     * @return static
     */
    public function withStatus($code, $reasonPhrase = '');

    /**
     * @return array
     */
    public function getHeaders(): array;

    /**
     * @param $header
     * @return bool
     */
    public function hasHeader($header): bool;

    /**
     * @param $header
     * @return mixed
     */
    public function getHeader($header);

    /**
     * @param string $header
     * @param mixed $value
     * @return static
     */
    public function withHeader($header, $value);
}