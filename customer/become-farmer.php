<?php

$pageTitle = "Become a Farmer";

ob_start();

?>

<div class="container-fluid px-3 px-md-4 py-4">

    <div class="mb-4">

        <h3 class="mb-1">
            Become a Farmer
        </h3>

        <p class="text-muted mb-0">
            Fill in your details to apply as a farmer
        </p>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body p-3 p-md-4">

            <div id="applicationSuccess"
                class="alert alert-success d-none">
                Your application is under review.
            </div>

            <form id="becomeFarmerForm"
                enctype="multipart/form-data"
                novalidate>

                <h5 class="mb-3">
                    Personal Details
                </h5>

                <div class="row g-3">

                    <div class="col-12 col-md-6">

                        <label class="form-label">
                            Full Name
                        </label>

                        <input type="text"
                            class="form-control"
                            name="full_name"
                            data-validation="required alpha"
                            required>
                        <span class="error text-danger"
                            id="full_nameError"></span>

                    </div>


                    <div class="col-12 col-md-6">

                        <label class="form-label">
                            Mobile Number
                        </label>

                        <input type="tel"
                            class="form-control"
                            name="mobile"
                            data-validation="required numeric min max"
                            data-min="10"
                            data-max="10"
                            required>
                        <span class="error text-danger"
                            id="mobileError"></span>

                    </div>


                    <div class="col-12">

                        <label class="form-label">
                            Email
                        </label>

                        <input type="email"
                            class="form-control"
                            name="email"
                            data-validation="required email"
                            required>
                        <span class="error text-danger"
                            id="emailError"></span>

                    </div>

                </div>


                <hr class="my-4">


                <h5 class="mb-3">
                    Address Details
                </h5>

                <div class="row g-3">

                    <div class="col-12 col-md-6">

                        <label class="form-label">
                            Village
                        </label>

                        <input type="text"
                            class="form-control"
                            name="village"
                            data-validation="required alpha"
                            required>
                        <span class="error text-danger"
                            id="villageError"></span>

                    </div>


                    <div class="col-12 col-md-6">

                        <label class="form-label">
                            Taluka
                        </label>

                        <input type="text"
                            class="form-control"
                            name="taluka"
                            data-validation="required alpha"
                            required>
                        <span class="error text-danger"
                            id="talukaError"></span>

                    </div>


                    <div class="col-12 col-md-6">

                        <label class="form-label">
                            District
                        </label>

                        <input type="text"
                            class="form-control"
                            name="district"
                            data-validation="required alpha"
                            required>
                        <span class="error text-danger"
                            id="districtError"></span>

                    </div>


                    <div class="col-12 col-md-6">

                        <label class="form-label">
                            State
                        </label>

                        <input type="text"
                            class="form-control"
                            name="state"
                            data-validation="required alpha"
                            required>
                        <span class="error text-danger"
                            id="stateError"></span>

                    </div>


                    <div class="col-12 col-md-6">

                        <label class="form-label">
                            Pincode
                        </label>

                        <input type="text"
                            class="form-control"
                            name="pincode"
                            data-validation="required numeric min max"
                            data-min="6"
                            data-max="6"
                            required>
                        <span class="error text-danger"
                            id="pincodeError"></span>

                    </div>

                </div>


                <hr class="my-4">


                <h5 class="mb-3">
                    Verification Documents
                </h5>

                <div class="row g-3">

                    <div class="col-12 col-md-6">

                        <label class="form-label">
                            Aadhar Number
                        </label>

                        <input type="text"
                            class="form-control"
                            name="aadhar_number"
                            data-validation="required numeric min max"
                            data-min="12"
                            data-max="12"
                            required>
                        <span class="error text-danger"
                            id="aadhar_numberError"></span>

                    </div>


                    <div class="col-12 col-md-6">

                        <label class="form-label">
                            ID Proof
                        </label>

                        <input type="file"
                            class="form-control"
                            name="id_proof"
                            data-validation="required file"
                            data-filetypes="jpg,jpeg,png,pdf"
                            accept=".jpg,.png,.pdf"
                            required>
                        <span class="error text-danger"
                            id="id_proofError"></span>

                    </div>


                    <div class="col-12 col-md-6">

                        <label class="form-label">
                            Farm Photo
                        </label>

                        <input type="file"
                            class="form-control"
                            name="farm_photo"
                            data-validation="required file"
                            data-filetypes="jpg,jpeg,png"
                            accept=".jpg,.png"
                            required>
                        <span class="error text-danger"
                            id="farm_photoError"></span>

                    </div>


                    <div class="col-12">

                        <div class="form-check">

                            <input type="checkbox"
                                class="form-check-input"
                                name="terms_agree"
                                data-validation="required terms"
                                required>

                            <label class="form-check-label">
                                I agree to the terms and conditions
                            </label>

                        </div>

                        <span class="error text-danger"
                            id="terms_agreeError"></span>

                    </div>

                </div>


                <button type="submit"
                    class="btn btn-success mt-4">
                    <i class="bi bi-send me-1"></i>
                    Submit Application
                </button>

            </form>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "customerlayout.php";

?>
