<?php

declare(strict_types=1);

namespace SAML2\XML\mdrpi;

use SAML2\XML\AbstractXMLElement;

/**
 * Abstract class to be implemented by all the classes in this namespace
 *
 * @author Tim van Dijen, <tvdijen@gmail.com>
 * @package SimpleSAMLphp
 */
abstract class AbstractMdrpiElement extends AbstractXMLElement
{
    /** @var string */
    public const NS = 'urn:oasis:names:tc:SAML:metadata:rpi';

    /** @var string */
    public const NS_PREFIX = 'mdrpi';
}
