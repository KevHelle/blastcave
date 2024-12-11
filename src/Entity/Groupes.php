<?php

namespace App\Entity;

use App\Repository\GroupesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupesRepository::class)]
class Groupes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $groupName = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $audioClip = null;

    #[ORM\Column(length: 255)]
    private ?string $videoClip = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    public function setGroupName(string $groupName): static
    {
        $this->groupName = $groupName;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getAudioClip(): ?string
    {
        return $this->audioClip;
    }

    public function setAudioClip(?string $audioClip): static
    {
        $this->audioClip = $audioClip;

        return $this;
    }

    public function getVideoClip(): ?string
    {
        return $this->videoClip;
    }

    public function setVideoClip(string $videoClip): static
    {
        $this->videoClip = $videoClip;

        return $this;
    }
}
