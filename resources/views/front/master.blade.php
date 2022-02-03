<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="" />
    <meta name="keywords"
          content="phone number list, mobile number list, sales leads, mobile leads, data prospect, sales crm, contact database, contact details" />

    <title>@yield('title')</title>

@include('front.includes.css')
</head>

<body id="home">
<header>
    @include('front.includes.header')
</header>

<!-- START NAVBAR FOR SMALL SCREEN -->
@include('front.includes.smallScreen')
<!-- END NAVBAR FOR SMALL SCREEN -->
<main>

   @yield('main')
</main>

<!-- START FOOTER -->
@include('front.includes.footer')
<!-- END FOOTER -->

@include('front.includes.js')

<!-- TYPEWRITER JS -->
<script>
    let bannerText = document.getElementById('bannerText');

    let typewriter = new Typewriter(bannerText, {
        loop: false,
        delay: 50,
        cursor: ' ',
    });

    typewriter
        .typeString('Crush your sales numbers every quarter')
        .pauseFor(1500)
        // .deleteAll()
        .start();
</script>

<!-- ANIMATION JS -->
<script>
    AOS.init({
        once: true,
    });
</script>
</body>

</html>
