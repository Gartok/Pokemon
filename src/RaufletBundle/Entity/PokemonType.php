<?php

namespace RaufletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PokemonType
 *
 * @ORM\Table(name="pokemon_type")
 * @ORM\Entity(repositoryClass="RaufletBundle\Repository\PokemonTypeRepository")
 */
class PokemonType
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
     * @ORM\Column(name="attack", type="smallint")
     */
    private $attack;

    /**
     * @var int
     *
     * @ORM\Column(name="attackSpe", type="smallint")
     */
    private $attackSpe;

    /**
     * @var int
     *
     * @ORM\Column(name="defence", type="smallint")
     */
    private $defence;

    /**
     * @var int
     *
     * @ORM\Column(name="defenceSpe", type="smallint")
     */
    private $defenceSpe;

    /**
     * @var int
     *
     * @ORM\Column(name="speed", type="smallint")
     */
    private $speed;

    /**
     * @var int
     *
     * @ORM\Column(name="life", type="smallint")
     */
    private $life;


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
     * @return PokemonType
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
     * Set attack
     *
     * @param integer $attack
     *
     * @return PokemonType
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;

        return $this;
    }

    /**
     * Get attack
     *
     * @return int
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set attackSpe
     *
     * @param integer $attackSpe
     *
     * @return PokemonType
     */
    public function setAttackSpe($attackSpe)
    {
        $this->attackSpe = $attackSpe;

        return $this;
    }

    /**
     * Get attackSpe
     *
     * @return int
     */
    public function getAttackSpe()
    {
        return $this->attackSpe;
    }

    /**
     * Set defence
     *
     * @param integer $defence
     *
     * @return PokemonType
     */
    public function setDefence($defence)
    {
        $this->defence = $defence;

        return $this;
    }

    /**
     * Get defence
     *
     * @return int
     */
    public function getDefence()
    {
        return $this->defence;
    }

    /**
     * Set defenceSpe
     *
     * @param integer $defenceSpe
     *
     * @return PokemonType
     */
    public function setDefenceSpe($defenceSpe)
    {
        $this->defenceSpe = $defenceSpe;

        return $this;
    }

    /**
     * Get defenceSpe
     *
     * @return int
     */
    public function getDefenceSpe()
    {
        return $this->defenceSpe;
    }

    /**
     * Set speed
     *
     * @param integer $speed
     *
     * @return PokemonType
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set life
     *
     * @param integer $life
     *
     * @return PokemonType
     */
    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get life
     *
     * @return int
     */
    public function getLife()
    {
        return $this->life;
    }
}
