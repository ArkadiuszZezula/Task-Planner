<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {
    
    /**
     * @ORM\OneToMany(targetEntity="Category", mappedBy="users")
     */
    private $categories;
    
    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="users")
     */
    private $tasks;


    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct() {
        parent::__construct();
        $this->tasks = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

}
