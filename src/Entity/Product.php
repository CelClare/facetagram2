<?php
//src/Entity/Article.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
//ORM vaut Doctrine\ORM\Mapping
use Doctrine\Common\Collections\ArrayCollection;

/**
* @ORM\Entity()
* @ORM\Table(name="product")
* */
class Product
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
    * @ORM\Column(type="integer")
    */
    private $price;

    /**
    * @ORM\Column(type="string")
    */
    private $category;
    
    /**
     * Les produits sont liées à un client
     * Je crée un lien manytoone(target c entité client, inversed c l'entité appelée dc products
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="products")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;

    /**
     * Un product est potentiellement appartenu par plusieurs paniers 
     * Je crée un lien manytomany(le target c entité panier, inversed c l'entité appelée dc products )
     * @ORM\ManyToMany(targetEntity="App\Entity\Panier", inversedBy="products")
     * Je crée un table jointure pr les lier
     * @ORM\JoinTable(name="products_paniers")
     */
    private $paniers; 

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }
    
    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
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
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get un product est potentiellement appartenu par plusieurs paniers
     */ 
    public function getPaniers()
    {
        return $this->paniers;
    }

    /**
     * Set un product est potentiellement appartenu par plusieurs paniers
     *
     * @return  self
     */ 
    public function setPaniers($paniers)
    {
        $this->paniers = $paniers;

        return $this;
    }
}