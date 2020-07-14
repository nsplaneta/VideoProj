<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 * @UniqueEntity("email")
 */
class Users implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\NotBlank(message="Please enter a valid email adress.")
     * @Assert\Email(message="Please enter correct email afress")
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please enter valid password.")
     * @Assert\Length(max="4096")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=45)
     * @Assert\NotBlank(message="Name is required.")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=45)
     * @Assert\NotBlank(message="Last name is required.")
     */
    private $last_name;


    /**
     * @ORM\ManyToMany(targetEntity=Videos::class, mappedBy="usersRate")
     * @ORM\JoinTable(name="rates")
     */
    private $ratedVideos;

    /**
     * @ORM\OneToOne(targetEntity=Subscription::class, cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $subscription;

    /**
     * @ORM\OneToMany(targetEntity=Videos::class, mappedBy="user", orphanRemoval=true)
     */
    private $videos;

    public function __construct()
    {
        $this->ratedVideos = new ArrayCollection();
        $this->videos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * @return Collection|Videos[]
     */
    public function getRatedVideos(): Collection
    {
        return $this->ratedVideos;
    }

    public function addRatedVideo(Videos $likedVideo): self
    {
        if (!$this->ratedVideos->contains($likedVideo)) {
            $this->ratedVideos[] = $likedVideo;
            $likedVideo->addUsersRate($this);
        }

        return $this;
    }

    public function removeRatedVideo(Videos $likedVideo): self
    {
        if ($this->ratedVideos->contains($likedVideo)) {
            $this->ratedVideos->removeElement($likedVideo);
            $likedVideo->removeUsersRate($this);
        }

        return $this;
    }

    public function getSubscription(): ?Subscription
    {
        return $this->subscription;
    }

    public function setSubscription(?Subscription $subscription): self
    {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * @return Collection|Videos[]
     */
    public function getVideos(): Collection
    {
        return $this->videos;
    }

    public function addVideo(Videos $video): self
    {
        if (!$this->videos->contains($video)) {
            $this->videos[] = $video;
            $video->setUser($this);
        }

        return $this;
    }

    public function removeVideo(Videos $video): self
    {
        if ($this->videos->contains($video)) {
            $this->videos->removeElement($video);
            // set the owning side to null (unless already changed)
            if ($video->getUser() === $this) {
                $video->setUser(null);
            }
        }

        return $this;
    }

}
