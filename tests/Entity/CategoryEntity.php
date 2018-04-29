<?php

namespace  App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

public function getUrl()
{
return strtolower($this->name);
}