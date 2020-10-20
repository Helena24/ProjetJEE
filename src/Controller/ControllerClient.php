<?php


namespace App\Controller;

use App\Entity\Clients;
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

}