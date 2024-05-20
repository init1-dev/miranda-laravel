@extends('layout')
@section('title', 'Our rooms')
@section('content')
    <section class="rooms__list__section rooms--grid">
        <div class="main">
            <div class="main__container">
                <div class="main__upper">
                    <p class="main__upper--text">THE ULTIMATE LUXURY</p>
                </div>

                <div class="main__middle">
                    <p class="main__middle--text">Ultimate Room</p>
                </div>
            </div>
            <div class="banner__breadcrumb">
                <div class="banner__breadcrumb-inner">
                    <span>
                        <a href="index.php">Home</a>
                    </span><span>|</span><span>Rooms</span>
                </div>
            </div>
        </div>
        <div class="rooms_grid">
            <div class="swiper pagination-swiper-grid">
                <div class="swiper-wrapper">
                    @foreach($rooms as $room)
                        <div class="swiper-slide">
                            <div class="rooms__card">
                                <img src={{ $room['photo'] }} alt={{'room' . $room['id'] . "image"}}>

                                <div class="rooms__card__icons">

                                    @foreach ($room['amenities'] as $amenity)
                                        {!! getAmenity($amenity) !!}
                                    @endforeach
                                    
                                </div>

                                <div class="rooms__card__info">
                                    <div class="rooms__card__info__description">
                                        <h2 class="rooms__card__info__description--title limit-1">Room {{$room['number'] . " " . $room['type']}}</h2>
                                        <p class="rooms__card__info__description--description limit-2 height-2">{{ $room['desc'] }}</p>
                                    </div>
                                    <div class="rooms__card__info__price">
                                        <div>
                                            <h2 class="rooms__card__info__price--price">${{ $room['discount'] }}</h2>
                                            <p class="rooms__card__info__price--night">/Night</p>
                                        </div>
                                        <a style="all:unset;" href="room-details.php?id={{$room['id']}}">
                                            <button class="rooms__card__info__price--button">Book now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-pagination"></div>

        </div>
    </section>
@endsection