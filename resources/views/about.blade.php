@extends('layout')
@section('title', 'About Hotel Miranda')
@section('content')
    <section class="about__section">

        <div class="main">
            <div class="main__container">
                <div class="main__upper">
                    <p class="main__upper--text">THE ULTIMATE LUXURY</p>
                </div>

                <div class="main__middle">
                    <p class="main__middle--text">About Us</p>
                </div>
            </div>
            <div class="banner__breadcrumb">
                <div class="banner__breadcrumb-inner">
                    <span>
                        <a href="index.php">Home</a>
                    </span><span>|</span><span>About</span>
                </div>
            </div>
        </div>

        <div class="video-container">
            <iframe class="luxuryPlace__video" width="560" height="315" src="https://www.youtube-nocookie.com/embed/DlN18b-J-to?si=S4RUmwHaszItENuG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <div class="text__container">
            <p>
                Hello. Our hotel has been present for over 20 years. We make the best for all our customers.
            </p>
        </div>

        <div class="squares__container">
            <div class="squares__container__square">
                <img src="./assets/breakfast.png" alt="">
                <h5>BREAKFAST</h5>
            </div>

            <div class="squares__container__square">
                <img src="./assets/airport.png" alt="">
                <h5>AIRPORT PICKUP</h5>
            </div>

            <div class="squares__container__square">
                <img src="./assets/guide.png" alt="">
                <h5>CITY GUIDE</h5>
            </div>

            <div class="squares__container__square">
                <img src="./assets/bbq.png" alt="">
                <h5>BBQ PARTY</h5>
            </div>

            <div class="squares__container__square">
                <img src="./assets/luxyry.png" alt="">
                <h5>LUXURY ROOM</h5>
            </div>
        </div>

        <div class="restaurant">
            <img class="restaurant__img" src="https://t3.ftcdn.net/jpg/02/60/12/88/360_F_260128861_Q2ttKHoVw2VrmvItxyCVBnEyM1852MoJ.jpg" alt="">
            <div class="restaurant__content">
                <small>RESTAURANT</small>
                <h3>Get Restaurant Facilities & Many Other More</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <div class="main__buttons">
                    <a 
                        href="https://www.ujamaaresort.org/wp-content/uploads/2018/01/Ujamaa-restaurant-menu.pdf"
                        target="_blank" rel="nofollow noopener noreferrer"
                    >
                        <button class="color">TAKE A LOOK</button>
                    </a>
                </div>
            </div>
        </div>

        <div id="coreFeatures" class="coreFeatures black-features">
            <div id="coreFeatures-swipper-black" class="swiper swiper-black">
                <div class="swipper-title">
                    <p class="coreFeatures--title">FACILITIES</p>
                    <p class="bigText">Core Features</p>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="coreFeatures-swipper--content">
                            <div class="swiper--item">
                                <img class="img" src="./assets/features/feature1.png" alt="">
                                <p class="float">01</p>
                                <div>
                                    <p class="swipper--title">Have High Rating</p>
                                    <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="coreFeatures-swipper--content">
                            <div class="swiper--item">
                                <img class="img" src="./assets/features/feature2.png" alt="">
                                <p class="float">02</p>
                                <div>
                                    <p class="swipper--title">Quiet Hours</p>
                                    <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="coreFeatures-swipper--content">
                            <div class="swiper--item">
                                <img class="img" src="./assets/features/feature3.png" alt="">
                                <p class="float">03</p>
                                <div>
                                    <p class="swipper--title">Best Locations</p>
                                    <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="coreFeatures-swipper--content">
                            <div class="swiper--item">
                                <img class="img" src="./assets/features/feature4.png" alt="">
                                <p class="float">04</p>
                                <div>
                                    <p class="swipper--title">Free Cancellation</p>
                                    <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="coreFeatures-swipper--content">
                            <div class="swiper--item">
                                <img class="img" src="./assets/features/feature5.png" alt="">
                                <p class="float">05</p>
                                <div>
                                    <p class="swipper--title">Payment Options</p>
                                    <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="coreFeatures-swipper--content">
                            <div class="swiper--item">
                                <img class="img" src="./assets/features/feature6.png" alt="">
                                <p class="float">06</p>
                                <div>
                                    <p class="swipper--title">Special Offers</p>
                                    <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="counter">
            <small>COUNTER</small>
            <h3>Some Fun Facts</h3>
            <div class="counter__facts">
                <div class="fact">
                    <img class="fact__img" src="./assets/fact1.png" alt="">
                    <div class="fact__content">
                        <h2>8K</h2>
                        <small>Happy Users</small>
                        <img src="./assets/arrow2.png" alt="" />
                    </div>
                </div>

                <div class="fact">
                    <img class="fact__img" src="./assets/fact2.png" alt="">
                    <div class="fact__content">
                        <h2>10M</h2>
                        <small>Reviews & Appriciate</small>
                        <img src="./assets/arrow2.png" alt="" />
                    </div>
                </div>

                <div class="fact">
                    <img class="fact__img" src="./assets/fact3.png" alt="">
                    <div class="fact__content">
                        <h2>100</h2>
                        <small>Country Coverage</small>
                        <img src="./assets/arrow2.png" alt="" />
                    </div>
                </div>
            </div>

            <div class="counter__swiper">
                <div id="counter-swipper" class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="coreFeatures-swipper--content">
                                <div class="swiper--item">
                                    <img src="https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="coreFeatures-swipper--content">
                                <div class="swiper--item">
                                    <img src="https://www.usatoday.com/gcdn/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="coreFeatures-swipper--content">
                                <div class="swiper--item">
                                    <img src="https://static01.nyt.com/images/2019/03/24/travel/24trending-shophotels1/24trending-shophotels1-superJumbo.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="coreFeatures-swipper--content">
                                <div class="swiper--item">
                                    <img src="https://www.cvent.com/sites/default/files/image/2021-10/hotel%20room%20with%20beachfront%20view.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="coreFeatures-swipper--content">
                                <div class="swiper--item">
                                    <img src="https://t3.ftcdn.net/jpg/06/19/00/08/360_F_619000872_AxiwLsfQqRHMkNxAbN4l5wg1MsPgBsmo.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

    </section>
@endsection