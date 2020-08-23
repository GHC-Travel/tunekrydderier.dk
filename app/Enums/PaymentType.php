<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PaymentType extends Enum
{
    const PRODUCT_SALE = 'Product Sale';
    const STORE_RENT = 'Store Rent';
}
