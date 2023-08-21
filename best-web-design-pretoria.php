<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Best Web Designer Company in Pretoria | Jaspa Software</title>
    <?php include('inc/meta.php'); ?>
</head>
  <body>
    <main class="page-wrapper">
      <header class="header navbar navbar-expand-lg position-absolute navbar-sticky">
          <?php include('inc/navigation.php'); ?>
      </header>

      <!-- Page content -->
      <section class="bg-size-cover bg-position-bottom-center bg-repeat-0 py-5" style="background-image: url(assets/img/contacts/bg.svg);">
        <div class="container pt-5 pb-lg-4 pb-xl-5">

          <!-- Breadcrumb -->
          <nav class="pt-lg-4" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="index.php"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
          </nav>

          <div class="row pt-md-2 pt-lg-5 pb-2 pb-md-4">
            <div class="col-xxl-4 col-xl-5 col-lg-6 pt-3 mt-3">
              <h1 class="h3 mb-2">Want to work with us?</h1>
              <h2 class="display-1 text-gradient-primary pb-sm-2 pb-md-3 mb-3">Let's talk!</h2>
              <div class="nav d-block lead pt-lg-5">
                <a href="#" class="nav-link fw-normal text-decoration-underline p-0 mb-4">hello@jaspa.co.za</a>
                <div class="text-nav">+27 72 684 6012 / +27 68 176 4395</div>
              </div>
            </div>
            <div class="col-lg-6 offset-xl-1 offset-xxl-2 pt-3 pt-md-4 pt-lg-3 mt-3">
              <form class="needs-validation" action="assets/php/form-process.php" method="POST" novalidate>
                <div class="row g-4">
                  <div class="col-sm-6">
                    <label for="fn" class="form-label fs-base">Full name</label>
                    <input type="text" name="name" class="form-control form-control-lg" id="fn" required>
                    <div class="invalid-feedback">Please enter your full name!</div>
                  </div>
                  <div class="col-sm-6">
                    <label for="email" class="form-label fs-base">Email</label>
                    <input type="email" name="email" class="form-control form-control-lg" id="email" required>
                    <div class="invalid-feedback">Please provide a valid email address!</div>
                  </div>
                  <div class="col-12 pb-2">
                    <label for="message" class="form-label fs-base">Message</label>
                    <textarea class="form-control form-control-lg" name="message" id="message" rows="3" required></textarea>
                    <div class="invalid-feedback">Please provide a valid email address!</div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-lg btn-primary w-100 w-sm-auto">Contact Us</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
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