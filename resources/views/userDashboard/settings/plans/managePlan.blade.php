@extends('userDashboard.settings.master')

@section('main')
    <section class="section-main">
        <!-- START SECOND NAVBAR -->
        <section class="second-navbar">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="{{ route('managePlan') }}" class="nav-link active">Plan Overview</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('billing') }}" class="nav-link">Billing</a>
                </li>
            </ul>
        </section>
        <!-- END SECOND NAVBAR -->
        <section class="section-settings-plan">
            <div class="card u-box-shadow-2 m-4 border rounded-3">
                <div
                    class="card-title m-0 d-flex justify-content-between align-items-center"
                >
                    <h1 class="p-4 text-capitalize">Free Plan</h1>
                    <a
                        href="upgrade.html"
                        type="button"
                        class="btn btn-purple me-4"
                    >
                        Purchase Plan
                    </a>
                </div>
                <div class="card-body">
                    <div class="card-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <span> What's Included </span>
                                </div>
                                <div class="col-md-2 text-end">
                                    <span> Price </span>
                                </div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-md-4">
                                    <h3>Users</h3>
                                </div>
                                <div class="col-md-4">
                                    <p>1 user</p>
                                </div>
                                <div class="col-md-4 text-end">
                                    <p>$0/mo</p>
                                </div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-md-4">
                                    <h3>Credits</h3>
                                </div>
                                <div class="col-md-4">
                                    <p>30 Reward Credits</p>
                                    <p>50 Email Credits / mo</p>
                                </div>
                                <div class="col-md-4 text-end">
                                    <p>Free</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Monthly Total</h3>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-end">
                                    <p class="fw-bold">$0/mo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-settings-plan">
            <div class="card u-box-shadow-2 m-4 border rounded-3">
                <div
                    class="card-title d-flex justify-content-between align-items-center"
                >
                    <h3 class="p-4 text-capitalize">
                        Credits Usage <span> (Jan 21, 2022 - Feb 21, 2022) </span>
                    </h3>
                    <a
                        href="upgrade.html"
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
    </section>
@endsection
