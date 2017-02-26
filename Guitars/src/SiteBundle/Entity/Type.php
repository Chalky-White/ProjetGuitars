<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Type
 *
 * @ORM\Table(name="type")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\TypeRepository")
 */
class Type
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
     * One Type has Many Subtype1s.
     * @ORM\OneToMany (targetEntity="Subtype1", mappedBy="type")
     */
    private $subtype1s;

    public function __construct() {
        $this->subtype1s = new ArrayCollection();
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
     * @return Type
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

