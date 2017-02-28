<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Subtype2
 *
 * @ORM\Table(name="subtype2")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\Subtype2Repository")
 */
class Subtype2
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
     * @ORM\Column(name="name", type="string", length=125, nullable=true)
     */
    private $name;

    /**
     * One Subtype2 has Many Guitar.
     * @ORM\OneToMany (targetEntity="Guitar", mappedBy="subtype2")
     */
    private $guitars;


    public function __construct() {
        $this->guitars = new ArrayCollection();
    }


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
     * Add guitar
     *
     * @param Guitar $guitar
     *
     * @return Guitar
     */
    public function addGuitar(Guitar $guitar)
    {
        if (!$this->guitars->contains($guitar)) {
            $this->guitars->add($guitar);
            $guitar->setSubtype2($this);
        }

        return $this;
    }

    /**
     * Remove $guitar
     *
     * @param Guitar $guitar
     *
     * @return Guitar
     */
    public function removeGuitar(Guitar $guitar)
    {
        if ($this->guitars->contains($guitar)) {
            $this->guitars->removeElement($guitar);
            $guitar->setSubtype2(null);
        }

        return $this;
    }

    /**
     * Get guitars
     *
     * @return ArrayCollection
     */
    public function getGuitars()
    {
        return $this->guitars;
    }



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Subtype2
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
}
