<?php

namespace App\Entity;

use App\Repository\RoomRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;

/**
 * @ORM\Entity(repositoryClass=RoomRepository::class)
 * @Entity = (value)
 */
class Room
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column (type="string", length=500)
     */
    private $description;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Room
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $programedFor;

    /**
     * @return mixed
     */
    public function getProgramedFor()
    {
        return $this->programedFor;
    }

    /**
     * @param mixed $programedFor
     * @return Room
     */
    public function setProgramedFor($programedFor)
    {
        $this->programedFor = $programedFor;
        return $this;
    }

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="rooms")
     */
    private $users;

    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
        $this->users = new ArrayCollection();
        $this->programedFor = new \DateTime();
    }


    public function __toString(): string
    {
        return $this->getName();
           }

    public function getId(): ?int
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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        $this->users->removeElement($user);

        return $this;
    }
}
