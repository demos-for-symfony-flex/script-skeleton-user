<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SmokeTest extends WebTestCase
{
    public function Something() // temporarilly disabled test!
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertSame(1, $crawler->filter('h1:contains("Hello World")')->count());
    }

    /**
     * @dataProvider urlProvider
     */
    public function testPageIsSuccessful($url)
    {
        $client = self::createClient();
        $client->request('GET', $url);

        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function urlProvider()
    {
        yield ['/login'];
        yield ['/logout'];
        yield ['/profile/'];
        yield ['/profile/edit'];
        yield ['/register/'];
        yield ['/register/check-email'];
        yield ['/register/confirmed'];
        yield ['/resetting/request'];
        yield ['/resetting/check-email'];
        yield ['/profile/change-password'];
    }
}
