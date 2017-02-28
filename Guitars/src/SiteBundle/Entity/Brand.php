<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Brand
 *
 * @ORM\Table(name="brand")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\BrandRepository")
 */
class Brand
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
     * @ORM\Column(name="name", type="string", length=125)
     */
    private $name;


    /**
     * One Brand has Many Guitars.
     * @ORM\OneToMany (targetEntity="Guitar", mappedBy="brand")
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
            $guitar->setBrand($this);
        }

        return $this;
    }

    /**
     * Remove guitar
     *
     * @param Guitar $guitar
     *
     * @return Guitar
     */
    public function removeGuitar(Guitar $guitar)
    {
        if ($this->guitars->contains($guitar)) {
            $this->guitars->removeElement($guitar);
            $guitar->setBrand(null);
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
     * @return Brand
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
