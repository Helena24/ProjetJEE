<?php


namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Clients
 * @ORM\Entity()
 * @ORM\Table(name="Clients")
 */
class Clients
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="id_voyageur", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idClient;

    /**
     * @ORM\Column(name="nom", type="text")
     */
    private $nomClient;

    /**
     * @ORM\Column(name="prenom", type="text")
     */
    private $prenomClient;

    /**
     * @ORM\Column(name="mail", type="text")
     */
    private $emailClient;

    /**
     * @ORM\Column(name="telephone", type="text")
     */
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