<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [];

    public function rooms(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
