<?php

$pageTitle = "Milk Collection";

ob_start();

?>

<div class="d-flex flex-column flex-sm-row
            justify-content-between align-items-sm-center
            gap-3 mb-4">

    <div>
        <h3 class="fw-bold mb-1">
            Milk Collection
        </h3>

        <p class="text-muted mb-0">
            Manage your daily milk collection records.
        </p>
    </div>

    <button class="btn btn-success">
        <i class="bi bi-plus-lg me-2"></i>
        Add Milk Record
    </button>

</div>


<!-- Summary Cards -->
<div class="row g-3 g-md-4 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <small class="text-muted">
                    Today's Milk
                </small>

                <h3 class="fw-bold mt-2 mb-0">
                    185 L
                </h3>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <small class="text-muted">
                    Morning
                </small>

                <h3 class="fw-bold mt-2 mb-0">
                    95 L
                </h3>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <small class="text-muted">
                    Evening
                </small>

                <h3 class="fw-bold mt-2 mb-0">
                    90 L
                </h3>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <small class="text-muted">
                    Average Fat
                </small>

                <h3 class="fw-bold mt-2 mb-0">
                    4.2%
                </h3>

            </div>
        </div>
    </div>

</div>


<!-- Add Milk Record -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body p-3 p-md-4">

        <h5 class="fw-bold mb-4">
            Add Daily Milk Record
        </h5>

        <form novalidate>

            <div class="row g-3">

                <div class="col-12 col-md-4">

                    <label class="form-label">
                        Collection Date
                    </label>

                    <input type="date"
                        class="form-control"
                        name="collection_date"
                        data-validation="required">
                    <span class="error text-danger" id="collection_dateError"></span>

                </div>


                <div class="col-12 col-md-4">

                    <label class="form-label">
                        Session
                    </label>

                    <select class="form-select"
                        name="session"
                        data-validation="required">

                        <option selected disabled>
                            Select session
                        </option>

                        <option>Morning</option>
                        <option>Evening</option>

                    </select>
                    <span class="error text-danger" id="sessionError"></span>

                </div>


                <div class="col-12 col-md-4">

                    <label class="form-label">
                        Milk Quantity
                    </label>

                    <div class="input-group">

                        <input type="number"
                            class="form-control"
                            name="quantity"
                            data-validation="required numeric"
                            placeholder="Enter quantity">

                        <span class="input-group-text">
                            L
                        </span>

                    </div>
                    <span class="error text-danger" id="quantityError"></span>

                </div>


                <div class="col-12 col-md-4">

                    <label class="form-label">
                        Fat
                    </label>

                    <div class="input-group">

                        <input type="number"
                            step="0.1"
                            class="form-control"
                            name="fat"
                            data-validation="required"
                            placeholder="Enter fat">

                        <span class="input-group-text">
                            %
                        </span>

                    </div>
                    <span class="error text-danger" id="fatError"></span>

                </div>


                <div class="col-12 col-md-4">

                    <label class="form-label">
                        SNF
                    </label>

                    <div class="input-group">

                        <input type="number"
                            step="0.1"
                            class="form-control"
                            name="snf"
                            data-validation="required"
                            placeholder="Enter SNF">

                        <span class="input-group-text">
                            %
                        </span>

                    </div>
                    <span class="error text-danger" id="snfError"></span>

                </div>


                <div class="col-12 col-md-4">

                    <label class="form-label">
                        Quality
                    </label>

                    <select class="form-select"
                        name="quality"
                        data-validation="required">

                        <option selected disabled>
                            Select quality
                        </option>

                        <option>Excellent</option>
                        <option>Good</option>
                        <option>Average</option>

                    </select>
                    <span class="error text-danger" id="qualityError"></span>

                </div>


                <div class="col-12">

                    <button type="submit"
                        class="btn btn-success">

                        <i class="bi bi-check-lg me-2"></i>
                        Save Milk Record

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>


<!-- Recent Milk Records -->
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row
                    justify-content-between
                    gap-3 mb-4">

            <div>
                <h5 class="fw-bold mb-1">
                    Recent Milk Records
                </h5>

                <small class="text-muted">
                    Your latest milk collection records
                </small>
            </div>

            <div class="input-group"
                style="max-width: 250px;">

                <span class="input-group-text bg-white">
                    <i class="bi bi-search"></i>
                </span>

                <input type="text"
                    class="form-control"
                    placeholder="Search">

            </div>

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
                        <th>Quality</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>

                        <td>
                            05 Oct 2026
                        </td>

                        <td>
                            Morning
                        </td>

                        <td>
                            95 L
                        </td>

                        <td>
                            4.2%
                        </td>

                        <td>
                            8.5%
                        </td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Excellent
                            </span>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-light border">
                                <i class="bi bi-pencil"></i>
                            </button>
                        </td>

                    </tr>


                    <tr>

                        <td>
                            04 Oct 2026
                        </td>

                        <td>
                            Evening
                        </td>

                        <td>
                            90 L
                        </td>

                        <td>
                            4.0%
                        </td>

                        <td>
                            8.4%
                        </td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Good
                            </span>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-light border">
                                <i class="bi bi-pencil"></i>
                            </button>
                        </td>

                    </tr>


                    <tr>

                        <td>
                            04 Oct 2026
                        </td>

                        <td>
                            Morning
                        </td>

                        <td>
                            92 L
                        </td>

                        <td>
                            4.1%
                        </td>

                        <td>
                            8.5%
                        </td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Excellent
                            </span>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-light border">
                                <i class="bi bi-pencil"></i>
                            </button>
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
