<?php

namespace Dream\NavInvoiceExport\Data;

/**
 * Class representing ZaradekokTipusType
 *
 * 
 * XSD Type: zaradekok_tipus
 */
class ZaradekokTipusType
{

    /**
     * True, ha pénzforgalmi elszámolás.
     *  Különös szabályok szerinti (ÁFA tv. XIII/A. fejezete) adózás alkalmazása esetében.
     *
     * @property boolean $penzforgelsz
     */
    private $penzforgelsz = null;

    /**
     * True, ha önszámlázás.
     *  Ha a számlát a terméket beszerző vagy a szolgáltatást igénybevevő állítja ki.
     *
     * @property boolean $onszamla
     */
    private $onszamla = null;

    /**
     * True, ha fordított adózás.
     *  Ha adófizetésre a termék beszerzője, szolgáltatás igénybevevője kötelezett.
     *
     * @property boolean $fordAdo
     */
    private $fordAdo = null;

    /**
     * True, ha a termék értékesítése, szolgáltatás nyújtása mentes az adó alól.
     *
     * @property boolean $adomentHiv
     */
    private $adomentHiv = null;

    /**
     * Különbözet szerinti szabályozás - utazási irodák, használt cikkek, műalkotások, gyűjteménydarabok és régiségek közül a megfelelő kifejezés feltüntetése.
     *
     * @property integer $kulonbSzerSzab
     */
    private $kulonbSzerSzab = null;

    /**
     * "az egyéb kőolajtermék vevője nem termékdíj-kötelezett, a bruttó árból ……Ft termékdíj átvállalásra került".
     *
     * @property float $termekdijSzlasAtvallalas
     */
    private $termekdijSzlasAtvallalas = null;

    /**
     * "a termékdíj kötelezettség a Ktdt. 14.§ (5) bekezdés …..) pontja…..)alpontja alapján a vevőt terheli".
     *
     * @property \Dream\NavInvoiceExport\Data\TermekdijSzerzesAtvallalasTipusType $termekdijSzerzesAtvallalas
     */
    private $termekdijSzerzesAtvallalas = null;

    /**
     * Feltüntetendő adatok köre:termékdíjköteles termék CsK, KT kódja, termékdíj mértéke, összege,
     *  termékdíj megfizetését (bevallását) igazoló dokumentumok adataiból legalább a következő adatokat:
     *  kötelezett által kiállított számla számla
     *  számla kelte
     *  kötelezett neve
     *  kötelezett címe
     *  kötelezett adószáma.
     *
     * @property \Dream\NavInvoiceExport\Data\VisszIgenyTipusType $visszIgeny
     */
    private $visszIgeny = null;

    /**
     * Amennyiben a csomagolószer termékdíj-köt. az eladót terheli, akkor feltüntetendő: "a csomagolószer termékdíj összege bruttó árból…..Ft"
     *  Amennyiben a csomagolás részeként forgalomba hozott csomszer.termékdíj. Köt. Az eladót terheli, akkor: "a csomagolás termékdíj-kötelezettség az eladót terheli"
     *  Amennyiben az eladót a vevő nyilatkozata alapján termékdíj megfizetése nem terheli, akkor: "a csomagolószer termékdíja a veveő eseti nyilatkozata alapján nem kerül megfizetésre" vagy
     *  "a csomagolószer termékdíja a vevő...számon iktatott időszakra vonatkozó nyilatkozata alapján nem kerül megfizetésre".
     *
     * @property \Dream\NavInvoiceExport\Data\CsomszerForgHozTipusType $csomszerForgHoz
     */
    private $csomszerForgHoz = null;

    /**
     * "a reklámhordozó papír termékdíj összege a bruttó árból …..Ft".
     *
     * @property float $reklamPapir
     */
    private $reklamPapir = null;

    /**
     * Energia adó összege elkülönítetten.
     *
     * @property float $energiaAdo
     */
    private $energiaAdo = null;

    /**
     * True, ha a Neta tv-ben meghatározott adókötelezettség az adó alanyát terheli.
     *
     * @property boolean $neta
     */
    private $neta = null;

    /**
     * AHK-szám.
     *
     * @property string $ahk
     */
    private $ahk = null;

