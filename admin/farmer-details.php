<?php

$pageTitle = "Farmer Details";

ob_start();
?>

<div class="mb-4">
    <a href="farmers.php" class="text-decoration-none text-success">
        <i class="bi bi-arrow-left"></i>
        Back to Farmers
    </a>
</div>


<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">

    <div>
        <h3 class="fw-bold mb-1">Farmer Details</h3>
        <p class="text-muted mb-0">
            View farmer information and account activity.
        </p>
    </div>

    <div class="d-flex gap-2">

        <button class="btn btn-outline-success">
            <i class="bi bi-pencil"></i>
            Edit
        </button>

        <button class="btn btn-outline-danger">
            <i class="bi bi-person-x"></i>
            Deactivate
        </button>

    </div>

</div>


<div class="row g-4">

    <!-- Farmer Information -->
    <div class="col-12 col-lg-8">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body">

                <div class="d-flex align-items-center gap-3 mb-4">

                    <div class="farmer-avatar">
                        <i class="bi bi-person-badge"></i>
                    </div>

                    <div>
                        <h4 class="fw-bold mb-1">Rajesh Patel</h4>

                        <span class="badge text-bg-success">
                            Active
                        </span>
                    </div>

                </div>


                <h5 class="fw-semibold mb-3">
                    Personal Information
                </h5>


                <div class="row g-3">

                    <div class="col-12 col-md-6">

                        <small class="text-muted">
                            Full Name
                        </small>

                        <div class="fw-semibold mt-1">
                            Rajesh Patel
                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <small class="text-muted">
                            Mobile Number
                        </small>

                        <div class="fw-semibold mt-1">
                            98765 11223
                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <small class="text-muted">
                            Email
                        </small>

                        <div class="fw-semibold mt-1">
                            rajesh@gmail.com
                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <small class="text-muted">
                            Village / City
                        </small>

                        <div class="fw-semibold mt-1">
                            Rajkot
                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <small class="text-muted">
                            District
                        </small>

                        <div class="fw-semibold mt-1">
                            Rajkot
                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <small class="text-muted">
                            State
                        </small>

                        <div class="fw-semibold mt-1">
                            Gujarat
                        </div>

                    </div>


                    <div class="col-12">

                        <small class="text-muted">
                            Address
                        </small>

                        <div class="fw-semibold mt-1">
                            12, Raiya Road, Rajkot, Gujarat
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Farmer Activity -->
        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="mb-3">

                    <h5 class="fw-semibold mb-1">
                        Farmer Activity
                    </h5>

                    <small class="text-muted">
                        Overview of farmer's products and sales.
                    </small>

                </div>


                <div class="row g-3">

                    <div class="col-12 col-sm-4">

                        <div class="border rounded p-3">

                            <small class="text-muted">
                                Products
                            </small>

                            <h4 class="fw-bold mt-2 mb-0">
                                18
                            </h4>

                        </div>

                    </div>


                    <div class="col-12 col-sm-4">

                        <div class="border rounded p-3">

                            <small class="text-muted">
                                Total Sales
                            </small>

                            <h4 class="fw-bold mt-2 mb-0">
                                ₹42,500
                            </h4>

                        </div>

                    </div>


                    <div class="col-12 col-sm-4">

                        <div class="border rounded p-3">

                            <small class="text-muted">
                                Orders
                            </small>

                            <h4 class="fw-bold mt-2 mb-0">
                                64
                            </h4>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Account Summary -->
    <div class="col-12 col-lg-4">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body">

                <h5 class="fw-semibold mb-4">
                    Account Summary
                </h5>


                <div class="d-flex justify-content-between mb-3">

                    <span class="text-muted">
                        Farmer ID
                    </span>

                    <span class="fw-semibold">
                        FAR001
                    </span>

                </div>


                <div class="d-flex justify-content-between mb-3">

                    <span class="text-muted">
                        Total Products
                    </span>

                    <span class="fw-semibold">
                        18
                    </span>

                </div>


                <div class="d-flex justify-content-between mb-3">

                    <span class="text-muted">
                        Total Orders
                    </span>

                    <span class="fw-semibold">
                        64
                    </span>

                </div>


                <div class="d-flex justify-content-between mb-3">

                    <span class="text-muted">
                        Joined Date
                    </span>

                    <span class="fw-semibold">
                        15 Aug 2026
                    </span>

                </div>


                <div class="d-flex justify-content-between">

                    <span class="text-muted">
                        Status
                    </span>

                    <span class="badge text-bg-success">
                        Active
                    </span>

                </div>

            </div>

        </div>


        <!-- Quick Actions -->
        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <h5 class="fw-semibold mb-3">
                    Quick Actions
                </h5>


                <div class="d-grid gap-2">

                    <button class="btn btn-outline-success">
                        <i class="bi bi-pencil me-1"></i>
                        Edit Farmer
                    </button>

                    <button class="btn btn-outline-warning">
                        <i class="bi bi-person-x me-1"></i>
                        Deactivate Account
                    </button>

                    <button class="btn btn-outline-danger">
                        <i class="bi bi-trash me-1"></i>
                        Delete Farmer
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "adminlayout.php";

?>