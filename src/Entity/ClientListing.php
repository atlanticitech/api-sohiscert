<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ClientListingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ClientListingRepository::class)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="gs_client")
 */
class ClientListing
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codigo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cldeno;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $opcif;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $clcdp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getCldeno(): ?string
    {
        return $this->cldeno;
    }

    public function setCldeno(string $cldeno): self
    {
        $this->cldeno = $cldeno;

        return $this;
    }

    public function getOpcif(): ?string
    {
        return $this->opcif;
    }

    public function setOpcif(string $opcif): self
    {
        $this->opcif = $opcif;

        return $this;
    }

    public function getClcdp(): ?int
    {
        return $this->clcdp;
    }

    public function setClcdp(?int $clcdp): self
    {
        $this->clcdp = $clcdp;

        return $this;
    }
}
