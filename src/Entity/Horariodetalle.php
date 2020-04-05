<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HorariodetalleRepository")
 */
class Horariodetalle
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Horario", inversedBy="horariodetalle")
     */
    private $horario;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="time")
     */
    private $horarioinicio;

    /**
     * @ORM\Column(type="time")
     */
    private $horafin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lugar;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHorarioinicio(): ?\DateTimeInterface
    {
        return $this->horarioinicio;
    }

    public function setHorarioinicio(\DateTimeInterface $horarioinicio): self
    {
        $this->horarioinicio = $horarioinicio;

        return $this;
    }

    public function getHorafin(): ?\DateTimeInterface
    {
        return $this->horafin;
    }

    public function setHorafin(\DateTimeInterface $horafin): self
    {
        $this->horafin = $horafin;

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
}
