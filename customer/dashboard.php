<?php

$pageTitle = "Customer Dashboard";

ob_start();

?>

<div class="container-fluid px-3 px-md-4 py-4">

    <!-- Welcome -->
    <div class="dashboard-welcome mb-4">

        <div>

            <small class="text-success fw-semibold">
                Welcome Back
            </small>

            <h2 class="mb-1">
                Hello, Customer
            </h2>

            <p class="text-muted mb-0">
                Discover fresh and quality dairy products from SmartDairyPro.
            </p>

        </div>

        <a href="market.php" class="btn btn-success">
            <i class="bi bi-shop me-1"></i>
            Shop Now
        </a>

    </div>


    <!-- Summary Cards -->
    <div class="row g-4 mb-4">

        <div class="col-sm-6 col-xl-3">

            <div class="card dashboard-card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="dashboard-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>

                    <small class="text-muted">
                        Total Orders
                    </small>

                    <h3 class="mt-1 mb-0">
                        12
                    </h3>

                </div>

            </div>

        </div>


        <div class="col-sm-6 col-xl-3">

            <div class="card dashboard-card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="dashboard-icon">
                        <i class="bi bi-clock"></i>
                    </div>

                    <small class="text-muted">
                        Pending Orders
                    </small>

                    <h3 class="mt-1 mb-0">
                        2
                    </h3>

                </div>

            </div>

        </div>


        <div class="col-sm-6 col-xl-3">

            <div class="card dashboard-card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="dashboard-icon">
                        <i class="bi bi-heart"></i>
                    </div>

                    <small class="text-muted">
                        Wishlist
                    </small>

                    <h3 class="mt-1 mb-0">
                        4
                    </h3>

                </div>

            </div>

        </div>


        <div class="col-sm-6 col-xl-3">

            <div class="card dashboard-card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="dashboard-icon">
                        <i class="bi bi-cart3"></i>
                    </div>

                    <small class="text-muted">
                        Cart Items
                    </small>

                    <h3 class="mt-1 mb-0">
                        3
                    </h3>

                </div>

            </div>

        </div>

    </div>


    <div class="row g-4">

        <!-- Recent Orders -->
        <div class="col-lg-8">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div>

                            <h5 class="mb-1">
                                Recent Orders
                            </h5>

                            <small class="text-muted">
                                Your latest orders
                            </small>

                        </div>

                        <a href="orders.php"
                            class="text-success text-decoration-none">

                            View All

                        </a>

                    </div>


                    <div class="table-responsive">

                        <table class="table align-middle mb-0">

                            <thead>

                                <tr>

                                    <th>
                                        Order ID
                                    </th>

                                    <th>
                                        Date
                                    </th>

                                    <th>
                                        Amount
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>
                                        <strong>#SDP1001</strong>
                                    </td>

                                    <td>
                                        05 Oct 2026
                                    </td>

                                    <td>
                                        ₹200
                                    </td>

                                    <td>
                                        <span class="dashboard-status confirmed">
                                            Confirmed
                                        </span>
                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        <strong>#SDP1000</strong>
                                    </td>

                                    <td>
                                        03 Oct 2026
                                    </td>

                                    <td>
                                        ₹320
                                    </td>

                                    <td>
                                        <span class="dashboard-status delivery">
                                            Out for Delivery
                                        </span>
                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        <strong>#SDP0999</strong>
                                    </td>

                                    <td>
                                        01 Oct 2026
                                    </td>

                                    <td>
                                        ₹650
                                    </td>

                                    <td>
                                        <span class="dashboard-status delivered">
                                            Delivered
                                        </span>
                                    </td>

                                </tr>

                            </tbody>

                        </table>
                    </div>

                </div>

            </div>

        </div>


        <!-- Quick Actions -->
        <div class="col-lg-4">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <h5 class="mb-1">
                        Quick Actions
                    </h5>

                    <small class="text-muted">
                        Manage your shopping
                    </small>


                    <div class="quick-actions mt-4">

                        <a href="market.php"
                            class="quick-action">

                            <div class="quick-icon">
                                <i class="bi bi-shop"></i>
                            </div>

                            <div>

                                <strong>
                                    Browse Market
                                </strong>

                                <small>
                                    Explore dairy products
                                </small>

                            </div>

                            <i class="bi bi-chevron-right ms-auto"></i>

                        </a>


                        <a href="cart.php"
                            class="quick-action">

                            <div class="quick-icon">
                                <i class="bi bi-cart3"></i>
                            </div>

                            <div>

                                <strong>
                                    My Cart
                                </strong>

                                <small>
                                    3 items in your cart
                                </small>

                            </div>

                            <i class="bi bi-chevron-right ms-auto"></i>

                        </a>


                        <a href="wishlist.php"
                            class="quick-action">

                            <div class="quick-icon">
                                <i class="bi bi-heart"></i>
                            </div>

                            <div>

                                <strong>
                                    Wishlist
                                </strong>

                                <small>
                                    4 saved products
                                </small>

                            </div>

                            <i class="bi bi-chevron-right ms-auto"></i>

                        </a>


                        <a href="addresses.php"
                            class="quick-action">

                            <div class="quick-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>

                            <div>

                                <strong>
                                    My Address
                                </strong>

                                <small>
                                    Manage delivery address
                                </small>

                            </div>

                            <i class="bi bi-chevron-right ms-auto"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Recommended Products -->
    <div class="card border-0 shadow-sm mt-4">

        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>

                    <h5 class="mb-1">
                        Recommended Products
                    </h5>

                    <small class="text-muted">
                        Popular products you may like
                    </small>

                </div>

                <a href="market.php"
                    class="text-success text-decoration-none">

                    View Market

                </a>

            </div>


            <div class="row g-4">

                <div class="col-sm-6 col-lg-3">

                    <div class="recommended-product">

                        <div class="recommended-image">

                            <img src="../images/cow-milk.jpg"
                                alt="Fresh Cow Milk">

                        </div>

                        <div class="p-3">

                            <small class="text-success">
                                Milk
                            </small>

                            <h6 class="mt-1 mb-2">
                                Fresh Cow Milk
                            </h6>

                            <strong class="text-success">
                                ₹60 / Liter
                            </strong>

                        </div>

                    </div>

                </div>


                <div class="col-sm-6 col-lg-3">

                    <div class="recommended-product">

                        <div class="recommended-image">

                            <img src="../images/cow-milk.jpg"
                                alt="Fresh Curd">

                        </div>

                        <div class="p-3">

                            <small class="text-success">
                                Curd
                            </small>

                            <h6 class="mt-1 mb-2">
                                Fresh Curd
                            </h6>

                            <strong class="text-success">
                                ₹80 / Kg
                            </strong>

                        </div>

                    </div>

                </div>


                <div class="col-sm-6 col-lg-3">

                    <div class="recommended-product">

                        <div class="recommended-image">

                            <img src="../images/buffalo-milk.jpg"
                                alt="Fresh Paneer">

                        </div>

                        <div class="p-3">

                            <small class="text-success">
                                Paneer
                            </small>

                            <h6 class="mt-1 mb-2">
                                Fresh Paneer
                            </h6>

                            <strong class="text-success">
                                ₹320 / Kg
                            </strong>

                        </div>

                    </div>

                </div>


                <div class="col-sm-6 col-lg-3">

                    <div class="recommended-product">

                        <div class="recommended-image">

                            <img src="../images/cow-ghee.jpg"
                                alt="Pure Cow Ghee">

                        </div>

                        <div class="p-3">

                            <small class="text-success">
                                Ghee
                            </small>

                            <h6 class="mt-1 mb-2">
                                Pure Cow Ghee
                            </h6>

                            <strong class="text-success">
                                ₹650 / Kg
                            </strong>

                        </div>

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