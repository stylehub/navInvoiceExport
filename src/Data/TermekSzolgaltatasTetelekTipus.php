<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing TermekSzolgaltatasTetelekTipus
 *
 * 
 * XSD Type: termek_szolgaltatas_tetelek_tipus
 */
class TermekSzolgaltatasTetelekTipus
{

    /**
     * Az értékesített termék, nyújtott szolgáltatás megnevezése.
     *
     * @property string $termeknev
     */
    private $termeknev = null;

    /**
     * Gyűjtő számla csoport.
     *
     * @property string $gyujtoSzlaCsoport
     */
    private $gyujtoSzlaCsoport = null;

    /**
     * Előleg számla vagy végszámla esetében feltüntetendő.
     *
     * @property integer $eloleg
     */
    private $eloleg = null;

    /**
     * A termék/szolgáltatás jelölésére alkalmazott vámtarifaszám/SZJ szám.
     *
     * @property string $besorszam
     */
    private $besorszam = null;

    /**
     * Az értékesített termék mennyisége.
     *  A nyújtott szolgáltatás mennyisége, feltéve, hogy az természetes
     * mértékegységben kifejezhető.
     *
     * @property float $menny
     */
    private $menny = null;

    /**
     * A termék vagy szolgáltatás, feltéve, hogy az természetes mértékegységben
     * kifejezhető, mennyiségi mértékegysége.
     *
     * @property string $mertekegys
     */
    private $mertekegys = null;

    /**
     * True, ha közvetített a szolgáltatás.
     *  Közvetített szolgáltatás esetén a számlából a közvetítés tényének
     * ki kell derülnie.
     *
     * @property boolean $kozvSzolgaltatas
     */
    private $kozvSzolgaltatas = null;

    /**
     * Az adó alapja.
     *
     * @property float $nettoar
     */
    private $nettoar = null;

    /**
     * Értékesített termék adó nélküli egységára, a nyújtott szolgáltatás
     * adó nélküli egységára, ha az természetes mértékegységben kifejezhető.
     *
     * @property float $nettoegysar
     */
    private $nettoegysar = null;

    /**
     * Dohánygyártmány adójegyén szereplő kiskereskedelmi eladási ára.
     *
     * @property float $dohanyAr
     */
    private $dohanyAr = null;

    /**
     * Az alkalmazott adó mértéke.
     *  Egyszerűsített adattartalmú számla esetén nem kell kitölteni.
     *
     * @property float $adokulcs
     */
    private $adokulcs = null;

    /**
     * Az áthárított adó, kivéve, ha annak feltüntetését a törvény kizárja.
     *  Forintban kifejezve abban az esetben is fel kell tüntetni, ha az egyéb adatok
     * külföldi pénznemben kifejezettek.
     *  Egyszerűsített adattartalmú számla esetén nem kell kitölteni.
     *
     * @property float $adoertek
     */
    private $adoertek = null;

    /**
     * Egyszerűsített adattartalmú számla esetén kötelező kitölteni.
     *
     * @property float $szazalekertek
     */
    private $szazalekertek = null;

    /**
     * Bruttó ár. Egyszerűsített adattartalmú számla esetén kötelező, más
     * számlák esetén csak akkor, ha van ilyen adat.
     *
     * @property float $bruttoar
     */
    private $bruttoar = null;

    /**
     * Alkalmazott árengedmény, feltéve, hogy azt az egységár nem tartalmazza.
     *
     * @property float $arengedm
     */
    private $arengedm = null;

    /**
     * Csak nyilvános árverés szervezője által kibocsátott számla esetén kell
     * kitölteni.
     *  Az ÁFA törvény 231.§ (2) szerint a 169.§ i. pontja helyetti számla tétel
     * elemek.
     *  Az árverési vételárul szolgáló ellenérték.
     *
     * @property float $vellenertek
     */
    private $vellenertek = null;

    /**
     * Csak nyilvános árverés szervezője által kibocsátott számla esetén kell
     * kitölteni.
     *  Az ÁFA törvény 231.§ (2) szerint a 169.§ i. pontja helyetti számla tétel
     * elemek.
     *  Az adók, vámok, illetékek, járulékok, hozzájárulások és más
     * kötelező jellegű befizetések.
     *
     * @property float $vkozteher
     */
    private $vkozteher = null;

