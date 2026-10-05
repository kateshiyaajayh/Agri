<?php

$pageTitle = "My Cart";

ob_start();

?>

<div class="container-fluid px-3 px-md-4 py-4">

    <!-- Header -->
    <div class="mb-4">

        <h3 class="mb-1">
            My Cart
        </h3>

        <p class="text-muted mb-0">
            Review your products before checkout
        </p>

    </div>


    <div class="row g-4">

        <!-- Cart Items -->
        <div class="col-lg-8">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <h5 class="mb-0">
                            Cart Items
                        </h5>

                        <span class="text-muted">
                            3 Items
                        </span>

                    </div>


                    <!-- Item 1 -->
                    <div class="cart-item">

                        <div class="cart-product-image">

                            <img src="../images/cow-milk.jpg"
                                alt="Fresh Cow Milk">

                        </div>


                        <div class="cart-product-info">

                            <small class="text-success">
                                Milk
                            </small>

                            <h6 class="mb-1">
                                Fresh Cow Milk
                            </h6>

                            <small class="text-muted">
                                ₹60 / Liter
                            </small>

                            <div class="quantity-box mt-2">

                                <button class="btn btn-sm btn-outline-secondary">
                                    -
                                </button>

                                <span>
                                    2
                                </span>

                                <button class="btn btn-sm btn-outline-secondary">
                                    +
                                </button>

                            </div>

                        </div>


                        <div class="cart-product-price">

                            <strong>
                                ₹120
                            </strong>

                            <a href="#" class="remove-item">
                                <i class="bi bi-trash"></i>
                            </a>

                        </div>

                    </div>


                    <hr>


                    <!-- Item 2 -->
                    <div class="cart-item">

                        <div class="cart-product-image">

                            <img src="../images/cow-milk.jpg"
                                alt="Fresh Curd">

                        </div>


                        <div class="cart-product-info">

                            <small class="text-success">
                                Curd
                            </small>

                            <h6 class="mb-1">
                                Fresh Curd
                            </h6>

                            <small class="text-muted">
                                ₹80 / Kg
                            </small>

                            <div class="quantity-box mt-2">

                                <button class="btn btn-sm btn-outline-secondary">
                                    -
                                </button>

                                <span>
                                    1
                                </span>

                                <button class="btn btn-sm btn-outline-secondary">
                                    +
                                </button>

                            </div>

                        </div>


                        <div class="cart-product-price">

                            <strong>
                                ₹80
                            </strong>

                            <a href="#" class="remove-item">
                                <i class="bi bi-trash"></i>
                            </a>

                        </div>

                    </div>


                    <hr>


                    <!-- Item 3 -->
                    <div class="cart-item">

                        <div class="cart-product-image">

                            <img src="../images/buffalo-milk.jpg"
                                alt="Fresh Paneer">

                        </div>


                        <div class="cart-product-info">

                            <small class="text-success">
                                Paneer
                            </small>

                            <h6 class="mb-1">
                                Fresh Paneer
                            </h6>

                            <small class="text-muted">
                                ₹320 / Kg
                            </small>

                            <div class="quantity-box mt-2">

                                <button class="btn btn-sm btn-outline-secondary">
                                    -
                                </button>

                                <span>
                                    1
                                </span>

                                <button class="btn btn-sm btn-outline-secondary">
                                    +
                                </button>

                            </div>

                        </div>


                        <div class="cart-product-price">

                            <strong>
                                ₹320
                            </strong>

                            <a href="#" class="remove-item">
                                <i class="bi bi-trash"></i>
                            </a>

                        </div>

                    </div>


                    <hr>


                    <div class="mt-4">

                        <a href="market.php"
                            class="btn btn-outline-success">

                            <i class="bi bi-arrow-left me-1"></i>
                            Continue Shopping

                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- Order Summary -->
        <div class="col-lg-4">

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


                    <a href="checkout.php"
                        class="btn btn-success w-100 py-2">

                        Proceed to Checkout
                        <i class="bi bi-arrow-right ms-1"></i>

                    </a>


                    <div class="text-center mt-3">

                        <small class="text-muted">
                            Secure and easy checkout
                        </small>

                    </div>

                </div>

            </div>


            <!-- Delivery Info -->
            <div class="card border-0 shadow-sm mt-4">

                <div class="card-body p-4">

                    <h6 class="mb-3">
                        <i class="bi bi-truck text-success me-2"></i>
                        Delivery Information
                    </h6>

                    <p class="text-muted small mb-0">
                        Your order will be delivered to your saved address.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "customerlayout.php";

?>