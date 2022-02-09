@extends('front.master')

@section('metaDescription')
    {{ $data->first_name.' '.$data->last_name }}'s Contact Details with mobile number and address from Phone List
@endsection


@section('title')
    {{ $data->first_name.' '.$data->last_name }}'s Contact Details | Phone List
@endsection

@section('main')
    <!-- START SEARCH BARS -->
    <section class="section-searchbar pt-md-5 pb-md-4 py-2 mt-md-0 mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 ms-auto">
                    <input type="text" name="search" id="searchPeople"
                           class="searchBar w-100 bg-white border-5 text-dark fw-normal" onkeyup="searchPeople()"
                           placeholder="Search Person by Name..." />
                </div>
                <div class="col-md-3 col-6">
                    <input type="text" name="search" id="searchPeopleCountry"
                           class="searchBar w-100 bg-white border-5 text-dark fw-normal" onkeyup="searchPeople()"
                           placeholder="Search Person by Country..." />
                </div>
            </div>
        </div>
    </section>
    <!-- END SEARCH BARS -->

    <!-- START PERSON SHORT DETAILS -->
    <section class="section-person-details user-div mt-4 px-0 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card u-box-shadow-1">
                        <div class="card-body">
                            <h1 class="card-title">{{ $data->first_name.' '.$data->last_name }}</h1>
                            <p class="card-text">{{ $data->location.' '.$data->country }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PERSON SHORT DETAILS -->
    <div class="container">
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
@endsection
