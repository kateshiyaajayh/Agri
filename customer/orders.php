<?php

$pageTitle = "My Orders";

ob_start();

?>

<div class="container-fluid px-3 px-md-4 py-4">

    <!-- Header -->
    <div class="mb-4">

        <h3 class="mb-1">
            My Orders
        </h3>

        <p class="text-muted mb-0">
            Track and manage your orders
        </p>

    </div>


    <!-- Order Filters -->
    <div class="card border-0 shadow-sm mb-4">

        <div class="card-body p-3">

            <div class="d-flex flex-wrap gap-2">

                <button class="btn btn-success order-filter">
                    All Orders
                </button>

                <button class="btn btn-outline-secondary order-filter">
                    Pending
                </button>

                <button class="btn btn-outline-secondary order-filter">
                    Confirmed
                </button>

                <button class="btn btn-outline-secondary order-filter">
                    Out for Delivery
                </button>

                <button class="btn btn-outline-secondary order-filter">
                    Delivered
                </button>

                <button class="btn btn-outline-secondary order-filter">
                    Cancelled
                </button>

            </div>

        </div>

    </div>


    <!-- Orders -->
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

                <span class="text-muted">
                    4 Orders
                </span>

            </div>


            <!-- Order 1 -->
            <div class="order-card">

                <div class="order-top d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">

                    <div>

                        <small class="text-muted">
                            Order ID
                        </small>

                        <h6 class="mb-1">
                            #SDP1001
                        </h6>

                        <small class="text-muted">
                            05 Oct 2026
                        </small>

                    </div>

                    <span class="status-badge status-confirmed">
                        Confirmed
                    </span>

                </div>


                <hr>


                <div class="order-content d-flex flex-column flex-md-row align-items-stretch align-items-md-center justify-content-between gap-3 gap-md-4">

                    <div class="order-products flex-grow-1">

                        <div class="order-product">

                            <div class="order-product-image">

                                <img src="../images/cow-milk.jpg"
                                    alt="Fresh Cow Milk">

                            </div>

                            <div>

                                <h6 class="mb-1">
                                    Fresh Cow Milk
                                </h6>

                                <small class="text-muted">
                                    2 Liter × ₹60
                                </small>

                            </div>

                        </div>


                        <div class="order-product">

                            <div class="order-product-image">

                                <img src="../images/cow-milk.jpg"
                                    alt="Fresh Curd">

                            </div>

                            <div>

                                <h6 class="mb-1">
                                    Fresh Curd
                                </h6>

                                <small class="text-muted">
                                    1 Kg × ₹80
                                </small>

                            </div>

                        </div>

                    </div>


                    <div class="order-summary text-start text-md-end flex-shrink-0">

                        <small class="text-muted">
                            Total Amount
                        </small>

                        <h5 class="text-success mb-3">
                            ₹200
                        </h5>

                        <a href="#"
                            class="btn btn-outline-success btn-sm">

                            View Details

                        </a>

                    </div>

                </div>

            </div>


            <!-- Order 2 -->
            <div class="order-card">

                <div class="order-top d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">

                    <div>

                        <small class="text-muted">
                            Order ID
                        </small>

                        <h6 class="mb-1">
                            #SDP1000
                        </h6>

                        <small class="text-muted">
                            03 Oct 2026
                        </small>

                    </div>

                    <span class="status-badge status-delivery">
                        Out for Delivery
                    </span>

                </div>


                <hr>


                <div class="order-content d-flex flex-column flex-md-row align-items-stretch align-items-md-center justify-content-between gap-3 gap-md-4">

                    <div class="order-products flex-grow-1">

                        <div class="order-product">

                            <div class="order-product-image">

                                <img src="../images/buffalo-milk.jpg"
                                    alt="Fresh Paneer">

                            </div>

                            <div>

                                <h6 class="mb-1">
                                    Fresh Paneer
                                </h6>

                                <small class="text-muted">
                                    1 Kg × ₹320
                                </small>

                            </div>

                        </div>

                    </div>


                    <div class="order-summary text-start text-md-end flex-shrink-0">

                        <small class="text-muted">
                            Total Amount
                        </small>

                        <h5 class="text-success mb-3">
                            ₹320
                        </h5>

                        <a href="#"
                            class="btn btn-outline-success btn-sm">

                            View Details

                        </a>

                    </div>

                </div>

            </div>


            <!-- Order 3 -->
            <div class="order-card">

                <div class="order-top d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">

                    <div>

                        <small class="text-muted">
                            Order ID
                        </small>

                        <h6 class="mb-1">
                            #SDP0999
                        </h6>

                        <small class="text-muted">
                            01 Oct 2026
                        </small>

                    </div>

                    <span class="status-badge status-delivered">
                        Delivered
                    </span>

                </div>


                <hr>


                <div class="order-content d-flex flex-column flex-md-row align-items-stretch align-items-md-center justify-content-between gap-3 gap-md-4">

                    <div class="order-products flex-grow-1">

                        <div class="order-product">

                            <div class="order-product-image">

                                <img src="../images/cow-ghee.jpg"
                                    alt="Pure Cow Ghee">

                            </div>

                            <div>

                                <h6 class="mb-1">
                                    Pure Cow Ghee
                                </h6>

                                <small class="text-muted">
                                    1 Kg × ₹650
                                </small>

                            </div>

                        </div>

                    </div>


                    <div class="order-summary text-start text-md-end flex-shrink-0">

                        <small class="text-muted">
                            Total Amount
                        </small>

                        <h5 class="text-success mb-3">
                            ₹650
                        </h5>

                        <a href="#"
                            class="btn btn-outline-success btn-sm">

                            View Details

                        </a>

                    </div>

                </div>

            </div>


            <!-- Order 4 -->
            <div class="order-card">

                <div class="order-top d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">

                    <div>

                        <small class="text-muted">
                            Order ID
                        </small>

                        <h6 class="mb-1">
                            #SDP0998
                        </h6>

                        <small class="text-muted">
                            28 Sep 2026
                        </small>

                    </div>

                    <span class="status-badge status-pending">
                        Pending
                    </span>

                </div>


                <hr>


                <div class="order-content d-flex flex-column flex-md-row align-items-stretch align-items-md-center justify-content-between gap-3 gap-md-4">

                    <div class="order-products flex-grow-1">

                        <div class="order-product">

                            <div class="order-product-image">

                                <img src="../images/buffalo-ghee.jpg"
                                    alt="Fresh Butter">

                            </div>

                            <div>

                                <h6 class="mb-1">
                                    Fresh Butter
                                </h6>

                                <small class="text-muted">
                                    500g × ₹120
                                </small>

                            </div>

                        </div>

                    </div>


                    <div class="order-summary text-start text-md-end flex-shrink-0">

                        <small class="text-muted">
                            Total Amount
                        </small>

                        <h5 class="text-success mb-3">
                            ₹120
                        </h5>

                        <a href="#"
                            class="btn btn-outline-success btn-sm">

                            View Details

                        </a>

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