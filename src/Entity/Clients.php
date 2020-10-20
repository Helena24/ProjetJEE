<?php


namespace App\Entity;


class Clients
{
    private $idClient;
    private $nomClient;
    private $prenomClient;
    private $emailClient;
    private $telephoneClient;

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @return mixed
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * @param mixed $nomClient
     */
    public function setNomClient($nomClient): void
    {
        $this->nomClient = $nomClient;
    }

    /**
     * @return mixed
     */
    public function getPrenomClient()
    {
        return $this->prenomClient;
    }

    /**
     * @param mixed $prenomClient
     */
    public function setPrenomClient($prenomClient): void
    {
        $this->prenomClient = $prenomClient;
    }

    /**
     * @return mixed
     */
    public function getEmailClient()
    {
        return $this->emailClient;
    }

    /**
     * @param mixed $emailClient
     */
    public function setEmailClient($emailClient): void
    {
        $this->emailClient = $emailClient;
    }

    /**
     * @return mixed
     */
    public function getTelephoneClient()
    {
        return $this->telephoneClient;
    }

    /**
     * @param mixed $telephoneClient
     */
    public function setTelephoneClient($telephoneClient): void
    {
        $this->telephoneClient = $telephoneClient;
    }

}