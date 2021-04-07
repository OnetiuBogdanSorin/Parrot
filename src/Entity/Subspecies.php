<?php

namespace App\Entity;

use App\Repository\SubspeciesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SubspeciesRepository::class)
 */
class Subspecies
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
    private $subspecies;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Species", inversedBy="subspecies")
     */
    private $species;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubspecies(): ?string
    {
        return $this->subspecies;
    }

    public function setSubspecies(string $subspecies): self
    {
        $this->subspecies = $subspecies;

        return $this;
    }

    public function getSpecies(): ?Species
    {
        return $this->species;
    }

    public function setSpecies(?Species $species): self
    {
        $this->species = $species;

        return $this;
    }
}
