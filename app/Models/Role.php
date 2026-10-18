<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];

    // ACTIVIDAD 4 - Un rol puede ser desempeñado por varios usuarios => belongsToMany
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
        // Si no se siguen las convenciones de nombres de tabla/columnas:
        // return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
    }
}
