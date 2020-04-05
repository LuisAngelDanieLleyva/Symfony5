<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PonenteRepository")
 */
class Ponente implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Horario", mappedBy="ponente")
     */
    private $horario;
    /**
     * @ORM\Column(type="string")
     */
    public $nombrecompleto;
    /**
     * @ORM\Column(type="string")
     */
    public $sexo;
    /**
     * @ORM\Column(type="string")
     */
    public $cv;
    /**
     * @ORM\Column(type="string")
     */
    public $nivelacademico;
    /**
     * @ORM\Column(type="string")
     */
    public $correo;
    /**
     * @ORM\Column(type="string")
     */
    public $foto;

    public function getnombrecompleto(): ?string
    {
        return $this->nombrecompleto;
    }

    public function setnombrecompleto(string $nombrecompleto): self
    {
        $this->nombrecompleto = $nombrecompleto;

        return $this;
    }
    public function getsexo(): ?string
    {
        return $this->sexo;
    }

    public function setsexo(string $sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }
    public function getfoto(): ?string
    {
        return $this->foto;
    }

    public function setfoto(string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }
    public function getcv(): ?string
    {
        return $this->cv;
    }

    public function setcv(string $cv): self
    {
        $this->cv = $cv;

        return $this;
    }
    public function getnivelacademico(): ?string
    {
        return $this->nivelacademico;
    }

    public function setnivelacademico(string $nivelacademico): self
    {
        $this->nivelacademico = $nivelacademico;

        return $this;
    }
    public function getcorreo(): ?string
    {
        return $this->correo;
    }

    public function setcorreo(string $correo): self
    {
        $this->correo = $correo;

        return $this;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
