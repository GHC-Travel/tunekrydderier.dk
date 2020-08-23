<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


/**
 * @method static static FRESH()
 * @method static static PURCHASED()
 * @method static static ABANDONED()
 */
final class CartStatus extends Enum
{
    const FRESH = 'Fresh';
    // const EXPIRING = 'Expiring';
    // const EXPIRED = 'Expired';
    const PURCHASED = 'Purchased';
    const ABANDONED = 'Abandoned';
}
