<?php

namespace App\Entity;

use App\Repository\DocumentoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentoRepository::class)
 */
class Documento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero;

    /**
     * @ORM\Column(type="integer")
     */
    private $anio;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fechaPublicacion;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaCaducidad;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numeroVersion;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $palabrasClaves = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=400, nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $estado;
    
    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $path;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $vistos;

    /**
     * @ORM\OneToOne(targetEntity=DocumentoTipo::class, cascade={"persist", "remove"})
     */
    private $documentoTipo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getAnio(): ?int
    {
        return $this->anio;
    }

    public function setAnio(int $anio): self
    {
        $this->anio = $anio;

        return $this;
    }

    public function getFechaPublicacion(): ?\DateTimeInterface
    {
        return $this->fechaPublicacion;
    }

    public function setFechaPublicacion(?\DateTimeInterface $fechaPublicacion): self
    {
        $this->fechaPublicacion = $fechaPublicacion;

        return $this;
    }

    public function getFechaCaducidad(): ?\DateTimeInterface
    {
        return $this->fechaCaducidad;
    }

    public function setFechaCaducidad(\DateTimeInterface $fechaCaducidad): self
    {
        $this->fechaCaducidad = $fechaCaducidad;

        return $this;
    }

    public function getNumeroVersion(): ?int
    {
        return $this->numeroVersion;
    }

    public function setNumeroVersion(?int $numeroVersion): self
    {
        $this->numeroVersion = $numeroVersion;

        return $this;
    }

    public function getPalabrasClaves(): ?array
    {
        return $this->palabrasClaves;
    }

    public function setPalabrasClaves(?array $palabrasClaves): self
    {
        $this->palabrasClaves = $palabrasClaves;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(?string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
    
    function getPath() {
        return $this->path;
    }

    function setPath($path): self {
        $this->path = $path;
        
        return $this;
    }

    public function getVistos(): ?int
    {
        return $this->vistos;
    }

    public function setVistos(?int $vistos): self
    {
        $this->vistos = $vistos;

        return $this;
    }

    public function getDocumentoTipo(): ?DocumentoTipo
    {
        return $this->documentoTipo;
    }

    public function setDocumentoTipo(?DocumentoTipo $documentoTipo): self
    {
        $this->documentoTipo = $documentoTipo;

        return $this;
    }


}
