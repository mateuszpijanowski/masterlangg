<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRanking
 *
 * @ORM\Table(name="user_ranking", uniqueConstraints={@ORM\UniqueConstraint(name="id_user", columns={"id_user"}), @ORM\UniqueConstraint(name="nick_2", columns={"nick"})}, indexes={@ORM\Index(name="nick", columns={"nick"})})
 * @ORM\Entity
 */
class UserRanking
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ranking", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRanking;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer", nullable=false)
     */
    private $score;

    /**
     * @var \UserData
     *
     * @ORM\ManyToOne(targetEntity="UserData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    /**
     * @var \UserData
     *
     * @ORM\ManyToOne(targetEntity="UserData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nick", referencedColumnName="nick")
     * })
     */
    private $nick;

    public function getIdRanking(): ?int
    {
        return $this->idRanking;
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

    public function getIdUser(): ?UserData
    {
        return $this->idUser;
    }

    public function setIdUser(?UserData $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getNick(): ?UserData
    {
        return $this->nick;
    }

    public function setNick(?UserData $nick): self
    {
        $this->nick = $nick;

        return $this;
    }


}
