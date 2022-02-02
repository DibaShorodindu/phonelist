<?php
$connect = mysqli_connect("localhost", "root", "", "phonelist");
$query = "SELECT * FROM phone_lists";
$result = mysqli_query($connect, $query);
$rowcount = mysqli_num_rows( $result );
$query2 = "SELECT location FROM phone_lists WHERE location IS NOT NULL";
$result2 = mysqli_query($connect, $query2);
$rowcount2 = mysqli_num_rows( $result2 );
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />

    <!-- Font awesome Icons -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet"
    />

    <!-- Animate CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- SwiperJS CSS-->
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}adminAsset/assets/css/style.css" />

    <title>Phone Number List</title>

    <link rel="shortcut icon" href="{{ asset('/') }}adminAsset/assets/images/icons/favicon.ico" />
</head>

<body id="home">
<header>
    <!-- START NAVBAR -->
    <div class="container">
        <div class="row" id="home-navbar">
            <div class="navbar__logo">
                <a class="navbar-brand d-lg-flex" href="index.html">
                    <img src="{{ asset('/') }}adminAsset/assets/images/logo--company-name-dark.png" alt="logo" />
                </a>
            </div>

            <nav class="navbar navbar--center d-lg-flex d-none">
                <ul class="navbar__ul">
                    <li class="navbar__li">
                        <a href="product.html" class="navbar__a"> Product </a>
                    </li>
                    <li class="navbar__li">
                        <a href="packages.html" class="navbar__a"> Pricing </a>
                    </li>
                    <li class="navbar__li">
                        <a href="https://blog.phonelist.io" class="navbar__a"> Blog </a>
                    </li>
                    <li class="navbar__li">
                        <a href="careers.html" class="navbar__a"> Careers </a>
                    </li>
                </ul>
            </nav>
            <nav class="navbar navbar--right d-lg-flex d-none">
                <ul class="navbar__ul align-items-center">
                    <li class="navbar__li">
                        <a href="login.html" class="navbar__a" id="login"> Login </a>
                    </li>

                    <li class="navbar__li">
                        <a
                            href="signup.html"
                            class="btn btn-grad rounded-pill text-white"
                        >
                            Sign up for free
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END NAVBAR -->
</header>

<!-- START NAVBAR FOR SMALL SCREEN -->
<div class="d-lg-none d-flex">
    <div class="navbar__logo ms-md-5 ms-2 ps-5">
        <a class="navbar-brand d-flex" href="index.html">
            <img src="{{ asset('/') }}adminAsset/assets/images/logo--company-name-dark.png" alt="logo" />
        </a>
    </div>
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item">
                    <a href="product.html" class="navigation__link">Product</a>
                </li>
                <li class="navigation__item">
                    <a href="packages.html" class="navigation__link">Pricing</a>
                </li>
                <li class="navigation__item">
                    <a href="https://blog.phonelist.io" class="navigation__link"
                    >Blog</a
                    >
                </li>
                <li class="navigation__item">
                    <a href="#" class="navigation__link">Careers</a>
                </li>
                <li class="navigation__item">
                    <a href="login.html" class="navigation__link">Login</a>
                </li>
                <li class="navigation__item d-flex justify-content-center mt-5">
                    <a href="signup.html" class="btn btn-grad rounded-pill">
                        Sign up for free
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- END NAVBAR FOR SMALL SCREEN -->

