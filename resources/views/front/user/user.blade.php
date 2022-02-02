<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}adminAsset/assets/css/style.css" />

    <title>Phone Number List</title>
    <link rel="shortcut icon" href="{{ asset('/') }}adminAsset/assets/images/icons/favicon.ico" />
</head>

<body>
<header>
    <!-- START NAVBAR -->
    <nav
        class="navbar navbar--category fixed-top navbar-expand-lg navbar-light border-bottom bg-white"
        id="sticky-nav"
    >
        <div class="container-fluid px-5 py-2">
            <a class="navbar-brand d-block ms-5 ps-5" href="../../index.html">
                <img
                    src="{{ asset('/') }}adminAsset/assets/images/logo--company-name-dark.png"
                    alt="logo"
                />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul
                    class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center py-2 mx-5 px-5"
                >
                    <li class="nav-item">
                        <a class="nav-link pe-4" aria-current="page" href="#"
                        >Product</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-4" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link py-0">
                            <button type="button" class="btn btn-grad px-4">
                                Create Free Account
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
</header>

<main>
    <div class="container">
        <!-- START PERSON SHORT DETAILS -->
        <section
            class="section-person-details user-div m-4 mt-md-5 u-padding-lg px-0 pb-0 mt-5"
        >
            <div class="card u-box-shadow-1 mt-5">
                <div class="card-body">
                    <h1 class="card-title">{{ $data->first_name.' '.$data->last_name }}</h1>
                    <h2 class="card-text">{{ $data->location.' '.$data->country }}</h2>
                </div>
            </div>
        </section>
        <!-- END PERSON SHORT DETAILS -->

        <div class="row">
            <div class="col-lg-8">
                <!-- START PERSON Contact Details -->
                <section class="section-contact user-details-div m-4 mt-4">
                    <div class="card user-details-div__card u-box-shadow-1">
                        <h3 class="card-title">{{ $data->first_name.' '.$data->last_name }}'s Contact Details</h3>
                        <div class="card-body">
                            <div class="contact-details__box row mt-5">
                                <div
                                    class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                                >
                                    <div class="circle-element">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                </div>

                                <div
                                    class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                                >
                                    <div
                                        class="contact-details--text col-lg-5 col-md-5 col-sm-6 mb-2"
                                    >
                                        <span>Email (Verified)</span>
                                        <a href="#"> s**@seoexparte.com </a>
                                    </div>

                                    <button
                                        type="button"
                                        class="contact-details--btn btn btn-grad col-lg-4 col-md-3 col-sm-5 col-8"
                                    >
                                        Get Email Address
                                    </button>
                                    <div class="col-lg-3"></div>
                                </div>
                            </div>

                            <div class="contact-details__box row mt-5">
                                <div
                                    class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                                >
                                    <div class="circle-element">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                </div>

                                <div
                                    class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                                >
                                    <div
                                        class="contact-details--text col-lg-5 col-md-5 col-sm-6 mb-2"
                                    >
                                        <span>Mobile Number</span>
                                        <a href="#"> (XXX) XXX-XXXX</a>
                                    </div>

                                    <button
                                        type="button"
                                        class="contact-details--btn btn btn-grad col-lg-4 col-md-3 col-sm-5 col-8"
                                    >
                                        Get Mobile Number
                                    </button>
                                    <div class="col-lg-3"></div>
                                </div>
                            </div>

                            <div class="contact-details__box row mt-5">
                                <div
                                    class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                                >
                                    <div class="circle-element">
                                        <i class="bi bi-facebook"></i>
                                    </div>
                                </div>

                                <div
                                    class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                                >
                                    <div
                                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                                    >
                                        <span>Facebook Profile</span>
                                        <a href="https://www.facebook.com/{{ $data->uid}}">
                                            https://www.facebook.com/{{ $data->uid}}
                                        </a>
                                    </div>

                                    <div class="col-lg-3"></div>
                                </div>
                            </div>

                            <div class="contact-details__box row mt-5">
                                <div
                                    class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                                >
                                    <div class="circle-element">
                                        <i class="bi bi-gender-ambiguous"></i>
                                    </div>
                                </div>

                                <div
                                    class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                                >
                                    <div
                                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                                    >
                                        <span>Gender</span>
                                        <p style="color: #5d6a7e">
                                            @if(!empty($data->gender))
                                            {{ $data->gender}}
                                            @else
                                                N/A
                                            @endif
                                        </p>
                                    </div>

                                    <div class="col-lg-3"></div>
                                </div>
                            </div>

                            <div class="contact-details__box row mt-5">
                                <div
                                    class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                                >
                                    <div class="circle-element">
                                        <i class="bi bi-yin-yang"></i>
                                    </div>
                                </div>

                                <div
                                    class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                                >
                                    <div
                                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                                    >
                                        <span>Relationship Status</span>
                                        <p style="color: #5d6a7e">
                                            @if(!empty( $data->relationship_status ))
                                                {{ $data->relationship_status }}
                                            @else
                                                N/A
                                            @endif
                                        </p>
                                    </div>

                                    <div class="col-lg-3"></div>
                                </div>
                            </div>

                            <div class="contact-details__box row mt-5">
                                <div
                                    class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                                >
                                    <div class="circle-element">
                                        <i class="bi bi-tools"></i>
                                    </div>
                                </div>

                                <div
                                    class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                                >
                                    <div
                                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                                    >
                                        <span>Work Place</span>
                                        <p style="color: #5d6a7e">
                                            @if(!empty( $data->work ))
                                                {{ $data->work}}
                                            @else
                                                N/A
                                            @endif
                                        </p>
                                    </div>

                                    <div class="col-lg-3"></div>
                                </div>
                            </div>

                            <div class="contact-details__box row mt-5">
                                <div
                                    class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                                >
                                    <div class="circle-element">
                                        <i class="bi bi-mortarboard-fill"></i>
                                    </div>
                                </div>

                                <div
                                    class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                                >
                                    <div
                                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                                    >
                                        <span>Last Education Year</span>
                                        <p style="color: #5d6a7e">
                                            @if(!empty( $data->education_last_year ))
                                                {{ $data->education_last_year}}
                                            @else
                                                N/A
                                            @endif
                                        </p>
                                        </p>
                                    </div>

                                    <div class="col-lg-3"></div>
                                </div>
                            </div>

                            <div class="contact-details__box row mt-5">
                                <div
                                    class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                                >
                                    <div class="circle-element">
                                        <i class="bi bi-pin-map-fill"></i>
                                    </div>
                                </div>

                                <div
                                    class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                                >
                                    <div
                                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                                    >
                                        <span>Current Address</span>
                                        <p style="color: #5d6a7e">
                                            @if(!empty( $data->location ))
                                                {{ $data->location.', '.$data->country }}
                                            @else
                                                N/A
                                            @endif
                                        </p>
                                    </div>

                                    <div class="col-lg-3"></div>
                                </div>
                            </div>

                            <div class="contact-details__box row mt-5">
                                <div
                                    class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                                >
                                    <div class="circle-element">
                                        <i class="bi bi-house-door"></i>
                                    </div>
                                </div>

                                <div
                                    class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                                >
                                    <div
                                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                                    >
                                        <span>Home Town</span>
                                        <p style="color: #5d6a7e">
                                            @if(!empty( $data->hometown ))
                                                {{ $data->hometown }}
                                            @else
                                                N/A
                                            @endif

                                        </p>
                                    </div>

                                    <div class="col-lg-3 col-md-3"></div>
                                </div>
                            </div>

                            <div class="contact-details__box row mt-5">
                                <div
                                    class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                                >
                                    <div class="circle-element">
                                        <i class="bi bi-globe2"></i>
                                    </div>
                                </div>

                                <div
                                    class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                                >
                                    <div
                                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                                    >
                                        <span>Country</span>
                                            <a href="{{ route('country', ['id' => $data->country]) }}">
                                                @if(!empty( $data->country ))
                                                    {{ $data->country }}
                                                @else
                                                    N/A
                                                @endif
                                            </a>

                                    </div>

                                    <div class="col-lg-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END PERSON Contact Details -->

                <!-- START PERSON Frequently Asked Questions -->
                <section class="section-faq user-details-div">
                    <div class="row">
                        <div class="card user-details-div__card u-box-shadow-1">
                            <h3 class="card-title">
                                Frequently Asked Questions about {{ $data->first_name.' '.$data->last_name }}
                            </h3>

                            <div class="card-body">
                                <div class="faq" id="faq">
                                    <!-- FAQ 01 -->
                                    <div class="faq-item my-4">
                                        <h2 class="faq-header" id="headingOne">
                                            <button
                                                class="faq-button"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne"
                                                aria-expanded="true"
                                                aria-controls="collapseOne"
                                            >
                                                <i class="bi bi-caret-down-square-fill"></i>
                                                <span> Where does {{ $data->first_name.' '.$data->last_name }} work? </span>
                                            </button>
                                        </h2>
                                        <div
                                            id="collapseOne"
                                            class="faq-collapse collapse"
                                            aria-labelledby="headingOne"
                                            data-bs-parent="#faq"
                                        >
                                            <div class="faq-body">
                                                {{ $data->first_name.' '.$data->last_name }} works for {{ $data->work }}.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 02 -->
                                    <div class="faq-item my-4">
                                        <h2 class="faq-header" id="headingTwo">
                                            <button
                                                class="faq-button"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo"
                                                aria-expanded="true"
                                                aria-controls="collapseTwo"
                                            >
                                                <i class="bi bi-caret-down-square-fill"></i>

                                                <span
                                                >What is {{ $data->first_name.' '.$data->last_name }}'s email address?
                            </span>
                                            </button>
                                        </h2>
                                        <div
                                            id="collapseTwo"
                                            class="faq-collapse collapse"
                                            aria-labelledby="headingTwo"
                                            data-bs-parent="#faq"
                                        >
                                            <div class="faq-body">
                                                {{ $data->first_name.' '.$data->last_name }}'s email address is .
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 03 -->
                                    <div class="faq-item my-4">
                                        <h2 class="faq-header" id="headingThree">
                                            <button
                                                class="faq-button"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree"
                                                aria-expanded="true"
                                                aria-controls="collapseThree"
                                            >
                                                <i class="bi bi-caret-down-square-fill"></i>
                                                <span>
                              What is {{ $data->first_name.' '.$data->last_name }}'s business email address?
                            </span>
                                            </button>
                                        </h2>
                                        <div
                                            id="collapseThree"
                                            class="faq-collapse collapse"
                                            aria-labelledby="headingThree"
                                            data-bs-parent="#faq"
                                        >
                                            <div class="faq-body">
                                                {{ $data->first_name.' '.$data->last_name }}'s business email address is.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END PERSON Current Company Details -->
            </div>

            <div class="col-lg-4">
                <!-- START PERSON SIMILAR CONTACTS -->
                <section
                    class="section-similar-contacts user-details-div m-4 mt-lg-4 mt-0"
                >
                    <div class="card user-details-div__card u-box-shadow-1">
                        <h3 class="card-title">Similar Contacts</h3>
                        <div class="card-body p-0">

                            @foreach($userData->take(6) as $userFetchData)
                                <div class="similar-contacts-details__box pt-4">
                                    <a class="similar-contacts-details--name" href="{{ route('user', ['id' => $userFetchData->id]) }}"
                                    >{{ $userFetchData->first_name.' '. $userFetchData->last_name }}</a
                                    >
                                    <p class="similar-contacts-details--job">
                                        @if(!empty( $userFetchData->work ))
                                            {{ $userFetchData->work }}
                                        @else
                                            N/A
                                        @endif

                                    </p>
                                    <div class="similar-contacts-details--contact">
                                        <a
                                            class="similar-contacts-details--contact-phone"
                                            href="packages.html"
                                        >
                                            <i class="bi bi-telephone-fill"></i>Phone
                                        </a>
                                        <a
                                            class="similar-contacts-details--contact-email ms-5"
                                            href="packages.html"
                                        >
                                            <i class="bi bi-envelope-fill"></i>Email
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- END PERSON CSIMILAR CONTACTS -->
            </div>
        </div>
    </div>
</main>

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

<!-- Custom JS -->
<script src="{{ asset('/') }}adminAsset/assets/js/navbar.js"></script>
<script src="{{ asset('/') }}adminAsset/assets/js/script.js"></script>
</body>
</html>
