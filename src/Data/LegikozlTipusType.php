<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing LegikozlTipusType
 *
 * 
 * XSD Type: legikozl_tipus
 */
class LegikozlTipusType
{

    /**
     * Teljes felszállási tömege.
     *
     * @property float $felsztomeg
     */
    private $felsztomeg = null;

    /**
     * True, ha a jármű légi kereskedelmi eszköz.
     *
     * @property boolean $legiker
     */
    private $legiker = null;

    /**
     * Első forgalomba helyezés dátuma.
     *
     * @property \DateTime $forgbaDatum
     */
    private $forgbaDatum = null;

    /**
     * Repült órák száma.
     *
     * @property float $repultora
     */
    private $repultora = null;

    /**
     * Gets as felsztomeg
     *
     * Teljes felszállási tömege.
     *
     * @return float
     */
    public function getFelsztomeg()
    {
        return $this->felsztomeg;
    }

    /**
     * Sets a new felsztomeg
     *
     * Teljes felszállási tömege.
     *
     * @param float $felsztomeg
     * @return self
     */
    public function setFelsztomeg($felsztomeg)
    {
        $this->felsztomeg = $felsztomeg;
        return $this;
    }

    /**
     * Gets as legiker
     *
     * True, ha a jármű légi kereskedelmi eszköz.
     *
     * @return boolean
     */
    public function getLegiker()
    {
        return $this->legiker;
    }

    /**
     * Sets a new legiker
     *
     * True, ha a jármű légi kereskedelmi eszköz.
     *
     * @param boolean $legiker
     * @return self
     */
    public function setLegiker($legiker)
    {
        $this->legiker = $legiker;
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
     * Gets as repultora
     *
     * Repült órák száma.
     *
     * @return float
     */
    public function getRepultora()
    {
        return $this->repultora;
    }

    /**
     * Sets a new repultora
     *
     * Repült órák száma.
     *
     * @param float $repultora
     * @return self
     */
    public function setRepultora($repultora)
    {
        $this->repultora = $repultora;
        return $this;
    }


}

