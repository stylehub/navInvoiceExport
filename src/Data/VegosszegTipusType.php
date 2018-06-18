<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing VegosszegTipusType
 *
 * 
 * XSD Type: vegosszeg_tipus
 */
class VegosszegTipusType
{

    /**
     * Csak "számla" típusú számla esetében kell kitölteni.
     *  Nettó ár összesen.
     *
     * @property float $nettoarossz
     */
    private $nettoarossz = null;

    /**
     * Csak "számla" típusú számla esetében kell kitölteni.
     *  Áfa érték összesen.
     *
     * @property float $afaertekossz
     */
    private $afaertekossz = null;

    /**
     * Bruttó ár összesen.
     *
     * @property float $bruttoarossz
     */
    private $bruttoarossz = null;

    /**
     * Csak egyszerűsített adattartalmú számla esetén kell kitölteni. Amennyiben nem számlatételenként tünteti fel
     *  a százalékértéket, akkor itt kell megadni (max. 2 tizedesjegy).
     *
     * @property float $afaTartalom
     */
    private $afaTartalom = null;

    /**
     * Gets as nettoarossz
     *
     * Csak "számla" típusú számla esetében kell kitölteni.
     *  Nettó ár összesen.
     *
     * @return float
     */
    public function getNettoarossz()
    {
        return $this->nettoarossz;
    }

    /**
     * Sets a new nettoarossz
     *
     * Csak "számla" típusú számla esetében kell kitölteni.
     *  Nettó ár összesen.
     *
     * @param float $nettoarossz
     * @return self
     */
    public function setNettoarossz($nettoarossz)
    {
        $this->nettoarossz = $nettoarossz;
        return $this;
    }

    /**
     * Gets as afaertekossz
     *
     * Csak "számla" típusú számla esetében kell kitölteni.
     *  Áfa érték összesen.
     *
     * @return float
     */
    public function getAfaertekossz()
    {
        return $this->afaertekossz;
    }

    /**
     * Sets a new afaertekossz
     *
     * Csak "számla" típusú számla esetében kell kitölteni.
     *  Áfa érték összesen.
     *
     * @param float $afaertekossz
     * @return self
     */
    public function setAfaertekossz($afaertekossz)
    {
        $this->afaertekossz = $afaertekossz;
        return $this;
    }

    /**
     * Gets as bruttoarossz
     *
     * Bruttó ár összesen.
     *
     * @return float
     */
    public function getBruttoarossz()
    {
        return $this->bruttoarossz;
    }

    /**
     * Sets a new bruttoarossz
     *
     * Bruttó ár összesen.
     *
     * @param float $bruttoarossz
     * @return self
     */
    public function setBruttoarossz($bruttoarossz)
    {
        $this->bruttoarossz = $bruttoarossz;
        return $this;
    }

    /**
     * Gets as afaTartalom
     *
     * Csak egyszerűsített adattartalmú számla esetén kell kitölteni. Amennyiben nem számlatételenként tünteti fel
     *  a százalékértéket, akkor itt kell megadni (max. 2 tizedesjegy).
     *
     * @return float
     */
    public function getAfaTartalom()
    {
        return $this->afaTartalom;
    }

    /**
     * Sets a new afaTartalom
     *
     * Csak egyszerűsített adattartalmú számla esetén kell kitölteni. Amennyiben nem számlatételenként tünteti fel
     *  a százalékértéket, akkor itt kell megadni (max. 2 tizedesjegy).
     *
     * @param float $afaTartalom
     * @return self
     */
    public function setAfaTartalom($afaTartalom)
    {
        $this->afaTartalom = $afaTartalom;
        return $this;
    }


}