    /**
     * A jövedéki terméket belföldön terhelő adót fel kell tüntetni (összes adó).
     *
     * @property float $csomagkJovedekiAdo
     */
    private $csomagkJovedekiAdo = null;

    /**
     * True, ha jövedéki vámtarifa fizetésére kötelezett.
     *
     * @property boolean $jovedekiVamtarifa
     */
    private $jovedekiVamtarifa = null;

    /**
     * Adóraktár engedélyese/importáló/bejegyzett kereskedő/jöv. engedélyes kereskedő az általa megfizetett, vételárban felszámított adót elkülönítve kell, hogy feltüntesse a vevő kérésére.
     *
     * @property float $engImportAdo
     */
    private $engImportAdo = null;

    /**
     * Gázolaj beszerzéséről szóló számlán a kereskedelmi jármű forgalmi rendszámát és a kilóméteróra állását is fel kell tüntetni.
     *
     * @property \Dream\NavInvoiceExport\Data\GazolajBeszerzTipusType $gazolajBeszerz
     */
    private $gazolajBeszerz = null;

    /**
     * Ha true, akkor meg kell adni a jövedéki termék vámtarifaszámát, a jövedéki engedélye számát,
     *  a vevő adóigazgatási azonosító számát, és adott esetben a vevő őstermelői igazolvány számát.
     *
     * @property boolean $jovEngKer
     */
    private $jovEngKer = null;

    /**
     * A jövedéki engedélyes kereskedő jövedéki termék értékesítésekor a számlán fel kell tüntetnie
     *  a jövedéki engedélye számát, a vevő adóigazgatási azonosító számát, és adott esetben a vevő őstermelői igazolvány számát.
     *
     * @property \Dream\NavInvoiceExport\Data\JovEngKereskJovErtTipusType $jovEngKereskJovErt
     */
    private $jovEngKereskJovErt = null;

    /**
     * "True, ha továbbértékesítés esetén a jövedéki termék származásának igazolására nem alkalmas".
     *
     * @property boolean $jovEngKereskSzla
     */
    private $jovEngKereskSzla = null;

    /**
     * "True, ha továbbértékesítés esetén a jövedéki termék származásának igazolására nem alkalmas".
     *
     * @property boolean $nemJovEngKereskSzla
     */
    private $nemJovEngKereskSzla = null;

    /**
     * True, ha importáló a számlán köteles feltüntetni a jövedéki termék vámtarifaszámát.
     *
     * @property boolean $importVamtarifa
     */
    private $importVamtarifa = null;

    /**
     * Betétdíj összege elkülönítve.
     *
     * @property float $betetDij
     */
    private $betetDij = null;

    /**
     * A rezsicsökkentés eredményeként jelentkező megtakarítás összegét fel kell tűntetni jól láthatóan, színes mezőben.
     *
     * @property float $rezsicsokkentes
     */
    private $rezsicsokkentes = null;

    /**
     * A beszállókártya számát a tranzitadóraktár-engedélyes az értékesítésről kiállított
     *  számlán köteles feltüntetni. Beszállókártyának minősül minden olyan okmány, amely tartalmazza a járatszámot,
     *  a kedvezményre jogosult nevét és a beszállókártyán szereplő úti célt.
     *  Beszállókártya szám alatt ezen adatok együttes adatát kell érteni.
     *
     * @property \Dream\NavInvoiceExport\Data\BeszallokartyaTipusType $beszallokartya
     */
    private $beszallokartya = null;

    /**
     * Gets as penzforgelsz
     *
     * True, ha pénzforgalmi elszámolás.
     *  Különös szabályok szerinti (ÁFA tv. XIII/A. fejezete) adózás alkalmazása esetében.
     *
     * @return boolean
     */
    public function getPenzforgelsz()
    {
        return $this->penzforgelsz;
    }

    /**
     * Sets a new penzforgelsz
     *
     * True, ha pénzforgalmi elszámolás.
     *  Különös szabályok szerinti (ÁFA tv. XIII/A. fejezete) adózás alkalmazása esetében.
     *
     * @param boolean $penzforgelsz
     * @return self
     */
    public function setPenzforgelsz($penzforgelsz)
    {
        $this->penzforgelsz = $penzforgelsz;
        return $this;
    }

