<?php

$pageTitle = "Products";

ob_start();
?>

<div class="mb-4">
    <h3 class="fw-bold mb-1">Products</h3>
    <p class="text-muted mb-0">
        Manage products added by farmers.
    </p>
</div>


<!-- Summary Cards -->
<div class="row g-3 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Total Products</small>
                <h3 class="fw-bold mt-2 mb-0">120</h3>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Active Products</small>
                <h3 class="fw-bold mt-2 mb-0">105</h3>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Inactive Products</small>
                <h3 class="fw-bold mt-2 mb-0">15</h3>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <small class="text-muted">Categories</small>
                <h3 class="fw-bold mt-2 mb-0">6</h3>
            </div>
        </div>
    </div>

</div>


<!-- Product List -->
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex flex-column flex-md-row justify-content-between gap-3 mb-4">

            <div>
                <h5 class="fw-semibold mb-1">
                    Product List
                </h5>

                <small class="text-muted">
                    View and manage farmer products.
                </small>
            </div>


            <div class="d-flex flex-column flex-sm-row gap-2">

                <input type="text"
                    class="form-control"
                    placeholder="Search product">

                <select class="form-select">

                    <option>All Categories</option>
                    <option>Milk</option>
                    <option>Curd</option>
                    <option>Ghee</option>
                    <option>Paneer</option>
                    <option>Other Dairy</option>

                </select>


                <select class="form-select">

                    <option>All Status</option>
                    <option>Active</option>
                    <option>Inactive</option>

                </select>

            </div>

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>

                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Farmer</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                </thead>


                <tbody>

                    <tr>

                        <td>1</td>

                        <td>
                            <div class="fw-semibold">
                                Fresh Milk
                            </div>
                        </td>

                        <td>
                            Rajesh Patel
                        </td>

                        <td>
                            Milk
                        </td>

                        <td>
                            ₹60 / Liter
                        </td>

                        <td>
                            80 L
                        </td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light"
                                    title="View">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-sm btn-light"
                                    title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm btn-light text-danger"
                                    title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <tr>

                        <td>2</td>

                        <td>
                            <div class="fw-semibold">
                                Fresh Curd
                            </div>
                        </td>

                        <td>
                            Mahesh Patel
                        </td>

                        <td>
                            Curd
                        </td>

                        <td>
                            ₹80 / Kg
                        </td>

                        <td>
                            35 Kg
                        </td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm btn-light text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <tr>

                        <td>3</td>

                        <td>
                            <div class="fw-semibold">
                                Desi Ghee
                            </div>
                        </td>

                        <td>
                            Ramesh Patel
                        </td>

                        <td>
                            Ghee
                        </td>

                        <td>
                            ₹650 / Kg
                        </td>

                        <td>
                            12 Kg
                        </td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm btn-light text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <tr>

                        <td>4</td>

                        <td>
                            <div class="fw-semibold">
                                Paneer
                            </div>
                        </td>

                        <td>
                            Kiran Patel
                        </td>

                        <td>
                            Paneer
                        </td>

                        <td>
                            ₹320 / Kg
                        </td>

                        <td>
                            0 Kg
                        </td>

                        <td>
                            <span class="badge text-bg-danger">
                                Inactive
                            </span>
                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-sm btn-light">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm btn-light text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>

                        </td>

                    </tr>

                </tbody>

            </table>
        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "adminlayout.php";

?>