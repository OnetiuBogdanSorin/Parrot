<?php

namespace App\Entity;

use App\Repository\ParrotRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ParrotRepository::class)
 */
class Parrot
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Subspecies", inversedBy="parrot")
     * @Assert\NotBlank()
     */
    private $subspecie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sex;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $color;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(string $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getSubspecie(): ?Subspecies
    {
        return $this->subspecie;
    }

    public function setSubspecie(?Subspecies $subspecie): self
    {
        $this->subspecie = $subspecie;

        return $this;
    }


}
