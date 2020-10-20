<?php


namespace App\Entity;


class Dossiers
{
    private $referenceClient;
    private $referenceVoyage;
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