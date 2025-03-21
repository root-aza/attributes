<?php

declare(strict_types=1);

namespace Spiral\Attributes;

use Doctrine\Common\Annotations\NamedArgumentConstructorAnnotation;

/**
 * Marker interface for PHP7/PHP8 compatible support for named arguments
 * (and constructor property promotion).
 */
interface NamedArgumentConstructorAttribute extends NamedArgumentConstructorAnnotation
{
}
