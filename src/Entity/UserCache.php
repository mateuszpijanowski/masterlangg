<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserCache
 *
 * @ORM\Table(name="user_cache", uniqueConstraints={@ORM\UniqueConstraint(name="id_user", columns={"id_user"}), @ORM\UniqueConstraint(name="score", columns={"score"})})
 * @ORM\Entity
 */
class UserCache
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cache", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCache;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer", nullable=false)
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulty", type="text", length=65535, nullable=false)
     */
    private $difficulty;

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time;

    /**
     * @var \UserData
     *
     * @ORM\ManyToOne(targetEntity="UserData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdCache(): ?int
    {
        return $this->idCache;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getDifficulty(): ?string
    {
        return $this->difficulty;
    }

    public function setDifficulty(string $difficulty): self
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getIdUser(): ?UserData
    {
        return $this->idUser;
    }

    public function setIdUser(?UserData $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}
