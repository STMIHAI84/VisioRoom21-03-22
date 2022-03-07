<?php

namespace App\Entity;

use App\Repository\UrlAdressRepository;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

/**
 * @ORM\Entity(repositoryClass=UrlAdressRepository::class)
 */
class UrlAdress
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
    private $url;

    #[Pure] public function __toString()
    {
        return $this ->getUrl();
    }

    /**
     * @return int|null
     * @ORM\Column (type="datetime")
     */
    private $created_at;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTime $created_at): self
    {
        $this ->created_at= $created_at;

        return $this;
    }

    public function __construct()
    {
        $this->created_at = new \DateTime('now');
    }
}