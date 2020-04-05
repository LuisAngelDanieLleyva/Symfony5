<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticipanteRepository")
 */
class Participante implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Participantehorario", mappedBy="participante")
     */
    private $participantehorario;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pago", mappedBy="participante")
     */
    private $pago;

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
    /**
     * @ORM\Column(type="string")
     */
    public $nombrecompleto;
    /**
     * @ORM\Column(type="string")
     */
    public $curp;
    /**
     * @ORM\Column(type="string")
     */
    public $intitucionprocedencia;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getnombrecompleto(): ?string
    {
        return $this->nombrecompleto;
    }

    public function setnombrecompleto(string $nombrecompleto): self
    {
        $this->nombrecon¡mpleto = $nombrecompleto;

        return $this;
    }
    public function getcurp(): ?string
    {
        return $this->curp;
    }

    public function setcurp(string $curp): self
    {
        $this->curp = $curp;

        return $this;
    }
    public function getintitucionprocedencia(): ?string
    {
        return $this->intitucionprocedencia;
    }

    public function setintitucionprocedencia(string $intitucionprocedencia): self
    {
        $this->intitucionprocedencia = $intitucionprocedencia;

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
