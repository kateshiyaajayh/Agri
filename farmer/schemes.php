<?php

$pageTitle = "Government Schemes";

ob_start();

?>

<div class="mb-4">

    <h3 class="fw-bold mb-1">
        Government Schemes
    </h3>

    <p class="text-muted mb-0">
        Explore government schemes and benefits available for farmers.
    </p>

</div>


<!-- Search -->
<div class="card border-0 shadow-sm mb-4">

    <div class="card-body">

        <div class="row g-3">

            <div class="col-12 col-md-8">

                <div class="input-group">

                    <span class="input-group-text bg-white">
                        <i class="bi bi-search"></i>
                    </span>

                    <input type="text"
                        class="form-control"
                        placeholder="Search scheme">

                </div>

            </div>


            <div class="col-12 col-md-4">

                <select class="form-select">

                    <option selected>
                        All Categories
                    </option>

                    <option>
                        Dairy Farming
                    </option>

                    <option>
                        Animal Husbandry
                    </option>

                    <option>
                        Agriculture
                    </option>

                    <option>
                        Financial Assistance
                    </option>

                </select>

            </div>

        </div>

    </div>

</div>


<!-- Schemes -->
<div class="row g-3 g-md-4">


    <!-- Scheme 1 -->
    <div class="col-12 col-md-6 col-xl-4">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body p-3 p-md-4">

                <div class="d-flex justify-content-between
                            align-items-start mb-3">

                    <div class="bg-success-subtle rounded p-3">
                        <i class="bi bi-cash-stack fs-4 text-success"></i>
                    </div>

                    <span class="badge bg-success-subtle text-success">
                        Active
                    </span>

                </div>


                <h5 class="fw-bold">
                    Dairy Development Scheme
                </h5>

                <p class="text-muted">
                    Financial support for dairy farmers to improve
                    milk production and dairy infrastructure.
                </p>


                <div class="small text-muted mb-3">

                    <div class="mb-2">
                        <i class="bi bi-tag me-2"></i>
                        Dairy Farming
                    </div>

                    <div>
                        <i class="bi bi-calendar3 me-2"></i>
                        Application Open
                    </div>

                </div>


                <a href="#"
                    class="btn btn-outline-success w-100">
                    View Details
                </a>

            </div>

        </div>

    </div>


    <!-- Scheme 2 -->
    <div class="col-12 col-md-6 col-xl-4">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body p-3 p-md-4">

                <div class="d-flex justify-content-between
                            align-items-start mb-3">

                    <div class="bg-success-subtle rounded p-3">
                        <i class="bi bi-heart-pulse fs-4 text-success"></i>
                    </div>

                    <span class="badge bg-success-subtle text-success">
                        Active
                    </span>

                </div>


                <h5 class="fw-bold">
                    Animal Health Support
                </h5>

                <p class="text-muted">
                    Support for vaccination, veterinary care and
                    animal health management.
                </p>


                <div class="small text-muted mb-3">

                    <div class="mb-2">
                        <i class="bi bi-tag me-2"></i>
                        Animal Husbandry
                    </div>

                    <div>
                        <i class="bi bi-calendar3 me-2"></i>
                        Application Open
                    </div>

                </div>


                <a href="#"
                    class="btn btn-outline-success w-100">
                    View Details
                </a>

            </div>

        </div>

    </div>


    <!-- Scheme 3 -->
    <div class="col-12 col-md-6 col-xl-4">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body p-3 p-md-4">

                <div class="d-flex justify-content-between
                            align-items-start mb-3">

                    <div class="bg-success-subtle rounded p-3">
                        <i class="bi bi-building fs-4 text-success"></i>
                    </div>

                    <span class="badge bg-success-subtle text-success">
                        Active
                    </span>

                </div>


                <h5 class="fw-bold">
                    Farmer Infrastructure Support
                </h5>

                <p class="text-muted">
                    Assistance for improving farm infrastructure
                    and modern farming facilities.
                </p>


                <div class="small text-muted mb-3">

                    <div class="mb-2">
                        <i class="bi bi-tag me-2"></i>
                        Agriculture
                    </div>

                    <div>
                        <i class="bi bi-calendar3 me-2"></i>
                        Application Open
                    </div>

                </div>


                <a href="#"
                    class="btn btn-outline-success w-100">
                    View Details
                </a>

            </div>

        </div>

    </div>


    <!-- Scheme 4 -->
    <div class="col-12 col-md-6 col-xl-4">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body p-3 p-md-4">

                <div class="d-flex justify-content-between
                            align-items-start mb-3">

                    <div class="bg-success-subtle rounded p-3">
                        <i class="bi bi-bank fs-4 text-success"></i>
                    </div>

                    <span class="badge bg-success-subtle text-success">
                        Active
                    </span>

                </div>


                <h5 class="fw-bold">
                    Farmer Financial Assistance
                </h5>

                <p class="text-muted">
                    Financial assistance and support programs
                    for eligible farmers.
                </p>


                <div class="small text-muted mb-3">

                    <div class="mb-2">
                        <i class="bi bi-tag me-2"></i>
                        Financial Assistance
                    </div>

                    <div>
                        <i class="bi bi-calendar3 me-2"></i>
                        Application Open
                    </div>

                </div>


                <a href="#"
                    class="btn btn-outline-success w-100">
                    View Details
                </a>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "farmerlayout.php";

?>