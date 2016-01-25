<?php
namespace Dream\NavInvoiceExport;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Serializer;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use Goetas\Xsd\XsdToPhp\Jms\Handler\BaseTypesHandler;
use Goetas\Xsd\XsdToPhp\Jms\Handler\XmlSchemaDateHandler;

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
            ->addMetadataDir(realpath(__DIR__ . '/../res/Metadata/JMS'), 'Dream\NavInvoiceExport\Data')
            ->setCacheDir(realpath(__DIR__ . '/../temp/jmscache'))
            ->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
                $serializerBuilder->addDefaultHandlers();
                $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
                $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            });

        $serializer = $serializerBuilder->build();

        return $serializer;
    }
}

