<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing VisszIgenyTipusType
 *
 * 
 * XSD Type: vissz_igeny_tipus
 */
class VisszIgenyTipusType
{

    /**
     * Visszaigénylés alapjául megnevezett számla tételei.
     *
     * @property \Dream\NavInvoiceExport\Data\VisszIgenytetelTipusType[] $visszIgenytetel
     */
    private $visszIgenytetel = array(
        
    );

    /**
     * Kötelezett által kiállított számla számla.
     *
     * @property string $szla
     */
    private $szla = null;

    /**
     * Számla kelte.
     *
     * @property \DateTime $szlaKelte
     */
    private $szlaKelte = null;

    /**
     * Kötelezett neve.
     *
     * @property string $kotelezettNeve
     */
    private $kotelezettNeve = null;

    /**
     * Kötelezett címe.
     *
     * @property \Dream\NavInvoiceExport\Data\CimTipusType $kotelezettCime
     */
    private $kotelezettCime = null;

    /**
     * Kötelezett adószáma.
     *
     * @property string $kotelezettAdoszama
     */
    private $kotelezettAdoszama = null;

    /**
     * Adds as visszIgenytetel
     *
     * Visszaigénylés alapjául megnevezett számla tételei.
     *
     * @return self
     * @param \Dream\NavInvoiceExport\Data\VisszIgenytetelTipusType $visszIgenytetel
     */
    public function addToVisszIgenytetel(\Dream\NavInvoiceExport\Data\VisszIgenytetelTipusType $visszIgenytetel)
    {
        $this->visszIgenytetel[] = $visszIgenytetel;
        return $this;
    }

    /**
     * isset visszIgenytetel
     *
     * Visszaigénylés alapjául megnevezett számla tételei.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVisszIgenytetel($index)
    {
        return isset($this->visszIgenytetel[$index]);
    }

    /**
     * unset visszIgenytetel
     *
     * Visszaigénylés alapjául megnevezett számla tételei.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVisszIgenytetel($index)
    {
        unset($this->visszIgenytetel[$index]);
    }

    /**
     * Gets as visszIgenytetel
     *
     * Visszaigénylés alapjául megnevezett számla tételei.
     *
     * @return \Dream\NavInvoiceExport\Data\VisszIgenytetelTipusType[]
     */
    public function getVisszIgenytetel()
    {
        return $this->visszIgenytetel;
    }

    /**
     * Sets a new visszIgenytetel
     *
     * Visszaigénylés alapjául megnevezett számla tételei.
     *
     * @param \Dream\NavInvoiceExport\Data\VisszIgenytetelTipusType[] $visszIgenytetel
     * @return self
     */
    public function setVisszIgenytetel(array $visszIgenytetel)
    {
        $this->visszIgenytetel = $visszIgenytetel;
        return $this;
    }

    /**
     * Gets as szla
     *
     * Kötelezett által kiállított számla számla.
     *
     * @return string
     */
    public function getSzla()
    {
        return $this->szla;
    }

    /**
     * Sets a new szla
     *
     * Kötelezett által kiállított számla számla.
     *
     * @param string $szla
     * @return self
     */
    public function setSzla($szla)
    {
        $this->szla = $szla;
        return $this;
    }

    /**
     * Gets as szlaKelte
     *
     * Számla kelte.
     *
     * @return \DateTime
     */
    public function getSzlaKelte()
    {
        return $this->szlaKelte;
    }

    /**
     * Sets a new szlaKelte
     *
     * Számla kelte.
     *
     * @param \DateTime $szlaKelte
     * @return self
     */
    public function setSzlaKelte(\DateTime $szlaKelte)
    {
        $this->szlaKelte = $szlaKelte;
        return $this;
    }

    /**
     * Gets as kotelezettNeve
     *
     * Kötelezett neve.
     *
     * @return string
     */
    public function getKotelezettNeve()
    {
        return $this->kotelezettNeve;
    }

    /**
     * Sets a new kotelezettNeve
     *
     * Kötelezett neve.
     *
     * @param string $kotelezettNeve
     * @return self
     */
    public function setKotelezettNeve($kotelezettNeve)
    {
        $this->kotelezettNeve = $kotelezettNeve;
        return $this;
    }

    /**
     * Gets as kotelezettCime
     *
     * Kötelezett címe.
     *
     * @return \Dream\NavInvoiceExport\Data\CimTipusType
     */
    public function getKotelezettCime()
    {
        return $this->kotelezettCime;
    }

    /**
     * Sets a new kotelezettCime
     *
     * Kötelezett címe.
     *
     * @param \Dream\NavInvoiceExport\Data\CimTipusType $kotelezettCime
     * @return self
     */
    public function setKotelezettCime(\Dream\NavInvoiceExport\Data\CimTipusType $kotelezettCime)
    {
        $this->kotelezettCime = $kotelezettCime;
        return $this;
    }

    /**
     * Gets as kotelezettAdoszama
     *
     * Kötelezett adószáma.
     *
     * @return string
     */
    public function getKotelezettAdoszama()
    {
        return $this->kotelezettAdoszama;
    }

    /**
     * Sets a new kotelezettAdoszama
     *
     * Kötelezett adószáma.
     *
     * @param string $kotelezettAdoszama
     * @return self
     */
    public function setKotelezettAdoszama($kotelezettAdoszama)
    {
        $this->kotelezettAdoszama = $kotelezettAdoszama;
        return $this;
    }


}

