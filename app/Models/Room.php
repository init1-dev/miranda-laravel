<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Room extends Model
{
    use HasFactory;
    protected $table = 'room';
    protected $fillable = [
        'name',
        'photo',
        'room_type_id',
        'room_number',
        'description',
        'offer',
        'price',
        'cancellation',
        'discount',
        'status'
    ];

    public function type(): BelongsTo
    {
        return $this->BelongsTo(RoomType::class, 'room_type_id');
    }

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class, 'room_amenities');
    }
}
