<?php


namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Voyages
 * @ORM\Entity()
 * @ORM\Table(name="Voyages")
 */
class Voyages
{
    /**
     * @ORM\Column(name="date_voyage", type="text")
     */
    private $dateVoyage;

    /**
     * @ORM\Column(name="type_transport", type="text")
     */
    private $typeTransport;

    /**
     * @ORM\Column(name="numero_transport", type="text")
     */
    private $numeroTransport;

    /**
     * @ORM\Column(name="ville_depart", type="text")
     */
    private $villeDepart;

    /**
     * @ORM\Column(name="ville_arrivee", type="text")
     */
    private $villeArrivee;

    /**
     * @ORM\Column(name="id_voyage", type="integer")
     */
    private $idVoyage;

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_voyage_view", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $idVoyageView;
    /**
     * @return mixed
     */
    public function getIdVoyageView()
    {
        return $this->idVoyageView;
    }/**
     * @param mixed $idVoyageView
     */
    public function setIdVoyageView($idVoyageView): void
    {
        $this->idVoyageView = $idVoyageView;
    }

    /**
     * @return mixed
     */
    public function getIdVoyage()
    {
        return $this->idVoyage;
    }

    /**
     * @return mixed
     */
    public function getDateVoyage()
    {
        return $this->dateVoyage;
    }

    /**
     * @param mixed $dateVoyage
     */
    public function setDateVoyage($dateVoyage): void
    {
        $this->dateVoyage = $dateVoyage;
    }

    /**
     * @return mixed
     */
    public function getTypeTransport()
    {
        return $this->typeTransport;
    }

    /**
     * @param mixed $typeTransport
     */
    public function setTypeTransport($typeTransport): void
    {
        $this->typeTransport = $typeTransport;
    }

    /**
     * @return mixed
     */
    public function getNumeroTransport()
    {
        return $this->numeroTransport;
    }

    /**
     * @param mixed $numeroTransport
     */
    public function setNumeroTransport($numeroTransport): void
    {
        $this->numeroTransport = $numeroTransport;
    }

    /**
     * @return mixed
     */
    public function getVilleDepart()
    {
        return $this->villeDepart;
    }

    /**
     * @param mixed $villeDepart
     */
    public function setVilleDepart($villeDepart): void
    {
        $this->villeDepart = $villeDepart;
    }

    /**
     * @return mixed
     */
    public function getVilleArrive()
    {
        return $this->villeArrivee;
    }

    /**
     * @param mixed $villeArrivee
     */
    public function setVilleArrive($villeArrivee): void
    {
        $this->villeArrivee = $villeArrivee;
    }
}