<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="user_pseudo", type="string", length=125)
     */
    private $userPseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=125)
     */
    private $userEmail;

    /**
     * One User has Many Comments.
     * @ORM\OneToMany (targetEntity="Comment", mappedBy="user")
     */
    private $comments;

    public function __construct() {
        $this->comments = new ArrayCollection();
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
     * Set userPseudo
     *
     * @param string $userPseudo
     *
     * @return User
     */
    public function setUserPseudo($userPseudo)
    {
        $this->userPseudo = $userPseudo;

        return $this;
    }

    /**
     * Get userPseudo
     *
     * @return string
     */
    public function getUserPseudo()
    {
        return $this->userPseudo;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     *
     * @return User
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }
}

