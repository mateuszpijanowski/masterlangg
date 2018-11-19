<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LangHard
 *
 * @ORM\Table(name="lang_hard")
 * @ORM\Entity
 */
class LangHard
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="lang_name", type="string", length=3, nullable=false)
     */
    private $langName;

    /**
     * @var string
     *
     * @ORM\Column(name="lang_fullname", type="text", length=65535, nullable=false)
     */
    private $langFullname;

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getLangName(): ?string
    {
        return $this->langName;
    }

    public function setLangName(string $langName): self
    {
        $this->langName = $langName;

        return $this;
    }

    public function getLangFullname(): ?string
    {
        return $this->langFullname;
    }

    public function setLangFullname(string $langFullname): self
    {
        $this->langFullname = $langFullname;

        return $this;
    }


}
