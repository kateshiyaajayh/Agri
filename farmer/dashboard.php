<?php

$pageTitle = "Dashboard";

ob_start();

?>

<div class="mb-4">
    <h3 class="mb-1">Welcome, Farmer</h3>
    <p class="text-muted mb-0">
        Manage your dairy farm activities from one place.
    </p>
</div>


<!-- Dashboard Cards -->
<div class="row g-3 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <small class="text-muted">Total Animals</small>
                        <h3 class="mt-2 mb-0">24</h3>
                    </div>

                    <i class="bi bi-heart-pulse fs-2 text-success"></i>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <small class="text-muted">Today's Milk</small>
                        <h3 class="mt-2 mb-0">185 L</h3>
                    </div>

                    <i class="bi bi-droplet fs-2 text-primary"></i>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <small class="text-muted">Milk Sold</small>
                        <h3 class="mt-2 mb-0">160 L</h3>
                    </div>

                    <i class="bi bi-box-seam fs-2 text-warning"></i>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <small class="text-muted">Earnings</small>
                        <h3 class="mt-2 mb-0">₹12,500</h3>
                    </div>

                    <i class="bi bi-cash-stack fs-2 text-success"></i>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Recent Milk Collection -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Recent Milk Collection</h5>

            <a href="milk-collection.php" class="btn btn-sm btn-outline-success">
                View All
            </a>
        </div>

        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Session</th>
                        <th>Quantity</th>
                        <th>Fat</th>
                        <th>SNF</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>05 Oct 2026</td>
                        <td>Morning</td>
                        <td>95 L</td>
                        <td>4.2%</td>
                        <td>8.5%</td>
                    </tr>

                    <tr>
                        <td>04 Oct 2026</td>
                        <td>Evening</td>
                        <td>90 L</td>
                        <td>4.0%</td>
                        <td>8.4%</td>
                    </tr>

                    <tr>
                        <td>04 Oct 2026</td>
                        <td>Morning</td>
                        <td>92 L</td>
                        <td>4.1%</td>
                        <td>8.5%</td>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>

</div>


<!-- Quick Actions -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body">

        <h5 class="mb-3">Quick Actions</h5>

        <div class="row g-3">

            <div class="col-12 col-sm-6 col-lg-3">
                <a href="milk-collection.php"
                    class="btn btn-outline-success w-100">
                    <i class="bi bi-droplet me-2"></i>
                    Add Milk Record
                </a>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <a href="add-animal.php"
                    class="btn btn-outline-success w-100">
                    <i class="bi bi-plus-circle me-2"></i>
                    Add Animal
                </a>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <a href="products.php"
                    class="btn btn-outline-success w-100">
                    <i class="bi bi-box-seam me-2"></i>
                    Add Product
                </a>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <a href="reports.php"
                    class="btn btn-outline-success w-100">
                    <i class="bi bi-bar-chart me-2"></i>
                    View Reports
                </a>
            </div>

        </div>

    </div>

</div>


<!-- Recent Sales -->
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h5 class="mb-0">Recent Sales</h5>

            <a href="sales.php" class="btn btn-sm btn-outline-success">
                View All
            </a>

        </div>

        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Sale ID</th>
                        <th>Date</th>
                        <th>Quantity</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>#S001</td>
                        <td>05 Oct 2026</td>
                        <td>80 L</td>
                        <td>₹4,800</td>
                        <td>
                            <span class="badge bg-success">Paid</span>
                        </td>
                    </tr>

                    <tr>
                        <td>#S002</td>
                        <td>04 Oct 2026</td>
                        <td>75 L</td>
                        <td>₹4,500</td>
                        <td>
                            <span class="badge bg-warning text-dark">Pending</span>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "farmerlayout.php";

?>