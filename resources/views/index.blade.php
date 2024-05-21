@extends('layout')
@section('title', 'Hotel Miranda')
@section('content')
    <main id="main" class="main">
        <div class="main__container">
            <div class="main__upper">
                <p class="main__upper--text">THE ULTIMATE LUXURY</p>
                <p class="main__upper--text">EXPERIENCE</p>
            </div>

            <div class="main__middle">
                <p class="main__middle--text">The Perfect</p>
                <p class="main__middle--text">Base For You</p>
            </div>

            <div class="main__buttons">
                <a href="about.php">
                    <button class="color">TAKE A TOUR</button>
                </a>
                <a href="contact.php">
                    <button class="dark">LEARN MORE</button>
                </a>
            </div>
        </div>

        <div class="main__form">
            <form id="check-availability-form" class="main-form" action="room-list.php">
                <div class="input--container">
                    <label for="check_in" class="input--text">Arrival Date</p>
                    <input 
                        class="input" 
                        type="date" 
                        name="check_in" 
                        id="check_in" 
                        required
                    >
                </div>
                <div class="input--container">
                    <label for="check_out" class="input--text">Departure Date</p>
                    <input 
                        class="input" 
                        type="date" 
                        name="check_out" 
                        id="check_out" 
                        required
                    >
                </div>
                <button class="submit" type="submit">
                    CHECK AVAILABILITY
                </button>
            </form>
        </div>
    </main>
    <section class="about-us">
        <div class="about-us__background"></div>
        <div class="about-us__inner --max-width">
            <section class="about-us__info">
                <p class="about-us__informative-text upper__case">ABOUT US</p>
                <div class="about-us__background-inner">
                    <p class="about-us__title">Discover Our Underground.</p>
                    <p class="about-us__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat.
                    </p>
                    <a href="rooms-grid.php" style="all: unset;">
                        <button class="about-us__button upper__case" style="cursor: pointer;">
                            BOOK NOW
                        </button>
                    </a>
                </div>
            </section>
            <section class="about-us__features">
                <img class="about-us__features-img" src="https://media.licdn.com/dms/image/D4E12AQFsx3AH8m2GGg/article-cover_image-shrink_600_2000/0/1706876622899?e=2147483647&v=beta&t=tvUFLtHejh8EgIpxHnNMIOxPRL92gM3EyBcwv_YLa24" alt="">
                <div class="about-us__features-feature">
                    <img class="about-us__features-feature-img" src="./assets/team.png" alt="personas">
                    <img class="bg-img" src="./assets/teambg.png" alt="">
                    <p class="about-us__features-feature-title">Strong Team</p>
                    <p class="about-us__features-feature-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor.</p>
                </div>
                <img class="about-us__features-img luxury" src="https://static01.nyt.com/images/2019/03/24/travel/24trending-shophotels1/24trending-shophotels1-superJumbo.jpg" alt="">
                <div class="about-us__features-feature about-us__features-feature--dark">
                    <img class="about-us__features-feature-img" src="./assets/luxury.png" alt="calendario">
                    <p class="about-us__features-feature-title about-us__features-feature-title--dark">Luxury Room</p>
                    <p class="about-us__features-feature-text about-us__features-feature-text--dark">Lorem ipsum dolor
                        sit
                        amet, consectetur adipisicing elit,
                        sed do eiusmod tempor.</p>
                </div>
            </section>
        </div>
    </section>
    <section id="rooms" class="rooms">

        <div class="title">
            <p>ROOMS</p>
            <h2>Hand Picked Rooms</h2>
        </div>

        <div id="rooms-swiper" class="room-swiper">
            <div class="swiper-wrapper">
                @foreach($rooms as $room)
                    <div class="swiper-slide">
                        <div class="slide-title">
                            <div class="slide-title--group">
                                
                                @foreach ($room['amenities'] as $amenity)
                                    {!! getAmenity($amenity) !!}
                                @endforeach
                                
                            </div>
                        </div>
                        <img src={{$room['photo']}} alt="Imagen 1">
                        <div class="slide-info">
                            <div class="description">
                                <h2 class="limit-1">{{ $room['name'] . " " . $room['type'] }}</h2>
                                <p class="limit-2 height-2">{{$room['desc']}}</p>
                            </div>
                            <div class="price">
                                <h2>${{ $room['discount'] }}</h2>
                                <p>/Night</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </section>
    <section id="luxuryPlace" class="luxuryPlace">
        <div class="luxuryPlace__text">
            <p class="p">INTRO VIDEO</p>
            <h2 class="h2">Meet With Our Luxury Place.</h2>
            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
            <a href="rooms-grid.php" style="all: unset;">
                <button class="color">BOOK NOW</button>
            </a>
        </div>
        <div class="video-container">
            <iframe class="luxuryPlace__video" width="560" height="315" src="https://www.youtube-nocookie.com/embed/DlN18b-J-to?si=S4RUmwHaszItENuG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>
    <section id="coreFeatures" class="coreFeatures">
        <div id="coreFeatures-swipper" class="swiper">
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
    </section>
    <section id="ourFoods" class="ourFoods">
        <img class="cookie" src="./assets/cookie.png" alt="">

        <div id="menu-swipper" class="swiper">
            <div class="swipper-title">
                <p class="menu">MENU</p>
                <p class="bigText">Our Foods Menu</p>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="menu-swipper--content">
                        <div class="swiper--item">
                            <img class="img" src="https://www.eatright.org/-/media/images/eatright-landing-pages/foodgroupslp_804x482.jpg?as=0&w=967&rev=d0d1ce321d944bbe82024fff81c938e7&hash=E6474C8EFC5BE5F0DA9C32D4A797D10D" alt="">
                            <div>
                                <p class="swipper--title">Eggs & Bacon</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>

                        <div class="swiper--item">
                            <img class="img" src="https://media.istockphoto.com/id/1625128632/photo/most-common-allergy-food-shot-from-above.jpg?b=1&s=612x612&w=0&k=20&c=jy8uEBErKnHmnunQ3xe-vetl65EGf__ZKOOs_bjCAaY=" alt="">
                            <div>
                                <p class="swipper--title">Tea or Coffee</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>

                        <div class="swiper--item">
                            <img class="img" src="https://media.istockphoto.com/id/1457433817/photo/group-of-healthy-food-for-flexitarian-diet.jpg?b=1&s=612x612&w=0&k=20&c=V8oaDpP3mx6rUpRfrt2L9mZCD0_ySlnI7cd4nkgGAb8=" alt="">
                            <div>
                                <p class="swipper--title">Chia Oatmeal</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="menu-swipper--content">
                        <div class="swiper--item">
                            <img class="img" src="https://imageio.forbes.com/specials-images/imageserve/65072bc1a50c29d7592250c0/Healthy-food--Healthy-eating-background--Fruit--vegetable--berry---Vegetarian-eating-/960x0.jpg?format=jpg&width=960" alt="">
                            <div>
                                <p class="swipper--title">Fruit Parfait</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>

                        <div class="swiper--item">
                            <img class="img" src="https://www.bannerhealth.com/healthcareblog/-/media/images/project/healthcareblog/hero-images/2021/10/real-food-and-key-to-health.ashx" alt="">
                            <div>
                                <p class="swipper--title">Marmalade</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>

                        <div class="swiper--item">
                            <img class="img" src="https://www.mowglistreetfood.com/wp-content/uploads/2023/01/Landing_image_Desktop.jpg" alt="">
                            <div>
                                <p class="swipper--title">Cheese Plate</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="menu-swipper--content">
                        <div class="swiper--item">
                            <img class="img" src="https://www.eatright.org/-/media/images/eatright-landing-pages/foodgroupslp_804x482.jpg?as=0&w=967&rev=d0d1ce321d944bbe82024fff81c938e7&hash=E6474C8EFC5BE5F0DA9C32D4A797D10D" alt="">
                            <div>
                                <p class="swipper--title">Eggs & Bacon</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>

                        <div class="swiper--item">
                            <img class="img" src="https://media.istockphoto.com/id/1625128632/photo/most-common-allergy-food-shot-from-above.jpg?b=1&s=612x612&w=0&k=20&c=jy8uEBErKnHmnunQ3xe-vetl65EGf__ZKOOs_bjCAaY=" alt="">
                            <div>
                                <p class="swipper--title">Tea or Coffee</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>

                        <div class="swiper--item">
                            <img class="img" src="https://media.istockphoto.com/id/1457433817/photo/group-of-healthy-food-for-flexitarian-diet.jpg?b=1&s=612x612&w=0&k=20&c=V8oaDpP3mx6rUpRfrt2L9mZCD0_ySlnI7cd4nkgGAb8=" alt="">
                            <div>
                                <p class="swipper--title">Chia Oatmeal</p>
                                <p class="swipper--subtitle">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="swiper--item__arrow">
                                <img class="arrow" src="./assets/arrow.png" alt="arrow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div id="images-swipper" class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://www.eatright.org/-/media/images/eatright-landing-pages/foodgroupslp_804x482.jpg?as=0&w=967&rev=d0d1ce321d944bbe82024fff81c938e7&hash=E6474C8EFC5BE5F0DA9C32D4A797D10D" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://media.istockphoto.com/id/1625128632/photo/most-common-allergy-food-shot-from-above.jpg?b=1&s=612x612&w=0&k=20&c=jy8uEBErKnHmnunQ3xe-vetl65EGf__ZKOOs_bjCAaY=" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://media.istockphoto.com/id/1457433817/photo/group-of-healthy-food-for-flexitarian-diet.jpg?b=1&s=612x612&w=0&k=20&c=V8oaDpP3mx6rUpRfrt2L9mZCD0_ySlnI7cd4nkgGAb8=" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://imageio.forbes.com/specials-images/imageserve/65072bc1a50c29d7592250c0/Healthy-food--Healthy-eating-background--Fruit--vegetable--berry---Vegetarian-eating-/960x0.jpg?format=jpg&width=960" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://www.bannerhealth.com/healthcareblog/-/media/images/project/healthcareblog/hero-images/2021/10/real-food-and-key-to-health.ashx" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://www.mowglistreetfood.com/wp-content/uploads/2023/01/Landing_image_Desktop.jpg" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>
    <section id="features" class="features">
        <div class="features__container">
            <div class="feature">
                <img class="feature__image" src="./assets/rocket.png" alt="feature rocket">
                <h1 class="feature__title">84k<span class="simbol">+</span></h1>
                <p class="feature__subtitle">Projects are Completed</p>
            </div>

            <div class="feature">
                <img class="feature__image" src="./assets/people.png" alt="feature people">
                <h1 class="feature__title">10M<span class="simbol">+</span></h1>
                <p class="feature__subtitle">Active Backers Around World</p>
            </div>

            <div class="feature">
                <img class="feature__image" src="./assets/raise.png" alt="feature raise">
                <h1 class="feature__title">02k<span class="simbol">+</span></h1>
                <p class="feature__subtitle">Categories Served</p>
            </div>

            <div class="feature">
                <img class="feature__image" src="./assets/book.png" alt="feature book">
                <h1 class="feature__title">100M<span class="simbol">+</span></h1>
                <p class="feature__subtitle">Idea Raised Funds</p>
            </div>
        </div>
    </section>
@endsection