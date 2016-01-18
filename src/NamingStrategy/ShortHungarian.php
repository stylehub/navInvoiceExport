<?php
namespace Dream\NavInvoiceExport\NamingStrategy;

use Goetas\Xsd\XsdToPhp\Naming\ShortNamingStrategy;
use Goetas\XML\XSDReader\Schema\Type\Type;

class ShortHungarian extends ShortNamingStrategy 
{

    public function getTypeName(Type $type)
    {
        $name = $this->classify($type->getName());
        if ($name && substr($name, - 4) !== 'Type' && substr($name, - 5) !== 'Tipus') {
            $name .= "Type";
        }
        return $name;
    }
}