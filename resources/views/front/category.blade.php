@extends('front.master')

@section('metaDescription')
    List of contacts in Phone Number List's database for names starting with A
@endsection


@section('title')
    People Directory: {{ $dataId }} | Phone List
@endsection

@section('main')
    <!-- START SEARCH BARS -->
    <section class="section-searchbar pt-md-5 pb-md-4 py-2 mt-md-0 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 ms-md-auto">
                    <div class="row">
                        <form action="{{ route('userSearch') }}">
                            @csrf
                            <div class="col-12">
                                <input type="text" name="searchPeople" id="searchPeople"
                                       class="typeahead searchBar bg-white border-5 text-dark fw-normal col-md-8 col-7" onkeyup="searchPeople()"
                                       placeholder="Search by Name..." />
                                <button type="submit" class="btn btn-purple ms-1 col-md-3 col-4">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="dropdown" id="searchCountry">
                        <input
                            class="searchBar w-100 bg-white text-dark fw-normal"
                            id="countryDropdown"
                            type="text"
                            placeholder="Search Person by Country..."
                            data-toggle="dropdown"
                            data-bs-toggle="dropdown"
                        />
                        <span class="caret"></span>

                        <ul
                            class="dropdown-menu w-100 bg-white text-dark fw-bold p-3"
                            aria-labelledby="countryDropdown"
                        >
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Afghanistan']) }}" @if ($dataId == 'Afghanistan') selected  @endif >Afghanistan</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Åland Islands']) }}" @if ($dataId == 'Åland Islands') selected  @endif >Åland Islands</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Albania']) }}" @if ($dataId == 'Albania') selected  @endif >Albania</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Algeria']) }}" @if ($dataId == 'Algeria') selected  @endif >Algeria</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'American Samoa']) }}" @if ($dataId == 'American Samoa') selected  @endif >American Samoa</a></li>
                            <li class="dropdown-item"><a href=" {{ route('country', ['id' => 'Andorra']) }}" @if ($dataId == 'Andorra') selected  @endif >Andorra</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Angola']) }}" @if ($dataId == 'Angola') selected  @endif >Angola</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Anguilla']) }}" @if ($dataId == 'Anguilla') selected  @endif >Anguilla</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Antarctica']) }}" @if ($dataId == 'Antarctica') selected  @endif >Antarctica</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Antigua and Barbuda']) }}" @if ($dataId == 'Antigua and Barbuda') selected  @endif >
                                Antigua and Barbuda
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Argentina']) }}" @if ($dataId == 'Argentina') selected  @endif >Argentina</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Armenia']) }}" @if ($dataId == 'Armenia') selected  @endif >Armenia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Aruba']) }}" @if ($dataId == 'Aruba') selected  @endif >Aruba</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Australia']) }}" @if ($dataId == 'Australia') selected  @endif >Australia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Austria']) }}" @if ($dataId == 'Austria') selected  @endif >Austria</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Azerbaijan']) }}" @if ($dataId == 'Azerbaijan') selected  @endif >Azerbaijan</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Bahamas']) }}" @if ($dataId == 'Bahamas') selected  @endif >Bahamas</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Bahrain']) }}" @if ($dataId == 'Bahrain') selected  @endif >Bahrain</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Bangladesh']) }}" @if ($dataId == 'Bangladesh') selected  @endif >Bangladesh</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Barbados']) }}" @if ($dataId == 'Barbados') selected  @endif >Barbados</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Belarus']) }}" @if ($dataId == 'Belarus') selected  @endif >Belarus</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Belgium']) }}" @if ($dataId == 'Belgium') selected  @endif >Belgium</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Belize']) }}" @if ($dataId == 'Belize') selected  @endif >Belize</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Benin']) }}" @if ($dataId == 'Benin') selected  @endif >Benin</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Bermuda']) }}" @if ($dataId == 'Bermuda') selected  @endif >Bermuda</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Bhutan']) }}" @if ($dataId == 'Bhutan') selected  @endif >Bhutan</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Bolivia']) }}" @if ($dataId == 'Bolivia') selected  @endif >Bolivia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Bosnia and Herzegovina']) }}" @if ($dataId == 'Bosnia and Herzegovina') selected  @endif >
                                Bosnia and Herzegovina
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Botswana']) }}" @if ($dataId == 'Botswana') selected  @endif >Botswana</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Bouvet Island']) }}" @if ($dataId == 'Bouvet Island') selected  @endif >Bouvet Island</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Brazil']) }}" @if ($dataId == 'Brazil') selected  @endif >Brazil</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'British Indian Ocean Territory']) }}" @if ($dataId == 'British Indian Ocean Territory') selected  @endif >
                                British Indian Ocean Territory
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Brunei Darussalam']) }}" @if ($dataId == 'Brunei Darussalam') selected  @endif >
                                Brunei Darussalam
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Bulgaria']) }}" @if ($dataId == 'Bulgaria') selected  @endif >Bulgaria</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Burkina Faso']) }}" @if ($dataId == 'Burkina Faso') selected  @endif >Burkina Faso</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Burundi']) }}" @if ($dataId == 'Burundi') selected  @endif >Burundi</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Cambodia']) }}" @if ($dataId == 'Cambodia') selected  @endif >Cambodia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Cameroon']) }}" @if ($dataId == 'Cameroon') selected  @endif >Cameroon</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Canada']) }}" @if ($dataId == 'Canada') selected  @endif >Canada</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Cape Verde']) }}" @if ($dataId == 'Cape Verde') selected  @endif >Cape Verde</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Cayman Islands']) }}" @if ($dataId == 'Cayman Islands') selected  @endif >Cayman Islands</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Central African Republic']) }}" @if ($dataId == 'Central African Republic') selected  @endif >
                                Central African Republic
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Chad']) }}" @if ($dataId == 'Chad') selected  @endif >Chad</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Chile']) }}" @if ($dataId == 'Chile') selected  @endif >Chile</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'China']) }}" @if ($dataId == 'China') selected  @endif >China</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Christmas Island']) }}" @if ($dataId == 'Christmas Island') selected  @endif >Christmas Island</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Cocos (Keeling) Islands']) }}" @if ($dataId == 'Cocos (Keeling) Islands') selected  @endif >
                                Cocos (Keeling) Islands
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Colombia']) }}" @if ($dataId == 'Colombia') selected  @endif >Colombia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Comoros']) }}" @if ($dataId == 'Comoros') selected  @endif >Comoros</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Congo']) }}" @if ($dataId == 'Congo') selected  @endif >Congo</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Congo, The Democratic Republic of The']) }}" @if ($dataId == 'Congo, The Democratic Republic of The') selected  @endif >
                                Congo, The Democratic Republic of The
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Cook Islands']) }}" @if ($dataId == 'Cook Islands') selected  @endif >Cook Islands</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Costa Rica']) }}" @if ($dataId == 'Costa Rica') selected  @endif >Costa Rica</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Cote D ivoire']) }}" @if ($dataId == 'Cote D ivoire') selected  @endif >Cote D'ivoire</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Croatia']) }}" @if ($dataId == 'Croatia') selected  @endif >Croatia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Cuba']) }}" @if ($dataId == 'Cuba') selected  @endif >Cuba</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Cyprus']) }}" @if ($dataId == 'Cyprus') selected  @endif >Cyprus</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Czech Republic']) }}" @if ($dataId == 'Czech Republic') selected  @endif >Czech Republic</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Denmark']) }}" @if ($dataId == 'Denmark') selected  @endif >Denmark</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Djibouti']) }}" @if ($dataId == 'Djibouti') selected  @endif >Djibouti</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Dominica']) }}" @if ($dataId == 'Dominica') selected  @endif >Dominica</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Dominican Republic']) }}" @if ($dataId == 'Dominican Republic') selected  @endif >
                                Dominican Republic
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Ecuador']) }}" @if ($dataId == 'Ecuador') selected  @endif >Ecuador</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Egypt']) }}" @if ($dataId == 'Egypt') selected  @endif >Egypt</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'El Salvador']) }}" @if ($dataId == 'El Salvador') selected  @endif >El Salvador</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Equatorial Guinea']) }}" @if ($dataId == 'Equatorial Guinea') selected  @endif >
                                Equatorial Guinea
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Eritrea']) }}" @if ($dataId == 'Eritrea') selected  @endif >Eritrea</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Estonia']) }}" @if ($dataId == 'Estonia') selected  @endif >Estonia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Ethiopia']) }}" @if ($dataId == 'Ethiopia') selected  @endif >Ethiopia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Falkland Islands (Malvinas)']) }}" @if ($dataId == 'Falkland Islands (Malvinas)') selected  @endif >
                                Falkland Islands (Malvinas)
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Faroe Islands']) }}" @if ($dataId == 'Faroe Islands') selected  @endif >Faroe Islands</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Fiji']) }}" @if ($dataId == 'Fiji') selected  @endif >Fiji</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Finland']) }}" @if ($dataId == 'Finland') selected  @endif >Finland</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'France']) }}" @if ($dataId == 'France') selected  @endif >France</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'French Guiana']) }}" @if ($dataId == 'French Guiana') selected  @endif >French Guiana</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'French Polynesia']) }}" @if ($dataId == 'French Polynesia') selected  @endif >French Polynesia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'French Southern Territories']) }}" @if ($dataId == 'French Southern Territories') selected  @endif >
                                French Southern Territories
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Gabon']) }}" @if ($dataId == 'Gabon') selected  @endif >Gabon</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Gambia']) }}" @if ($dataId == 'Gambia') selected  @endif >Gambia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Georgia']) }}" @if ($dataId == 'Georgia') selected  @endif >Georgia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Germany']) }}" @if ($dataId == 'Germany') selected  @endif >Germany</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Ghana']) }}" @if ($dataId == 'Ghana') selected  @endif >Ghana</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Gibraltar']) }}" @if ($dataId == 'Gibraltar') selected  @endif >Gibraltar</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Greece']) }}" @if ($dataId == 'Greece') selected  @endif >Greece</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Greenland']) }}" @if ($dataId == 'Greenland') selected  @endif >Greenland</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Grenada']) }}" @if ($dataId == 'Grenada') selected  @endif >Grenada</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Guadeloupe']) }}" @if ($dataId == 'Guadeloupe') selected  @endif >Guadeloupe</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Guam']) }}" @if ($dataId == 'Guam') selected  @endif >Guam</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Guatemala']) }}" @if ($dataId == 'Guatemala') selected  @endif >Guatemala</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Guernsey']) }}" @if ($dataId == 'Guernsey') selected  @endif >Guernsey</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Guinea']) }}" @if ($dataId == 'Guinea') selected  @endif >Guinea</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Guinea-bissau']) }}" @if ($dataId == 'Guinea-bissau') selected  @endif >Guinea-bissau</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Guyana']) }}" @if ($dataId == 'Guyana') selected  @endif >Guyana</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Haiti']) }}" @if ($dataId == 'Haiti') selected  @endif >Haiti</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Heard Island and Mcdonald Islands']) }}" @if ($dataId == 'Heard Island and Mcdonald Islands') selected  @endif >
                                Heard Island and Mcdonald Islands
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Holy See (Vatican City State)']) }}" @if ($dataId == 'Holy See (Vatican City State)') selected  @endif >
                                Holy See (Vatican City State)
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Honduras']) }}" @if ($dataId == 'Honduras') selected  @endif >Honduras</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Hong Kong']) }}" @if ($dataId == 'Hong Kong') selected  @endif >Hong Kong</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Hungary']) }}" @if ($dataId == 'Hungary') selected  @endif >Hungary</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Iceland']) }}" @if ($dataId == 'Iceland') selected  @endif >Iceland</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'India']) }}" @if ($dataId == 'India') selected  @endif >India</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Indonesia']) }}" @if ($dataId == 'Indonesia') selected  @endif >Indonesia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Iran, Islamic Republic of']) }}" @if ($dataId == 'Iran, Islamic Republic of') selected  @endif >
                                Iran, Islamic Republic of
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Iraq']) }}" @if ($dataId == 'Iraq') selected  @endif >Iraq</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Ireland']) }}" @if ($dataId == 'Ireland') selected  @endif >Ireland</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Isle of Man']) }}" @if ($dataId == 'Isle of Man') selected  @endif >Isle of Man</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Israel']) }}" @if ($dataId == 'Israel') selected  @endif >Israel</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Italy']) }}" @if ($dataId == 'Italy') selected  @endif >Italy</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Jamaica']) }}" @if ($dataId == 'Jamaica') selected  @endif >Jamaica</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Japan']) }}" @if ($dataId == 'Japan') selected  @endif >Japan</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Jersey']) }}" @if ($dataId == 'Jersey') selected  @endif >Jersey</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Jordan']) }}" @if ($dataId == 'Jordan') selected  @endif >Jordan</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Kazakhstan']) }}" @if ($dataId == 'Kazakhstan') selected  @endif >Kazakhstan</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Kenya']) }}" @if ($dataId == 'Kenya') selected  @endif >Kenya</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Kiribati']) }}" @if ($dataId == 'Kiribati') selected  @endif >Kiribati</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Korea, Democratic Peoples Republic of']) }}" @if ($dataId == 'Korea, Democratic Peoples Republic of') selected  @endif >
                                Korea, Democratic People's Republic of
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Korea, Republic of']) }}" @if ($dataId == 'Korea, Republic of') selected  @endif >
                                Korea, Republic of
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Kuwait']) }}" @if ($dataId == 'Kuwait') selected  @endif >Kuwait</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Kyrgyzstan']) }}" @if ($dataId == 'Kyrgyzstan') selected  @endif >Kyrgyzstan</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Lao Peoples Democratic Republic']) }}" @if ($dataId == 'Lao Peoples Democratic Republic') selected  @endif >
                                Lao People's Democratic Republic
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Latvia']) }}" @if ($dataId == 'Latvia') selected  @endif >Latvia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Lebanon']) }}" @if ($dataId == 'Lebanon') selected  @endif >Lebanon</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Lesotho']) }}" @if ($dataId == 'Lesotho') selected  @endif >Lesotho</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Liberia']) }}" @if ($dataId == 'Liberia') selected  @endif >Liberia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Libyan Arab Jamahiriya']) }}" @if ($dataId == 'Libyan Arab Jamahiriya') selected  @endif >
                                Libyan Arab Jamahiriya
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Liechtenstein']) }}" @if ($dataId == 'Liechtenstein') selected  @endif >Liechtenstein</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Lithuania']) }}" @if ($dataId == 'Lithuania') selected  @endif >Lithuania</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Luxembourg']) }}" @if ($dataId == 'Luxembourg') selected  @endif >Luxembourg</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Macao']) }}" @if ($dataId == 'Macao') selected  @endif >Macao</a></li>
                            <li class="dropdown-item">
                                <a href="{{ route('country', ['id' => 'Macedonia, The Former Yugoslav Republic of']) }}" @if ($dataId == 'Macedonia, The Former Yugoslav Republic of') selected  @endif>
                                Macedonia, The Former Yugoslav Republic of
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Madagascar']) }}" @if ($dataId == 'Madagascar') selected  @endif >Madagascar</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Malawi']) }}" @if ($dataId == 'Malawi') selected  @endif >Malawi</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Malaysia']) }}" @if ($dataId == 'Malaysia') selected  @endif >Malaysia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Maldives']) }}" @if ($dataId == 'Maldives') selected  @endif >Maldives</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Mali']) }}" @if ($dataId == 'Mali') selected  @endif >Mali</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Malta']) }}" @if ($dataId == 'Malta') selected  @endif >Malta</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Marshall Islands']) }}" @if ($dataId == 'Marshall Islands') selected  @endif >Marshall Islands</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Martinique']) }}" @if ($dataId == 'Martinique') selected  @endif >Martinique</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Mauritania']) }}" @if ($dataId == 'Mauritania') selected  @endif >Mauritania</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Mauritius']) }}" @if ($dataId == 'Mauritius') selected  @endif >Mauritius</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Mayotte']) }}" @if ($dataId == 'Mayotte') selected  @endif >Mayotte</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Mexico']) }}" @if ($dataId == 'Mexico') selected  @endif >Mexico</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Micronesia, Federated States of']) }}" @if ($dataId == 'Micronesia, Federated States of') selected  @endif >
                                Micronesia, Federated States of
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Moldova, Republic of']) }}" @if ($dataId == 'Moldova, Republic of') selected  @endif >
                                Moldova, Republic of
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Monaco']) }}" @if ($dataId == 'Monaco') selected  @endif >Monaco</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Mongolia']) }}" @if ($dataId == 'Mongolia') selected  @endif >Mongolia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Montenegro']) }}" @if ($dataId == 'Montenegro') selected  @endif >Montenegro</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Montserrat']) }}" @if ($dataId == 'Montserrat') selected  @endif >Montserrat</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Morocco']) }}" @if ($dataId == 'Morocco') selected  @endif >Morocco</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Mozambique']) }}" @if ($dataId == 'Mozambique') selected  @endif >Mozambique</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Myanmar']) }}" @if ($dataId == 'Myanmar') selected  @endif >Myanmar</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Namibia']) }}" @if ($dataId == 'Namibia') selected  @endif >Namibia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Nauru']) }}" @if ($dataId == 'Nauru') selected  @endif >Nauru</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Nepal']) }}" @if ($dataId == 'Nepal') selected  @endif >Nepal</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Netherlands']) }}" @if ($dataId == 'Netherlands') selected  @endif >Netherlands</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Netherlands Antilles']) }}" @if ($dataId == 'Netherlands Antilles') selected  @endif >
                                Netherlands Antilles
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'New Caledonia']) }}" @if ($dataId == 'New Caledonia') selected  @endif >New Caledonia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'New Zealand']) }}" @if ($dataId == 'New Zealand') selected  @endif >New Zealand</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Nicaragua']) }}" @if ($dataId == 'Nicaragua') selected  @endif >Nicaragua</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Niger']) }}" @if ($dataId == 'Niger') selected  @endif >Niger</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Nigeria']) }}" @if ($dataId == 'Nigeria') selected  @endif >Nigeria</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Niue']) }}" @if ($dataId == 'Niue') selected  @endif >Niue</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Norfolk Island']) }}" @if ($dataId == 'Norfolk Island') selected  @endif >Norfolk Island</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Northern Mariana Islands']) }}" @if ($dataId == 'Northern Mariana Islands') selected  @endif >
                                Northern Mariana Islands
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Norway']) }}" @if ($dataId == 'Norway') selected  @endif >Norway</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Oman']) }}" @if ($dataId == 'Oman') selected  @endif >Oman</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Pakistan']) }}" @if ($dataId == 'Pakistan') selected  @endif >Pakistan</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Palau']) }}" @if ($dataId == 'Palau') selected  @endif >Palau</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Palestinian Territory, Occupied']) }}" @if ($dataId == 'Palestinian Territory, Occupied') selected  @endif >
                                Palestinian Territory, Occupied
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Panama']) }}" @if ($dataId == 'Panama') selected  @endif >Panama</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Papua New Guinea']) }}" @if ($dataId == 'Papua New Guinea') selected  @endif >Papua New Guinea</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Paraguay']) }}" @if ($dataId == 'Paraguay') selected  @endif >Paraguay</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Peru']) }}" @if ($dataId == 'Peru') selected  @endif >Peru</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Philippines']) }}" @if ($dataId == 'Philippines') selected  @endif >Philippines</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Pitcairn']) }}" @if ($dataId == 'Pitcairn') selected  @endif >Pitcairn</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Poland']) }}" @if ($dataId == 'Poland') selected  @endif >Poland</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Portugal']) }}" @if ($dataId == 'Portugal') selected  @endif >Portugal</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Puerto Rico']) }}" @if ($dataId == 'Puerto Rico') selected  @endif >Puerto Rico</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Qatar']) }}" @if ($dataId == 'Qatar') selected  @endif >Qatar</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Reunion']) }}" @if ($dataId == 'Reunion') selected  @endif >Reunion</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Romania']) }}" @if ($dataId == 'Romania') selected  @endif >Romania</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Russian Federation']) }}" @if ($dataId == 'Russian Federation') selected  @endif >
                                Russian Federation
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Rwanda']) }}" @if ($dataId == 'Rwanda') selected  @endif >Rwanda</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Saint Helena']) }}" @if ($dataId == 'Saint Helena') selected  @endif >Saint Helena</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Saint Kitts and Nevis']) }}" @if ($dataId == 'Saint Kitts and Nevis') selected  @endif >
                                Saint Kitts and Nevis
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Saint Lucia']) }}" @if ($dataId == 'Saint Lucia') selected  @endif >Saint Lucia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Saint Pierre and Miquelon']) }}" @if ($dataId == 'Saint Pierre and Miquelon') selected  @endif >
                                Saint Pierre and Miquelon
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Saint Vincent and The Grenadines']) }}" @if ($dataId == 'Saint Vincent and The Grenadines') selected  @endif >
                                Saint Vincent and The Grenadines
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Samoa']) }}" @if ($dataId == 'Samoa') selected  @endif >Samoa</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'San Marino']) }}" @if ($dataId == 'San Marino') selected  @endif >San Marino</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Sao Tome and Principe']) }}" @if ($dataId == 'Sao Tome and Principe') selected  @endif >
                                Sao Tome and Principe
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Saudi Arabia']) }}" @if ($dataId == 'Saudi Arabia') selected  @endif >Saudi Arabia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Senegal']) }}" @if ($dataId == 'Senegal') selected  @endif >Senegal</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Serbia']) }}" @if ($dataId == 'Serbia') selected  @endif >Serbia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Seychelles']) }}" @if ($dataId == 'Seychelles') selected  @endif >Seychelles</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Sierra Leone']) }}" @if ($dataId == 'Sierra Leone') selected  @endif >Sierra Leone</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Singapore']) }}" @if ($dataId == 'Singapore') selected  @endif >Singapore</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Slovakia']) }}" @if ($dataId == 'Slovakia') selected  @endif >Slovakia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Slovenia']) }}" @if ($dataId == 'Slovenia') selected  @endif >Slovenia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Solomon Islands']) }}" @if ($dataId == 'Solomon Islands') selected  @endif >Solomon Islands</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Somalia']) }}" @if ($dataId == 'Somalia') selected  @endif >Somalia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'South Africa']) }}" @if ($dataId == 'South Africa') selected  @endif >South Africa</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'South Georgia and The South Sandwich Islands']) }}" @if ($dataId == 'South Georgia and The South Sandwich Islands') selected  @endif
                            >
                                South Georgia and The South Sandwich Islands
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Spain']) }}" @if ($dataId == 'Spain') selected  @endif >Spain</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Sri Lanka']) }}" @if ($dataId == 'Sri Lanka') selected  @endif >Sri Lanka</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Sudan']) }}" @if ($dataId == 'Sudan') selected  @endif >Sudan</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Suriname']) }}" @if ($dataId == 'Suriname') selected  @endif >Suriname</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Svalbard and Jan Mayen']) }}" @if ($dataId == 'Svalbard and Jan Mayen') selected  @endif >
                                Svalbard and Jan Mayen
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Swaziland']) }}" @if ($dataId == 'Swaziland') selected  @endif >Swaziland</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Sweden']) }}" @if ($dataId == 'Sweden') selected  @endif >Sweden</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Switzerland']) }}" @if ($dataId == 'Switzerland') selected  @endif >Switzerland</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Syrian Arab Republic']) }}" @if ($dataId == 'Syrian Arab Republic') selected  @endif >
                                Syrian Arab Republic
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Taiwan']) }}" @if ($dataId == 'Taiwan') selected  @endif >Taiwan</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Tajikistan']) }}" @if ($dataId == 'Tajikistan') selected  @endif >Tajikistan</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Tanzania, United Republic of']) }}" @if ($dataId == 'Tanzania, United Republic of') selected  @endif >
                                Tanzania, United Republic of
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Thailand']) }}" @if ($dataId == 'Thailand') selected  @endif >Thailand</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Timor-leste']) }}" @if ($dataId == 'Timor-leste') selected  @endif >Timor-leste</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Togo']) }}" @if ($dataId == 'Togo') selected  @endif >Togo</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Tokelau']) }}" @if ($dataId == 'Tokelau') selected  @endif >Tokelau</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Tonga']) }}" @if ($dataId == 'Tonga') selected  @endif >Tonga</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Trinidad and Tobago']) }}" @if ($dataId == 'Trinidad and Tobago') selected  @endif >
                                Trinidad and Tobago
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Tunisia']) }}" @if ($dataId == 'Tunisia') selected  @endif >Tunisia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Turkey']) }}" @if ($dataId == 'Turkey') selected  @endif >Turkey</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Turkmenistan']) }}" @if ($dataId == 'Turkmenistan') selected  @endif >Turkmenistan</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Turks and Caicos Islands']) }}" @if ($dataId == 'Turks and Caicos Islands') selected  @endif >
                                Turks and Caicos Islands
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Tuvalu']) }}" @if ($dataId == 'Tuvalu') selected  @endif >Tuvalu</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Uganda']) }}" @if ($dataId == 'Uganda') selected  @endif >Uganda</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Ukraine']) }}" @if ($dataId == 'Ukraine') selected  @endif >Ukraine</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'United Arab Emirates']) }}" @if ($dataId == 'United Arab Emirates') selected  @endif >
                                United Arab Emirates
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'United Kingdom']) }}" @if ($dataId == 'United Kingdom') selected  @endif >United Kingdom</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'United States']) }}" @if ($dataId == 'United States') selected  @endif >United States</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'United States Minor Outlying Islands']) }}" @if ($dataId == 'United States Minor Outlying Islands') selected  @endif >
                                United States Minor Outlying Islands
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Uruguay']) }}" @if ($dataId == 'Uruguay') selected  @endif >Uruguay</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Uzbekistan']) }}" @if ($dataId == 'Uzbekistan') selected  @endif >Uzbekistan</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Vanuatu']) }}" @if ($dataId == 'Vanuatu') selected  @endif >Vanuatu</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Venezuela']) }}" @if ($dataId == 'Venezuela') selected  @endif >Venezuela</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Viet Nam']) }}" @if ($dataId == 'Viet Nam') selected  @endif >Viet Nam</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Virgin Islands, British']) }}" @if ($dataId == 'Virgin Islands, British') selected  @endif >
                                Virgin Islands, British
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Virgin Islands, U.S.']) }}" @if ($dataId == 'Virgin Islands, U.S.') selected  @endif >
                                Virgin Islands, U.S.
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Wallis and Futuna']) }}" @if ($dataId == 'Wallis and Futuna') selected  @endif >
                                Wallis and Futuna
                            </a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Western Sahara']) }}" @if ($dataId == 'Western Sahara') selected  @endif >Western Sahara</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Yemen']) }}" @if ($dataId == 'Yemen') selected  @endif >Yemen</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Zambia']) }}" @if ($dataId == 'Zambia') selected  @endif >Zambia</a></li>
                            <li class="dropdown-item"><a href="{{ route('country', ['id' => 'Zimbabwe']) }}" @if ($dataId == 'Zimbabwe') selected  @endif >Zimbabwe</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SEARCH BARS -->

    <!-- START SECTION PEOPLE CARDS -->
    <section class="section-people-cards py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div
                        class="card u-box-shadow-1 border-0 u-border-radius h-100 bg-light"
                    >
                        <div class="card-body p-5">
                            <h4 class="card-title">
                                <div class="d-flex align-items-center pb-3 mb-4">
                                    <div class="circle-element circle-element--person">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <h1 class="sub-heading">Person Search</h1>
                                </div>
                            </h4>
                            <div>
                                <a href="{{ route('category', ['id' => 'A'])  }}" class="dark-link @if ($dataId == 'A') active  @endif">A</a>
                                <a href="{{ route('category', ['id' => 'B'])  }}" class="dark-link @if ($dataId == 'B') active  @endif">B</a>
                                <a href="{{ route('category', ['id' => 'C'])  }}" class="dark-link @if ($dataId == 'C') active  @endif">C</a>
                                <a href="{{ route('category', ['id' => 'D'])  }}" class="dark-link @if ($dataId == 'D') active  @endif">D</a>
                                <a href="{{ route('category', ['id' => 'E'])  }}" class="dark-link @if ($dataId == 'E') active  @endif">E</a>
                                <a href="{{ route('category', ['id' => 'F'])  }}" class="dark-link @if ($dataId == 'F') active  @endif">F</a>
                                <a href="{{ route('category', ['id' => 'G'])  }}" class="dark-link @if ($dataId == 'G') active  @endif">G</a>
                                <a href="{{ route('category', ['id' => 'H'])  }}" class="dark-link @if ($dataId == 'H') active  @endif">H</a>
                                <a href="{{ route('category', ['id' => 'I'])  }}" class="dark-link @if ($dataId == 'I') active  @endif">I</a>
                                <a href="{{ route('category', ['id' => 'J'])  }}" class="dark-link @if ($dataId == 'J') active  @endif">J</a>
                                <a href="{{ route('category', ['id' => 'K'])  }}" class="dark-link @if ($dataId == 'K') active  @endif">K</a>
                                <a href="{{ route('category', ['id' => 'L'])  }}" class="dark-link @if ($dataId == 'L') active  @endif">L</a>
                                <a href="{{ route('category', ['id' => 'M'])  }}" class="dark-link @if ($dataId == 'M') active  @endif">M</a>
                                <a href="{{ route('category', ['id' => 'N'])  }}" class="dark-link @if ($dataId == 'N') active  @endif">N</a>
                                <a href="{{ route('category', ['id' => 'O'])  }}" class="dark-link @if ($dataId == 'O') active  @endif">O</a>
                                <a href="{{ route('category', ['id' => 'P'])  }}" class="dark-link @if ($dataId == 'P') active  @endif">P</a>
                                <a href="{{ route('category', ['id' => 'Q'])  }}" class="dark-link @if ($dataId == 'Q') active  @endif">Q</a>
                                <a href="{{ route('category', ['id' => 'R'])  }}" class="dark-link @if ($dataId == 'R') active  @endif">R</a>
                                <a href="{{ route('category', ['id' => 'S'])  }}" class="dark-link @if ($dataId == 'S') active  @endif">S</a>
                                <a href="{{ route('category', ['id' => 'T'])  }}" class="dark-link @if ($dataId == 'T') active  @endif">T</a>
                                <a href="{{ route('category', ['id' => 'U'])  }}" class="dark-link @if ($dataId == 'U') active  @endif">U</a>
                                <a href="{{ route('category', ['id' => 'V'])  }}" class="dark-link @if ($dataId == 'V') active  @endif">V</a>
                                <a href="{{ route('category', ['id' => 'W'])  }}" class="dark-link @if ($dataId == 'W') active  @endif">W</a>
                                <a href="{{ route('category', ['id' => 'X'])  }}" class="dark-link @if ($dataId == 'X') active  @endif">X</a>
                                <a href="{{ route('category', ['id' => 'Y'])  }}" class="dark-link @if ($dataId == 'Y') active  @endif">Y</a>
                                <a href="{{ route('category', ['id' => 'Z'])  }}" class="dark-link @if ($dataId == 'Z') active  @endif">Z</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-5">
                    <div class="card bg-transparent u-border-radius h-100">
                        <div class="card-body d-flex align-items-center px-5 mx-5">
                            <div class="col-md-4 px-4 mx-3">
                                <img
                                    src="{{ asset('/') }}/adminAsset/assets/images/data.svg"
                                    class="img-fluid"
                                    alt="illustration"
                                />
                            </div>
                            <div class="col-md-8">
                    <span class="heading--sub mb-4">
                      Reach your target contacts faster with Phone Number List
                    </span>
                                <a
                                    href="{{ route('/phonelistUserRegister') }}"
                                    type="button"
                                    class="btn btn-grad px-4 mt-3"
                                >
                                    Sign Up For Free
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION PEOPLE CARDS -->

    <!-- START SECTION MESSAGE -->
    <section class="section-message py-5 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-body p-5">
                  <span class="card-text no-data d-none">
                    No Person pages found for:
                    <span class="text-secondary">A</span>
                  </span>
                            <h2 class="card-text text-dark fw-bold fst-normal fs-3">
                                Person Directory:
                                <span class="text-dark fw-bold fst-normal">A</span>
                            </h2>
                            <p class="card-text">
                                @forelse ($data as $allData)
                                    <a href="{{ route('user', ['id' => $allData->id]) }}" class="user-link"
                                    >{{$allData->first_name." ".$allData->last_name }}</a>
                                @empty
                                    <h2 class="card-text no-data">
                                        No Person pages found for:
                                        <span class="text-secondary">{{ $dataId }}</span>
                                    </h2>
                                @endforelse
                            </p>
                            <div class="card-footer bg-transparent border-0">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
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

@endsection

