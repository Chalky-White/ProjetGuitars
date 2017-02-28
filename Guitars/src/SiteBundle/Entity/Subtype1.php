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
     * @ORM\ManyToMany(targetEntity="Subtype2")
     * @ORM\JoinTable(name="sub1_sub2")
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
     * Add subtype2
     *
     * @param Subtype2 $subtype2
     *
     * @return Subtype2
     */
    public function addSubtype2(Subtype2 $subtype2)
    {
        if (!$this->subtype2s->contains($subtype2)) {
            $this->subtype2s->add($subtype2);
            $subtype2->setSubtype1($this);
        }

        return $this;
    }

    /**
     * Remove subtype2
     *
     * @param Subtype2 $subtype2
     *
     * @return Subtype2
     */
    public function removeSubtype2(Subtype2 $subtype2)
    {
        if ($this->subtype2s->contains($subtype2)) {
            $this->subtype2s->removeElement($subtype2);
            $subtype2->setSubtype1(null);
        }

        return $this;
    }

    /**
     * Get subtype2
     *
     * @return ArrayCollection
     */
    public function getSubtype2()
    {
        return $this->subtype2s;
    }



    /**
     * Get type
     *
     * @return ArrayCollection
     */
    public function getType()
    {
        return $this->type;
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
