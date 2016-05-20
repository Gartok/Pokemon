<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Npc
 *
 * @ORM\Table(name="npc")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\NpcRepository")
 */
class Npc
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
     * @ORM\Column(name="profession", type="string", length=255)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;

    /**
     * @ORM\OneToMany(targetEntity="Objects", mappedBy="npc")
     */
    private $objects;

    /**
     * @ORM\OneToOne(targetEntity="Trainer", cascade={"persist"})
     */
    private $trainer;

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
     * @return Npc
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
     * Set profession
     *
     * @param string $profession
     *
     * @return Npc
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Npc
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->objects = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add object
     *
     * @param \RaufletBundle\Entity\Objects $object
     *
     * @return Npc
     */
    public function addObject(\RaufletBundle\Entity\Objects $object)
    {
        $this->objects[] = $object;

        return $this;
    }

    /**
     * Remove object
     *
     * @param \RaufletBundle\Entity\Objects $object
     */
    public function removeObject(\RaufletBundle\Entity\Objects $object)
    {
        $this->objects->removeElement($object);
    }

    /**
     * Get objects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * Set trainer
     *
     * @param \RaufletBundle\Entity\Trainer $trainer
     *
     * @return Npc
     */
    public function setTrainer(\RaufletBundle\Entity\Trainer $trainer = null)
    {
        $this->trainer = $trainer;

        return $this;
    }

    /**
     * Get trainer
     *
     * @return \RaufletBundle\Entity\Trainer
     */
    public function getTrainer()
    {
        return $this->trainer;
    }
}
