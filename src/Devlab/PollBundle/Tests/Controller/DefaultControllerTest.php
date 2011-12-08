<?php

namespace Devlab\PollBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/question/6/show');

        $this->assertTrue($crawler->filter('html:contains("Question")')->count() > 0);
    }
}
