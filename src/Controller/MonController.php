<?php
// src/Controller/FormController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use App\Entity\Contact;



class MonController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request)
    {
        $contact = new Contact();

        //création d'un nouvel objet form dont j'ai appelé la creation par la function par defaut buildForm ds le fichier ContactType.php de la class ContactType
        $form = $this->createForm(ContactType::class, $contact);
 		
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // si "submit" ET tout est valide
            dump($contact);// alors afficher le contenu de l'objet $article sur la console
            
            // Je récupère le manageur des données de ma table
            $em = $this->getDoctrine()->getManager();
            // Je prépare la sauvegarde /l'insertion de mon objet $contact dans ma base (1ligne de table)
            $em->persist($contact);
            // Execution de SQL (em veut dire entity manager)
            $em->flush();
        }

        return $this->render('contact.html.twig', ['monFormulaire' => $form->createView()]);
    }

    /**
     * @Route("/contact/edit/{id<\d+>}")
     */
    public function edit(Request $request, Contact $contact)
    {
    $form = $this->createForm(ContactType::class, $contact);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // va effectuer la requête d'UPDATE en base de données
        $this->getDoctrine()->getManager()->flush();
    }

     return $this->render('contact.html.twig', ['Formulaire'=>$form->createView()]);
    }

    /**
     * @Route("/contact/delete/{id<\d+>}")
     */
    public function delete(Request $request, Contact $contact)
    {
    $em = $this->getDoctrine()->getManager();
    $em->remove($contact);
    $em->flush();

    // redirige la page
    return $this->redirectToRoute('home');
    }

    /**
     * @Route("/contactlist", name="contactlist" )
     */
    public function show(Request $request)
    {
        // get Repository va aller au niveau des données dans la table précisée
        // SELECT query
        $repository = $this->getDoctrine()->getRepository(Contact::class);
        // a ce stade il a accès au données
        // je veux stocker dans la variable $contacts TOUT mes contacts
        $contacts = $repository->findAll();

    return $this->render('contactlist.html.twig', ['contacts'=>$contacts]);
    }

    /**
     * @Route("/contact", name="contact" )
     */
    public function new(Request $request)
    {
        $contact = new Contact();#Instanciation de la class Contact. $contact est un objet

        

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);//Verification des contraintes imposées (ex: min caractères pr le champs description, NotBlank {ne pas retourner vide}..)

   		 if ($form->isSubmitted() && $form->isValid()) {// si "submit" et tout est valide
       		 dump($contact);//alors afficher le contenu de l'objet $article sur la console
             $em = $this->getDoctrine()->getManager();
             $em->persist($contact);
             $em->flush();
       
        }

    return $this->render('contact.html.twig', ['Formulaire'=>$form->createView()]);
    }
    
    //JE CREER MES ROUTES VERS MES PAGES HTML
    /**
    * @Route("/navbar")
    */
    public function navbar()
    {
       return $this->render('navbar.html.twig');
    }

    /**
    * @Route("/", name="home")
    */
    public function home()
    {
    
        return $this->render('home.html.twig');
    }

//name="a_propos" pour créer une ancre
    /**
    * @Route("/about", name="a_propos")
    */
    public function about()
    {
    
        return $this->render('about.html.twig');
    }

    /**
    * @Route("/product", name="product")
    */
    public function produit()
    {
    
        return $this->render('product.html.twig');
    }

    /**
    * @Route("/services", name="services")
    */
    public function services()
    {
    
        return $this->render('services.html.twig');
    }
    
}