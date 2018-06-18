<?php
namespace Dream\NavInvoiceExport;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Serializer;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;

class SerializerFactory
{
    /**
     *
     * @return Serializer
     */
    static function create()
    {
        $serializerBuilder = SerializerBuilder::create();

        $serializerBuilder
            ->addMetadataDir(realpath(__DIR__ . '/../metadata'), 'Dream\NavInvoiceExport\Data')
            ->setCacheDir(realpath(__DIR__ . '/../temp'))
            ->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
                $serializerBuilder->addDefaultHandlers();
                $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
                $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
            });

        $serializer = $serializerBuilder->build();

        return $serializer;
    }
}

