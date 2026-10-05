<?php

$pageTitle = "Customer Details";

ob_start();
?>

<div class="mb-4">

    <a href="customers.php" class="text-decoration-none text-success">
        <i class="bi bi-arrow-left"></i>
        Back to Customers
    </a>

</div>


<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">

    <div>
        <h3 class="fw-bold mb-1">Customer Details</h3>
        <p class="text-muted mb-0">
            View customer information and account activity.
        </p>
    </div>

    <div class="d-flex flex-wrap gap-2">

        <button class="btn btn-outline-success">
            <i class="bi bi-pencil"></i>
            Edit
        </button>

        <button class="btn btn-outline-danger">
            <i class="bi bi-person-x"></i>
            Deactivate
        </button>

    </div>

</div>


<div class="row g-4">

    <!-- Customer Information -->
    <div class="col-12 col-lg-8">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body">

                <div class="d-flex align-items-center gap-3 mb-4">

                    <div class="customer-avatar">
                        <i class="bi bi-person"></i>
                    </div>

                    <div>
                        <h4 class="fw-bold mb-1">Rahul Patel</h4>

                        <span class="badge text-bg-success">
                            Active
                        </span>
                    </div>

                </div>


                <h5 class="fw-semibold mb-3">
                    Personal Information
                </h5>


                <div class="row g-3">

                    <div class="col-12 col-md-6">

                        <small class="text-muted">Full Name</small>

                        <div class="fw-semibold mt-1">
                            Rahul Patel
                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <small class="text-muted">Mobile Number</small>

                        <div class="fw-semibold mt-1">
                            98765 43210
                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <small class="text-muted">Email</small>

                        <div class="fw-semibold mt-1">
                            rahul@gmail.com
                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <small class="text-muted">City / Village</small>

                        <div class="fw-semibold mt-1">
                            Rajkot
                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <small class="text-muted">District</small>

                        <div class="fw-semibold mt-1">
                            Rajkot
                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <small class="text-muted">State</small>

                        <div class="fw-semibold mt-1">
                            Gujarat
                        </div>

                    </div>


                    <div class="col-12">

                        <small class="text-muted">Address</small>

                        <div class="fw-semibold mt-1">
                            25, University Road, Rajkot, Gujarat
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Recent Orders -->
        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="mb-3">

                    <h5 class="fw-semibold mb-1">
                        Recent Orders
                    </h5>

                    <small class="text-muted">
                        Customer's latest orders.
                    </small>

                </div>


                <div class="table-responsive">

                    <table class="table align-middle mb-0">

                        <thead>

                            <tr>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td>#ORD001</td>

                                <td>05 Oct 2026</td>

                                <td>₹850</td>

                                <td>
                                    <span class="badge text-bg-success">
                                        Delivered
                                    </span>
                                </td>

                                <td>
                                    <a href="orders.php"
                                        class="btn btn-sm btn-light">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>

                            </tr>


                            <tr>

                                <td>#ORD014</td>

                                <td>28 Sep 2026</td>

                                <td>₹620</td>

                                <td>
                                    <span class="badge text-bg-primary">
                                        Confirmed
                                    </span>
                                </td>

                                <td>
                                    <a href="orders.php"
                                        class="btn btn-sm btn-light">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>

                            </tr>


                            <tr>

                                <td>#ORD022</td>

                                <td>20 Sep 2026</td>

                                <td>₹1,250</td>

                                <td>
                                    <span class="badge text-bg-success">
                                        Delivered
                                    </span>
                                </td>

                                <td>
                                    <a href="orders.php"
                                        class="btn btn-sm btn-light">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>

                            </tr>

                        </tbody>

                    </table>
                </div>

            </div>

        </div>

    </div>


    <!-- Account Summary -->
    <div class="col-12 col-lg-4">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body">

                <h5 class="fw-semibold mb-4">
                    Account Summary
                </h5>


                <div class="d-flex justify-content-between mb-3">

                    <span class="text-muted">
                        Customer ID
                    </span>

                    <span class="fw-semibold">
                        CUS001
                    </span>

                </div>


                <div class="d-flex justify-content-between mb-3">

                    <span class="text-muted">
                        Total Orders
                    </span>

                    <span class="fw-semibold">
                        12
                    </span>

                </div>


                <div class="d-flex justify-content-between mb-3">

                    <span class="text-muted">
                        Total Spent
                    </span>

                    <span class="fw-semibold">
                        ₹8,450
                    </span>

                </div>


                <div class="d-flex justify-content-between mb-3">

                    <span class="text-muted">
                        Joined Date
                    </span>

                    <span class="fw-semibold">
                        15 Aug 2026
                    </span>

                </div>


                <div class="d-flex justify-content-between">

                    <span class="text-muted">
                        Status
                    </span>

                    <span class="badge text-bg-success">
                        Active
                    </span>

                </div>

            </div>

        </div>


        <!-- Quick Actions -->
        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <h5 class="fw-semibold mb-3">
                    Quick Actions
                </h5>


                <div class="d-grid gap-2">

                    <button class="btn btn-outline-success">
                        <i class="bi bi-pencil me-1"></i>
                        Edit Customer
                    </button>

                    <button class="btn btn-outline-warning">
                        <i class="bi bi-person-x me-1"></i>
                        Deactivate Account
                    </button>

                    <button class="btn btn-outline-danger">
                        <i class="bi bi-trash me-1"></i>
                        Delete Customer
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "adminlayout.php";

?>
