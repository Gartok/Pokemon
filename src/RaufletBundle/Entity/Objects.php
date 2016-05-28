<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objects
 *
 * @ORM\Table(name="objects")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\ObjectsRepository")
 */
class Objects
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
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity="ObjectsType", inversedBy="objects")
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="\Application\Sonata\UserBundle\Entity\User", inversedBy="objects")
     * @ORM\JoinColumn(nullable=false)
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
     * @return Objects
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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Objects
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set type
     *
     * @param \RaufletBundle\Entity\ObjectsType $type
     *
     * @return Objects
     */
    public function setType(\RaufletBundle\Entity\ObjectsType $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \RaufletBundle\Entity\ObjectsType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set npc
     *
     * @param \Application\Sonata\UserBundle\Entity\User $trainer
     *
     * @return Objects
     */
    public function setTrainer(\Application\Sonata\UserBundle\Entity\User $trainer)
    {
        $this->trainer = $trainer;

        return $this;
    }

    /**
     * Get npc
     *
     * @return \Application\Sonata\UserBundle\Entity
     */
    public function getTrainer()
    {
        return $this->trainer;
    }
}
