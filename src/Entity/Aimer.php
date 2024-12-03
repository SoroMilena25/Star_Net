<?php

namespace App\Entity;

use App\Repository\AimerRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass=AimerRepository::class)
 */
class Aimer
{

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="aimes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $qui;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\Entity\Publication", inversedBy="aimes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $quel_publi;

    public function getQui(): ?string
    {
        return $this->qui;
    }

    public function setQui(string $qui): self
    {
        $this->qui = $qui;

        return $this;
    }

    public function getQuelPubli(): ?string
    {
        return $this->quel_publi;
    }

    public function setQuelPubli(string $quel_publi): self
    {
        $this->quel_publi = $quel_publi;

        return $this;
    }
}
