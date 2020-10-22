<?php


namespace App\Controller;

use App\Entity\Voyages;
use App\Entity\Dossiers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerVoyages extends AbstractController
{
    /**
     * @return Response
     * @Route (path="/voyages", name="voyages")
     */
    public function toto()
    {
        $en = $this->getDoctrine()->getManager();
        $voyages = $en->getRepository(Voyages::class)->findAll();

        return $this->render('voyages.html.twig',['voyages'=>$voyages]);
    }


    /**
     * @return Response
     * @Route (path="/voyage_clients/{id}", name="voyage_clients")
     */
    public function informations_voyages(Voyages $voyage = null)
    {
        $en = $this->getDoctrine()->getManager();

        //$dossiers = $en->getRepository(Dossiers::class)->findBy(['referenceVoyage'=>$voyage->getIdVoyage()]);
        //$dossiers = $voyage->getIdVoyageView();
        //$en->getRepository(Dossiers::class)->findBy(['referenceVoyage'=>]);
        return $this->render('voyage_clients.html.twig',['dossiers'=>$dossiers]);
    }


}