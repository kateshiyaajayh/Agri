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


                    <div class="row g-3">

                        <div class="col-md-6">

                            <label class="form-label">
                                Full Name
                            </label>

                            <input type="text"
                                class="form-control"
                                value="Customer Name">

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Mobile Number
                            </label>

                            <input type="text"
                                class="form-control"
                                value="9876543210">

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Email Address
                            </label>

                            <input type="email"
                                class="form-control"
                                value="customer@gmail.com">

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                City / Village
                            </label>

                            <input type="text"
                                class="form-control"
                                value="Rajkot">

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                District
                            </label>

                            <input type="text"
                                class="form-control"
                                value="Rajkot">

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                State
                            </label>

                            <input type="text"
                                class="form-control"
                                value="Gujarat">

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Address
                            </label>

                            <textarea class="form-control"
                                rows="3">Rajkot, Gujarat</textarea>

                        </div>

                    </div>


                    <div class="mt-4">

                        <button class="btn btn-success px-4">

                            <i class="bi bi-check2 me-1"></i>
                            Save Changes

                        </button>

                    </div>

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


                    <div class="row g-3 mt-2">

                        <div class="col-md-4">

                            <label class="form-label">
                                Current Password
                            </label>

                            <input type="password"
                                class="form-control"
                                placeholder="Current password">

                        </div>


                        <div class="col-md-4">

                            <label class="form-label">
                                New Password
                            </label>

                            <input type="password"
                                class="form-control"
                                placeholder="New password">

                        </div>


                        <div class="col-md-4">

                            <label class="form-label">
                                Confirm Password
                            </label>

                            <input type="password"
                                class="form-control"
                                placeholder="Confirm password">

                        </div>

                    </div>


                    <button class="btn btn-outline-success mt-3">

                        Update Password

                    </button>

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