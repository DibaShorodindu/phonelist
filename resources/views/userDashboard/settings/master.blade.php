@extends('userDashboard.master')


@section('title')
    You | Phone List
@endsection

@section('body')
    <section class="section-settings d-flex">
        <!-- START SIDEBAR -->
        <section class="d-flex flex-column flex-shrink-0 p-4 section-sidebar">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <span class="text-uppercase">Personal Profile</span>
                    <a
                        href="{{ route('account') }}"
                        class="nav-link"
                        aria-current="page"
                    >
                        <h2 class="fs-4 m-0 fw-bold">You</h2>
                    </a>
                </li>
                <li class="nav-item mt-4">
                    <form action="{{ route('managePlan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <span class="text-uppercase">Admin Settings</span>
                        <input hidden type="text" name="userId" value="{{ Auth::user()->id }}">
                        <button type="submit" class="nav-link"> Manage Plan </button>
                    </form>
                </li>
                <li class="nav-item mt-4">
                    <span class="text-uppercase">System Activity</span>
                    <a href="{{ route('exports') }}" class="nav-link">Exports</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('current') }}" class="nav-link"> Credit Usage </a>
                </li>
            </ul>
        </section>
        <!-- END SIDEBAR -->

        <!-- START MAIN -->
        @yield('main')
        <!-- END MAIN -->
    </section>
@endsection
