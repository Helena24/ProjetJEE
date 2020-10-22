<?php


namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Contact
 * @ORM\Entity
 * @ORM\Table(name=Contact)
 */
class Contact
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id_contact", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idContact;

    /**
     * @ORM\Column(name="id_voyageur", type="integer")
     */
    private $idVoyageur;

    /**
     * @ORM\Column (name="methode", type="text")
     */
    private $methode;

    /**
     * @ORM\Column (name="valeur", type="text")
     */
    private $valeur;

    /**
     * @return mixed
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * @return mixed
     */
    public function getIdVoyageur()
    {
        return $this->idVoyageur;
    }

    /**
     * @param mixed $idVoyageur
     */
    public function setIdVoyageur($idVoyageur): void
    {
        $this->idVoyageur = $idVoyageur;
    }

    /**
     * @return mixed
     */
    public function getMethode()
    {
        return $this->methode;
    }

    /**
     * @param mixed $methode
     */
    public function setMethode($methode): void
    {
        $this->methode = $methode;
    }

    /**
     * @return mixed
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * @param mixed $valeur
     */
    public function setValeur($valeur): void
    {
        $this->valeur = $valeur;
    }

}