    /**
     * Gets as onszamla
     *
     * True, ha önszámlázás.
     *  Ha a számlát a terméket beszerző vagy a szolgáltatást igénybevevő állítja ki.
     *
     * @return boolean
     */
    public function getOnszamla()
    {
        return $this->onszamla;
    }

    /**
     * Sets a new onszamla
     *
     * True, ha önszámlázás.
     *  Ha a számlát a terméket beszerző vagy a szolgáltatást igénybevevő állítja ki.
     *
     * @param boolean $onszamla
     * @return self
     */
    public function setOnszamla($onszamla)
    {
        $this->onszamla = $onszamla;
        return $this;
    }

    /**
     * Gets as fordAdo
     *
     * True, ha fordított adózás.
     *  Ha adófizetésre a termék beszerzője, szolgáltatás igénybevevője kötelezett.
     *
     * @return boolean
     */
    public function getFordAdo()
    {
        return $this->fordAdo;
    }

    /**
     * Sets a new fordAdo
     *
     * True, ha fordított adózás.
     *  Ha adófizetésre a termék beszerzője, szolgáltatás igénybevevője kötelezett.
     *
     * @param boolean $fordAdo
     * @return self
     */
    public function setFordAdo($fordAdo)
    {
        $this->fordAdo = $fordAdo;
        return $this;
    }

    /**
     * Gets as adomentHiv
     *
     * True, ha a termék értékesítése, szolgáltatás nyújtása mentes az adó alól.
     *
     * @return boolean
     */
    public function getAdomentHiv()
    {
        return $this->adomentHiv;
    }

    /**
     * Sets a new adomentHiv
     *
     * True, ha a termék értékesítése, szolgáltatás nyújtása mentes az adó alól.
     *
     * @param boolean $adomentHiv
     * @return self
     */
    public function setAdomentHiv($adomentHiv)
    {
        $this->adomentHiv = $adomentHiv;
        return $this;
    }

    /**
     * Gets as kulonbSzerSzab
     *
     * Különbözet szerinti szabályozás - utazási irodák, használt cikkek, műalkotások, gyűjteménydarabok és régiségek közül a megfelelő kifejezés feltüntetése.
     *
     * @return integer
     */
    public function getKulonbSzerSzab()
    {
        return $this->kulonbSzerSzab;
    }

    /**
     * Sets a new kulonbSzerSzab
     *
     * Különbözet szerinti szabályozás - utazási irodák, használt cikkek, műalkotások, gyűjteménydarabok és régiségek közül a megfelelő kifejezés feltüntetése.
     *
     * @param integer $kulonbSzerSzab
     * @return self
     */
    public function setKulonbSzerSzab($kulonbSzerSzab)
    {
        $this->kulonbSzerSzab = $kulonbSzerSzab;
        return $this;
    }

    /**
     * Gets as termekdijSzlasAtvallalas
     *
     * "az egyéb kőolajtermék vevője nem termékdíj-kötelezett, a bruttó árból ……Ft termékdíj átvállalásra került".
     *
     * @return float
     */
    public function getTermekdijSzlasAtvallalas()
    {
        return $this->termekdijSzlasAtvallalas;
    }

    /**
     * Sets a new termekdijSzlasAtvallalas
     *
     * "az egyéb kőolajtermék vevője nem termékdíj-kötelezett, a bruttó árból ……Ft termékdíj átvállalásra került".
     *
     * @param float $termekdijSzlasAtvallalas
     * @return self
     */
    public function setTermekdijSzlasAtvallalas($termekdijSzlasAtvallalas)
    {
        $this->termekdijSzlasAtvallalas = $termekdijSzlasAtvallalas;
        return $this;
    }

    /**
     * Gets as termekdijSzerzesAtvallalas
     *
     * "a termékdíj kötelezettség a Ktdt. 14.§ (5) bekezdés …..) pontja…..)alpontja alapján a vevőt terheli".
     *
     * @return \Dream\NavInvoiceExport\Data\TermekdijSzerzesAtvallalasTipusType
     */
    public function getTermekdijSzerzesAtvallalas()
    {
        return $this->termekdijSzerzesAtvallalas;
    }

