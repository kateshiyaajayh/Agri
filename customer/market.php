<?php

$pageTitle = "Market";

ob_start();

?>

<div class="container-fluid px-3 px-md-4 py-4">

    <!-- Market Header -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">

        <div>
            <h3 class="mb-1">Market</h3>
            <p class="text-muted mb-0">
                Fresh and quality dairy products
            </p>
        </div>

        <a href="profile.php" class="btn btn-outline-success">
            <i class="bi bi-cart3 me-1"></i>
            My Cart
        </a>

    </div>


    <!-- Search and Sort -->
    <div class="row g-3 mb-4">

        <div class="col-lg-7">

            <div class="input-group">

                <span class="input-group-text bg-white">
                    <i class="bi bi-search"></i>
                </span>

                <input type="text"
                    class="form-control"
                    placeholder="Search products...">

            </div>

        </div>


        <div class="col-lg-5">

            <select class="form-select">

                <option selected>Sort By</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Newest Products</option>
                <option>Most Popular</option>

            </select>

        </div>

    </div>


    <!-- Categories -->
    <div class="mb-4">

        <h6 class="mb-3">
            Categories
        </h6>

        <div class="d-flex flex-wrap gap-2">

            <button class="btn btn-success category-btn">
                All Products
            </button>

            <button class="btn btn-outline-success category-btn">
                Milk
            </button>

            <button class="btn btn-outline-success category-btn">
                Curd
            </button>

            <button class="btn btn-outline-success category-btn">
                Paneer
            </button>

            <button class="btn btn-outline-success category-btn">
                Ghee
            </button>

            <button class="btn btn-outline-success category-btn">
                Butter
            </button>

        </div>

    </div>


    <!-- Product Heading -->
    <div class="d-flex justify-content-between align-items-center mb-3">

        <div>

            <h5 class="mb-1">
                All Products
            </h5>

            <small class="text-muted">
                12 products available
            </small>

        </div>

    </div>


    <!-- Products -->
    <div class="row g-4">


        <!-- Product 1 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">

            <div class="card product-card h-100">

                <div class="product-image">

                    <span class="product-badge">
                        Fresh
                    </span>

                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>

                    <img src="../images/cow-milk.jpg"
                        alt="Fresh Cow Milk">

                </div>


                <div class="card-body">

                    <small class="text-success">
                        Milk
                    </small>

                    <h5 class="product-title mt-1">
                        Fresh Cow Milk
                    </h5>

                    <p class="text-muted small mb-3">
                        Fresh and pure cow milk.
                    </p>


                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <h5 class="text-success mb-0">
                            ₹60
                            <small class="text-muted">
                                / Liter
                            </small>
                        </h5>

                        <span class="rating">
                            ★ 4.5
                        </span>

                    </div>


                    <div class="d-flex gap-2">

                        <button class="btn btn-success flex-grow-1">
                            <i class="bi bi-cart3 me-1"></i>
                            Add to Cart
                        </button>

                        <button class="btn btn-outline-success">
                            Buy
                        </button>

                    </div>

                </div>

            </div>

        </div>


        <!-- Product 2 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">

            <div class="card product-card h-100">

                <div class="product-image">

                    <span class="product-badge">
                        Fresh
                    </span>

                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>

                    <img src="../images/cow-milk.jpg"
                        alt="Fresh Curd">

                </div>


                <div class="card-body">

                    <small class="text-success">
                        Curd
                    </small>

                    <h5 class="product-title mt-1">
                        Fresh Curd
                    </h5>

                    <p class="text-muted small mb-3">
                        Thick and fresh dairy curd.
                    </p>


                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <h5 class="text-success mb-0">
                            ₹80
                            <small class="text-muted">
                                / Kg
                            </small>
                        </h5>

                        <span class="rating">
                            ★ 4.6
                        </span>

                    </div>


                    <div class="d-flex gap-2">

                        <button class="btn btn-success flex-grow-1">
                            <i class="bi bi-cart3 me-1"></i>
                            Add to Cart
                        </button>

                        <button class="btn btn-outline-success">
                            Buy
                        </button>

                    </div>

                </div>

            </div>

        </div>


        <!-- Product 3 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">

            <div class="card product-card h-100">

                <div class="product-image">

                    <span class="product-badge">
                        Popular
                    </span>

                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>

                    <img src="../images/buffalo-milk.jpg"
                        alt="Fresh Paneer">

                </div>


                <div class="card-body">

                    <small class="text-success">
                        Paneer
                    </small>

                    <h5 class="product-title mt-1">
                        Fresh Paneer
                    </h5>

                    <p class="text-muted small mb-3">
                        Soft and fresh paneer.
                    </p>


                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <h5 class="text-success mb-0">
                            ₹320
                            <small class="text-muted">
                                / Kg
                            </small>
                        </h5>

                        <span class="rating">
                            ★ 4.8
                        </span>

                    </div>


                    <div class="d-flex gap-2">

                        <button class="btn btn-success flex-grow-1">
                            <i class="bi bi-cart3 me-1"></i>
                            Add to Cart
                        </button>

                        <button class="btn btn-outline-success">
                            Buy
                        </button>

                    </div>

                </div>

            </div>

        </div>


        <!-- Product 4 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">

            <div class="card product-card h-100">

                <div class="product-image">

                    <span class="product-badge">
                        Premium
                    </span>

                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>

                    <img src="../images/cow-ghee.jpg"
                        alt="Pure Cow Ghee">

                </div>


                <div class="card-body">

                    <small class="text-success">
                        Ghee
                    </small>

                    <h5 class="product-title mt-1">
                        Pure Cow Ghee
                    </h5>

                    <p class="text-muted small mb-3">
                        Pure traditional cow ghee.
                    </p>


                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <h5 class="text-success mb-0">
                            ₹650
                            <small class="text-muted">
                                / Kg
                            </small>
                        </h5>

                        <span class="rating">
                            ★ 4.9
                        </span>

                    </div>


                    <div class="d-flex gap-2">

                        <button class="btn btn-success flex-grow-1">
                            <i class="bi bi-cart3 me-1"></i>
                            Add to Cart
                        </button>

                        <button class="btn btn-outline-success">
                            Buy
                        </button>

                    </div>

                </div>

            </div>

        </div>


        <!-- Product 5 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">

            <div class="card product-card h-100">

                <div class="product-image">

                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>

                    <img src="../images/buffalo-milk.jpg"
                        alt="Buffalo Milk">

                </div>


                <div class="card-body">

                    <small class="text-success">
                        Milk
                    </small>

                    <h5 class="product-title mt-1">
                        Fresh Buffalo Milk
                    </h5>

                    <p class="text-muted small mb-3">
                        Rich and creamy buffalo milk.
                    </p>


                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <h5 class="text-success mb-0">
                            ₹70
                            <small class="text-muted">
                                / Liter
                            </small>
                        </h5>

                        <span class="rating">
                            ★ 4.7
                        </span>

                    </div>


                    <div class="d-flex gap-2">

                        <button class="btn btn-success flex-grow-1">
                            <i class="bi bi-cart3 me-1"></i>
                            Add to Cart
                        </button>

                        <button class="btn btn-outline-success">
                            Buy
                        </button>

                    </div>

                </div>

            </div>

        </div>


        <!-- Product 6 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">

            <div class="card product-card h-100">

                <div class="product-image">

                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>

                    <img src="../images/buffalo-ghee.jpg"
                        alt="Fresh Butter">

                </div>


                <div class="card-body">

                    <small class="text-success">
                        Butter
                    </small>

                    <h5 class="product-title mt-1">
                        Fresh Butter
                    </h5>

                    <p class="text-muted small mb-3">
                        Fresh and creamy dairy butter.
                    </p>


                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <h5 class="text-success mb-0">
                            ₹120
                            <small class="text-muted">
                                / 500g
                            </small>
                        </h5>

                        <span class="rating">
                            ★ 4.6
                        </span>

                    </div>


                    <div class="d-flex gap-2">

                        <button class="btn btn-success flex-grow-1">
                            <i class="bi bi-cart3 me-1"></i>
                            Add to Cart
                        </button>

                        <button class="btn btn-outline-success">
                            Buy
                        </button>

                    </div>

                </div>

            </div>

        </div>


        <!-- Product 7 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">

            <div class="card product-card h-100">

                <div class="product-image">

                    <span class="product-badge">
                        Fresh
                    </span>

                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>

                    <img src="../images/cow-milk.jpg"
                        alt="Full Cream Milk">

                </div>


                <div class="card-body">

                    <small class="text-success">
                        Milk
                    </small>

                    <h5 class="product-title mt-1">
                        Full Cream Milk
                    </h5>

                    <p class="text-muted small mb-3">
                        Rich full cream fresh milk.
                    </p>


                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <h5 class="text-success mb-0">
                            ₹75
                            <small class="text-muted">
                                / Liter
                            </small>
                        </h5>

                        <span class="rating">
                            ★ 4.7
                        </span>

                    </div>


                    <div class="d-flex gap-2">

                        <button class="btn btn-success flex-grow-1">
                            <i class="bi bi-cart3 me-1"></i>
                            Add to Cart
                        </button>

                        <button class="btn btn-outline-success">
                            Buy
                        </button>

                    </div>

                </div>

            </div>

        </div>


        <!-- Product 8 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">

            <div class="card product-card h-100">

                <div class="product-image">

                    <span class="product-badge">
                        Popular
                    </span>

                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>

                    <img src="../images/cow-milk.jpg"
                        alt="Premium Curd">

                </div>


                <div class="card-body">

                    <small class="text-success">
                        Curd
                    </small>

                    <h5 class="product-title mt-1">
                        Premium Curd
                    </h5>

                    <p class="text-muted small mb-3">
                        Creamy premium quality curd.
                    </p>


                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <h5 class="text-success mb-0">
                            ₹95
                            <small class="text-muted">
                                / Kg
                            </small>
                        </h5>

                        <span class="rating">
                            ★ 4.8
                        </span>

                    </div>


                    <div class="d-flex gap-2">

                        <button class="btn btn-success flex-grow-1">
                            <i class="bi bi-cart3 me-1"></i>
                            Add to Cart
                        </button>

                        <button class="btn btn-outline-success">
                            Buy
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "customerlayout.php";

?>