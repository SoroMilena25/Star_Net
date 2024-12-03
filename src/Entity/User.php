<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Validator\Exception\ValidationException;
use Symfony\Component\HttpFoundation\Response;

/**
 * @ApiResource(
 *     collectionOperations={
 *         "get"={
 *             "method"="GET",
 *             "path"="/users"
 *         },
 *         "post"={
 *             "method"="POST",
 *             "path"="/users"
 *         }
 *     },
 *     itemOperations={
 *         "get"={
 *             "method"="GET",
 *             "path"="/users/{id}"
 *         },
 *         "put"={
 *             "method"="PUT",
 *             "path"="/users/{id}"
 *         },
 *         "delete"={
 *             "method"="DELETE",
 *             "path"="/users/{id}"
 *         }
 *     }
 * )
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mdp;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Abonnement", mappedBy="qui")
     * @var Collection<Abonnement>
     */
    private $followers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Abonnement", mappedBy="a_qui")
     * @var Collection<Abonnement>
     */
    private $following;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Aimer", mappedBy="qui")
     * @var Collection<Aimer>
     */
    private $aimes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commenter", mappedBy="qui")
     * @var Collection<Commenter>
     */
    private $commentaires;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Publication", mappedBy="user")
     * @var Collection<Publication>
     */
    private $publications;


    public function __construct()
    {
        $this->followers = new ArrayCollection();
        $this->following = new ArrayCollection();
        $this->aimes = new ArrayCollection();
        $this->commentaires = new ArrayCollection();
        $this->publications = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;
        return $this;
    }

    public function getFollowers(): Collection
    {
        return $this->followers;
    }

    public function getFollowing(): Collection
    {
        return $this->following;
    }

    public function getAimes(): Collection
    {
        return $this->aimes;
    }

    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function getPublications(): Collection
    {
        return $this->publications;
    }
}
