<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';

    public function user()
    {
        return $this->BelongsTo(User::class,  'id_pelanggan', 'id');
    }
    public function product()
    {
        return $this->BelongsTo(product::class, 'id_produk', 'id');
    }
}
