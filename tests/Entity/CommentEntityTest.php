<?php
/**
 * User: Darek
 */

namespace App\Entity;
use PHPUnit\Framework\TestCase;

class CommentEntityTest extends TestCase
{
    public function testIfCommentHasUser()
    {
        $comment = new CommentEntity();
        $user = new UserEntity();

        $comment->setUser($user);
        $this->assertNotNull($comment->getUser());
    }
}