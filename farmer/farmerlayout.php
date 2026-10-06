<?php
$pageTitle = $pageTitle ?? "Farmer Dashboard";
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageTitle ?></title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/farmer.css">
</head>

<body>

    <div class="d-flex min-vh-100">

        <!-- Sidebar -->
        <aside class="farmer-sidebar d-none d-lg-block bg-white border-end p-3">

            <div class="mb-4">
                <img src="../images/logo.png" width="150" alt="SmartDairy" class="farmer-brand-logo">
            </div>

            <nav class="nav flex-column gap-1">

                <a href="dashboard.php"
                    class="nav-link <?= $currentPage == 'dashboard.php' ? 'active' : '' ?>">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard
                </a>

                <a href="products.php"
                    class="nav-link <?= $currentPage == 'products.php' ? 'active' : '' ?>">
                    <i class="bi bi-box-seam me-2"></i>
                    Products
                </a>

                <a href="animals.php"
                    class="nav-link <?= $currentPage == 'animals.php' ? 'active' : '' ?>">
                    <i class="bi bi-heart-pulse me-2"></i>
                    Animals
                </a>

                <a href="milk-collection.php"
                    class="nav-link <?= $currentPage == 'milk-collection.php' ? 'active' : '' ?>">
                    <i class="bi bi-droplet me-2"></i>
                    Milk Collection
                </a>

                <a href="sales.php"
                    class="nav-link <?= $currentPage == 'sales.php' ? 'active' : '' ?>">
                    <i class="bi bi-cash-stack me-2"></i>
                    Sales & Earnings
                </a>

                <a href="health.php"
                    class="nav-link <?= $currentPage == 'health.php' ? 'active' : '' ?>">
                    <i class="bi bi-heart-pulse me-2"></i>
                    Animal Health
                </a>

                <a href="reports.php"
                    class="nav-link <?= $currentPage == 'reports.php' ? 'active' : '' ?>">
                    <i class="bi bi-bar-chart me-2"></i>
                    Reports
                </a>

                <a href="schemes.php"
                    class="nav-link <?= $currentPage == 'schemes.php' ? 'active' : '' ?>">
                    <i class="bi bi-building me-2"></i>
                    Government Schemes
                </a>

                <a href="profile.php"
                    class="nav-link <?= $currentPage == 'profile.php' ? 'active' : '' ?>">
                    <i class="bi bi-person me-2"></i>
                    Profile
                </a>

                <a href="#" class="nav-link text-danger">
                    <i class="bi bi-box-arrow-right me-2"></i>
                    Logout
                </a>

            </nav>
        </aside>


        <!-- Main Area -->
        <div class="farmer-main flex-grow-1 d-flex flex-column">

            <!-- Header -->
            <header class="bg-white border-bottom px-3 px-md-4 py-3">

                <div class="farmer-header-inner d-flex flex-wrap align-items-center justify-content-between gap-2">

                    <div class="d-flex align-items-center gap-3">

                        <details class="d-lg-none position-relative">
                            <summary class="btn btn-light">
                                <i class="bi bi-list"></i>
                            </summary>

                            <div class="mobile-menu bg-white border rounded shadow p-2">

                                <a href="dashboard.php" class="nav-link">
                                    <i class="bi bi-speedometer2 me-2"></i>Dashboard
                                </a>

                                <a href="products.php" class="nav-link">
                                    <i class="bi bi-box-seam me-2"></i>Products
                                </a>

                                <a href="animals.php" class="nav-link">
                                    <i class="bi bi-heart-pulse me-2"></i>Animals
                                </a>

                                <a href="milk-collection.php" class="nav-link">
                                    <i class="bi bi-droplet me-2"></i>Milk Collection
                                </a>

                                <a href="sales.php" class="nav-link">
                                    <i class="bi bi-cash-stack me-2"></i>Sales &amp; Earnings
                                </a>

                                <a href="health.php" class="nav-link">
                                    <i class="bi bi-heart-pulse me-2"></i>Animal Health
                                </a>

                                <a href="reports.php" class="nav-link">
                                    <i class="bi bi-bar-chart me-2"></i>Reports
                                </a>

                                <a href="schemes.php" class="nav-link">
                                    <i class="bi bi-building me-2"></i>Government Schemes
                                </a>

                                <a href="profile.php" class="nav-link">
                                    <i class="bi bi-person me-2"></i>Profile
                                </a>

                                <a href="#" class="nav-link text-danger">
                                    <i class="bi bi-box-arrow-right me-2"></i>Logout
                                </a>

                            </div>
                        </details>

                        <div>
                            <h5 class="mb-0"><?= $pageTitle ?></h5>
                            <small class="text-muted d-none d-sm-block">
                                Manage your dairy activities
                            </small>
                        </div>

                    </div>

                    <div class="d-flex align-items-center gap-3 ms-auto">

                        <i class="bi bi-bell fs-5"></i>

                        <div class="d-none d-sm-block">
                            <strong>Farmer</strong>
                            <small class="d-block text-muted">Farmer Account</small>
                        </div>

                    </div>

                </div>

            </header>


            <!-- PAGE CONTENT -->
            <main class="flex-grow-1 p-3 p-md-4">

                <?= $content ?? '' ?>

            </main>


            <!-- Footer -->
            <footer class="bg-white border-top px-3 px-md-4 py-3">

                <div class="d-flex flex-wrap flex-sm-row
                        justify-content-between align-items-center gap-2">

                    <small class="text-muted">
                        © 2026 SmartDairyPro
                    </small>

                    <small class="text-muted">
                        Farmer Panel
                    </small>

                </div>

            </footer>

        </div>

    </div>

    <script src="../js/jquery-4.0.0.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/validation.js"></script>

</body>

</html>
