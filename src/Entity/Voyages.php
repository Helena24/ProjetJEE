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
    private $date_voyage;

    /**
     * @ORM\Column(name="type_transport", type="text")
     */
    private $type_transport;

    /**
     * @ORM\Column(name="numero_transport", type="text")
     */
    private $numero_transport;

    /**
     * @ORM\Column(name="ville_depart", type="text")
     */
    private $ville_depart;

    /**
     * @ORM\Column(name="ville_arrivee", type="text")
     */
    private $ville_arrive;

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_voyage", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_voyage;

    /**
     * @return mixed
     */
    public function getIdVoyage()
    {
        return $this->id_voyage;
    }

    /**
     * @return mixed
     */
    public function getDateVoyage()
    {
        return $this->date_voyage;
    }

    /**
     * @param mixed $date_voyage
     */
    public function setDateVoyage($date_voyage): void
    {
        $this->date_voyage = $date_voyage;
    }

    /**
     * @return mixed
     */
    public function getTypeTransport()
    {
        return $this->type_transport;
    }

    /**
     * @param mixed $type_transport
     */
    public function setTypeTransport($type_transport): void
    {
        $this->type_transport = $type_transport;
    }

    /**
     * @return mixed
     */
    public function getNumeroTransport()
    {
        return $this->numero_transport;
    }

    /**
     * @param mixed $numero_transport
     */
    public function setNumeroTransport($numero_transport): void
    {
        $this->numero_transport = $numero_transport;
    }

    /**
     * @return mixed
     */
    public function getVilleDepart()
    {
        return $this->ville_depart;
    }

    /**
     * @param mixed $ville_depart
     */
    public function setVilleDepart($ville_depart): void
    {
        $this->ville_depart = $ville_depart;
    }

    /**
     * @return mixed
     */
    public function getVilleArrive()
    {
        return $this->ville_arrive;
    }

    /**
     * @param mixed $ville_arrive
     */
    public function setVilleArrive($ville_arrive): void
    {
        $this->ville_arrive = $ville_arrive;
    }
}