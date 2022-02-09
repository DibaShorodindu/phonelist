@extends('front.master')

@section('metaDescription')
    List of contacts in Phone Number List's database for names starting with A
@endsection


@section('title')
    People Directory: {{ $dataId }} | Phone List
@endsection

@section('main')
    <!-- START SEARCH BARS -->
    <section class="section-searchbar pt-md-5 pb-md-4 py-2 mt-md-0 mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 ms-auto">
                    <input type="text" name="search" id="searchPeople"
                           class="searchBar w-100 bg-white border-5 text-dark fw-normal" onkeyup="searchPeople()"
                           placeholder="Search Person by Name..." />
                </div>
                <div class="col-md-3 col-6">
                    <input type="text" name="search" id="searchPeopleCountry"
                           class="searchBar w-100 bg-white border-5 text-dark fw-normal" onkeyup="searchPeople()"
                           placeholder="Search Person by Country..." />
                </div>
            </div>
        </div>
    </section>
    <!-- END SEARCH BARS -->
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
@endsection
