<?php include('inc/header.php') ?>


<style>
  nav li a {
    color: black !important;
  }

  .firstbox {

    background-image: linear-gradient(0deg, #0fd850 0%, #f9f047 100%);

    border: none;
  }

  .secondbox {

    background-image: linear-gradient(180deg, #f9d423 0%, #ff4e50 100%);
    border: none;
  }

  .thirdbox {

    background-image: linear-gradient(0deg, #AC32E4 0%, #7918F2 63%, #4801FF 100%);
    border: none;
  }

  .firstbox,
  .secondbox,
  .thirdbox {
    margin: 1rem;
  }

  .firstbox2,
  .secondbox2,
  .thirdbox2 {
    border: none;
    margin: 1rem;
  }
</style>

<!--content inner -->
<div class="container-fluid ">
  <div class="row flex-nowrap">
    <!--side bar -->
    <?php include('inc/sidebar.php') ?>

    <!-- start main content -->
    <div class="col py-3 px-4 main-content pb-5 mb-4">
      <h3 class="display-6 pb-4">Welcome To User Dashboard</h3>
      <div class="row justify-content-start ">
        <div class=" col-lg-4 col-sm-6 ">
          <div class="firstbox shadow-lg rounded-5">
            <div class="py-3 text-center firstbox rounded-5">
              <div class="card-body">
                <h5 class="card-title">
                  <i class="fa-solid fa-coins display-1 text-white pt-2"></i>
                </h5>
                <p class="card-text text-white display-4">$100</p>
                <small class="text-white">Available Account Balance</small>
              </div>
            </div>
          </div>
        </div>

        <div class=" col-lg-4 col-sm-6 ">
          <div class="secondbox shadow-lg rounded-5">
            <div class="py-3 text-center secondbox rounded-5">
              <div class="card-body">
                <h5 class="card-title">
                  <i class="fa-solid fa-money-bills display-1 text-white pt-2"></i>
                </h5>
                <p class="card-text text-white display-4">$0</p>
                <small class="text-white">Unpaid Balance</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 ">
          <div class="thirdbox shadow-lg rounded-5">
            <div class="py-3 text-center thirdbox rounded-5">
              <div class="card-body">
                <h5 class="card-title">
                  <i class="fa-solid fa-sack-dollar display-1 text-white pt-2"></i>
                </h5>
                <p class="card-text text-white display-4">$100</p>
                <small class="text-white">Total Receipts</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <h3 class="display-6 pb-3 col-sm-6 pt-5 mt-4 ">Your Orders Status</h3>
      </div>

      <div class="row justify-content-start">
        <div class="col-lg-4 col-md-6 ">
          <div class="firstbox2 bg-success shadow-lg rounded-5"></div>
          <div class="py-3 text-center firstbox2 bg-success rounded-5">
            <div class="card-body">
              <h5 class="card-title">
                <i class="fa-solid fa-circle-check display-1 text-white pt-2"></i>
              </h5>
              <p class="card-text text-white display-4">63</p>
              <small class="text-white">Orders successfully placed</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="secondbox2 bg-primary shadow-lg rounded-5">
            <div class="py-3 text-center secondbox2 bg-primary rounded-5">
              <div class="card-body">
                <h5 class="card-title">
                  <i class="fa-solid fa-arrows-rotate display-1 text-white pt-2"></i>
                </h5>
                <p class="card-text text-white display-4">40</p>
                <small class="text-white">Orders are in process</small>
              </div>
            </div>
          </div>
        </div>

        <div class=" col-lg-4 col-md-6">
          <div class="  thirdbox2 bg-danger shadow-lg rounded-5">
            <div class="py-3 text-center thirdbox2 bg-danger rounded-5">
              <div class="card-body">
                <h5 class="card-title">
                  <i class="fa-solid fa-circle-xmark display-1 text-white pt-2"></i>
                </h5>
                <p class="card-text text-white display-4">0</p>
                <small class="text-white">Orders rejected</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end main content -->
  </div>
</div>
<!-- end sidebar -->
<?php include('inc/footer.php') ?>