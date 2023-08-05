<?php include('inc/header.php') ?>


<!-- Section: Design Block -->
<div class="container">
  <div class="cardarea card py-5 px-4 scrolled fade-in-bottom login-form-width  mx-auto my-5">
    <h1 class="text-color display-6 pb-3 fw-bold visiter-services" align="center"><i class="fa-solid fa-right-to-bracket"></i>
      Reset Password</h1>
    <form>
      <div class="mb-3">
        <label for="email" class="form-label text-color">Email</label>
        <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email" required="">
      </div>
      <div class="mb-3 d-grid">
        <button type="submit" class="btn btn-primary">
          Reset Password
        </button>
      </div>
      <span class="text-color">Don't have an account? <a href="registration.html" class="text-color">sign
          in</a></span>
    </form>
  </div>
</div>
<!-- Section: Design Block -->

<?php include('inc/footer.php') ?>