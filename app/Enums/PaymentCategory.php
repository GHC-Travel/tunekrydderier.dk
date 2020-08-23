<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PaymentCategory extends Enum
{
    const REVENUE = 'Revenue';
    const EXPENSE = 'Expense';
}
