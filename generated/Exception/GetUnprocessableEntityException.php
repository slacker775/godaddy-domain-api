<?php

namespace GoDaddy\Domain\Api\Exception;

class GetUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('`domain` must be specified', 422);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}