<?php include('inc/header.php') ?>


<!-- Section: Design Block -->
<div class="container">
  <div class="cardarea card  py-5 px-4 scrolled fade-in-bottom login-form-width  mx-auto my-4">
    <h1 class="text-color display-4 pb-5 fw-bold visiter-services" align="center"><i class="fa-solid fa-right-to-bracket"></i>
      Login</h1>
    <form>
      <div class="row">
        <div class="col-md-12">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Enter email">
          </div>
        </div>
        <div class="col-md-12">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
            <input type="text" class="form-control" placeholder="Password">
          </div>
        </div>

        <div class="col-md-6 text-light">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <p class="text-color">Remember me</p>
            </label>
          </div>
        </div>
        <div class="col-md-6">
          <p class="text-end text-white"><a href="forget-password.html" class=" text-end text-color">Forget
              Password</a></p>
        </div>

        <div class="col-md-12">
          <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button">Login</button>
          </div>
        </div>
        <p class="text-center mt-4 text-color  ">Have not an account? <a href="" class="text-color">Registration</a>
        </p>
      </div>
    </form>
  </div>
</div>
<!-- Section: Design Block -->

<?php include('inc/footer.php') ?>