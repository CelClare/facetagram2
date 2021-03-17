<?php
// src/Controller/FormController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ProductType;
use App\Entity\Product;



class ProductController extends AbstractController
{
    /**
     * @Route("/newProduct", name="newProduct")
     */
    public function product(Request $request)
    {
        $product = new Product();

        //création d'un nouvel objet form dont j'ai appelé la creation par la function par defaut buildForm ds le fichier ContactType.php de la class ContactType
        $form = $this->createForm(ProductType::class, $product);
 		$form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // si "submit" ET tout est valide
             dump($product);// alors afficher le contenu de l'objet $product sur la console
        }
        return $this->render('newProduct.html.twig', ['formProduct' => $form->createView()]);
    }
    
    
    
}