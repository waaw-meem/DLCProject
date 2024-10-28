<!DOCTYPE html>
<html lang="en" class="homepage">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2">
        <meta name="description" content="DLC Real Estate">
        <title>Home | DLC Real Estate </title>
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <link rel="icon" type="image/ico" href="/assets/favicon.ico">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/choices.js@10.2.0/public/assets/styles/choices.min.css">


        <!-- home CSS -->
        <link rel="stylesheet" href="/assets/css/home.min.css">

        <style>
        .loader-first {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: #111111 url("/assets/images/home/hero-3.jpg") center center/cover no-repeat;
            background-blend-mode: overlay;

        }

        .loader-first img {
            animation: clipAnima 2s linear 0s 3 alternate;
        }

        @media (max-width: 576px) {
            .loader-first img {
                max-width: 60%;
            }
        }


        @keyframes clipAnima {
            from {
                clip-path: polygon(0 100%, 100% 100%, 100% 100%, 0% 100%);
            }

            to {
                clip-path: polygon(0 100%, 100% 100%, 100% 0, 0 0);
            }
        }

        .alert-warnning {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999999;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            font-size: 20px;
            text-transform: uppercase;
            text-align: center;
            line-height: 1.5em;
            font-weight: 700;
            color: #fff;
            background: #000;
            overflow: hidden;
        }

        .alert-warnning p {
            position: absolute;
            left: 50%;
            top: 50%;
            font-size: 18px;
            transform: translate(-50%, -50%);
            color: #fff;
        }
        </style>

    </head>

    <body class="home">

        <!-- Loader -->
        <?php include 'includes/loader.php';?>
        <!-- Header -->
        <?php include 'includes/header.php';?>

        <main>
            <!-- Home Hero -->
            <section class="home-hero section">
                <div class="swiper home-hero__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="home-hero__video">
                                <div class="img-wrapper">
                                    <picture>
                                        <source media="(min-width:576px)" srcset="/assets/images/home/hero-2.jpg"
                                            width="480" height="980">
                                        <img src="/assets/images/home/hero-2-mob.jpg" alt="hero" class="" width="1920"
                                            height="980">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="home-hero__video">
                                <div class="img-wrapper">
                                    <picture>
                                        <source media="(min-width:576px)" srcset="/assets/images/home/hero-1.jpg"
                                            width="480" height="980">
                                        <img src="/assets/images/home/hero-1-mob.jpg" alt="hero" class="" width="1920"
                                            height="980">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="home-hero__video">
                                <div class="img-wrapper">
                                    <picture>
                                        <source media="(min-width:576px)" srcset="/assets/images/home/hero-3.jpg"
                                            width="480" height="980">
                                        <img src="/assets/images/home/hero-3-mob.jpg" alt="hero" class="" width="1920"
                                            height="980">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>

                <div class="container">
                    <div class="custom-row no-gutters justify-content-center">
                        <div class="col_12">
                            <div class="home-hero__title">
                                <div class="home-hero__title__main">
                                    <h1 class="h1 description">Discover Your Ideal Home!</h1>
                                    <p class="p line-clamp-4">Turning real estate aspirations into tangible realities is
                                        our mission. Let's embark on this journey together and turn your dreams into
                                        reality.</p>

                                </div>
                            </div>
                            <div class="home-hero__filter">
                                <form action="">
                                    <div class="c_form-field">
                                        <label>Search by</label>
                                        <input type="text" class="js-choice1" placeholder="City, community or building">

                                    </div>
                                    <div class="c_form-field">
                                        <label>Property</label>
                                        <select name="" id="" id="a-select" class="js-choice">
                                            <option value="">Properties</option>
                                            <option value="buy">Buy</option>
                                            <option value="rent">Rent</option>
                                        </select>
                                    </div>
                                    <!-- NOTE: added a class below -->
                                    <div class="c_form-field c_form-field--type ">
                                        <label>Type</label>
                                        <select name="" id="" id="a-select" class="js-choice">
                                            <option value="">Villa, Apartment...</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </div>
                                    <div class="filter-btn">
                                        <button type="submit">
                                            <img src="/assets/svg/search-filter-icon.svg" alt="icon" width="27"
                                                height="27">
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home-hero__social">
                    <ul class="home-hero__social__lists">
                        <li class="animate fadein-Up" data-delay="0.2s">
                            <a href="javascript:;" class="" target="_blank" title="facebook">
                                <img src="/assets/svg/socials/facebook-h.svg" alt="icon" width="15" height="15"
                                    class="">
                            </a>
                        </li>
                        <li class="animate fadein-Up" data-delay="0.4s">
                            <a href="javascript:;" class="" target="_blank" title="instagram">
                                <img src="/assets/svg/socials/instagram-h.svg" alt="icon" width="15" height="15"
                                    class="">
                            </a>
                        </li>
                        <li class="animate fadein-Up" data-delay="0.4s">
                            <a href="javascript:;" class="" target="_blank" title="linkedin">
                                <img src="/assets/svg/socials/linkedin-h.svg" alt="icon" width="15" height="15"
                                    class="">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="home-hero__contacts">
                    <a href="javascript:void" class="item item--chat">
                        <img src="/assets/svg/chat.svg" alt="chat"  class="svg-convert">
                    </a>
                    <a href="javascript:void" class="item">
                        <img src="/assets/svg/whatsapp.svg" alt="whatsapp" width="46" height="46" class="svg-convert">
                    </a>
                </div>

            </section>

            <!-- property highlights -->
            <section class="property-highlight section-py">
                <div class="container-s">
                    <div class="generic-panel animate fadein-Up" data-delay="0.2s">
                        <span class="generic-panel__small__title">property highlights</span>
                        <h2 class="text-capitalize">Featured Properties</h2>
                    </div>
                    <div class="property-highlight__main-wrapper">
                        <div class="btnn-group animate fadein-Up" data-delay="0.2s">
                            <button class="rectangle-btn rectangle-btn--white active" data-category="category-buy">Buy</button>
                            <button class="rectangle-btn rectangle-btn--white" data-category="category-rent">Rent</button>
                        </div>
                        <div class="property-highlight__slider-wrapper">
                            <div class="element-lg-right-zero">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide category-rent">
                                            <div class="property-card">
                                                <div class="property-card__header">
                                                    <div class="property-card__figure">
                                                        <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-1.jpg" alt="property"
                                                            width="520" height="300" class="img-hack lazy-img">
                                                    </div>
                                                    <div class="property-card__button">
                                                        <span class="rectangle-btn rectangle-btn--white">view
                                                            more</span>
                                                    </div>
                                                </div>
                                                <div class="property-card__body">
                                                    <span class="property-card__small-title">Apartment</span>
                                                    <h3 class="property-card__title">Cresswell Residences</h3>
                                                    <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                        Central),Cresswell Residences</p>
                                                    <span class="property-card__location">Nearby: Dubai Mall </span>
                                                    <div class="property-card__features">
                                                        <ul>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bed.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bath.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/size.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                450 Sqft  / 120 Sqm
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="/properties.php" class="btnn-stretched">view more</a>
                                            </div>
                                        </div>

                                        <div class="swiper-slide category-rent">
                                            <div class="property-card">
                                                <div class="property-card__header">
                                                    <div class="property-card__figure">
                                                        <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-2.jpg" alt="property"
                                                            width="520" height="300" class="img-hack lazy-img">
                                                    </div>
                                                    <div class="property-card__button">
                                                        <span class="rectangle-btn rectangle-btn--white">view
                                                            more</span>
                                                    </div>
                                                </div>
                                                <div class="property-card__body">
                                                    <span class="property-card__small-title">Apartment</span>
                                                    <h3 class="property-card__title">Cresswell Residences</h3>
                                                    <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                        Central),Cresswell Residences</p>
                                                    <span class="property-card__location">Nearby: Dubai Mall </span>
                                                    <div class="property-card__features">
                                                        <ul>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bed.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bath.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/size.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                450 Sqft  / 120 Sqm
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="/properties.php" class="btnn-stretched">view more</a>
                                            </div>
                                        </div>

                                        <div class="swiper-slide category-rent">
                                            <div class="property-card">
                                                <div class="property-card__header">
                                                    <div class="property-card__figure">
                                                        <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-3.jpg" alt="property"
                                                            width="520" height="300" class="img-hack lazy-img">
                                                    </div>
                                                    <div class="property-card__button">
                                                        <span class="rectangle-btn rectangle-btn--white">view
                                                            more</span>
                                                    </div>
                                                </div>
                                                <div class="property-card__body">
                                                    <span class="property-card__small-title">Apartment</span>
                                                    <h3 class="property-card__title">Cresswell Residences</h3>
                                                    <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                        Central),Cresswell Residences</p>
                                                    <span class="property-card__location">Nearby: Dubai Mall </span>
                                                    <div class="property-card__features">
                                                        <ul>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bed.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bath.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/size.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                450 Sqft  / 120 Sqm
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="/properties.php" class="btnn-stretched">view more</a>
                                            </div>
                                        </div>

                                        <div class="swiper-slide category-buy">
                                            <div class="property-card">
                                                <div class="property-card__header">
                                                    <div class="property-card__figure">
                                                        <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-4.jpg" alt="property"
                                                            width="520" height="300" class="img-hack lazy-img">
                                                    </div>
                                                    <div class="property-card__button">
                                                        <span class="rectangle-btn rectangle-btn--white">view
                                                            more</span>
                                                    </div>
                                                </div>
                                                <div class="property-card__body">
                                                    <span class="property-card__small-title">Apartment</span>
                                                    <h3 class="property-card__title">Cresswell Residences</h3>
                                                    <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                        Central),Cresswell Residences</p>
                                                    <span class="property-card__location">Nearby: Dubai Mall </span>
                                                    <div class="property-card__features">
                                                        <ul>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bed.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bath.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/size.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                450 Sqft  / 120 Sqm
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="/properties.php" class="btnn-stretched">view more</a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide category-buy">
                                            <div class="property-card">
                                                <div class="property-card__header">
                                                    <div class="property-card__figure">
                                                        <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-4.jpg" alt="property"
                                                            width="520" height="300" class="img-hack lazy-img">
                                                    </div>
                                                    <div class="property-card__button">
                                                        <span class="rectangle-btn rectangle-btn--white">view
                                                            more</span>
                                                    </div>
                                                </div>
                                                <div class="property-card__body">
                                                    <span class="property-card__small-title">Apartment</span>
                                                    <h3 class="property-card__title">Cresswell Residences</h3>
                                                    <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                        Central),Cresswell Residences</p>
                                                    <span class="property-card__location">Nearby: Dubai Mall </span>
                                                    <div class="property-card__features">
                                                        <ul>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bed.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bath.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/size.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                450 Sqft  / 120 Sqm
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="/properties.php" class="btnn-stretched">view more</a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide category-buy">
                                            <div class="property-card">
                                                <div class="property-card__header">
                                                    <div class="property-card__figure">
                                                        <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-4.jpg" alt="property"
                                                            width="520" height="300" class="img-hack lazy-img">
                                                    </div>
                                                    <div class="property-card__button">
                                                        <span class="rectangle-btn rectangle-btn--white">view
                                                            more</span>
                                                    </div>
                                                </div>
                                                <div class="property-card__body">
                                                    <span class="property-card__small-title">Apartment</span>
                                                    <h3 class="property-card__title">Cresswell Residences</h3>
                                                    <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                        Central),Cresswell Residences</p>
                                                    <span class="property-card__location">Nearby: Dubai Mall </span>
                                                    <div class="property-card__features">
                                                        <ul>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bed.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bath.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/size.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                450 Sqft  / 120 Sqm
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="/properties.php" class="btnn-stretched">view more</a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide category-buy">
                                            <div class="property-card">
                                                <div class="property-card__header">
                                                    <div class="property-card__figure">
                                                        <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-4.jpg" alt="property"
                                                            width="520" height="300" class="img-hack lazy-img">
                                                    </div>
                                                    <div class="property-card__button">
                                                        <span class="rectangle-btn rectangle-btn--white">view
                                                            more</span>
                                                    </div>
                                                </div>
                                                <div class="property-card__body">
                                                    <span class="property-card__small-title">Apartment</span>
                                                    <h3 class="property-card__title">Cresswell Residences</h3>
                                                    <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                        Central),Cresswell Residences</p>
                                                    <span class="property-card__location">Nearby: Dubai Mall </span>
                                                    <div class="property-card__features">
                                                        <ul>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bed.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bath.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/size.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                450 Sqft  / 120 Sqm
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="/properties.php" class="btnn-stretched">view more</a>
                                            </div>
                                        </div>

                                        <div class="swiper-slide category-rent">
                                            <div class="property-card">
                                                <div class="property-card__header">
                                                    <div class="property-card__figure">
                                                        <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-5.jpg" alt="property"
                                                            width="520" height="300" class="img-hack lazy-img">
                                                    </div>
                                                    <div class="property-card__button">
                                                        <span class="rectangle-btn rectangle-btn--white">view
                                                            more</span>
                                                    </div>
                                                </div>
                                                <div class="property-card__body">
                                                    <span class="property-card__small-title">Apartment</span>
                                                    <h3 class="property-card__title">Cresswell Residences</h3>
                                                    <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                        Central),Cresswell Residences</p>
                                                    <span class="property-card__location">Nearby: Dubai Mall </span>
                                                    <div class="property-card__features">
                                                        <ul>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bed.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bath.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/size.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                450 Sqft  / 120 Sqm
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="/properties.php" class="btnn-stretched">view more</a>
                                            </div>
                                        </div>

                                        <div class="swiper-slide category-rent">
                                            <div class="property-card">
                                                <div class="property-card__header">
                                                    <div class="property-card__figure">
                                                        <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-5.jpg" alt="property"
                                                            width="520" height="300" class="img-hack lazy-img">
                                                    </div>
                                                    <div class="property-card__button">
                                                        <span class="rectangle-btn rectangle-btn--white">view
                                                            more</span>
                                                    </div>
                                                </div>
                                                <div class="property-card__body">
                                                    <span class="property-card__small-title">Apartment</span>
                                                    <h3 class="property-card__title">Cresswell Residences</h3>
                                                    <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                        Central),Cresswell Residences</p>
                                                    <span class="property-card__location">Nearby: Dubai Mall </span>
                                                    <div class="property-card__features">
                                                        <ul>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bed.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bath.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/size.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                450 Sqft  / 120 Sqm
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="/properties.php" class="btnn-stretched">view more</a>
                                            </div>
                                        </div>

                                        <div class="swiper-slide category-rent">
                                            <div class="property-card">
                                                <div class="property-card__header">
                                                    <div class="property-card__figure">
                                                        <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-5.jpg" alt="property"
                                                            width="520" height="300" class="img-hack lazy-img">
                                                    </div>
                                                    <div class="property-card__button">
                                                        <span class="rectangle-btn rectangle-btn--white">view
                                                            more</span>
                                                    </div>
                                                </div>
                                                <div class="property-card__body">
                                                    <span class="property-card__small-title">Apartment</span>
                                                    <h3 class="property-card__title">Cresswell Residences</h3>
                                                    <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                        Central),Cresswell Residences</p>
                                                    <span class="property-card__location">Nearby: Dubai Mall </span>
                                                    <div class="property-card__features">
                                                        <ul>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bed.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bath.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/size.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                450 Sqft  / 120 Sqm
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="/properties.php" class="btnn-stretched">view more</a>
                                            </div>
                                        </div>

                                        <div class="swiper-slide category-rent">
                                            <div class="property-card">
                                                <div class="property-card__header">
                                                    <div class="property-card__figure">
                                                        <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-5.jpg" alt="property"
                                                            width="520" height="300" class="img-hack lazy-img">
                                                    </div>
                                                    <div class="property-card__button">
                                                        <span class="rectangle-btn rectangle-btn--white">view
                                                            more</span>
                                                    </div>
                                                </div>
                                                <div class="property-card__body">
                                                    <span class="property-card__small-title">Apartment</span>
                                                    <h3 class="property-card__title">Cresswell Residences</h3>
                                                    <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                        Central),Cresswell Residences</p>
                                                    <span class="property-card__location">Nearby: Dubai Mall </span>
                                                    <div class="property-card__features">
                                                        <ul>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bed.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/bath.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                02
                                                            </li>
                                                            <li>
                                                                <span class="icon">
                                                                    <img src="/assets/svg/size.svg" alt="bed icon"
                                                                        width="27" height="24" class="svg-convert">
                                                                </span>
                                                                450 Sqft  / 120 Sqm
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="/properties.php" class="btnn-stretched">view more</a>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-highlight__navigation__btns">
                            <div class="navigation-swiper">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <span class="seprator"></span>
                            <a href="javascript:;" class="btnn">
                                <span class="btnn__text">View All</span>
                                <span class="btnn__icon">
                                    <img src="/assets/svg/arrow-right.svg" alt="icon" width="28" height="28"
                                        class="svg-convert" />
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <!-- home about us -->
            <section class="about-us-sec section-py secondary-bg">
                <div class="container-s">
                    <div class="custom-row align-item-center">
                        <div class="col_12 col_lg_4">
                            <div class="h_ab_figure-lg img__observer ">
                                <img class="img-hack lazy-img" src="/assets/images/dot.jpg" data-src="/assets/images/home/about-lg.jpg" alt="Tallest building"
                                    width="570" height="780">
                            </div>
                        </div>
                        <div class="col_12 col_lg_5">
                            <div class="h_ab_center-panel  animate fadein-Up" data-delay="0.2s">
                                <div class="generic-panel">
                                    <span class="generic-panel__small__title">About us</span>
                                    <h2 class="text-capitalize">DLC Real estate</h2>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                                <p>It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                    recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.</p>
                                <a href="/about-us.php" class="btnn">
                                    <span class="btnn__text">explore more</span>
                                    <span class="btnn__icon">
                                        <img src="/assets/svg/arrow-right.svg" alt="icon" width="28" height="28"
                                            class="svg-convert" />
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col_12 col_lg_3 align-self-end">
                            <div class="h_ab_figure-sm img__observer">
                                <img class="img-hack lazy-img" src="/assets/images/dot.jpg" data-src="/assets/images/home/about-sm.jpg" alt="Tallest building"
                                    width="420" height="250">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-bg">
                    <img src="/assets/images/dot.jpg" data-src="/assets/images/home/about-bg.png" alt="background figure" width="425" height="617" class="lazy-img">
                </div>
            </section>


            <!-- latest properties -->
            <section class="latest-properties section-py primary-bg">
                <div class="container-s">
                    <div class="generic-panel generic-panel--center white-color animate fadein-Up" data-delay="0.2s">
                        <span class="generic-panel__small__title">property highlights</span>
                        <h2 class="text-capitalize">Latest Properties</h2>
                    </div>
                </div>
                <div class="latest-properties__main-wrapper">
                    <div class="btnn-group animate fadein-Up" data-delay="0.3s" data-filterSlideRef="latestPropertySwiper">
                        <button class="rectangle-btn rectangle-btn--white active" data-category="category-buy">Buy</button>
                        <button class="rectangle-btn rectangle-btn--white" data-category="category-rent">Rent</button>
                    </div>
                    <div class="latest-properties__slider">
                        <div id="latestPropertySwiper" class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-filter="category-rent">
                                    <div class="property-card">
                                        <div class="property-card__header">
                                            <div class="property-card__figure">
                                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-6.jpg" alt="property" width="520"
                                                    height="300" class="img-hack lazy-img">
                                            </div>
                                            <div class="property-card__button">
                                                <span class="rectangle-btn rectangle-btn--white">view
                                                    more</span>
                                            </div>
                                        </div>
                                        <div class="property-card__body">
                                            <span class="property-card__small-title">Apartment</span>
                                            <h3 class="property-card__title">Cresswell Residences</h3>
                                            <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                Central),Cresswell Residences</p>
                                            <span class="property-card__location">Nearby: Dubai Mall </span>
                                            <div class="property-card__features">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bed.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bath.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/size.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        450 Sqft  / 120 Sqm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="/properties.php" class="btnn-stretched">view more</a>
                                    </div>
                                </div>

                                <div class="swiper-slide" data-filter="category-rent">
                                    <div class="property-card">
                                        <div class="property-card__header">
                                            <div class="property-card__figure">
                                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-6.jpg" alt="property" width="520"
                                                    height="300" class="img-hack lazy-img">
                                            </div>
                                            <div class="property-card__button">
                                                <span class="rectangle-btn rectangle-btn--white">view
                                                    more</span>
                                            </div>
                                        </div>
                                        <div class="property-card__body">
                                            <span class="property-card__small-title">Apartment</span>
                                            <h3 class="property-card__title">Cresswell Residences</h3>
                                            <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                Central),Cresswell Residences</p>
                                            <span class="property-card__location">Nearby: Dubai Mall </span>
                                            <div class="property-card__features">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bed.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bath.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/size.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        450 Sqft  / 120 Sqm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="/properties.php" class="btnn-stretched">view more</a>
                                    </div>
                                </div>

                                <div class="swiper-slide" data-filter="category-buy" >
                                    <div class="property-card">
                                        <div class="property-card__header">
                                            <div class="property-card__figure">
                                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-7.jpg" alt="property" width="520"
                                                    height="300" class="img-hack lazy-img">
                                            </div>
                                            <div class="property-card__button">
                                                <span class="rectangle-btn rectangle-btn--white">view
                                                    more</span>
                                            </div>
                                        </div>
                                        <div class="property-card__body">
                                            <span class="property-card__small-title">Apartment</span>
                                            <h3 class="property-card__title">Cresswell Residences</h3>
                                            <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                Central),Cresswell Residences</p>
                                            <span class="property-card__location">Nearby: Dubai Mall </span>
                                            <div class="property-card__features">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bed.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bath.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/size.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        450 Sqft  / 120 Sqm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="/properties.php" class="btnn-stretched">view more</a>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-filter="category-buy" >
                                    <div class="property-card">
                                        <div class="property-card__header">
                                            <div class="property-card__figure">
                                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-7.jpg" alt="property" width="520"
                                                    height="300" class="img-hack lazy-img">
                                            </div>
                                            <div class="property-card__button">
                                                <span class="rectangle-btn rectangle-btn--white">view
                                                    more</span>
                                            </div>
                                        </div>
                                        <div class="property-card__body">
                                            <span class="property-card__small-title">Apartment</span>
                                            <h3 class="property-card__title">Cresswell Residences</h3>
                                            <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                Central),Cresswell Residences</p>
                                            <span class="property-card__location">Nearby: Dubai Mall </span>
                                            <div class="property-card__features">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bed.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bath.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/size.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        450 Sqft  / 120 Sqm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="/properties.php" class="btnn-stretched">view more</a>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-filter="category-buy" >
                                    <div class="property-card">
                                        <div class="property-card__header">
                                            <div class="property-card__figure">
                                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-7.jpg" alt="property" width="520"
                                                    height="300" class="img-hack lazy-img">
                                            </div>
                                            <div class="property-card__button">
                                                <span class="rectangle-btn rectangle-btn--white">view
                                                    more</span>
                                            </div>
                                        </div>
                                        <div class="property-card__body">
                                            <span class="property-card__small-title">Apartment</span>
                                            <h3 class="property-card__title">Cresswell Residences</h3>
                                            <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                Central),Cresswell Residences</p>
                                            <span class="property-card__location">Nearby: Dubai Mall </span>
                                            <div class="property-card__features">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bed.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bath.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/size.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        450 Sqft  / 120 Sqm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="/properties.php" class="btnn-stretched">view more</a>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-filter="category-buy" >
                                    <div class="property-card">
                                        <div class="property-card__header">
                                            <div class="property-card__figure">
                                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-7.jpg" alt="property" width="520"
                                                    height="300" class="img-hack lazy-img">
                                            </div>
                                            <div class="property-card__button">
                                                <span class="rectangle-btn rectangle-btn--white">view
                                                    more</span>
                                            </div>
                                        </div>
                                        <div class="property-card__body">
                                            <span class="property-card__small-title">Apartment</span>
                                            <h3 class="property-card__title">Cresswell Residences</h3>
                                            <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                Central),Cresswell Residences</p>
                                            <span class="property-card__location">Nearby: Dubai Mall </span>
                                            <div class="property-card__features">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bed.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bath.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/size.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        450 Sqft  / 120 Sqm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="/properties.php" class="btnn-stretched">view more</a>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-filter="category-buy" >
                                    <div class="property-card">
                                        <div class="property-card__header">
                                            <div class="property-card__figure">
                                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-7.jpg" alt="property" width="520"
                                                    height="300" class="img-hack lazy-img">
                                            </div>
                                            <div class="property-card__button">
                                                <span class="rectangle-btn rectangle-btn--white">view
                                                    more</span>
                                            </div>
                                        </div>
                                        <div class="property-card__body">
                                            <span class="property-card__small-title">Apartment</span>
                                            <h3 class="property-card__title">Cresswell Residences</h3>
                                            <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                Central),Cresswell Residences</p>
                                            <span class="property-card__location">Nearby: Dubai Mall </span>
                                            <div class="property-card__features">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bed.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bath.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/size.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        450 Sqft  / 120 Sqm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="/properties.php" class="btnn-stretched">view more</a>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-filter="category-buy" >
                                    <div class="property-card">
                                        <div class="property-card__header">
                                            <div class="property-card__figure">
                                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-7.jpg" alt="property" width="520"
                                                    height="300" class="img-hack lazy-img">
                                            </div>
                                            <div class="property-card__button">
                                                <span class="rectangle-btn rectangle-btn--white">view
                                                    more</span>
                                            </div>
                                        </div>
                                        <div class="property-card__body">
                                            <span class="property-card__small-title">Apartment</span>
                                            <h3 class="property-card__title">Cresswell Residences</h3>
                                            <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                Central),Cresswell Residences</p>
                                            <span class="property-card__location">Nearby: Dubai Mall </span>
                                            <div class="property-card__features">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bed.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bath.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/size.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        450 Sqft  / 120 Sqm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="/properties.php" class="btnn-stretched">view more</a>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-filter="category-buy" >
                                    <div class="property-card">
                                        <div class="property-card__header">
                                            <div class="property-card__figure">
                                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-7.jpg" alt="property" width="520"
                                                    height="300" class="img-hack lazy-img">
                                            </div>
                                            <div class="property-card__button">
                                                <span class="rectangle-btn rectangle-btn--white">view
                                                    more</span>
                                            </div>
                                        </div>
                                        <div class="property-card__body">
                                            <span class="property-card__small-title">Apartment</span>
                                            <h3 class="property-card__title">Cresswell Residences</h3>
                                            <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                Central),Cresswell Residences</p>
                                            <span class="property-card__location">Nearby: Dubai Mall </span>
                                            <div class="property-card__features">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bed.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bath.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/size.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        450 Sqft  / 120 Sqm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="/properties.php" class="btnn-stretched">view more</a>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-filter="category-buy" >
                                    <div class="property-card">
                                        <div class="property-card__header">
                                            <div class="property-card__figure">
                                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-7.jpg" alt="property" width="520"
                                                    height="300" class="img-hack lazy-img">
                                            </div>
                                            <div class="property-card__button">
                                                <span class="rectangle-btn rectangle-btn--white">view
                                                    more</span>
                                            </div>
                                        </div>
                                        <div class="property-card__body">
                                            <span class="property-card__small-title">Apartment</span>
                                            <h3 class="property-card__title">Cresswell Residences</h3>
                                            <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                Central),Cresswell Residences</p>
                                            <span class="property-card__location">Nearby: Dubai Mall </span>
                                            <div class="property-card__features">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bed.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bath.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/size.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        450 Sqft  / 120 Sqm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="/properties.php" class="btnn-stretched">view more</a>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-filter="category-buy" >
                                    <div class="property-card">
                                        <div class="property-card__header">
                                            <div class="property-card__figure">
                                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-7.jpg" alt="property" width="520"
                                                    height="300" class="img-hack lazy-img">
                                            </div>
                                            <div class="property-card__button">
                                                <span class="rectangle-btn rectangle-btn--white">view
                                                    more</span>
                                            </div>
                                        </div>
                                        <div class="property-card__body">
                                            <span class="property-card__small-title">Apartment</span>
                                            <h3 class="property-card__title">Cresswell Residences</h3>
                                            <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                Central),Cresswell Residences</p>
                                            <span class="property-card__location">Nearby: Dubai Mall </span>
                                            <div class="property-card__features">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bed.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bath.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/size.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        450 Sqft  / 120 Sqm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="/properties.php" class="btnn-stretched">view more</a>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-filter="category-buy" >
                                    <div class="property-card">
                                        <div class="property-card__header">
                                            <div class="property-card__figure">
                                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/property-7.jpg" alt="property" width="520"
                                                    height="300" class="img-hack lazy-img">
                                            </div>
                                            <div class="property-card__button">
                                                <span class="rectangle-btn rectangle-btn--white">view
                                                    more</span>
                                            </div>
                                        </div>
                                        <div class="property-card__body">
                                            <span class="property-card__small-title">Apartment</span>
                                            <h3 class="property-card__title">Cresswell Residences</h3>
                                            <p class="p property-card__desc ">Dubai, Dubai South (Dubai World
                                                Central),Cresswell Residences</p>
                                            <span class="property-card__location">Nearby: Dubai Mall </span>
                                            <div class="property-card__features">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bed.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/bath.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        02
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="/assets/svg/size.svg" alt="bed icon" width="27"
                                                                height="24" class="svg-convert">
                                                        </span>
                                                        450 Sqft  / 120 Sqm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="/properties.php" class="btnn-stretched">view more</a>
                                    </div>
                                </div>
                                

                                
                            </div>
                            <div class="latest-properties__navigation">
                                <div class="swiper-button-prev gold-swiper-btn "></div>
                                <div class="swiper-button-next gold-swiper-btn "></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- our partners -->
            <section class="section-py">
                <div class="container-s">
                    <div class="generic-panel generic-panel--center  animate fadein-Up" data-delay="0.2s">
                        <span class="generic-panel__small__title">Our Partners</span>
                        <h2 class="text-capitalize">We have collected the best real estate in dubai</h2>
                    </div>
                    <div class="our-partners-grid">
                        <a href="javascript:;" class="our-partners__item">
                            <div class="figure">
                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/our-partners/logo-1.png" alt="logo" width="234"
                                    height="79" class="lazy-img">
                            </div>
                        </a>
                        <a href="javascript:;" class="our-partners__item">
                            <div class="figure">
                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/our-partners/logo-2.png" alt="logo" width="234"
                                    height="79" class="lazy-img">
                            </div>
                        </a>
                        <a href="javascript:;" class="our-partners__item">
                            <div class="figure">
                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/our-partners/logo-3.png" alt="logo" width="234"
                                    height="79" class="lazy-img">
                            </div>
                        </a>
                        <a href="javascript:;" class="our-partners__item">
                            <div class="figure">
                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/our-partners/logo-4.png" alt="logo" width="234"
                                    height="79" class="lazy-img">
                            </div>
                        </a>
                        <a href="javascript:;" class="our-partners__item">
                            <div class="figure">
                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/our-partners/logo-5.png" alt="logo" width="234"
                                    height="79" class="lazy-img">
                            </div>
                        </a>
                        <a href="javascript:;" class="our-partners__item">
                            <div class="figure">
                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/our-partners/logo-6.png" alt="logo" width="234"
                                    height="79" class="lazy-img">
                            </div>
                        </a>
                        <a href="javascript:;" class="our-partners__item">
                            <div class="figure">
                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/our-partners/logo-7.png" alt="logo" width="234"
                                    height="79" class="lazy-img">
                            </div>
                        </a>
                        <a href="javascript:;" class="our-partners__item">
                            <div class="figure">
                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/our-partners/logo-8.png" alt="logo" width="234"
                                    height="79" class="lazy-img">
                            </div>
                        </a>
                        <a href="javascript:;" class="our-partners__item">
                            <div class="figure">
                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/our-partners/logo-9.png" alt="logo" width="234"
                                    height="79" class="lazy-img">
                            </div>
                        </a>
                        <a href="javascript:;" class="our-partners__item">
                            <div class="figure">
                                <img src="/assets/images/dot.jpg" data-src="/assets/images/home/our-partners/logo-10.png" alt="logo" width="234"
                                    height="79" class="lazy-img">
                            </div>
                        </a>



                    </div>
                </div>
            </section>


            <!-- contact us -->
            <section class="contact-us">
                <div class="container-s">
                    <div class="generic-panel white-color animate fadein-Up" data-delay="0.2s">
                        <h2 class="text-capitalize">Get in touch with us</h2>
                        <p>Let's connect and create meaningful partnerships together.</p>
                        <a href="/contact-us.php" class="btnn">
                            <span class="btnn__text">Contact us</span>
                            <span class="btnn__icon">
                                <img src="/assets/svg/arrow-right.svg" alt="icon" width="28" height="28"
                                    class="svg-convert" />
                            </span>
                        </a>
                    </div>
                </div>
                <div class="contact-us__figure">
                    <picture>
                        <source media="(min-width:768px)" srcset="/assets/images/home/contact-banner.jpg">
                        <img src="/assets/images/dot.jpg" data-src="/assets/images/home/contact-banner-mobile.jpg" alt="background figure" width="1920"
                            height="680" class="img-hack lazy-img">
                    </picture>
                </div>
            </section>


        </main>




        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>
        <!-- Swiper -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/choices.js@10.2.0/public/assets/scripts/choices.min.js"></script>

        <!-- home JS Files -->
        <script src="/assets/js/home.min.js"></script>

        

    </body>

</html>