<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Win
 *
 * @ORM\Table(name="win")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\WinRepository")
 */
class Win
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
     * @var \DateTime
     *
     * @ORM\Column(name="obtention", type="datetime")
     */
    private $obtention;


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
     * Set obtention
     *
     * @param \DateTime $obtention
     *
     * @return Win
     */
    public function setObtention($obtention)
    {
        $this->obtention = $obtention;

        return $this;
    }

    /**
     * Get obtention
     *
     * @return \DateTime
     */
    public function getObtention()
    {
        return $this->obtention;
    }
}

