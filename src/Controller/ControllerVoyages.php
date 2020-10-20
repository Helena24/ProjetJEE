<?php


namespace App\Controller;

use App\Entity\Voyages;
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

}