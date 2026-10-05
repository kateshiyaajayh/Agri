<?php

$pageTitle = "Add Scheme";

ob_start();
?>

<div class="mb-4">

    <a href="schemes.php" class="text-decoration-none text-success">
        <i class="bi bi-arrow-left"></i>
        Back to Schemes
    </a>

</div>


<div class="mb-4">
    <h3 class="fw-bold mb-1">Add Government Scheme</h3>
    <p class="text-muted mb-0">
        Add a new scheme for farmers.
    </p>
</div>


<div class="card border-0 shadow-sm">

    <div class="card-body">

        <form>

            <div class="row g-3">

                <div class="col-12">

                    <label class="form-label">
                        Scheme Name
                    </label>

                    <input type="text"
                        name="scheme_name"
                        data-validation="required"
                        class="form-control"
                        placeholder="Enter scheme name">
                    <span class="error text-danger" id="scheme_nameError"></span>

                </div>


                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Category
                    </label>

                    <select name="category" data-validation="required" class="form-select">

                        <option selected disabled>
                            Select category
                        </option>

                        <option>Dairy</option>
                        <option>Animal Health</option>
                        <option>Infrastructure</option>
                        <option>Financial</option>
                        <option>Other</option>

                    </select>
                    <span class="error text-danger" id="categoryError"></span>

                </div>


                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Last Date
                    </label>

                    <input type="date"
                        name="last_date"
                        data-validation="required"
                        class="form-control">
                    <span class="error text-danger" id="last_dateError"></span>

                </div>


                <div class="col-12">

                    <label class="form-label">
                        Description
                    </label>

                    <textarea class="form-control"
                        name="description"
                        data-validation="required"
                        rows="4"
                        placeholder="Enter scheme description"></textarea>
                    <span class="error text-danger" id="descriptionError"></span>

                </div>


                <div class="col-12">

                    <label class="form-label">
                        Eligibility
                    </label>

                    <textarea class="form-control"
                        name="eligibility"
                        data-validation="required"
                        rows="3"
                        placeholder="Enter eligibility details"></textarea>
                    <span class="error text-danger" id="eligibilityError"></span>

                </div>


                <div class="col-12">

                    <label class="form-label">
                        Benefits
                    </label>

                    <textarea class="form-control"
                        name="benefits"
                        data-validation="required"
                        rows="3"
                        placeholder="Enter scheme benefits"></textarea>
                    <span class="error text-danger" id="benefitsError"></span>

                </div>


                <div class="col-12">

                    <label class="form-label">
                        Application Link
                    </label>

                    <input type="url"
                        name="application_link"
                        data-validation="required"
                        class="form-control"
                        placeholder="https://example.com">
                    <span class="error text-danger" id="application_linkError"></span>

                </div>


                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Status
                    </label>

                    <select name="status" class="form-select">

                        <option selected>Active</option>
                        <option>Inactive</option>

                    </select>

                </div>


                <div class="col-12">

                    <hr>

                    <div class="d-flex gap-2">

                        <a href="schemes.php"
                            class="btn btn-light">
                            Cancel
                        </a>

                        <button type="submit"
                            class="btn btn-success">
                            <i class="bi bi-check-lg me-1"></i>
                            Save Scheme
                        </button>

                    </div>

                </div>

            </div>

        </form>

    </div>

</div>


<?php

$content = ob_get_clean();

include "adminlayout.php";

?>
