<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'room_id',
        'type',
        'description'
    ];

    public static function getOrders()
    {
        return self::all();
    }

    // public $timestamps = false;
}
