<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing KozlEszkInfTipus
 *
 * 
 * XSD Type: kozl_eszk_inf_tipus
 */
class KozlEszkInfTipus
{

    /**
     * Szárazföldi közlekedési eszköz: hengerűrtartalma vagy teljesítmény és
     * az első forgalomba helyezés időpontja vagy a megtett távolság.
     *
     * @property \Dream\NavInvoiceExport\Data\FoldikozlTipus $foldikozl
     */
    private $foldikozl = null;

    /**
     * Légiközlekedési eszköz: teljes felszállási tömege és légi kereskedelem
     * és az első forgalomba helyezés időpontja vagy a repült órák.
     *
     * @property \Dream\NavInvoiceExport\Data\LegikozlTipus $legikozl
     */
    private $legikozl = null;

    /**
     * Vízi közlekedési eszköz: hosszúság és tevékenység és első forgalomba
     * helyezés, vagy hajózott óra
     *
     * @property \Dream\NavInvoiceExport\Data\VizikozlTipus $vizikozl
     */
    private $vizikozl = null;

    /**
     * Gets as foldikozl
     *
     * Szárazföldi közlekedési eszköz: hengerűrtartalma vagy teljesítmény és
     * az első forgalomba helyezés időpontja vagy a megtett távolság.
     *
     * @return \Dream\NavInvoiceExport\Data\FoldikozlTipus
     */
    public function getFoldikozl()
    {
        return $this->foldikozl;
    }

    /**
     * Sets a new foldikozl
     *
     * Szárazföldi közlekedési eszköz: hengerűrtartalma vagy teljesítmény és
     * az első forgalomba helyezés időpontja vagy a megtett távolság.
     *
     * @param \Dream\NavInvoiceExport\Data\FoldikozlTipus $foldikozl
     * @return self
     */
    public function setFoldikozl(\Dream\NavInvoiceExport\Data\FoldikozlTipus $foldikozl)
    {
        $this->foldikozl = $foldikozl;
        return $this;
    }

    /**
     * Gets as legikozl
     *
     * Légiközlekedési eszköz: teljes felszállási tömege és légi kereskedelem
     * és az első forgalomba helyezés időpontja vagy a repült órák.
     *
     * @return \Dream\NavInvoiceExport\Data\LegikozlTipus
     */
    public function getLegikozl()
    {
        return $this->legikozl;
    }

    /**
     * Sets a new legikozl
     *
     * Légiközlekedési eszköz: teljes felszállási tömege és légi kereskedelem
     * és az első forgalomba helyezés időpontja vagy a repült órák.
     *
     * @param \Dream\NavInvoiceExport\Data\LegikozlTipus $legikozl
     * @return self
     */
    public function setLegikozl(\Dream\NavInvoiceExport\Data\LegikozlTipus $legikozl)
    {
        $this->legikozl = $legikozl;
        return $this;
    }

    /**
     * Gets as vizikozl
     *
     * Vízi közlekedési eszköz: hosszúság és tevékenység és első forgalomba
     * helyezés, vagy hajózott óra
     *
     * @return \Dream\NavInvoiceExport\Data\VizikozlTipus
     */
    public function getVizikozl()
    {
        return $this->vizikozl;
    }

    /**
     * Sets a new vizikozl
     *
     * Vízi közlekedési eszköz: hosszúság és tevékenység és első forgalomba
     * helyezés, vagy hajózott óra
     *
     * @param \Dream\NavInvoiceExport\Data\VizikozlTipus $vizikozl
     * @return self
     */
    public function setVizikozl(\Dream\NavInvoiceExport\Data\VizikozlTipus $vizikozl)
    {
        $this->vizikozl = $vizikozl;
        return $this;
    }


}

