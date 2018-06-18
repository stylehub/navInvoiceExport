<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing ModositoSzlaTipusType
 *
 * 
 * XSD Type: modosito_szla_tipus
 */
class ModositoSzlaTipusType
{

    /**
     * Eredeti számla sorszáma.
     *
     * @property string $eredetiSorszam
     */
    private $eredetiSorszam = null;

    /**
     * Gets as eredetiSorszam
     *
     * Eredeti számla sorszáma.
     *
     * @return string
     */
    public function getEredetiSorszam()
    {
        return $this->eredetiSorszam;
    }

    /**
     * Sets a new eredetiSorszam
     *
     * Eredeti számla sorszáma.
     *
     * @param string $eredetiSorszam
     * @return self
     */
    public function setEredetiSorszam($eredetiSorszam)
    {
        $this->eredetiSorszam = $eredetiSorszam;
        return $this;
    }


}

