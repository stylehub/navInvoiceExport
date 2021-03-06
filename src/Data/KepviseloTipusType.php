<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing KepviseloTipusType
 *
 * 
 * XSD Type: kepviselo_tipus
 */
class KepviseloTipusType
{

    /**
     * Képviselő adószáma.
     *
     * @property string $adoszam
     */
    private $adoszam = null;

    /**
     * Képviselő neve.
     *
     * @property string $nev
     */
    private $nev = null;

    /**
     * Képviselő címe.
     *
     * @property \Dream\NavInvoiceExport\Data\CimTipusType $cim
     */
    private $cim = null;

    /**
     * Gets as adoszam
     *
     * Képviselő adószáma.
     *
     * @return string
     */
    public function getAdoszam()
    {
        return $this->adoszam;
    }

    /**
     * Sets a new adoszam
     *
     * Képviselő adószáma.
     *
     * @param string $adoszam
     * @return self
     */
    public function setAdoszam($adoszam)
    {
        $this->adoszam = $adoszam;
        return $this;
    }

    /**
     * Gets as nev
     *
     * Képviselő neve.
     *
     * @return string
     */
    public function getNev()
    {
        return $this->nev;
    }

    /**
     * Sets a new nev
     *
     * Képviselő neve.
     *
     * @param string $nev
     * @return self
     */
    public function setNev($nev)
    {
        $this->nev = $nev;
        return $this;
    }

    /**
     * Gets as cim
     *
     * Képviselő címe.
     *
     * @return \Dream\NavInvoiceExport\Data\CimTipusType
     */
    public function getCim()
    {
        return $this->cim;
    }

    /**
     * Sets a new cim
     *
     * Képviselő címe.
     *
     * @param \Dream\NavInvoiceExport\Data\CimTipusType $cim
     * @return self
     */
    public function setCim(\Dream\NavInvoiceExport\Data\CimTipusType $cim)
    {
        $this->cim = $cim;
        return $this;
    }


}

