<?php


namespace App\Controller;

use App\Entity\Voyages;
use App\Entity\Dossiers;
use App\Entity\Clients;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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
        $doss = $en->getRepository(Dossiers::class)->findAll();
        return $this->render('voyage_clients.html.twig',['dossVoyage'=>$doss, 'id_voyage'=>$voyage->getIdView()]);
    }

    /**
     * @return Response
     * @Route (path="/covid", name="covid")
     */
    public function searchCovid()
    {
        $en = $this->getDoctrine()->getManager();
        $clients = $en->getRepository(Clients::class)->findAll();
        return $this->render('covid.html.twig',['clients'=>$clients]);
    }

    /**
     * @return Response
     * @Route (path="/covidResult", name="covidResult")
     */
    public function resultCovid(Request $request)
    {
        $idClient=$request->get('idClientSearch');
        $date=$request->get('dateSearch');

        $en = $this->getDoctrine()->getManager();
        $dossiers = $en->getRepository(Dossiers::class)->findAll();
        return $this->render('covidResult.html.twig',['dossiers'=>$dossiers,'date'=>$date,'id'=>$idClient]);
    }


}