<?php

$pageTitle = "Notifications";

ob_start();
?>

<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">

    <div>
        <h3 class="fw-bold mb-1">Notifications</h3>
        <p class="text-muted mb-0">
            Manage notifications for customers and farmers.
        </p>
    </div>

    <button class="btn btn-success">
        <i class="bi bi-plus-lg me-1"></i>
        Add Notification
    </button>

</div>


<!-- Summary -->
<div class="row g-3 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <small class="text-muted">Total Notifications</small>
                <h3 class="fw-bold mt-2 mb-0">24</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <small class="text-muted">For Customers</small>
                <h3 class="fw-bold mt-2 mb-0">12</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <small class="text-muted">For Farmers</small>
                <h3 class="fw-bold mt-2 mb-0">9</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <small class="text-muted">Unread</small>
                <h3 class="fw-bold mt-2 mb-0">7</h3>
            </div>
        </div>
    </div>

</div>


<!-- Notification List -->
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row justify-content-between gap-3 mb-4">

            <div>
                <h5 class="fw-semibold mb-1">
                    Notification List
                </h5>

                <small class="text-muted">
                    View and manage sent notifications.
                </small>
            </div>

            <select class="form-select" style="max-width: 180px;">

                <option>All Users</option>
                <option>Customers</option>
                <option>Farmers</option>

            </select>

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Sent To</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>


                <tbody>

                    <tr>

                        <td>1</td>

                        <td>
                            <span class="fw-semibold">
                                New Government Scheme
                            </span>
                        </td>

                        <td>
                            New dairy scheme is available.
                        </td>

                        <td>
                            <span class="badge text-bg-primary">
                                Farmers
                            </span>
                        </td>

                        <td>
                            05 Oct 2026
                        </td>

                        <td>
                            <span class="badge text-bg-success">
                                Sent
                            </span>
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-sm btn-light text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <tr>

                        <td>2</td>

                        <td>
                            <span class="fw-semibold">
                                Order Update
                            </span>
                        </td>

                        <td>
                            Your order has been confirmed.
                        </td>

                        <td>
                            <span class="badge text-bg-success">
                                Customers
                            </span>
                        </td>

                        <td>
                            05 Oct 2026
                        </td>

                        <td>
                            <span class="badge text-bg-success">
                                Sent
                            </span>
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
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
                            <span class="fw-semibold">
                                Profile Update
                            </span>
                        </td>

                        <td>
                            Please update your profile information.
                        </td>

                        <td>
                            <span class="badge text-bg-secondary">
                                All Users
                            </span>
                        </td>

                        <td>
                            04 Oct 2026
                        </td>

                        <td>
                            <span class="badge text-bg-success">
                                Sent
                            </span>
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
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
                            <span class="fw-semibold">
                                System Maintenance
                            </span>
                        </td>

                        <td>
                            System maintenance scheduled tonight.
                        </td>

                        <td>
                            <span class="badge text-bg-secondary">
                                All Users
                            </span>
                        </td>

                        <td>
                            03 Oct 2026
                        </td>

                        <td>
                            <span class="badge text-bg-warning">
                                Scheduled
                            </span>
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
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