<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BranchModelRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BranchModelRepository::class)]
#[ApiResource]
class BranchModel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 255)]
    private string $internalId;

    #[ORM\Column(length: 255)]
    private ?string $internalName;

    #[ORM\Column(length: 255)]
    private string $location;

    #[ORM\Column(type: Types::ARRAY)]
    private array $businessHours;

    #[ORM\Column(length: 255)]
    private string $address;

    #[ORM\Column(length: 255)]
    private string $announcement;

    public function getId(): int
    {
        return $this->id;
    }

    public function getInternalId(): string
    {
        return $this->internalId;
    }

    public function setInternalId(string $internalId): self
    {
        $this->internalId = $internalId;

        return $this;
    }

    public function getInternalName(): string
    {
        return $this->internalName;
    }

    public function setInternalName(string $internalName): self
    {
        $this->internalName = $internalName;

        return $this;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getBusinessHours(): array
    {
        return $this->businessHours;
    }

    public function setBusinessHours(array $businessHours): self
    {
        $this->businessHours = $businessHours;

        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getAnnouncement(): string
    {
        return $this->announcement;
    }

    public function setAnnouncement(string $announcement): self
    {
        $this->announcement = $announcement;

        return $this;
    }
}