    /**
     * Sets a new termekdijSzerzesAtvallalas
     *
     * "a termékdíj kötelezettség a Ktdt. 14.§ (5) bekezdés …..) pontja…..)alpontja alapján a vevőt terheli".
     *
     * @param \Dream\NavInvoiceExport\Data\TermekdijSzerzesAtvallalasTipusType $termekdijSzerzesAtvallalas
     * @return self
     */
    public function setTermekdijSzerzesAtvallalas(\Dream\NavInvoiceExport\Data\TermekdijSzerzesAtvallalasTipusType $termekdijSzerzesAtvallalas)
    {
        $this->termekdijSzerzesAtvallalas = $termekdijSzerzesAtvallalas;
        return $this;
    }

    /**
     * Gets as visszIgeny
     *
     * Feltüntetendő adatok köre:termékdíjköteles termék CsK, KT kódja, termékdíj mértéke, összege,
     *  termékdíj megfizetését (bevallását) igazoló dokumentumok adataiból legalább a következő adatokat:
     *  kötelezett által kiállított számla számla
     *  számla kelte
     *  kötelezett neve
     *  kötelezett címe
     *  kötelezett adószáma.
     *
     * @return \Dream\NavInvoiceExport\Data\VisszIgenyTipusType
     */
    public function getVisszIgeny()
    {
        return $this->visszIgeny;
    }

    /**
     * Sets a new visszIgeny
     *
     * Feltüntetendő adatok köre:termékdíjköteles termék CsK, KT kódja, termékdíj mértéke, összege,
     *  termékdíj megfizetését (bevallását) igazoló dokumentumok adataiból legalább a következő adatokat:
     *  kötelezett által kiállított számla számla
     *  számla kelte
     *  kötelezett neve
     *  kötelezett címe
     *  kötelezett adószáma.
     *
     * @param \Dream\NavInvoiceExport\Data\VisszIgenyTipusType $visszIgeny
     * @return self
     */
    public function setVisszIgeny(\Dream\NavInvoiceExport\Data\VisszIgenyTipusType $visszIgeny)
    {
        $this->visszIgeny = $visszIgeny;
        return $this;
    }

    /**
     * Gets as csomszerForgHoz
     *
     * Amennyiben a csomagolószer termékdíj-köt. az eladót terheli, akkor feltüntetendő: "a csomagolószer termékdíj összege bruttó árból…..Ft"
     *  Amennyiben a csomagolás részeként forgalomba hozott csomszer.termékdíj. Köt. Az eladót terheli, akkor: "a csomagolás termékdíj-kötelezettség az eladót terheli"
     *  Amennyiben az eladót a vevő nyilatkozata alapján termékdíj megfizetése nem terheli, akkor: "a csomagolószer termékdíja a veveő eseti nyilatkozata alapján nem kerül megfizetésre" vagy
     *  "a csomagolószer termékdíja a vevő...számon iktatott időszakra vonatkozó nyilatkozata alapján nem kerül megfizetésre".
     *
     * @return \Dream\NavInvoiceExport\Data\CsomszerForgHozTipusType
     */
    public function getCsomszerForgHoz()
    {
        return $this->csomszerForgHoz;
    }

    /**
     * Sets a new csomszerForgHoz
     *
     * Amennyiben a csomagolószer termékdíj-köt. az eladót terheli, akkor feltüntetendő: "a csomagolószer termékdíj összege bruttó árból…..Ft"
     *  Amennyiben a csomagolás részeként forgalomba hozott csomszer.termékdíj. Köt. Az eladót terheli, akkor: "a csomagolás termékdíj-kötelezettség az eladót terheli"
     *  Amennyiben az eladót a vevő nyilatkozata alapján termékdíj megfizetése nem terheli, akkor: "a csomagolószer termékdíja a veveő eseti nyilatkozata alapján nem kerül megfizetésre" vagy
     *  "a csomagolószer termékdíja a vevő...számon iktatott időszakra vonatkozó nyilatkozata alapján nem kerül megfizetésre".
     *
     * @param \Dream\NavInvoiceExport\Data\CsomszerForgHozTipusType $csomszerForgHoz
     * @return self
     */
    public function setCsomszerForgHoz(\Dream\NavInvoiceExport\Data\CsomszerForgHozTipusType $csomszerForgHoz)
    {
        $this->csomszerForgHoz = $csomszerForgHoz;
        return $this;
    }

