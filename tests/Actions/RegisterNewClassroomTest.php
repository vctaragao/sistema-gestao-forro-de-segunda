<?php

namespace App\Tests\Actions;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class RegisterNewClassroomTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testRegisterNewClassroomSuccess()
    {
        $client = new Client(['base_uri' => 'http://localhost:8000', 'timeout' => 2.0]);

        $response = $client->request(
            'GET',
            '/',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' =>  'application/json'
                ]
            ]
        );

        $this->assertEquals(200, $response->getStatusCode());
    }
}
