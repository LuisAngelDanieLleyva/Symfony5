<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CatalogoRepository")
 */
class Catalogo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Actividad", inversedBy="catalogo")
     */
    private $actividad;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Evento", inversedBy="catalogo")
     */
    private $evento;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Horario", mappedBy="catalogo")
     */
    private $horario;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pagodetalle", mappedBy="catalogo")
     */
    private $pagodetalle;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titulo;

    /**
     * @ORM\Column(type="float")
     */
    private $costo;

    /**
     * @ORM\Column(type="integer")
     */
    private $totalhoras;

    /**
     * @ORM\Column(type="integer")
     */
    private $cupolimite;

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

    public function getCosto(): ?float
    {
        return $this->costo;
    }

    public function setCosto(float $costo): self
    {
        $this->costo = $costo;

        return $this;
    }

    public function getTotalhoras(): ?int
    {
        return $this->totalhoras;
    }

    public function setTotalhoras(int $totalhoras): self
    {
        $this->totalhoras = $totalhoras;

        return $this;
    }

    public function getCupolimite(): ?int
    {
        return $this->cupolimite;
    }

    public function setCupolimite(int $cupolimite): self
    {
        $this->cupolimite = $cupolimite;

        return $this;
    }
}
