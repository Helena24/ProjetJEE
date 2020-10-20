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
     * @ORM\Id()
     * @ORM\Column(name="referenceClient", type="integer")
     */
    private $referenceClient;

    /**
     * @ORM\Id()
     * @ORM\Column(name="referenceVoyage", type="integer")
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