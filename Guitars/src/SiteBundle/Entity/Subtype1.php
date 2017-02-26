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
     * Many Subtype1s have One Type.
     * @ORM\ManyToOne(targetEntity="Type", inversedBy="subtype1s")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;

    /**
     * Many Subtype1s have Many Subtype2s.
     * @ORM\ManyToMany(targetEntity="Subtype2", inversedBy="subtype1s")
     */
    private $subtype2s;

    public function __construct() {
        $this->subtype2s = new ArrayCollection();
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

