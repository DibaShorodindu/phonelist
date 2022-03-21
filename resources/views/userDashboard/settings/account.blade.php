@extends('userDashboard.settings.master')

@section('main')
    <section class="section-main">
        <div class="card u-box-shadow-2 m-4 border rounded-3">
            <h1 class="card-title p-4 text-capitalize">Account Info</h1>
            <div class="card-body p-4">
                <form action="">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fname" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lname" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="number" class="form-label"
                                >Phone Number</label
                                >
                                <input type="number" class="form-control" id="number" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <span class="form-span d-block" id="email"
                                >shamonti.haque98@gmail.com</span
                                >
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center">
                            <button type="button" class="btn btn-change mt-3">
                                <i class="bi bi-shield-lock"></i>
                                Change Email
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
