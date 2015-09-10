<?php

namespace App\Model\Entities;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 *
 * @author KytaVeprova
 */
class Team extends \Kdyby\Doctrine\Entities\BaseEntity{
	
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 */
    private $id;
	
	/**
	 * @ORM\Column(type="string")
	 */
    private $name;
	
	/**
	 * @ORM\Column(type="string")
	 */
    private $email;
	
	/**
	 * @ORM\Column(type="integer")
	 */
    private $numOfRunners;
	
	/**
	 * @ORM\Column(type="datetime")
	 */
    private $registeredAt;
	
	
}
