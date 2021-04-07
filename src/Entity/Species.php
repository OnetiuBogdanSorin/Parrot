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
     * @ORM\OneToMany(targetEntity="App\Entity\Parrot", mappedBy="species")
     */
    private $parrot;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Subspecies", mappedBy="species")
     */
    private $subspecies;


    public function __construct()
    {
        $this->subspecies = new ArrayCollection();
        $this->parrot = new ArrayCollection();
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

    public function getParrot(): ?self
    {
        return $this->parrot;
    }

    public function setParrot(?self $parrot): self
    {
        // unset the owning side of the relation if necessary
        if ($parrot === null && $this->parrot !== null) {
            $this->parrot->setParrot(null);
        }

        // set the owning side of the relation if necessary
        if ($parrot !== null && $parrot->getParrot() !== $this) {
            $parrot->setParrot($this);
        }

        $this->parrot = $parrot;

        return $this;
    }

    public function addParrot(Species $parrot): self
    {
        if (!$this->parrot->contains($parrot)) {
            $this->parrot[] = $parrot;
            $parrot->setParrot($this);
        }

        return $this;
    }

    public function removeParrot(Species $parrot): self
    {
        if ($this->parrot->removeElement($parrot)) {
            // set the owning side to null (unless already changed)
            if ($parrot->getParrot() === $this) {
                $parrot->setParrot(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->species;
    }
}
