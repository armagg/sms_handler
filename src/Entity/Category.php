<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SMS", mappedBy="category")
     */
    private $SMSs;

    public function __construct()
    {
        $this->SMSs = new ArrayCollection();
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

    /**
     * @return Collection|SMS[]
     */
    public function getSMSs(): Collection
    {
        return $this->SMSs;
    }

    public function addSMSs(SMS $sMSs): self
    {
        if (!$this->SMSs->contains($sMSs)) {
            $this->SMSs[] = $sMSs;
            $sMSs->setCategory($this);
        }

        return $this;
    }

    public function removeSMSs(SMS $sMSs): self
    {
        if ($this->SMSs->contains($sMSs)) {
            $this->SMSs->removeElement($sMSs);
            // set the owning side to null (unless already changed)
            if ($sMSs->getCategory() === $this) {
                $sMSs->setCategory(null);
            }
        }

        return $this;
    }
}
