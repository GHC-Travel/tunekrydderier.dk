<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Private()
 * @method static static Company()
 */
final class AddressType extends Enum
{
    const Private = 'Private';
    const Company = 'Company';
}
