<?php

$pageTitle = "Order Details";

ob_start();

?>

<div class="container-fluid px-3 px-md-4 py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="mb-1">Order Details</h3>
            <p class="text-muted mb-0">
                View your order information
            </p>
        </div>

        <a href="orders.php" class="btn btn-outline-success">
            <i class="bi bi-arrow-left me-1"></i>
            Back to Orders
        </a>

    </div>


    <!-- Order Header -->
    <div class="card border-0 shadow-sm mb-4">

        <div class="card-body p-4">

            <div class="row g-3 align-items-center">

                <div class="col-md-4">

                    <small class="text-muted">
                        Order ID
                    </small>

                    <h5 class="mb-0">
                        #SDP1001
                    </h5>

                </div>


                <div class="col-md-4">

                    <small class="text-muted">
                        Order Date
                    </small>

                    <h6 class="mb-0">
                        05 Oct 2026
                    </h6>

                </div>


                <div class="col-md-4">

                    <small class="text-muted d-block mb-1">
                        Order Status
                    </small>

                    <span class="status-badge status-confirmed">
                        Confirmed
                    </span>

                </div>

            </div>

        </div>

    </div>


    <div class="row g-4">

        <!-- Order Items -->
        <div class="col-lg-8">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <h5 class="mb-4">
                        Order Items
                    </h5>


                    <div class="detail-product">

                        <div class="detail-product-image">

                            <img src="../images/cow-milk.jpg"
                                alt="Fresh Cow Milk">

                        </div>

                        <div class="flex-grow-1">

                            <small class="text-success">
                                Milk
                            </small>

                            <h6 class="mb-1">
                                Fresh Cow Milk
                            </h6>

                            <small class="text-muted">
                                ₹60 / Liter
                            </small>

                        </div>

                        <div class="text-end">

                            <small class="text-muted">
                                Qty: 2
                            </small>

                            <h6 class="mb-0">
                                ₹120
                            </h6>

                        </div>

                    </div>


                    <hr>


                    <div class="detail-product">

                        <div class="detail-product-image">

                            <img src="../images/cow-milk.jpg"
                                alt="Fresh Curd">

                        </div>

                        <div class="flex-grow-1">

                            <small class="text-success">
                                Curd
                            </small>

                            <h6 class="mb-1">
                                Fresh Curd
                            </h6>

                            <small class="text-muted">
                                ₹80 / Kg
                            </small>

                        </div>

                        <div class="text-end">

                            <small class="text-muted">
                                Qty: 1
                            </small>

                            <h6 class="mb-0">
                                ₹80
                            </h6>

                        </div>

                    </div>


                    <hr>


                    <div class="detail-product">

                        <div class="detail-product-image">

                            <img src="../images/buffalo-milk.jpg"
                                alt="Fresh Paneer">

                        </div>

                        <div class="flex-grow-1">

                            <small class="text-success">
                                Paneer
                            </small>

                            <h6 class="mb-1">
                                Fresh Paneer
                            </h6>

                            <small class="text-muted">
                                ₹320 / Kg
                            </small>

                        </div>

                        <div class="text-end">

                            <small class="text-muted">
                                Qty: 1
                            </small>

                            <h6 class="mb-0">
                                ₹320
                            </h6>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Delivery Address -->
            <div class="card border-0 shadow-sm mt-4">

                <div class="card-body p-4">

                    <h5 class="mb-3">
                        Delivery Address
                    </h5>

                    <div class="d-flex gap-3">

                        <div class="detail-address-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>

                        <div>

                            <h6 class="mb-1">
                                Home
                            </h6>

                            <p class="mb-1">
                                Customer Name
                            </p>

                            <p class="text-muted mb-1">
                                25, Green Park Society,<br>
                                Rajkot, Gujarat - 360001
                            </p>

                            <small class="text-muted">
                                <i class="bi bi-telephone me-1"></i>
                                9876543210
                            </small>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Right Side -->
        <div class="col-lg-4">

            <!-- Order Summary -->
            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <h5 class="mb-4">
                        Order Summary
                    </h5>


                    <div class="d-flex justify-content-between mb-3">

                        <span class="text-muted">
                            Subtotal
                        </span>

                        <span>
                            ₹520
                        </span>

                    </div>


                    <div class="d-flex justify-content-between mb-3">

                        <span class="text-muted">
                            Delivery
                        </span>

                        <span class="text-success">
                            Free
                        </span>

                    </div>


                    <hr>


                    <div class="d-flex justify-content-between mb-4">

                        <strong>
                            Total
                        </strong>

                        <strong class="text-success fs-5">
                            ₹520
                        </strong>

                    </div>


                    <div class="payment-info">

                        <small class="text-muted">
                            Payment Method
                        </small>

                        <h6 class="mb-0 mt-1">
                            <i class="bi bi-cash me-1"></i>
                            Cash on Delivery
                        </h6>

                    </div>

                </div>

            </div>


            <!-- Order Tracking -->
            <div class="card border-0 shadow-sm mt-4">

                <div class="card-body p-4">

                    <h5 class="mb-4">
                        Order Status
                    </h5>


                    <div class="tracking-item completed">

                        <div class="tracking-icon">
                            <i class="bi bi-check"></i>
                        </div>

                        <div>
                            <h6 class="mb-1">
                                Order Placed
                            </h6>

                            <small class="text-muted">
                                05 Oct 2026, 10:20 AM
                            </small>
                        </div>

                    </div>


                    <div class="tracking-item completed">

                        <div class="tracking-icon">
                            <i class="bi bi-check"></i>
                        </div>

                        <div>
                            <h6 class="mb-1">
                                Order Confirmed
                            </h6>

                            <small class="text-muted">
                                05 Oct 2026, 10:35 AM
                            </small>
                        </div>

                    </div>


                    <div class="tracking-item">

                        <div class="tracking-icon">
                            <i class="bi bi-truck"></i>
                        </div>

                        <div>
                            <h6 class="mb-1">
                                Out for Delivery
                            </h6>

                            <small class="text-muted">
                                Waiting for delivery
                            </small>
                        </div>

                    </div>


                    <div class="tracking-item">

                        <div class="tracking-icon">
                            <i class="bi bi-house-check"></i>
                        </div>

                        <div>
                            <h6 class="mb-1">
                                Delivered
                            </h6>

                            <small class="text-muted">
                                Pending
                            </small>
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