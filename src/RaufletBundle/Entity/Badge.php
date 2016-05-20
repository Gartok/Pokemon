<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Badge
 *
 * @ORM\Table(name="badge")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\BadgeRepository")
 */
class Badge
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
     * @ORM\OneToOne(targetEntity="Trainer")
     */
    private $master;

    /**
     * @ORM\OneToOne(targetEntity="Arena")
     */
    private $arena;

    /**
     * @ORM\OneToMany(targetEntity="Zone", mappedBy="badges")
     */
    private $zone;

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
     * @return Badge
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
        $this->zone = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set master
     *
     * @param \RaufletBundle\Entity\Trainer $master
     *
     * @return Badge
     */
    public function setMaster(\RaufletBundle\Entity\Trainer $master = null)
    {
        $this->master = $master;

        return $this;
    }

    /**
     * Get master
     *
     * @return \RaufletBundle\Entity\Trainer
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * Set arena
     *
     * @param \RaufletBundle\Entity\Arena $arena
     *
     * @return Badge
     */
    public function setArena(\RaufletBundle\Entity\Arena $arena = null)
    {
        $this->arena = $arena;

        return $this;
    }

    /**
     * Get arena
     *
     * @return \RaufletBundle\Entity\Arena
     */
    public function getArena()
    {
        return $this->arena;
    }

    /**
     * Add zone
     *
     * @param \RaufletBundle\Entity\Zone $zone
     *
     * @return Badge
     */
    public function addZone(\RaufletBundle\Entity\Zone $zone)
    {
        $this->zone[] = $zone;

        return $this;
    }

    /**
     * Remove zone
     *
     * @param \RaufletBundle\Entity\Zone $zone
     */
    public function removeZone(\RaufletBundle\Entity\Zone $zone)
    {
        $this->zone->removeElement($zone);
    }

    /**
     * Get zone
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getZone()
    {
        return $this->zone;
    }
}
