<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsuarioRepository::class)
 */
class Usuario
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nombre;
    /**
     * @ORM\Column(type="integer",length=255)
     */
    private $apellidos;
    /**
     * @ORM\Column(type="integer",length=255)
     */
    private $email;
    /**
     * @ORM\Column(type="integer",length=255)
     */
    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos(): ?int
    {
        return $this->apellidos;
    }

    public function setApellidos(int $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getEmail(): ?int
    {
        return $this->email;
    }

    public function setEmail(int $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?int
    {
        return $this->password;
    }

    public function setPassword(int $password): self
    {
        $this->password = $password;

        return $this;
    }
}
