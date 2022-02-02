<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
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
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />

    <!-- Animate CSS -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}adminAsset/assets/css/style.css" />

    <title>Phone Number List</title>
    <link rel="shortcut icon" href="{{ asset('/') }}adminAsset/assets/images/icons/favicon.ico" />
</head>

<body>
<header>
    <!-- START NAVBAR -->
    <nav
        class="navbar navbar--category fixed-top navbar-expand-lg navbar-light border-bottom bg-white"
        id="sticky-nav"
    >
        <div class="container-fluid px-5 py-2">
            <a class="navbar-brand d-block ms-5 ps-5" href="../../index.html">
                <img
                    src="{{ asset('/') }}adminAsset/assets/images/logo--company-name-dark.png"
                    alt="logo"
                />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul
                    class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center py-2 mx-5 px-5"
                >
                    <li class="nav-item">
                        <a class="nav-link pe-4" aria-current="page" href="#"
                        >Product</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-4" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link py-0">
                            <button type="button" class="btn btn-grad px-4">
                                Create Free Account
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
</header>

<main>
    <!-- START SECTION PEOPLE CARDS -->
    <section class="section-people-cards u-padding-lg mt-5">
        <div class="container mt-5 pt-4">
            <div class="row">
                <div class="col-md-6">
                    <div
                        class="card u-box-shadow-1 border-0 u-border-radius h-100 bg-light"
                    >
                        <div class="card-body p-5">
                            <h4 class="card-title">
                                <div class="d-flex align-items-center">
                                    <div class="circle-element circle-element--person">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <span class="sub-heading">People Search per Country</span>
                                </div>

                                <select
                                    id="country"
                                    name="country"
                                    class="offset-md-2 col-md-4"
                                    onchange="window.location.href=this.options[this.selectedIndex].value;"
                                >
                                    <option value="{{ route('country', ['id' => 'Afghanistan']) }}" @if ($dataId == 'Afghanistan') selected  @endif >Afghanistan</option>
                                    <option value="{{ route('country', ['id' => 'Åland Islands']) }}" @if ($dataId == 'Åland Islands') selected  @endif >Åland Islands</option>
                                    <option value="{{ route('country', ['id' => 'Albania']) }}" @if ($dataId == 'Albania') selected  @endif >Albania</option>
                                    <option value="{{ route('country', ['id' => 'Algeria']) }}" @if ($dataId == 'Algeria') selected  @endif >Algeria</option>
                                    <option value="{{ route('country', ['id' => 'American Samoa']) }}" @if ($dataId == 'American Samoa') selected  @endif >American Samoa</option>
                                    <option value=" {{ route('country', ['id' => 'Andorra']) }}" @if ($dataId == 'Andorra') selected  @endif >Andorra</option>
                                    <option value="{{ route('country', ['id' => 'Angola']) }}" @if ($dataId == 'Angola') selected  @endif >Angola</option>
                                    <option value="{{ route('country', ['id' => 'Anguilla']) }}" @if ($dataId == 'Anguilla') selected  @endif >Anguilla</option>
                                    <option value="{{ route('country', ['id' => 'Antarctica']) }}" @if ($dataId == 'Antarctica') selected  @endif >Antarctica</option>
                                    <option value="{{ route('country', ['id' => 'Antigua and Barbuda']) }}" @if ($dataId == 'Antigua and Barbuda') selected  @endif >
                                        Antigua and Barbuda
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Argentina']) }}" @if ($dataId == 'Argentina') selected  @endif >Argentina</option>
                                    <option value="{{ route('country', ['id' => 'Armenia']) }}" @if ($dataId == 'Armenia') selected  @endif >Armenia</option>
                                    <option value="{{ route('country', ['id' => 'Aruba']) }}" @if ($dataId == 'Aruba') selected  @endif >Aruba</option>
                                    <option value="{{ route('country', ['id' => 'Australia']) }}" @if ($dataId == 'Australia') selected  @endif >Australia</option>
                                    <option value="{{ route('country', ['id' => 'Austria']) }}" @if ($dataId == 'Austria') selected  @endif >Austria</option>
                                    <option value="{{ route('country', ['id' => 'Azerbaijan']) }}" @if ($dataId == 'Azerbaijan') selected  @endif >Azerbaijan</option>
                                    <option value="{{ route('country', ['id' => 'Bahamas']) }}" @if ($dataId == 'Bahamas') selected  @endif >Bahamas</option>
                                    <option value="{{ route('country', ['id' => 'Bahrain']) }}" @if ($dataId == 'Bahrain') selected  @endif >Bahrain</option>
                                    <option value="{{ route('country', ['id' => 'Bangladesh']) }}" @if ($dataId == 'Bangladesh') selected  @endif >Bangladesh</option>
                                    <option value="{{ route('country', ['id' => 'Barbados']) }}" @if ($dataId == 'Barbados') selected  @endif >Barbados</option>
                                    <option value="{{ route('country', ['id' => 'Belarus']) }}" @if ($dataId == 'Belarus') selected  @endif >Belarus</option>
                                    <option value="{{ route('country', ['id' => 'Belgium']) }}" @if ($dataId == 'Belgium') selected  @endif >Belgium</option>
                                    <option value="{{ route('country', ['id' => 'Belize']) }}" @if ($dataId == 'Belize') selected  @endif >Belize</option>
                                    <option value="{{ route('country', ['id' => 'Benin']) }}" @if ($dataId == 'Benin') selected  @endif >Benin</option>
                                    <option value="{{ route('country', ['id' => 'Bermuda']) }}" @if ($dataId == 'Bermuda') selected  @endif >Bermuda</option>
                                    <option value="{{ route('country', ['id' => 'Bhutan']) }}" @if ($dataId == 'Bhutan') selected  @endif >Bhutan</option>
                                    <option value="{{ route('country', ['id' => 'Bolivia']) }}" @if ($dataId == 'Bolivia') selected  @endif >Bolivia</option>
                                    <option value="{{ route('country', ['id' => 'Bosnia and Herzegovina']) }}" @if ($dataId == 'Bosnia and Herzegovina') selected  @endif >
                                        Bosnia and Herzegovina
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Botswana']) }}" @if ($dataId == 'Botswana') selected  @endif >Botswana</option>
                                    <option value="{{ route('country', ['id' => 'Bouvet Island']) }}" @if ($dataId == 'Bouvet Island') selected  @endif >Bouvet Island</option>
                                    <option value="{{ route('country', ['id' => 'Brazil']) }}" @if ($dataId == 'Brazil') selected  @endif >Brazil</option>
                                    <option value="{{ route('country', ['id' => 'British Indian Ocean Territory']) }}" @if ($dataId == 'British Indian Ocean Territory') selected  @endif >
                                        British Indian Ocean Territory
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Brunei Darussalam']) }}" @if ($dataId == 'Brunei Darussalam') selected  @endif >
                                        Brunei Darussalam
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Bulgaria']) }}" @if ($dataId == 'Bulgaria') selected  @endif >Bulgaria</option>
                                    <option value="{{ route('country', ['id' => 'Burkina Faso']) }}" @if ($dataId == 'Burkina Faso') selected  @endif >Burkina Faso</option>
                                    <option value="{{ route('country', ['id' => 'Burundi']) }}" @if ($dataId == 'Burundi') selected  @endif >Burundi</option>
                                    <option value="{{ route('country', ['id' => 'Cambodia']) }}" @if ($dataId == 'Cambodia') selected  @endif >Cambodia</option>
                                    <option value="{{ route('country', ['id' => 'Cameroon']) }}" @if ($dataId == 'Cameroon') selected  @endif >Cameroon</option>
                                    <option value="{{ route('country', ['id' => 'Canada']) }}" @if ($dataId == 'Canada') selected  @endif >Canada</option>
                                    <option value="{{ route('country', ['id' => 'Cape Verde']) }}" @if ($dataId == 'Cape Verde') selected  @endif >Cape Verde</option>
                                    <option value="{{ route('country', ['id' => 'Cayman Islands']) }}" @if ($dataId == 'Cayman Islands') selected  @endif >Cayman Islands</option>
                                    <option value="{{ route('country', ['id' => 'Central African Republic']) }}" @if ($dataId == 'Central African Republic') selected  @endif >
                                        Central African Republic
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Chad']) }}" @if ($dataId == 'Chad') selected  @endif >Chad</option>
                                    <option value="{{ route('country', ['id' => 'Chile']) }}" @if ($dataId == 'Chile') selected  @endif >Chile</option>
                                    <option value="{{ route('country', ['id' => 'China']) }}" @if ($dataId == 'China') selected  @endif >China</option>
                                    <option value="{{ route('country', ['id' => 'Christmas Island']) }}" @if ($dataId == 'Christmas Island') selected  @endif >Christmas Island</option>
                                    <option value="{{ route('country', ['id' => 'Cocos (Keeling) Islands']) }}" @if ($dataId == 'Cocos (Keeling) Islands') selected  @endif >
                                        Cocos (Keeling) Islands
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Colombia']) }}" @if ($dataId == 'Colombia') selected  @endif >Colombia</option>
                                    <option value="{{ route('country', ['id' => 'Comoros']) }}" @if ($dataId == 'Comoros') selected  @endif >Comoros</option>
                                    <option value="{{ route('country', ['id' => 'Congo']) }}" @if ($dataId == 'Congo') selected  @endif >Congo</option>
                                    <option value="{{ route('country', ['id' => 'Congo, The Democratic Republic of The']) }}" @if ($dataId == 'Congo, The Democratic Republic of The') selected  @endif >
                                        Congo, The Democratic Republic of The
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Cook Islands']) }}" @if ($dataId == 'Cook Islands') selected  @endif >Cook Islands</option>
                                    <option value="{{ route('country', ['id' => 'Costa Rica']) }}" @if ($dataId == 'Costa Rica') selected  @endif >Costa Rica</option>
                                    <option value="{{ route('country', ['id' => 'Cote D ivoire']) }}" @if ($dataId == 'Cote D ivoire') selected  @endif >Cote D'ivoire</option>
                                    <option value="{{ route('country', ['id' => 'Croatia']) }}" @if ($dataId == 'Croatia') selected  @endif >Croatia</option>
                                    <option value="{{ route('country', ['id' => 'Cuba']) }}" @if ($dataId == 'Cuba') selected  @endif >Cuba</option>
                                    <option value="{{ route('country', ['id' => 'Cyprus']) }}" @if ($dataId == 'Cyprus') selected  @endif >Cyprus</option>
                                    <option value="{{ route('country', ['id' => 'Czech Republic']) }}" @if ($dataId == 'Czech Republic') selected  @endif >Czech Republic</option>
                                    <option value="{{ route('country', ['id' => 'Denmark']) }}" @if ($dataId == 'Denmark') selected  @endif >Denmark</option>
                                    <option value="{{ route('country', ['id' => 'Djibouti']) }}" @if ($dataId == 'Djibouti') selected  @endif >Djibouti</option>
                                    <option value="{{ route('country', ['id' => 'Dominica']) }}" @if ($dataId == 'Dominica') selected  @endif >Dominica</option>
                                    <option value="{{ route('country', ['id' => 'Dominican Republic']) }}" @if ($dataId == 'Dominican Republic') selected  @endif >
                                        Dominican Republic
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Ecuador']) }}" @if ($dataId == 'Ecuador') selected  @endif >Ecuador</option>
                                    <option value="{{ route('country', ['id' => 'Egypt']) }}" @if ($dataId == 'Egypt') selected  @endif >Egypt</option>
                                    <option value="{{ route('country', ['id' => 'El Salvador']) }}" @if ($dataId == 'El Salvador') selected  @endif >El Salvador</option>
                                    <option value="{{ route('country', ['id' => 'Equatorial Guinea']) }}" @if ($dataId == 'Equatorial Guinea') selected  @endif >
                                        Equatorial Guinea
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Eritrea']) }}" @if ($dataId == 'Eritrea') selected  @endif >Eritrea</option>
                                    <option value="{{ route('country', ['id' => 'Estonia']) }}" @if ($dataId == 'Estonia') selected  @endif >Estonia</option>
                                    <option value="{{ route('country', ['id' => 'Ethiopia']) }}" @if ($dataId == 'Ethiopia') selected  @endif >Ethiopia</option>
                                    <option value="{{ route('country', ['id' => 'Falkland Islands (Malvinas)']) }}" @if ($dataId == 'Falkland Islands (Malvinas)') selected  @endif >
                                        Falkland Islands (Malvinas)
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Faroe Islands']) }}" @if ($dataId == 'Faroe Islands') selected  @endif >Faroe Islands</option>
                                    <option value="{{ route('country', ['id' => 'Fiji']) }}" @if ($dataId == 'Fiji') selected  @endif >Fiji</option>
                                    <option value="{{ route('country', ['id' => 'Finland']) }}" @if ($dataId == 'Finland') selected  @endif >Finland</option>
                                    <option value="{{ route('country', ['id' => 'France']) }}" @if ($dataId == 'France') selected  @endif >France</option>
                                    <option value="{{ route('country', ['id' => 'French Guiana']) }}" @if ($dataId == 'French Guiana') selected  @endif >French Guiana</option>
                                    <option value="{{ route('country', ['id' => 'French Polynesia']) }}" @if ($dataId == 'French Polynesia') selected  @endif >French Polynesia</option>
                                    <option value="{{ route('country', ['id' => 'French Southern Territories']) }}" @if ($dataId == 'French Southern Territories') selected  @endif >
                                        French Southern Territories
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Gabon']) }}" @if ($dataId == 'Gabon') selected  @endif >Gabon</option>
                                    <option value="{{ route('country', ['id' => 'Gambia']) }}" @if ($dataId == 'Gambia') selected  @endif >Gambia</option>
                                    <option value="{{ route('country', ['id' => 'Georgia']) }}" @if ($dataId == 'Georgia') selected  @endif >Georgia</option>
                                    <option value="{{ route('country', ['id' => 'Germany']) }}" @if ($dataId == 'Germany') selected  @endif >Germany</option>
                                    <option value="{{ route('country', ['id' => 'Ghana']) }}" @if ($dataId == 'Ghana') selected  @endif >Ghana</option>
                                    <option value="{{ route('country', ['id' => 'Gibraltar']) }}" @if ($dataId == 'Gibraltar') selected  @endif >Gibraltar</option>
                                    <option value="{{ route('country', ['id' => 'Greece']) }}" @if ($dataId == 'Greece') selected  @endif >Greece</option>
                                    <option value="{{ route('country', ['id' => 'Greenland']) }}" @if ($dataId == 'Greenland') selected  @endif >Greenland</option>
                                    <option value="{{ route('country', ['id' => 'Grenada']) }}" @if ($dataId == 'Grenada') selected  @endif >Grenada</option>
                                    <option value="{{ route('country', ['id' => 'Guadeloupe']) }}" @if ($dataId == 'Guadeloupe') selected  @endif >Guadeloupe</option>
                                    <option value="{{ route('country', ['id' => 'Guam']) }}" @if ($dataId == 'Guam') selected  @endif >Guam</option>
                                    <option value="{{ route('country', ['id' => 'Guatemala']) }}" @if ($dataId == 'Guatemala') selected  @endif >Guatemala</option>
                                    <option value="{{ route('country', ['id' => 'Guernsey']) }}" @if ($dataId == 'Guernsey') selected  @endif >Guernsey</option>
                                    <option value="{{ route('country', ['id' => 'Guinea']) }}" @if ($dataId == 'Guinea') selected  @endif >Guinea</option>
                                    <option value="{{ route('country', ['id' => 'Guinea-bissau']) }}" @if ($dataId == 'Guinea-bissau') selected  @endif >Guinea-bissau</option>
                                    <option value="{{ route('country', ['id' => 'Guyana']) }}" @if ($dataId == 'Guyana') selected  @endif >Guyana</option>
                                    <option value="{{ route('country', ['id' => 'Haiti']) }}" @if ($dataId == 'Haiti') selected  @endif >Haiti</option>
                                    <option value="{{ route('country', ['id' => 'Heard Island and Mcdonald Islands']) }}" @if ($dataId == 'Heard Island and Mcdonald Islands') selected  @endif >
                                        Heard Island and Mcdonald Islands
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Holy See (Vatican City State)']) }}" @if ($dataId == 'Holy See (Vatican City State)') selected  @endif >
                                        Holy See (Vatican City State)
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Honduras']) }}" @if ($dataId == 'Honduras') selected  @endif >Honduras</option>
                                    <option value="{{ route('country', ['id' => 'Hong Kong']) }}" @if ($dataId == 'Hong Kong') selected  @endif >Hong Kong</option>
                                    <option value="{{ route('country', ['id' => 'Hungary']) }}" @if ($dataId == 'Hungary') selected  @endif >Hungary</option>
                                    <option value="{{ route('country', ['id' => 'Iceland']) }}" @if ($dataId == 'Iceland') selected  @endif >Iceland</option>
                                    <option value="{{ route('country', ['id' => 'India']) }}" @if ($dataId == 'India') selected  @endif >India</option>
                                    <option value="{{ route('country', ['id' => 'Indonesia']) }}" @if ($dataId == 'Indonesia') selected  @endif >Indonesia</option>
                                    <option value="{{ route('country', ['id' => 'Iran, Islamic Republic of']) }}" @if ($dataId == 'Iran, Islamic Republic of') selected  @endif >
                                        Iran, Islamic Republic of
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Iraq']) }}" @if ($dataId == 'Iraq') selected  @endif >Iraq</option>
                                    <option value="{{ route('country', ['id' => 'Ireland']) }}" @if ($dataId == 'Ireland') selected  @endif >Ireland</option>
                                    <option value="{{ route('country', ['id' => 'Isle of Man']) }}" @if ($dataId == 'Isle of Man') selected  @endif >Isle of Man</option>
                                    <option value="{{ route('country', ['id' => 'Israel']) }}" @if ($dataId == 'Israel') selected  @endif >Israel</option>
                                    <option value="{{ route('country', ['id' => 'Italy']) }}" @if ($dataId == 'Italy') selected  @endif >Italy</option>
                                    <option value="{{ route('country', ['id' => 'Jamaica']) }}" @if ($dataId == 'Jamaica') selected  @endif >Jamaica</option>
                                    <option value="{{ route('country', ['id' => 'Japan']) }}" @if ($dataId == 'Japan') selected  @endif >Japan</option>
                                    <option value="{{ route('country', ['id' => 'Jersey']) }}" @if ($dataId == 'Jersey') selected  @endif >Jersey</option>
                                    <option value="{{ route('country', ['id' => 'Jordan']) }}" @if ($dataId == 'Jordan') selected  @endif >Jordan</option>
                                    <option value="{{ route('country', ['id' => 'Kazakhstan']) }}" @if ($dataId == 'Kazakhstan') selected  @endif >Kazakhstan</option>
                                    <option value="{{ route('country', ['id' => 'Kenya']) }}" @if ($dataId == 'Kenya') selected  @endif >Kenya</option>
                                    <option value="{{ route('country', ['id' => 'Kiribati']) }}" @if ($dataId == 'Kiribati') selected  @endif >Kiribati</option>
                                    <option value="{{ route('country', ['id' => 'Korea, Democratic Peoples Republic of']) }}" @if ($dataId == 'Korea, Democratic Peoples Republic of') selected  @endif >
                                        Korea, Democratic People's Republic of
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Korea, Republic of']) }}" @if ($dataId == 'Korea, Republic of') selected  @endif >
                                        Korea, Republic of
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Kuwait']) }}" @if ($dataId == 'Kuwait') selected  @endif >Kuwait</option>
                                    <option value="{{ route('country', ['id' => 'Kyrgyzstan']) }}" @if ($dataId == 'Kyrgyzstan') selected  @endif >Kyrgyzstan</option>
                                    <option value="{{ route('country', ['id' => 'Lao Peoples Democratic Republic']) }}" @if ($dataId == 'Lao Peoples Democratic Republic') selected  @endif >
                                        Lao People's Democratic Republic
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Latvia']) }}" @if ($dataId == 'Latvia') selected  @endif >Latvia</option>
                                    <option value="{{ route('country', ['id' => 'Lebanon']) }}" @if ($dataId == 'Lebanon') selected  @endif >Lebanon</option>
                                    <option value="{{ route('country', ['id' => 'Lesotho']) }}" @if ($dataId == 'Lesotho') selected  @endif >Lesotho</option>
                                    <option value="{{ route('country', ['id' => 'Liberia']) }}" @if ($dataId == 'Liberia') selected  @endif >Liberia</option>
                                    <option value="{{ route('country', ['id' => 'Libyan Arab Jamahiriya']) }}" @if ($dataId == 'Libyan Arab Jamahiriya') selected  @endif >
                                        Libyan Arab Jamahiriya
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Liechtenstein']) }}" @if ($dataId == 'Liechtenstein') selected  @endif >Liechtenstein</option>
                                    <option value="{{ route('country', ['id' => 'Lithuania']) }}" @if ($dataId == 'Lithuania') selected  @endif >Lithuania</option>
                                    <option value="{{ route('country', ['id' => 'Luxembourg']) }}" @if ($dataId == 'Luxembourg') selected  @endif >Luxembourg</option>
                                    <option value="{{ route('country', ['id' => 'Macao']) }}" @if ($dataId == 'Macao') selected  @endif >Macao</option>
                                    <option
                                        value="{{ route('country', ['id' => 'Macedonia, The Former Yugoslav Republic of']) }}" @if ($dataId == 'Macedonia, The Former Yugoslav Republic of') selected  @endif
                                    >
                                        Macedonia, The Former Yugoslav Republic of
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Madagascar']) }}" @if ($dataId == 'Madagascar') selected  @endif >Madagascar</option>
                                    <option value="{{ route('country', ['id' => 'Malawi']) }}" @if ($dataId == 'Malawi') selected  @endif >Malawi</option>
                                    <option value="{{ route('country', ['id' => 'Malaysia']) }}" @if ($dataId == 'Malaysia') selected  @endif >Malaysia</option>
                                    <option value="{{ route('country', ['id' => 'Maldives']) }}" @if ($dataId == 'Maldives') selected  @endif >Maldives</option>
                                    <option value="{{ route('country', ['id' => 'Mali']) }}" @if ($dataId == 'Mali') selected  @endif >Mali</option>
                                    <option value="{{ route('country', ['id' => 'Malta']) }}" @if ($dataId == 'Malta') selected  @endif >Malta</option>
                                    <option value="{{ route('country', ['id' => 'Marshall Islands']) }}" @if ($dataId == 'Marshall Islands') selected  @endif >Marshall Islands</option>
                                    <option value="{{ route('country', ['id' => 'Martinique']) }}" @if ($dataId == 'Martinique') selected  @endif >Martinique</option>
                                    <option value="{{ route('country', ['id' => 'Mauritania']) }}" @if ($dataId == 'Mauritania') selected  @endif >Mauritania</option>
                                    <option value="{{ route('country', ['id' => 'Mauritius']) }}" @if ($dataId == 'Mauritius') selected  @endif >Mauritius</option>
                                    <option value="{{ route('country', ['id' => 'Mayotte']) }}" @if ($dataId == 'Mayotte') selected  @endif >Mayotte</option>
                                    <option value="{{ route('country', ['id' => 'Mexico']) }}" @if ($dataId == 'Mexico') selected  @endif >Mexico</option>
                                    <option value="{{ route('country', ['id' => 'Micronesia, Federated States of']) }}" @if ($dataId == 'Micronesia, Federated States of') selected  @endif >
                                        Micronesia, Federated States of
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Moldova, Republic of']) }}" @if ($dataId == 'Moldova, Republic of') selected  @endif >
                                        Moldova, Republic of
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Monaco']) }}" @if ($dataId == 'Monaco') selected  @endif >Monaco</option>
                                    <option value="{{ route('country', ['id' => 'Mongolia']) }}" @if ($dataId == 'Mongolia') selected  @endif >Mongolia</option>
                                    <option value="{{ route('country', ['id' => 'Montenegro']) }}" @if ($dataId == 'Montenegro') selected  @endif >Montenegro</option>
                                    <option value="{{ route('country', ['id' => 'Montserrat']) }}" @if ($dataId == 'Montserrat') selected  @endif >Montserrat</option>
                                    <option value="{{ route('country', ['id' => 'Morocco']) }}" @if ($dataId == 'Morocco') selected  @endif >Morocco</option>
                                    <option value="{{ route('country', ['id' => 'Mozambique']) }}" @if ($dataId == 'Mozambique') selected  @endif >Mozambique</option>
                                    <option value="{{ route('country', ['id' => 'Myanmar']) }}" @if ($dataId == 'Myanmar') selected  @endif >Myanmar</option>
                                    <option value="{{ route('country', ['id' => 'Namibia']) }}" @if ($dataId == 'Namibia') selected  @endif >Namibia</option>
                                    <option value="{{ route('country', ['id' => 'Nauru']) }}" @if ($dataId == 'Nauru') selected  @endif >Nauru</option>
                                    <option value="{{ route('country', ['id' => 'Nepal']) }}" @if ($dataId == 'Nepal') selected  @endif >Nepal</option>
                                    <option value="{{ route('country', ['id' => 'Netherlands']) }}" @if ($dataId == 'Netherlands') selected  @endif >Netherlands</option>
                                    <option value="{{ route('country', ['id' => 'Netherlands Antilles']) }}" @if ($dataId == 'Netherlands Antilles') selected  @endif >
                                        Netherlands Antilles
                                    </option>
                                    <option value="{{ route('country', ['id' => 'New Caledonia']) }}" @if ($dataId == 'New Caledonia') selected  @endif >New Caledonia</option>
                                    <option value="{{ route('country', ['id' => 'New Zealand']) }}" @if ($dataId == 'New Zealand') selected  @endif >New Zealand</option>
                                    <option value="{{ route('country', ['id' => 'Nicaragua']) }}" @if ($dataId == 'Nicaragua') selected  @endif >Nicaragua</option>
                                    <option value="{{ route('country', ['id' => 'Niger']) }}" @if ($dataId == 'Niger') selected  @endif >Niger</option>
                                    <option value="{{ route('country', ['id' => 'Nigeria']) }}" @if ($dataId == 'Nigeria') selected  @endif >Nigeria</option>
                                    <option value="{{ route('country', ['id' => 'Niue']) }}" @if ($dataId == 'Niue') selected  @endif >Niue</option>
                                    <option value="{{ route('country', ['id' => 'Norfolk Island']) }}" @if ($dataId == 'Norfolk Island') selected  @endif >Norfolk Island</option>
                                    <option value="{{ route('country', ['id' => 'Northern Mariana Islands']) }}" @if ($dataId == 'Northern Mariana Islands') selected  @endif >
                                        Northern Mariana Islands
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Norway']) }}" @if ($dataId == 'Norway') selected  @endif >Norway</option>
                                    <option value="{{ route('country', ['id' => 'Oman']) }}" @if ($dataId == 'Oman') selected  @endif >Oman</option>
                                    <option value="{{ route('country', ['id' => 'Pakistan']) }}" @if ($dataId == 'Pakistan') selected  @endif >Pakistan</option>
                                    <option value="{{ route('country', ['id' => 'Palau']) }}" @if ($dataId == 'Palau') selected  @endif >Palau</option>
                                    <option value="{{ route('country', ['id' => 'Palestinian Territory, Occupied']) }}" @if ($dataId == 'Palestinian Territory, Occupied') selected  @endif >
                                        Palestinian Territory, Occupied
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Panama']) }}" @if ($dataId == 'Panama') selected  @endif >Panama</option>
                                    <option value="{{ route('country', ['id' => 'Papua New Guinea']) }}" @if ($dataId == 'Papua New Guinea') selected  @endif >Papua New Guinea</option>
                                    <option value="{{ route('country', ['id' => 'Paraguay']) }}" @if ($dataId == 'Paraguay') selected  @endif >Paraguay</option>
                                    <option value="{{ route('country', ['id' => 'Peru']) }}" @if ($dataId == 'Peru') selected  @endif >Peru</option>
                                    <option value="{{ route('country', ['id' => 'Philippines']) }}" @if ($dataId == 'Philippines') selected  @endif >Philippines</option>
                                    <option value="{{ route('country', ['id' => 'Pitcairn']) }}" @if ($dataId == 'Pitcairn') selected  @endif >Pitcairn</option>
                                    <option value="{{ route('country', ['id' => 'Poland']) }}" @if ($dataId == 'Poland') selected  @endif >Poland</option>
                                    <option value="{{ route('country', ['id' => 'Portugal']) }}" @if ($dataId == 'Portugal') selected  @endif >Portugal</option>
                                    <option value="{{ route('country', ['id' => 'Puerto Rico']) }}" @if ($dataId == 'Puerto Rico') selected  @endif >Puerto Rico</option>
                                    <option value="{{ route('country', ['id' => 'Qatar']) }}" @if ($dataId == 'Qatar') selected  @endif >Qatar</option>
                                    <option value="{{ route('country', ['id' => 'Reunion']) }}" @if ($dataId == 'Reunion') selected  @endif >Reunion</option>
                                    <option value="{{ route('country', ['id' => 'Romania']) }}" @if ($dataId == 'Romania') selected  @endif >Romania</option>
                                    <option value="{{ route('country', ['id' => 'Russian Federation']) }}" @if ($dataId == 'Russian Federation') selected  @endif >
                                        Russian Federation
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Rwanda']) }}" @if ($dataId == 'Rwanda') selected  @endif >Rwanda</option>
                                    <option value="{{ route('country', ['id' => 'Saint Helena']) }}" @if ($dataId == 'Saint Helena') selected  @endif >Saint Helena</option>
                                    <option value="{{ route('country', ['id' => 'Saint Kitts and Nevis']) }}" @if ($dataId == 'Saint Kitts and Nevis') selected  @endif >
                                        Saint Kitts and Nevis
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Saint Lucia']) }}" @if ($dataId == 'Saint Lucia') selected  @endif >Saint Lucia</option>
                                    <option value="{{ route('country', ['id' => 'Saint Pierre and Miquelon']) }}" @if ($dataId == 'Saint Pierre and Miquelon') selected  @endif >
                                        Saint Pierre and Miquelon
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Saint Vincent and The Grenadines']) }}" @if ($dataId == 'Saint Vincent and The Grenadines') selected  @endif >
                                        Saint Vincent and The Grenadines
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Samoa']) }}" @if ($dataId == 'Samoa') selected  @endif >Samoa</option>
                                    <option value="{{ route('country', ['id' => 'San Marino']) }}" @if ($dataId == 'San Marino') selected  @endif >San Marino</option>
                                    <option value="{{ route('country', ['id' => 'Sao Tome and Principe']) }}" @if ($dataId == 'Sao Tome and Principe') selected  @endif >
                                        Sao Tome and Principe
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Saudi Arabia']) }}" @if ($dataId == 'Saudi Arabia') selected  @endif >Saudi Arabia</option>
                                    <option value="{{ route('country', ['id' => 'Senegal']) }}" @if ($dataId == 'Senegal') selected  @endif >Senegal</option>
                                    <option value="{{ route('country', ['id' => 'Serbia']) }}" @if ($dataId == 'Serbia') selected  @endif >Serbia</option>
                                    <option value="{{ route('country', ['id' => 'Seychelles']) }}" @if ($dataId == 'Seychelles') selected  @endif >Seychelles</option>
                                    <option value="{{ route('country', ['id' => 'Sierra Leone']) }}" @if ($dataId == 'Sierra Leone') selected  @endif >Sierra Leone</option>
                                    <option value="{{ route('country', ['id' => 'Singapore']) }}" @if ($dataId == 'Singapore') selected  @endif >Singapore</option>
                                    <option value="{{ route('country', ['id' => 'Slovakia']) }}" @if ($dataId == 'Slovakia') selected  @endif >Slovakia</option>
                                    <option value="{{ route('country', ['id' => 'Slovenia']) }}" @if ($dataId == 'Slovenia') selected  @endif >Slovenia</option>
                                    <option value="{{ route('country', ['id' => 'Solomon Islands']) }}" @if ($dataId == 'Solomon Islands') selected  @endif >Solomon Islands</option>
                                    <option value="{{ route('country', ['id' => 'Somalia']) }}" @if ($dataId == 'Somalia') selected  @endif >Somalia</option>
                                    <option value="{{ route('country', ['id' => 'South Africa']) }}" @if ($dataId == 'South Africa') selected  @endif >South Africa</option>
                                    <option
                                        value="{{ route('country', ['id' => 'South Georgia and The South Sandwich Islands']) }}" @if ($dataId == 'South Georgia and The South Sandwich Islands') selected  @endif
                                    >
                                        South Georgia and The South Sandwich Islands
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Spain']) }}" @if ($dataId == 'Spain') selected  @endif >Spain</option>
                                    <option value="{{ route('country', ['id' => 'Sri Lanka']) }}" @if ($dataId == 'Sri Lanka') selected  @endif >Sri Lanka</option>
                                    <option value="{{ route('country', ['id' => 'Sudan']) }}" @if ($dataId == 'Sudan') selected  @endif >Sudan</option>
                                    <option value="{{ route('country', ['id' => 'Suriname']) }}" @if ($dataId == 'Suriname') selected  @endif >Suriname</option>
                                    <option value="{{ route('country', ['id' => 'Svalbard and Jan Mayen']) }}" @if ($dataId == 'Svalbard and Jan Mayen') selected  @endif >
                                        Svalbard and Jan Mayen
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Swaziland']) }}" @if ($dataId == 'Swaziland') selected  @endif >Swaziland</option>
                                    <option value="{{ route('country', ['id' => 'Sweden']) }}" @if ($dataId == 'Sweden') selected  @endif >Sweden</option>
                                    <option value="{{ route('country', ['id' => 'Switzerland']) }}" @if ($dataId == 'Switzerland') selected  @endif >Switzerland</option>
                                    <option value="{{ route('country', ['id' => 'Syrian Arab Republic']) }}" @if ($dataId == 'Syrian Arab Republic') selected  @endif >
                                        Syrian Arab Republic
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Taiwan']) }}" @if ($dataId == 'Taiwan') selected  @endif >Taiwan</option>
                                    <option value="{{ route('country', ['id' => 'Tajikistan']) }}" @if ($dataId == 'Tajikistan') selected  @endif >Tajikistan</option>
                                    <option value="{{ route('country', ['id' => 'Tanzania, United Republic of']) }}" @if ($dataId == 'Tanzania, United Republic of') selected  @endif >
                                        Tanzania, United Republic of
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Thailand']) }}" @if ($dataId == 'Thailand') selected  @endif >Thailand</option>
                                    <option value="{{ route('country', ['id' => 'Timor-leste']) }}" @if ($dataId == 'Timor-leste') selected  @endif >Timor-leste</option>
                                    <option value="{{ route('country', ['id' => 'Togo']) }}" @if ($dataId == 'Togo') selected  @endif >Togo</option>
                                    <option value="{{ route('country', ['id' => 'Tokelau']) }}" @if ($dataId == 'Tokelau') selected  @endif >Tokelau</option>
                                    <option value="{{ route('country', ['id' => 'Tonga']) }}" @if ($dataId == 'Tonga') selected  @endif >Tonga</option>
                                    <option value="{{ route('country', ['id' => 'Trinidad and Tobago']) }}" @if ($dataId == 'Trinidad and Tobago') selected  @endif >
                                        Trinidad and Tobago
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Tunisia']) }}" @if ($dataId == 'Tunisia') selected  @endif >Tunisia</option>
                                    <option value="{{ route('country', ['id' => 'Turkey']) }}" @if ($dataId == 'Turkey') selected  @endif >Turkey</option>
                                    <option value="{{ route('country', ['id' => 'Turkmenistan']) }}" @if ($dataId == 'Turkmenistan') selected  @endif >Turkmenistan</option>
                                    <option value="{{ route('country', ['id' => 'Turks and Caicos Islands']) }}" @if ($dataId == 'Turks and Caicos Islands') selected  @endif >
                                        Turks and Caicos Islands
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Tuvalu']) }}" @if ($dataId == 'Tuvalu') selected  @endif >Tuvalu</option>
                                    <option value="{{ route('country', ['id' => 'Uganda']) }}" @if ($dataId == 'Uganda') selected  @endif >Uganda</option>
                                    <option value="{{ route('country', ['id' => 'Ukraine']) }}" @if ($dataId == 'Ukraine') selected  @endif >Ukraine</option>
                                    <option value="{{ route('country', ['id' => 'United Arab Emirates']) }}" @if ($dataId == 'United Arab Emirates') selected  @endif >
                                        United Arab Emirates
                                    </option>
                                    <option value="{{ route('country', ['id' => 'United Kingdom']) }}" @if ($dataId == 'United Kingdom') selected  @endif >United Kingdom</option>
                                    <option value="{{ route('country', ['id' => 'United States']) }}" @if ($dataId == 'United States') selected  @endif >United States</option>
                                    <option value="{{ route('country', ['id' => 'United States Minor Outlying Islands']) }}" @if ($dataId == 'United States Minor Outlying Islands') selected  @endif >
                                        United States Minor Outlying Islands
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Uruguay']) }}" @if ($dataId == 'Uruguay') selected  @endif >Uruguay</option>
                                    <option value="{{ route('country', ['id' => 'Uzbekistan']) }}" @if ($dataId == 'Uzbekistan') selected  @endif >Uzbekistan</option>
                                    <option value="{{ route('country', ['id' => 'Vanuatu']) }}" @if ($dataId == 'Vanuatu') selected  @endif >Vanuatu</option>
                                    <option value="{{ route('country', ['id' => 'Venezuela']) }}" @if ($dataId == 'Venezuela') selected  @endif >Venezuela</option>
                                    <option value="{{ route('country', ['id' => 'Viet Nam']) }}" @if ($dataId == 'Viet Nam') selected  @endif >Viet Nam</option>
                                    <option value="{{ route('country', ['id' => 'Virgin Islands, British']) }}" @if ($dataId == 'Virgin Islands, British') selected  @endif >
                                        Virgin Islands, British
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Virgin Islands, U.S.']) }}" @if ($dataId == 'Virgin Islands, U.S.') selected  @endif >
                                        Virgin Islands, U.S.
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Wallis and Futuna']) }}" @if ($dataId == 'Wallis and Futuna') selected  @endif >
                                        Wallis and Futuna
                                    </option>
                                    <option value="{{ route('country', ['id' => 'Western Sahara']) }}" @if ($dataId == 'Western Sahara') selected  @endif >Western Sahara</option>
                                    <option value="{{ route('country', ['id' => 'Yemen']) }}" @if ($dataId == 'Yemen') selected  @endif >Yemen</option>
                                    <option value="{{ route('country', ['id' => 'Zambia']) }}" @if ($dataId == 'Zambia') selected  @endif >Zambia</option>
                                    <option value="{{ route('country', ['id' => 'Zimbabwe']) }}" @if ($dataId == 'Zimbabwe') selected  @endif >Zimbabwe</option>
                                </select>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-transparent u-border-radius h-100">
                        <div class="card-body d-flex align-items-center px-5 mx-5">
                            <div class="col-md-4 px-4 mx-3">
                                <img
                                    src="{{ asset('/') }}adminAsset/assets/images/data.svg"
                                    class="img-fluid"
                                    alt="illustration"
                                />
                            </div>
                            <div class="col-md-8">
                                <h1 class="heading--sub mb-4">
                                    Reach your target contacts faster with Apollo
                                </h1>
                                <button type="button" class="btn btn-grad px-4">
                                    Sign Up For Free
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION PEOPLE CARDS -->

    <!-- START SECTION MESSAGE -->
    <section class="section-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-body p-5 mt-5">
                            <h2 class="card-text no-data d-none">
                                No Person pages found for:
                                <span class="text-secondary">A</span>
                            </h2>
                            <p class="card-text">
                                @forelse ($data as $countryData)
                                    <a href="{{route('user', ['id' => $countryData->id]) }}" class="user-link">
                                        {{$countryData->first_name." ".$countryData->last_name }}
                                    </a>
                            @empty
                                <h2 class="card-text no-data">
                                    No Person pages found for :
                                    <span class="text-secondary"> {{ $dataId }}</span>
                                </h2>
                                @endforelse
                                </p>

                                <div class="card-footer bg-transparent border-0">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <div class="d-flex justify-content-center">
                                                    {!! $data->links() !!}
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION MESSAGE -->
</main>

<!-- Custom JS -->

<script src="{{ asset('/') }}adminAsset/assets/js/script.js"></script>

<!-- Bootstrap JS -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>

<!-- jQuery -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
></script>
</body>
</html>
