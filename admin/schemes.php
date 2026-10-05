<?php

$pageTitle = "Government Schemes";

ob_start();
?>

<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">

    <div>
        <h3 class="fw-bold mb-1">Government Schemes</h3>
        <p class="text-muted mb-0">
            Manage government schemes for farmers.
        </p>
    </div>

    <a href="add-scheme.php" class="btn btn-success">
        <i class="bi bi-plus-lg me-1"></i>
        Add Scheme
    </a>

</div>


<!-- Summary -->
<div class="row g-3 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <small class="text-muted">Total Schemes</small>
                <h3 class="fw-bold mt-2 mb-0">8</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <small class="text-muted">Active</small>
                <h3 class="fw-bold mt-2 mb-0">6</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <small class="text-muted">Inactive</small>
                <h3 class="fw-bold mt-2 mb-0">2</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <small class="text-muted">For Farmers</small>
                <h3 class="fw-bold mt-2 mb-0">8</h3>
            </div>
        </div>
    </div>

</div>


<!-- Scheme List -->
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row justify-content-between gap-3 mb-4">

            <div>
                <h5 class="fw-semibold mb-1">
                    Scheme List
                </h5>

                <small class="text-muted">
                    View and manage government schemes.
                </small>
            </div>

            <div class="d-flex gap-2">

                <input type="text"
                    class="form-control"
                    placeholder="Search scheme">

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
                        <th>Scheme Name</th>
                        <th>Category</th>
                        <th>Last Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>

                        <td>1</td>

                        <td>
                            <div class="fw-semibold">
                                Dairy Development Scheme
                            </div>

                            <small class="text-muted">
                                Support for dairy farmers
                            </small>
                        </td>

                        <td>
                            Dairy
                        </td>

                        <td>
                            31 Dec 2026
                        </td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light"
                                    title="View">
                                    <i class="bi bi-eye"></i>
                                </button>

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
                                Animal Health Support
                            </div>

                            <small class="text-muted">
                                Veterinary and vaccination support
                            </small>
                        </td>

                        <td>
                            Animal Health
                        </td>

                        <td>
                            15 Nov 2026
                        </td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </button>

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
                                Farmer Infrastructure Support
                            </div>

                            <small class="text-muted">
                                Support for farm infrastructure
                            </small>
                        </td>

                        <td>
                            Infrastructure
                        </td>

                        <td>
                            20 Dec 2026
                        </td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </button>

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
                                Farmer Financial Assistance
                            </div>

                            <small class="text-muted">
                                Financial support for farmers
                            </small>
                        </td>

                        <td>
                            Financial
                        </td>

                        <td>
                            30 Sep 2026
                        </td>

                        <td>
                            <span class="badge text-bg-secondary">
                                Inactive
                            </span>
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </button>

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