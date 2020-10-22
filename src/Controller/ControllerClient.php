<?php


namespace App\Controller;

use App\Entity\Clients;
use App\Entity\Contact;
use App\Entity\Dossiers;
use App\Entity\Voyageurs;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerClient extends AbstractController
{
    /**
     * @return Response
     * @Route (path="/toto", name="accueil")
     * @Route (path="/", name="accueil")
     */
    public function toto()
    {
        $en = $this->getDoctrine()->getManager();
        $clients = $en->getRepository(Clients::class)->findAll();

        return $this->render('toto.html.twig',['clients'=>$clients]);
    }

    /**
     * @return Response
     * @Route (path="/info/{id}", name="info")
     */
    public function informations(Clients $client = null)
    {
        $en = $this->getDoctrine()->getManager();
        $dossiers = $en->getRepository(Dossiers::class)->findBy(['referenceClient'=>$client->getIdClient()]);
        return $this->render('info.html.twig',['dossiers'=>$dossiers]);
    }

    /**
     * @return Response
     * @Route (path="/ajoutVoyageur", name="ajoutVoyageur")
     */
    public function ajoutVoyageur()
    {
        return $this->render('ajoutVoyageur.html.twig', ['ajout'=>false]);
    }


    /**
     * @return Response
     * @Route (path="/ajoutVoyageurOk", name="ajoutVoyageurOk")
     */
    public function ajoutDonneesVoyageur(Request $request)
    {
        $en = $this->getDoctrine()->getManager();

        $nomVoyageur=$request->get('nomVoyageur');
        $prenomVoyageur=$request->get('prenomVoyageur');
        $telephoneVoyageur=$request->get('telephoneVoyageur');
        $emailVoyageur=$request->get('emailVoyageur');

        $voyageur = new Voyageurs();
        $voyageur->setPrenom($prenomVoyageur);
        $voyageur->setNom($nomVoyageur);

        $en->persist($voyageur);
        $en->flush();

        $contact = new Contact();
        $contact->setMethode('telephone');
        $contact->setValeur($telephoneVoyageur);
        $contact->setIdVoyageur($voyageur->getIdVoyageur());

        $en->persist($contact);
        $en->flush();

        $contact = new Contact();
        $contact->setMethode('mail');
        $contact->setValeur($emailVoyageur);
        $contact->setIdVoyageur($voyageur->getIdVoyageur());

        $en->persist($contact);
        $en->flush();

        return $this->render('ajoutVoyageurOk.html.twig', ['ajout'=>true]);
    }
}