<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attack
 *
 * @ORM\Table(name="attack")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\AttackRepository")
 */
class Attack
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
     * @ORM\Column(name="power", type="smallint")
     */
    private $power;

    /**
     * @var int
     *
     * @ORM\Column(name="accurate", type="integer")
     */
    private $accurate;


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
     * @return Attack
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
     * Set power
     *
     * @param integer $power
     *
     * @return Attack
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return int
     */
    public function getPower()
    {
        return $this->power;
    }


    /**
     * Set accurate
     *
     * @param integer $accurate
     *
     * @return Attack
     */
    public function setAccurate($accurate)
    {
        $this->accurate = $accurate;

        return $this;
    }

    /**
     * Get accurate
     *
     * @return integer
     */
    public function getAccurate()
    {
        return $this->accurate;
    }
}
