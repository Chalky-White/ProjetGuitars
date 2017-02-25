<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
  
/**
 * Guitar
 *
 * @ORM\Table(name="guitar")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\GuitarRepository")
 */
class Guitar
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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=150, nullable=true)
     */
    private $serie;

    /**
     * @var text
     *
     * @ORM\Column(name="picture", type="text", length=600, nullable=true)
     */
    private $picture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_article", type="datetime", nullable=true)
     */
    private $dateArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="video_link", type="string", length=255, nullable=true)
     */
    private $videoLink;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_title", type="string", length=255, nullable=true)
     */
    private $seoTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_desc", type="text", nullable=true)
     */
    private $seoDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="micros", type="string", length=255, nullable=true)
     */
    private $micros;

    /**
     * @var string
     *
     * @ORM\Column(name="body_wood", type="string", length=255, nullable=true)
     */
    private $bodyWood;

    /**
     * @var string
     *
     * @ORM\Column(name="fretboard_wood", type="string", length=255, nullable=true)
     */
    private $fretboardWood;

    /**
     * @var string
     *
     * @ORM\Column(name="neck_wood", type="string", length=255, nullable=true)
     */
    private $neckWood;

    /**
     * Many Guitar has One Author
     * @ManyToOne(targetEntity="Author", mappedBy="Guitar")
     */
    private $authors;

    public function __construct() {
        $this->authors = new ArrayCollection();
    }

    /**
     * Many Guitar has One Brand
     * @ManyToOne(targetEntity="Brand", mappedBy="Guitar")
     */
    private $brands;

    public function __construct() {
        $this->brands = new ArrayCollection();
    }


    /**
     * Many Guitar has One Subtype2
     * @ManyToOne(targetEntity="Subtype2", mappedBy="Guitar")
     */
    private $subtype2s;

    public function __construct() {
        $this->$subtype2s = new ArrayCollection();
    }


    /**
     * Many Guitar has Many Tag
     * @ManyToMany(targetEntity="Tag", mappedBy="Guitar")
     */
    private $tags;

    public function __construct() {
        $this->$tags = new ArrayCollection();
    }


    /**
     * One Guitar has Many Comment
     * @OneToMany(targetEntity="Comment", mappedBy="Guitar")
     */
    private $comments;

    public function __construct() {
        $this->$comments = new ArrayCollection();
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
     * Set serie
     *
     * @param string $serie
     *
     * @return Guitar
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Guitar
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set picture
     *
     * @param text $picture
     *
     * @return Guitar
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set dateArticle
     *
     * @param \DateTime $dateArticle
     *
     * @return Guitar
     */
    public function setDateArticle($dateArticle)
    {
        $this->dateArticle = $dateArticle;

        return $this;
    }

    /**
     * Get dateArticle
     *
     * @return \DateTime
     */
    public function getDateArticle()
    {
        return $this->dateArticle;
    }

    /**
     * Set videoLink
     *
     * @param string $videoLink
     *
     * @return Guitar
     */
    public function setVideoLink($videoLink)
    {
        $this->videoLink = $videoLink;

        return $this;
    }

    /**
     * Get videoLink
     *
     * @return string
     */
    public function getVideoLink()
    {
        return $this->videoLink;
    }

    /**
     * Set seoTitle
     *
     * @param string $seoTitle
     *
     * @return Guitar
     */
    public function setSeoTitle($seoTitle)
    {
        $this->seoTitle = $seoTitle;

        return $this;
    }

    /**
     * Get seoTitle
     *
     * @return string
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * Set seoDesc
     *
     * @param string $seoDesc
     *
     * @return Guitar
     */
    public function setSeoDesc($seoDesc)
    {
        $this->seoDesc = $seoDesc;

        return $this;
    }

    /**
     * Get seoDesc
     *
     * @return string
     */
    public function getSeoDesc()
    {
        return $this->seoDesc;
    }

    /**
     * Set micros
     *
     * @param string $micros
     *
     * @return Guitar
     */
    public function setMicros($micros)
    {
        $this->micros = $micros;

        return $this;
    }

    /**
     * Get micros
     *
     * @return string
     */
    public function getMicros()
    {
        return $this->micros;
    }

    /**
     * Set bodyWood
     *
     * @param string $bodyWood
     *
     * @return Guitar
     */
    public function setBodyWood($bodyWood)
    {
        $this->bodyWood = $bodyWood;

        return $this;
    }

    /**
     * Get bodyWood
     *
     * @return string
     */
    public function getBodyWood()
    {
        return $this->bodyWood;
    }

    /**
     * Set fretboardWood
     *
     * @param string $fretboardWood
     *
     * @return Guitar
     */
    public function setFretboardWood($fretboardWood)
    {
        $this->fretboardWood = $fretboardWood;

        return $this;
    }

    /**
     * Get fretboardWood
     *
     * @return string
     */
    public function getFretboardWood()
    {
        return $this->fretboardWood;
    }

    /**
     * Set neckWood
     *
     * @param string $neckWood
     *
     * @return Guitar
     */
    public function setNeckWood($neckWood)
    {
        $this->neckWood = $neckWood;

        return $this;
    }

    /**
     * Get neckWood
     *
     * @return string
     */
    public function getNeckWood()
    {
        return $this->neckWood;
    }
}
