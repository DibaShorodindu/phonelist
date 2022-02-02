<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
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
            href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
        />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}adminAsset/assets/css/style.css" />

        <title>Lidata</title>
        <link rel="shortcut icon" href="{{ asset('/') }}adminAsset/assets/images/icons/favicon.ico" />


    </head>
    <body>
        <div id="app">


            <main class="d-flex" >
                <!-- START LOGIN LEFT SIDE -->
                <section class="section-login--left">
                    <div class="login-text-box row">
                        <a class="col-12 company-logo" href="index.html">
                            <img src="{{ asset('/') }}adminAsset/assets/images/logo--company-name.png" alt="logo" />
                        </a>
                        <div class="col-12">
                            <a type="button" class="btn btn-home pt-3" href="index.html">
                                Back to the homepage
                            </a>
                        </div>
                    </div>

                    <!-- START BACKGROUND ANIMATION -->
                    <div id="stars"></div>
                    <div id="stars2"></div>
                    <div id="stars3"></div>
                    <!-- END BACKGROUND ANIMATION -->
                </section>
                <div class="section-login--right d-flex flex-column">
                    <div class="col-12 company-logo">
                        <img src="{{ asset('/') }}adminAsset/assets/images/logo--company-name-dark.png" alt="logo" />
                    </div>
                    <!-- START LOGIN FORM -->
                    <div class="login-form">
                        <div class="card border-0 u-box-shadow-1 rounded-3">
                            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                                <div class="container">



                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">


                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="card-title d-flex">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <a class="login p-4" href="{{ route('login') }}">{{ __('Log in') }}</a>
                                    @endif

                                    @if (Route::has('register'))
                                        <a class="signup p-4" href="{{ route('register') }}">{{ __('Sign up') }}
                                            <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </div>
                            <div class="card-body p-5 pb-3">
                                <div class="card-title">
                                    <div>
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
                                            Log in with google
                                        </a>
                                        <a
                                            type="button"
                                            class="btn btn-facebook-login u-box-shadow-2 mt-4"
                                            href="#"
                                        >
                                            <i class="bi bi-facebook me-2"></i>
                                            Log in with facebook
                                        </a>
                                    </div>
                                    <div class="divider mt-4 mb-3">
                                        <div class="divider--line me-5"></div>
                                        <div>OR</div>
                                        <div class="divider--line ms-5"></div>
                                    </div>
                                </div>


                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="mb-5">
                                                <label for="email" class="form-label">{{ __('Email Address') }}</label>


                                                    <input id="email" type="email" class="form-control u-box-shadow-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror

                                            </div>

                                            <div class="mb-5">
                                                <label for="password" class="form-label">{{ __('Password') }}</label>


                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                            </div>




                                                    <button type="submit" class="btn btn-login rounded-3 u-box-shadow-2 mb-5">
                                                        {{ __('Log In') }}
                                                    </button>
                                                    <div class="mb-4 form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label ms-3" for="remember">
                                                            {{ __('Keep me signed in') }}
                                                        </label>

                                                    </div>
                                                    <div class="card-footer">
                                                        <p>
                                                            Forgot your password?
                                                            <span id="reset-password">
                                                            @if (Route::has('password.request'))
                                                                <a href="{{ route('password.request') }}">
                                                                    {{ __('Reset It Here') }}
                                                                </a>
                                                            @endif
                                                            </span>
                                                        </p>

                                                    </div>

                                        </form>

                            </div>
                        </div>
                    </div>
                    <!-- END LOGIN FORM -->

                    <!-- START RESET PASSWORD FORM -->
                    <div class="reset-form hide">
                        <div class="card border-0 u-box-shadow-1 rounded-3">
                            <div class="card-body p-5 pb-3">
                                <div class="card-title">
                                    <div>
                                        <h1>Reset Your Password</h1>
                                        <h2>
                                            Please enter your email address below to which we can send
                                            you instructions.
                                        </h2>
                                    </div>
                                </div>
                                <form action="">
                                    <div class="mb-5">
                                        <label for="email" class="form-label">Email</label>
                                        <input
                                            type="email"
                                            class="form-control u-box-shadow-2"
                                            id="email"
                                            placeholder="Type Your Email"
                                            required
                                        />
                                    </div>
                                    <div class="mb-5">
                                        <label for="retypeEmail" class="form-label"
                                        >Confirm Email</label
                                        >
                                        <input
                                            type="email"
                                            class="form-control u-box-shadow-2"
                                            id="retypeEmail"
                                            placeholder="Re-type Your Email"
                                            required
                                        />
                                    </div>

                                    <button
                                        type="submit"
                                        class="btn btn-login rounded-3 u-box-shadow-2 mb-5"
                                    >
                                        Send Instructions
                                    </button>

                                    <div class="card-footer">
                                        <p>
                                            Have an account?
                                            <span id="login-here">Login Here</span>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END RESET PASSWORD FORM -->

                    <!-- START FOOTER -->
                    <footer>
                        <div class="section-footer">
                            <p>2022 All Rights Reserved.</p>
                            <p>
                                <a href="privacy.html">Privacy</a>
                                and <a href="terms.html">Terms</a>.
                            </p>
                        </div>
                    </footer>
                </div>
                </section>

            </main>
            <!-- Custom JS -->
            <script src="{{ asset('/') }}adminAsset/assets/js/login.js"></script>
            <script src="{{ asset('/') }}adminAsset/assets/js/script.js"></script>

            <!-- Bootstrap JS -->
            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"
            ></script>
        </div>
    </body>
</html>
