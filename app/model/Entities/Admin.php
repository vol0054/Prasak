<?php

namespace App\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 *
 * @author KytaVeprova
 */
class Admin extends \Kdyby\Doctrine\Entities\BaseEntity
{
	
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 */
    private $id;
	
	/**
	 * @ORM\Column(type="string")
	 */
    private $username;
	
	/**
	 * @ORM\Column(type="string")
	 */
    private $email;
	
	/**
	 * @ORM\Column(type="string")
	 */
    private $password;
	
	
	/**
	 * @return int
	 */
    public function getId()
    {
        return $this->id;
    }
	
	
	/**
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}
	
	
	/**
	 * @param string
	 * @return \App\Model\Entities\Admin
	 */
	public function setUsername($username)
	{
		$this->username = $username;
		return $this;
	}
	
	
	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}
	
	
	/**
	 * @param string
	 * @return \App\Model\Entities\Admin
	 */
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}
	
	
	/**
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}
	
	
	/**
	 * @param string
	 * @return \App\Model\Entities\Admin
	 */
	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}
}
