<?php

namespace App\Entity;

use App\Repository\SpeciesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpeciesRepository::class)
 */
class Species
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
    private $species;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Subspecies", mappedBy="specie")
     */
    private $subspecies;


    public function __construct()
    {
        $this->subspecies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpecies(): ?string
    {
        return $this->species;
    }

    public function setSpecies(string $species): self
    {
        $this->species = $species;

        return $this;
    }


    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->species;
    }

    /**
     * @return Collection|Subspecies[]
     */
    public function getSubspecies(): Collection
    {
        return $this->subspecies;
    }

    public function addSubspecy(Subspecies $subspecy): self
    {
        if (!$this->subspecies->contains($subspecy)) {
            $this->subspecies[] = $subspecy;
            $subspecy->setSpecies($this);
        }

        return $this;
    }

    public function removeSubspecy(Subspecies $subspecy): self
    {
        if ($this->subspecies->removeElement($subspecy)) {
            // set the owning side to null (unless already changed)
            if ($subspecy->getSpecies() === $this) {
                $subspecy->setSpecies(null);
            }
        }

        return $this;
    }
}
