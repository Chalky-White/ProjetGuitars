<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Subtype1
 *
 * @ORM\Table(name="subtype1")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\Subtype1Repository")
 */
class Subtype1
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
     * Many Subtype1 has Many Subtype2.
     * @ManyToMany(targetEntity="Subtype2", mappedBy="Subtype1")
     */
    private $subtypes2s;

    public function __construct() {
        $this->subtypes2s = new ArrayCollection();
    }

    /**
     * Many Subtype1 has One Type.
     * @ManyToOne(targetEntity="Type", mappedBy="Subtype1")
     */
    private $types;

    public function __construct() {
        $this->types = new ArrayCollection();
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
     * @return Subtype1
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

