<?php

namespace Devlab\PollBundle\Tests\Controller;

use Devlab\PollBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class QuestionControllerTest extends WebTestCase
{
    public function testQuestionNew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/question/new');

        $this->assertTrue($crawler->filter('h1:contains("Question")')->count() > 0);
    }
    public function testIndexAction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/question/');

		$result = 	$crawler->filter('html:contains("list")')->count() > 0 &&
					$crawler->filter('a:contains("Create a new entry")')->count() == 1;
        $this->assertTrue($result);
    }

	public function testQuestionEdit()
	{
		$client = static::createClient();
		
		$crawler = $client->request('GET', '/question/1/edit');
		
		$this->assertTrue($crawler->filter('h1:contains("Question edit")')->count() == 1);
	}
	
	public function testShowAction()
	{
		$client = static::createClient();
		
		$crawler = $client->request('GET', '/question/1/show');
		
		$this->assertTrue($crawler->filter('h1:contains("Question")')->count() == 1);
	}
}