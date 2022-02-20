@extends('userDashboard.master')


@section('title')
    You | Phone List
@endsection

@section('body')
    <div class="section-settings d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-4 section-sidebar">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <span class="text-uppercase">Personal Profile</span>
                    <a href="#" class="nav-link active" aria-current="page">
                        <h2 class="fs-4 m-0 fw-bold">You</h2>
                    </a>
                </li>
                <li class="nav-item mt-4">
                    <span class="text-uppercase">Admin Settings</span>
                    <a href="#" class="nav-link"> Manage Plan </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"> Users </a>
                </li>
                <li class="nav-item mt-4">
                    <span class="text-uppercase">System Activity</span>
                    <a href="#" class="nav-link">Exports</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"> Data Request History </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"> Credit Usage </a>
                </li>
            </ul>
        </div>
        <div class="section-main">
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
        </div>
    </div>
@endsection
