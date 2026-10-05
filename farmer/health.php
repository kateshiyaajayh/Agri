<?php

$pageTitle = "Animal Health";

ob_start();

?>

<div class="d-flex flex-column flex-sm-row
            justify-content-between align-items-sm-center
            gap-3 mb-4">

    <div>
        <h3 class="fw-bold mb-1">
            Animal Health
        </h3>

        <p class="text-muted mb-0">
            Manage vaccination and health records of your animals.
        </p>
    </div>

    <button class="btn btn-success">
        <i class="bi bi-plus-lg me-2"></i>
        Add Health Record
    </button>

</div>


<!-- Summary Cards -->
<div class="row g-3 g-md-4 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <small class="text-muted">
                    Total Records
                </small>

                <h3 class="fw-bold mt-2 mb-0">
                    28
                </h3>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <small class="text-muted">
                    Vaccinations
                </small>

                <h3 class="fw-bold mt-2 mb-0">
                    22
                </h3>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <small class="text-muted">
                    Upcoming
                </small>

                <h3 class="fw-bold mt-2 mb-0 text-warning">
                    5
                </h3>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <small class="text-muted">
                    Health Issues
                </small>

                <h3 class="fw-bold mt-2 mb-0 text-danger">
                    1
                </h3>

            </div>
        </div>
    </div>

</div>


<!-- Add Health Record -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body p-3 p-md-4">

        <h5 class="fw-bold mb-4">
            Add Health Record
        </h5>

        <form novalidate>

            <div class="row g-3">

                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Animal
                    </label>

                    <select class="form-select"
                        name="animal"
                        data-validation="required">

                        <option selected disabled>
                            Select animal
                        </option>

                        <option>AN001 - Gir Cow</option>
                        <option>AN002 - HF Cow</option>
                        <option>AN003 - Murrah Buffalo</option>
                        <option>AN004 - Gir Cow</option>

                    </select>
                    <span class="error text-danger" id="animalError"></span>

                </div>


                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Vaccination Date
                    </label>

                    <input type="date"
                        class="form-control"
                        name="vaccination_date"
                        data-validation="required">
                    <span class="error text-danger" id="vaccination_dateError"></span>

                </div>


                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Next Vaccination
                    </label>

                    <input type="date"
                        class="form-control"
                        name="next_vaccination"
                        data-validation="required">
                    <span class="error text-danger" id="next_vaccinationError"></span>

                </div>


                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Disease / Health Issue
                    </label>

                    <input type="text"
                        class="form-control"
                        name="health_issue"
                        data-validation="required"
                        placeholder="Enter health issue">
                    <span class="error text-danger" id="health_issueError"></span>

                </div>


                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Treatment
                    </label>

                    <input type="text"
                        class="form-control"
                        name="treatment"
                        data-validation="required"
                        placeholder="Enter treatment">
                    <span class="error text-danger" id="treatmentError"></span>

                </div>


                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Vet Details
                    </label>

                    <input type="text"
                        class="form-control"
                        name="vet_details"
                        data-validation="required"
                        placeholder="Enter veterinarian details">
                    <span class="error text-danger" id="vet_detailsError"></span>

                </div>


                <div class="col-12">

                    <button type="submit"
                        class="btn btn-success">

                        <i class="bi bi-check-lg me-2"></i>
                        Save Health Record

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>


<!-- Health Records -->
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row
                    justify-content-between
                    gap-3 mb-4">

            <div>
                <h5 class="fw-bold mb-1">
                    Health Records
                </h5>

                <small class="text-muted">
                    Recent animal health records
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
                        <th>Animal</th>
                        <th>Vaccination Date</th>
                        <th>Next Vaccination</th>
                        <th>Health Issue</th>
                        <th>Treatment</th>
                        <th>Vet</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>

                        <td class="fw-semibold">
                            AN001
                        </td>

                        <td>
                            20 Sep 2026
                        </td>

                        <td>
                            20 Dec 2026
                        </td>

                        <td>
                            None
                        </td>

                        <td>
                            Vaccination
                        </td>

                        <td>
                            Dr. Patel
                        </td>

                        <td>
                            <button class="btn btn-sm btn-light border">
                                <i class="bi bi-pencil"></i>
                            </button>
                        </td>

                    </tr>


                    <tr>

                        <td class="fw-semibold">
                            AN002
                        </td>

                        <td>
                            15 Sep 2026
                        </td>

                        <td>
                            15 Dec 2026
                        </td>

                        <td>
                            None
                        </td>

                        <td>
                            Vaccination
                        </td>

                        <td>
                            Dr. Shah
                        </td>

                        <td>
                            <button class="btn btn-sm btn-light border">
                                <i class="bi bi-pencil"></i>
                            </button>
                        </td>

                    </tr>


                    <tr>

                        <td class="fw-semibold">
                            AN003
                        </td>

                        <td>
                            10 Sep 2026
                        </td>

                        <td>
                            10 Dec 2026
                        </td>

                        <td>
                            Fever
                        </td>

                        <td>
                            Medicine
                        </td>

                        <td>
                            Dr. Patel
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
