<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing VizikozlTipus
 *
 * 
 * XSD Type: vizikozl_tipus
 */
class VizikozlTipus
{

    /**
     * Hajó hossza.
     *
     * @property float $hajoHossz
     */
    private $hajoHossz = null;

    /**
     * Vizi tevékenység megnevezése.
     *
     * @property string $vizitev
     */
    private $vizitev = null;

    /**
     * Első forgalomba helyezés dátuma.
     *
     * @property \DateTime $forgbaDatum
     */
    private $forgbaDatum = null;

    /**
     * Hajózott órák száma.
     *
     * @property float $hajozottOra
     */
    private $hajozottOra = null;

    /**
     * Gets as hajoHossz
     *
     * Hajó hossza.
     *
     * @return float
     */
    public function getHajoHossz()
    {
        return $this->hajoHossz;
    }

    /**
     * Sets a new hajoHossz
     *
     * Hajó hossza.
     *
     * @param float $hajoHossz
     * @return self
     */
    public function setHajoHossz($hajoHossz)
    {
        $this->hajoHossz = $hajoHossz;
        return $this;
    }

    /**
     * Gets as vizitev
     *
     * Vizi tevékenység megnevezése.
     *
     * @return string
     */
    public function getVizitev()
    {
        return $this->vizitev;
    }

    /**
     * Sets a new vizitev
     *
     * Vizi tevékenység megnevezése.
     *
     * @param string $vizitev
     * @return self
     */
    public function setVizitev($vizitev)
    {
        $this->vizitev = $vizitev;
        return $this;
    }

    /**
     * Gets as forgbaDatum
     *
     * Első forgalomba helyezés dátuma.
     *
     * @return \DateTime
     */
    public function getForgbaDatum()
    {
        return $this->forgbaDatum;
    }

    /**
     * Sets a new forgbaDatum
     *
     * Első forgalomba helyezés dátuma.
     *
     * @param \DateTime $forgbaDatum
     * @return self
     */
    public function setForgbaDatum(\DateTime $forgbaDatum)
    {
        $this->forgbaDatum = $forgbaDatum;
        return $this;
    }

    /**
     * Gets as hajozottOra
     *
     * Hajózott órák száma.
     *
     * @return float
     */
    public function getHajozottOra()
    {
        return $this->hajozottOra;
    }

    /**
     * Sets a new hajozottOra
     *
     * Hajózott órák száma.
     *
     * @param float $hajozottOra
     * @return self
     */
    public function setHajozottOra($hajozottOra)
    {
        $this->hajozottOra = $hajozottOra;
        return $this;
    }


}

