<?php

    function getAmenity($amenity) {
        $amenities = [
            'Air Conditioner' => '<i class="fa-regular fa-snowflake"></i>',
            'Breakfast' => '<i class="fa-solid fa-utensils"></i>',
            'Cleaning' => '<i class="fa-solid fa-broom"></i>',
            'Grocery' => '<i class="fa-solid fa-basket-shopping"></i>',
            'Shop Near' => '<i class="fa-solid fa-shop"></i>',
            'High Speed Wifi' => '<i class="fa-solid fa-wifi"></i>',
            'Kitchen' => '<i class="fa-solid fa-kitchen-set"></i>',
            'Shower' => '<i class="fa-solid fa-shower"></i>',
            'Single Bed' => '<i class="fa-solid fa-bed"></i>',
            'Towels' => '<i class="fa-solid fa-toilet-paper"></i>',
            'Strong Locker' => '<i class="fa-solid fa-lock"></i>',
            'Smart Security' => '<i class="fa-solid fa-key"></i>',
            '24/7 Online Support' => '<i class="fa-solid fa-headset"></i>',
            'Expert Team' => '<i class="fa-solid fa-people-group"></i>',
        ];
        return $amenities[$amenity['name']];
    }

?>