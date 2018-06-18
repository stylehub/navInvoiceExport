<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing AsvanyolajTipusType
 *
 * 
 * XSD Type: asvanyolaj_tipus
 */
class AsvanyolajTipusType
{

    /**
     * A termék tényleges hőmérséklete Celsius fokban.
     *
     * @property float $homerseklet
     */
    private $homerseklet = null;

    /**
     * Kitárolt mennyisége környezeti hőmérsékleten mért tényleges térfogatban,
     *  illetve vasúti, közúti és uszályszállítás esetén mért vagy számított tömege.
     *  Ha megad tömeget, akkor a mértékegységet is meg kell adni.
     *
     * @property float $tomeg
     */
    private $tomeg = null;

    /**
     * Tömeg mértékegysége.
     *
     * @property string $tomegMert
     */
    private $tomegMert = null;

    /**
     * 15 Celsius-fok hőmérséklethez tartozó sűrűsége.
     *
     * @property float $suruseg
     */
    private $suruseg = null;

    /**
     * Sűrűség mértékegysége.
     *  Ha megad sűrűséget, akkor a mértékegységet is meg kell adni.
     *
     * @property string $surusegMert
     */
    private $surusegMert = null;

    /**
     * 15 Celsius-fok hőmérséklethez tartozó térfogata.
     *
     * @property float $terfogat
     */
    private $terfogat = null;

    /**
     * Térfogat mértékegysége.
     *  Ha megad térfogatot, akkor a mértékegységet is meg kell adni.
     *
     * @property string $terfogatMert
     */
    private $terfogatMert = null;

    /**
     * A termék minősége, az érvényes MSZ-re, műszaki leírásra vagy
     *  szerződésben rögzített specifikációra való hivatkozással.
     *
     * @property string $minoseg
     */
    private $minoseg = null;

    /**
     * Az üzemanyag és a tüzelőolaj külön jogszabályban előírt minőségi követelménynek való megfelelésének tanúsítása.
     *
     * @property string $tanusitas
     */
    private $tanusitas = null;

    /**
     * Gets as homerseklet
     *
     * A termék tényleges hőmérséklete Celsius fokban.
     *
     * @return float
     */
    public function getHomerseklet()
    {
        return $this->homerseklet;
    }

    /**
     * Sets a new homerseklet
     *
     * A termék tényleges hőmérséklete Celsius fokban.
     *
     * @param float $homerseklet
     * @return self
     */
    public function setHomerseklet($homerseklet)
    {
        $this->homerseklet = $homerseklet;
        return $this;
    }

    /**
     * Gets as tomeg
     *
     * Kitárolt mennyisége környezeti hőmérsékleten mért tényleges térfogatban,
     *  illetve vasúti, közúti és uszályszállítás esetén mért vagy számított tömege.
     *  Ha megad tömeget, akkor a mértékegységet is meg kell adni.
     *
     * @return float
     */
    public function getTomeg()
    {
        return $this->tomeg;
    }

    /**
     * Sets a new tomeg
     *
     * Kitárolt mennyisége környezeti hőmérsékleten mért tényleges térfogatban,
     *  illetve vasúti, közúti és uszályszállítás esetén mért vagy számított tömege.
     *  Ha megad tömeget, akkor a mértékegységet is meg kell adni.
     *
     * @param float $tomeg
     * @return self
     */
    public function setTomeg($tomeg)
    {
        $this->tomeg = $tomeg;
        return $this;
    }

    /**
     * Gets as tomegMert
     *
     * Tömeg mértékegysége.
     *
     * @return string
     */
    public function getTomegMert()
    {
        return $this->tomegMert;
    }

    /**
     * Sets a new tomegMert
     *
     * Tömeg mértékegysége.
     *
     * @param string $tomegMert
     * @return self
     */
    public function setTomegMert($tomegMert)
    {
        $this->tomegMert = $tomegMert;
        return $this;
    }

    /**
     * Gets as suruseg
     *
     * 15 Celsius-fok hőmérséklethez tartozó sűrűsége.
     *
     * @return float
     */
    public function getSuruseg()
    {
        return $this->suruseg;
    }

    /**
     * Sets a new suruseg
     *
     * 15 Celsius-fok hőmérséklethez tartozó sűrűsége.
     *
     * @param float $suruseg
     * @return self
     */
    public function setSuruseg($suruseg)
    {
        $this->suruseg = $suruseg;
        return $this;
    }

    /**
     * Gets as surusegMert
     *
     * Sűrűség mértékegysége.
     *  Ha megad sűrűséget, akkor a mértékegységet is meg kell adni.
     *
     * @return string
     */
    public function getSurusegMert()
    {
        return $this->surusegMert;
    }

    /**
     * Sets a new surusegMert
     *
     * Sűrűség mértékegysége.
     *  Ha megad sűrűséget, akkor a mértékegységet is meg kell adni.
     *
     * @param string $surusegMert
     * @return self
     */
    public function setSurusegMert($surusegMert)
    {
        $this->surusegMert = $surusegMert;
        return $this;
    }

    /**
     * Gets as terfogat
     *
     * 15 Celsius-fok hőmérséklethez tartozó térfogata.
     *
     * @return float
     */
    public function getTerfogat()
    {
        return $this->terfogat;
    }

    /**
     * Sets a new terfogat
     *
     * 15 Celsius-fok hőmérséklethez tartozó térfogata.
     *
     * @param float $terfogat
     * @return self
     */
    public function setTerfogat($terfogat)
    {
        $this->terfogat = $terfogat;
        return $this;
    }

    /**
     * Gets as terfogatMert
     *
     * Térfogat mértékegysége.
     *  Ha megad térfogatot, akkor a mértékegységet is meg kell adni.
     *
     * @return string
     */
    public function getTerfogatMert()
    {
        return $this->terfogatMert;
    }

    /**
     * Sets a new terfogatMert
     *
     * Térfogat mértékegysége.
     *  Ha megad térfogatot, akkor a mértékegységet is meg kell adni.
     *
     * @param string $terfogatMert
     * @return self
     */
    public function setTerfogatMert($terfogatMert)
    {
        $this->terfogatMert = $terfogatMert;
        return $this;
    }

    /**
     * Gets as minoseg
     *
     * A termék minősége, az érvényes MSZ-re, műszaki leírásra vagy
     *  szerződésben rögzített specifikációra való hivatkozással.
     *
     * @return string
     */
    public function getMinoseg()
    {
        return $this->minoseg;
    }

    /**
     * Sets a new minoseg
     *
     * A termék minősége, az érvényes MSZ-re, műszaki leírásra vagy
     *  szerződésben rögzített specifikációra való hivatkozással.
     *
     * @param string $minoseg
     * @return self
     */
    public function setMinoseg($minoseg)
    {
        $this->minoseg = $minoseg;
        return $this;
    }

    /**
     * Gets as tanusitas
     *
     * Az üzemanyag és a tüzelőolaj külön jogszabályban előírt minőségi követelménynek való megfelelésének tanúsítása.
     *
     * @return string
     */
    public function getTanusitas()
    {
        return $this->tanusitas;
    }

    /**
     * Sets a new tanusitas
     *
     * Az üzemanyag és a tüzelőolaj külön jogszabályban előírt minőségi követelménynek való megfelelésének tanúsítása.
     *
     * @param string $tanusitas
     * @return self
     */
    public function setTanusitas($tanusitas)
    {
        $this->tanusitas = $tanusitas;
        return $this;
    }


}

