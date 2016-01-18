<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing JovEngKereskJovErtTipus
 *
 * 
 * XSD Type: jov_eng_keresk_jov_ert_tipus
 */
class JovEngKereskJovErtTipus
{

    /**
     * Jövedéki engedély száma.
     *
     * @property string $engSzam
     */
    private $engSzam = null;

    /**
     * Vevő őstermelői igazolvány száma.
     *
     * @property string $vevoSzam
     */
    private $vevoSzam = null;

    /**
     * Gets as engSzam
     *
     * Jövedéki engedély száma.
     *
     * @return string
     */
    public function getEngSzam()
    {
        return $this->engSzam;
    }

    /**
     * Sets a new engSzam
     *
     * Jövedéki engedély száma.
     *
     * @param string $engSzam
     * @return self
     */
    public function setEngSzam($engSzam)
    {
        $this->engSzam = $engSzam;
        return $this;
    }

    /**
     * Gets as vevoSzam
     *
     * Vevő őstermelői igazolvány száma.
     *
     * @return string
     */
    public function getVevoSzam()
    {
        return $this->vevoSzam;
    }

    /**
     * Sets a new vevoSzam
     *
     * Vevő őstermelői igazolvány száma.
     *
     * @param string $vevoSzam
     * @return self
     */
    public function setVevoSzam($vevoSzam)
    {
        $this->vevoSzam = $vevoSzam;
        return $this;
    }


}

