<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing BeszallokartyaTipus
 *
 * 
 * XSD Type: beszallokartya_tipus
 */
class BeszallokartyaTipus
{

    /**
     * Járatszám.
     *
     * @property string $jaratszam
     */
    private $jaratszam = null;

    /**
     * Kedvezményre jogosult neve.
     *
     * @property string $kedvNeve
     */
    private $kedvNeve = null;

    /**
     * Beszállókártyán szereplő uticél.
     *
     * @property string $uticel
     */
    private $uticel = null;

    /**
     * Gets as jaratszam
     *
     * Járatszám.
     *
     * @return string
     */
    public function getJaratszam()
    {
        return $this->jaratszam;
    }

    /**
     * Sets a new jaratszam
     *
     * Járatszám.
     *
     * @param string $jaratszam
     * @return self
     */
    public function setJaratszam($jaratszam)
    {
        $this->jaratszam = $jaratszam;
        return $this;
    }

    /**
     * Gets as kedvNeve
     *
     * Kedvezményre jogosult neve.
     *
     * @return string
     */
    public function getKedvNeve()
    {
        return $this->kedvNeve;
    }

    /**
     * Sets a new kedvNeve
     *
     * Kedvezményre jogosult neve.
     *
     * @param string $kedvNeve
     * @return self
     */
    public function setKedvNeve($kedvNeve)
    {
        $this->kedvNeve = $kedvNeve;
        return $this;
    }

    /**
     * Gets as uticel
     *
     * Beszállókártyán szereplő uticél.
     *
     * @return string
     */
    public function getUticel()
    {
        return $this->uticel;
    }

    /**
     * Sets a new uticel
     *
     * Beszállókártyán szereplő uticél.
     *
     * @param string $uticel
     * @return self
     */
    public function setUticel($uticel)
    {
        $this->uticel = $uticel;
        return $this;
    }


}

