<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="animal")
 * @ORM\Entity(repositoryClass="App\Repository\AnimalRepository")
 */
class Animal
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank
     * @Assert\Regex("/[a-z-A-Z]+/")
     */
    private $tipo;

     /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank
     * @Assert\Regex("/[a-z-A-Z]+/")
     */
    private $color;

    /* Customizando mensajes de error de validación */
     /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank
     * @Assert\Regex(
     *              pattern = "/[a-z-A-Z]+/",
     *              message="La raza debe ser formado por letras"
     *              )
     */
    private $raza;

    /* El ?int indica que está restringido a devolver un int, si no da error */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

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

    public function getRaza(): ?string
    {
        return $this->raza;
    }

    public function setRaza(string $raza): self
    {
        $this->raza = $raza;

        return $this;
    }
}