    /**
     * Gets as reklamPapir
     *
     * "a reklámhordozó papír termékdíj összege a bruttó árból …..Ft".
     *
     * @return float
     */
    public function getReklamPapir()
    {
        return $this->reklamPapir;
    }

    /**
     * Sets a new reklamPapir
     *
     * "a reklámhordozó papír termékdíj összege a bruttó árból …..Ft".
     *
     * @param float $reklamPapir
     * @return self
     */
    public function setReklamPapir($reklamPapir)
    {
        $this->reklamPapir = $reklamPapir;
        return $this;
    }

    /**
     * Gets as energiaAdo
     *
     * Energia adó összege elkülönítetten.
     *
     * @return float
     */
    public function getEnergiaAdo()
    {
        return $this->energiaAdo;
    }

    /**
     * Sets a new energiaAdo
     *
     * Energia adó összege elkülönítetten.
     *
     * @param float $energiaAdo
     * @return self
     */
    public function setEnergiaAdo($energiaAdo)
    {
        $this->energiaAdo = $energiaAdo;
        return $this;
    }

    /**
     * Gets as neta
     *
     * True, ha a Neta tv-ben meghatározott adókötelezettség az adó alanyát terheli.
     *
     * @return boolean
     */
    public function getNeta()
    {
        return $this->neta;
    }

    /**
     * Sets a new neta
     *
     * True, ha a Neta tv-ben meghatározott adókötelezettség az adó alanyát terheli.
     *
     * @param boolean $neta
     * @return self
     */
    public function setNeta($neta)
    {
        $this->neta = $neta;
        return $this;
    }

    /**
     * Gets as ahk
     *
     * AHK-szám.
     *
     * @return string
     */
    public function getAhk()
    {
        return $this->ahk;
    }

    /**
     * Sets a new ahk
     *
     * AHK-szám.
     *
     * @param string $ahk
     * @return self
     */
    public function setAhk($ahk)
    {
        $this->ahk = $ahk;
        return $this;
    }

    /**
     * Gets as csomagkJovedekiAdo
     *
     * A jövedéki terméket belföldön terhelő adót fel kell tüntetni (összes adó).
     *
     * @return float
     */
    public function getCsomagkJovedekiAdo()
    {
        return $this->csomagkJovedekiAdo;
    }

    /**
     * Sets a new csomagkJovedekiAdo
     *
     * A jövedéki terméket belföldön terhelő adót fel kell tüntetni (összes adó).
     *
     * @param float $csomagkJovedekiAdo
     * @return self
     */
    public function setCsomagkJovedekiAdo($csomagkJovedekiAdo)
    {
        $this->csomagkJovedekiAdo = $csomagkJovedekiAdo;
        return $this;
    }

    /**
     * Gets as jovedekiVamtarifa
     *
     * True, ha jövedéki vámtarifa fizetésére kötelezett.
     *
     * @return boolean
     */
    public function getJovedekiVamtarifa()
    {
        return $this->jovedekiVamtarifa;
    }

    /**
     * Sets a new jovedekiVamtarifa
     *
     * True, ha jövedéki vámtarifa fizetésére kötelezett.
     *
     * @param boolean $jovedekiVamtarifa
     * @return self
     */
    public function setJovedekiVamtarifa($jovedekiVamtarifa)
    {
        $this->jovedekiVamtarifa = $jovedekiVamtarifa;
        return $this;
    }

    /**
     * Gets as engImportAdo
     *
     * Adóraktár engedélyese/importáló/bejegyzett kereskedő/jöv. engedélyes kereskedő az általa megfizetett, vételárban felszámított adót elkülönítve kell, hogy feltüntesse a vevő kérésére.
     *
     * @return float
     */
    public function getEngImportAdo()
    {
        return $this->engImportAdo;
    }

