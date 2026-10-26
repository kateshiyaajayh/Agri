<?php

$pageTitle = "Reports";

ob_start();

?>

<div class="mb-4">

    <h3 class="fw-bold mb-1">
        Reports
    </h3>

    <p class="text-muted mb-0">
        View your dairy farm reports and performance.
    </p>

</div>


<!-- Report Cards -->
<div class="row g-3 g-md-4 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>
                        <small class="text-muted">
                            Daily Milk
                        </small>

                        <h5 class="fw-bold mt-2 mb-0">
                            185 L
                        </h5>
                    </div>

                    <i class="bi bi-droplet fs-2 text-primary"></i>

                </div>

                <a href="#dailyMilk"
                    class="small text-success text-decoration-none">
                    View Report
                </a>

            </div>

        </div>

    </div>


    <div class="col-12 col-sm-6 col-xl-3">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>
                        <small class="text-muted">
                            Monthly Milk
                        </small>

                        <h5 class="fw-bold mt-2 mb-0">
                            5,420 L
                        </h5>
                    </div>

                    <i class="bi bi-bar-chart fs-2 text-success"></i>

                </div>

                <a href="#monthlyMilk"
                    class="small text-success text-decoration-none">
                    View Report
                </a>

            </div>

        </div>

    </div>


    <div class="col-12 col-sm-6 col-xl-3">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>
                        <small class="text-muted">
                            Sales Report
                        </small>

                        <h5 class="fw-bold mt-2 mb-0">
                            ₹74,400
                        </h5>
                    </div>

                    <i class="bi bi-cash-stack fs-2 text-success"></i>

                </div>

                <a href="#salesReport"
                    class="small text-success text-decoration-none">
                    View Report
                </a>

            </div>

        </div>

    </div>


    <div class="col-12 col-sm-6 col-xl-3">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>
                        <small class="text-muted">
                            Animal Report
                        </small>

                        <h5 class="fw-bold mt-2 mb-0">
                            24 Animals
                        </h5>
                    </div>

                    <i class="bi bi-heart-pulse fs-2 text-success"></i>

                </div>

                <a href="#animalReport"
                    class="small text-success text-decoration-none">
                    View Report
                </a>

            </div>

        </div>

    </div>

</div>


<!-- Daily Milk Report -->
<div class="card border-0 shadow-sm mb-4"
    id="dailyMilk">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row
                    justify-content-between
                    gap-3 mb-4">

            <div>
                <h5 class="fw-bold mb-1">
                    Daily Milk Report
                </h5>

                <small class="text-muted">
                    Daily milk collection summary
                </small>
            </div>

            <input type="date"
                class="form-control"
                style="max-width: 200px;">

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Session</th>
                        <th>Quantity</th>
                        <th>Fat</th>
                        <th>SNF</th>
                        <th>Quality</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Morning</td>
                        <td>95 L</td>
                        <td>4.2%</td>
                        <td>8.5%</td>
                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Excellent
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>Evening</td>
                        <td>90 L</td>
                        <td>4.0%</td>
                        <td>8.4%</td>
                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Good
                            </span>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>

</div>


<!-- Monthly Milk Report -->
<div class="card border-0 shadow-sm mb-4"
    id="monthlyMilk">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row
                    justify-content-between
                    gap-3 mb-4">

            <div>
                <h5 class="fw-bold mb-1">
                    Monthly Milk Report
                </h5>

                <small class="text-muted">
                    Monthly milk collection summary
                </small>
            </div>

            <select class="form-select"
                style="max-width: 200px;">

                <option>October 2026</option>
                <option>September 2026</option>
                <option>August 2026</option>

            </select>

        </div>


        <div class="row g-3">

            <div class="col-12 col-md-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted">
                        Total Milk
                    </small>

                    <h4 class="fw-bold mt-2 mb-0">
                        5,420 L
                    </h4>

                </div>

            </div>


            <div class="col-12 col-md-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted">
                        Average / Day
                    </small>

                    <h4 class="fw-bold mt-2 mb-0">
                        180.6 L
                    </h4>

                </div>

            </div>


            <div class="col-12 col-md-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted">
                        Average Fat
                    </small>

                    <h4 class="fw-bold mt-2 mb-0">
                        4.2%
                    </h4>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Sales Report -->
<div class="card border-0 shadow-sm mb-4"
    id="salesReport">

    <div class="card-body">

        <h5 class="fw-bold mb-1">
            Sales Report
        </h5>

        <small class="text-muted">
            Milk sales summary
        </small>


        <div class="table-responsive mt-4">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Period</th>
                        <th>Milk Sold</th>
                        <th>Total Amount</th>
                        <th>Paid</th>
                        <th>Pending</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>October 2026</td>
                        <td>1,240 L</td>
                        <td>₹74,400</td>
                        <td>₹62,000</td>
                        <td>₹12,400</td>
                    </tr>

                    <tr>
                        <td>September 2026</td>
                        <td>1,180 L</td>
                        <td>₹70,800</td>
                        <td>₹68,000</td>
                        <td>₹2,800</td>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>

</div>


<!-- Earnings Report -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body">

        <h5 class="fw-bold mb-1">
            Earnings Report
        </h5>

        <small class="text-muted">
            Monthly earnings summary
        </small>


        <div class="row g-3 mt-2">

            <div class="col-12 col-md-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted">
                        Current Month
                    </small>

                    <h4 class="fw-bold mt-2 mb-0">
                        ₹18,500
                    </h4>

                </div>

            </div>


            <div class="col-12 col-md-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted">
                        Previous Month
                    </small>

                    <h4 class="fw-bold mt-2 mb-0">
                        ₹16,800
                    </h4>

                </div>

            </div>


            <div class="col-12 col-md-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted">
                        Total Earnings
                    </small>

                    <h4 class="fw-bold mt-2 mb-0">
                        ₹74,400
                    </h4>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Animal Report -->
<div class="card border-0 shadow-sm"
    id="animalReport">

    <div class="card-body">

        <div class="d-flex justify-content-between
                    align-items-center mb-4">

            <div>
                <h5 class="fw-bold mb-1">
                    Animal Report
                </h5>

                <small class="text-muted">
                    Registered animal summary
                </small>
            </div>

            <a href="animals.php"
                class="btn btn-sm btn-outline-success">
                View Animals
            </a>

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Total</th>
                        <th>Active</th>
                        <th>Inactive</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Cow</td>
                        <td>15</td>
                        <td>14</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>Buffalo</td>
                        <td>9</td>
                        <td>8</td>
                        <td>1</td>
                    </tr>

                    <tr class="fw-semibold">
                        <td>Total</td>
                        <td>24</td>
                        <td>22</td>
                        <td>2</td>
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
