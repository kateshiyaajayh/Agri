<?php

$pageTitle = "Settings";

ob_start();

?>

<div class="container-fluid px-3 px-md-4 py-4">

    <div class="mb-4">
        <h3 class="mb-1">Settings</h3>
        <p class="text-muted mb-0">
            Manage your account preferences
        </p>
    </div>


    <div class="row g-4">

        <div class="col-lg-8">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <h5 class="mb-1">Account Settings</h5>
                    <small class="text-muted">
                        Manage your basic account preferences
                    </small>

                    <hr class="my-4">


                    <div class="setting-row d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3">

                        <div>
                            <h6 class="mb-1">Email Notifications</h6>
                            <small class="text-muted">
                                Receive updates about your orders and account
                            </small>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input"
                                type="checkbox"
                                checked>
                        </div>

                    </div>


                    <div class="setting-row d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3">

                        <div>
                            <h6 class="mb-1">Order Updates</h6>
                            <small class="text-muted">
                                Get notifications about your order status
                            </small>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input"
                                type="checkbox"
                                checked>
                        </div>

                    </div>


                    <div class="setting-row d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3">

                        <div>
                            <h6 class="mb-1">Offers & Promotions</h6>
                            <small class="text-muted">
                                Receive information about new offers
                            </small>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input"
                                type="checkbox">
                        </div>

                    </div>


                    <div class="setting-row d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3">

                        <div>
                            <h6 class="mb-1">Save Address</h6>
                            <small class="text-muted">
                                Save your address for faster checkout
                            </small>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input"
                                type="checkbox"
                                checked>
                        </div>

                    </div>

                </div>

            </div>


            <div class="card border-0 shadow-sm mt-4">

                <div class="card-body p-4">

                    <h5 class="mb-1">Privacy</h5>

                    <small class="text-muted">
                        Manage your privacy preferences
                    </small>

                    <hr class="my-4">


                    <div class="setting-row d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3">

                        <div>
                            <h6 class="mb-1">Profile Visibility</h6>
                            <small class="text-muted">
                                Keep your profile information private
                            </small>
                        </div>

                        <div class="form-check form-switch">

                            <input class="form-check-input"
                                type="checkbox"
                                checked>

                        </div>

                    </div>


                    <div class="setting-row d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3">

                        <div>
                            <h6 class="mb-1">Order History</h6>
                            <small class="text-muted">
                                Keep your order history in your account
                            </small>
                        </div>

                        <div class="form-check form-switch">

                            <input class="form-check-input"
                                type="checkbox"
                                checked>

                        </div>

                    </div>

                </div>

            </div>


            <div class="card border-0 shadow-sm mt-4">

                <div class="card-body p-4">

                    <h5 class="mb-1">Account Actions</h5>

                    <small class="text-muted">
                        Manage your account
                    </small>

                    <hr class="my-4">


                    <div class="d-flex flex-wrap gap-2">

                        <a href="profile.php"
                            class="btn btn-outline-success">

                            <i class="bi bi-person me-1"></i>
                            Edit Profile

                        </a>

                        <a href="../auth/login.php"
                            class="btn btn-outline-danger">

                            <i class="bi bi-box-arrow-right me-1"></i>
                            Logout

                        </a>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-lg-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <div class="d-flex align-items-center gap-3 mb-4">

                        <div class="settings-icon">
                            <i class="bi bi-gear"></i>
                        </div>

                        <div>
                            <h6 class="mb-1">Account Settings</h6>
                            <small class="text-muted">
                                Customer Account
                            </small>
                        </div>

                    </div>


                    <a href="profile.php"
                        class="settings-link">

                        <i class="bi bi-person"></i>

                        <span>Edit Profile</span>

                        <i class="bi bi-chevron-right ms-auto"></i>

                    </a>


                    <a href="addresses.php"
                        class="settings-link">

                        <i class="bi bi-geo-alt"></i>

                        <span>My Address</span>

                        <i class="bi bi-chevron-right ms-auto"></i>

                    </a>


                    <a href="orders.php"
                        class="settings-link">

                        <i class="bi bi-box-seam"></i>

                        <span>My Orders</span>

                        <i class="bi bi-chevron-right ms-auto"></i>

                    </a>


                    <a href="notifications.php"
                        class="settings-link">

                        <i class="bi bi-bell"></i>

                        <span>Notifications</span>

                        <i class="bi bi-chevron-right ms-auto"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "customerlayout.php";

?>
