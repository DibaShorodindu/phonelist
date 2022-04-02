@extends('userDashboard.settings.master')

@section('main')
    <section class="section-main">
        <!-- START SECOND NAVBAR -->
        <section class="second-navbar">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="{{ route('current') }}" class="nav-link">Current Credit Usage</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('history') }}" class="nav-link active"
                    >Credit Usage History</a
                    >
                </li>
            </ul>
        </section>
        <!-- END SECOND NAVBAR -->

        <!-- START CREDIT HISTORY -->
        <section class="section-credit-history">
            <div class="container">
                <div class="row m-4">
                    <div class="col-md-2 col-4 d-flex justify-content-around">
                        <span> From </span>
                        <span>To</span>
                    </div>
                    <div class="col-md-12 ps-0">
                        <input
                            id="date-picker"
                            class="u-box-shadow-2"
                            type="text"
                            name="daterange"
                            value="01/01/2022 - 02/15/2022"
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card u-box-shadow-2 m-4 border rounded-3">
                            <div
                                class="card-title d-flex justify-content-between align-items-center"
                            >
                                <h3 class="p-4 text-capitalize">
                                    Historical Credit Usage
                                    <span> (Dec 21, 2021 - Jan 20, 2022) </span>
                                </h3>
                            </div>
                            <div
                                class="card-body py-5 mt-4 mb-5 d-flex flex-column align-items-center"
                            >
                                <span class="display-1">1</span>
                                <span class="text-secondary fw-bold">Credits</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CREDIT HISTORY -->
    </section>


    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
    ></script>

    <!-- CALENDAR JS -->
    <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"
    ></script>
    <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"
    ></script>
    <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"
    ></script>
    <script>
        $(function () {
            $('input[name="daterange"]').daterangepicker(
                {
                    opens: 'center',
                },
                function (start, end, label) {
                    console.log(
                        'A new date selection was made: ' +
                        start.format('YYYY-MM-DD') +
                        ' to ' +
                        end.format('YYYY-MM-DD')
                    );
                }
            );
        });
    </script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('/') }}adminAsset/assets/js/navbar.js"></script>
    <script src="{{ asset('/') }}adminAsset/assets/js/script.js"></script>


@endsection

