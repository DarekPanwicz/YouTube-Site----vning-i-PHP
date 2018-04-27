<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MemberEntityRepository")
 */
class MemberEntity
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
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TicketEntity", mappedBy="member")
     */
    private $tickets;

    public function __construct()
    {
        $this->tickets = [];
        count($this->tickets);
        $this->tickets[0];
        end($this->tickets); || $this->tickets[count($this->tickets) - 1];

        $this->tickets = new ArrayCollection();
        $this->tickets->count();
        $this->ticket->first();
        $this->tickets->
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|TicketEntity[]
     */
    public function getTickets(): Collection
    {
        return $this->tickets;
    }

    public function addTicket(TicketEntity $ticket): self
    {
        if (!$this->tickets->contains($ticket)) {
            $this->tickets[] = $ticket;
            $ticket->setMember($this);
        }

        return $this;
    }

    public function removeTicket(TicketEntity $ticket): self
    {
        if ($this->tickets->contains($ticket)) {
            $this->tickets->removeElement($ticket);
            // set the owning side to null (unless already changed)
            if ($ticket->getMember() === $this) {
                $ticket->setMember(null);
            }
        }

        return $this;
    }
}
