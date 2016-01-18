<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing CimTipus
 *
 * 
 * XSD Type: cim_tipus
 */
class CimTipus
{

    /**
     * @property string $iranyitoszam
     */
    private $iranyitoszam = null;

    /**
     * Település megnevezése
     *
     * @property string $telepules
     */
    private $telepules = null;

    /**
     * @property string $kerulet
     */
    private $kerulet = null;

    /**
     * @property string $kozteruletNeve
     */
    private $kozteruletNeve = null;

    /**
     * A közterület jellege (utca, körút …)
     *
     * @property string $kozteruletJellege
     */
    private $kozteruletJellege = null;

    /**
     * @property string $hazszam
     */
    private $hazszam = null;

    /**
     * @property string $epulet
     */
    private $epulet = null;

    /**
     * @property string $lepcsohaz
     */
    private $lepcsohaz = null;

    /**
     * @property string $szint
     */
    private $szint = null;

    /**
     * @property string $ajto
     */
    private $ajto = null;

    /**
     * Gets as iranyitoszam
     *
     * @return string
     */
    public function getIranyitoszam()
    {
        return $this->iranyitoszam;
    }

    /**
     * Sets a new iranyitoszam
     *
     * @param string $iranyitoszam
     * @return self
     */
    public function setIranyitoszam($iranyitoszam)
    {
        $this->iranyitoszam = $iranyitoszam;
        return $this;
    }

    /**
     * Gets as telepules
     *
     * Település megnevezése
     *
     * @return string
     */
    public function getTelepules()
    {
        return $this->telepules;
    }

    /**
     * Sets a new telepules
     *
     * Település megnevezése
     *
     * @param string $telepules
     * @return self
     */
    public function setTelepules($telepules)
    {
        $this->telepules = $telepules;
        return $this;
    }

    /**
     * Gets as kerulet
     *
     * @return string
     */
    public function getKerulet()
    {
        return $this->kerulet;
    }

    /**
     * Sets a new kerulet
     *
     * @param string $kerulet
     * @return self
     */
    public function setKerulet($kerulet)
    {
        $this->kerulet = $kerulet;
        return $this;
    }

    /**
     * Gets as kozteruletNeve
     *
     * @return string
     */
    public function getKozteruletNeve()
    {
        return $this->kozteruletNeve;
    }

    /**
     * Sets a new kozteruletNeve
     *
     * @param string $kozteruletNeve
     * @return self
     */
    public function setKozteruletNeve($kozteruletNeve)
    {
        $this->kozteruletNeve = $kozteruletNeve;
        return $this;
    }

    /**
     * Gets as kozteruletJellege
     *
     * A közterület jellege (utca, körút …)
     *
     * @return string
     */
    public function getKozteruletJellege()
    {
        return $this->kozteruletJellege;
    }

    /**
     * Sets a new kozteruletJellege
     *
     * A közterület jellege (utca, körút …)
     *
     * @param string $kozteruletJellege
     * @return self
     */
    public function setKozteruletJellege($kozteruletJellege)
    {
        $this->kozteruletJellege = $kozteruletJellege;
        return $this;
    }

    /**
     * Gets as hazszam
     *
     * @return string
     */
    public function getHazszam()
    {
        return $this->hazszam;
    }

    /**
     * Sets a new hazszam
     *
     * @param string $hazszam
     * @return self
     */
    public function setHazszam($hazszam)
    {
        $this->hazszam = $hazszam;
        return $this;
    }

    /**
     * Gets as epulet
     *
     * @return string
     */
    public function getEpulet()
    {
        return $this->epulet;
    }

    /**
     * Sets a new epulet
     *
     * @param string $epulet
     * @return self
     */
    public function setEpulet($epulet)
    {
        $this->epulet = $epulet;
        return $this;
    }

    /**
     * Gets as lepcsohaz
     *
     * @return string
     */
    public function getLepcsohaz()
    {
        return $this->lepcsohaz;
    }

    /**
     * Sets a new lepcsohaz
     *
     * @param string $lepcsohaz
     * @return self
     */
    public function setLepcsohaz($lepcsohaz)
    {
        $this->lepcsohaz = $lepcsohaz;
        return $this;
    }

    /**
     * Gets as szint
     *
     * @return string
     */
    public function getSzint()
    {
        return $this->szint;
    }

    /**
     * Sets a new szint
     *
     * @param string $szint
     * @return self
     */
    public function setSzint($szint)
    {
        $this->szint = $szint;
        return $this;
    }

    /**
     * Gets as ajto
     *
     * @return string
     */
    public function getAjto()
    {
        return $this->ajto;
    }

    /**
     * Sets a new ajto
     *
     * @param string $ajto
     * @return self
     */
    public function setAjto($ajto)
    {
        $this->ajto = $ajto;
        return $this;
    }


}

