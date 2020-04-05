<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventoRepository")
 */
class Evento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Catalogo", mappedBy="evento")
     */
    private $catalogo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Organizador", inversedBy="evento")
     */
    private $organizador;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categoria", inversedBy="evento")
     */
    private $categoria;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechainicio;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechafin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $observaciones;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logotipo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $eslogan;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lugar;

    /**
     * @ORM\Column(type="datetime")
     */
    private $inicioregistro;

    /**
     * @ORM\Column(type="datetime")
     */
    private $cierreregistro;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getFechainicio(): ?\DateTimeInterface
    {
        return $this->fechainicio;
    }

    public function setFechainicio(\DateTimeInterface $fechainicio): self
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    public function getFechafin(): ?\DateTimeInterface
    {
        return $this->fechafin;
    }

    public function setFechafin(\DateTimeInterface $fechafin): self
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getLogotipo(): ?string
    {
        return $this->logotipo;
    }

    public function setLogotipo(string $logotipo): self
    {
        $this->logotipo = $logotipo;

        return $this;
    }

    public function getEslogan(): ?string
    {
        return $this->eslogan;
    }

    public function setEslogan(string $eslogan): self
    {
        $this->eslogan = $eslogan;

        return $this;
    }

    public function getLugar(): ?string
    {
        return $this->lugar;
    }

    public function setLugar(string $lugar): self
    {
        $this->lugar = $lugar;

        return $this;
    }

    public function getInicioregistro(): ?\DateTimeInterface
    {
        return $this->inicioregistro;
    }

    public function setInicioregistro(\DateTimeInterface $inicioregistro): self
    {
        $this->inicioregistro = $inicioregistro;

        return $this;
    }

    public function getCierreregistro(): ?\DateTimeInterface
    {
        return $this->cierreregistro;
    }

    public function setCierreregistro(\DateTimeInterface $cierreregistro): self
    {
        $this->cierreregistro = $cierreregistro;

        return $this;
    }
}
