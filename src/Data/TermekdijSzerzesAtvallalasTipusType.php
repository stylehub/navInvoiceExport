<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing TermekdijSzerzesAtvallalasTipusType
 *
 * 
 * XSD Type: termekdij_szerzes_atvallalas_tipus
 */
class TermekdijSzerzesAtvallalasTipusType
{

    /**
     * A bekezdés pontja.
     *
     * @property string $bekezdesPontja
     */
    private $bekezdesPontja = null;

    /**
     * A bekezdés alpontja.
     *
     * @property string $bekezdesAlpontja
     */
    private $bekezdesAlpontja = null;

    /**
     * Gets as bekezdesPontja
     *
     * A bekezdés pontja.
     *
     * @return string
     */
    public function getBekezdesPontja()
    {
        return $this->bekezdesPontja;
    }

    /**
     * Sets a new bekezdesPontja
     *
     * A bekezdés pontja.
     *
     * @param string $bekezdesPontja
     * @return self
     */
    public function setBekezdesPontja($bekezdesPontja)
    {
        $this->bekezdesPontja = $bekezdesPontja;
        return $this;
    }

    /**
     * Gets as bekezdesAlpontja
     *
     * A bekezdés alpontja.
     *
     * @return string
     */
    public function getBekezdesAlpontja()
    {
        return $this->bekezdesAlpontja;
    }

    /**
     * Sets a new bekezdesAlpontja
     *
     * A bekezdés alpontja.
     *
     * @param string $bekezdesAlpontja
     * @return self
     */
    public function setBekezdesAlpontja($bekezdesAlpontja)
    {
        $this->bekezdesAlpontja = $bekezdesAlpontja;
        return $this;
    }


}

