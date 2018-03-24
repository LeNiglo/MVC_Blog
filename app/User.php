<?php

namespace App;

use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait { restore as private entrustRestore; }
    use SoftDeletes { restore as private softRestore; }

    protected $fillable = [
        'firstname', 'lastname', 'birthday', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'birthday', 'deleted_at'
    ];

    public function getNameAttribute()
    {
        return "{$this->firstname} {$this->lastname}";
    }

    public function posts()
    {
        return $this->hasMany(App\Post::class);
    }

    public function restore()
    {
        $this->entrustRestore();
        return $this->softRestore();
    }
}
