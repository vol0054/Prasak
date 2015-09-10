<?php

namespace App\Model\Entities;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 *
 * @author KytaVeprova
 */
class Pub {
	
	/**
	 *@ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 */
	protected $id;
	
	/** @ORM\Column(type="string") */
	protected $name;
	
	/** @ORM\Column(type="string") */
	protected $description;
	
	/** @ORM\Column(type="string") */
	protected $address;
	
	/** @ORM\Column(type="string") */
	protected $www;
	
	/** @ORM\Column(type="string") */
	protected $imgPath;
	
	
	
	/******* METHODS ***********\
	
	/**
	 * @return int
	 */
    public function getId()
    {
        return $this->id;
    }
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}
	
	public function getAddress()
	{
		return $this->address;
	}
	
	public function setAddress($address)
	{
		$this->address = $address;
		return $this;
	}
	
	public function getWww()
	{
		return $this->www;
	}
	
	public function getImgPath()
	{
		return $this->imgPath;
	}
	
	public function setImgPath($pathToImg)
	{
		$this->imgPath = $pathToImg;
		return $this;
	}
	
}
