<?php

$pageTitle = "Settings";

ob_start();
?>

<div class="mb-4">
    <h3 class="fw-bold mb-1">Settings</h3>
    <p class="text-muted mb-0">
        Manage SmartDairyPro system settings.
    </p>
</div>


<div class="row g-4">

    <!-- General Settings -->
    <div class="col-12 col-lg-7">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body">

                <h5 class="fw-semibold mb-1">
                    General Settings
                </h5>

                <p class="text-muted small mb-4">
                    Update basic system information.
                </p>


                <form>

                    <div class="mb-3">

                        <label class="form-label">
                            Website Name
                        </label>

                        <input type="text"
                            name="website_name"
                            data-validation="required"
                            class="form-control"
                            value="SmartDairyPro">
                        <span class="error text-danger" id="website_nameError"></span>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Website Email
                        </label>

                        <input type="email"
                            name="website_email"
                            data-validation="required email"
                            class="form-control"
                            value="info@smartdairypro.com">
                        <span class="error text-danger" id="website_emailError"></span>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Contact Number
                        </label>

                        <input type="text"
                            name="contact_number"
                            data-validation="required numeric min max"
                            data-min="10"
                            data-max="10"
                            class="form-control"
                            value="9876500000">
                        <span class="error text-danger" id="contact_numberError"></span>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Address
                        </label>

                        <textarea name="address" data-validation="required" class="form-control"
                            rows="3">Rajkot, Gujarat, India</textarea>
                        <span class="error text-danger" id="addressError"></span>

                    </div>


                    <button type="submit"
                        class="btn btn-success">
                        <i class="bi bi-check-lg me-1"></i>
                        Save Changes
                    </button>

                </form>

            </div>

        </div>


        <!-- Notification Settings -->
        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <h5 class="fw-semibold mb-1">
                    Notification Settings
                </h5>

                <p class="text-muted small mb-4">
                    Control system notification preferences.
                </p>


                <div class="d-flex justify-content-between align-items-center border-bottom py-3">

                    <div>
                        <div class="fw-semibold">
                            New Customer Registration
                        </div>

                        <small class="text-muted">
                            Notify admin when a new customer registers.
                        </small>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input"
                            type="checkbox"
                            checked>
                    </div>

                </div>


                <div class="d-flex justify-content-between align-items-center border-bottom py-3">

                    <div>
                        <div class="fw-semibold">
                            New Farmer Registration
                        </div>

                        <small class="text-muted">
                            Notify admin when a new farmer registers.
                        </small>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input"
                            type="checkbox"
                            checked>
                    </div>

                </div>


                <div class="d-flex justify-content-between align-items-center py-3">

                    <div>
                        <div class="fw-semibold">
                            New Order
                        </div>

                        <small class="text-muted">
                            Notify admin when a new order is placed.
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

    </div>


    <!-- System Settings -->
    <div class="col-12 col-lg-5">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body">

                <h5 class="fw-semibold mb-1">
                    System Settings
                </h5>

                <p class="text-muted small mb-4">
                    Manage basic system preferences.
                </p>


                <div class="mb-3">

                    <label class="form-label">
                        Default Language
                    </label>

                    <select class="form-select">

                        <option selected>
                            English
                        </option>

                        <option>
                            Gujarati
                        </option>

                        <option>
                            Hindi
                        </option>

                    </select>

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Currency
                    </label>

                    <select class="form-select">

                        <option selected>
                            Indian Rupee (₹)
                        </option>

                    </select>

                </div>


                <div>

                    <label class="form-label">
                        Timezone
                    </label>

                    <select class="form-select">

                        <option selected>
                            Asia/Kolkata
                        </option>

                    </select>

                </div>

            </div>

        </div>


        <!-- Account Security -->
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body">

                <h5 class="fw-semibold mb-1">
                    Account Security
                </h5>

                <p class="text-muted small mb-4">
                    Manage administrator account security.
                </p>


                <div class="d-flex justify-content-between align-items-center mb-3">

                    <div>
                        <div class="fw-semibold">
                            Two-Factor Authentication
                        </div>

                        <small class="text-muted">
                            Add extra security to your account.
                        </small>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input"
                            type="checkbox">
                    </div>

                </div>


                <a href="profile.php"
                    class="btn btn-outline-success w-100">
                    <i class="bi bi-key me-1"></i>
                    Change Password
                </a>

            </div>

        </div>


        <!-- Danger Zone -->
        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <h5 class="fw-semibold text-danger mb-1">
                    Danger Zone
                </h5>

                <p class="text-muted small">
                    These actions affect your administrator account.
                </p>

                <button class="btn btn-outline-danger w-100">
                    Deactivate Admin Account
                </button>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "adminlayout.php";

?>