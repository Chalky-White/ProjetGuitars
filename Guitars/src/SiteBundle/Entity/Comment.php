<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * Many Comments have One Guitar.
     * @ORM\ManyToOne(targetEntity="Guitar", inversedBy="comments")
     * @ORM\JoinColumn(name="guitar_id", referencedColumnName="id")
     */
    private $guitar;

    /**
     * Many Comments have One User.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="comments")
<<<<<<< HEAD
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
=======
     * @ORM\JoinColumn(name="comment_id", referencedColumnName="id")     */

>>>>>>> 1cca1a1312835ea84b21c03402db7f51bd91adf7
    private $user;


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
     * Get guitar
     *
     * @return string
     */
    public function getGuitar()
    {
        return $this->guitar;
    }


    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
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
