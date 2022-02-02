
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
        <link rel="stylesheet" href="{{ asset('/') }}/adminAsset/assets/css/style.css" />

        <title>Lidata</title>
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
                    <a class="navbar-brand d-block ms-5 ps-5" href="../../home.html">
                        <img
                            src="{{ asset('/') }}/adminAsset/assets/images/logo--company-name-dark.png"
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
                                        <div class="d-flex align-items-center pb-3 mb-4">
                                            <div class="circle-element circle-element--person">
                                                <i class="bi bi-people-fill"></i>
                                            </div>
                                            <span class="sub-heading">Person Search</span>
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
                        <div class="col-md-6">
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
                                    <h2 class="card-text no-data">

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
        </header>

        <main></main>

        <!-- Custom JS -->

        <script src="{{ asset('/') }}/adminAsset/assets/js/script.js"></script>

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
