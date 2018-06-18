<?php 
namespace Dream\NavInvoiceExport;

use DateTime;

use Doctrine\Common\Annotations\AnnotationRegistry;

require('../vendor/autoload.php');

AnnotationRegistry::registerAutoloadNamespace(
    "JMS\Serializer\Annotation",
    realpath('../vendor/jms/serializer/src')
);


$report = new Data\Szamlak();
$report->setExportDatuma(new \DateTime)
    ->setExportSzlaDb(100)
    ->setKezdoIdo(new \DateTime('2015-01-01'))
    ->setKezdoSzlaSzam('TEST1/1')
    ->setZaroIdo(new \DateTime('2015-12-31'))
    ->setZaroSzlaSzam('TEST1/100');




$invoice = new Data\SzamlaTipusType();
$header = new Data\FejlecTipusType();
$header->setSzladatum(new DateTime('2015-01-02'))
    ->setSzlasorszam('TEST1/1')
    ->setSzlaTipus(1)
    ->setTeljdatum(new DateTime('2015-01-01'));
$invoice->setFejlec($header);

$szamlakibocsato = new Data\SzamlakibocsatoTipusType();
$szamlakibocsato->setAdoszam('111111111');

$invoice->setSzamlakibocsato($szamlakibocsato);

$report->addToSzamla($invoice);


$serializer = SerializerFactory::create();
$xmlContent = $serializer->serialize($report, 'xml');
echo $xmlContent; // or return it in a Response