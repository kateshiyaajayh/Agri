<?php

$pageTitle = "My Profile";

ob_start();

?>

<div class="container-fluid px-3 px-md-4 py-4">

    <!-- Page Header -->
    <div class="mb-4">

        <h3 class="mb-1">
            My Profile
        </h3>

        <p class="text-muted mb-0">
            Manage your account and shopping preferences
        </p>

    </div>


    <div class="row g-4">

        <!-- Profile Information -->
        <div class="col-lg-8">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div>
                            <h5 class="mb-1">
                                Personal Information
                            </h5>

                            <small class="text-muted">
                                Update your personal details
                            </small>
                        </div>

                        <i class="bi bi-person-circle fs-2 text-success"></i>

                    </div>


                    <form action="profile.php" method="post" novalidate>
                        <div class="row g-3">

                            <div class="col-md-6">

                                <label class="form-label">
                                    Full Name
                                </label>

                                <input type="text"
                                    class="form-control"
                                    name="fullname"
                                    data-validation="required alpha"
                                    value="Customer Name">
                                <span class="error text-danger" id="fullnameError"></span>

                            </div>


                            <div class="col-md-6">

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


                            <div class="col-md-6">

                                <label class="form-label">
                                    Email Address
                                </label>

                                <input type="email"
                                    class="form-control"
                                    name="email"
                                    data-validation="required email"
                                    value="customer@gmail.com">
                                <span class="error text-danger" id="emailError"></span>

                            </div>


                            <div class="col-md-6">

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


                            <div class="col-md-6">

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


                            <div class="col-md-6">

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

                                <label class="form-label">
                                    Address
                                </label>

                                <textarea class="form-control"
                                    name="address"
                                    data-validation="required"
                                    rows="3">Rajkot, Gujarat</textarea>
                                <span class="error text-danger" id="addressError"></span>

                            </div>

                        </div>


                        <div class="mt-4">

                            <button type="submit" class="btn btn-success px-4">

                                <i class="bi bi-check2 me-1"></i>
                                Save Changes

                            </button>

                        </div>
                    </form>

                </div>

            </div>


            <!-- Change Password -->
            <div class="card border-0 shadow-sm mt-4">

                <div class="card-body p-4">

                    <h5 class="mb-1">
                        Change Password
                    </h5>

                    <small class="text-muted">
                        Update your account password
                    </small>


                    <form action="profile.php" method="post" novalidate>
                        <div class="row g-3 mt-2">

                            <div class="col-md-4">

                                <label class="form-label">
                                    Current Password
                                </label>

                                <input type="password"
                                    class="form-control"
                                    name="current_password"
                                    data-validation="required"
                                    placeholder="Current password">
                                <span class="error text-danger" id="current_passwordError"></span>

                            </div>


                            <div class="col-md-4">

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
                                    placeholder="New password">
                                <span class="error text-danger" id="new_passwordError"></span>

                            </div>


                            <div class="col-md-4">

                                <label class="form-label">
                                    Confirm Password
                                </label>

                                <input type="password"
                                    class="form-control"
                                    name="confirm_password"
                                    data-password-id="new_password"
                                    data-validation="required confirmPassword"
                                    placeholder="Confirm password">
                                <span class="error text-danger" id="confirm_passwordError"></span>

                            </div>

                        </div>


                        <button type="submit" class="btn btn-outline-success mt-3">

                            Update Password

                        </button>
                    </form>

                </div>

            </div>

        </div>


        <!-- Account Menu -->
        <div class="col-lg-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-3">

                    <div class="profile-account-header p-3 mb-2">

                        <div class="d-flex align-items-center gap-3">

                            <div class="profile-avatar">

                                <i class="bi bi-person"></i>

                            </div>

                            <div>

                                <h6 class="mb-1">
                                    Customer Name
                                </h6>

                                <small class="text-muted">
                                    customer@gmail.com
                                </small>

                            </div>

                        </div>

                    </div>


                    <div class="profile-menu-list">

                        <a href="profile.php"
                            class="profile-menu-item active">

                            <i class="bi bi-person"></i>

                            <span>
                                Edit Profile
                            </span>

                        </a>


                        <a href="cart.php"
                            class="profile-menu-item">

                            <i class="bi bi-cart3"></i>

                            <span>
                                My Cart
                            </span>

                        </a>


                        <a href="wishlist.php"
                            class="profile-menu-item">

                            <i class="bi bi-heart"></i>

                            <span>
                                Wishlist
                            </span>

                        </a>


                        <a href="orders.php"
                            class="profile-menu-item">

                            <i class="bi bi-box-seam"></i>

                            <span>
                                My Orders
                            </span>

                        </a>


                        <a href="notifications.php"
                            class="profile-menu-item">

                            <i class="bi bi-bell"></i>

                            <span>
                                Notifications
                            </span>

                        </a>


                        <a href="addresses.php"
                            class="profile-menu-item">

                            <i class="bi bi-geo-alt"></i>

                            <span>
                                My Address
                            </span>

                        </a>


                        <a href="settings.php"
                            class="profile-menu-item">

                            <i class="bi bi-gear"></i>

                            <span>
                                Settings
                            </span>

                        </a>


                        <hr>


                        <a href="../auth/login.php"
                            class="profile-menu-item logout">

                            <i class="bi bi-box-arrow-right"></i>

                            <span>
                                Logout
                            </span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "customerlayout.php";

?>