<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Amenity extends Model
{
    use HasFactory;
    protected $table = 'amenity';
    protected $fillable = [
        'name'
    ];

    /**
     * Returns amenity icon.
     */
    public function getAmenityIcon() {
        $amenities = [
            'Air Conditioner' => 'fa-regular fa-snowflake',
            'Breakfast' => 'fa-solid fa-utensils',
            'Cleaning' => 'fa-solid fa-broom',
            'Grocery' => 'fa-solid fa-basket-shopping',
            'Shop Near' => 'fa-solid fa-shop',
            'High Speed Wifi' => 'fa-solid fa-wifi',
            'Kitchen' => 'fa-solid fa-kitchen-set',
            'Shower' => 'fa-solid fa-shower',
            'Single Bed' => 'fa-solid fa-bed',
            'Towels' => 'fa-solid fa-toilet-paper',
            'Strong Locker' => 'fa-solid fa-lock',
            'Smart Security' => 'fa-solid fa-key',
            '24/7 Online Support' => 'fa-solid fa-headset',
            'Expert Team' => 'fa-solid fa-people-group',
        ];
        return $amenities[$this->name];
    }
}
