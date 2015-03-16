<?php

namespace Cosaco\GesenBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HorarioControllerTest extends WebTestCase
{
    public function testCargar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Cargar');
    }

}
