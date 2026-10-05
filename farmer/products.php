<?php

$pageTitle = "Products";

ob_start();

?>

<div class="d-flex flex-column flex-sm-row
            justify-content-between align-items-sm-center
            gap-3 mb-4">

    <div>
        <h3 class="fw-bold mb-1">Products</h3>

        <p class="text-muted mb-0">
            Manage your dairy products.
        </p>
    </div>

    <a href="add-product.php" class="btn btn-success">
        <i class="bi bi-plus-lg me-2"></i>
        Add Product
    </a>

</div>


<!-- Summary Cards -->
<div class="row g-3 g-md-4 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <div class="d-flex justify-content-between">
                    <div>
                        <small class="text-muted">Total Products</small>
                        <h3 class="fw-bold mt-2 mb-0">12</h3>
                    </div>

                    <i class="bi bi-box-seam fs-2 text-success"></i>
                </div>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <div class="d-flex justify-content-between">
                    <div>
                        <small class="text-muted">Active Products</small>
                        <h3 class="fw-bold mt-2 mb-0">10</h3>
                    </div>

                    <i class="bi bi-check-circle fs-2 text-success"></i>
                </div>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <div class="d-flex justify-content-between">
                    <div>
                        <small class="text-muted">Out of Stock</small>
                        <h3 class="fw-bold mt-2 mb-0">2</h3>
                    </div>

                    <i class="bi bi-exclamation-circle fs-2 text-warning"></i>
                </div>

            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">

                <div class="d-flex justify-content-between">
                    <div>
                        <small class="text-muted">Total Sales</small>
                        <h3 class="fw-bold mt-2 mb-0">₹18,500</h3>
                    </div>

                    <i class="bi bi-cash-stack fs-2 text-success"></i>
                </div>

            </div>
        </div>
    </div>

</div>


<!-- Product List -->
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row
                    justify-content-between gap-3 mb-4">

            <div>
                <h5 class="fw-bold mb-1">
                    Product List
                </h5>

                <small class="text-muted">
                    Your dairy products
                </small>
            </div>


            <div class="d-flex gap-2">

                <div class="input-group">

                    <span class="input-group-text bg-white">
                        <i class="bi bi-search"></i>
                    </span>

                    <input type="text"
                        class="form-control"
                        placeholder="Search product">

                </div>

                <button class="btn btn-light border">
                    <i class="bi bi-funnel"></i>
                </button>

            </div>

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td class="fw-semibold">
                            Fresh Milk
                        </td>

                        <td>
                            Milk
                        </td>

                        <td>
                            ₹60 / L
                        </td>

                        <td>
                            80 L
                        </td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Active
                            </span>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-light border">
                                <i class="bi bi-eye"></i>
                            </button>

                            <button class="btn btn-sm btn-light border">
                                <i class="bi bi-pencil"></i>
                            </button>
                        </td>
                    </tr>


                    <tr>
                        <td class="fw-semibold">
                            Curd
                        </td>

                        <td>
                            Dairy
                        </td>

                        <td>
                            ₹80 / kg
                        </td>

                        <td>
                            35 kg
                        </td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Active
                            </span>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-light border">
                                <i class="bi bi-eye"></i>
                            </button>

                            <button class="btn btn-sm btn-light border">
                                <i class="bi bi-pencil"></i>
                            </button>
                        </td>
                    </tr>


                    <tr>
                        <td class="fw-semibold">
                            Ghee
                        </td>

                        <td>
                            Dairy
                        </td>

                        <td>
                            ₹650 / kg
                        </td>

                        <td>
                            0 kg
                        </td>

                        <td>
                            <span class="badge bg-warning-subtle text-warning">
                                Out of Stock
                            </span>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-light border">
                                <i class="bi bi-eye"></i>
                            </button>

                            <button class="btn btn-sm btn-light border">
                                <i class="bi bi-pencil"></i>
                            </button>
                        </td>
                    </tr>


                    <tr>
                        <td class="fw-semibold">
                            Paneer
                        </td>

                        <td>
                            Dairy
                        </td>

                        <td>
                            ₹320 / kg
                        </td>

                        <td>
                            18 kg
                        </td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Active
                            </span>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-light border">
                                <i class="bi bi-eye"></i>
                            </button>

                            <button class="btn btn-sm btn-light border">
                                <i class="bi bi-pencil"></i>
                            </button>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "farmerlayout.php";

?>