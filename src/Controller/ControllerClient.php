<?php


namespace App\Controller;

use App\Entity\Clients;
use App\Entity\Dossiers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

}