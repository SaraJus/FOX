<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoItem extends Model
{
    use HasFactory;

    protected $table = 'PEDIDO_ITEM';
    protected $primaryKey = 'PEDIDO_ITEM_ID';
    public $timestamps = false; // Certifique-se de que essa linha está presente se você não estiver usando timestamps

    protected $fillable = ['PEDIDO_ID', 'PRODUTO_ID', 'ITEM_QTD', 'ITEM_PRECO'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'PEDIDO_ID', 'PEDIDO_ID');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }
}