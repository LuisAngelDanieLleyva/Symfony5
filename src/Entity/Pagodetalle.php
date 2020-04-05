<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagodetalleRepository")
 */
class Pagodetalle
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $importe;

    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Catalogo", inversedBy="pagodetalle")
     */
    private $catalogo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pago", inversedBy="pagodetalle")
     */
    private $pago;

    public function getImporte(): ?float
    {
        return $this->importe;
    }

    public function setImporte(float $importe): self
    {
        $this->importe = $importe;

        return $this;
    }
}
