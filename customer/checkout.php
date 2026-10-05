<?php

$pageTitle = "Checkout";

ob_start();

?>

<div class="container-fluid px-3 px-md-4 py-4">

    <!-- Header -->
    <div class="mb-4">

        <h3 class="mb-1">
            Checkout
        </h3>

        <p class="text-muted mb-0">
            Complete your order details
        </p>

    </div>


    <form action="checkout.php" method="post" novalidate>
    <div class="row g-4">

        <!-- Left Side -->
        <div class="col-lg-8">

            <!-- Delivery Address -->
            <div class="card border-0 shadow-sm mb-4">

                <div class="card-body p-4">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div>
                            <h5 class="mb-1">
                                Delivery Address
                            </h5>

                            <small class="text-muted">
                                Enter the address where you want your order delivered
                            </small>
                        </div>

                        <i class="bi bi-geo-alt text-success fs-4"></i>

                    </div>


                    <div class="row g-3">

                        <div class="col-md-6">

                            <label class="form-label">
                                Full Name
                            </label>

                            <input type="text"
                                class="form-control"
                                name="fullname"
                                data-validation="required alpha"
                                placeholder="Enter full name">
                            <span class="error text-danger" id="fullnameError"></span>

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Mobile Number
                            </label>

                            <input type="text"
                                class="form-control"
                                name="mobile"
                                data-validation="required numeric min max"
                                data-min="10"
                                data-max="10"
                                placeholder="Enter mobile number">
                            <span class="error text-danger" id="mobileError"></span>

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Address
                            </label>

                            <textarea class="form-control"
                                name="address"
                                data-validation="required"
                                rows="3"
                                placeholder="House No., Street, Area"></textarea>
                            <span class="error text-danger" id="addressError"></span>

                        </div>


                        <div class="col-md-4">

                            <label class="form-label">
                                Village / City
                            </label>

                            <input type="text"
                                class="form-control"
                                name="city"
                                data-validation="required alpha"
                                placeholder="City">
                            <span class="error text-danger" id="cityError"></span>

                        </div>


                        <div class="col-md-4">

                            <label class="form-label">
                                District
                            </label>

                            <input type="text"
                                class="form-control"
                                name="district"
                                data-validation="required alpha"
                                placeholder="District">
                            <span class="error text-danger" id="districtError"></span>

                        </div>


                        <div class="col-md-4">

                            <label class="form-label">
                                State
                            </label>

                            <select class="form-select"
                                name="state"
                                data-validation="required">

                                <option value="" selected>
                                    Select state
                                </option>

                                <option>
                                    Gujarat
                                </option>

                                <option>
                                    Maharashtra
                                </option>

                                <option>
                                    Rajasthan
                                </option>

                                <option>
                                    Madhya Pradesh
                                </option>

                            </select>
                            <span class="error text-danger" id="stateError"></span>

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Pincode
                            </label>

                            <input type="text"
                                class="form-control"
                                name="pincode"
                                data-validation="required numeric min max"
                                data-min="6"
                                data-max="6"
                                placeholder="Enter pincode">
                            <span class="error text-danger" id="pincodeError"></span>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Payment Method -->
            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <div class="mb-4">

                        <h5 class="mb-1">
                            Payment Method
                        </h5>

                        <small class="text-muted">
                            Select your preferred payment method
                        </small>

                    </div>


                    <!-- Cash on Delivery -->
                    <div class="payment-option mb-3">

                        <div class="form-check">

                            <input class="form-check-input"
                                type="radio"
                                name="payment"
                                id="cod"
                                data-validation="required"
                                checked>

                            <label class="form-check-label"
                                for="cod">

                                <strong>
                                    Cash on Delivery
                                </strong>

                                <small class="d-block text-muted">
                                    Pay when your order is delivered
                                </small>

                            </label>

                        </div>

                    </div>


                    <!-- Online Payment -->
                    <div class="payment-option">

                        <div class="form-check">

                            <input class="form-check-input"
                                type="radio"
                                name="payment"
                                id="online"
                                data-validation="required">

                            <label class="form-check-label"
                                for="online">

                                <strong>
                                    Online Payment
                                </strong>

                                <small class="d-block text-muted">
                                    Pay securely using online payment
                                </small>

                            </label>

                        </div>

                    </div>

                    <span class="error text-danger" id="paymentError"></span>

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


                    <!-- Product 1 -->
                    <div class="checkout-product">

                        <div>

                            <h6 class="mb-1">
                                Fresh Cow Milk
                            </h6>

                            <small class="text-muted">
                                2 × ₹60
                            </small>

                        </div>

                        <strong>
                            ₹120
                        </strong>

                    </div>


                    <hr>


                    <!-- Product 2 -->
                    <div class="checkout-product">

                        <div>

                            <h6 class="mb-1">
                                Fresh Curd
                            </h6>

                            <small class="text-muted">
                                1 × ₹80
                            </small>

                        </div>

                        <strong>
                            ₹80
                        </strong>

                    </div>


                    <hr>


                    <!-- Product 3 -->
                    <div class="checkout-product">

                        <div>

                            <h6 class="mb-1">
                                Fresh Paneer
                            </h6>

                            <small class="text-muted">
                                1 × ₹320
                            </small>

                        </div>

                        <strong>
                            ₹320
                        </strong>

                    </div>


                    <hr class="my-4">


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


                    <button type="submit" class="btn btn-success w-100 py-2">

                        <i class="bi bi-check-circle me-1"></i>
                        Place Order

                    </button>


                    <a href="cart.php"
                        class="btn btn-outline-secondary w-100 mt-2">

                        <i class="bi bi-arrow-left me-1"></i>
                        Back to Cart

                    </a>

                </div>

            </div>


            <!-- Secure Checkout -->
            <div class="card border-0 shadow-sm mt-4">

                <div class="card-body p-3">

                    <div class="d-flex align-items-center gap-3">

                        <i class="bi bi-shield-check text-success fs-3"></i>

                        <div>

                            <strong>
                                Secure Checkout
                            </strong>

                            <small class="d-block text-muted">
                                Your order details are protected
                            </small>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    </form>

</div>


<?php

$content = ob_get_clean();

include "customerlayout.php";

?>
