<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\CommentRepository")
 */
class Comment
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
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_comment", type="datetime", nullable=true)
     */
    private $dateComment;

    /**
     * Many Comment has One Guitar.
     * @ManyToOne(targetEntity="Guitar", mappedBy="Comment")
     */
    private $guitarss;

    public function __construct() {
        $this->guitars = new ArrayCollection();
    }

    /**
     * Many Comment Has One User.
     * @ManyToOne(targetEntity="User", mappedBy="Comment")
     */
    private $users;

    public function __construct() {
        $this->users = new ArrayCollection();
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
     * Set content
     *
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set dateComment
     *
     * @param \DateTime $dateComment
     *
     * @return Comment
     */
    public function setDateComment($dateComment)
    {
        $this->dateComment = $dateComment;

        return $this;
    }

    /**
     * Get dateComment
     *
     * @return \DateTime
     */
    public function getDateComment()
    {
        return $this->dateComment;
    }
}

