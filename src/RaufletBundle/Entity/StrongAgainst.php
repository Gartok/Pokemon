<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StrongAgainst
 *
 * @ORM\Table(name="strong_against")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\StrongAgainstRepository")
 */
class StrongAgainst
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
     * @ORM\Column(name="modifier", type="decimal", precision=10, scale=2)
     */
    private $modifier;

    /**
     * @ORM\ManyToOne(targetEntity="Type")
     */
    private $firstType;

    /**
     * @ORM\ManyToOne(targetEntity="Type")
     */
    private $secondType;

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
     * Set modifier
     *
     * @param string $modifier
     *
     * @return StrongAgainst
     */
    public function setModifier($modifier)
    {
        $this->modifier = $modifier;

        return $this;
    }

    /**
     * Get modifier
     *
     * @return string
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Set firstType
     *
     * @param \RaufletBundle\Entity\Type $firstType
     *
     * @return StrongAgainst
     */
    public function setFirstType(\RaufletBundle\Entity\Type $firstType = null)
    {
        $this->firstType = $firstType;

        return $this;
    }

    /**
     * Get firstType
     *
     * @return \RaufletBundle\Entity\Type
     */
    public function getFirstType()
    {
        return $this->firstType;
    }

    /**
     * Set secondType
     *
     * @param \RaufletBundle\Entity\Type $secondType
     *
     * @return StrongAgainst
     */
    public function setSecondType(\RaufletBundle\Entity\Type $secondType = null)
    {
        $this->secondType = $secondType;

        return $this;
    }

    /**
     * Get secondType
     *
     * @return \RaufletBundle\Entity\Type
     */
    public function getSecondType()
    {
        return $this->secondType;
    }
}
