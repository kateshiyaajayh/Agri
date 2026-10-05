<?php

$pageTitle = "Orders";

ob_start();
?>

<div class="mb-4">
    <h3 class="fw-bold mb-1">Orders</h3>
    <p class="text-muted mb-0">
        Manage all customer orders.
    </p>
</div>


<!-- Summary Cards -->
<div class="row g-3 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Total Orders</small>
                <h3 class="fw-bold mt-2 mb-0">560</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Pending</small>
                <h3 class="fw-bold mt-2 mb-0">18</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Delivered</small>
                <h3 class="fw-bold mt-2 mb-0">485</h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Cancelled</small>
                <h3 class="fw-bold mt-2 mb-0">24</h3>
            </div>
        </div>
    </div>

</div>


<!-- Order List -->
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row justify-content-between gap-3 mb-4">

            <div>
                <h5 class="fw-semibold mb-1">
                    Order List
                </h5>

                <small class="text-muted">
                    View and manage customer orders.
                </small>
            </div>


            <div class="d-flex flex-column flex-sm-row gap-2">

                <input type="text"
                    class="form-control"
                    placeholder="Search order">

                <select class="form-select">

                    <option>All Status</option>
                    <option>Pending</option>
                    <option>Confirmed</option>
                    <option>Delivered</option>
                    <option>Cancelled</option>

                </select>

            </div>

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Farmer</th>
                        <th>Items</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>


                <tbody>

                    <tr>

                        <td>
                            <span class="fw-semibold">
                                #ORD001
                            </span>
                        </td>

                        <td>
                            Rahul Patel
                        </td>

                        <td>
                            Rajesh Patel
                        </td>

                        <td>
                            3
                        </td>

                        <td>
                            ₹850
                        </td>

                        <td>
                            <span class="badge text-bg-success">
                                Delivered
                            </span>
                        </td>

                        <td>
                            05 Oct 2026
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light"
                                    title="View">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-sm btn-light"
                                    title="Edit Status">
                                    <i class="bi bi-pencil"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <tr>

                        <td>
                            <span class="fw-semibold">
                                #ORD002
                            </span>
                        </td>

                        <td>
                            Amit Shah
                        </td>

                        <td>
                            Mahesh Patel
                        </td>

                        <td>
                            2
                        </td>

                        <td>
                            ₹620
                        </td>

                        <td>
                            <span class="badge text-bg-warning">
                                Pending
                            </span>
                        </td>

                        <td>
                            05 Oct 2026
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-pencil"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <tr>

                        <td>
                            <span class="fw-semibold">
                                #ORD003
                            </span>
                        </td>

                        <td>
                            Neha Joshi
                        </td>

                        <td>
                            Ramesh Patel
                        </td>

                        <td>
                            4
                        </td>

                        <td>
                            ₹1,250
                        </td>

                        <td>
                            <span class="badge text-bg-primary">
                                Confirmed
                            </span>
                        </td>

                        <td>
                            04 Oct 2026
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-pencil"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <tr>

                        <td>
                            <span class="fw-semibold">
                                #ORD004
                            </span>
                        </td>

                        <td>
                            Priya Shah
                        </td>

                        <td>
                            Kiran Patel
                        </td>

                        <td>
                            1
                        </td>

                        <td>
                            ₹540
                        </td>

                        <td>
                            <span class="badge text-bg-danger">
                                Cancelled
                            </span>
                        </td>

                        <td>
                            04 Oct 2026
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-pencil"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <tr>

                        <td>
                            <span class="fw-semibold">
                                #ORD005
                            </span>
                        </td>

                        <td>
                            Harsh Patel
                        </td>

                        <td>
                            Rajesh Patel
                        </td>

                        <td>
                            2
                        </td>

                        <td>
                            ₹980
                        </td>

                        <td>
                            <span class="badge text-bg-info">
                                Out for Delivery
                            </span>
                        </td>

                        <td>
                            03 Oct 2026
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-pencil"></i>
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