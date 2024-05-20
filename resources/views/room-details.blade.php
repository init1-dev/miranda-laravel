@extends('layout')
@section('title', 'Room details')
@section('content')
    <section>
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
                    </span>
                    <span>|</span>
                    <span>Room Details</span>
                </div>
            </div>
        </div>
    </section>
    <section class="room-details">
        <div class="room-details__room-content">
            <div class="info">
                <div class="info_container">
                    <span>
                        <h5>{{strtoupper($room['type'])}}</h5>
                        <h2>{{ $room['name']}} <small>#{{$room['number']}}</small></h2>
                    </span>
                    <span class="price">
                        <p>${{ $room['discount'] }}</p>
                        <small>/night</small>
                    </span>
                </div>
                <img src={{ $room['photo'] }} alt="room image">
            </div>

            <main class="main">
                <div class="main__form">
                    <form id="check-availability-form" class="booking-form" action="../ajax/booking-form.php" method="POST">
                        <h4>Check Availability</h4>
                        <div class="input--container">
                            <label for="arrival" class="input--text">Check In</label>
                            <input class="input" type="date" name="arrival" id="arrival" value={{$check_in ? $check_in : ''}} required>
                        </div>
                        <div class="input--container">
                            <label for="departure" class="input--text">Check Out</label>
                            <input class="input" type="date" name="departure" id="departure" value={{$check_out ? $check_out : ''}} required>
                        </div>
                        <div class="input--container">
                            <label for="fullname" class="input--text">Fullname</label>
                            <input class="input no-bg" type="text" name="fullname" id="fullname" required>
                        </div>
                        <div class="input--container">
                            <label for="phone" class="input--text">Phone</label>
                            <input class="input no-bg" type="text" name="phone" id="phone" required>
                        </div>
                        <div class="input--container">
                            <label for="email" class="input--text">Email</label>
                            <input class="input no-bg" type="text" name="email" id="email" required>
                        </div>
                        <div class="input--container">
                            <label for="special-request" class="input--text">Epecial request</label>
                            <textarea class="input no-bg" name="special-request" id="special-request" required></textarea>
                        </div>
                        <input type="number" name="id" id="id" hidden value={{$id}}>
                        <a>
                            <button class="submit" type="submit">
                                {{ $check_in && $check_out ? 'BOOK NOW' : 'CHECK AVAILABILITY' }}
                            </button>
                        </a>
                    </form>
                </div>
            </main>
        </div>
        <div class="info-container room-description">
            <p>{{ $room['desc'] }}</p>
        </div>
        <div class="info-container amenities">
            <h4>Amenities</h4>
            <hr>
            <ul class="amenities-list">

                @foreach ($room['amenities'] as $amenity)
                    <li class="amenity">
                        {!! getAmenity($amenity) !!}
                        <p>{{$amenity}}</p>
                    </li>
                @endforeach

            </ul>
        </div>
        <div class="info-container graphic">
            <div class="container">
                <div class="image">
                    <span class="circle">
                        <span class="check">
                            <i>&#10003;</i>
                        </span>
                    </span>

                </div>
                <div class="name">
                    <h4>Rosalina D. William</h4>
                    <small>Founder, Qux Co.</small>
                </div>
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                </p>
            </div>
        </div>
        <div class="info-container cancelation">
            <h4>{{ "Cancellation policy " }} <small>#{{$room['number']}}</small></h4>
            <hr>
            <p>{{ $room['cancel'] }}</p>
        </div>
        <div class="swiper--bg">

            <div class="section-header">
                <p class="subtitle">Related Rooms</p>
            </div>

            <div id="rooms-swiper-normal" class="room-swiper">
                <div class="swiper-wrapper">

                @foreach($related as $room)

                    <div class="swiper-slide">
                        <div class="slide-title">
                            <div class="slide-title--group">

                                @foreach ($room['amenities'] as $amenity)
                                    {!! getAmenity($amenity) !!}
                                @endforeach
                                
                            </div>
                        </div>
                        <img src={{ $room['photo'] }} alt="image photo">
                        <div class="slide-info">
                            <div class="description">
                                <h2 class="limit-1">{{ $room['name'] . " " . $room['type'] }}</h2>
                                <p class="limit-2 height-2">{{ $room['desc'] }}</p>
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

                @endforeach

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
@endsection