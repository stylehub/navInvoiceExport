<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing GazolajBeszerzTipus
 *
 * 
 * XSD Type: gazolaj_beszerz_tipus
 */
class GazolajBeszerzTipus
{

    /**
     * Jármű forgalmi rendszáma.
     *
     * @property string $rendszam
     */
    private $rendszam = null;

    /**
     * Kilóméteróra állása.
     *
     * @property float $kmOraAllas
     */
    private $kmOraAllas = null;

    /**
     * Gets as rendszam
     *
     * Jármű forgalmi rendszáma.
     *
     * @return string
     */
    public function getRendszam()
    {
        return $this->rendszam;
    }

    /**
     * Sets a new rendszam
     *
     * Jármű forgalmi rendszáma.
     *
     * @param string $rendszam
     * @return self
     */
    public function setRendszam($rendszam)
    {
        $this->rendszam = $rendszam;
        return $this;
    }

    /**
     * Gets as kmOraAllas
     *
     * Kilóméteróra állása.
     *
     * @return float
     */
    public function getKmOraAllas()
    {
        return $this->kmOraAllas;
    }

    /**
     * Sets a new kmOraAllas
     *
     * Kilóméteróra állása.
     *
     * @param float $kmOraAllas
     * @return self
     */
    public function setKmOraAllas($kmOraAllas)
    {
        $this->kmOraAllas = $kmOraAllas;
        return $this;
    }


}

