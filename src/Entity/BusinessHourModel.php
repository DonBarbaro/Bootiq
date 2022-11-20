<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BusinessHourModelRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BusinessHourModelRepository::class)]
#[ApiResource]
class BusinessHourModel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 255)]
    private string $dayOfWeek;

    #[ORM\Column(length: 255)]
    private string $businessHour;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDayOfWeek(): ?string
    {
        return $this->dayOfWeek;
    }

    public function setDayOfWeek(string $dayOfWeek): self
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    public function getBusinessHour(): ?string
    {
        return $this->businessHour;
    }

    public function setBusinessHour(string $businessHour): self
    {
        $this->businessHour = $businessHour;

        return $this;
    }
}
