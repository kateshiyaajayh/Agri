<?php

$pageTitle = "Customers";

ob_start();
?>

<div class="customers-page">
<div class="mb-4">
    <h3 class="fw-bold mb-1">Customers</h3>
    <p class="text-muted mb-0">
        Manage all registered customers.
    </p>
</div>


<!-- Summary -->
<div class="row g-3 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Total Customers</small>
                <h3 class="fw-bold mt-2 mb-0">250</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Active Customers</small>
                <h3 class="fw-bold mt-2 mb-0">230</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Inactive Customers</small>
                <h3 class="fw-bold mt-2 mb-0">20</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">New This Month</small>
                <h3 class="fw-bold mt-2 mb-0">18</h3>
            </div>
        </div>
    </div>

</div>


<!-- Customer List -->
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row justify-content-between gap-3 mb-4">

            <div>
                <h5 class="fw-semibold mb-1">Customer List</h5>
                <small class="text-muted">
                    View and manage registered customers.
                </small>
            </div>

            <div class="admin-list-filters d-flex flex-column flex-sm-row gap-2 w-100">

                <input type="text"
                    class="form-control"
                    placeholder="Search customer">

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
                        <th>Customer</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Status</th>
                        <th>Joined</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>

                        <td>
                            <div class="fw-semibold">Rahul Patel</div>
                        </td>

                        <td>98765 43210</td>

                        <td>rahul@gmail.com</td>

                        <td>Rajkot</td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                        <td>05 Oct 2026</td>

                        <td>
                            <div class="d-flex gap-1">

                                <a href="customer-details.php"
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
                            <div class="fw-semibold">Amit Shah</div>
                        </td>

                        <td>98765 12345</td>

                        <td>amit@gmail.com</td>

                        <td>Ahmedabad</td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                        <td>04 Oct 2026</td>

                        <td>
                            <div class="d-flex gap-1">

                                <a href="customer-details.php"
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
                            <div class="fw-semibold">Neha Joshi</div>
                        </td>

                        <td>91234 56789</td>

                        <td>neha@gmail.com</td>

                        <td>Rajkot</td>

                        <td>
                            <span class="badge text-bg-danger">
                                Inactive
                            </span>
                        </td>

                        <td>02 Oct 2026</td>

                        <td>
                            <div class="d-flex gap-1">

                                <a href="customer-details.php"
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
                            <div class="fw-semibold">Priya Shah</div>
                        </td>

                        <td>99887 66554</td>

                        <td>priya@gmail.com</td>

                        <td>Gondal</td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                        <td>01 Oct 2026</td>

                        <td>
                            <div class="d-flex gap-1">

                                <a href="customer-details.php"
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

</div>


<?php

$content = ob_get_clean();

include "adminlayout.php";

?>
