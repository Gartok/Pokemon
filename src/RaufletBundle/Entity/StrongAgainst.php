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
     * @ORM\Column(name="modifier", type="decimal", precision=10, scale=0)
     */
    private $modifier;


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
}

