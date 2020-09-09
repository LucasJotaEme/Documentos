<?php

namespace App\Entity;

use App\Repository\GrupoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GrupoRepository::class)
 */
class Grupo
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
     * @ORM\OneToMany(targetEntity=DocumentoTipo::class, mappedBy="grupo")
     */
    private $tipoDocumento;

    /**
     * @ORM\OneToMany(targetEntity=Documento::class, mappedBy="grupo")
     */
    private $documentos;

    public function __construct()
    {
        $this->tipoDocumento = new ArrayCollection();
        $this->documentos = new ArrayCollection();
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

    /**
     * @return Collection|DocumentoTipo[]
     */
    public function getTipoDocumento(): Collection
    {
        return $this->tipoDocumento;
    }

    public function addTipoDocumento(DocumentoTipo $tipoDocumento): self
    {
        if (!$this->tipoDocumento->contains($tipoDocumento)) {
            $this->tipoDocumento[] = $tipoDocumento;
            $tipoDocumento->setGrupo($this);
        }

        return $this;
    }

    public function removeTipoDocumento(DocumentoTipo $tipoDocumento): self
    {
        if ($this->tipoDocumento->contains($tipoDocumento)) {
            $this->tipoDocumento->removeElement($tipoDocumento);
            // set the owning side to null (unless already changed)
            if ($tipoDocumento->getGrupo() === $this) {
                $tipoDocumento->setGrupo(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Documento[]
     */
    public function getDocumentos(): Collection
    {
        return $this->documentos;
    }

    public function addDocumento(Documento $documento): self
    {
        if (!$this->documentos->contains($documento)) {
            $this->documentos[] = $documento;
            $documento->setGrupo($this);
        }

        return $this;
    }

    public function removeDocumento(Documento $documento): self
    {
        if ($this->documentos->contains($documento)) {
            $this->documentos->removeElement($documento);
            // set the owning side to null (unless already changed)
            if ($documento->getGrupo() === $this) {
                $documento->setGrupo(null);
            }
        }

        return $this;
    }
}
