<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

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

    /**
     * Relation with room RoomType model.
     */
    public function type(): BelongsTo
    {
        return $this->BelongsTo(RoomType::class, 'room_type_id');
    }

    /**
     * Relation with Amenity model.
     */
    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class, 'room_amenities');
    }

    /**
     * Relation with Booking model.
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'room_id');
    }

    /**
     * Returns rounded price.
     */
    public function roundPrice()
    {
        return round($this->price / 100);
    }

    /**
     * Returns rounded price or discount if offer is true.
     */
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

    /**
     * Returns formatted rooms.
     */
    public static function getRooms()
    {
        return self::with(['type', 'amenities'])->get();
    }

    /**
     * Filters and return available rooms from db.
     */
    private static function filterAvailableRooms($checkIn = null, $checkOut = null)
    {
        $query = self::with(['type', 'amenities'])->select('room.*');

        if ($checkIn && $checkOut) {
            $query->whereNotExists(function($subquery) use ($checkIn, $checkOut) {
                $subquery->select(DB::raw(1))
                    ->from('booking')
                    ->whereColumn('booking.room_id', 'room.id')
                    ->where(function($query) use ($checkIn, $checkOut) {
                        $query->where('booking.check_in', '<', $checkOut)
                            ->where('booking.check_out', '>', $checkIn);
                    });
            });
        }

        return $query->get();
    }

    /**
     * Returns formatted available rooms.
     */
    public static function getAvailableRooms($checkIn = null, $checkOut = null)
    {
        return self::filterAvailableRooms($checkIn, $checkOut);
    }

    /**
     * Returns true if room is available or false.
     */
    public static function isRoomAvailable($roomId, $checkIn, $checkOut)
    {
        $filteredRooms = self::filterAvailableRooms($checkIn, $checkOut);
        return $filteredRooms->find($roomId) === null ? false : true;
    }

    /**
     * Returns rooms with offer ordered by price ascending.
     */
    public static function getOffers()
    {
        return Room::with(['type', 'amenities'])->where('offer', true)->orderBy('price', 'asc')->get();;
    }

    /**
     * Returns popular rooms.
     */
    public static function getPopular()
    {
        return Room::with(['type', 'amenities'])->take(5)->get();
    }
}
