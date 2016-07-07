<?php
// src/UserBundle/Entity/User.php
namespace UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{   
    /**
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    //All the rest is include in FOS 
}