<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Author
 *
 * @ORM\Table(name="author")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\AuthorRepository")
 */
class Author
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
     * One Author has Many Guitars.
     * @ORM\OneToMany (targetEntity="Guitar", mappedBy="author")
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
            $guitar->setAuthor($this);
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
            $guitar->setAuthor(null);
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
     * @return Author
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
