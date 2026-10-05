<?php

$pageTitle = "Profile";

ob_start();

?>

<div class="mb-4">

    <h3 class="fw-bold mb-1">
        My Profile
    </h3>

    <p class="text-muted mb-0">
        Manage your personal information and account settings.
    </p>

</div>


<div class="row g-4">


    <!-- Profile Information -->
    <div class="col-12 col-lg-8">

        <div class="card border-0 shadow-sm">

            <div class="card-body p-3 p-md-4">

                <h5 class="fw-bold mb-4">
                    Personal Information
                </h5>

                <form novalidate>

                    <div class="row g-3">

                        <div class="col-12 col-md-6">

                            <label class="form-label">
                                Full Name
                            </label>

                            <input type="text"
                                class="form-control"
                                name="fullname"
                                data-validation="required alpha"
                                value="Farmer">
                            <span class="error text-danger" id="fullnameError"></span>

                        </div>


                        <div class="col-12 col-md-6">

                            <label class="form-label">
                                Mobile Number
                            </label>

                            <input type="text"
                                class="form-control"
                                name="mobile"
                                data-validation="required numeric min max"
                                data-min="10"
                                data-max="10"
                                value="9876543210">
                            <span class="error text-danger" id="mobileError"></span>

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Email
                            </label>

                            <input type="email"
                                class="form-control"
                                name="email"
                                data-validation="required email"
                                value="farmer@example.com">
                            <span class="error text-danger" id="emailError"></span>

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Address
                            </label>

                            <textarea class="form-control"
                                name="address"
                                data-validation="required"
                                rows="3">Village Road</textarea>
                            <span class="error text-danger" id="addressError"></span>

                        </div>


                        <div class="col-12 col-md-4">

                            <label class="form-label">
                                City / Village
                            </label>

                            <input type="text"
                                class="form-control"
                                name="city"
                                data-validation="required alpha"
                                value="Rajkot">
                            <span class="error text-danger" id="cityError"></span>

                        </div>


                        <div class="col-12 col-md-4">

                            <label class="form-label">
                                District
                            </label>

                            <input type="text"
                                class="form-control"
                                name="district"
                                data-validation="required alpha"
                                value="Rajkot">
                            <span class="error text-danger" id="districtError"></span>

                        </div>


                        <div class="col-12 col-md-4">

                            <label class="form-label">
                                State
                            </label>

                            <input type="text"
                                class="form-control"
                                name="state"
                                data-validation="required alpha"
                                value="Gujarat">
                            <span class="error text-danger" id="stateError"></span>

                        </div>


                        <div class="col-12">

                            <hr class="my-3">

                            <button type="submit"
                                class="btn btn-success">

                                <i class="bi bi-check-lg me-2"></i>
                                Save Changes

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>


    <!-- Account -->
    <div class="col-12 col-lg-4">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body text-center p-4">

                <div class="rounded-circle bg-success text-white
                            d-flex align-items-center justify-content-center
                            mx-auto mb-3"
                    style="width: 80px; height: 80px;">

                    <i class="bi bi-person fs-2"></i>

                </div>

                <h5 class="fw-bold mb-1">
                    Farmer
                </h5>

                <small class="text-muted">
                    Farmer Account
                </small>

            </div>

        </div>


        <!-- Change Password -->
        <div class="card border-0 shadow-sm">

            <div class="card-body p-3 p-md-4">

                <h5 class="fw-bold mb-4">
                    Change Password
                </h5>

                <form novalidate>

                    <div class="mb-3">

                        <label class="form-label">
                            Current Password
                        </label>

                        <input type="password"
                            class="form-control"
                            name="current_password"
                            data-validation="required"
                            placeholder="Enter current password">
                        <span class="error text-danger" id="current_passwordError"></span>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            New Password
                        </label>

                        <input type="password"
                            class="form-control"
                            name="new_password"
                            id="new_password"
                            data-validation="required strongPassword min max"
                            data-min="8"
                            data-max="25"
                            placeholder="Enter new password">
                        <span class="error text-danger" id="new_passwordError"></span>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Confirm Password
                        </label>

                        <input type="password"
                            class="form-control"
                            name="confirm_password"
                            data-password-id="new_password"
                            data-validation="required confirmPassword"
                            placeholder="Confirm new password">
                        <span class="error text-danger" id="confirm_passwordError"></span>

                    </div>


                    <button type="submit"
                        class="btn btn-success w-100">

                        <i class="bi bi-lock me-2"></i>
                        Update Password

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "farmerlayout.php";

?>
