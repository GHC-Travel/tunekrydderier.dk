<?php

namespace App;

use App\Enums\UserRole;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role',
        'name',
        'email',
        'password',
        'photo_url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'role' => UserRole::class,
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the profile photo URL attribute.
     *
     * @param string|null $value
     * @return string|null
     */
    public function getPhotoUrlAttribute($value)
    {
        if (blank($value)) {
            return Gravatar::make($this);
        }

        return Storage::disk('photos')->url(
            $value
        );
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'customer_id');
    }
}
