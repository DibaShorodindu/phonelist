<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="" />
    <meta
        name="keywords"
        content="phone number list, mobile number list, sales leads, mobile leads, data prospect, sales crm, contact database, contact details"
    />

    <title>Phone List</title>

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
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}adminAsset/assets/css/style.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}adminAsset/assets/images/icons/favicon.ico" />
</head>

<body>
<header></header>
<main class="d-flex">
    <!-- START LOGIN LEFT SIDE -->
    <section class="section-login--left">
        <div class="login-text-box row">
            <a class="col-12 company-logo" href="{{ route('/') }}">
                <img src="{{ asset('/') }}adminAsset/assets/images/logo--company-name-dark.svg" alt="logo" />
            </a>
            <div class="col-12">
                <a type="button" class="btn btn-home pt-3" href="{{ route('/') }}">
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
    <!-- END LOGIN LEFT SIDE -->

    <!-- START LOGIN RIGHT SIDE -->
    <section class="section-login--right d-flex flex-column">


        <!-- START LOGIN FORM -->
        <div class="login-form">
            <div class="card border-0 u-box-shadow-1 rounded-3">
                <div class="col-12 company-logo">
                    <img src="{{ asset('/') }}adminAsset/assets/images/logo--company-name-dark.svg" alt="logo" />
                </div>
                <div class="card-title d-flex">
                    <a href="{{ route('/phonelistUserLogin') }}" class="login p-4">Log in</a>
                    <a href="{{ route('/phonelistUserRegister') }}" class="signup p-4"
                    >Sign up <i class="bi bi-box-arrow-up-right ms-2"></i>
                    </a>
                </div>
                <div class="card-body p-5 pb-3">
                    <div class="card-title">
                        <div>
                            <a
                                type="button"
                                class="btn btn-google-login u-box-shadow-2"
                                href="{{ route('/auth/google') }}"
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
                                href="{{ url('auth/facebook') }}"
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
                    <form action="{{ route('/phonelistUserLoginAuth') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-5">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control u-box-shadow-2"
                                id="email"
                                placeholder="Enter Your Email"
                                required
                                name="email"
                            />
                        </div>
                        <div class="mb-5">
                            <label for="password" class="form-label">Password</label>
                            <input
                                type="password"
                                class="form-control u-box-shadow-2"
                                id="password"
                                placeholder="Enter Your Password"
                                required
                                name="password"
                            />
                            @if($message = Session::get('message'))
                                <div id="error-text">
                                    <i
                                        class="bi bi-exclamation-circle-fill text-danger pe-2"
                                    ></i>
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                </div>
                            @endif
                            <!-- An element to toggle between password visibility -->
                            <div class="input-group align-items-center my-1">
                                <input type="checkbox" onclick="showPassword()" />
                                <label for="checkbox" class="ps-2" style="line-height: 1">
                                    Show Password
                                </label>
                            </div>
                        </div>
                        <button
                            type="submit"
                            class="btn btn-login rounded-3 u-box-shadow-2 mb-5"
                        >
                            Log In
                        </button>
                        <div class="mb-4 form-check">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="check"
                                checked
                            />
                            <label class="form-check-label ms-3" for="check"
                            >Keep me signed in</label
                            >
                        </div>
                        <div class="card-footer">
                            <p>
                                Forgot your password?
                                <span id="reset-password">Reset It Here</span>
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
                    <form action="{{ route('forget.password.post') }}" method="POST">
                        @csrf
                        <div class="mb-5">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control u-box-shadow-2"
                                id="email"
                                placeholder="Type Your Email"
                                required
                                name="email"
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
                    <a href="privacy_policy.html">Privacy</a>
                    and <a href="terms-of-service.html">Terms</a>.
                </p>
            </div>
        </footer>
        <!-- END FOOTER -->
    </section>
    <!-- END LOGIN RIGHT SIDE -->
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
</body>
</html>
