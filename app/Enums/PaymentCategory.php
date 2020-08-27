<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static REVENUE()
 * @method static static EXPENSE()
 */
final class PaymentCategory extends Enum
{
    const REVENUE = 'Revenue';
    const EXPENSE = 'Expense';
}
