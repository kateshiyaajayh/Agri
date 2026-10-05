<?php

$pageTitle = "Wishlist";

ob_start();

?>

<div class="container-fluid px-3 px-md-4 py-4">

    <!-- Header -->
    <div class="mb-4">

        <h3 class="mb-1">
            My Wishlist
        </h3>

        <p class="text-muted mb-0">
            Products you saved for later
        </p>

    </div>


    <!-- Wishlist -->
    <div class="card border-0 shadow-sm">

        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>
                    <h5 class="mb-1">
                        Saved Products
                    </h5>

                    <small class="text-muted">
                        4 products in your wishlist
                    </small>
                </div>

            </div>


            <div class="row g-4">


                <!-- Product 1 -->
                <div class="col-sm-6 col-lg-4 col-xl-3">

                    <div class="card wishlist-card h-100">

                        <div class="wishlist-image">

                            <button class="remove-wishlist"
                                title="Remove from wishlist">

                                <i class="bi bi-x"></i>

                            </button>

                            <img src="../images/cow-milk.jpg"
                                alt="Fresh Cow Milk">

                        </div>


                        <div class="card-body">

                            <small class="text-success">
                                Milk
                            </small>

                            <h5 class="mt-1 mb-2">
                                Fresh Cow Milk
                            </h5>

                            <p class="text-muted small mb-3">
                                Fresh and pure cow milk.
                            </p>


                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <strong class="text-success">
                                    ₹60 / Liter
                                </strong>

                                <span class="wishlist-rating">
                                    ★ 4.5
                                </span>

                            </div>


                            <button class="btn btn-success w-100">

                                <i class="bi bi-cart3 me-1"></i>
                                Add to Cart

                            </button>

                        </div>

                    </div>

                </div>


                <!-- Product 2 -->
                <div class="col-sm-6 col-lg-4 col-xl-3">

                    <div class="card wishlist-card h-100">

                        <div class="wishlist-image">

                            <button class="remove-wishlist"
                                title="Remove from wishlist">

                                <i class="bi bi-x"></i>

                            </button>

                            <img src="../images/cow-milk.jpg"
                                alt="Fresh Curd">

                        </div>


                        <div class="card-body">

                            <small class="text-success">
                                Curd
                            </small>

                            <h5 class="mt-1 mb-2">
                                Fresh Curd
                            </h5>

                            <p class="text-muted small mb-3">
                                Thick and fresh dairy curd.
                            </p>


                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <strong class="text-success">
                                    ₹80 / Kg
                                </strong>

                                <span class="wishlist-rating">
                                    ★ 4.6
                                </span>

                            </div>


                            <button class="btn btn-success w-100">

                                <i class="bi bi-cart3 me-1"></i>
                                Add to Cart

                            </button>

                        </div>

                    </div>

                </div>


                <!-- Product 3 -->
                <div class="col-sm-6 col-lg-4 col-xl-3">

                    <div class="card wishlist-card h-100">

                        <div class="wishlist-image">

                            <button class="remove-wishlist"
                                title="Remove from wishlist">

                                <i class="bi bi-x"></i>

                            </button>

                            <img src="../images/buffalo-milk.jpg"
                                alt="Fresh Paneer">

                        </div>


                        <div class="card-body">

                            <small class="text-success">
                                Paneer
                            </small>

                            <h5 class="mt-1 mb-2">
                                Fresh Paneer
                            </h5>

                            <p class="text-muted small mb-3">
                                Soft and fresh paneer.
                            </p>


                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <strong class="text-success">
                                    ₹320 / Kg
                                </strong>

                                <span class="wishlist-rating">
                                    ★ 4.8
                                </span>

                            </div>


                            <button class="btn btn-success w-100">

                                <i class="bi bi-cart3 me-1"></i>
                                Add to Cart

                            </button>

                        </div>

                    </div>

                </div>


                <!-- Product 4 -->
                <div class="col-sm-6 col-lg-4 col-xl-3">

                    <div class="card wishlist-card h-100">

                        <div class="wishlist-image">

                            <button class="remove-wishlist"
                                title="Remove from wishlist">

                                <i class="bi bi-x"></i>

                            </button>

                            <img src="../images/cow-ghee.jpg"
                                alt="Pure Cow Ghee">

                        </div>


                        <div class="card-body">

                            <small class="text-success">
                                Ghee
                            </small>

                            <h5 class="mt-1 mb-2">
                                Pure Cow Ghee
                            </h5>

                            <p class="text-muted small mb-3">
                                Pure traditional cow ghee.
                            </p>


                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <strong class="text-success">
                                    ₹650 / Kg
                                </strong>

                                <span class="wishlist-rating">
                                    ★ 4.9
                                </span>

                            </div>


                            <button class="btn btn-success w-100">

                                <i class="bi bi-cart3 me-1"></i>
                                Add to Cart

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Continue Shopping -->
    <div class="mt-4">

        <a href="market.php"
            class="btn btn-outline-success">

            <i class="bi bi-shop me-1"></i>
            Continue Shopping

        </a>

    </div>

</div>


<?php

$content = ob_get_clean();

include "customerlayout.php";

?>