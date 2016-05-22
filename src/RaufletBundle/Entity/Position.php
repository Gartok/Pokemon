<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Position
 *
 * @ORM\Table(name="position")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\PositionRepository")
 */
class Position
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
     * @var int
     *
     * @ORM\Column(name="x", type="integer")
     */
    private $x;

    /**
     * @var int
     *
     * @ORM\Column(name="y", type="integer")
     */
    private $y;

    /**
     * @ORM\ManyToOne(targetEntity="Zone", inversedBy="positions")
     * @ORM\JoinColumn(nullable=false)
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
     * Set x
     *
     * @param integer $x
     *
     * @return Position
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param integer $y
     *
     * @return Position
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return int
     */
    public function getY()
    {
        return $this->y;
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

    /**
     * Set zone
     *
     * @param \RaufletBundle\Entity\Zone $zone
     *
     * @return Position
     */
    public function setZone(\RaufletBundle\Entity\Zone $zone)
    {
        $this->zone = $zone;

        return $this;
    }

    public function __toString() {
        return '(' .$this->getX() . ';' . $this->getY() . ')';
    }
}
