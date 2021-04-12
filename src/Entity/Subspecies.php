<?php

namespace App\Entity;

use App\Repository\SubspeciesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\OneToMany(targetEntity="App\Entity\Parrot", mappedBy="subspecie")
     */
    private $parrot;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Species", inversedBy="subspecies")
     */
    private $specie;

    public function __construct()
    {
        $this->parrot = new ArrayCollection();
    }

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

    /**
     * @return Collection|Parrot[]
     */
    public function getParrot(): Collection
    {
        return $this->parrot;
    }

    public function addParrot(Parrot $parrot): self
    {
        if (!$this->parrot->contains($parrot)) {
            $this->parrot[] = $parrot;
            $parrot->setSubspecie($this);
        }

        return $this;
    }

    public function removeParrot(Parrot $parrot): self
    {
        if ($this->parrot->removeElement($parrot)) {
            // set the owning side to null (unless already changed)
            if ($parrot->getSubspecie() === $this) {
                $parrot->setSubspecie(null);
            }
        }

        return $this;
    }

    public function getSpecie(): ?Species
    {
        return $this->specie;
    }

    public function setSpecie(?Species $specie): self
    {
        $this->specie = $specie;

        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->subspecies;
    }
}
