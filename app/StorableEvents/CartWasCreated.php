<?php

namespace App\StorableEvents;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class CartWasCreated extends ShouldBeStored
{
    public ?int $customerId;

    /**
     * CartWasCreated constructor.
     * @param int $customerId
     */
    public function __construct(?int $customerId)
    {
        $this->customerId = $customerId;
    }
}
