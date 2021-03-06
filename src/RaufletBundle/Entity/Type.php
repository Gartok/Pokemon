<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table(name="type")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\TypeRepository")
 */
class Type
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
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="PokemonType", mappedBy="types")
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
     * Set name
     *
     * @param string $name
     *
     * @return Type
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
        $this->pokemonTypes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pokemonType
     *
     * @param \RaufletBundle\Entity\PokemonType $pokemonType
     *
     * @return Type
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

    /**
     * Get pokemonTypes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPokemonTypes()
    {
        return $this->pokemonTypes;
    }
}
