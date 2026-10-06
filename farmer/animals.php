<?php

$pageTitle = "Animal Management";

ob_start();

?>

<div class="d-flex flex-column flex-sm-row
            justify-content-between align-items-sm-center
            gap-3 mb-4">

    <div>
        <h3 class="fw-bold mb-1">Animals</h3>

        <p class="text-muted mb-0">
            View and manage your farm animals.
        </p>
    </div>

    <a href="add-animal.php" class="btn btn-success">
        <i class="bi bi-plus-lg me-2"></i>
        Add Animal
    </a>

</div>


<!-- Summary Cards -->
<div class="row g-3 g-md-4 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>
                        <small class="text-muted">
                            Total Animals
                        </small>

                        <h3 class="fw-bold mt-2 mb-0">
                            24
                        </h3>
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
                        <small class="text-muted">
                            Cows
                        </small>

                        <h3 class="fw-bold mt-2 mb-0">
                            15
                        </h3>
                    </div>

                    <i class="bi bi-emoji-smile fs-2 text-success"></i>

                </div>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>
                        <small class="text-muted">
                            Buffaloes
                        </small>

                        <h3 class="fw-bold mt-2 mb-0">
                            9
                        </h3>
                    </div>

                    <i class="bi bi-activity fs-2 text-success"></i>

                </div>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>
                        <small class="text-muted">
                            Active Animals
                        </small>

                        <h3 class="fw-bold mt-2 mb-0">
                            22
                        </h3>
                    </div>

                    <i class="bi bi-check-circle fs-2 text-success"></i>

                </div>

            </div>
        </div>
    </div>

</div>


<!-- Animal List -->
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row
                    justify-content-between gap-3 mb-4">

            <div>
                <h5 class="fw-bold mb-1">
                    Animal List
                </h5>

                <small class="text-muted">
                    Your registered animals
                </small>
            </div>

            <div class="farmer-list-filters d-flex flex-column flex-sm-row gap-2 w-100">

                <div class="input-group">

                    <span class="input-group-text bg-white">
                        <i class="bi bi-search"></i>
                    </span>

                    <input type="text"
                        class="form-control"
                        placeholder="Search animal">

                </div>

                <button class="btn btn-light border">
                    <i class="bi bi-funnel"></i>
                </button>

            </div>

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Animal ID</th>
                        <th>Type</th>
                        <th>Breed</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Weight</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td class="fw-semibold">AN001</td>
                        <td>Cow</td>
                        <td>Gir</td>
                        <td>Female</td>
                        <td>4 Years</td>
                        <td>420 kg</td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Active
                            </span>
                        </td>

                        <td>
                            <a href="animal-details.php"
                                class="btn btn-sm btn-light border">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                    </tr>


                    <tr>
                        <td class="fw-semibold">AN002</td>
                        <td>Cow</td>
                        <td>HF</td>
                        <td>Female</td>
                        <td>3 Years</td>
                        <td>390 kg</td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Active
                            </span>
                        </td>

                        <td>
                            <a href="animal-details.php"
                                class="btn btn-sm btn-light border">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                    </tr>


                    <tr>
                        <td class="fw-semibold">AN003</td>
                        <td>Buffalo</td>
                        <td>Murrah</td>
                        <td>Female</td>
                        <td>5 Years</td>
                        <td>510 kg</td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Active
                            </span>
                        </td>

                        <td>
                            <a href="animal-details.php"
                                class="btn btn-sm btn-light border">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                    </tr>


                    <tr>
                        <td class="fw-semibold">AN004</td>
                        <td>Cow</td>
                        <td>Gir</td>
                        <td>Female</td>
                        <td>6 Years</td>
                        <td>450 kg</td>

                        <td>
                            <span class="badge bg-secondary-subtle text-secondary">
                                Inactive
                            </span>
                        </td>

                        <td>
                            <a href="animal-details.php"
                                class="btn btn-sm btn-light border">
                                <i class="bi bi-eye"></i>
                            </a>
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
