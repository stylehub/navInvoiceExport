<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing SzamlaTipus
 *
 * 
 * XSD Type: szamla_tipus
 */
class SzamlaTipus
{

    /**
     * @property \Dream\NavInvoiceExport\Data\FejlecTipus $fejlec
     */
    private $fejlec = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\SzamlakibocsatoTipus $szamlakibocsato
     */
    private $szamlakibocsato = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\VevoTipus $vevo
     */
    private $vevo = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\KepviseloTipus $kepviselo
     */
    private $kepviselo = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\TermekSzolgaltatasTetelekTipus[]
     * $termekSzolgaltatasTetelek
     */
    private $termekSzolgaltatasTetelek = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\ModositoSzlaTipus[] $modositoSzla
     */
    private $modositoSzla = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\GyujtoSzlaTipus[] $gyujtoSzla
     */
    private $gyujtoSzla = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\ZaradekokTipus $zaradekok
     */
    private $zaradekok = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\NemKotelezoTipus $nemKotelezo
     */
    private $nemKotelezo = null;

    /**
     * @property \Dream\NavInvoiceExport\Data\OsszesitesTipus $osszesites
     */
    private $osszesites = null;

    /**
     * Gets as fejlec
     *
     * @return \Dream\NavInvoiceExport\Data\FejlecTipus
     */
    public function getFejlec()
    {
        return $this->fejlec;
    }

    /**
     * Sets a new fejlec
     *
     * @param \Dream\NavInvoiceExport\Data\FejlecTipus $fejlec
     * @return self
     */
    public function setFejlec(\Dream\NavInvoiceExport\Data\FejlecTipus $fejlec)
    {
        $this->fejlec = $fejlec;
        return $this;
    }

    /**
     * Gets as szamlakibocsato
     *
     * @return \Dream\NavInvoiceExport\Data\SzamlakibocsatoTipus
     */
    public function getSzamlakibocsato()
    {
        return $this->szamlakibocsato;
    }

    /**
     * Sets a new szamlakibocsato
     *
     * @param \Dream\NavInvoiceExport\Data\SzamlakibocsatoTipus $szamlakibocsato
     * @return self
     */
    public function setSzamlakibocsato(\Dream\NavInvoiceExport\Data\SzamlakibocsatoTipus $szamlakibocsato)
    {
        $this->szamlakibocsato = $szamlakibocsato;
        return $this;
    }

    /**
     * Gets as vevo
     *
     * @return \Dream\NavInvoiceExport\Data\VevoTipus
     */
    public function getVevo()
    {
        return $this->vevo;
    }

    /**
     * Sets a new vevo
     *
     * @param \Dream\NavInvoiceExport\Data\VevoTipus $vevo
     * @return self
     */
    public function setVevo(\Dream\NavInvoiceExport\Data\VevoTipus $vevo)
    {
        $this->vevo = $vevo;
        return $this;
    }

    /**
     * Gets as kepviselo
     *
     * @return \Dream\NavInvoiceExport\Data\KepviseloTipus
     */
    public function getKepviselo()
    {
        return $this->kepviselo;
    }

    /**
     * Sets a new kepviselo
     *
     * @param \Dream\NavInvoiceExport\Data\KepviseloTipus $kepviselo
     * @return self
     */
    public function setKepviselo(\Dream\NavInvoiceExport\Data\KepviseloTipus $kepviselo)
    {
        $this->kepviselo = $kepviselo;
        return $this;
    }

    /**
     * Adds as termekSzolgaltatasTetelek
     *
     * @return self
     * @param \Dream\NavInvoiceExport\Data\TermekSzolgaltatasTetelekTipus
     * $termekSzolgaltatasTetelek
     */
    public function addToTermekSzolgaltatasTetelek(\Dream\NavInvoiceExport\Data\TermekSzolgaltatasTetelekTipus $termekSzolgaltatasTetelek)
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
     * @return \Dream\NavInvoiceExport\Data\TermekSzolgaltatasTetelekTipus[]
     */
    public function getTermekSzolgaltatasTetelek()
    {
        return $this->termekSzolgaltatasTetelek;
    }

    /**
     * Sets a new termekSzolgaltatasTetelek
     *
     * @param \Dream\NavInvoiceExport\Data\TermekSzolgaltatasTetelekTipus[]
     * $termekSzolgaltatasTetelek
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
     * @param \Dream\NavInvoiceExport\Data\ModositoSzlaTipus $modositoSzla
     */
    public function addToModositoSzla(\Dream\NavInvoiceExport\Data\ModositoSzlaTipus $modositoSzla)
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
     * @return \Dream\NavInvoiceExport\Data\ModositoSzlaTipus[]
     */
    public function getModositoSzla()
    {
        return $this->modositoSzla;
    }

    /**
     * Sets a new modositoSzla
     *
     * @param \Dream\NavInvoiceExport\Data\ModositoSzlaTipus[] $modositoSzla
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
     * @param \Dream\NavInvoiceExport\Data\GyujtoSzlaTipus $gyujtoSzla
     */
    public function addToGyujtoSzla(\Dream\NavInvoiceExport\Data\GyujtoSzlaTipus $gyujtoSzla)
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
     * @return \Dream\NavInvoiceExport\Data\GyujtoSzlaTipus[]
     */
    public function getGyujtoSzla()
    {
        return $this->gyujtoSzla;
    }

    /**
     * Sets a new gyujtoSzla
     *
     * @param \Dream\NavInvoiceExport\Data\GyujtoSzlaTipus[] $gyujtoSzla
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
     * @return \Dream\NavInvoiceExport\Data\ZaradekokTipus
     */
    public function getZaradekok()
    {
        return $this->zaradekok;
    }

    /**
     * Sets a new zaradekok
     *
     * @param \Dream\NavInvoiceExport\Data\ZaradekokTipus $zaradekok
     * @return self
     */
    public function setZaradekok(\Dream\NavInvoiceExport\Data\ZaradekokTipus $zaradekok)
    {
        $this->zaradekok = $zaradekok;
        return $this;
    }

    /**
     * Gets as nemKotelezo
     *
     * @return \Dream\NavInvoiceExport\Data\NemKotelezoTipus
     */
    public function getNemKotelezo()
    {
        return $this->nemKotelezo;
    }

    /**
     * Sets a new nemKotelezo
     *
     * @param \Dream\NavInvoiceExport\Data\NemKotelezoTipus $nemKotelezo
     * @return self
     */
    public function setNemKotelezo(\Dream\NavInvoiceExport\Data\NemKotelezoTipus $nemKotelezo)
    {
        $this->nemKotelezo = $nemKotelezo;
        return $this;
    }

    /**
     * Gets as osszesites
     *
     * @return \Dream\NavInvoiceExport\Data\OsszesitesTipus
     */
    public function getOsszesites()
    {
        return $this->osszesites;
    }

    /**
     * Sets a new osszesites
     *
     * @param \Dream\NavInvoiceExport\Data\OsszesitesTipus $osszesites
     * @return self
     */
    public function setOsszesites(\Dream\NavInvoiceExport\Data\OsszesitesTipus $osszesites)
    {
        $this->osszesites = $osszesites;
        return $this;
    }


}

