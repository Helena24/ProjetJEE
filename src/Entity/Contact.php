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

}