<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static PRODUCT_SALE()
 * @method static static STORE_RENT()
 */
final class PaymentType extends Enum
{
    const PRODUCT_SALE = 'Product Sale';
    const STORE_RENT = 'Store Rent';
}
