<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing VevoTipusType
 *
 * 
 * XSD Type: vevo_tipus
 */
class VevoTipusType
{

    /**
     * Vevő adószáma.
     *
     * @property string $adoszam
     */
    private $adoszam = null;

    /**
     * Közösségi adószám.
     *
     * @property string $kozadoszam
     */
    private $kozadoszam = null;

    /**
     * Vevő neve.
     *
     * @property string $nev
     */
    private $nev = null;

    /**
     * Vevő címe.
     *
     * @property \Dream\NavInvoiceExport\Data\CimTipusType $cim
     */
    private $cim = null;

    /**
     * Gets as adoszam
     *
     * Vevő adószáma.
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
     * Vevő adószáma.
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
     * Gets as kozadoszam
     *
     * Közösségi adószám.
     *
     * @return string
     */
    public function getKozadoszam()
    {
        return $this->kozadoszam;
    }

    /**
     * Sets a new kozadoszam
     *
     * Közösségi adószám.
     *
     * @param string $kozadoszam
     * @return self
     */
    public function setKozadoszam($kozadoszam)
    {
        $this->kozadoszam = $kozadoszam;
        return $this;
    }

    /**
     * Gets as nev
     *
     * Vevő neve.
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
     * Vevő neve.
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
     * Vevő címe.
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
     * Vevő címe.
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

