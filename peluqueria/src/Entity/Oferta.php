<?php

namespace App\Entity;

use App\Repository\OfertaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OfertaRepository::class)]
class Oferta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $Imagen = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImagen(): ?string
    {
        return $this->Imagen;
    }

    public function setImagen(string $Imagen): static
    {
        $this->Imagen = $Imagen;

        return $this;
    }
}
