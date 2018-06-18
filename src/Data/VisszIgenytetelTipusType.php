<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing VisszIgenytetelTipusType
 *
 * 
 * XSD Type: vissz_igenytetel_tipus
 */
class VisszIgenytetelTipusType
{

    /**
     * CSK kód.
     *
     * @property string $csk
     */
    private $csk = null;

    /**
     * KT kód.
     *
     * @property string $kt
     */
    private $kt = null;

    /**
     * Termékdíj mértéke, összege.
     *
     * @property float $termdijOsszeg
     */
    private $termdijOsszeg = null;

    /**
     * Gets as csk
     *
     * CSK kód.
     *
     * @return string
     */
    public function getCsk()
    {
        return $this->csk;
    }

    /**
     * Sets a new csk
     *
     * CSK kód.
     *
     * @param string $csk
     * @return self
     */
    public function setCsk($csk)
    {
        $this->csk = $csk;
        return $this;
    }

    /**
     * Gets as kt
     *
     * KT kód.
     *
     * @return string
     */
    public function getKt()
    {
        return $this->kt;
    }

    /**
     * Sets a new kt
     *
     * KT kód.
     *
     * @param string $kt
     * @return self
     */
    public function setKt($kt)
    {
        $this->kt = $kt;
        return $this;
    }

    /**
     * Gets as termdijOsszeg
     *
     * Termékdíj mértéke, összege.
     *
     * @return float
     */
    public function getTermdijOsszeg()
    {
        return $this->termdijOsszeg;
    }

    /**
     * Sets a new termdijOsszeg
     *
     * Termékdíj mértéke, összege.
     *
     * @param float $termdijOsszeg
     * @return self
     */
    public function setTermdijOsszeg($termdijOsszeg)
    {
        $this->termdijOsszeg = $termdijOsszeg;
        return $this;
    }


}

