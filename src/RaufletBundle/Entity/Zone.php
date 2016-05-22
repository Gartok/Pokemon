<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zone
 *
 * @ORM\Table(name="zone")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\ZoneRepository")
 */
class Zone
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
     * @ORM\OneToMany(targetEntity="Position", mappedBy="zone")
     */
    private $positions;

    /**
     * @ORM\ManyToMany(targetEntity="PokemonType", inversedBy="zones")
     * @ORM\JoinTable(name="users_groups")
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
     * @return Zone
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
     * Set badges
     *
     * @param \RaufletBundle\Entity\Badge $badges
     *
     * @return Zone
     */
    public function setBadges(\RaufletBundle\Entity\Badge $badges = null)
    {
        $this->badges = $badges;

        return $this;
    }

    /**
     * Get badges
     *
     * @return \RaufletBundle\Entity\Badge
     */
    public function getBadges()
    {
        return $this->badges;
    }


    /**
     * Add pokemonType
     *
     * @param \RaufletBundle\Entity\PokemonType $pokemonType
     *
     * @return Zone
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

    /**
     * Set positions
     *
     * @param \RaufletBundle\Entity\Position $positions
     *
     * @return Zone
     */
    public function setPositions(\RaufletBundle\Entity\Position $positions = null)
    {
        $this->positions = $positions;

        return $this;
    }

    /**
     * Get positions
     *
     * @return \RaufletBundle\Entity\Position
     */
    public function getPositions()
    {
        return $this->positions;
    }

    /**
     * Add badge
     *
     * @param \RaufletBundle\Entity\Badge $badge
     *
     * @return Zone
     */
    public function addBadge(\RaufletBundle\Entity\Badge $badge)
    {
        $this->badges[] = $badge;

        return $this;
    }

    /**
     * Remove badge
     *
     * @param \RaufletBundle\Entity\Badge $badge
     */
    public function removeBadge(\RaufletBundle\Entity\Badge $badge)
    {
        $this->badges->removeElement($badge);
    }

    /**
     * Add position
     *
     * @param \RaufletBundle\Entity\Position $position
     *
     * @return Zone
     */
    public function addPosition(\RaufletBundle\Entity\Position $position)
    {
        $this->positions[] = $position;

        return $this;
    }

    /**
     * Remove position
     *
     * @param \RaufletBundle\Entity\Position $position
     */
    public function removePosition(\RaufletBundle\Entity\Position $position)
    {
        $this->positions->removeElement($position);
    }
}
