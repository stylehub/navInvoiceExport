<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing GyujtoSzlaTipus
 *
 * 
 * XSD Type: gyujto_szla_tipus
 */
class GyujtoSzlaTipus
{

    /**
     * Adóalapok alkalmazott adó mértéke és adómentességi hivatkozás szerinti
     * csoportosításban összesítve.
     *
     * @property string $gyujtocsopoOssz
     */
    private $gyujtocsopoOssz = null;

    /**
     * Nettó összeg összesítve.
     *
     * @property float $gyujtocsopoNossz
     */
    private $gyujtocsopoNossz = null;

    /**
     * Bruttó összeg összesítve.
     *
     * @property float $gyujtocsopoBossz
     */
    private $gyujtocsopoBossz = null;

    /**
     * Gets as gyujtocsopoOssz
     *
     * Adóalapok alkalmazott adó mértéke és adómentességi hivatkozás szerinti
     * csoportosításban összesítve.
     *
     * @return string
     */
    public function getGyujtocsopoOssz()
    {
        return $this->gyujtocsopoOssz;
    }

    /**
     * Sets a new gyujtocsopoOssz
     *
     * Adóalapok alkalmazott adó mértéke és adómentességi hivatkozás szerinti
     * csoportosításban összesítve.
     *
     * @param string $gyujtocsopoOssz
     * @return self
     */
    public function setGyujtocsopoOssz($gyujtocsopoOssz)
    {
        $this->gyujtocsopoOssz = $gyujtocsopoOssz;
        return $this;
    }

    /**
     * Gets as gyujtocsopoNossz
     *
     * Nettó összeg összesítve.
     *
     * @return float
     */
    public function getGyujtocsopoNossz()
    {
        return $this->gyujtocsopoNossz;
    }

    /**
     * Sets a new gyujtocsopoNossz
     *
     * Nettó összeg összesítve.
     *
     * @param float $gyujtocsopoNossz
     * @return self
     */
    public function setGyujtocsopoNossz($gyujtocsopoNossz)
    {
        $this->gyujtocsopoNossz = $gyujtocsopoNossz;
        return $this;
    }

    /**
     * Gets as gyujtocsopoBossz
     *
     * Bruttó összeg összesítve.
     *
     * @return float
     */
    public function getGyujtocsopoBossz()
    {
        return $this->gyujtocsopoBossz;
    }

    /**
     * Sets a new gyujtocsopoBossz
     *
     * Bruttó összeg összesítve.
     *
     * @param float $gyujtocsopoBossz
     * @return self
     */
    public function setGyujtocsopoBossz($gyujtocsopoBossz)
    {
        $this->gyujtocsopoBossz = $gyujtocsopoBossz;
        return $this;
    }


}

