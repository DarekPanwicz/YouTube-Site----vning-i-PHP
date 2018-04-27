<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TicketEntityRepository")
 */
class TicketEntity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $number;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MemberEntity", inversedBy="tickets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $member;

    public function getId()
    {
        return $this->id;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getMember(): ?MemberEntity
    {
        return $this->member;
    }

    public function setMember(?MemberEntity $member): self
    {
        $this->member = $member;

        return $this;
    }
}