    /**
     * Csak nyilvános árverés szervezője által kibocsátott számla esetén kell
     * kitölteni.
     *  Az ÁFA törvény 231.§ (2) szerint a 169.§ i. pontja helyetti számla tétel
     * elemek.
     *  A felmerült járulékos költségek, amit az árverés szervezője hárít át
     * az árverési vevőnek együttes összege.
     *
     * @property float $vktg
     */
    private $vktg = null;

    /**
     * Csak nyilvános árverés szervezője által kibocsátott számla esetén kell
     * kitölteni.
     *  Az ÁFA törvény 231.§ (2) szerint a 169.§ i. pontja helyetti számla tétel
     * elemek.
     *  A fenti három tétel összege.
     *
     * @property float $vkistag
     */
    private $vkistag = null;

    /**
     * Közlekedési eszköz információk.
     *
     * @property \Dream\NavInvoiceExport\Data\KozlEszkInfTipus $kozlEszkInf
     */
    private $kozlEszkInf = null;

    /**
     * Az ásványolaj adóraktárból történő kitárolása esetén meghatározott
     * esetben fel kell tüntetni a számlán
     *  8/2004. (III. 10.) PM rendelet 80. § (1) bekezdés b)-g) pontjaiban felsorolt
     * adatokat.
     *
     * @property \Dream\NavInvoiceExport\Data\AsvanyolajTipus $asvanyolaj
     */
    private $asvanyolaj = null;

    /**
     * Gets as termeknev
     *
     * Az értékesített termék, nyújtott szolgáltatás megnevezése.
     *
     * @return string
     */
    public function getTermeknev()
    {
        return $this->termeknev;
    }

    /**
     * Sets a new termeknev
     *
     * Az értékesített termék, nyújtott szolgáltatás megnevezése.
     *
     * @param string $termeknev
     * @return self
     */
    public function setTermeknev($termeknev)
    {
        $this->termeknev = $termeknev;
        return $this;
    }

    /**
     * Gets as gyujtoSzlaCsoport
     *
     * Gyűjtő számla csoport.
     *
     * @return string
     */
    public function getGyujtoSzlaCsoport()
    {
        return $this->gyujtoSzlaCsoport;
    }

    /**
     * Sets a new gyujtoSzlaCsoport
     *
     * Gyűjtő számla csoport.
     *
     * @param string $gyujtoSzlaCsoport
     * @return self
     */
    public function setGyujtoSzlaCsoport($gyujtoSzlaCsoport)
    {
        $this->gyujtoSzlaCsoport = $gyujtoSzlaCsoport;
        return $this;
    }

    /**
     * Gets as eloleg
     *
     * Előleg számla vagy végszámla esetében feltüntetendő.
     *
     * @return integer
     */
    public function getEloleg()
    {
        return $this->eloleg;
    }

    /**
     * Sets a new eloleg
     *
     * Előleg számla vagy végszámla esetében feltüntetendő.
     *
     * @param integer $eloleg
     * @return self
     */
    public function setEloleg($eloleg)
    {
        $this->eloleg = $eloleg;
        return $this;
    }

    /**
     * Gets as besorszam
     *
     * A termék/szolgáltatás jelölésére alkalmazott vámtarifaszám/SZJ szám.
     *
     * @return string
     */
    public function getBesorszam()
    {
        return $this->besorszam;
    }

    /**
     * Sets a new besorszam
     *
     * A termék/szolgáltatás jelölésére alkalmazott vámtarifaszám/SZJ szám.
     *
     * @param string $besorszam
     * @return self
     */
    public function setBesorszam($besorszam)
    {
        $this->besorszam = $besorszam;
        return $this;
    }

    /**
     * Gets as menny
     *
     * Az értékesített termék mennyisége.
     *  A nyújtott szolgáltatás mennyisége, feltéve, hogy az természetes
     * mértékegységben kifejezhető.
     *
     * @return float
     */
    public function getMenny()
    {
        return $this->menny;
    }

    /**
     * Sets a new menny
     *
     * Az értékesített termék mennyisége.
     *  A nyújtott szolgáltatás mennyisége, feltéve, hogy az természetes
     * mértékegységben kifejezhető.
     *
     * @param float $menny
     * @return self
     */
    public function setMenny($menny)
    {
        $this->menny = $menny;
        return $this;
    }

