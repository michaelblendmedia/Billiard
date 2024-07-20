<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoice';
    protected $fillable = ['id', 'id_player', 'id_rental', 'id_belanja'];
    public function order()
    {
        return $this->belongsTo(Order::class,'id_rental','id_rental');
    }
    public function rentalinvoice()
    {
        return $this->belongsTo(Order::class,'id_belanja','id_belanja');
    }
}
