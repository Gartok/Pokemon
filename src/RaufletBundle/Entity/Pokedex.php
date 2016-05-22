<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokedex
 *
 * @ORM\Table(name="pokedex")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\PokedexRepository")
 */
class Pokedex
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
     * @ORM\OneToMany(targetEntity="PokemonType", mappedBy="pokedex")
     */
    private $pokemonTypes;

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
     * Set pokemonTypes
     *
     * @param \RaufletBundle\Entity\PokemonType $pokemonTypes
     *
     * @return Pokedex
     */
    public function setPokemonTypes(\RaufletBundle\Entity\PokemonType $pokemonTypes = null)
    {
        $this->pokemonTypes = $pokemonTypes;

        return $this;
    }

    /**
     * Get pokemonTypes
     *
     * @return \RaufletBundle\Entity\PokemonType
     */
    public function getPokemonTypes()
    {
        return $this->pokemonTypes;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pokemonTypes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pokemonType
     *
     * @param \RaufletBundle\Entity\PokemonType $pokemonType
     *
     * @return Pokedex
     */
    public function addPokemonType(\RaufletBundle\Entity\PokemonType $pokemonType)
    {
        $this->pokemonTypes[] = $pokemonType;

        return $this;
    }

    /**
     * Remove pokemonType
     *
     * @param \RaufletBundle\Entity\PokemonType $pokemonType
     */
    public function removePokemonType(\RaufletBundle\Entity\PokemonType $pokemonType)
    {
        $this->pokemonTypes->removeElement($pokemonType);
    }
}
