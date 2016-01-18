<?php
namespace Dream\NavInvoiceExport;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use Goetas\Xsd\XsdToPhp\Jms\Handler\BaseTypesHandler;
use Goetas\Xsd\XsdToPhp\Jms\Handler\XmlSchemaDateHandler;

class SerializerFactory
{
    static function create()
    {
        $serializerBuilder = SerializerBuilder::create();

        $serializerBuilder
            ->addMetadataDir('../res/Metadata/JMS', 'Dream\NavInvoiceExport\Data')
            ->setCacheDir('../temp/jmscache')
            ->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
                $serializerBuilder->addDefaultHandlers();
                $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
                $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            });

        $serializer = $serializerBuilder->build();

        return $serializer;
    }
}

