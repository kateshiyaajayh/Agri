<?php

$pageTitle = "Animal Details";

ob_start();

?>

<div class="mb-4">

    <a href="animals.php"
        class="text-success text-decoration-none">
        <i class="bi bi-arrow-left me-1"></i>
        Back to Animals
    </a>

    <div class="d-flex flex-column flex-sm-row
                justify-content-between
                align-items-sm-center
                gap-3 mt-3">

        <div>
            <h3 class="fw-bold mb-1">
                Animal Details
            </h3>

            <p class="text-muted mb-0">
                View complete information about this animal.
            </p>
        </div>

        <div class="d-flex flex-wrap gap-2">

            <a href="add-animal.php"
                class="btn btn-success">
                <i class="bi bi-pencil me-2"></i>
                Edit Animal
            </a>

            <button class="btn btn-outline-danger">
                <i class="bi bi-trash me-2"></i>
                Remove
            </button>

        </div>

    </div>

</div>


<!-- Animal Overview -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body p-3 p-md-4">

        <div class="row g-4 align-items-center">

            <div class="col-12 col-md-3 text-center">

                <div class="bg-light rounded p-4">

                    <i class="bi bi-heart-pulse text-success"
                        style="font-size: 70px;">
                    </i>

                </div>

            </div>


            <div class="col-12 col-md-9">

                <div class="d-flex justify-content-between
                            align-items-start">

                    <div>
                        <h4 class="fw-bold mb-1">
                            AN001
                        </h4>

                        <p class="text-muted mb-2">
                            Gir Cow
                        </p>
                    </div>

                    <span class="badge bg-success-subtle text-success">
                        Active
                    </span>

                </div>


                <div class="row g-3 mt-2">

                    <div class="col-6 col-md-3">
                        <small class="text-muted d-block">
                            Gender
                        </small>
                        <strong>Female</strong>
                    </div>

                    <div class="col-6 col-md-3">
                        <small class="text-muted d-block">
                            Age
                        </small>
                        <strong>4 Years</strong>
                    </div>

                    <div class="col-6 col-md-3">
                        <small class="text-muted d-block">
                            Weight
                        </small>
                        <strong>420 kg</strong>
                    </div>

                    <div class="col-6 col-md-3">
                        <small class="text-muted d-block">
                            Breed
                        </small>
                        <strong>Gir</strong>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Animal Information -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body p-3 p-md-4">

        <h5 class="fw-bold mb-4">
            Animal Information
        </h5>

        <div class="row g-4">

            <div class="col-12 col-md-6">
                <small class="text-muted d-block">
                    Animal ID
                </small>
                <strong>AN001</strong>
            </div>

            <div class="col-12 col-md-6">
                <small class="text-muted d-block">
                    Animal Type
                </small>
                <strong>Cow</strong>
            </div>

            <div class="col-12 col-md-6">
                <small class="text-muted d-block">
                    Breed
                </small>
                <strong>Gir</strong>
            </div>

            <div class="col-12 col-md-6">
                <small class="text-muted d-block">
                    Gender
                </small>
                <strong>Female</strong>
            </div>

            <div class="col-12 col-md-6">
                <small class="text-muted d-block">
                    Date of Birth
                </small>
                <strong>15 May 2022</strong>
            </div>

            <div class="col-12 col-md-6">
                <small class="text-muted d-block">
                    Age
                </small>
                <strong>4 Years</strong>
            </div>

            <div class="col-12 col-md-6">
                <small class="text-muted d-block">
                    Weight
                </small>
                <strong>420 kg</strong>
            </div>

            <div class="col-12 col-md-6">
                <small class="text-muted d-block">
                    Purchase Date
                </small>
                <strong>10 June 2022</strong>
            </div>

            <div class="col-12 col-md-6">
                <small class="text-muted d-block">
                    Status
                </small>

                <span class="badge bg-success-subtle text-success">
                    Active
                </span>
            </div>

        </div>

    </div>

</div>


<!-- Health Summary -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body p-3 p-md-4">

        <div class="d-flex flex-column flex-sm-row justify-content-between
                    align-items-start align-items-sm-center gap-2 mb-4">

            <h5 class="fw-bold mb-0">
                Health Summary
            </h5>

            <a href="health.php"
                class="btn btn-sm btn-outline-success">
                View Health Records
            </a>

        </div>

        <div class="row g-3">

            <div class="col-12 col-md-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted d-block">
                        Last Vaccination
                    </small>

                    <strong>
                        20 Sep 2026
                    </strong>

                </div>

            </div>


            <div class="col-12 col-md-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted d-block">
                        Next Vaccination
                    </small>

                    <strong>
                        20 Dec 2026
                    </strong>

                </div>

            </div>


            <div class="col-12 col-md-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted d-block">
                        Current Health
                    </small>

                    <strong class="text-success">
                        Healthy
                    </strong>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Milk Production -->
<div class="card border-0 shadow-sm">

    <div class="card-body p-3 p-md-4">

        <div class="d-flex flex-column flex-sm-row justify-content-between
                    align-items-start align-items-sm-center gap-2 mb-4">

            <h5 class="fw-bold mb-0">
                Milk Production
            </h5>

            <a href="milk-collection.php"
                class="btn btn-sm btn-outline-success">
                View Records
            </a>

        </div>

        <div class="row g-3">

            <div class="col-12 col-sm-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted d-block">
                        Today's Milk
                    </small>

                    <h4 class="fw-bold mt-2 mb-0">
                        12 L
                    </h4>

                </div>

            </div>


            <div class="col-12 col-sm-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted d-block">
                        This Month
                    </small>

                    <h4 class="fw-bold mt-2 mb-0">
                        348 L
                    </h4>

                </div>

            </div>


            <div class="col-12 col-sm-4">

                <div class="bg-light rounded p-3">

                    <small class="text-muted d-block">
                        Average / Day
                    </small>

                    <h4 class="fw-bold mt-2 mb-0">
                        11.6 L
                    </h4>

                </div>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "farmerlayout.php";

?>
