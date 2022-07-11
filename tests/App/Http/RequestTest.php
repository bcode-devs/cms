<?php

namespace Tests\App\Http;

use App\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function testEmpty(): void
    {
        $request = new Request();

        self::assertEquals([], $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testQueryParams(): void
    {
        $request = (new Request())->withQueryParams($data = [
            'name' => 'D',
            'age' => '24'
        ]);

        self::assertEquals($data, $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testParsedBody(): void
    {
        $request = (new Request)->withParsedBody($data = ['title' => 'Title']);
        self::assertEquals($data, $request->getParsedBody());
        self::assertEquals([], $request->getQueryParams());
    }
}