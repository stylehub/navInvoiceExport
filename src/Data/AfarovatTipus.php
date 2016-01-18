<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing AfarovatTipus
 *
 * 
 * XSD Type: afarovat_tipus
 */
class AfarovatTipus
{

    /**
     * A számlában azonos adókulcshoz tartozó számlatételek nettó árának
     * összege.
     *
     * @property float $nettoar
     */
    private $nettoar = null;

    /**
     * Adókulcs.
     *
     * @property float $adokulcs
     */
    private $adokulcs = null;

    /**
     * A számlában azonos adókulcshoz tartozó számlatételek adóösszege.
     *
     * @property float $adoertek
     */
    private $adoertek = null;

    /**
     * A számlában azonos adókulcshoz tartozó számlatételek bruttó árának
     * összege.
     *
     * @property float $bruttoar
     */
    private $bruttoar = null;

    /**
     * Gets as nettoar
     *
     * A számlában azonos adókulcshoz tartozó számlatételek nettó árának
     * összege.
     *
     * @return float
     */
    public function getNettoar()
    {
        return $this->nettoar;
    }

    /**
     * Sets a new nettoar
     *
     * A számlában azonos adókulcshoz tartozó számlatételek nettó árának
     * összege.
     *
     * @param float $nettoar
     * @return self
     */
    public function setNettoar($nettoar)
    {
        $this->nettoar = $nettoar;
        return $this;
    }

    /**
     * Gets as adokulcs
     *
     * Adókulcs.
     *
     * @return float
     */
    public function getAdokulcs()
    {
        return $this->adokulcs;
    }

    /**
     * Sets a new adokulcs
     *
     * Adókulcs.
     *
     * @param float $adokulcs
     * @return self
     */
    public function setAdokulcs($adokulcs)
    {
        $this->adokulcs = $adokulcs;
        return $this;
    }

    /**
     * Gets as adoertek
     *
     * A számlában azonos adókulcshoz tartozó számlatételek adóösszege.
     *
     * @return float
     */
    public function getAdoertek()
    {
        return $this->adoertek;
    }

    /**
     * Sets a new adoertek
     *
     * A számlában azonos adókulcshoz tartozó számlatételek adóösszege.
     *
     * @param float $adoertek
     * @return self
     */
    public function setAdoertek($adoertek)
    {
        $this->adoertek = $adoertek;
        return $this;
    }

    /**
     * Gets as bruttoar
     *
     * A számlában azonos adókulcshoz tartozó számlatételek bruttó árának
     * összege.
     *
     * @return float
     */
    public function getBruttoar()
    {
        return $this->bruttoar;
    }

    /**
     * Sets a new bruttoar
     *
     * A számlában azonos adókulcshoz tartozó számlatételek bruttó árának
     * összege.
     *
     * @param float $bruttoar
     * @return self
     */
    public function setBruttoar($bruttoar)
    {
        $this->bruttoar = $bruttoar;
        return $this;
    }


}

