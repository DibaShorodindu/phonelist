<!-- START NAVBAR -->
<div class="container">
    <div class="row" id="home-navbar">
        <div class="navbar__logo">
            <a class="navbar-brand d-lg-flex" href="{{ route('/') }}">
                <img class="img-fluid" src="{{ asset('/') }}/adminAsset/assets/images/logo--company-name-dark.svg" alt="phone list" />
            </a>
        </div>

        <nav class="navbar navbar--center d-lg-flex d-none">
            <ul class="navbar__ul">
                <li class="navbar__li">
                    <a href="product.html" class="navbar__a"> Product </a>
                </li>
                <li class="navbar__li">
                    <a href="packages.html" class="navbar__a"> Pricing </a>
                </li>
                <li class="navbar__li">
                    <a href="https://blog.phonelist.io" class="navbar__a"> Blog </a>
                </li>
                <li class="navbar__li">
                    <a href="careers.html" class="navbar__a"> Careers </a>
                </li>
            </ul>
        </nav>
        <nav class="navbar navbar--right d-lg-flex d-none">
            <ul class="navbar__ul align-items-center">
                <li class="navbar__li">
                    <a href="{{ route('/phonelistUserLogin') }}" class="navbar__a" id="login"> Login </a>
                </li>

                <li class="navbar__li">
                    <a href="{{ route('/phonelistUserRegister') }}" class="btn btn-grad rounded-pill text-white">
                        Sign up for free
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- END NAVBAR -->
