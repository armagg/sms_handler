<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SMSRepository")
 */
class SMS
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $senderNumber;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $receiverNumber;

    /**
     * @ORM\Column(type="string", length=400)
     */
    private $text;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="SMSs")
     */
    private $category;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSenderNumber(): ?string
    {
        return $this->senderNumber;
    }

    public function setSenderNumber(string $senderNumber): self
    {
        $this->senderNumber = $senderNumber;

        return $this;
    }

    public function getReceiverNumber(): ?string
    {
        return $this->receiverNumber;
    }

    public function setReceiverNumber(string $receiverNumber): self
    {
        $this->receiverNumber = $receiverNumber;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
