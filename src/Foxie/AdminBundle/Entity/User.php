<?php

namespace Foxie\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Foxie\AdminBundle\Entity\User
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User implements UserInterface
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="username", type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(name="salt", type="string", length=32)
     */
    private $salt;

    /**
     * @ORM\Column(name="password", type="string", length=40)
     */
    private $password;

    /**
     * @ORM\Column(name="email", type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    public function __construct()
    {
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
    }
    
    public function setUsername($username) {
        $this->username = $username;
    }
    
    public function setPassword($pass) {
        $this->password = $pass;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function getIsActive() {
        return $this->isActive;
    }
    
    public function setIsActive($isActive) {
        $this->isActive = $isActive;
    }

    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @inheritDoc
     */
    public function equals(UserInterface $user)
    {
        return $this->username === $user->getUsername();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}