<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(attributes={"filters"={"offer.date_filter"}})
 * @ORM\Entity(repositoryClass="App\Repository\StylesWidgetsRepository")
 */
class StylesWidgets
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
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $color;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $background;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $orderWidget;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marginleft;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marginbottom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getBackground(): ?string
    {
        return $this->background;
    }

    public function setBackground(string $background): self
    {
        $this->background = $background;

        return $this;
    }

    public function getOrderWidget(): ?string
    {
        return $this->orderWidget;
    }

    public function setOrderWidget(string $orderWidget): self
    {
        $this->orderWidget = $orderWidget;

        return $this;
    }

    public function getMarginleft(): ?string
    {
        return $this->marginleft;
    }

    public function setMarginleft(string $marginleft): self
    {
        $this->marginleft = $marginleft;

        return $this;
    }

    public function getMarginbottom(): ?string
    {
        return $this->marginbottom;
    }

    public function setMarginbottom(string $marginbottom): self
    {
        $this->marginbottom = $marginbottom;

        return $this;
    }
}
