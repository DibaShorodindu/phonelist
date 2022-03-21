@extends('userDashboard.settings.master')

@section('main')
    <section class="section-main">
        <!-- START SECOND NAVBAR -->
        <section class="second-navbar">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="{{ route('current') }}" class="nav-link active"
                    >Current Credit Usage</a
                    >
                </li>
                <li class="nav-item">
                    <a href="{{ route('history') }}" class="nav-link">Credit Usage History</a>
                </li>
            </ul>
        </section>
        <!-- END SECOND NAVBAR -->

        <!-- START CURRENT CREDIT -->
        <section class="section-current-credit">
            <div class="card u-box-shadow-2 m-4 border rounded-3">
                <div
                    class="card-title d-flex justify-content-between align-items-center"
                >
                    <h3 class="p-4 text-capitalize">
                        Credits Usage <span> (Jan 21, 2022 - Feb 21, 2022) </span>
                    </h3>
                    <a
                        href="../upgrade.html"
                        type="button"
                        class="btn btn-access me-4"
                    >
                        Buy More Credits
                    </a>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="fs-3">
                                    Email Credits
                                    <i
                                        class="bi bi-question-circle-fill text-secondary"
                                    ></i>
                                    <p class="mt-4">
                                        You have used <span class="text-primary">0</span> of
                                        <span class="text-dark">80</span> available email
                                        credits this billing cycle.
                                    </p>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CURRENT CREDIT -->
    </section>
@endsection
