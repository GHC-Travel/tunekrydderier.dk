<?php

namespace App;

use Illuminate\Support\Str;
use function md5;

class Gravatar
{
  public static function make(User $user)
  {
    return 'https://www.gravatar.com/avatar/'
      . md5(Str::lower($user->email))
      . '.jpg?s=200&d=mm';
  }
}
