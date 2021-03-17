<?php
// src/Controller/MaterielController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\MaterielType;
use App\Entity\Materiel;


class MaterielController extends AbstractController
{
    /**
     * @Route("/materiel", name="materiel")
     */

     public function materiel(Request $request)
     {
         $materiel = new Materiel();
 
         //création d'un nouvel objet form dont j'ai appelé la creation par la function par defaut buildForm ds le fichier MaterielType.php de la class MaterielType
         $form = $this->createForm(MaterielType::class, $materiel);
          
         $form->handleRequest($request);
 
         if ($form->isSubmitted() && $form->isValid()) {
             // si "submit" ET tout est valide
             dump($materiel);// alors afficher le contenu de l'objet $article sur la console
             
             // Je récupère le manageur des données de ma table
             $em = $this->getDoctrine()->getManager();
             // Je prépare la sauvegarde /l'insertion de mon objet $contact dans ma base (1ligne de table)
             $em->persist($materiel);
             // Execution de SQL (em veut dire entity manager)
             $em->flush();
         }
 
         return $this->render('materiel.html.twig', ['monFormulaire' => $form->createView()]);
     }

     /**
     * @Route("/materiel/edit/{id<\d+>}")
     */
    public function edit(Request $request, Materiel $materiel)
    {
    $form = $this->createForm(MaterielType::class, $materiel);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // va effectuer la requête d'UPDATE en base de données
        $this->getDoctrine()->getManager()->flush();
    }

     return $this->render('materiel.html.twig', ['Formulaire'=>$form->createView()]);
    }

    /**
     * @Route("/materiel/delete/{id<\d+>}")
     */
    public function delete(Request $request, Materiel $materiel)
    {
    $em = $this->getDoctrine()->getManager();
    $em->remove($materiel);
    $em->flush();

    // redirige la page
    return $this->redirectToRoute('home');
    }

    /**
     * @Route("/materiellist", name="materiellist" )
     */
    public function show(Request $request)
    {
        // get Repository va aller au niveau des données dans la table précisée
        // SELECT query
        $repository = $this->getDoctrine()->getRepository(Materiel::class);
        // a ce stade il a accès au données
        // je veux stocker dans la variable $contacts TOUT mes contacts
        $materiaux = $repository->findAll();

    return $this->render('materiellist.html.twig', ['materiaux'=>$materiaux]);
    }

    /**
     * @Route("/materiel", name="materiel" )
     */
    public function new(Request $request)
    {
        $materiel = new Materiel();#Instanciation de la class Materiel. $materiel est un objet

        

        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);//Verification des contraintes imposées (ex: min caractères pr le champs description, NotBlank {ne pas retourner vide}..)

   		 if ($form->isSubmitted() && $form->isValid()) {// si "submit" et tout est valide
       		 dump($materiel);//alors afficher le contenu de l'objet $article sur la console
             $em = $this->getDoctrine()->getManager();
             $em->persist($materiel);
             $em->flush();
       
        }

    return $this->render('materiel.html.twig', ['Formulaire'=>$form->createView()]);
    }

}