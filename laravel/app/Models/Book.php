<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Book extends Model
{
    use HasFactory;

    protected string $nombre;
    protected Carbon $publicacion;
    protected string $editorial;
    protected string $isdn;

    protected $fillable = [
        'nombre',
        'publicacion',
        'editorial',
        'isdn',
    ];

    public function autor()
    {
        return $this->hasOne(Autor::class);
    }
}