    /**
     * Gets as mertekegys
     *
     * A termék vagy szolgáltatás, feltéve, hogy az természetes mértékegységben
     * kifejezhető, mennyiségi mértékegysége.
     *
     * @return string
     */
    public function getMertekegys()
    {
        return $this->mertekegys;
    }

    /**
     * Sets a new mertekegys
     *
     * A termék vagy szolgáltatás, feltéve, hogy az természetes mértékegységben
     * kifejezhető, mennyiségi mértékegysége.
     *
     * @param string $mertekegys
     * @return self
     */
    public function setMertekegys($mertekegys)
    {
        $this->mertekegys = $mertekegys;
        return $this;
    }

    /**
     * Gets as kozvSzolgaltatas
     *
     * True, ha közvetített a szolgáltatás.
     *  Közvetített szolgáltatás esetén a számlából a közvetítés tényének
     * ki kell derülnie.
     *
     * @return boolean
     */
    public function getKozvSzolgaltatas()
    {
        return $this->kozvSzolgaltatas;
    }

    /**
     * Sets a new kozvSzolgaltatas
     *
     * True, ha közvetített a szolgáltatás.
     *  Közvetített szolgáltatás esetén a számlából a közvetítés tényének
     * ki kell derülnie.
     *
     * @param boolean $kozvSzolgaltatas
     * @return self
     */
    public function setKozvSzolgaltatas($kozvSzolgaltatas)
    {
        $this->kozvSzolgaltatas = $kozvSzolgaltatas;
        return $this;
    }

    /**
     * Gets as nettoar
     *
     * Az adó alapja.
     *
     * @return float
     */
    public function getNettoar()
    {
        return $this->nettoar;
    }

    /**
     * Sets a new nettoar
     *
     * Az adó alapja.
     *
     * @param float $nettoar
     * @return self
     */
    public function setNettoar($nettoar)
    {
        $this->nettoar = $nettoar;
        return $this;
    }

    /**
     * Gets as nettoegysar
     *
     * Értékesített termék adó nélküli egységára, a nyújtott szolgáltatás
     * adó nélküli egységára, ha az természetes mértékegységben kifejezhető.
     *
     * @return float
     */
    public function getNettoegysar()
    {
        return $this->nettoegysar;
    }

    /**
     * Sets a new nettoegysar
     *
     * Értékesített termék adó nélküli egységára, a nyújtott szolgáltatás
     * adó nélküli egységára, ha az természetes mértékegységben kifejezhető.
     *
     * @param float $nettoegysar
     * @return self
     */
    public function setNettoegysar($nettoegysar)
    {
        $this->nettoegysar = $nettoegysar;
        return $this;
    }

    /**
     * Gets as dohanyAr
     *
     * Dohánygyártmány adójegyén szereplő kiskereskedelmi eladási ára.
     *
     * @return float
     */
    public function getDohanyAr()
    {
        return $this->dohanyAr;
    }

    /**
     * Sets a new dohanyAr
     *
     * Dohánygyártmány adójegyén szereplő kiskereskedelmi eladási ára.
     *
     * @param float $dohanyAr
     * @return self
     */
    public function setDohanyAr($dohanyAr)
    {
        $this->dohanyAr = $dohanyAr;
        return $this;
    }

    /**
     * Gets as adokulcs
     *
     * Az alkalmazott adó mértéke.
     *  Egyszerűsített adattartalmú számla esetén nem kell kitölteni.
     *
     * @return float
     */
    public function getAdokulcs()
    {
        return $this->adokulcs;
    }

    /**
     * Sets a new adokulcs
     *
     * Az alkalmazott adó mértéke.
     *  Egyszerűsített adattartalmú számla esetén nem kell kitölteni.
     *
     * @param float $adokulcs
     * @return self
     */
    public function setAdokulcs($adokulcs)
    {
        $this->adokulcs = $adokulcs;
        return $this;
    }

    /**
     * Gets as adoertek
     *
     * Az áthárított adó, kivéve, ha annak feltüntetését a törvény kizárja.
     *  Forintban kifejezve abban az esetben is fel kell tüntetni, ha az egyéb adatok
     * külföldi pénznemben kifejezettek.
     *  Egyszerűsített adattartalmú számla esetén nem kell kitölteni.
     *
     * @return float
     */
    public function getAdoertek()
    {
        return $this->adoertek;
    }

