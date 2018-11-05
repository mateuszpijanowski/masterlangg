<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserData
 *
 * @ORM\Table(name="user_data", uniqueConstraints={@ORM\UniqueConstraint(name="nick_2", columns={"nick"})}, indexes={@ORM\Index(name="nick", columns={"nick"})})
 * @ORM\Entity
 */
class UserData
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=255, nullable=false)
     */
    private $nick;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="text", length=65535, nullable=false)
     */
    private $pass;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", length=65535, nullable=false)
     */
    private $email;

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getNick(): ?string
    {
        return $this->nick;
    }

    public function setNick(string $nick): self
    {
        $this->nick = $nick;

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->pass;
    }

    public function setPass(string $pass): self
    {
        $this->pass = $pass;

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


}
