<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing NemKotelezoTipusType
 *
 * 
 * XSD Type: nem_kotelezo_tipus
 */
class NemKotelezoTipusType
{

    /**
     * A számla teljesítésének határideje.
     *
     * @property \DateTime $fizHatarido
     */
    private $fizHatarido = null;

    /**
     * A számla fizetési teljesítésének módja.
     *
     * @property string $fizMod
     */
    private $fizMod = null;

    /**
     * A számlán szereplő összegek pénzneme.
     *
     * @property string $penznem
     */
    private $penznem = null;

    /**
     * Számla megjelenési formája: e-számla / EDI számla / papír alapon továbbított számla /
     *  papír alapon előállított, de elektronikus formában továbbított számla.
     *
     * @property string $szlaForma
     */
    private $szlaForma = null;

    /**
     * A termék értékesítőjének, szolgáltatás nyújtójának bankszámlaszáma.
     *
     * @property string $kibocsatoBankszla
     */
    private $kibocsatoBankszla = null;

    /**
     * A termék beszerzőjének, szolgáltatás igénybevevőjének bankszámlaszáma.
     *
     * @property string $befogadoBankszla
     */
    private $befogadoBankszla = null;

    /**
     * Gets as fizHatarido
     *
     * A számla teljesítésének határideje.
     *
     * @return \DateTime
     */
    public function getFizHatarido()
    {
        return $this->fizHatarido;
    }

    /**
     * Sets a new fizHatarido
     *
     * A számla teljesítésének határideje.
     *
     * @param \DateTime $fizHatarido
     * @return self
     */
    public function setFizHatarido(\DateTime $fizHatarido)
    {
        $this->fizHatarido = $fizHatarido;
        return $this;
    }

    /**
     * Gets as fizMod
     *
     * A számla fizetési teljesítésének módja.
     *
     * @return string
     */
    public function getFizMod()
    {
        return $this->fizMod;
    }

    /**
     * Sets a new fizMod
     *
     * A számla fizetési teljesítésének módja.
     *
     * @param string $fizMod
     * @return self
     */
    public function setFizMod($fizMod)
    {
        $this->fizMod = $fizMod;
        return $this;
    }

    /**
     * Gets as penznem
     *
     * A számlán szereplő összegek pénzneme.
     *
     * @return string
     */
    public function getPenznem()
    {
        return $this->penznem;
    }

    /**
     * Sets a new penznem
     *
     * A számlán szereplő összegek pénzneme.
     *
     * @param string $penznem
     * @return self
     */
    public function setPenznem($penznem)
    {
        $this->penznem = $penznem;
        return $this;
    }

    /**
     * Gets as szlaForma
     *
     * Számla megjelenési formája: e-számla / EDI számla / papír alapon továbbított számla /
     *  papír alapon előállított, de elektronikus formában továbbított számla.
     *
     * @return string
     */
    public function getSzlaForma()
    {
        return $this->szlaForma;
    }

    /**
     * Sets a new szlaForma
     *
     * Számla megjelenési formája: e-számla / EDI számla / papír alapon továbbított számla /
     *  papír alapon előállított, de elektronikus formában továbbított számla.
     *
     * @param string $szlaForma
     * @return self
     */
    public function setSzlaForma($szlaForma)
    {
        $this->szlaForma = $szlaForma;
        return $this;
    }

    /**
     * Gets as kibocsatoBankszla
     *
     * A termék értékesítőjének, szolgáltatás nyújtójának bankszámlaszáma.
     *
     * @return string
     */
    public function getKibocsatoBankszla()
    {
        return $this->kibocsatoBankszla;
    }

    /**
     * Sets a new kibocsatoBankszla
     *
     * A termék értékesítőjének, szolgáltatás nyújtójának bankszámlaszáma.
     *
     * @param string $kibocsatoBankszla
     * @return self
     */
    public function setKibocsatoBankszla($kibocsatoBankszla)
    {
        $this->kibocsatoBankszla = $kibocsatoBankszla;
        return $this;
    }

    /**
     * Gets as befogadoBankszla
     *
     * A termék beszerzőjének, szolgáltatás igénybevevőjének bankszámlaszáma.
     *
     * @return string
     */
    public function getBefogadoBankszla()
    {
        return $this->befogadoBankszla;
    }

    /**
     * Sets a new befogadoBankszla
     *
     * A termék beszerzőjének, szolgáltatás igénybevevőjének bankszámlaszáma.
     *
     * @param string $befogadoBankszla
     * @return self
     */
    public function setBefogadoBankszla($befogadoBankszla)
    {
        $this->befogadoBankszla = $befogadoBankszla;
        return $this;
    }


}

