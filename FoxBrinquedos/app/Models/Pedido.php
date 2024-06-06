<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'PEDIDO';
    protected $primaryKey = 'PEDIDO_ID';
    public $timestamps = false; // Certifique-se de que essa linha está presente se você não estiver usando timestamps

    protected $fillable = ['USUARIO_ID', 'ENDERECO_ID', 'STATUS_ID', 'PEDIDO_DATA'];

    public function itens()
    {
        return $this->hasMany(PedidoItem::class, 'PEDIDO_ID', 'PEDIDO_ID');
    }
}