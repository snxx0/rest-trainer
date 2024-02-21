<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Borrow extends Model
{
    use HasFactory;

    protected Carbon $pedido;
    protected ?Carbon $entregado = null;
    protected int $estado;

    protected $fillable = [
        'pedido',
        'entregado',
        'estado',
    ];

    public function usuario()
    {
        return $this->hasOne(User::class);
    }

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }
}
