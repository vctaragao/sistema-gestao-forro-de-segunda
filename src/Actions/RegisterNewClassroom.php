<?php

namespace App\Actions;

use Psr\Http\Message\RequestInterface;
use Slim\Psr7\Response;

class RegisterNewClassroom
{
    public function __invoke(RequestInterface $request, Response $response)
    {
        $data = ['test' => 'Hello World'];

        $response->getBody()->write(json_encode($data));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}
