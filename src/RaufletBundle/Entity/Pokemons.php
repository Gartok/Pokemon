<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemons
 *
 * @ORM\Table(name="pokemons")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\PokemonsRepository")
 */
class Pokemons
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="catchDate", type="datetime")
     */
    private $catchDate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Pokemons
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Pokemons
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set catchDate
     *
     * @param \DateTime $catchDate
     *
     * @return Pokemons
     */
    public function setCatchDate($catchDate)
    {
        $this->catchDate = $catchDate;

        return $this;
    }

    /**
     * Get catchDate
     *
     * @return \DateTime
     */
    public function getCatchDate()
    {
        return $this->catchDate;
    }
}

