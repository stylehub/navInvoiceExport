<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing OsszesitesTipus
 *
 * 
 * XSD Type: osszesites_tipus
 */
class OsszesitesTipus
{

    /**
     * Csak "számla" típusú számla esetében kell kitölteni.
     *  Áfarovat, adókulcsok szerinti összegzés.
     *
     * @property \Dream\NavInvoiceExport\Data\AfarovatTipus[] $afarovat
     */
    private $afarovat = null;

    /**
     * A számlában szereplő tételek adóalapjainak összege (mindösszesen,
     * végösszeg).
     *
     * @property \Dream\NavInvoiceExport\Data\VegosszegTipus $vegosszeg
     */
    private $vegosszeg = null;

    /**
     * Adds as afarovat
     *
     * Csak "számla" típusú számla esetében kell kitölteni.
     *  Áfarovat, adókulcsok szerinti összegzés.
     *
     * @return self
     * @param \Dream\NavInvoiceExport\Data\AfarovatTipus $afarovat
     */
    public function addToAfarovat(\Dream\NavInvoiceExport\Data\AfarovatTipus $afarovat)
    {
        $this->afarovat[] = $afarovat;
        return $this;
    }

    /**
     * isset afarovat
     *
     * Csak "számla" típusú számla esetében kell kitölteni.
     *  Áfarovat, adókulcsok szerinti összegzés.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAfarovat($index)
    {
        return isset($this->afarovat[$index]);
    }

    /**
     * unset afarovat
     *
     * Csak "számla" típusú számla esetében kell kitölteni.
     *  Áfarovat, adókulcsok szerinti összegzés.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAfarovat($index)
    {
        unset($this->afarovat[$index]);
    }

    /**
     * Gets as afarovat
     *
     * Csak "számla" típusú számla esetében kell kitölteni.
     *  Áfarovat, adókulcsok szerinti összegzés.
     *
     * @return \Dream\NavInvoiceExport\Data\AfarovatTipus[]
     */
    public function getAfarovat()
    {
        return $this->afarovat;
    }

    /**
     * Sets a new afarovat
     *
     * Csak "számla" típusú számla esetében kell kitölteni.
     *  Áfarovat, adókulcsok szerinti összegzés.
     *
     * @param \Dream\NavInvoiceExport\Data\AfarovatTipus[] $afarovat
     * @return self
     */
    public function setAfarovat(array $afarovat)
    {
        $this->afarovat = $afarovat;
        return $this;
    }

    /**
     * Gets as vegosszeg
     *
     * A számlában szereplő tételek adóalapjainak összege (mindösszesen,
     * végösszeg).
     *
     * @return \Dream\NavInvoiceExport\Data\VegosszegTipus
     */
    public function getVegosszeg()
    {
        return $this->vegosszeg;
    }

    /**
     * Sets a new vegosszeg
     *
     * A számlában szereplő tételek adóalapjainak összege (mindösszesen,
     * végösszeg).
     *
     * @param \Dream\NavInvoiceExport\Data\VegosszegTipus $vegosszeg
     * @return self
     */
    public function setVegosszeg(\Dream\NavInvoiceExport\Data\VegosszegTipus $vegosszeg)
    {
        $this->vegosszeg = $vegosszeg;
        return $this;
    }


}

