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



    /**
     * Many Subtype2s have Many Subtype1s.
     * @ORM\ManyToMany(targetEntity="Subtype1", inversedBy="subtype2s")
     * @ORM\JoinTable(name="sub1s_sub2s")
     */
    private $subtype1s;

    public function __construct() {
        $this->subtype1s = new ArrayCollection();
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

