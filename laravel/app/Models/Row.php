<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Row extends Model
{
    use HasFactory;

    protected string $etiqueta;

    protected $fillable = [
        'etiqueta',
    ];

    public function rack()
    {
        return $this->hasOne(Rack::class);
    }
}