<main>
    <!-- START BANNER -->
    <section class="section-banner u-padding-lg">
        <div class="container">
            <div class="row my-3">
                <div class="bg-pink"></div>
                <div class="col-lg-6 text-lg-start text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="heading--sub pb-3">
                                The
                                <strong>sales intelligence and engagement</strong> platform
                                to
                            </h1>
                            <h2 class="heading--main pb-4" id="bannerText">
                                Crush your sales numbers every quarter
                            </h2>

                            <p>
                                Use our data of over 220 million contacts and 30 million
                                companies to find and engage your future customers at the
                                right time with the right message in our all-in-one platform
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-10 col-md-6 col-12 mx-lg-0 mx-auto">
                            <div class="input-group py-4 mx-lg-0 mx-auto">
                                <input
                                    type="email"
                                    class="form-control form-control--signup"
                                    placeholder="Enter your email"
                                    aria-label="Enter your email..."
                                    aria-describedby="button-signup"
                                />
                                <button
                                    class="btn btn-grad rounded-end-pill px-md-4 px-2"
                                    type="button"
                                    id="button-signup"
                                >
                                    Sign up for free
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-10 col-md-6 col-7 mx-auto mx-lg-0">
                            <div class="divider mt-4 mb-3 mx-lg-0 mx-auto">
                                <div class="divider--line me-5"></div>
                                <span>OR</span>
                                <div class="divider--line ms-5"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-10 col-md-6 col-8 mx-auto mx-lg-0">
                            <div class="google-signup mx-lg-0 mx-auto">
                                <a
                                    type="button"
                                    class="btn btn-google-login u-box-shadow-2"
                                    href="#"
                                >
                                    <img
                                        src="{{ asset('/') }}adminAsset/assets/images/icons/google.svg"
                                        alt="google logo"
                                        class="me-2"
                                    />
                                    Sign up with google
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-lg-flex banner-bg d-none">
                    <img
                        src="{{ asset('/') }}adminAsset/assets/images/banner.svg"
                        alt="banner"
                        class="banner-bg--img"
                    />
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->

    <!-- START SERVICES -->
    <section class="section-services bg-light u-padding-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5 mb-4">
                    <h3
                        class="section-title text-center text-uppercase"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                        Our Services
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 px-lg-5 px-5">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="bi bi-currency-exchange"></i>
                            <h4 class="card-title mb-3">Target with laser precision</h4>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Praesentium molestiae, veritatis in iusto consequuntur
                                corporis, eaque minima provident eveniet obcaecati fugiat.
                                Fugit delectus in voluptates vel saepe, beatae voluptate
                                eum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-lg-5 px-5 mt-md-0 mt-5">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="bi bi-currency-exchange"></i>
                            <h4 class="card-title mb-3">Target with laser precision</h4>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Praesentium molestiae, veritatis in iusto consequuntur
                                corporis, eaque minima provident eveniet obcaecati fugiat.
                                Fugit delectus in voluptates vel saepe, beatae voluptate
                                eum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-lg-5 px-5 mt-md-0 mt-5">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="bi bi-currency-exchange"></i>
                            <h4 class="card-title mb-3">Target with laser precision</h4>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Praesentium molestiae, veritatis in iusto consequuntur
                                corporis, eaque minima provident eveniet obcaecati fugiat.
                                Fugit delectus in voluptates vel saepe, beatae voluptate
                                eum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SERVICES -->

    <!-- START SERVICE01 DETAILS -->
    <section class="section-analyze u-padding-lg">
        <div class="container">
            <div class="row" style="overflow-x: hidden">
                <div
                    class="col-md-6 pe-5 d-flex flex-column justify-content-center"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                >
                    <h2 class="section-title mb-5">
                        Make data-driven sales engagement decisions
                    </h2>
                    <p class="section-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Perspiciatis nam doloribus quisquam vero illum odit voluptas,
                        commodi cum minima libero et culpa porro sapiente officiis nihil
                        dolor, quae corrupti facere.
                    </p>
                    <a href="signup.html" class="btn-txt mt-3">
                        Sign up for free →
                    </a>
                </div>
                <div
                    class="col-md-6 p-5 mt-5 mt-md-0"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                    data-aos-delay="300"
                >
                    <img
                        src="{{ asset('/') }}adminAsset/assets/images/service01.svg"
                        class="img-fluid"
                        alt="service illustration"
                    />
                </div>
            </div>
        </div>
    </section>
    <!-- END SERVICE01 DETAILS -->

    <!-- START COUNTER -->
    <section class="section-counter bg-light u-padding-lg">
        <div class="row">
            <div class="col-md-5">
                <div class="card border-0 bg-transparent">
                    <div class="card-body text-md-start mb-md-0 mb-5">
                        <h4 class="card-title">
                            Trusted by over 1M sales users worldwide
                        </h4>
                    </div>
                </div>
            </div>
            <div
                class="col-md-7 d-flex align-items-center justify-content-center"
            >
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <div class="card border-0 bg-transparent">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <span class="counter" data-count="{{ $rowcount }}">0</span>
                                </h4>
                                <p class="card-text">mobile numbers</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6">
                        <div class="card border-0 bg-transparent">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <span class="counter" data-count="{{ $rowcount2 }}"> 0 </span>
                                </h4>
                                <p class="card-text">addresses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 offset-lg-0 offset-3">
                        <div class="card border-0 bg-transparent">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <span class="counter" data-count="1000">0</span>
                                </h4>
                                <p class="card-text">paying customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END COUNTER -->

    <!-- START SERVICE02 DETAILS -->
    <section class="section-analyze u-padding-lg">
        <div class="container">
            <div class="row" style="overflow-x: hidden">
                <div
                    class="col-md-6 p-5"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                    data-aos-delay="300"
                >
                    <img
                        src="{{ asset('/') }}adminAsset/assets/images/service01.svg"
                        class="img-fluid"
                        alt="service illustration"
                    />
                </div>
                <div
                    class="col-md-6 ps-5 d-flex flex-column justify-content-center"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                    data-aos-delay="300"
                >
                    <h2 class="section-title mb-5">
                        Automatically enrich your CRM with the most accurate data
                    </h2>
                    <p class="section-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Perspiciatis nam doloribus quisquam vero illum odit voluptas,
                        commodi cum minima libero et culpa porro sapiente officiis nihil
                        dolor, quae corrupti facere.
                    </p>
                    <a href="signup.html" class="btn-txt mt-3">
                        Sign up for free →
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END SERVICE02 DETAILS -->

    <!-- START TESTIMONIAL -->
    <section class="section-testimonial bg-light u-padding-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3
                        class="section-title text-center text-uppercase"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                        Customers love the ease <br />
                        and simplicity
                    </h3>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-md-12">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img
                                        class="card-img-top img-fluid rounded-circle"
                                        src="{{ asset('/') }}adminAsset/assets/images/user01.jpg"
                                        alt="User01 Image"
                                    />

                                    <div class="card-body">
                                        <blockquote class="card-text">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit. Delectus labore reiciendis eveniet optio
                                            corrupti.
                                        </blockquote>
                                        <blockquote class="card-text">
                                            - Maliha Mustafa
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img
                                        class="card-img-top img-fluid rounded-circle"
                                        src="{{ asset('/') }}adminAsset/assets/images/user02.jpg"
                                        alt="User01 Image"
                                    />

                                    <div class="card-body">
                                        <blockquote class="card-text">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit. Delectus labore reiciendis eveniet optio
                                            corrupti.
                                        </blockquote>
                                        <blockquote class="card-text">
                                            - Shawn Mendes
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img
                                        class="card-img-top img-fluid rounded-circle"
                                        src="{{ asset('/') }}adminAsset/assets/images/user03.jpg"
                                        alt="User01 Image"
                                    />

                                    <div class="card-body">
                                        <blockquote class="card-text">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit. Delectus labore reiciendis eveniet optio
                                            corrupti.
                                        </blockquote>
                                        <blockquote class="card-text">
                                            - Maliha Mustafa
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            ...
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TESTIMONIAL -->

    <!-- START CALL TO ACTION -->
    <section class="section-cta u-padding-lg">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 text-center">
                    <div class="row">
                        <div class="offset-lg-0 col-lg-12 col-md-8 offset-md-2">
                            <h2
                                class="section-title pb-4"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                            >
                                Reach the right person with the right message at the right
                                time.
                            </h2>

                            <p>
                                Get started for free, then add your whole team. You can
                                always talk to sales if you’re interested in advanced plans.
                            </p>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10 col-md-6 col-10 mx-lg-0 mx-auto">
                            <div class="input-group py-4 mx-lg-0 mx-auto">
                                <input
                                    type="email"
                                    class="form-control form-control--signup"
                                    placeholder="Enter your email"
                                    aria-label="Enter your email..."
                                    aria-describedby="button-signup"
                                />
                                <button
                                    class="btn btn-grad rounded-end-pill px-md-4 px-2"
                                    type="button"
                                    id="button-signup"
                                >
                                    Sign up for free
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10 col-md-6 col-7 mx-auto mx-lg-0">
                            <div class="divider mt-4 mb-3 mx-lg-0 mx-auto">
                                <div class="divider--line me-5"></div>
                                <span>OR</span>
                                <div class="divider--line ms-5"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10 col-md-6 col-8 mx-auto mx-lg-0">
                            <div class="google-signup mx-lg-0 mx-auto">
                                <a
                                    type="button"
                                    class="btn btn-google-login u-box-shadow-2"
                                    href="#"
                                >
                                    <img
                                        src="{{ asset('/') }}adminAsset/assets/images/icons/google.svg"
                                        alt="google logo"
                                        class="me-2"
                                    />
                                    Sign up with google
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CALL TO ACTION -->

    <!-- START CATAGORIES -->
    <section class="section-categories bg-light u-padding-lg">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-12 border-bottom">
                    <h5 class="sub-heading">
                        Browse Phone Number List's Directories
                    </h5>
                </div>
            </div>
            <div class="row py-5 px-3">
                <div class="col-md-6 pe-4">
                    <div class="d-flex align-items-center border-bottom pb-3 mb-4">
                        <div class="circle-element circle-element--person">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <span class="sub-heading">Person Search</span>
                    </div>
                    <div>
                        <a href="{{ route('category', ['id' => 'A'])  }}" class="blue-link ">A</a>
                        <a href="{{ route('category', ['id' => 'B'])  }}" class="blue-link">B</a>
                        <a href="{{ route('category', ['id' => 'C'])  }}" class="blue-link">C</a>
                        <a href="{{ route('category', ['id' => 'D'])  }}" class="blue-link">D</a>
                        <a href="{{ route('category', ['id' => 'E'])  }}" class="blue-link">E</a>
                        <a href="{{ route('category', ['id' => 'F'])  }}" class="blue-link">F</a>
                        <a href="{{ route('category', ['id' => 'G'])  }}" class="blue-link">G</a>
                        <a href="{{ route('category', ['id' => 'H'])  }}" class="blue-link">H</a>
                        <a href="{{ route('category', ['id' => 'I'])  }}" class="blue-link">I</a>
                        <a href="{{ route('category', ['id' => 'J'])  }}" class="blue-link">J</a>
                        <a href="{{ route('category', ['id' => 'K'])  }}" class="blue-link">K</a>
                        <a href="{{ route('category', ['id' => 'L'])  }}" class="blue-link">L</a>
                        <a href="{{ route('category', ['id' => 'M'])  }}" class="blue-link">M</a>
                        <a href="{{ route('category', ['id' => 'N'])  }}" class="blue-link">N</a>
                        <a href="{{ route('category', ['id' => 'O'])  }}" class="blue-link">O</a>
                        <a href="{{ route('category', ['id' => 'P'])  }}" class="blue-link">P</a>
                        <a href="{{ route('category', ['id' => 'Q'])  }}l" class="blue-link">Q</a>
                        <a href="{{ route('category', ['id' => 'R'])  }}" class="blue-link">R</a>
                        <a href="{{ route('category', ['id' => 'S'])  }}" class="blue-link">S</a>
                        <a href="{{ route('category', ['id' => 'T'])  }}" class="blue-link">T</a>
                        <a href="{{ route('category', ['id' => 'U'])  }}" class="blue-link">U</a>
                        <a href="{{ route('category', ['id' => 'V'])  }}" class="blue-link">V</a>
                        <a href="{{ route('category', ['id' => 'W'])  }}" class="blue-link">W</a>
                        <a href="{{ route('category', ['id' => 'X'])  }}" class="blue-link">X</a>
                        <a href="{{ route('category', ['id' => 'Y'])  }}" class="blue-link">Y</a>
                        <a href="{{ route('category', ['id' => 'Z'])  }}" class="blue-link">Z</a>

                    </div>
                </div>
                <div class="col-md-6 ps-md-4 mt-md-0 mt-5">
                    <div class="d-flex align-items-center border-bottom pb-3 mb-4">
                        <div class="circle-element circle-element--company">
                            <i class="bi bi-briefcase-fill"></i>
                        </div>
                        <span class="sub-heading">People Search for Country</span>
                    </div>
                    <div class="country-dropdown">
                        <select id="country" name="country" class="col-6
                        //onchange ="window.location.href=this.options[this.selectedIndex].value;"
                                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);"
                        >
                            <option value="{{ route('country', ['id' => 'Afghanistan']) }}">Afghanistan</option>
                            <option value="{{ route('country', ['id' => 'Åland Islands']) }}" >Åland Islands</option>
                            <option value="{{ route('country', ['id' => 'Albania']) }}" >Albania</option>
                            <option value="{{ route('country', ['id' => 'Algeria']) }}" >Algeria</option>
                            <option value="{{ route('country', ['id' => 'American Samoa']) }}">American Samoa</option>
                            <option value=" {{ route('country', ['id' => 'Andorra']) }}">Andorra</option>
                            <option value="{{ route('country', ['id' => 'Angola']) }}">Angola</option>
                            <option value="{{ route('country', ['id' => 'Anguilla']) }}" >Anguilla</option>
                            <option value="{{ route('country', ['id' => 'Antarctica']) }}">Antarctica</option>
                            <option value="{{ route('country', ['id' => 'Antigua and Barbuda']) }}" >
                                Antigua and Barbuda
                            </option>
                            <option value="{{ route('country', ['id' => 'Argentina']) }}" >Argentina</option>
                            <option value="{{ route('country', ['id' => 'Armenia']) }}" >Armenia</option>
                            <option value="{{ route('country', ['id' => 'Aruba']) }}" >Aruba</option>
                            <option value="{{ route('country', ['id' => 'Australia']) }}" >Australia</option>
                            <option value="{{ route('country', ['id' => 'Austria']) }}"  >Austria</option>
                            <option value="{{ route('country', ['id' => 'Azerbaijan']) }}">Azerbaijan</option>
                            <option value="{{ route('country', ['id' => 'Bahamas']) }}"  >Bahamas</option>
                            <option value="{{ route('country', ['id' => 'Bahrain']) }}"  >Bahrain</option>
                            <option value="{{ route('country', ['id' => 'Bangladesh']) }}"  >Bangladesh</option>
                            <option value="{{ route('country', ['id' => 'Barbados']) }}">Barbados</option>
                            <option value="{{ route('country', ['id' => 'Belarus']) }}" >Belarus</option>
                            <option value="{{ route('country', ['id' => 'Belgium']) }}">Belgium</option>
                            <option value="{{ route('country', ['id' => 'Belize']) }}">Belize</option>
                            <option value="{{ route('country', ['id' => 'Benin']) }}" >Benin</option>
                            <option value="{{ route('country', ['id' => 'Bermuda']) }}"  >Bermuda</option>
                            <option value="{{ route('country', ['id' => 'Bhutan']) }}"  >Bhutan</option>
                            <option value="{{ route('country', ['id' => 'Bolivia']) }}" >Bolivia</option>
                            <option value="{{ route('country', ['id' => 'Bosnia and Herzegovina']) }}"  >
                                Bosnia and Herzegovina
                            </option>
                            <option value="{{ route('country', ['id' => 'Botswana']) }}" >Botswana</option>
                            <option value="{{ route('country', ['id' => 'Bouvet Island']) }}" >Bouvet Island</option>
                            <option value="{{ route('country', ['id' => 'Brazil']) }}">Brazil</option>
                            <option value="{{ route('country', ['id' => 'British Indian Ocean Territory']) }}" >
                                British Indian Ocean Territory
                            </option>
                            <option value="{{ route('country', ['id' => 'Brunei Darussalam']) }}"  >
                                Brunei Darussalam
                            </option>
                            <option value="{{ route('country', ['id' => 'Bulgaria']) }}">Bulgaria</option>
                            <option value="{{ route('country', ['id' => 'Burkina Faso']) }}">Burkina Faso</option>
                            <option value="{{ route('country', ['id' => 'Burundi']) }}" >Burundi</option>
                            <option value="{{ route('country', ['id' => 'Cambodia']) }}" >Cambodia</option>
                            <option value="{{ route('country', ['id' => 'Cameroon']) }}"  >Cameroon</option>
                            <option value="{{ route('country', ['id' => 'Canada']) }}"  >Canada</option>
                            <option value="{{ route('country', ['id' => 'Cape Verde']) }}">Cape Verde</option>
                            <option value="{{ route('country', ['id' => 'Cayman Islands']) }}" >Cayman Islands</option>
                            <option value="{{ route('country', ['id' => 'Central African Republic']) }}">
                                Central African Republic
                            </option>
                            <option value="{{ route('country', ['id' => 'Chad']) }}"  >Chad</option>
                            <option value="{{ route('country', ['id' => 'Chile']) }}">Chile</option>
                            <option value="{{ route('country', ['id' => 'China']) }}">China</option>
                            <option value="{{ route('country', ['id' => 'Christmas Island']) }}" >Christmas Island</option>
                            <option value="{{ route('country', ['id' => 'Cocos (Keeling) Islands']) }}">
                                Cocos (Keeling) Islands
                            </option>
                            <option value="{{ route('country', ['id' => 'Colombia']) }}" >Colombia</option>
                            <option value="{{ route('country', ['id' => 'Comoros']) }}" >Comoros</option>
                            <option value="{{ route('country', ['id' => 'Congo']) }}">Congo</option>
                            <option value="{{ route('country', ['id' => 'Congo, The Democratic Republic of The']) }}"   >
                                Congo, The Democratic Republic of The
                            </option>
                            <option value="{{ route('country', ['id' => 'Cook Islands']) }}">Cook Islands</option>
                            <option value="{{ route('country', ['id' => 'Costa Rica']) }}"  >Costa Rica</option>
                            <option value="{{ route('country', ['id' => 'Cote D ivoire']) }}">Cote D'ivoire</option>
                            <option value="{{ route('country', ['id' => 'Croatia']) }}">Croatia</option>
                            <option value="{{ route('country', ['id' => 'Cuba']) }}" >Cuba</option>
                            <option value="{{ route('country', ['id' => 'Cyprus']) }}" >Cyprus</option>
                            <option value="{{ route('country', ['id' => 'Czech Republic']) }}" >Czech Republic</option>
                            <option value="{{ route('country', ['id' => 'Denmark']) }}" >Denmark</option>
                            <option value="{{ route('country', ['id' => 'Djibouti']) }}">Djibouti</option>
                            <option value="{{ route('country', ['id' => 'Dominica']) }}" >Dominica</option>
                            <option value="{{ route('country', ['id' => 'Dominican Republic']) }}"  >
                                Dominican Republic
                            </option>
                            <option value="{{ route('country', ['id' => 'Ecuador']) }}" >Ecuador</option>
                            <option value="{{ route('country', ['id' => 'Egypt']) }}" >Egypt</option>
                            <option value="{{ route('country', ['id' => 'El Salvador']) }}"  >El Salvador</option>
                            <option value="{{ route('country', ['id' => 'Equatorial Guinea']) }}">
                                Equatorial Guinea
                            </option>
                            <option value="{{ route('country', ['id' => 'Eritrea']) }}" >Eritrea</option>
                            <option value="{{ route('country', ['id' => 'Estonia']) }}"  >Estonia</option>
                            <option value="{{ route('country', ['id' => 'Ethiopia']) }}"  >Ethiopia</option>
                            <option value="{{ route('country', ['id' => 'Falkland Islands (Malvinas)']) }}"  >
                                Falkland Islands (Malvinas)
                            </option>
                            <option value="{{ route('country', ['id' => 'Faroe Islands']) }}" >Faroe Islands</option>
                            <option value="{{ route('country', ['id' => 'Fiji']) }}"  >Fiji</option>
                            <option value="{{ route('country', ['id' => 'Finland']) }}" >Finland</option>
                            <option value="{{ route('country', ['id' => 'France']) }}"  >France</option>
                            <option value="{{ route('country', ['id' => 'French Guiana']) }}"  >French Guiana</option>
                            <option value="{{ route('country', ['id' => 'French Polynesia']) }}" >French Polynesia</option>
                            <option value="{{ route('country', ['id' => 'French Southern Territories']) }}"  >
                                French Southern Territories
                            </option>
                            <option value="{{ route('country', ['id' => 'Gabon']) }}" >Gabon</option>
                            <option value="{{ route('country', ['id' => 'Gambia']) }}" >Gambia</option>
                            <option value="{{ route('country', ['id' => 'Georgia']) }}">Georgia</option>
                            <option value="{{ route('country', ['id' => 'Germany']) }}" >Germany</option>
                            <option value="{{ route('country', ['id' => 'Ghana']) }}"  >Ghana</option>
                            <option value="{{ route('country', ['id' => 'Gibraltar']) }}"  >Gibraltar</option>
                            <option value="{{ route('country', ['id' => 'Greece']) }}"  >Greece</option>
                            <option value="{{ route('country', ['id' => 'Greenland']) }}"  >Greenland</option>
                            <option value="{{ route('country', ['id' => 'Grenada']) }}" >Grenada</option>
                            <option value="{{ route('country', ['id' => 'Guadeloupe']) }}" >Guadeloupe</option>
                            <option value="{{ route('country', ['id' => 'Guam']) }}"  >Guam</option>
                            <option value="{{ route('country', ['id' => 'Guatemala']) }}"  >Guatemala</option>
                            <option value="{{ route('country', ['id' => 'Guernsey']) }}" >Guernsey</option>
                            <option value="{{ route('country', ['id' => 'Guinea']) }}" >Guinea</option>
                            <option value="{{ route('country', ['id' => 'Guinea-bissau']) }}" >Guinea-bissau</option>
                            <option value="{{ route('country', ['id' => 'Guyana']) }}"  >Guyana</option>
                            <option value="{{ route('country', ['id' => 'Haiti']) }}"  >Haiti</option>
                            <option value="{{ route('country', ['id' => 'Heard Island and Mcdonald Islands']) }}" >
                                Heard Island and Mcdonald Islands
                            </option>
                            <option value="{{ route('country', ['id' => 'Holy See (Vatican City State)']) }}">
                                Holy See (Vatican City State)
                            </option>
                            <option value="{{ route('country', ['id' => 'Honduras']) }}">Honduras</option>
                            <option value="{{ route('country', ['id' => 'Hong Kong']) }}"  >Hong Kong</option>
                            <option value="{{ route('country', ['id' => 'Hungary']) }}"  >Hungary</option>
                            <option value="{{ route('country', ['id' => 'Iceland']) }}" >Iceland</option>
                            <option value="{{ route('country', ['id' => 'India']) }}" >India</option>
                            <option value="{{ route('country', ['id' => 'Indonesia']) }}">Indonesia</option>
                            <option value="{{ route('country', ['id' => 'Iran, Islamic Republic of']) }}" >
                                Iran, Islamic Republic of
                            </option>
                            <option value="{{ route('country', ['id' => 'Iraq']) }}" >Iraq</option>
                            <option value="{{ route('country', ['id' => 'Ireland']) }}" >Ireland</option>
                            <option value="{{ route('country', ['id' => 'Isle of Man']) }}" >Isle of Man</option>
                            <option value="{{ route('country', ['id' => 'Israel']) }}" >Israel</option>
                            <option value="{{ route('country', ['id' => 'Italy']) }}" >Italy</option>
                            <option value="{{ route('country', ['id' => 'Jamaica']) }}" >Jamaica</option>
                            <option value="{{ route('country', ['id' => 'Japan']) }}"  >Japan</option>
                            <option value="{{ route('country', ['id' => 'Jersey']) }}" >Jersey</option>
                            <option value="{{ route('country', ['id' => 'Jordan']) }}" >Jordan</option>
                            <option value="{{ route('country', ['id' => 'Kazakhstan']) }}">Kazakhstan</option>
                            <option value="{{ route('country', ['id' => 'Kenya']) }}">Kenya</option>
                            <option value="{{ route('country', ['id' => 'Kiribati']) }}" >Kiribati</option>
                            <option value="{{ route('country', ['id' => 'Korea, Democratic Peoples Republic of']) }}" >
                                Korea, Democratic People's Republic of
                            </option>
                            <option value="{{ route('country', ['id' => 'Korea, Republic of']) }}">
                                Korea, Republic of
                            </option>
                            <option value="{{ route('country', ['id' => 'Kuwait']) }}">Kuwait</option>
                            <option value="{{ route('country', ['id' => 'Kyrgyzstan']) }}" >Kyrgyzstan</option>
                            <option value="{{ route('country', ['id' => 'Lao Peoples Democratic Republic']) }}">
                                Lao People's Democratic Republic
                            </option>
                            <option value="{{ route('country', ['id' => 'Latvia']) }}" >Latvia</option>
                            <option value="{{ route('country', ['id' => 'Lebanon']) }}">Lebanon</option>
                            <option value="{{ route('country', ['id' => 'Lesotho']) }}">Lesotho</option>
                            <option value="{{ route('country', ['id' => 'Liberia']) }}" >Liberia</option>
                            <option value="{{ route('country', ['id' => 'Libyan Arab Jamahiriya']) }}"  >
                                Libyan Arab Jamahiriya
                            </option>
                            <option value="{{ route('country', ['id' => 'Liechtenstein']) }}" >Liechtenstein</option>
                            <option value="{{ route('country', ['id' => 'Lithuania']) }}" >Lithuania</option>
                            <option value="{{ route('country', ['id' => 'Luxembourg']) }}" >Luxembourg</option>
                            <option value="{{ route('country', ['id' => 'Macao']) }}" >Macao</option>
                            <option
                                value="{{ route('country', ['id' => 'Macedonia, The Former Yugoslav Republic of']) }}"
                            >
                                Macedonia, The Former Yugoslav Republic of
                            </option>
                            <option value="{{ route('country', ['id' => 'Madagascar']) }}" >Madagascar</option>
                            <option value="{{ route('country', ['id' => 'Malawi']) }}"  >Malawi</option>
                            <option value="{{ route('country', ['id' => 'Malaysia']) }}" >Malaysia</option>
                            <option value="{{ route('country', ['id' => 'Maldives']) }}" >Maldives</option>
                            <option value="{{ route('country', ['id' => 'Mali']) }}" >Mali</option>
                            <option value="{{ route('country', ['id' => 'Malta']) }}" >Malta</option>
                            <option value="{{ route('country', ['id' => 'Marshall Islands']) }}"  >Marshall Islands</option>
                            <option value="{{ route('country', ['id' => 'Martinique']) }}"  >Martinique</option>
                            <option value="{{ route('country', ['id' => 'Mauritania']) }}"  >Mauritania</option>
                            <option value="{{ route('country', ['id' => 'Mauritius']) }}"  >Mauritius</option>
                            <option value="{{ route('country', ['id' => 'Mayotte']) }}"  >Mayotte</option>
                            <option value="{{ route('country', ['id' => 'Mexico']) }}" >Mexico</option>
                            <option value="{{ route('country', ['id' => 'Micronesia, Federated States of']) }}"  >
                                Micronesia, Federated States of
                            </option>
                            <option value="{{ route('country', ['id' => 'Moldova, Republic of']) }}" >
                                Moldova, Republic of
                            </option>
                            <option value="{{ route('country', ['id' => 'Monaco']) }}" >Monaco</option>
                            <option value="{{ route('country', ['id' => 'Mongolia']) }}">Mongolia</option>
                            <option value="{{ route('country', ['id' => 'Montenegro']) }}" >Montenegro</option>
                            <option value="{{ route('country', ['id' => 'Montserrat']) }}" >Montserrat</option>
                            <option value="{{ route('country', ['id' => 'Morocco']) }}" >Morocco</option>
                            <option value="{{ route('country', ['id' => 'Mozambique']) }}" >Mozambique</option>
                            <option value="{{ route('country', ['id' => 'Myanmar']) }}"  >Myanmar</option>
                            <option value="{{ route('country', ['id' => 'Namibia']) }}"  >Namibia</option>
                            <option value="{{ route('country', ['id' => 'Nauru']) }}" >Nauru</option>
                            <option value="{{ route('country', ['id' => 'Nepal']) }}" >Nepal</option>
                            <option value="{{ route('country', ['id' => 'Netherlands']) }}"  >Netherlands</option>
                            <option value="{{ route('country', ['id' => 'Netherlands Antilles']) }}"  >
                                Netherlands Antilles
                            </option>
                            <option value="{{ route('country', ['id' => 'New Caledonia']) }}" >New Caledonia</option>
                            <option value="{{ route('country', ['id' => 'New Zealand']) }}"  >New Zealand</option>
                            <option value="{{ route('country', ['id' => 'Nicaragua']) }}" >Nicaragua</option>
                            <option value="{{ route('country', ['id' => 'Niger']) }}">Niger</option>
                            <option value="{{ route('country', ['id' => 'Nigeria']) }}" >Nigeria</option>
                            <option value="{{ route('country', ['id' => 'Niue']) }}">Niue</option>
                            <option value="{{ route('country', ['id' => 'Norfolk Island']) }}" >Norfolk Island</option>
                            <option value="{{ route('country', ['id' => 'Northern Mariana Islands']) }}"  >
                                Northern Mariana Islands
                            </option>
                            <option value="{{ route('country', ['id' => 'Norway']) }}" >Norway</option>
                            <option value="{{ route('country', ['id' => 'Oman']) }}" >Oman</option>
                            <option value="{{ route('country', ['id' => 'Pakistan']) }}"  >Pakistan</option>
                            <option value="{{ route('country', ['id' => 'Palau']) }}" >Palau</option>
                            <option value="{{ route('country', ['id' => 'Palestinian Territory, Occupied']) }}"  >
                                Palestinian Territory, Occupied
                            </option>
                            <option value="{{ route('country', ['id' => 'Panama']) }}">Panama</option>
                            <option value="{{ route('country', ['id' => 'Papua New Guinea']) }}" >Papua New Guinea</option>
                            <option value="{{ route('country', ['id' => 'Paraguay']) }}">Paraguay</option>
                            <option value="{{ route('country', ['id' => 'Peru']) }}" >Peru</option>
                            <option value="{{ route('country', ['id' => 'Philippines']) }}">Philippines</option>
                            <option value="{{ route('country', ['id' => 'Pitcairn']) }}">Pitcairn</option>
                            <option value="{{ route('country', ['id' => 'Poland']) }}" >Poland</option>
                            <option value="{{ route('country', ['id' => 'Portugal']) }}"  >Portugal</option>
                            <option value="{{ route('country', ['id' => 'Puerto Rico']) }}" >Puerto Rico</option>
                            <option value="{{ route('country', ['id' => 'Qatar']) }}"  >Qatar</option>
                            <option value="{{ route('country', ['id' => 'Reunion']) }}"  >Reunion</option>
                            <option value="{{ route('country', ['id' => 'Romania']) }}"  >Romania</option>
                            <option value="{{ route('country', ['id' => 'Russian Federation']) }}"  >
                                Russian Federation
                            </option>
                            <option value="{{ route('country', ['id' => 'Rwanda']) }}" >Rwanda</option>
                            <option value="{{ route('country', ['id' => 'Saint Helena']) }}" >Saint Helena</option>
                            <option value="{{ route('country', ['id' => 'Saint Kitts and Nevis']) }}" >
                                Saint Kitts and Nevis
                            </option>
                            <option value="{{ route('country', ['id' => 'Saint Lucia']) }}" >Saint Lucia</option>
                            <option value="{{ route('country', ['id' => 'Saint Pierre and Miquelon']) }}"  >
                                Saint Pierre and Miquelon
                            </option>
                            <option value="{{ route('country', ['id' => 'Saint Vincent and The Grenadines']) }}"  >
                                Saint Vincent and The Grenadines
                            </option>
                            <option value="{{ route('country', ['id' => 'Samoa']) }}"  >Samoa</option>
                            <option value="{{ route('country', ['id' => 'San Marino']) }}"  >San Marino</option>
                            <option value="{{ route('country', ['id' => 'Sao Tome and Principe']) }}"  >
                                Sao Tome and Principe
                            </option>
                            <option value="{{ route('country', ['id' => 'Saudi Arabia']) }}"  >Saudi Arabia</option>
                            <option value="{{ route('country', ['id' => 'Senegal']) }}" >Senegal</option>
                            <option value="{{ route('country', ['id' => 'Serbia']) }}" >Serbia</option>
                            <option value="{{ route('country', ['id' => 'Seychelles']) }}"  >Seychelles</option>
                            <option value="{{ route('country', ['id' => 'Sierra Leone']) }}" >Sierra Leone</option>
                            <option value="{{ route('country', ['id' => 'Singapore']) }}"  >Singapore</option>
                            <option value="{{ route('country', ['id' => 'Slovakia']) }}"  >Slovakia</option>
                            <option value="{{ route('country', ['id' => 'Slovenia']) }}"  >Slovenia</option>
                            <option value="{{ route('country', ['id' => 'Solomon Islands']) }}"  >Solomon Islands</option>
                            <option value="{{ route('country', ['id' => 'Somalia']) }}"  >Somalia</option>
                            <option value="{{ route('country', ['id' => 'South Africa']) }}"  >South Africa</option>
                            <option
                                value="{{ route('country', ['id' => 'South Georgia and The South Sandwich Islands']) }}"
                            >
                                South Georgia and The South Sandwich Islands
                            </option>
                            <option value="{{ route('country', ['id' => 'Spain']) }}" >Spain</option>
                            <option value="{{ route('country', ['id' => 'Sri Lanka']) }}" >Sri Lanka</option>
                            <option value="{{ route('country', ['id' => 'Sudan']) }}" >Sudan</option>
                            <option value="{{ route('country', ['id' => 'Suriname']) }}" >Suriname</option>
                            <option value="{{ route('country', ['id' => 'Svalbard and Jan Mayen']) }}"  >
                                Svalbard and Jan Mayen
                            </option>
                            <option value="{{ route('country', ['id' => 'Swaziland']) }}" >Swaziland</option>
                            <option value="{{ route('country', ['id' => 'Sweden']) }}"  >Sweden</option>
                            <option value="{{ route('country', ['id' => 'Switzerland']) }}" >Switzerland</option>
                            <option value="{{ route('country', ['id' => 'Syrian Arab Republic']) }}"  >
                                Syrian Arab Republic
                            </option>
                            <option value="{{ route('country', ['id' => 'Taiwan']) }}">Taiwan</option>
                            <option value="{{ route('country', ['id' => 'Tajikistan']) }}" >Tajikistan</option>
                            <option value="{{ route('country', ['id' => 'Tanzania, United Republic of']) }}">
                                Tanzania, United Republic of
                            </option>
                            <option value="{{ route('country', ['id' => 'Thailand']) }}" >Thailand</option>
                            <option value="{{ route('country', ['id' => 'Timor-leste']) }}" >Timor-leste</option>
                            <option value="{{ route('country', ['id' => 'Togo']) }}"  >Togo</option>
                            <option value="{{ route('country', ['id' => 'Tokelau']) }}"  >Tokelau</option>
                            <option value="{{ route('country', ['id' => 'Tonga']) }}"  >Tonga</option>
                            <option value="{{ route('country', ['id' => 'Trinidad and Tobago']) }}" >
                                Trinidad and Tobago
                            </option>
                            <option value="{{ route('country', ['id' => 'Tunisia']) }}" >Tunisia</option>
                            <option value="{{ route('country', ['id' => 'Turkey']) }}" >Turkey</option>
                            <option value="{{ route('country', ['id' => 'Turkmenistan']) }}"  >Turkmenistan</option>
                            <option value="{{ route('country', ['id' => 'Turks and Caicos Islands']) }}" >
                                Turks and Caicos Islands
                            </option>
                            <option value="{{ route('country', ['id' => 'Tuvalu']) }}">Tuvalu</option>
                            <option value="{{ route('country', ['id' => 'Uganda']) }}"  >Uganda</option>
                            <option value="{{ route('country', ['id' => 'Ukraine']) }}"  >Ukraine</option>
                            <option value="{{ route('country', ['id' => 'United Arab Emirates']) }}"  >
                                United Arab Emirates
                            </option>
                            <option value="{{ route('country', ['id' => 'United Kingdom']) }}" >United Kingdom</option>
                            <option value="{{ route('country', ['id' => 'United States']) }}"  >United States</option>
                            <option value="{{ route('country', ['id' => 'United States Minor Outlying Islands']) }}" >
                                United States Minor Outlying Islands
                            </option>
                            <option value="{{ route('country', ['id' => 'Uruguay']) }}">Uruguay</option>
                            <option value="{{ route('country', ['id' => 'Uzbekistan']) }}" >Uzbekistan</option>
                            <option value="{{ route('country', ['id' => 'Vanuatu']) }}"  >Vanuatu</option>
                            <option value="{{ route('country', ['id' => 'Venezuela']) }}"  >Venezuela</option>
                            <option value="{{ route('country', ['id' => 'Viet Nam']) }}"  >Viet Nam</option>
                            <option value="{{ route('country', ['id' => 'Virgin Islands, British']) }}" >
                                Virgin Islands, British
                            </option>
                            <option value="{{ route('country', ['id' => 'Virgin Islands, U.S.']) }}"  >
                                Virgin Islands, U.S.
                            </option>
                            <option value="{{ route('country', ['id' => 'Wallis and Futuna']) }}"  >
                                Wallis and Futuna
                            </option>
                            <option value="{{ route('country', ['id' => 'Western Sahara']) }}"  >Western Sahara</option>
                            <option value="{{ route('country', ['id' => 'Yemen']) }}" >Yemen</option>
                            <option value="{{ route('country', ['id' => 'Zambia']) }}" >Zambia</option>
                            <option value="{{ route('country', ['id' => 'Zimbabwe']) }}"  >Zimbabwe</option>
                        </select>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CATAGORIES -->
