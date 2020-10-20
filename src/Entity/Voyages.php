<?php


namespace App\Entity;


class Voyages
{
    private $date_voyage;
    private $type_transport;
    private $numero_transport;
    private $ville_depart;
    private $ville_arrive;
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