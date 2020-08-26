<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


/**
 * @method static static OPEN()
 * @method static static PURCHASED()
 * @method static static ABANDONED()
 */
final class CartStatus extends Enum
{
    const OPEN = 'Open';
    // const EXPIRING = 'Expiring';
    // const EXPIRED = 'Expired';
    const PURCHASED = 'Purchased';
    const ABANDONED = 'Abandoned';
}
