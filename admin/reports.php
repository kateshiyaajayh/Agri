<?php

$pageTitle = "Reports";

ob_start();
?>

<div class="mb-4">
    <h3 class="fw-bold mb-1">Reports</h3>
    <p class="text-muted mb-0">
        View overall SmartDairyPro reports.
    </p>
</div>


<!-- Report Summary -->
<div class="row g-3 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Customers</small>
                <h3 class="fw-bold mt-2 mb-0">250</h3>
                <small class="text-success">
                    18 new this month
                </small>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Farmers</small>
                <h3 class="fw-bold mt-2 mb-0">85</h3>
                <small class="text-success">
                    5 new this month
                </small>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Orders</small>
                <h3 class="fw-bold mt-2 mb-0">560</h3>
                <small class="text-muted">
                    18 currently pending
                </small>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Total Sales</small>
                <h3 class="fw-bold mt-2 mb-0">₹2,45,000</h3>
                <small class="text-success">
                    This month
                </small>
            </div>
        </div>
    </div>

</div>


<!-- Report Filters -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row justify-content-between gap-3">

            <div>
                <h5 class="fw-semibold mb-1">
                    Report Filter
                </h5>

                <small class="text-muted">
                    Select a period to view report data.
                </small>
            </div>


            <div class="d-flex flex-column flex-sm-row gap-2">

                <input type="date"
                    class="form-control">

                <input type="date"
                    class="form-control">

                <button class="btn btn-success">
                    <i class="bi bi-funnel me-1"></i>
                    Apply
                </button>

            </div>

        </div>

    </div>

</div>


<!-- Customer Report -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body">

        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">

            <div>
                <h5 class="fw-semibold mb-1">
                    Customer Report
                </h5>

                <small class="text-muted">
                    Customer registration overview.
                </small>
            </div>

            <button class="btn btn-sm btn-outline-success">
                <i class="bi bi-download me-1"></i>
                Export
            </button>

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Month</th>
                        <th>New Customers</th>
                        <th>Active</th>
                        <th>Inactive</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>October 2026</td>
                        <td>18</td>
                        <td>16</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>September 2026</td>
                        <td>25</td>
                        <td>22</td>
                        <td>3</td>
                    </tr>

                    <tr>
                        <td>August 2026</td>
                        <td>21</td>
                        <td>20</td>
                        <td>1</td>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>

</div>


<!-- Farmer Report -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body">

        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">

            <div>
                <h5 class="fw-semibold mb-1">
                    Farmer Report
                </h5>

                <small class="text-muted">
                    Farmer registration overview.
                </small>
            </div>

            <button class="btn btn-sm btn-outline-success">
                <i class="bi bi-download me-1"></i>
                Export
            </button>

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Month</th>
                        <th>New Farmers</th>
                        <th>Active</th>
                        <th>Inactive</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>October 2026</td>
                        <td>5</td>
                        <td>5</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>September 2026</td>
                        <td>8</td>
                        <td>7</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>August 2026</td>
                        <td>6</td>
                        <td>6</td>
                        <td>0</td>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>

</div>


<!-- Order & Sales Report -->
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">

            <div>
                <h5 class="fw-semibold mb-1">
                    Order & Sales Report
                </h5>

                <small class="text-muted">
                    Monthly order and sales overview.
                </small>
            </div>

            <button class="btn btn-sm btn-outline-success">
                <i class="bi bi-download me-1"></i>
                Export
            </button>

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Month</th>
                        <th>Total Orders</th>
                        <th>Delivered</th>
                        <th>Cancelled</th>
                        <th>Total Sales</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>October 2026</td>
                        <td>120</td>
                        <td>105</td>
                        <td>5</td>
                        <td>₹58,500</td>
                    </tr>

                    <tr>
                        <td>September 2026</td>
                        <td>180</td>
                        <td>165</td>
                        <td>8</td>
                        <td>₹82,000</td>
                    </tr>

                    <tr>
                        <td>August 2026</td>
                        <td>160</td>
                        <td>145</td>
                        <td>7</td>
                        <td>₹72,500</td>
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
