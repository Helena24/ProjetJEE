<?php


namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Dossiers
 * @ORM\Entity()
 * @ORM\Table(name="Dossiers")
 */
class Dossiers
{

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Clients", fetch="EAGER")
     * @ORM\JoinColumn(name="referenceClient", referencedColumnName="id_voyageur")
     */
    private $referenceClient;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Voyages", fetch="EAGER")
     * @ORM\JoinColumn(name="referenceVoyage", referencedColumnName="id_voyage")
     */
    private $referenceVoyage;

    /**
     * @ORM\Column(name="voyageEffectue", type="text")
     */
    private $voyageEffectue;

    /**
     * @return mixed
     */
    public function getVoyageEffectue()
    {
        return $this->voyageEffectue;
    }

    /**
     * @param mixed $voyageEffectue
     */
    public function setVoyageEffectue($voyageEffectue): void
    {
        $this->voyageEffectue = $voyageEffectue;
    }

    /**
     * @return mixed
     */
    public function getReferenceClient()
    {
        return $this->referenceClient;
    }

    /**
     * @return mixed
     */
    public function getReferenceVoyage()
    {
        return $this->referenceVoyage;
    }

}