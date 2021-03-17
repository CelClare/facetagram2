<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity()
* @ORM\Table(name="panier")
* */
class Panier
{

    /**
    * @ORM\Id()
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    public $id;
    /**
    * @ORM\Column(type="string")
    */
    private $name;
    /**
     * Un panier a potentiellement plusieurs products
     * mappedBy=l'entité panier appelle les products 
     * @ORM\ManyToMany(targetEntity="App\Entity\Product", mappedBy="panier")
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get un panier a potentiellement plusieurs products
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set un panier a potentiellement plusieurs products
     *
     * @return  self
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }
}