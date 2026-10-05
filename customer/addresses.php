<?php

$pageTitle = "My Address";

ob_start();

?>

<div class="container-fluid px-3 px-md-4 py-4">

    <!-- Header -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">

        <div>
            <h3 class="mb-1">
                My Address
            </h3>

            <p class="text-muted mb-0">
                Manage your delivery addresses
            </p>
        </div>

        <button class="btn btn-success">
            <i class="bi bi-plus-lg me-1"></i>
            Add New Address
        </button>

    </div>


    <div class="row g-4">

        <!-- Saved Addresses -->
        <div class="col-lg-7">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div>
                            <h5 class="mb-1">
                                Saved Addresses
                            </h5>

                            <small class="text-muted">
                                Select an address for your orders
                            </small>
                        </div>

                        <span class="text-muted">
                            2 Addresses
                        </span>

                    </div>


                    <!-- Home Address -->
                    <div class="address-card selected">

                        <div class="d-flex justify-content-between gap-3">

                            <div class="d-flex gap-3">

                                <div class="address-icon">

                                    <i class="bi bi-house"></i>

                                </div>

                                <div>

                                    <div class="d-flex align-items-center gap-2 mb-1">

                                        <h6 class="mb-0">
                                            Home
                                        </h6>

                                        <span class="badge bg-success">
                                            Default
                                        </span>

                                    </div>

                                    <p class="mb-1">
                                        Ajay Kateshiya
                                    </p>

                                    <p class="text-muted mb-1">
                                        25, Green Park Society,<br>
                                        Rajkot, Gujarat - 360001
                                    </p>

                                    <small class="text-muted">
                                        <i class="bi bi-telephone me-1"></i>
                                        9876543210
                                    </small>

                                </div>

                            </div>


                            <div class="address-actions">

                                <a href="#" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <a href="#" class="text-danger" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- Other Address -->
                    <div class="address-card">

                        <div class="d-flex justify-content-between gap-3">

                            <div class="d-flex gap-3">

                                <div class="address-icon">

                                    <i class="bi bi-geo-alt"></i>

                                </div>

                                <div>

                                    <h6 class="mb-1">
                                        Other
                                    </h6>

                                    <p class="mb-1">
                                        Ajay Kateshiya
                                    </p>

                                    <p class="text-muted mb-1">
                                        12, Main Road,<br>
                                        Rajkot, Gujarat - 360005
                                    </p>

                                    <small class="text-muted">
                                        <i class="bi bi-telephone me-1"></i>
                                        9876543210
                                    </small>

                                </div>

                            </div>


                            <div class="address-actions">

                                <a href="#" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <a href="#" class="text-danger" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Add Address -->
        <div class="col-lg-5">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <div class="mb-4">

                        <h5 class="mb-1">
                            Add New Address
                        </h5>

                        <small class="text-muted">
                            Add a delivery address
                        </small>

                    </div>


                    <form action="addresses.php" method="post" novalidate>
                    <div class="row g-3">

                        <div class="col-12">

                            <label class="form-label">
                                Address Type
                            </label>

                            <div class="d-flex gap-2">

                                <div class="form-check">

                                    <input class="form-check-input"
                                        type="radio"
                                        name="addressType"
                                        id="home"
                                        data-validation="required"
                                        checked>

                                    <label class="form-check-label"
                                        for="home">

                                        Home

                                    </label>

                                </div>


                                <div class="form-check">

                                    <input class="form-check-input"
                                        type="radio"
                                        name="addressType"
                                        id="work"
                                        data-validation="required">

                                    <label class="form-check-label"
                                        for="work">

                                        Work

                                    </label>

                                </div>


                                <div class="form-check">

                                    <input class="form-check-input"
                                        type="radio"
                                        name="addressType"
                                        id="other"
                                        data-validation="required">

                                    <label class="form-check-label"
                                        for="other">

                                        Other

                                    </label>

                                </div>

                            </div>

                            <span class="error text-danger" id="addressTypeError"></span>

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Full Name
                            </label>

                            <input type="text"
                                class="form-control"
                                name="fullname"
                                data-validation="required alpha"
                                placeholder="Enter full name">
                            <span class="error text-danger" id="fullnameError"></span>

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Mobile Number
                            </label>

                            <input type="text"
                                class="form-control"
                                name="mobile"
                                data-validation="required numeric min max"
                                data-min="10"
                                data-max="10"
                                placeholder="Enter mobile number">
                            <span class="error text-danger" id="mobileError"></span>

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Address
                            </label>

                            <textarea class="form-control"
                                name="address"
                                data-validation="required"
                                rows="3"
                                placeholder="House No., Street, Area"></textarea>
                            <span class="error text-danger" id="addressError"></span>

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                City / Village
                            </label>

                            <input type="text"
                                class="form-control"
                                name="city"
                                data-validation="required alpha"
                                placeholder="City / Village">
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
                                placeholder="District">
                            <span class="error text-danger" id="districtError"></span>

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                State
                            </label>

                            <select class="form-select"
                                name="state"
                                data-validation="required">

                                <option value="" selected>Select state</option>

                                <option>
                                    Gujarat
                                </option>

                                <option>
                                    Maharashtra
                                </option>

                                <option>
                                    Rajasthan
                                </option>

                                <option>
                                    Madhya Pradesh
                                </option>

                            </select>
                            <span class="error text-danger" id="stateError"></span>

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Pincode
                            </label>

                            <input type="text"
                                class="form-control"
                                name="pincode"
                                data-validation="required numeric min max"
                                data-min="6"
                                data-max="6"
                                placeholder="Pincode">
                            <span class="error text-danger" id="pincodeError"></span>

                        </div>


                        <div class="col-12">

                            <div class="form-check">

                                <input class="form-check-input"
                                    type="checkbox"
                                    id="defaultAddress">

                                <label class="form-check-label"
                                    for="defaultAddress">

                                    Make this my default address

                                </label>

                            </div>

                        </div>

                    </div>


                    <div class="d-flex gap-2 mt-4">

                        <button type="submit" class="btn btn-success">

                            <i class="bi bi-check2 me-1"></i>
                            Save Address

                        </button>

                        <button type="button" class="btn btn-outline-secondary">
                            Cancel
                        </button>

                    </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "customerlayout.php";

?>
