<?php

namespace App\Entity;

use App\Repository\DocumentoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $estado;
    
    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $path;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $vistos;

    /**
     * @ORM\ManyToOne(targetEntity=DocumentoTipo::class, inversedBy="Documento")
     */
    private $documentoTipo;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $perfil;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $publico;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="documento")
     */
    private $user;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="string", length=400, nullable=true)
     */
    private $palabraClave;


    public function __construct()
    {
        $this->usuario = new ArrayCollection();
        $this->palabraClave = new ArrayCollection();
    }

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

    public function getPerfil(): ?string
    {
        return $this->perfil;
    }

    public function setPerfil(?string $perfil): self
    {
        $this->perfil = $perfil;

        return $this;
    }

    public function getPublico(): ?bool
    {
        return $this->publico;
    }

    public function setPublico(?bool $publico): self
    {
        $this->publico = $publico;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getFechaCreacion(): ?\DateTimeInterface
    {
        return $this->fechaCreacion;
    }

    public function setFechaCreacion(?\DateTimeInterface $fechaCreacion): self
    {
        $this->fechaCreacion = $fechaCreacion;

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

    public function getPalabraClave(): ?string
    {
        return $this->palabraClave;
    }

    public function setPalabraClave(?string $palabraClave): self
    {
        $this->palabraClave = $palabraClave;

        return $this;
    }

    


}
