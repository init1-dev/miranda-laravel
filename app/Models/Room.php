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

    public function roundPrice()
    {
        return round($this->price / 100);
    }

    public function roundDiscount()
    {
        if(!$this->offer)
        {
            return round($this->price / 100);
        }
        else {
            return (round($this->price / 100) * ( 1 - $this->discount / 100));
        };
    }

    public static function getRooms()
    {
        $rooms = self::with(['type', 'amenities'])->get();
        $formatedRooms = self::formRoomData($rooms);
        return $formatedRooms;
    }

    public static function getOffers()
    {
        $rooms = Room::with(['type', 'amenities'])->where('offer', true)->orderBy('price', 'asc')->get();
        $formatedRooms = self::formRoomData($rooms);
        return $formatedRooms;
    }

    public static function getPopular()
    {
        $rooms = Room::with(['type', 'amenities'])->take(5)->get();
        $formatedRooms = self::formRoomData($rooms);
        return $formatedRooms;
    }

    public static function formRoomData($roomData)
    {
        $formatedRooms = [];
        foreach ($roomData as $room) {
            $formatedRooms[] = [
                'id' => $room['id'],
                'name' => $room['name'],
                'photo' => $room['photo'],
                'type' => $room['type']['name'],
                'number' => $room['room_number'],
                'desc' => $room['description'],
                'offer' => $room['offer'],
                'price' => $room->roundPrice(),
                'cancel' => $room['cancellation'],
                'amenities' => json_decode($room['amenities'], true),
                'discount' => $room->roundDiscount()
            ];
        }

        return $formatedRooms;
    }
}
