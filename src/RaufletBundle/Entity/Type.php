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
     * @ORM\ManyToMany(targetEntity="WeakAgainst")
     */
    private $weakAgainsts;

    /**
     * @ORM\ManyToMany(targetEntity="StrongAgainst")
     */
    private $strongAgainsts;

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
        $this->weakAgainsts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->strongAgainsts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add weakAgainst
     *
     * @param \RaufletBundle\Entity\WeakAgainst $weakAgainst
     *
     * @return Type
     */
    public function addWeakAgainst(\RaufletBundle\Entity\WeakAgainst $weakAgainst)
    {
        $this->weakAgainsts[] = $weakAgainst;

        return $this;
    }

    /**
     * Remove weakAgainst
     *
     * @param \RaufletBundle\Entity\WeakAgainst $weakAgainst
     */
    public function removeWeakAgainst(\RaufletBundle\Entity\WeakAgainst $weakAgainst)
    {
        $this->weakAgainsts->removeElement($weakAgainst);
    }

    /**
     * Get weakAgainsts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWeakAgainsts()
    {
        return $this->weakAgainsts;
    }

    /**
     * Add strongAgainst
     *
     * @param \RaufletBundle\Entity\StrongAgainst $strongAgainst
     *
     * @return Type
     */
    public function addStrongAgainst(\RaufletBundle\Entity\StrongAgainst $strongAgainst)
    {
        $this->strongAgainsts[] = $strongAgainst;

        return $this;
    }

    /**
     * Remove strongAgainst
     *
     * @param \RaufletBundle\Entity\StrongAgainst $strongAgainst
     */
    public function removeStrongAgainst(\RaufletBundle\Entity\StrongAgainst $strongAgainst)
    {
        $this->strongAgainsts->removeElement($strongAgainst);
    }

    /**
     * Get strongAgainsts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStrongAgainsts()
    {
        return $this->strongAgainsts;
    }
}
