<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HorarioRepository")
 */
class Horario
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Catalogo", inversedBy="horario")
     */
    private $catalogo;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ponente", inversedBy="horario")
     */
    private $ponente;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Horariodetalle", mappedBy="horario")
     */
    private $horariodetalle;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Participantehorario", mappedBy="horario")
     */
    private $participantehorario;
}
