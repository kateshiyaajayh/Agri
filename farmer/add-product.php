<?php

$pageTitle = "Add Product";

ob_start();

?>

<div class="mb-4">

    <a href="products.php"
        class="text-success text-decoration-none">
        <i class="bi bi-arrow-left me-1"></i>
        Back to Products
    </a>

    <h3 class="fw-bold mt-3 mb-1">
        Add Product
    </h3>

    <p class="text-muted mb-0">
        Enter the details of your dairy product.
    </p>

</div>


<div class="card border-0 shadow-sm">

    <div class="card-body p-3 p-md-4">

        <form>

            <div class="row g-3">

                <!-- Product Name -->
                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Product Name
                    </label>

                    <input type="text"
                        class="form-control"
                        placeholder="Enter product name">

                </div>


                <!-- Category -->
                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Category
                    </label>

                    <select class="form-select">

                        <option selected disabled>
                            Select category
                        </option>

                        <option>Milk</option>
                        <option>Dairy</option>
                        <option>Ghee</option>
                        <option>Paneer</option>
                        <option>Curd</option>

                    </select>

                </div>


                <!-- Price -->
                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Price
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            ₹
                        </span>

                        <input type="number"
                            class="form-control"
                            placeholder="Enter price">

                    </div>

                </div>


                <!-- Unit -->
                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Unit
                    </label>

                    <select class="form-select">

                        <option selected disabled>
                            Select unit
                        </option>

                        <option>Liter</option>
                        <option>Kg</option>
                        <option>Gram</option>
                        <option>Piece</option>

                    </select>

                </div>


                <!-- Stock -->
                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Stock Quantity
                    </label>

                    <input type="number"
                        class="form-control"
                        placeholder="Enter stock quantity">

                </div>


                <!-- Product Photo -->
                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Product Photo
                    </label>

                    <input type="file"
                        class="form-control"
                        accept="image/*">

                    <small class="text-muted">
                        JPG, PNG or WEBP
                    </small>

                </div>


                <!-- Description -->
                <div class="col-12">

                    <label class="form-label">
                        Description
                    </label>

                    <textarea class="form-control"
                        rows="4"
                        placeholder="Enter product description"></textarea>

                </div>


                <!-- Status -->
                <div class="col-12 col-md-6">

                    <label class="form-label">
                        Status
                    </label>

                    <select class="form-select">

                        <option selected>
                            Active
                        </option>

                        <option>
                            Inactive
                        </option>

                    </select>

                </div>


                <!-- Buttons -->
                <div class="col-12">

                    <hr class="my-3">

                    <div class="d-flex flex-column flex-sm-row
                                justify-content-end gap-2">

                        <a href="products.php"
                            class="btn btn-light border">
                            Cancel
                        </a>

                        <button type="submit"
                            class="btn btn-success">

                            <i class="bi bi-check-lg me-2"></i>
                            Save Product

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