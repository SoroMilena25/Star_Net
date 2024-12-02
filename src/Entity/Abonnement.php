<?php

namespace App\Entity;

use App\Repository\AbonnementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AbonnementRepository::class)
 */
class Abonnement
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="followers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $qui; // qui me suit ?

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="following")
     * @ORM\JoinColumn(nullable=false)
     */
    private $a_qui; // Le user qui me suit.

    public function getQui(): ?string
    {
        return $this->qui;
    }

    public function setQui(string $qui): self
    {
        $this->qui = $qui;

        return $this;
    }

    public function getAQui(): ?string
    {
        return $this->a_qui;
    }

    public function setAQui(string $a_qui): self
    {
        $this->a_qui = $a_qui;

        return $this;
    }
}
