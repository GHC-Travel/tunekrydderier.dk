<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEvent;

class StoredEvent extends EloquentStoredEvent
{
    public static function boot()
    {
        parent::boot();

        static::creating(function ($storedEvent) {
            $storedEvent->meta_data['user_id'] = Auth::id();
            $storedEvent->meta_data['ip_address'] = Request::ip();
            $storedEvent->meta_data['user_agent'] = Request::userAgent();
        });
    }

    public function scopeSearch($query, $value)
    {
        $query->where('event_class', 'like', '%' . $value . '%');
    }

    public function stream()
    {
        return $this->hasMany(StoredEvent::class, 'aggregate_uuid', 'aggregate_uuid');
    }
}
