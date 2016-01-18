<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing SzamlakTipus
 *
 * 
 * XSD Type: szamlak_tipus
 */
class SzamlakTipus
{

    /**
     * Az exportálás dátuma.
     *
     * @property \DateTime $exportDatuma
     */
    private $exportDatuma = null;

    /**
     * Az exportált számlák darabszáma.
     *
     * @property float $exportSzlaDb
     */
    private $exportSzlaDb = null;

    /**
     * Az exportálással érintett időszak kezdő dátuma.
     *
     * @property \DateTime $kezdoIdo
     */
    private $kezdoIdo = null;

    /**
     * Az exportálással érintett időszak záró dátuma.
     *
     * @property \DateTime $zaroIdo
     */
    private $zaroIdo = null;

    /**
     * Az exportált számlák kezdő sorszáma.
     *
     * @property string $kezdoSzlaSzam
     */
    private $kezdoSzlaSzam = null;

    /**
     * Az exportált számlák záró sorszáma.
     *
     * @property string $zaroSzlaSzam
     */
    private $zaroSzlaSzam = null;

    /**
     * Az egyes számlák adatait tartalmazza.
     *
     * @property \Dream\NavInvoiceExport\Data\SzamlaTipus[] $szamla
     */
    private $szamla = null;

    /**
     * Gets as exportDatuma
     *
     * Az exportálás dátuma.
     *
     * @return \DateTime
     */
    public function getExportDatuma()
    {
        return $this->exportDatuma;
    }

    /**
     * Sets a new exportDatuma
     *
     * Az exportálás dátuma.
     *
     * @param \DateTime $exportDatuma
     * @return self
     */
    public function setExportDatuma(\DateTime $exportDatuma)
    {
        $this->exportDatuma = $exportDatuma;
        return $this;
    }

    /**
     * Gets as exportSzlaDb
     *
     * Az exportált számlák darabszáma.
     *
     * @return float
     */
    public function getExportSzlaDb()
    {
        return $this->exportSzlaDb;
    }

    /**
     * Sets a new exportSzlaDb
     *
     * Az exportált számlák darabszáma.
     *
     * @param float $exportSzlaDb
     * @return self
     */
    public function setExportSzlaDb($exportSzlaDb)
    {
        $this->exportSzlaDb = $exportSzlaDb;
        return $this;
    }

    /**
     * Gets as kezdoIdo
     *
     * Az exportálással érintett időszak kezdő dátuma.
     *
     * @return \DateTime
     */
    public function getKezdoIdo()
    {
        return $this->kezdoIdo;
    }

    /**
     * Sets a new kezdoIdo
     *
     * Az exportálással érintett időszak kezdő dátuma.
     *
     * @param \DateTime $kezdoIdo
     * @return self
     */
    public function setKezdoIdo(\DateTime $kezdoIdo)
    {
        $this->kezdoIdo = $kezdoIdo;
        return $this;
    }

    /**
     * Gets as zaroIdo
     *
     * Az exportálással érintett időszak záró dátuma.
     *
     * @return \DateTime
     */
    public function getZaroIdo()
    {
        return $this->zaroIdo;
    }

    /**
     * Sets a new zaroIdo
     *
     * Az exportálással érintett időszak záró dátuma.
     *
     * @param \DateTime $zaroIdo
     * @return self
     */
    public function setZaroIdo(\DateTime $zaroIdo)
    {
        $this->zaroIdo = $zaroIdo;
        return $this;
    }

    /**
     * Gets as kezdoSzlaSzam
     *
     * Az exportált számlák kezdő sorszáma.
     *
     * @return string
     */
    public function getKezdoSzlaSzam()
    {
        return $this->kezdoSzlaSzam;
    }

    /**
     * Sets a new kezdoSzlaSzam
     *
     * Az exportált számlák kezdő sorszáma.
     *
     * @param string $kezdoSzlaSzam
     * @return self
     */
    public function setKezdoSzlaSzam($kezdoSzlaSzam)
    {
        $this->kezdoSzlaSzam = $kezdoSzlaSzam;
        return $this;
    }

    /**
     * Gets as zaroSzlaSzam
     *
     * Az exportált számlák záró sorszáma.
     *
     * @return string
     */
    public function getZaroSzlaSzam()
    {
        return $this->zaroSzlaSzam;
    }

    /**
     * Sets a new zaroSzlaSzam
     *
     * Az exportált számlák záró sorszáma.
     *
     * @param string $zaroSzlaSzam
     * @return self
     */
    public function setZaroSzlaSzam($zaroSzlaSzam)
    {
        $this->zaroSzlaSzam = $zaroSzlaSzam;
        return $this;
    }

    /**
     * Adds as szamla
     *
     * Az egyes számlák adatait tartalmazza.
     *
     * @return self
     * @param \Dream\NavInvoiceExport\Data\SzamlaTipus $szamla
     */
    public function addToSzamla(\Dream\NavInvoiceExport\Data\SzamlaTipus $szamla)
    {
        $this->szamla[] = $szamla;
        return $this;
    }

    /**
     * isset szamla
     *
     * Az egyes számlák adatait tartalmazza.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSzamla($index)
    {
        return isset($this->szamla[$index]);
    }

    /**
     * unset szamla
     *
     * Az egyes számlák adatait tartalmazza.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSzamla($index)
    {
        unset($this->szamla[$index]);
    }

    /**
     * Gets as szamla
     *
     * Az egyes számlák adatait tartalmazza.
     *
     * @return \Dream\NavInvoiceExport\Data\SzamlaTipus[]
     */
    public function getSzamla()
    {
        return $this->szamla;
    }

    /**
     * Sets a new szamla
     *
     * Az egyes számlák adatait tartalmazza.
     *
     * @param \Dream\NavInvoiceExport\Data\SzamlaTipus[] $szamla
     * @return self
     */
    public function setSzamla(array $szamla)
    {
        $this->szamla = $szamla;
        return $this;
    }


}

