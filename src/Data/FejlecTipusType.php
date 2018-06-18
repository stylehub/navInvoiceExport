<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing FejlecTipusType
 *
 * 
 * XSD Type: fejlec_tipus
 */
class FejlecTipusType
{

    /**
     * A számla sorszáma, amely a számlát kétséget kizáróan azonosítja.
     *
     * @property string $szlasorszam
     */
    private $szlasorszam = null;

    /**
     * A számla típusa: 1-számla/2-egyszerűsített adattartalmú számla/3-módosító számla/4-érvénytelenítő számla/5-gyűjtőszámla/6-számlával egy tekintet alá eső okirat
     *
     * @property integer $szlatipus
     */
    private $szlatipus = null;

    /**
     * A számla kibocsátásának kelte.
     *
     * @property \DateTime $szladatum
     */
    private $szladatum = null;

    /**
     * A teljesítés, vagy előleg fizetése esetében a fizetendő adó megállapítás időpontja, ha az eltér a számla kibocsátásának keltétől.
     *
     * @property \DateTime $teljdatum
     */
    private $teljdatum = null;

    /**
     * Gets as szlasorszam
     *
     * A számla sorszáma, amely a számlát kétséget kizáróan azonosítja.
     *
     * @return string
     */
    public function getSzlasorszam()
    {
        return $this->szlasorszam;
    }

    /**
     * Sets a new szlasorszam
     *
     * A számla sorszáma, amely a számlát kétséget kizáróan azonosítja.
     *
     * @param string $szlasorszam
     * @return self
     */
    public function setSzlasorszam($szlasorszam)
    {
        $this->szlasorszam = $szlasorszam;
        return $this;
    }

    /**
     * Gets as szlatipus
     *
     * A számla típusa: 1-számla/2-egyszerűsített adattartalmú számla/3-módosító számla/4-érvénytelenítő számla/5-gyűjtőszámla/6-számlával egy tekintet alá eső okirat
     *
     * @return integer
     */
    public function getSzlatipus()
    {
        return $this->szlatipus;
    }

    /**
     * Sets a new szlatipus
     *
     * A számla típusa: 1-számla/2-egyszerűsített adattartalmú számla/3-módosító számla/4-érvénytelenítő számla/5-gyűjtőszámla/6-számlával egy tekintet alá eső okirat
     *
     * @param integer $szlatipus
     * @return self
     */
    public function setSzlatipus($szlatipus)
    {
        $this->szlatipus = $szlatipus;
        return $this;
    }

    /**
     * Gets as szladatum
     *
     * A számla kibocsátásának kelte.
     *
     * @return \DateTime
     */
    public function getSzladatum()
    {
        return $this->szladatum;
    }

    /**
     * Sets a new szladatum
     *
     * A számla kibocsátásának kelte.
     *
     * @param \DateTime $szladatum
     * @return self
     */
    public function setSzladatum(\DateTime $szladatum)
    {
        $this->szladatum = $szladatum;
        return $this;
    }

    /**
     * Gets as teljdatum
     *
     * A teljesítés, vagy előleg fizetése esetében a fizetendő adó megállapítás időpontja, ha az eltér a számla kibocsátásának keltétől.
     *
     * @return \DateTime
     */
    public function getTeljdatum()
    {
        return $this->teljdatum;
    }

    /**
     * Sets a new teljdatum
     *
     * A teljesítés, vagy előleg fizetése esetében a fizetendő adó megállapítás időpontja, ha az eltér a számla kibocsátásának keltétől.
     *
     * @param \DateTime $teljdatum
     * @return self
     */
    public function setTeljdatum(\DateTime $teljdatum)
    {
        $this->teljdatum = $teljdatum;
        return $this;
    }


}

