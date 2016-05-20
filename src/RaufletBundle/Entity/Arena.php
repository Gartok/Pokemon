<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arena
 *
 * @ORM\Table(name="arena")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\ArenaRepository")
 */
class Arena
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
     * @ORM\OneToOne(targetEntity="Position")
     */
    private $position;

    /**
     * @ORM\OneToOne(targetEntity="Badge")
     */
    private $badge;

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
     * @return Arena
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
     * Set position
     *
     * @param \RaufletBundle\Entity\Position $position
     *
     * @return Arena
     */
    public function setPosition(\RaufletBundle\Entity\Position $position = null)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return \RaufletBundle\Entity\Position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set badge
     *
     * @param \RaufletBundle\Entity\Badge $badge
     *
     * @return Arena
     */
    public function setBadge(\RaufletBundle\Entity\Badge $badge = null)
    {
        $this->badge = $badge;

        return $this;
    }

    /**
     * Get badge
     *
     * @return \RaufletBundle\Entity\Badge
     */
    public function getBadge()
    {
        return $this->badge;
    }
}
