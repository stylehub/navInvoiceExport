<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing CsomszerForgHozTipus
 *
 * 
 * XSD Type: csomszer_forg_hoz_tipus
 */
class CsomszerForgHozTipus
{

    /**
     * Amennyiben a csomagolószer termékdíj-köt. az eladót terheli, akkor
     * feltüntetendő:
     *  "a csomagolószer termékdíj összege bruttó árból…..Ft".
     *
     * @property float $termekDij
     */
    private $termekDij = null;

    /**
     * True, amennyiben a csomagolás részeként forgalomba hozott
     * csomszer.termékdíj. köt. az eladót terheli.
     *
     * @property boolean $reszenkentForgHoz
     */
    private $reszenkentForgHoz = null;

    /**
     * Amennyiben az eladót a vevő nyilatkozata alapján termékdíj megfizetése nem
     * terheli, akkor:
     *  "a csomagolószer termékdíja a veveő eseti nyilatkozata alapján nem kerül
     * megfizetésre" vagy
     *  "a csomagolószer termékdíja a vevő...számon iktatott időszakra vonatkozó
     * nyilatkozata alapján nem kerül megfizetésre".
     *
     * @property \Dream\NavInvoiceExport\Data\VevoNyilatkozatTipus $vevoNyilatkozat
     */
    private $vevoNyilatkozat = null;

    /**
     * Gets as termekDij
     *
     * Amennyiben a csomagolószer termékdíj-köt. az eladót terheli, akkor
     * feltüntetendő:
     *  "a csomagolószer termékdíj összege bruttó árból…..Ft".
     *
     * @return float
     */
    public function getTermekDij()
    {
        return $this->termekDij;
    }

    /**
     * Sets a new termekDij
     *
     * Amennyiben a csomagolószer termékdíj-köt. az eladót terheli, akkor
     * feltüntetendő:
     *  "a csomagolószer termékdíj összege bruttó árból…..Ft".
     *
     * @param float $termekDij
     * @return self
     */
    public function setTermekDij($termekDij)
    {
        $this->termekDij = $termekDij;
        return $this;
    }

    /**
     * Gets as reszenkentForgHoz
     *
     * True, amennyiben a csomagolás részeként forgalomba hozott
     * csomszer.termékdíj. köt. az eladót terheli.
     *
     * @return boolean
     */
    public function getReszenkentForgHoz()
    {
        return $this->reszenkentForgHoz;
    }

    /**
     * Sets a new reszenkentForgHoz
     *
     * True, amennyiben a csomagolás részeként forgalomba hozott
     * csomszer.termékdíj. köt. az eladót terheli.
     *
     * @param boolean $reszenkentForgHoz
     * @return self
     */
    public function setReszenkentForgHoz($reszenkentForgHoz)
    {
        $this->reszenkentForgHoz = $reszenkentForgHoz;
        return $this;
    }

    /**
     * Gets as vevoNyilatkozat
     *
     * Amennyiben az eladót a vevő nyilatkozata alapján termékdíj megfizetése nem
     * terheli, akkor:
     *  "a csomagolószer termékdíja a veveő eseti nyilatkozata alapján nem kerül
     * megfizetésre" vagy
     *  "a csomagolószer termékdíja a vevő...számon iktatott időszakra vonatkozó
     * nyilatkozata alapján nem kerül megfizetésre".
     *
     * @return \Dream\NavInvoiceExport\Data\VevoNyilatkozatTipus
     */
    public function getVevoNyilatkozat()
    {
        return $this->vevoNyilatkozat;
    }

    /**
     * Sets a new vevoNyilatkozat
     *
     * Amennyiben az eladót a vevő nyilatkozata alapján termékdíj megfizetése nem
     * terheli, akkor:
     *  "a csomagolószer termékdíja a veveő eseti nyilatkozata alapján nem kerül
     * megfizetésre" vagy
     *  "a csomagolószer termékdíja a vevő...számon iktatott időszakra vonatkozó
     * nyilatkozata alapján nem kerül megfizetésre".
     *
     * @param \Dream\NavInvoiceExport\Data\VevoNyilatkozatTipus $vevoNyilatkozat
     * @return self
     */
    public function setVevoNyilatkozat(\Dream\NavInvoiceExport\Data\VevoNyilatkozatTipus $vevoNyilatkozat)
    {
        $this->vevoNyilatkozat = $vevoNyilatkozat;
        return $this;
    }


}

