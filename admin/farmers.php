<?php

$pageTitle = "Farmers";

ob_start();
?>

<div class="mb-4">
    <h3 class="fw-bold mb-1">Farmers</h3>
    <p class="text-muted mb-0">
        Manage all registered farmers.
    </p>
</div>


<!-- Summary Cards -->
<div class="row g-3 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Total Farmers</small>
                <h3 class="fw-bold mt-2 mb-0">85</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Active Farmers</small>
                <h3 class="fw-bold mt-2 mb-0">78</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Inactive Farmers</small>
                <h3 class="fw-bold mt-2 mb-0">7</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">New This Month</small>
                <h3 class="fw-bold mt-2 mb-0">5</h3>
            </div>
        </div>
    </div>

</div>


<!-- Farmer List -->
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row justify-content-between gap-3 mb-4">

            <div>
                <h5 class="fw-semibold mb-1">Farmer List</h5>
                <small class="text-muted">
                    View and manage registered farmers.
                </small>
            </div>

            <div class="d-flex gap-2">

                <input type="text"
                    class="form-control"
                    placeholder="Search farmer">

                <select class="form-select">
                    <option>All Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>

            </div>

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Farmer</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Village</th>
                        <th>Status</th>
                        <th>Joined</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>

                        <td>1</td>

                        <td>
                            <div class="fw-semibold">
                                Rajesh Patel
                            </div>
                        </td>

                        <td>98765 11223</td>

                        <td>rajesh@gmail.com</td>

                        <td>Rajkot</td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                        <td>05 Oct 2026</td>

                        <td>
                            <div class="d-flex gap-1">

                                <a href="farmer-details.php"
                                    class="btn btn-sm btn-light"
                                    title="View">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <button class="btn btn-sm btn-light"
                                    title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm btn-light text-danger"
                                    title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>
                        </td>

                    </tr>


                    <tr>

                        <td>2</td>

                        <td>
                            <div class="fw-semibold">
                                Mahesh Patel
                            </div>
                        </td>

                        <td>98765 22334</td>

                        <td>mahesh@gmail.com</td>

                        <td>Gondal</td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                        <td>04 Oct 2026</td>

                        <td>
                            <div class="d-flex gap-1">

                                <a href="farmer-details.php"
                                    class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm btn-light text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>
                        </td>

                    </tr>


                    <tr>

                        <td>3</td>

                        <td>
                            <div class="fw-semibold">
                                Ramesh Patel
                            </div>
                        </td>

                        <td>91234 55667</td>

                        <td>ramesh@gmail.com</td>

                        <td>Jetpur</td>

                        <td>
                            <span class="badge text-bg-danger">
                                Inactive
                            </span>
                        </td>

                        <td>02 Oct 2026</td>

                        <td>
                            <div class="d-flex gap-1">

                                <a href="farmer-details.php"
                                    class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm btn-light text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>
                        </td>

                    </tr>


                    <tr>

                        <td>4</td>

                        <td>
                            <div class="fw-semibold">
                                Kiran Patel
                            </div>
                        </td>

                        <td>99887 66554</td>

                        <td>kiran@gmail.com</td>

                        <td>Morbi</td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                        <td>01 Oct 2026</td>

                        <td>
                            <div class="d-flex gap-1">

                                <a href="farmer-details.php"
                                    class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm btn-light text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>
                        </td>

                    </tr>

                </tbody>

            </table>
        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "adminlayout.php";

?>