    /**
     * Sets a new adoertek
     *
     * Az áthárított adó, kivéve, ha annak feltüntetését a törvény kizárja.
     *  Forintban kifejezve abban az esetben is fel kell tüntetni, ha az egyéb adatok
     * külföldi pénznemben kifejezettek.
     *  Egyszerűsített adattartalmú számla esetén nem kell kitölteni.
     *
     * @param float $adoertek
     * @return self
     */
    public function setAdoertek($adoertek)
    {
        $this->adoertek = $adoertek;
        return $this;
    }

    /**
     * Gets as szazalekertek
     *
     * Egyszerűsített adattartalmú számla esetén kötelező kitölteni.
     *
     * @return float
     */
    public function getSzazalekertek()
    {
        return $this->szazalekertek;
    }

    /**
     * Sets a new szazalekertek
     *
     * Egyszerűsített adattartalmú számla esetén kötelező kitölteni.
     *
     * @param float $szazalekertek
     * @return self
     */
    public function setSzazalekertek($szazalekertek)
    {
        $this->szazalekertek = $szazalekertek;
        return $this;
    }

    /**
     * Gets as bruttoar
     *
     * Bruttó ár. Egyszerűsített adattartalmú számla esetén kötelező, más
     * számlák esetén csak akkor, ha van ilyen adat.
     *
     * @return float
     */
    public function getBruttoar()
    {
        return $this->bruttoar;
    }

    /**
     * Sets a new bruttoar
     *
     * Bruttó ár. Egyszerűsített adattartalmú számla esetén kötelező, más
     * számlák esetén csak akkor, ha van ilyen adat.
     *
     * @param float $bruttoar
     * @return self
     */
    public function setBruttoar($bruttoar)
    {
        $this->bruttoar = $bruttoar;
        return $this;
    }

    /**
     * Gets as arengedm
     *
     * Alkalmazott árengedmény, feltéve, hogy azt az egységár nem tartalmazza.
     *
     * @return float
     */
    public function getArengedm()
    {
        return $this->arengedm;
    }

    /**
     * Sets a new arengedm
     *
     * Alkalmazott árengedmény, feltéve, hogy azt az egységár nem tartalmazza.
     *
     * @param float $arengedm
     * @return self
     */
    public function setArengedm($arengedm)
    {
        $this->arengedm = $arengedm;
        return $this;
    }

    /**
     * Gets as vellenertek
     *
     * Csak nyilvános árverés szervezője által kibocsátott számla esetén kell
     * kitölteni.
     *  Az ÁFA törvény 231.§ (2) szerint a 169.§ i. pontja helyetti számla tétel
     * elemek.
     *  Az árverési vételárul szolgáló ellenérték.
     *
     * @return float
     */
    public function getVellenertek()
    {
        return $this->vellenertek;
    }

    /**
     * Sets a new vellenertek
     *
     * Csak nyilvános árverés szervezője által kibocsátott számla esetén kell
     * kitölteni.
     *  Az ÁFA törvény 231.§ (2) szerint a 169.§ i. pontja helyetti számla tétel
     * elemek.
     *  Az árverési vételárul szolgáló ellenérték.
     *
     * @param float $vellenertek
     * @return self
     */
    public function setVellenertek($vellenertek)
    {
        $this->vellenertek = $vellenertek;
        return $this;
    }

    /**
     * Gets as vkozteher
     *
     * Csak nyilvános árverés szervezője által kibocsátott számla esetén kell
     * kitölteni.
     *  Az ÁFA törvény 231.§ (2) szerint a 169.§ i. pontja helyetti számla tétel
     * elemek.
     *  Az adók, vámok, illetékek, járulékok, hozzájárulások és más
     * kötelező jellegű befizetések.
     *
     * @return float
     */
    public function getVkozteher()
    {
        return $this->vkozteher;
    }

