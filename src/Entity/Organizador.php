<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrganizadorRepository")
 */
class Organizador
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Evento", mappedBy="organizador")
     */
    private $evento;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombrerazonsocial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rfc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contacto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $correo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $direccion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombrerazonsocial(): ?string
    {
        return $this->nombrerazonsocial;
    }

    public function setNombrerazonsocial(string $nombrerazonsocial): self
    {
        $this->nombrerazonsocial = $nombrerazonsocial;

        return $this;
    }

    public function getRfc(): ?string
    {
        return $this->rfc;
    }

    public function setRfc(string $rfc): self
    {
        $this->rfc = $rfc;

        return $this;
    }

    public function getContacto(): ?string
    {
        return $this->contacto;
    }

    public function setContacto(string $contacto): self
    {
        $this->contacto = $contacto;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getCorreo(): ?string
    {
        return $this->correo;
    }

    public function setCorreo(string $correo): self
    {
        $this->correo = $correo;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }
}
