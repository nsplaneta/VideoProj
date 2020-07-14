<?php

namespace App\Entity;

use App\Repository\VideosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index as Index;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=VideosRepository::class)
 * @ORM\Table(indexes={@Index(name="title_idx", columns={"title"})})
 */
class Videos
{
    public const videoForNotLoggedInOrNoMember = '/uploads/videos/placeholder.mp4'; // Vimeo ID
    public const perPage = 5; // pagination
    public const uploadFolder = '/uploads/videos/';
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $path;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $duration;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="videos")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="video", orphanRemoval=true)
     */
    private $comments;

    /**
     * @ORM\ManyToMany(targetEntity=Users::class, inversedBy="ratedVideos")
     * @ORM\JoinTable(name="rates")
     */
    private $usersRate;
    
    /**
     * @Assert\NotBlank(message="Please upload a valid MP4 file")
     * @Assert\File(mimeTypes={"video/mp4"})
     */
    private $uploaded_video;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="videos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->usersRate = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getCategory(): ?Categories
    {
        return $this->category;
    }

    public function setCategory(?Categories $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setVideo($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getVideo() === $this) {
                $comment->setVideo(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Users[]
     */
    
    public function getUsersRate(): Collection
    {
        return $this->usersRate;
    }

    public function addUsersRate(Users $usersRate): self
    {
        if (!$this->usersRate->contains($usersRate)) {
            $this->usersRate[] = $usersRate;
        }

        return $this;
    }

    public function removeUsersRate(Users $usersRate): self
    {
        if ($this->usersRate->contains($usersRate)) {
            $this->usersRate->removeElement($usersRate);
        }

        return $this;
    }
    
    public function getUploadedVideo()
    {
        return $this->uploaded_video;
    }

    public function setUploadedVideo($uploaded_video): self
    {
        $this->uploaded_video = $uploaded_video;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }
}