</main>

<!-- START FOOTER -->
<footer class="footer pt-5 bg-light">
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-3 pl-5 mb-lg-0 mb-5">
                <a href="index.html">
                    <img
                        class="img-fluid footer__logo"
                        src="{{ asset('/') }}adminAsset/assets/images/logo--company-name-dark.png"
                        alt="logo"
                    />
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 pl-md-0 pb-3 ps-md-0 ps-4">
                <h5 class="footer-title">ABOUT</h5>
                <ul class="pt-3">
                    <li><a href="about.html">About us</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                    <li><a href="http://phonelist.io/forum/">Forum</a></li>
                    <li><a href="http://help.phonelist.io/">Help</a></li>
                </ul>
            </div>
            <div
                class="col-lg-4 col-md-4 col-sm-6 p-md-0 pb-3 ps-md-0 ps-4 mt-md-0 mt-4"
            >
                <h5 class="footer-title">OUR PARTNERS</h5>

                <div class="row pe-5">
                    <div class="col-md-5 col-6 mt-3">
                        <a href="https://www.latestdatabase.com/">
                            <img
                                src="{{ asset('/') }}adminAsset/assets/images/latest-database--logo.png"
                                class="img-fluid partner-logo"
                                alt="latestdatabase logo"
                            />
                        </a>
                    </div>
                    <div class="col-md-5 col-6 mt-3">
                        <a href="https://www.bcellphonelist.com/">
                            <img
                                src="{{ asset('/') }}adminAsset/assets/images/Brother Phone Number List--logo.png"
                                class="img-fluid partner-logo"
                                alt="latestdatabase logo"
                            />
                        </a>
                    </div>
                    <div class="col-md-5 col-6 mt-3">
                        <a href="http://www.photoeditorph.com/">
                            <img
                                src="{{ asset('/') }}adminAsset/assets/images/phollipines-photo-editor--logo.png"
                                class="img-fluid partner-logo"
                                alt="Philippines Photo Editor logo"
                            />
                        </a>
                    </div>
                    <div class="col-md-5 col-6 mt-3">
                        <a href="https://www.mplists.com/">
                            <img
                                src="{{ asset('/') }}adminAsset/assets/images/mplists--logo.png"
                                class="img-fluid partner-logo"
                                alt="Mp List logo"
                            />
                        </a>
                    </div>
                    <div class="col-md-5 col-6 mx-md-auto mt-3">
                        <a href="http://www.seoexpartebd.com/">
                            <img
                                src="{{ asset('/') }}adminAsset/assets/images/seo-exparte-logo.png"
                                class="img-fluid partner-logo"
                                alt="SEO Exparte Bangladesh logo"
                            />
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="col-lg-3 col-md-4 col-sm-6 pb-lg-5 pb-3 ps-md-0 ps-4 mt-md-0 mt-4"
            >
                <div class="span pb-3">
                    <h5 class="footer-title">SOCIAL MEDIA</h5>
                </div>
                <div class="span fsocial">
                    Follow us on social media to find out the latest updates on our
                    progress.
                </div>
                <div class="social-media pt-3">
                    <a href="https://www.facebook.com/Phonelistio-111559994765583">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/Phonelistio">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a
                        href="https://www.youtube.com/channel/UCIYmVIkqTG1oi79AWTeVLDQ"
                    >
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/phone-list-05b32a230/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.instagram.com/phonelist.io/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <hr class="line" />
        </div>
        <div class="row bottom-line">
            <div class="col-md-4 text-md-left text-center">
            <span class="copy"
            >&#169;2022 Phonelist.io All rights reserved.</span
            >
            </div>

            <div class="col-md-8 mt-md-0 mt-4">
                <ul class="text-center m-auto terms">
                    <li><a href="terms.html">Terms of service</a></li>
                    <li><a href="privacy_policy.html">Privacy Policy</a></li>
                    <li><a href="refund.html">Refund Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<!-- Bootstrap JS -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>

<!-- jQuery -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
></script>

<!-- ANIMATION JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Custom JS -->
<script src="{{ asset('/') }}adminAsset/assets/js/typewriter.js"></script>
<script src="{{ asset('/') }}adminAsset/assets/js/counter.js"></script>
<script src="{{ asset('/') }}adminAsset/assets/js/testimonial.js"></script>
<script src="{{ asset('/') }}adminAsset/assets/js/navbar.js"></script>
<script src="{{ asset('/') }}adminAsset/assets/js/script.js"></script>

<!-- TYPEWRITER JS -->
<script>
    let bannerText = document.getElementById('bannerText');

    let typewriter = new Typewriter(bannerText, {
        loop: false,
        delay: 50,
        cursor: ' ',
    });

    typewriter
        .typeString('Crush your sales numbers every quarter')
        .pauseFor(1500)
        // .deleteAll()
        .start();
</script>

<!-- ANIMATION JS -->
<script>
    AOS.init({
        once: true,
    });
</script>
</body>
</html>
