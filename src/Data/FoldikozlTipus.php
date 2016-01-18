<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing FoldikozlTipus
 *
 * 
 * XSD Type: foldikozl_tipus
 */
class FoldikozlTipus
{

    /**
     * Hengerűrtartalom ccm-ben.
     *
     * @property float $hengerur
     */
    private $hengerur = null;

    /**
     * Teljesítmény kW-ban.
     *
     * @property float $teljesitmeny
     */
    private $teljesitmeny = null;

    /**
     * Első forgalomba helyezés dátuma.
     *
     * @property \DateTime $forgbaDatum
     */
    private $forgbaDatum = null;

    /**
     * Megtett távolság km-ben.
     *
     * @property float $futottkm
     */
    private $futottkm = null;

    /**
     * Gets as hengerur
     *
     * Hengerűrtartalom ccm-ben.
     *
     * @return float
     */
    public function getHengerur()
    {
        return $this->hengerur;
    }

    /**
     * Sets a new hengerur
     *
     * Hengerűrtartalom ccm-ben.
     *
     * @param float $hengerur
     * @return self
     */
    public function setHengerur($hengerur)
    {
        $this->hengerur = $hengerur;
        return $this;
    }

    /**
     * Gets as teljesitmeny
     *
     * Teljesítmény kW-ban.
     *
     * @return float
     */
    public function getTeljesitmeny()
    {
        return $this->teljesitmeny;
    }

    /**
     * Sets a new teljesitmeny
     *
     * Teljesítmény kW-ban.
     *
     * @param float $teljesitmeny
     * @return self
     */
    public function setTeljesitmeny($teljesitmeny)
    {
        $this->teljesitmeny = $teljesitmeny;
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
     * Gets as futottkm
     *
     * Megtett távolság km-ben.
     *
     * @return float
     */
    public function getFutottkm()
    {
        return $this->futottkm;
    }

    /**
     * Sets a new futottkm
     *
     * Megtett távolság km-ben.
     *
     * @param float $futottkm
     * @return self
     */
    public function setFutottkm($futottkm)
    {
        $this->futottkm = $futottkm;
        return $this;
    }


}

