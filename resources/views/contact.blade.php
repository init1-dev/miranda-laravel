@extends('layout')
@section('title', 'Contact us')
@section('content')
    <div class="main">
        <div class="main__container">
            <div class="main__upper">
                <p class="main__upper--text">THE ULTIMATE LUXURY</p>
            </div>

            <div class="main__middle">
                <p class="main__middle--text">New Details</p>
            </div>
        </div>
        <div class="banner__breadcrumb">
            <div class="banner__breadcrumb-inner">
                <span>
                    <a href="index.php">Home</a>
                </span><span>|</span><span>Blog</span>
            </div>
        </div>
    </div>
    <section class="contact">

        <div class="contact__top-info">

            <div class="container">
                <p class="float-text">01</p>
                <i class="fa-solid fa-map-location-dot"></i>
                <div class="container__text">
                    <p class="title">Hotel Address</p>
                    <p class="subtitle">19/A, Cirikon City hall Tower New York, NYC</p>
                </div>
            </div>

            <div class="container">
                <p class="float-text">02</p>
                <i class="fa-solid fa-phone-volume"></i>
                <div class="container__text">
                    <p class="title">Phone Number </p>
                    <p class="subtitle">+ 97656 8675 7864 7</p>
                    <p class="subtitle">+ 876 766 8675 765 6</p>
                </div>
            </div>

            <div class="container">
                <p class="float-text">03</p>
                <i class="fa-regular fa-envelope-open"></i>
                <div class="container__text">
                    <p class="title">Email </p>
                    <p class="subtitle">info@webmail.com </p>
                    <p class="subtitle">jobs.webmail@mail.com</p>
                </div>
            </div>
        </div>

        <div class="map">
            <div style="width: 100%"><iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=es&amp;q=8818%20Greenview%20Ln%20Greendale%20Wisconsin(WI),%2053129+(Hotel%20Miranda)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/car-satnav-gps/">Car Navigation Systems</a></iframe></div>
        </div>

        <h2 class="msg-text">Leave us a message:</h2>

        <form id="contact-form" method="POST">
            <div class="groups">
                <div class="group1">
                    <div class="name">
                        <i class="fa-solid fa-user"></i>
                        <input class="input-text" type="text" name="fullname" id="fullname" placeholder="Your full name" required>
                    </div>

                    <div class="number">
                        <i class="fa-solid fa-phone"></i>
                        <input class="input-text" type="text" name="phone" id="phone" placeholder="Add phone number" required>
                    </div>
                </div>

                <div class="group2">
                    <div class="email">
                        <i class="fa-solid fa-envelope"></i>
                        <input class="input-text" type="text" name="email" id="email" placeholder="Enter email address" required>
                    </div>

                    <div class="subject">
                        <i class="fa-solid fa-file-lines"></i>
                        <input class="input-text" type="text" name="subject" id="subject" placeholder="Enter subject" required>
                    </div>
                </div>
            </div>

            <div class="rating-group">
                <label class="rating-label">
                    <input
                        class="rating"
                        min="1"
                        max="5"
                        oninput="this.style.setProperty('--value', this.value)"
                        step="1"
                        type="range"
                        name="rating"
                        id="rating"
                        value="5">
                </label>
            </div>

            <div class="message">
                <i class="fa-solid fa-pencil"></i>
                <textarea class="text-area" name="message" id="message" cols="30" rows="10" placeholder="Enter message" required></textarea>
            </div>

            <button type="submit">SEND</button>
        </form>

    </section>
@endsection