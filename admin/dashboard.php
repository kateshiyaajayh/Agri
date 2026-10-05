<?php

$pageTitle = "Dashboard";

ob_start();
?>

<div class="mb-4">
    <h3 class="fw-bold mb-1">Welcome, Admin</h3>
    <p class="text-muted mb-0">
        Here's what's happening in SmartDairyPro.
    </p>
</div>


<!-- Summary Cards -->
<div class="row g-3 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <small class="text-muted">Total Customers</small>
                        <h3 class="fw-bold mt-2 mb-0">250</h3>
                    </div>
                    <div class="text-success fs-3">
                        <i class="bi bi-people"></i>
                    </div>
                </div>
                <small class="text-success">
                    <i class="bi bi-arrow-up"></i> 12 this month
                </small>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <small class="text-muted">Total Farmers</small>
                        <h3 class="fw-bold mt-2 mb-0">85</h3>
                    </div>
                    <div class="text-success fs-3">
                        <i class="bi bi-person-badge"></i>
                    </div>
                </div>
                <small class="text-success">
                    <i class="bi bi-arrow-up"></i> 5 this month
                </small>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <small class="text-muted">Total Products</small>
                        <h3 class="fw-bold mt-2 mb-0">120</h3>
                    </div>
                    <div class="text-success fs-3">
                        <i class="bi bi-box-seam"></i>
                    </div>
                </div>
                <small class="text-muted">
                    Available in market
                </small>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <small class="text-muted">Total Orders</small>
                        <h3 class="fw-bold mt-2 mb-0">560</h3>
                    </div>
                    <div class="text-success fs-3">
                        <i class="bi bi-cart3"></i>
                    </div>
                </div>
                <small class="text-warning">
                    18 pending
                </small>
            </div>
        </div>
    </div>

</div>


<!-- Second Row -->
<div class="row g-3 mb-4">

    <div class="col-12 col-md-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <small class="text-muted">Today's Orders</small>
                <h3 class="fw-bold mt-2 mb-0">24</h3>
                <small class="text-success">
                    <i class="bi bi-arrow-up"></i> 8% from yesterday
                </small>
            </div>
        </div>
    </div>


    <div class="col-12 col-md-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <small class="text-muted">Today's Sales</small>
                <h3 class="fw-bold mt-2 mb-0">₹18,500</h3>
                <small class="text-success">
                    <i class="bi bi-arrow-up"></i> 6% from yesterday
                </small>
            </div>
        </div>
    </div>


    <div class="col-12 col-md-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <small class="text-muted">Active Schemes</small>
                <h3 class="fw-bold mt-2 mb-0">6</h3>
                <small class="text-muted">
                    Government schemes
                </small>
            </div>
        </div>
    </div>

</div>


<!-- Recent Orders -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h5 class="fw-semibold mb-1">Recent Orders</h5>
                <small class="text-muted">Latest customer orders</small>
            </div>

            <a href="orders.php" class="btn btn-sm btn-outline-success">
                View All
            </a>
        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Farmer</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>#ORD001</td>
                        <td>Rahul Patel</td>
                        <td>Rajesh Patel</td>
                        <td>₹850</td>
                        <td>
                            <span class="badge text-bg-success">
                                Delivered
                            </span>
                        </td>
                        <td>05 Oct 2026</td>
                    </tr>

                    <tr>
                        <td>#ORD002</td>
                        <td>Amit Shah</td>
                        <td>Mahesh Patel</td>
                        <td>₹620</td>
                        <td>
                            <span class="badge text-bg-warning">
                                Pending
                            </span>
                        </td>
                        <td>05 Oct 2026</td>
                    </tr>

                    <tr>
                        <td>#ORD003</td>
                        <td>Neha Joshi</td>
                        <td>Ramesh Patel</td>
                        <td>₹1,250</td>
                        <td>
                            <span class="badge text-bg-primary">
                                Confirmed
                            </span>
                        </td>
                        <td>04 Oct 2026</td>
                    </tr>

                    <tr>
                        <td>#ORD004</td>
                        <td>Priya Shah</td>
                        <td>Kiran Patel</td>
                        <td>₹540</td>
                        <td>
                            <span class="badge text-bg-danger">
                                Cancelled
                            </span>
                        </td>
                        <td>04 Oct 2026</td>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>

</div>


<!-- Customers & Farmers -->
<div class="row g-3">

    <div class="col-12 col-lg-6">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5 class="fw-semibold mb-1">Recent Customers</h5>
                        <small class="text-muted">Recently registered customers</small>
                    </div>

                    <a href="customers.php"
                        class="btn btn-sm btn-outline-success">
                        View All
                    </a>
                </div>


                <div class="d-flex justify-content-between align-items-center border-bottom py-3">

                    <div>
                        <div class="fw-semibold">Rahul Patel</div>
                        <small class="text-muted">Rajkot</small>
                    </div>

                    <small class="text-muted">Today</small>

                </div>


                <div class="d-flex justify-content-between align-items-center border-bottom py-3">

                    <div>
                        <div class="fw-semibold">Amit Shah</div>
                        <small class="text-muted">Ahmedabad</small>
                    </div>

                    <small class="text-muted">Yesterday</small>

                </div>


                <div class="d-flex justify-content-between align-items-center py-3">

                    <div>
                        <div class="fw-semibold">Neha Joshi</div>
                        <small class="text-muted">Rajkot</small>
                    </div>

                    <small class="text-muted">02 Oct</small>

                </div>

            </div>

        </div>

    </div>


    <div class="col-12 col-lg-6">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5 class="fw-semibold mb-1">Recent Farmers</h5>
                        <small class="text-muted">Recently registered farmers</small>
                    </div>

                    <a href="farmers.php"
                        class="btn btn-sm btn-outline-success">
                        View All
                    </a>
                </div>


                <div class="d-flex justify-content-between align-items-center border-bottom py-3">

                    <div>
                        <div class="fw-semibold">Rajesh Patel</div>
                        <small class="text-muted">Rajkot</small>
                    </div>

                    <small class="text-muted">Today</small>

                </div>


                <div class="d-flex justify-content-between align-items-center border-bottom py-3">

                    <div>
                        <div class="fw-semibold">Mahesh Patel</div>
                        <small class="text-muted">Gondal</small>
                    </div>

                    <small class="text-muted">Yesterday</small>

                </div>


                <div class="d-flex justify-content-between align-items-center py-3">

                    <div>
                        <div class="fw-semibold">Ramesh Patel</div>
                        <small class="text-muted">Jetpur</small>
                    </div>

                    <small class="text-muted">02 Oct</small>

                </div>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "adminlayout.php";

?>