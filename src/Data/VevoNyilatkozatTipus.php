<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing VevoNyilatkozatTipus
 *
 * 
 * XSD Type: vevo_nyilatkozat_tipus
 */
class VevoNyilatkozatTipus
{

    /**
     * True, ha a csomagolószer termékdíja a vevő eseti nyilatkozata alapján nem
     * kerül megfizetésre.
     *
     * @property boolean $vevoNemFizet
     */
    private $vevoNemFizet = null;

    /**
     * "a csomagolószer termékdíja a vevő...számon iktatott időszakra vonatkozó
     * nyilatkozata alapján nem kerül megfizetésre".
     *
     * @property string $iktatottIdoszak
     */
    private $iktatottIdoszak = null;

    /**
     * Gets as vevoNemFizet
     *
     * True, ha a csomagolószer termékdíja a vevő eseti nyilatkozata alapján nem
     * kerül megfizetésre.
     *
     * @return boolean
     */
    public function getVevoNemFizet()
    {
        return $this->vevoNemFizet;
    }

    /**
     * Sets a new vevoNemFizet
     *
     * True, ha a csomagolószer termékdíja a vevő eseti nyilatkozata alapján nem
     * kerül megfizetésre.
     *
     * @param boolean $vevoNemFizet
     * @return self
     */
    public function setVevoNemFizet($vevoNemFizet)
    {
        $this->vevoNemFizet = $vevoNemFizet;
        return $this;
    }

    /**
     * Gets as iktatottIdoszak
     *
     * "a csomagolószer termékdíja a vevő...számon iktatott időszakra vonatkozó
     * nyilatkozata alapján nem kerül megfizetésre".
     *
     * @return string
     */
    public function getIktatottIdoszak()
    {
        return $this->iktatottIdoszak;
    }

    /**
     * Sets a new iktatottIdoszak
     *
     * "a csomagolószer termékdíja a vevő...számon iktatott időszakra vonatkozó
     * nyilatkozata alapján nem kerül megfizetésre".
     *
     * @param string $iktatottIdoszak
     * @return self
     */
    public function setIktatottIdoszak($iktatottIdoszak)
    {
        $this->iktatottIdoszak = $iktatottIdoszak;
        return $this;
    }


}

