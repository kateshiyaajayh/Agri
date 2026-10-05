<?php

$pageTitle = "Profile";

ob_start();
?>

<div class="mb-4">
    <h3 class="fw-bold mb-1">My Profile</h3>
    <p class="text-muted mb-0">
        Manage your administrator account.
    </p>
</div>


<div class="row g-4">

    <!-- Profile Information -->
    <div class="col-12 col-lg-8">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="d-flex align-items-center gap-3 mb-4">

                    <div class="admin-profile-avatar">
                        <i class="bi bi-person"></i>
                    </div>

                    <div>
                        <h4 class="fw-bold mb-1">Admin</h4>
                        <span class="badge text-bg-success">
                            Administrator
                        </span>
                    </div>

                </div>


                <h5 class="fw-semibold mb-3">
                    Personal Information
                </h5>


                <form>

                    <div class="row g-3">

                        <div class="col-12 col-md-6">

                            <label class="form-label">
                                Full Name
                            </label>

                            <input type="text"
                                name="fullname"
                                data-validation="required alpha"
                                class="form-control"
                                value="Admin">
                            <span class="error text-danger" id="fullnameError"></span>

                        </div>


                        <div class="col-12 col-md-6">

                            <label class="form-label">
                                Mobile Number
                            </label>

                            <input type="text"
                                name="mobile"
                                data-validation="required numeric min max"
                                data-min="10"
                                data-max="10"
                                class="form-control"
                                value="9876500000">
                            <span class="error text-danger" id="mobileError"></span>

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Email
                            </label>

                            <input type="email"
                                name="email"
                                data-validation="required email"
                                class="form-control"
                                value="admin@smartdairypro.com">
                            <span class="error text-danger" id="emailError"></span>

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Address
                            </label>

                            <textarea name="address" data-validation="required" class="form-control"
                                rows="3">Rajkot, Gujarat</textarea>
                            <span class="error text-danger" id="addressError"></span>

                        </div>


                        <div class="col-12">

                            <hr>

                            <button type="submit"
                                class="btn btn-success">
                                <i class="bi bi-check-lg me-1"></i>
                                Save Changes
                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>


    <!-- Account Information -->
    <div class="col-12 col-lg-4">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body">

                <h5 class="fw-semibold mb-4">
                    Account Information
                </h5>


                <div class="d-flex justify-content-between mb-3">

                    <span class="text-muted">
                        Admin ID
                    </span>

                    <span class="fw-semibold">
                        ADM001
                    </span>

                </div>


                <div class="d-flex justify-content-between mb-3">

                    <span class="text-muted">
                        Role
                    </span>

                    <span class="fw-semibold">
                        Administrator
                    </span>

                </div>


                <div class="d-flex justify-content-between mb-3">

                    <span class="text-muted">
                        Status
                    </span>

                    <span class="badge text-bg-success">
                        Active
                    </span>

                </div>


                <div class="d-flex justify-content-between">

                    <span class="text-muted">
                        Joined
                    </span>

                    <span class="fw-semibold">
                        01 Aug 2026
                    </span>

                </div>

            </div>

        </div>


        <!-- Change Password -->
        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <h5 class="fw-semibold mb-3">
                    Change Password
                </h5>


                <form>

                    <div class="mb-3">

                        <label class="form-label">
                            Current Password
                        </label>

                        <input type="password"
                            name="current_password"
                            data-validation="required"
                            class="form-control">
                        <span class="error text-danger" id="current_passwordError"></span>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            New Password
                        </label>

                        <input type="password"
                            id="new_password"
                            name="new_password"
                            data-validation="required strongPassword min max"
                            data-min="8"
                            data-max="25"
                            class="form-control">
                        <span class="error text-danger" id="new_passwordError"></span>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Confirm Password
                        </label>

                        <input type="password"
                            name="confirm_password"
                            data-validation="required confirmPassword"
                            data-password-id="new_password"
                            class="form-control">
                        <span class="error text-danger" id="confirm_passwordError"></span>

                    </div>


                    <button type="submit"
                        class="btn btn-success w-100">
                        Update Password
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "adminlayout.php";

?>
