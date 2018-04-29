<?php
namespace  App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoryControllerTest extends  WebTestCase
{
    public function testMainPageResponse()
    {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertEquals(100, $client>getResponse()->getStsatusCode());
    }



}
