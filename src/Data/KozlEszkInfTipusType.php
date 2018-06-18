<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing KozlEszkInfTipusType
 *
 * 
 * XSD Type: kozl_eszk_inf_tipus
 */
class KozlEszkInfTipusType
{

    /**
     * Szárazföldi közlekedési eszköz: hengerűrtartalma vagy teljesítmény és az első forgalomba helyezés időpontja vagy a megtett távolság.
     *
     * @property \Dream\NavInvoiceExport\Data\FoldikozlTipusType $foldikozl
     */
    private $foldikozl = null;

    /**
     * Légiközlekedési eszköz: teljes felszállási tömege és légi kereskedelem és az első forgalomba helyezés időpontja vagy a repült órák.
     *
     * @property \Dream\NavInvoiceExport\Data\LegikozlTipusType $legikozl
     */
    private $legikozl = null;

    /**
     * Vízi közlekedési eszköz: hosszúság és tevékenység és első forgalomba helyezés, vagy hajózott óra
     *
     * @property \Dream\NavInvoiceExport\Data\VizikozlTipusType $vizikozl
     */
    private $vizikozl = null;

    /**
     * Gets as foldikozl
     *
     * Szárazföldi közlekedési eszköz: hengerűrtartalma vagy teljesítmény és az első forgalomba helyezés időpontja vagy a megtett távolság.
     *
     * @return \Dream\NavInvoiceExport\Data\FoldikozlTipusType
     */
    public function getFoldikozl()
    {
        return $this->foldikozl;
    }

    /**
     * Sets a new foldikozl
     *
     * Szárazföldi közlekedési eszköz: hengerűrtartalma vagy teljesítmény és az első forgalomba helyezés időpontja vagy a megtett távolság.
     *
     * @param \Dream\NavInvoiceExport\Data\FoldikozlTipusType $foldikozl
     * @return self
     */
    public function setFoldikozl(\Dream\NavInvoiceExport\Data\FoldikozlTipusType $foldikozl)
    {
        $this->foldikozl = $foldikozl;
        return $this;
    }

    /**
     * Gets as legikozl
     *
     * Légiközlekedési eszköz: teljes felszállási tömege és légi kereskedelem és az első forgalomba helyezés időpontja vagy a repült órák.
     *
     * @return \Dream\NavInvoiceExport\Data\LegikozlTipusType
     */
    public function getLegikozl()
    {
        return $this->legikozl;
    }

    /**
     * Sets a new legikozl
     *
     * Légiközlekedési eszköz: teljes felszállási tömege és légi kereskedelem és az első forgalomba helyezés időpontja vagy a repült órák.
     *
     * @param \Dream\NavInvoiceExport\Data\LegikozlTipusType $legikozl
     * @return self
     */
    public function setLegikozl(\Dream\NavInvoiceExport\Data\LegikozlTipusType $legikozl)
    {
        $this->legikozl = $legikozl;
        return $this;
    }

    /**
     * Gets as vizikozl
     *
     * Vízi közlekedési eszköz: hosszúság és tevékenység és első forgalomba helyezés, vagy hajózott óra
     *
     * @return \Dream\NavInvoiceExport\Data\VizikozlTipusType
     */
    public function getVizikozl()
    {
        return $this->vizikozl;
    }

    /**
     * Sets a new vizikozl
     *
     * Vízi közlekedési eszköz: hosszúság és tevékenység és első forgalomba helyezés, vagy hajózott óra
     *
     * @param \Dream\NavInvoiceExport\Data\VizikozlTipusType $vizikozl
     * @return self
     */
    public function setVizikozl(\Dream\NavInvoiceExport\Data\VizikozlTipusType $vizikozl)
    {
        $this->vizikozl = $vizikozl;
        return $this;
    }


}

