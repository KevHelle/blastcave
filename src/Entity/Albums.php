<?php

namespace App\Entity;

use App\Repository\AlbumsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlbumsRepository::class)]
class Albums
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $artistName = null;

    #[ORM\Column(length: 255)]
    private ?string $albumTitle = null;

    #[ORM\Column(length: 255)]
    private ?string $albumCover = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArtistName(): ?string
    {
        return $this->artistName;
    }

    public function setArtistName(string $artistName): static
    {
        $this->artistName = $artistName;

        return $this;
    }

    public function getAlbumTitle(): ?string
    {
        return $this->albumTitle;
    }

    public function setAlbumTitle(string $albumTitle): static
    {
        $this->albumTitle = $albumTitle;

        return $this;
    }

    public function getAlbumCover(): ?string
    {
        return $this->albumCover;
    }

    public function setAlbumCover(string $albumCover): static
    {
        $this->albumCover = $albumCover;

        return $this;
    }
}
