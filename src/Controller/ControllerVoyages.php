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
        //$voy = $en->getRepository(Voyages::class)->findBy(['dateVoyage'=>$voyage->getDateVoyage()]);
        $doss = $en->getRepository(Dossiers::class)->findAll();//->findBy(['referenceVoyage'=>1]);


        return $this->render('voyage_clients.html.twig',['dossVoyage'=>$doss, 'id_voyage'=>$voyage->getIdView()]);//,'date'=>$voy]);
    }


}