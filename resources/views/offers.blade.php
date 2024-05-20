@extends('layout')
@section('title', 'Room offers')
@section('content')
    <div class="main">
        <div class="main__container">
            <div class="main__upper">
                <p class="main__upper--text">THE ULTIMATE LUXURY</p>
            </div>

            <div class="main__middle">
                <p class="main__middle--text">Our Offers</p>
            </div>
        </div>
        <div class="banner__breadcrumb">
            <div class="banner__breadcrumb-inner">
                <span>
                    <a href="index.php">Home</a>
                </span><span>|</span><span>Offers</span>
            </div>
        </div>
    </div>
    <section class="offers">

        <div class="rooms_grid">

            @foreach($offers as $room)
                <div class="rooms__card">
                    <div class="image--container">
                        <img src={{$room['photo']}} alt="Imagen 1">
                    </div>

                    <div class="rooms__card--info">
                        <div class="info__details">
                            <div class="info__details--name">
                                <h2 class="type">{{strtoupper($room['type'])}}</h2>
                                <p class="name">{{$room['name']}}</p>
                            </div>
                            <div class="price">
                                <div class="regular-price">
                                    <p class="price">${{ $room['price'] }}</p>
                                    <p class="night">/Night</p>
                                </div>
                                <div class="offer-price">
                                    <p class="price">${{ $room['discount'] }}</p>
                                    <p class="night">/Night</p>
                                </div>
                            </div>
                        </div>

                        <hr class="separator">

                        <div class="info__specs">
                            <div class="info__specs--text">
                                <p class="description limit-2 height-2">{{$room['desc']}}</p>
                                <div class="main__buttons">
                                    <a style="all:unset;" href="room-details.php?id={{$room['id']}}">
                                        <button class="color">BOOK NOW</button>
                                    </a>
                                    <button class="dark">GALLERY</button>
                                </div>
                            </div>

                            <div class="info__specs--icons">
                                <ul class="list">

                                    @foreach ($room['amenities'] as $amenity)
                                        <li class="spec">
                                            {!! getAmenity($amenity) !!}
                                            <p class="spec--text">{{$amenity}}</p>
                                        </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="swiper--bg">

            <div class="section-header">
                <h2 class="title">POPULAR LIST</h2>

                <p class="subtitle">Popular Rooms</p>
            </div>

            <div id="rooms-swiper-normal" class="room-swiper">
                <div class="swiper-wrapper">

                    @foreach($popular as $room)
                        <div class="swiper-slide">
                            <div class="slide-title">

                                @foreach ($room['amenities'] as $amenity)
                                    {!! getAmenity($amenity) !!}
                                @endforeach
                                
                            </div>
                            <img src={{ $room['photo'] }} alt={{'room' . $room['id'] . "image"}}>
                            <div class="slide-info">
                                <div class="description">
                                    <h2 class="limit-1">{{ $room['name'] . " " . $room['type'] }}</h2>
                                    <p class="limit-2 height-2">{{ $room['desc'] }}</p>
                                </div>
                                <div class="rooms__card__info__price">
                                    <div>
                                        <h2 class="rooms__card__info__price--price">${{ $room['price'] }}</h2>
                                        <p class="rooms__card__info__price--night">/Night</p>
                                    </div>
                                    <a style="all:unset;" href="room-details.php?id={{$room['id']}}">
                                        <button class="rooms__card__info__price--button">Book now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>


    </section>
@endsection