    /**
     * Sets a new engImportAdo
     *
     * Adóraktár engedélyese/importáló/bejegyzett kereskedő/jöv. engedélyes kereskedő az általa megfizetett, vételárban felszámított adót elkülönítve kell, hogy feltüntesse a vevő kérésére.
     *
     * @param float $engImportAdo
     * @return self
     */
    public function setEngImportAdo($engImportAdo)
    {
        $this->engImportAdo = $engImportAdo;
        return $this;
    }

    /**
     * Gets as gazolajBeszerz
     *
     * Gázolaj beszerzéséről szóló számlán a kereskedelmi jármű forgalmi rendszámát és a kilóméteróra állását is fel kell tüntetni.
     *
     * @return \Dream\NavInvoiceExport\Data\GazolajBeszerzTipusType
     */
    public function getGazolajBeszerz()
    {
        return $this->gazolajBeszerz;
    }

    /**
     * Sets a new gazolajBeszerz
     *
     * Gázolaj beszerzéséről szóló számlán a kereskedelmi jármű forgalmi rendszámát és a kilóméteróra állását is fel kell tüntetni.
     *
     * @param \Dream\NavInvoiceExport\Data\GazolajBeszerzTipusType $gazolajBeszerz
     * @return self
     */
    public function setGazolajBeszerz(\Dream\NavInvoiceExport\Data\GazolajBeszerzTipusType $gazolajBeszerz)
    {
        $this->gazolajBeszerz = $gazolajBeszerz;
        return $this;
    }

    /**
     * Gets as jovEngKer
     *
     * Ha true, akkor meg kell adni a jövedéki termék vámtarifaszámát, a jövedéki engedélye számát,
     *  a vevő adóigazgatási azonosító számát, és adott esetben a vevő őstermelői igazolvány számát.
     *
     * @return boolean
     */
    public function getJovEngKer()
    {
        return $this->jovEngKer;
    }

    /**
     * Sets a new jovEngKer
     *
     * Ha true, akkor meg kell adni a jövedéki termék vámtarifaszámát, a jövedéki engedélye számát,
     *  a vevő adóigazgatási azonosító számát, és adott esetben a vevő őstermelői igazolvány számát.
     *
     * @param boolean $jovEngKer
     * @return self
     */
    public function setJovEngKer($jovEngKer)
    {
        $this->jovEngKer = $jovEngKer;
        return $this;
    }

    /**
     * Gets as jovEngKereskJovErt
     *
     * A jövedéki engedélyes kereskedő jövedéki termék értékesítésekor a számlán fel kell tüntetnie
     *  a jövedéki engedélye számát, a vevő adóigazgatási azonosító számát, és adott esetben a vevő őstermelői igazolvány számát.
     *
     * @return \Dream\NavInvoiceExport\Data\JovEngKereskJovErtTipusType
     */
    public function getJovEngKereskJovErt()
    {
        return $this->jovEngKereskJovErt;
    }

    /**
     * Sets a new jovEngKereskJovErt
     *
     * A jövedéki engedélyes kereskedő jövedéki termék értékesítésekor a számlán fel kell tüntetnie
     *  a jövedéki engedélye számát, a vevő adóigazgatási azonosító számát, és adott esetben a vevő őstermelői igazolvány számát.
     *
     * @param \Dream\NavInvoiceExport\Data\JovEngKereskJovErtTipusType $jovEngKereskJovErt
     * @return self
     */
    public function setJovEngKereskJovErt(\Dream\NavInvoiceExport\Data\JovEngKereskJovErtTipusType $jovEngKereskJovErt)
    {
        $this->jovEngKereskJovErt = $jovEngKereskJovErt;
        return $this;
    }

    /**
     * Gets as jovEngKereskSzla
     *
     * "True, ha továbbértékesítés esetén a jövedéki termék származásának igazolására nem alkalmas".
     *
     * @return boolean
     */
    public function getJovEngKereskSzla()
    {
        return $this->jovEngKereskSzla;
    }

    /**
     * Sets a new jovEngKereskSzla
     *
     * "True, ha továbbértékesítés esetén a jövedéki termék származásának igazolására nem alkalmas".
     *
     * @param boolean $jovEngKereskSzla
     * @return self
     */
    public function setJovEngKereskSzla($jovEngKereskSzla)
    {
        $this->jovEngKereskSzla = $jovEngKereskSzla;
        return $this;
    }

