<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

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

    public static function getOrdersByUser()
    {
        return self::all()->where('user_id', Auth::id());
    }

    public static function getTypes()
    {
        return [ "Food", "Drink", "Services" ];
    }

    public function users(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function rooms(): BelongsTo
    {
        return $this->BelongsTo(Room::class);
    }

    // public $timestamps = false;
}
