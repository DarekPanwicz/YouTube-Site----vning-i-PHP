<?php
/**
 * User: Darek
 */

namespace App\Entity;
use PHPUnit\Framework\TestCase;

class UserEntityTest extends TestCase
{
    public function testCanSetLogin()
    {
        $user = new UserEntity();
        $user->setLogin('Malpa');

        $this->assertEquals('Malpa', $user->getLogin());

    }
}