    /**
     * Gets as nemJovEngKereskSzla
     *
     * "True, ha továbbértékesítés esetén a jövedéki termék származásának igazolására nem alkalmas".
     *
     * @return boolean
     */
    public function getNemJovEngKereskSzla()
    {
        return $this->nemJovEngKereskSzla;
    }

    /**
     * Sets a new nemJovEngKereskSzla
     *
     * "True, ha továbbértékesítés esetén a jövedéki termék származásának igazolására nem alkalmas".
     *
     * @param boolean $nemJovEngKereskSzla
     * @return self
     */
    public function setNemJovEngKereskSzla($nemJovEngKereskSzla)
    {
        $this->nemJovEngKereskSzla = $nemJovEngKereskSzla;
        return $this;
    }

    /**
     * Gets as importVamtarifa
     *
     * True, ha importáló a számlán köteles feltüntetni a jövedéki termék vámtarifaszámát.
     *
     * @return boolean
     */
    public function getImportVamtarifa()
    {
        return $this->importVamtarifa;
    }

    /**
     * Sets a new importVamtarifa
     *
     * True, ha importáló a számlán köteles feltüntetni a jövedéki termék vámtarifaszámát.
     *
     * @param boolean $importVamtarifa
     * @return self
     */
    public function setImportVamtarifa($importVamtarifa)
    {
        $this->importVamtarifa = $importVamtarifa;
        return $this;
    }

    /**
     * Gets as betetDij
     *
     * Betétdíj összege elkülönítve.
     *
     * @return float
     */
    public function getBetetDij()
    {
        return $this->betetDij;
    }

    /**
     * Sets a new betetDij
     *
     * Betétdíj összege elkülönítve.
     *
     * @param float $betetDij
     * @return self
     */
    public function setBetetDij($betetDij)
    {
        $this->betetDij = $betetDij;
        return $this;
    }

    /**
     * Gets as rezsicsokkentes
     *
     * A rezsicsökkentés eredményeként jelentkező megtakarítás összegét fel kell tűntetni jól láthatóan, színes mezőben.
     *
     * @return float
     */
    public function getRezsicsokkentes()
    {
        return $this->rezsicsokkentes;
    }

    /**
     * Sets a new rezsicsokkentes
     *
     * A rezsicsökkentés eredményeként jelentkező megtakarítás összegét fel kell tűntetni jól láthatóan, színes mezőben.
     *
     * @param float $rezsicsokkentes
     * @return self
     */
    public function setRezsicsokkentes($rezsicsokkentes)
    {
        $this->rezsicsokkentes = $rezsicsokkentes;
        return $this;
    }

    /**
     * Gets as beszallokartya
     *
     * A beszállókártya számát a tranzitadóraktár-engedélyes az értékesítésről kiállított
     *  számlán köteles feltüntetni. Beszállókártyának minősül minden olyan okmány, amely tartalmazza a járatszámot,
     *  a kedvezményre jogosult nevét és a beszállókártyán szereplő úti célt.
     *  Beszállókártya szám alatt ezen adatok együttes adatát kell érteni.
     *
     * @return \Dream\NavInvoiceExport\Data\BeszallokartyaTipusType
     */
    public function getBeszallokartya()
    {
        return $this->beszallokartya;
    }

    /**
     * Sets a new beszallokartya
     *
     * A beszállókártya számát a tranzitadóraktár-engedélyes az értékesítésről kiállított
     *  számlán köteles feltüntetni. Beszállókártyának minősül minden olyan okmány, amely tartalmazza a járatszámot,
     *  a kedvezményre jogosult nevét és a beszállókártyán szereplő úti célt.
     *  Beszállókártya szám alatt ezen adatok együttes adatát kell érteni.
     *
     * @param \Dream\NavInvoiceExport\Data\BeszallokartyaTipusType $beszallokartya
     * @return self
     */
    public function setBeszallokartya(\Dream\NavInvoiceExport\Data\BeszallokartyaTipusType $beszallokartya)
    {
        $this->beszallokartya = $beszallokartya;
        return $this;
    }


}

