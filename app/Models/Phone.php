<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phone extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relación inversa: el teléfono contiene la clave foránea (user_id),
    // por lo tanto "pertenece a" un usuario => belongsTo
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
        // Si no se siguen las convenciones:
        // return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
