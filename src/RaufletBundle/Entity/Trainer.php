<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trainer
 *
 * @ORM\Table(name="trainer")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\TrainerRepository")
 */
class Trainer
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Pokemons", mappedBy="trainer")
     */
    private $pokemons;

    /**
     * @ORM\OneToMany(targetEntity="Win", mappedBy="trainer")
     */
    private $wins;

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
     * Set name
     *
     * @param string $name
     *
     * @return Trainer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pokemons = new \Doctrine\Common\Collections\ArrayCollection();
        $this->wins = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pokemon
     *
     * @param \RaufletBundle\Entity\Pokemons $pokemon
     *
     * @return Trainer
     */
    public function addPokemon(\RaufletBundle\Entity\Pokemons $pokemon)
    {
        $this->pokemons[] = $pokemon;

        return $this;
    }

    /**
     * Remove pokemon
     *
     * @param \RaufletBundle\Entity\Pokemons $pokemon
     */
    public function removePokemon(\RaufletBundle\Entity\Pokemons $pokemon)
    {
        $this->pokemons->removeElement($pokemon);
    }

    /**
     * Get pokemons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPokemons()
    {
        return $this->pokemons;
    }

    /**
     * Add win
     *
     * @param \RaufletBundle\Entity\Win $win
     *
     * @return Trainer
     */
    public function addWin(\RaufletBundle\Entity\Win $win)
    {
        $this->wins[] = $win;

        return $this;
    }

    /**
     * Remove win
     *
     * @param \RaufletBundle\Entity\Win $win
     */
    public function removeWin(\RaufletBundle\Entity\Win $win)
    {
        $this->wins->removeElement($win);
    }

    /**
     * Get wins
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWins()
    {
        return $this->wins;
    }
}
