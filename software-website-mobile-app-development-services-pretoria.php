<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jaspa: Software Development, Mobile App Development and Website Design and Optimisation in Pretoria</title>
    <?php include('inc/meta.php'); ?>
</head>
<body>
<main class="page-wrapper">
    <header class="header navbar navbar-expand-lg bg-light navbar-sticky">
        <?php include('inc/navigation.php'); ?>
    </header>
    <nav class="container py-1 mb-md-2 mb-lg-2 mt-lg-1" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="index.php"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item">Services</li>
        </ol>
    </nav>

    <!-- Page title -->
    <section class="container pb-1 mb-md-12 mb-lg-1 mb-xl-1 text-center">
        <div class="row pb-1 mb-md-2 mb-lg-4 mb-xl-5">
            <div class="col-lg-12 col-xl-12 pt-3 pt-sm-1 pt-lg-1">
                <h1 class="display-5 mb-0">What type of project <br>do you need help with?</h1>
                <p class="fs-xl pb-1 mb-1 mb-md-2 mb-xl-3 pt-3">We'll partner with you to build a new product or redesign a marketing website <br>while striving for tangible business outcomes</p>
            </div>
        </div>
    </section>

    <section class="container pb-2 pb-md-4 pb-lg-5 mb-3">
        <div class="row row-cols-1 row-cols-md-3">
            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
                <a href="website-designer-pretoria.php" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="assets/img/services/icons/cms.svg" class="d-block m-1" width="40" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">
                            Website Design and Optimisation
                            <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                        </h2>
                        <ul>
                            <li>You have an existing marketing website that is outdated and needs to be
                                redesigned.</li>
                            <li>You have an existing marketing website that isn't converting or meeting your
                                business goals.</li>
                            <li>You need a new custom marketing website to promote your product or business.</li>
                        </ul>
                        <button type="button" class="btn btn-outline-primary w-100">View Website Design</button>
                    </div>
                </a>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
                <a href="software-developers-pretoria.php" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="assets/img/services/icons/rocket.svg" class="d-block m-1" width="40" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">
                            Bespoke Software Development
                            <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                        </h2>
                        <ul>
                            <li>You have an existing desktop product or web-based software that needs to be
                                redesigned.</li>
                            <li>You have a complex platform or system that needs custom design and development
                                work.</li>
                            <li>
                                You've built an internal business tool that you'd like to bring to market and
                                sell to consumers.</li>
                        </ul>
                        <button type="button" class="btn btn-outline-primary w-100">View Software Dev
                            Services</button>
                    </div>
                </a>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
                <a href="pretoria-app-developer-company.php" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="assets/img/services/icons/mobile-app.svg" class="d-block m-1" width="40" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">
                            Mobile Application Development
                            <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                        </h2>
                        <ul>
                            <li>You have an existing mobile app that is outdated or unusable and needs to be
                                redesigned.</li>
                            <li>You're bringing a new mobile app to market and need it to be professionally
                                designed.</li>
                            <li>
                                You have an existing web-based product or tool that may be more useful as a
                                native mobile app.</li>
                        </ul>
                        <button type="button" class="btn btn-outline-primary w-100">View App Development
                            Service</button>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- CTA -->
    <section class="position-relative bg-dark py-5">
        <span class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255, 255, 255, .05)"></span>
        <div class="container position-relative zindex-5 text-center my-xl-3 py-1 py-md-4 py-lg-5">
            <p class="lead text-light opacity-70 mb-3">Ready to get started?</p>
            <p class="h3 text-light pb-3 pb-lg-0 mb-lg-5">Whether you're bringing a new product to market or redesigning enterprise software, we'll make sure
                it's done right — the first time.</p>
            <a href="#" class="btn btn-primary shadow-primary btn-lg">Lets Get Started With Free Consultation Call</a>
        </div>
    </section>
</main>
<!-- footer -->
<?php include ('inc/footer.php'); ?>
<!-- end footer -->

<!-- scripts -->
<?php include ('inc/scripts.php'); ?>
</body>
</html>