    /**
     * Sets a new vkozteher
     *
     * Csak nyilvános árverés szervezője által kibocsátott számla esetén kell
     * kitölteni.
     *  Az ÁFA törvény 231.§ (2) szerint a 169.§ i. pontja helyetti számla tétel
     * elemek.
     *  Az adók, vámok, illetékek, járulékok, hozzájárulások és más
     * kötelező jellegű befizetések.
     *
     * @param float $vkozteher
     * @return self
     */
    public function setVkozteher($vkozteher)
    {
        $this->vkozteher = $vkozteher;
        return $this;
    }

    /**
     * Gets as vktg
     *
     * Csak nyilvános árverés szervezője által kibocsátott számla esetén kell
     * kitölteni.
     *  Az ÁFA törvény 231.§ (2) szerint a 169.§ i. pontja helyetti számla tétel
     * elemek.
     *  A felmerült járulékos költségek, amit az árverés szervezője hárít át
     * az árverési vevőnek együttes összege.
     *
     * @return float
     */
    public function getVktg()
    {
        return $this->vktg;
    }

    /**
     * Sets a new vktg
     *
     * Csak nyilvános árverés szervezője által kibocsátott számla esetén kell
     * kitölteni.
     *  Az ÁFA törvény 231.§ (2) szerint a 169.§ i. pontja helyetti számla tétel
     * elemek.
     *  A felmerült járulékos költségek, amit az árverés szervezője hárít át
     * az árverési vevőnek együttes összege.
     *
     * @param float $vktg
     * @return self
     */
    public function setVktg($vktg)
    {
        $this->vktg = $vktg;
        return $this;
    }

    /**
     * Gets as vkistag
     *
     * Csak nyilvános árverés szervezője által kibocsátott számla esetén kell
     * kitölteni.
     *  Az ÁFA törvény 231.§ (2) szerint a 169.§ i. pontja helyetti számla tétel
     * elemek.
     *  A fenti három tétel összege.
     *
     * @return float
     */
    public function getVkistag()
    {
        return $this->vkistag;
    }

    /**
     * Sets a new vkistag
     *
     * Csak nyilvános árverés szervezője által kibocsátott számla esetén kell
     * kitölteni.
     *  Az ÁFA törvény 231.§ (2) szerint a 169.§ i. pontja helyetti számla tétel
     * elemek.
     *  A fenti három tétel összege.
     *
     * @param float $vkistag
     * @return self
     */
    public function setVkistag($vkistag)
    {
        $this->vkistag = $vkistag;
        return $this;
    }

    /**
     * Gets as kozlEszkInf
     *
     * Közlekedési eszköz információk.
     *
     * @return \Dream\NavInvoiceExport\Data\KozlEszkInfTipus
     */
    public function getKozlEszkInf()
    {
        return $this->kozlEszkInf;
    }

    /**
     * Sets a new kozlEszkInf
     *
     * Közlekedési eszköz információk.
     *
     * @param \Dream\NavInvoiceExport\Data\KozlEszkInfTipus $kozlEszkInf
     * @return self
     */
    public function setKozlEszkInf(\Dream\NavInvoiceExport\Data\KozlEszkInfTipus $kozlEszkInf)
    {
        $this->kozlEszkInf = $kozlEszkInf;
        return $this;
    }

    /**
     * Gets as asvanyolaj
     *
     * Az ásványolaj adóraktárból történő kitárolása esetén meghatározott
     * esetben fel kell tüntetni a számlán
     *  8/2004. (III. 10.) PM rendelet 80. § (1) bekezdés b)-g) pontjaiban felsorolt
     * adatokat.
     *
     * @return \Dream\NavInvoiceExport\Data\AsvanyolajTipus
     */
    public function getAsvanyolaj()
    {
        return $this->asvanyolaj;
    }

    /**
     * Sets a new asvanyolaj
     *
     * Az ásványolaj adóraktárból történő kitárolása esetén meghatározott
     * esetben fel kell tüntetni a számlán
     *  8/2004. (III. 10.) PM rendelet 80. § (1) bekezdés b)-g) pontjaiban felsorolt
     * adatokat.
     *
     * @param \Dream\NavInvoiceExport\Data\AsvanyolajTipus $asvanyolaj
     * @return self
     */
    public function setAsvanyolaj(\Dream\NavInvoiceExport\Data\AsvanyolajTipus $asvanyolaj)
    {
        $this->asvanyolaj = $asvanyolaj;
        return $this;
    }


}

