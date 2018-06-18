<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing SzamlaTipusType
 *
 * 
 * XSD Type: szamla_tipus
 */
class SzamlaTipusType
{

    /**
     * @property \Dream\NavInvoiceExport\Data\FejlecTipusType $fejlec
     */
    private $fejlec = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\SzamlakibocsatoTipusType $szamlakibocsato
     */
    private $szamlakibocsato = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\VevoTipusType $vevo
     */
    private $vevo = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\KepviseloTipusType $kepviselo
     */
    private $kepviselo = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\TermekSzolgaltatasTetelekTipusType[] $termekSzolgaltatasTetelek
     */
    private $termekSzolgaltatasTetelek = array(
        
    );

    /**
     * @property \Dream\NavInvoiceExport\Data\ModositoSzlaTipusType[] $modositoSzla
     */
    private $modositoSzla = array(
        
    );

    /**
     * @property \Dream\NavInvoiceExport\Data\GyujtoSzlaTipusType[] $gyujtoSzla
     */
    private $gyujtoSzla = array(
        
    );

    /**
     * @property \Dream\NavInvoiceExport\Data\ZaradekokTipusType $zaradekok
     */
    private $zaradekok = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\NemKotelezoTipusType $nemKotelezo
     */
    private $nemKotelezo = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\OsszesitesTipusType $osszesites
     */
    private $osszesites = null;

    /**
     * Gets as fejlec
     *
     * @return \Dream\NavInvoiceExport\Data\FejlecTipusType
     */
    public function getFejlec()
    {
        return $this->fejlec;
    }

    /**
     * Sets a new fejlec
     *
     * @param \Dream\NavInvoiceExport\Data\FejlecTipusType $fejlec
     * @return self
     */
    public function setFejlec(\Dream\NavInvoiceExport\Data\FejlecTipusType $fejlec)
    {
        $this->fejlec = $fejlec;
        return $this;
    }

    /**
     * Gets as szamlakibocsato
     *
     * @return \Dream\NavInvoiceExport\Data\SzamlakibocsatoTipusType
     */
    public function getSzamlakibocsato()
    {
        return $this->szamlakibocsato;
    }

    /**
     * Sets a new szamlakibocsato
     *
     * @param \Dream\NavInvoiceExport\Data\SzamlakibocsatoTipusType $szamlakibocsato
     * @return self
     */
    public function setSzamlakibocsato(\Dream\NavInvoiceExport\Data\SzamlakibocsatoTipusType $szamlakibocsato)
    {
        $this->szamlakibocsato = $szamlakibocsato;
        return $this;
    }

    /**
     * Gets as vevo
     *
     * @return \Dream\NavInvoiceExport\Data\VevoTipusType
     */
    public function getVevo()
    {
        return $this->vevo;
    }

    /**
     * Sets a new vevo
     *
     * @param \Dream\NavInvoiceExport\Data\VevoTipusType $vevo
     * @return self
     */
    public function setVevo(\Dream\NavInvoiceExport\Data\VevoTipusType $vevo)
    {
        $this->vevo = $vevo;
        return $this;
    }

    /**
     * Gets as kepviselo
     *
     * @return \Dream\NavInvoiceExport\Data\KepviseloTipusType
     */
    public function getKepviselo()
    {
        return $this->kepviselo;
    }

    /**
     * Sets a new kepviselo
     *
     * @param \Dream\NavInvoiceExport\Data\KepviseloTipusType $kepviselo
     * @return self
     */
    public function setKepviselo(\Dream\NavInvoiceExport\Data\KepviseloTipusType $kepviselo)
    {
        $this->kepviselo = $kepviselo;
        return $this;
    }

    /**
     * Adds as termekSzolgaltatasTetelek
     *
     * @return self
     * @param \Dream\NavInvoiceExport\Data\TermekSzolgaltatasTetelekTipusType $termekSzolgaltatasTetelek
     */
    public function addToTermekSzolgaltatasTetelek(\Dream\NavInvoiceExport\Data\TermekSzolgaltatasTetelekTipusType $termekSzolgaltatasTetelek)
    {
        $this->termekSzolgaltatasTetelek[] = $termekSzolgaltatasTetelek;
        return $this;
    }

    /**
     * isset termekSzolgaltatasTetelek
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTermekSzolgaltatasTetelek($index)
    {
        return isset($this->termekSzolgaltatasTetelek[$index]);
    }

    /**
     * unset termekSzolgaltatasTetelek
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTermekSzolgaltatasTetelek($index)
    {
        unset($this->termekSzolgaltatasTetelek[$index]);
    }

    /**
     * Gets as termekSzolgaltatasTetelek
     *
     * @return \Dream\NavInvoiceExport\Data\TermekSzolgaltatasTetelekTipusType[]
     */
    public function getTermekSzolgaltatasTetelek()
    {
        return $this->termekSzolgaltatasTetelek;
    }

