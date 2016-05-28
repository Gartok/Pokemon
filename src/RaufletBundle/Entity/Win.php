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
     * @ORM\ManyToOne(targetEntity="\Application\Sonata\UserBundle\Entity\User", inversedBy="wins")
     * @ORM\JoinColumn(nullable=false)
     */
    private $trainer;

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

    /**
     * Set trainer
     *
     * @param \Application\Sonata\UserBundle\Entity\User $trainer
     *
     * @return Win
     */
    public function setTrainer(\Application\Sonata\UserBundle\Entity\User $trainer)
    {
        $this->trainer = $trainer;

        return $this;
    }

    /**
     * Get trainer
     *
     * @return \Application\Sonata\UserBundle\Entity
     */
    public function getTrainer()
    {
        return $this->trainer;
    }

    /**
     * Set badge
     *
     * @param \RaufletBundle\Entity\Badge $badge
     *
     * @return Win
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
