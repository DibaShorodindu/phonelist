@extends('userDashboard.master')


@section('title')
    You | Phone List
@endsection

@section('body')
    <section class="section-user-dashboard">
            <!-- START SIDEBAR -->
            <section class="section-user-dashboard--sidebar">
                <div class="heading--sub py-3 ps-4 u-border-bottom">Filters</div>

                <!-- INPUT NAME -->
                <div class="input-name u-border-bottom py-4 px-4">
                    <div class="input-name--title pb-2">
                        <i class="bi bi-person-badge pe-2"></i>
                        Name
                    </div>
                    <input
                        type="text"
                        name="name"
                        id="searchPeople"
                        placeholder="Enter name..."
                        onkeyup="searchPeople()"
                    />
                </div>

                <!-- INPUT GENDER -->
                <div class="input-gender u-border-bottom py-4 px-4">
                    <div class="input-gender--title pb-2">
                        <i class="bi bi-gender-ambiguous pe-2"></i>
                        Gender
                    </div>
                    <input
                        type="text"
                        name="gender"
                        id="gender"
                        placeholder="Enter gender..."
                    />
                </div>

                <!-- INPUT RELATIONSHIP STATUS -->
                <div class="input-relationship u-border-bottom py-4 px-4">
                    <div class="input-relationship--title pb-2">
                        <i class="bi bi-heart-fill pe-2"></i>
                        Relationship Status
                    </div>
                    <input
                        type="text"
                        name="relationship"
                        id="relationship"
                        placeholder="Enter relationship status..."
                    />
                </div>

                <!-- INPUT CURRENT ADDRESS -->
                <div class="input-currentAdd u-border-bottom py-4 px-4">
                    <div class="input-currentAdd--title pb-2">
                        <i class="bi bi-pin-map-fill"></i>
                        Current Address
                    </div>
                    <input
                        type="text"
                        name="currentAdd"
                        id="currentAdd"
                        placeholder="Enter current address..."
                    />
                </div>

                <!-- INPUT HOMETOWN -->
                <div class="input-hometown u-border-bottom py-4 px-4">
                    <div class="input-hometown--title pb-2">
                        <i class="bi bi-house-door-fill"></i>
                        Hometown
                    </div>
                    <input
                        type="text"
                        name="hometown"
                        id="hometown"
                        placeholder="Enter hometown..."
                    />
                </div>

                <!-- INPUT COUNTRY -->
                <div class="input-country py-4 px-4">
                    <div class="input-country--title pb-2">
                        <i class="bi bi-globe2 pe-2"></i>
                        Country
                    </div>
                    <input
                        type="text"
                        name="country"
                        id="country"
                        placeholder="Enter country..."
                    />
                </div>

                <!-- TODO Remove if unused -->
                <!-- INPUT JOB TITLE -->
                <!-- <div class="input-job u-border-bottom py-4 px-4">
                      <div class="input-job--title pb-4">
                        <i class="bi bi-briefcase pe-2"></i>
                        Job Title
                      </div>
                      <input type="text" name="job" id="job" placeholder="Search for a job title" />
                      <ul id="jobList" class="jobList hide">
                        <li>software engineer</li>
                        <li>project manager</li>
                        <li>teacher</li>
                        <li>owner</li>
                        <li>student</li>
                      </ul>
                    </div> -->
            </section>
            <!-- END SIDEBAR -->

            <!-- START MAIN DASHBOARD -->
            <section class="section-user-dashboard--main">
                <!-- START TABLE -->
                <div
                    class="section-table table-scrollable mx-5 mt-5 mb-2"
                    style="width: 75vw; overflow: auto; max-height: 85vh"
                >
                    <div class="container">
                        <div class="row">
                            <table
                                class="table table-hover table-bordered table-responsive"
                                id="peopleTable"
                            >
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Facebook Profile</th>
                                    <th>Quick Actions</th>
                                    <th>Gender</th>
                                    <th>Relationship Status</th>
                                    <th>Work Place</th>
                                    <th>Last Education Year</th>
                                    <th>Current Address</th>
                                    <th>Home Town</th>
                                    <th>Country</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr class="table-row">
                                    <td>
                                        <a href="user01.html" class="person-name">
                                            Shamonti Haque
                                        </a>
                                    </td>
                                    <td>
                                        <a
                                            href="https://www.facebook.com/1234
                  "
                                        >https://www.facebook.com/1234
                                        </a>
                                    </td>
                                    <td>
                                        <a
                                            class="btn btn-access btn-access--phone"
                                            href="pricing/packages.html"
                                        >
                                            <i class="bi bi-phone"></i>
                                            <i class="bi bi-caret-down-fill"></i>
                                        </a>
                                        <a
                                            class="btn btn-access btn-access--email"
                                            href="pricing/packages.html"
                                        >
                                            <i class="bi bi-envelope"></i>
                                            <i class="bi bi-caret-down-fill"></i>
                                        </a>
                                    </td>
                                    <td>Female</td>
                                    <td>Single</td>
                                    <td>SEO Exparte Bangladesh</td>
                                    <td>2019</td>
                                    <td>Bogra, Bangladesh</td>
                                    <td>Dinajpur, Bangladesh</td>
                                    <td>Bangladesh</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END TABLE -->

                <!-- START PAGINATION -->
                <nav aria-label="User Dashboard All Data Page navigation">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END PAGINATION -->
            </section>
            <!-- END MAIN DASHBOARD -->
        </section>

    <!-- TODO Remove if unused -->
    <!-- JOB TITLE FILTER -->
    <!-- <script>
    $(document).ready(function () {
      $('#job').on('keyup', function () {
        var value = $(this).val().toLowerCase();
        $('#jobList li').filter(function () {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
      });
    });
    </script> -->
@endsection



