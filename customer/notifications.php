<?php

$pageTitle = "Notifications";

ob_start();

?>

<div class="container-fluid px-3 px-md-4 py-4">

    <!-- Header -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">

        <div>
            <h3 class="mb-1">
                Notifications
            </h3>

            <p class="text-muted mb-0">
                Stay updated with your orders and account
            </p>
        </div>

        <span class="notification-count">
            3 New
        </span>

    </div>


    <!-- Notifications -->
    <div class="card border-0 shadow-sm">

        <div class="card-body p-4">

            <!-- New Notification -->
            <div class="notification-item unread">

                <div class="notification-icon order-icon">
                    <i class="bi bi-check-circle"></i>
                </div>

                <div class="notification-content">

                    <div class="d-flex justify-content-between gap-3">

                        <div>

                            <h6 class="mb-1">
                                Order Confirmed
                            </h6>

                            <p class="text-muted mb-1">
                                Your order #SDP1001 has been confirmed successfully.
                            </p>

                            <small class="text-muted">
                                10 minutes ago
                            </small>

                        </div>

                        <span class="notification-dot"></span>

                    </div>

                </div>

            </div>


            <!-- New Notification -->
            <div class="notification-item unread">

                <div class="notification-icon delivery-icon">
                    <i class="bi bi-truck"></i>
                </div>

                <div class="notification-content">

                    <div class="d-flex justify-content-between gap-3">

                        <div>

                            <h6 class="mb-1">
                                Order Out for Delivery
                            </h6>

                            <p class="text-muted mb-1">
                                Your order #SDP1000 is out for delivery.
                            </p>

                            <small class="text-muted">
                                1 hour ago
                            </small>

                        </div>

                        <span class="notification-dot"></span>

                    </div>

                </div>

            </div>


            <!-- New Notification -->
            <div class="notification-item unread">

                <div class="notification-icon offer-icon">
                    <i class="bi bi-tag"></i>
                </div>

                <div class="notification-content">

                    <div class="d-flex justify-content-between gap-3">

                        <div>

                            <h6 class="mb-1">
                                New Offer Available
                            </h6>

                            <p class="text-muted mb-1">
                                Get special offers on selected dairy products this week.
                            </p>

                            <small class="text-muted">
                                3 hours ago
                            </small>

                        </div>

                        <span class="notification-dot"></span>

                    </div>

                </div>

            </div>


            <!-- Old Notification -->
            <div class="notification-item">

                <div class="notification-icon delivered-icon">
                    <i class="bi bi-box-seam"></i>
                </div>

                <div class="notification-content">

                    <h6 class="mb-1">
                        Order Delivered
                    </h6>

                    <p class="text-muted mb-1">
                        Your order #SDP0999 has been delivered successfully.
                    </p>

                    <small class="text-muted">
                        2 days ago
                    </small>

                </div>

            </div>


            <!-- Old Notification -->
            <div class="notification-item">

                <div class="notification-icon payment-icon">
                    <i class="bi bi-credit-card"></i>
                </div>

                <div class="notification-content">

                    <h6 class="mb-1">
                        Payment Successful
                    </h6>

                    <p class="text-muted mb-1">
                        Payment for order #SDP0999 was received successfully.
                    </p>

                    <small class="text-muted">
                        2 days ago
                    </small>

                </div>

            </div>


            <!-- Old Notification -->
            <div class="notification-item">

                <div class="notification-icon account-icon">
                    <i class="bi bi-person-check"></i>
                </div>

                <div class="notification-content">

                    <h6 class="mb-1">
                        Profile Updated
                    </h6>

                    <p class="text-muted mb-1">
                        Your profile information was updated successfully.
                    </p>

                    <small class="text-muted">
                        5 days ago
                    </small>

                </div>

            </div>

        </div>

    </div>

</div>


<?php

$content = ob_get_clean();

include "customerlayout.php";

?>