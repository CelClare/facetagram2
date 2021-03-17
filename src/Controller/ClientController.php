<?php
// src/Controller/FormController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ClientType;
use App\Entity\Client;



class ClientController extends AbstractController
{
    /**
     * @Route("/newClient", name="newClient")
     */
    public function client(Request $request)
    {
        $client = new Client();

        //création d'un nouvel objet form dont j'ai appelé la creation par la function par defaut buildForm ds le fichier ContactType.php de la class ContactType
        $form = $this->createForm(ClientType::class, $client);
 		$form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // si "submit" ET tout est valide
             dump($client);// alors afficher le contenu de l'objet $product sur la console
        }
        return $this->render('newClient.html.twig', ['formClient' => $form->createView()]);
    }
    
    
    
}