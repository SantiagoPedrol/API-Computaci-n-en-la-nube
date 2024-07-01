<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PreciosHistoricosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PreciosHistoricosRepository::class)]
#[ApiResource]
class PreciosHistoricos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ticker = null;

    #[ORM\Column(length: 255)]
    private ?string $Alertas = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTicker(): ?string
    {
        return $this->ticker;
    }

    public function setTicker(?string $ticker): static
    {
        $this->ticker = $ticker;

        return $this;
    }

    public function getAlertas(): ?string
    {
        return $this->Alertas;
    }

    public function setAlertas(string $Alertas): static
    {
        $this->Alertas = $Alertas;

        return $this;
    }
}
