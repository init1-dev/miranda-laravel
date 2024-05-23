<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';
    
    protected $fillable = [
        'check_in',
        'check_out',
        'full_name',
        'phone',
        'email',
        'special_request',
        'room_id'
    ];

    public $timestamps = false;

    public function rooms(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
