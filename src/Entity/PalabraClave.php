<?php

namespace App\Entity;

use App\Repository\PalabraClaveRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PalabraClaveRepository::class)
 */
class PalabraClave
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity=Documento::class, inversedBy="palabraClave")
     */
    private $documento;

    public function PalabraClave (String $palabraNueva){
        $this->setNombre($palabraNueva);
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDocumento(): ?Documento
    {
        return $this->documento;
    }

    public function setDocumento(?Documento $documento): self
    {
        $this->documento = $documento;

        return $this;
    }
}
