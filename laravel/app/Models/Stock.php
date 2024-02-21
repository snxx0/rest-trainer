<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Stock extends Model
{
    use HasFactory;

    protected string $codigo;
    protected Carbon $fecha_ingreso;
    protected int $estado;

    protected $fillable = [
        'codigo',
        'fecha_ingreso',
        'estado',
    ];

    public function book()
    {
        return $this->hasOne(Book::class);
    }

    public function row()
    {
        return $this->hasOne(Row::class);
    }

    public function prestamos()
    {
        return $this->hasMany(Borrow::class);
    }
}
