<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemons
 *
 * @ORM\Table(name="pokemons")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\PokemonsRepository")
 */
class Pokemons
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
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="catchDate", type="datetime")
     */
    private $catchDate;

    /**
     * @ORM\ManyToOne(targetEntity="\Application\Sonata\UserBundle\Entity\User", inversedBy="pokemons")
     * @ORM\JoinColumn(nullable=false)
     */
    private $trainer;

    /**
     * @ORM\ManyToOne(targetEntity="Attack")
     */
    private $firstAttack;

    /**
     * @ORM\ManyToOne(targetEntity="Attack")
     */
    private $secondAttack;

    /**
     * @ORM\ManyToOne(targetEntity="Attack")
     */
    private $thirdAttack;

    /**
     * @ORM\ManyToOne(targetEntity="Attack")
     */
    private $fourthAttack;

    /**
     * @ORM\ManyToOne(targetEntity="PokemonType")
     */
    private $type;

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
     * Set surname
     *
     * @param string $surname
     *
     * @return Pokemons
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Pokemons
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set catchDate
     *
     * @param \DateTime $catchDate
     *
     * @return Pokemons
     */
    public function setCatchDate($catchDate)
    {
        $this->catchDate = $catchDate;

        return $this;
    }

    /**
     * Get catchDate
     *
     * @return \DateTime
     */
    public function getCatchDate()
    {
        return $this->catchDate;
    }

    /**
     * Set trainer
     *
     * @param \Application\Sonata\UserBundle\Entity\User $trainer
     *
     * @return Pokemons
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
     * Set firstAttack
     *
     * @param \RaufletBundle\Entity\Attack $firstAttack
     *
     * @return Pokemons
     */
    public function setFirstAttack(\RaufletBundle\Entity\Attack $firstAttack = null)
    {
        $this->firstAttack = $firstAttack;

        return $this;
    }

    /**
     * Get firstAttack
     *
     * @return \RaufletBundle\Entity\Attack
     */
    public function getFirstAttack()
    {
        return $this->firstAttack;
    }

    /**
     * Set secondAttack
     *
     * @param \RaufletBundle\Entity\Attack $secondAttack
     *
     * @return Pokemons
     */
    public function setSecondAttack(\RaufletBundle\Entity\Attack $secondAttack = null)
    {
        $this->secondAttack = $secondAttack;

        return $this;
    }

    /**
     * Get secondAttack
     *
     * @return \RaufletBundle\Entity\Attack
     */
    public function getSecondAttack()
    {
        return $this->secondAttack;
    }

    /**
     * Set thirdAttack
     *
     * @param \RaufletBundle\Entity\Attack $thirdAttack
     *
     * @return Pokemons
     */
    public function setThirdAttack(\RaufletBundle\Entity\Attack $thirdAttack = null)
    {
        $this->thirdAttack = $thirdAttack;

        return $this;
    }

    /**
     * Get thirdAttack
     *
     * @return \RaufletBundle\Entity\Attack
     */
    public function getThirdAttack()
    {
        return $this->thirdAttack;
    }

    /**
     * Set fourthAttack
     *
     * @param \RaufletBundle\Entity\Attack $fourthAttack
     *
     * @return Pokemons
     */
    public function setFourthAttack(\RaufletBundle\Entity\Attack $fourthAttack = null)
    {
        $this->fourthAttack = $fourthAttack;

        return $this;
    }

    /**
     * Get fourthAttack
     *
     * @return \RaufletBundle\Entity\Attack
     */
    public function getFourthAttack()
    {
        return $this->fourthAttack;
    }

    /**
     * Set type
     *
     * @param \RaufletBundle\Entity\PokemonType $type
     *
     * @return Pokemons
     */
    public function setType(\RaufletBundle\Entity\PokemonType $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \RaufletBundle\Entity\PokemonType
     */
    public function getType()
    {
        return $this->type;
    }
}