    /**
     * Sets a new termekSzolgaltatasTetelek
     *
     * @param \Dream\NavInvoiceExport\Data\TermekSzolgaltatasTetelekTipusType[] $termekSzolgaltatasTetelek
     * @return self
     */
    public function setTermekSzolgaltatasTetelek(array $termekSzolgaltatasTetelek)
    {
        $this->termekSzolgaltatasTetelek = $termekSzolgaltatasTetelek;
        return $this;
    }

    /**
     * Adds as modositoSzla
     *
     * @return self
     * @param \Dream\NavInvoiceExport\Data\ModositoSzlaTipusType $modositoSzla
     */
    public function addToModositoSzla(\Dream\NavInvoiceExport\Data\ModositoSzlaTipusType $modositoSzla)
    {
        $this->modositoSzla[] = $modositoSzla;
        return $this;
    }

    /**
     * isset modositoSzla
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetModositoSzla($index)
    {
        return isset($this->modositoSzla[$index]);
    }

    /**
     * unset modositoSzla
     *
     * @param scalar $index
     * @return void
     */
    public function unsetModositoSzla($index)
    {
        unset($this->modositoSzla[$index]);
    }

    /**
     * Gets as modositoSzla
     *
     * @return \Dream\NavInvoiceExport\Data\ModositoSzlaTipusType[]
     */
    public function getModositoSzla()
    {
        return $this->modositoSzla;
    }

    /**
     * Sets a new modositoSzla
     *
     * @param \Dream\NavInvoiceExport\Data\ModositoSzlaTipusType[] $modositoSzla
     * @return self
     */
    public function setModositoSzla(array $modositoSzla)
    {
        $this->modositoSzla = $modositoSzla;
        return $this;
    }

    /**
     * Adds as gyujtoSzla
     *
     * @return self
     * @param \Dream\NavInvoiceExport\Data\GyujtoSzlaTipusType $gyujtoSzla
     */
    public function addToGyujtoSzla(\Dream\NavInvoiceExport\Data\GyujtoSzlaTipusType $gyujtoSzla)
    {
        $this->gyujtoSzla[] = $gyujtoSzla;
        return $this;
    }

    /**
     * isset gyujtoSzla
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGyujtoSzla($index)
    {
        return isset($this->gyujtoSzla[$index]);
    }

    /**
     * unset gyujtoSzla
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGyujtoSzla($index)
    {
        unset($this->gyujtoSzla[$index]);
    }

    /**
     * Gets as gyujtoSzla
     *
     * @return \Dream\NavInvoiceExport\Data\GyujtoSzlaTipusType[]
     */
    public function getGyujtoSzla()
    {
        return $this->gyujtoSzla;
    }

    /**
     * Sets a new gyujtoSzla
     *
     * @param \Dream\NavInvoiceExport\Data\GyujtoSzlaTipusType[] $gyujtoSzla
     * @return self
     */
    public function setGyujtoSzla(array $gyujtoSzla)
    {
        $this->gyujtoSzla = $gyujtoSzla;
        return $this;
    }

    /**
     * Gets as zaradekok
     *
     * @return \Dream\NavInvoiceExport\Data\ZaradekokTipusType
     */
    public function getZaradekok()
    {
        return $this->zaradekok;
    }

    /**
     * Sets a new zaradekok
     *
     * @param \Dream\NavInvoiceExport\Data\ZaradekokTipusType $zaradekok
     * @return self
     */
    public function setZaradekok(\Dream\NavInvoiceExport\Data\ZaradekokTipusType $zaradekok)
    {
        $this->zaradekok = $zaradekok;
        return $this;
    }

    /**
     * Gets as nemKotelezo
     *
     * @return \Dream\NavInvoiceExport\Data\NemKotelezoTipusType
     */
    public function getNemKotelezo()
    {
        return $this->nemKotelezo;
    }

    /**
     * Sets a new nemKotelezo
     *
     * @param \Dream\NavInvoiceExport\Data\NemKotelezoTipusType $nemKotelezo
     * @return self
     */
    public function setNemKotelezo(\Dream\NavInvoiceExport\Data\NemKotelezoTipusType $nemKotelezo)
    {
        $this->nemKotelezo = $nemKotelezo;
        return $this;
    }

    /**
     * Gets as osszesites
     *
     * @return \Dream\NavInvoiceExport\Data\OsszesitesTipusType
     */
    public function getOsszesites()
    {
        return $this->osszesites;
    }

    /**
     * Sets a new osszesites
     *
     * @param \Dream\NavInvoiceExport\Data\OsszesitesTipusType $osszesites
     * @return self
     */
    public function setOsszesites(\Dream\NavInvoiceExport\Data\OsszesitesTipusType $osszesites)
    {
        $this->osszesites = $osszesites;
        return $this;
    }


}

