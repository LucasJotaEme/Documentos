<?php

namespace App\Entity;

use App\Repository\DocumentoTipoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentoTipoRepository::class)
 */
class DocumentoTipo
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $abreviacion;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity=Documento::class, inversedBy="documentoTipo")
     */
    private $documento;

    /**
     * @ORM\OneToMany(targetEntity=Documento::class, mappedBy="documentoTipo")
     */
    private $Documento;

    /**
     * @ORM\ManyToOne(targetEntity=Grupo::class, inversedBy="tipoDocumento")
     */
    private $grupo;

    public function __construct()
    {
        $this->Documento = new ArrayCollection();
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

    public function getAbreviacion(): ?string
    {
        return $this->abreviacion;
    }

    public function setAbreviacion(?string $abreviacion): self
    {
        $this->abreviacion = $abreviacion;

        return $this;
    }
    
    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(?string $estado): self
    {
        $this->estado = $estado;

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

    public function addDocumento(Documento $documento): self
    {
        if (!$this->Documento->contains($documento)) {
            $this->Documento[] = $documento;
            $documento->setDocumentoTipo($this);
        }

        return $this;
    }

    public function removeDocumento(Documento $documento): self
    {
        if ($this->Documento->contains($documento)) {
            $this->Documento->removeElement($documento);
            // set the owning side to null (unless already changed)
            if ($documento->getDocumentoTipo() === $this) {
                $documento->setDocumentoTipo(null);
            }
        }

        return $this;
    }

    public function getGrupo(): ?Grupo
    {
        return $this->grupo;
    }

    public function setGrupo(?Grupo $grupo): self
    {
        $this->grupo = $grupo;

        return $this;
    }
}
