@extends('layout')
@section('title', 'Our rooms')
@section('content')
    <section class="rooms__list__section rooms--list">
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
            <p class="counter"><i></i>Found <b>{{ count($rooms) }}</b> rooms available between <b>{{ date_format(new DateTime($arrival), 'd/m/Y')}}</b> and <b>{{ date_format(new DateTime($departure), 'd/m/Y')}}</b></p>

            {{--  --}}

            <div class="swiper pagination-swiper">
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
                                        <h2 class="rooms__card__info__description--title">Room {{$room['number'] . " " . $room['type']}}</h2>
                                        <p class="rooms__card__info__description--description">{{ $room['desc'] }}</p>
                                    </div>
                                    <div class="rooms__card__info__price">
                                        <div>
                                            <h2 class="rooms__card__info__price--price">${{ $room['discount'] }}</h2>
                                            <p class="rooms__card__info__price--night">/Night</p>
                                        </div>
                                        <a 
                                            style="all:unset;" 
                                            href="room-details.php?id={{$room['id']}}&check_in={{$arrival}}&check_out={{$departure}}"
                                        >
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

            {{--  --}}

        </div>
    </section>
@endsection