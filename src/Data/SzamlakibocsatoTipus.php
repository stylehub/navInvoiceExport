<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing SzamlakibocsatoTipus
 *
 * 
 * XSD Type: szamlakibocsato_tipus
 */
class SzamlakibocsatoTipus
{

    /**
     * A termék értékesítőjének, szolgáltatás nyújtójának adószáma, amely
     * alatt a termék értékesítését, szolgáltatás nyújtását teljesítette.
     *
     * @property string $adoszam
     */
    private $adoszam = null;

    /**
     * Közösségi adószám.
     *
     * @property string $kozadoszam
     */
    private $kozadoszam = null;

    /**
     * True, ha kisadózó.
     *
     * @property boolean $kisadozo
     */
    private $kisadozo = null;

    /**
     * Számlakibocsátó neve.
     *
     * @property string $nev
     */
    private $nev = null;

    /**
     * Számlakibocsátó címe.
     *
     * @property \Dream\NavInvoiceExport\Data\CimTipus $cim
     */
    private $cim = null;

    /**
     * True, ha egyéni vállakozó.
     *
     * @property boolean $egyeniVallalkozo
     */
    private $egyeniVallalkozo = null;

    /**
     * Egyéni vállalkozó számlakibocsátó nyilvántartási száma.
     *
     * @property string $evNyilvTartSzam
     */
    private $evNyilvTartSzam = null;

    /**
     * Egyéni vállalkozó neve.
     *
     * @property string $evNeve
     */
    private $evNeve = null;

    /**
     * Gets as adoszam
     *
     * A termék értékesítőjének, szolgáltatás nyújtójának adószáma, amely
     * alatt a termék értékesítését, szolgáltatás nyújtását teljesítette.
     *
     * @return string
     */
    public function getAdoszam()
    {
        return $this->adoszam;
    }

    /**
     * Sets a new adoszam
     *
     * A termék értékesítőjének, szolgáltatás nyújtójának adószáma, amely
     * alatt a termék értékesítését, szolgáltatás nyújtását teljesítette.
     *
     * @param string $adoszam
     * @return self
     */
    public function setAdoszam($adoszam)
    {
        $this->adoszam = $adoszam;
        return $this;
    }

    /**
     * Gets as kozadoszam
     *
     * Közösségi adószám.
     *
     * @return string
     */
    public function getKozadoszam()
    {
        return $this->kozadoszam;
    }

    /**
     * Sets a new kozadoszam
     *
     * Közösségi adószám.
     *
     * @param string $kozadoszam
     * @return self
     */
    public function setKozadoszam($kozadoszam)
    {
        $this->kozadoszam = $kozadoszam;
        return $this;
    }

    /**
     * Gets as kisadozo
     *
     * True, ha kisadózó.
     *
     * @return boolean
     */
    public function getKisadozo()
    {
        return $this->kisadozo;
    }

    /**
     * Sets a new kisadozo
     *
     * True, ha kisadózó.
     *
     * @param boolean $kisadozo
     * @return self
     */
    public function setKisadozo($kisadozo)
    {
        $this->kisadozo = $kisadozo;
        return $this;
    }

    /**
     * Gets as nev
     *
     * Számlakibocsátó neve.
     *
     * @return string
     */
    public function getNev()
    {
        return $this->nev;
    }

    /**
     * Sets a new nev
     *
     * Számlakibocsátó neve.
     *
     * @param string $nev
     * @return self
     */
    public function setNev($nev)
    {
        $this->nev = $nev;
        return $this;
    }

    /**
     * Gets as cim
     *
     * Számlakibocsátó címe.
     *
     * @return \Dream\NavInvoiceExport\Data\CimTipus
     */
    public function getCim()
    {
        return $this->cim;
    }

    /**
     * Sets a new cim
     *
     * Számlakibocsátó címe.
     *
     * @param \Dream\NavInvoiceExport\Data\CimTipus $cim
     * @return self
     */
    public function setCim(\Dream\NavInvoiceExport\Data\CimTipus $cim)
    {
        $this->cim = $cim;
        return $this;
    }

    /**
     * Gets as egyeniVallalkozo
     *
     * True, ha egyéni vállakozó.
     *
     * @return boolean
     */
    public function getEgyeniVallalkozo()
    {
        return $this->egyeniVallalkozo;
    }

    /**
     * Sets a new egyeniVallalkozo
     *
     * True, ha egyéni vállakozó.
     *
     * @param boolean $egyeniVallalkozo
     * @return self
     */
    public function setEgyeniVallalkozo($egyeniVallalkozo)
    {
        $this->egyeniVallalkozo = $egyeniVallalkozo;
        return $this;
    }

    /**
     * Gets as evNyilvTartSzam
     *
     * Egyéni vállalkozó számlakibocsátó nyilvántartási száma.
     *
     * @return string
     */
    public function getEvNyilvTartSzam()
    {
        return $this->evNyilvTartSzam;
    }

    /**
     * Sets a new evNyilvTartSzam
     *
     * Egyéni vállalkozó számlakibocsátó nyilvántartási száma.
     *
     * @param string $evNyilvTartSzam
     * @return self
     */
    public function setEvNyilvTartSzam($evNyilvTartSzam)
    {
        $this->evNyilvTartSzam = $evNyilvTartSzam;
        return $this;
    }

    /**
     * Gets as evNeve
     *
     * Egyéni vállalkozó neve.
     *
     * @return string
     */
    public function getEvNeve()
    {
        return $this->evNeve;
    }

    /**
     * Sets a new evNeve
     *
     * Egyéni vállalkozó neve.
     *
     * @param string $evNeve
     * @return self
     */
    public function setEvNeve($evNeve)
    {
        $this->evNeve = $evNeve;
        return $this;
    }


}

