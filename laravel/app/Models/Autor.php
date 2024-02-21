<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Autor extends Model
{
    use HasFactory;

    protected string $nombre;
    protected Carbon $nacimiento;
    protected string $origen;

    protected $fillable = [
        'nombre',
        'nacimiento',
        'origen',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
