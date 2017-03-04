<?php
/**
 * Created by PhpStorm.
 * User: Stax
 * Date: 28/02/2017
 * Time: 19:58
 */
/**
* Many Guitars have Many Tags.
     * @ORM\ManyToMany(targetEntity="Tag")
* @ORM\JoinTable(name="guitars_tags",
     *         joinColumns={@JoinColumn(name="guitar_id", referencedColumnName="id")},
     *          inverseJoinColumns={@JoinColumn(name=tag_id", referencedColumnName="id")})
     */

    private $tags;

   public function __construct() {
        $this->tags = new ArrayCollection();
        $this->comments = new ArrayCollection();
    }


/**
* Add tag
*
     * @param Tag $tag
*
     * @return Tag
    */
    public function addTag(Tag $tag)
{
    if (!$this->tags->contains($tag)) {
        $this->tags->add($tag);
        $tag->setGuitar($this);
    }

    return $this;
}

   /**
    * Remove tag
    *
    * @param Tag $tag
    *
    * @return Tag
    */
    public function removeTag(Tag $tag)
{
    if ($this->tags->contains($tag)) {
        $this->tags->removeElement($tag);
        $tag->setGuitar(null);
    }

    return $this;
}

   /**
    * Get tags
    *
    * @return ArrayCollection
    */
    public function getTag()
{
    return $this->tags;
}