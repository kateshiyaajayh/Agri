<?php

$pageTitle = "Sales & Earnings";

ob_start();

?>

<div class="d-flex flex-column flex-sm-row
            justify-content-between align-items-sm-center
            gap-3 mb-4">

    <div>
        <h3 class="fw-bold mb-1">
            Sales & Earnings
        </h3>

        <p class="text-muted mb-0">
            Track your milk sales and payments.
        </p>
    </div>

    <button class="btn btn-success">
        <i class="bi bi-plus-lg me-2"></i>
        Add Sale
    </button>

</div>


<!-- Summary Cards -->
<div class="row g-3 g-md-4 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <small class="text-muted">
                    Total Milk Sold
                </small>

                <h3 class="fw-bold mt-2 mb-0">
                    1,240 L
                </h3>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <small class="text-muted">
                    Total Amount
                </small>

                <h3 class="fw-bold mt-2 mb-0">
                    ₹74,400
                </h3>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <small class="text-muted">
                    Paid Amount
                </small>

                <h3 class="fw-bold mt-2 mb-0 text-success">
                    ₹62,000
                </h3>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <small class="text-muted">
                    Pending Amount
                </small>

                <h3 class="fw-bold mt-2 mb-0 text-warning">
                    ₹12,400
                </h3>

            </div>
        </div>
    </div>

</div>


<!-- Earnings Overview -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body p-3 p-md-4">

        <h5 class="fw-bold mb-4">
            Earnings Overview
        </h5>

        <div class="row g-3">

            <div class="col-12 col-md-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted d-block">
                        This Month
                    </small>

                    <h4 class="fw-bold mt-2 mb-0">
                        ₹18,500
                    </h4>

                </div>

            </div>


            <div class="col-12 col-md-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted d-block">
                        Last Month
                    </small>

                    <h4 class="fw-bold mt-2 mb-0">
                        ₹16,800
                    </h4>

                </div>

            </div>


            <div class="col-12 col-md-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted d-block">
                        Average / Month
                    </small>

                    <h4 class="fw-bold mt-2 mb-0">
                        ₹17,650
                    </h4>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Sales History -->
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row
                    justify-content-between
                    gap-3 mb-4">

            <div>
                <h5 class="fw-bold mb-1">
                    Sales History
                </h5>

                <small class="text-muted">
                    Your recent milk sales
                </small>
            </div>

            <div class="input-group"
                style="max-width: 250px;">

                <span class="input-group-text bg-white">
                    <i class="bi bi-search"></i>
                </span>

                <input type="text"
                    class="form-control"
                    placeholder="Search sale">

            </div>

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>

                    <tr>
                        <th>Sale ID</th>
                        <th>Date</th>
                        <th>Quantity</th>
                        <th>Rate</th>
                        <th>Total Amount</th>
                        <th>Paid</th>
                        <th>Pending</th>
                        <th>Status</th>
                    </tr>

                </thead>


                <tbody>

                    <tr>

                        <td class="fw-semibold">
                            #S001
                        </td>

                        <td>
                            05 Oct 2026
                        </td>

                        <td>
                            80 L
                        </td>

                        <td>
                            ₹60/L
                        </td>

                        <td>
                            ₹4,800
                        </td>

                        <td>
                            ₹4,800
                        </td>

                        <td>
                            ₹0
                        </td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Paid
                            </span>
                        </td>

                    </tr>


                    <tr>

                        <td class="fw-semibold">
                            #S002
                        </td>

                        <td>
                            04 Oct 2026
                        </td>

                        <td>
                            75 L
                        </td>

                        <td>
                            ₹60/L
                        </td>

                        <td>
                            ₹4,500
                        </td>

                        <td>
                            ₹2,500
                        </td>

                        <td>
                            ₹2,000
                        </td>

                        <td>
                            <span class="badge bg-warning-subtle text-warning">
                                Pending
                            </span>
                        </td>

                    </tr>


                    <tr>

                        <td class="fw-semibold">
                            #S003
                        </td>

                        <td>
                            03 Oct 2026
                        </td>

                        <td>
                            85 L
                        </td>

                        <td>
                            ₹60/L
                        </td>

                        <td>
                            ₹5,100
                        </td>

                        <td>
                            ₹5,100
                        </td>

                        <td>
                            ₹0
                        </td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Paid
                            </span>
                        </td>

                    </tr>


                    <tr>

                        <td class="fw-semibold">
                            #S004
                        </td>

                        <td>
                            02 Oct 2026
                        </td>

                        <td>
                            70 L
                        </td>

                        <td>
                            ₹60/L
                        </td>

                        <td>
                            ₹4,200
                        </td>

                        <td>
                            ₹3,000
                        </td>

                        <td>
                            ₹1,200
                        </td>

                        <td>
                            <span class="badge bg-warning-subtle text-warning">
                                Pending
                            </span>
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