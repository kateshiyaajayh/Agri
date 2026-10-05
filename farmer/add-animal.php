<?php

$pageTitle = "Animal Management";

ob_start();

?>

<div class="mb-4">

    <a href="animals.php"
        class="text-success text-decoration-none">
        <i class="bi bi-arrow-left me-1"></i>
        Back to Animals
    </a>

    <h3 class="fw-bold mt-3 mb-1">
        Add Animal
    </h3>

    <p class="text-muted mb-0">
        Enter the details of your farm animal.
    </p>

</div>


<div class="card border-0 shadow-sm">

    <div class="card-body p-3 p-md-4">

        <form novalidate>

            <div class="row g-3">

                <div class="col-12 col-md-6">
                    <label class="form-label">
                        Animal ID
                    </label>

                    <input type="text"
                        class="form-control"
                        name="animal_id"
                        data-validation="required"
                        placeholder="Enter animal ID">
                    <span class="error text-danger" id="animal_idError"></span>
                </div>


                <div class="col-12 col-md-6">
                    <label class="form-label">
                        Animal Type
                    </label>

                    <select class="form-select"
                        name="animal_type"
                        data-validation="required">
                        <option selected disabled>
                            Select animal type
                        </option>
                        <option>Cow</option>
                        <option>Buffalo</option>
                        <option>Goat</option>
                        <option>Other</option>
                    </select>
                    <span class="error text-danger" id="animal_typeError"></span>
                </div>


                <div class="col-12 col-md-6">
                    <label class="form-label">
                        Breed
                    </label>

                    <input type="text"
                        class="form-control"
                        name="breed"
                        data-validation="required"
                        placeholder="Enter breed">
                    <span class="error text-danger" id="breedError"></span>
                </div>


                <div class="col-12 col-md-6">

                    <label class="form-label d-block">
                        Gender
                    </label>

                    <div class="d-flex gap-4 pt-2">

                        <div class="form-check">
                            <input class="form-check-input"
                                type="radio"
                                name="gender"
                                id="female"
                                data-validation="required">

                            <label class="form-check-label"
                                for="female">
                                Female
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input"
                                type="radio"
                                name="gender"
                                id="male"
                                data-validation="required">

                            <label class="form-check-label"
                                for="male">
                                Male
                            </label>
                        </div>

                    </div>
                    <span class="error text-danger" id="genderError"></span>

                </div>


                <div class="col-12 col-md-6">
                    <label class="form-label">
                        Date of Birth
                    </label>

                    <input type="date"
                        class="form-control"
                        name="date_of_birth"
                        data-validation="required">
                    <span class="error text-danger" id="date_of_birthError"></span>
                </div>


                <div class="col-12 col-md-6">
                    <label class="form-label">
                        Age
                    </label>

                    <input type="text"
                        class="form-control"
                        name="age"
                        data-validation="required"
                        placeholder="e.g. 4 Years">
                    <span class="error text-danger" id="ageError"></span>
                </div>


                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Weight
                    </label>

                    <div class="input-group">

                        <input type="number"
                            class="form-control"
                            name="weight"
                            data-validation="required numeric"
                            placeholder="Enter weight">

                        <span class="input-group-text">
                            kg
                        </span>

                    </div>
                    <span class="error text-danger" id="weightError"></span>

                </div>


                <div class="col-12 col-md-6">
                    <label class="form-label">
                        Purchase Date
                    </label>

                    <input type="date"
                        class="form-control"
                        name="purchase_date"
                        data-validation="required">
                    <span class="error text-danger" id="purchase_dateError"></span>
                </div>


                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Animal Photo
                    </label>

                    <input type="file"
                        class="form-control"
                        name="animal_photo"
                        data-validation="required file filesize"
                        data-filetypes="jpg,jpeg,png,webp"
                        data-filesize="2048"
                        accept="image/*">
                    <span class="error text-danger" id="animal_photoError"></span>

                    <small class="text-muted">
                        JPG, PNG or WEBP
                    </small>

                </div>


                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Status
                    </label>

                    <select class="form-select">
                        <option selected>Active</option>
                        <option>Inactive</option>
                    </select>

                </div>


                <div class="col-12">

                    <hr class="my-3">

                    <div class="d-flex flex-column flex-sm-row
                                justify-content-end gap-2">

                        <a href="animals.php"
                            class="btn btn-light border">
                            Cancel
                        </a>

                        <button type="submit"
                            class="btn btn-success">
                            <i class="bi bi-check-lg me-2"></i>
                            Save Animal
                        </button>

                    </div>

                </div>

            </div>

        </form>

    </div>

</div>


<?php

$content = ob_get_clean();

include "farmerlayout.php";

?>