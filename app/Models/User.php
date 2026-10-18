<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // ACTIVIDAD 2 - Relación Uno a Uno:
    // el usuario NO tiene la clave foránea, el teléfono sí (phones.user_id) => hasOne
    public function phone(): HasOne
    {
        return $this->hasOne(Phone::class);
        // Si no se siguen las convenciones de Laravel:
        // return $this->hasOne(Phone::class, 'user_id', 'id');
    }

    // ACTIVIDAD 3 - Relación Uno a Muchos:
    // un usuario puede tener varios teléfonos => hasMany
    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class);
    }

    // ACTIVIDAD 4 - Relación Muchos a Muchos:
    // un usuario tiene varios roles a través de la tabla pivote role_user => belongsToMany
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
        // Si no se siguen las convenciones:
        // return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }
}
