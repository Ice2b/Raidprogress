<?php

namespace App\Entity;

use App\Repository\BraveElephantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BraveElephantRepository::class)]
class BraveElephant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $blubb;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBlubb(): ?string
    {
        return $this->blubb;
    }

    public function setBlubb(string $blubb): self
    {
        $this->blubb = $blubb;

        return $this;
    }
}
