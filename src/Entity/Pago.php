<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagoRepository")
 */
class Pago
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fechapago;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pagodetalle", mappedBy="pago")
     */
    private $pagodetalle;

     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Participante", inversedBy="pago")
     */
    private $participante;

    public function getFechapago(): ?\DateTimeInterface
    {
        return $this->fechapago;
    }

    public function setFechapago(\DateTimeInterface $fechapago): self
    {
        $this->fechapago = $fechapago;

        return $this;
    }
}
