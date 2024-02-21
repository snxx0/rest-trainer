<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    use HasFactory;

    protected string $etiqueta;
    protected int $niveles;
    protected float $ancho;

    protected $fillable = [
        'etiqueta',
        'niveles',
        'ancho',
    ];

    public function rows()
    {
        return $this->hasMany(Row::class);
    }
}
