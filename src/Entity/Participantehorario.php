<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticipantehorarioRepository")
 */
class Participantehorario
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Horario", inversedBy="participantehorario")
     */
    private $horario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Participante", inversedBy="participantehorario")
     */
    private $participante;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecharegistro;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecharegistro(): ?\DateTimeInterface
    {
        return $this->fecharegistro;
    }

    public function setFecharegistro(\DateTimeInterface $fecharegistro): self
    {
        $this->fecharegistro = $fecharegistro;

        return $this;
    }
}
