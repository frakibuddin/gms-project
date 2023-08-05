<?php include('inc/header.php') ?>

<!--srart sidebar -->
<div class="container-fluid ">
  <div class="row flex-nowrap">
    <!--side bar -->
    <?php include('inc/sidebar.php') ?>
    <!-- start-main content -->
    <div class="col-md-10  flex-shrink-1 mx-auto pb-5 overflow-hidden ">
      <!-- Modal -->
      <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title " id="exampleModalLabel">Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <table class="table table-bordered">

                <thead>
                  <tr>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Order</th>
                    <td>Inprocess</td>
                  </tr>
                  <tr>
                    <th scope="row">Payment</th>
                    <td>Paid</td>
                  </tr>
                  <tr>
                    <th scope="row">Prices</th>
                    <td>$10</td>
                  </tr>
                  <tr>
                    <th scope="row">Date</th>
                    <td>05-07-2023</td>
                  </tr>

                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="card my-3">
        <div class="card-header">
          <h3 class="pt-3"><i class="fa-solid fa-server"></i> IMEI Order History </h3>
        </div>
        <div class="card-body">
          <div class="container table-responsive">
            <table id="datatable" class="table table-striped table-hover">
              <thead class="bg-dark text-white">
                <tr>
                  <th style="width: 80px;">Order ID</th>
                  <th>Order Date </th>
                  <th>Order Service </th>
                  <th>Order Info </th>
                  <th>Order Result </th>
                  <th style="width: 100px;">Order Price </th>
                  <th style="width: 100px;">Order Starus
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Order at 2011-04-25 11:00:21 Reply at 2011-04-25 23:49:21 </td>
                  <td>Network Unlocking Service Iphone 5 to iphone 14 (Thailand) </td>
                  <td>837269104529842</td>
                  <td>Your phone is now unlocked and ready for use with any compatible carrier. Thank you for choosing
                    our service.
                  </td>
                  <td>$10
                  </td>
                  <td class="text-center ">
                    <button class="btn btn-sm btn-info rounded-1 border">Inprocess</button>
                    <button type="button" class="btn btn-sm btn-secondary rounded-1 border" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      View
                    </button>

                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Order at 2011-04-25 11:00:21 Reply at 2011-04-25 23:49:21 </td>
                  <td>Network Unlocking Service Iphone 5 to iphone 14 (Thailand) </td>
                  <td>837269104529842</td>
                  <td>Your phone is now unlocked and ready for use with any compatible carrier. Thank you for choosing
                    our service.
                  </td>
                  <td>$10
                  </td>
                  <td class="text-center ">
                    <button class="btn btn-sm btn-info rounded-1 border">Inprocess</button>
                    <button type="button" class="btn btn-sm btn-secondary rounded-1 border" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      View
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Order at 2011-04-25 11:00:21 Reply at 2011-04-25 23:49:21 </td>
                  <td>Network Unlocking Service Iphone 5 to iphone 14 (Thailand) </td>
                  <td>837269104529842</td>
                  <td>Your phone is now unlocked and ready for use with any compatible carrier. Thank you for choosing
                    our service.
                  </td>
                  <td>$10
                  </td>
                  <td class="text-center ">
                    <button class="btn btn-sm btn-info rounded-1 border">Inprocess</button>
                    <button type="button" class="btn btn-sm btn-secondary rounded-1 border" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      View
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Order at 2011-04-25 11:00:21 Reply at 2011-04-25 23:49:21 </td>
                  <td>Network Unlocking Service Iphone 5 to iphone 14 (Thailand) </td>
                  <td>837269104529842</td>
                  <td>Your phone is now unlocked and ready for use with any compatible carrier. Thank you for choosing
                    our service.
                  </td>
                  <td>$10
                  </td>
                  <td class="text-center ">
                    <button class="btn btn-sm btn-info rounded-1 border">Inprocess</button>
                    <button type="button" class="btn btn-sm btn-secondary rounded-1 border" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      View
                    </button>

                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- end-main content -->
  </div>
</div>
<!-- end sidebar -->


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>
  $(document).ready(function() {
    $('#datatable').DataTable();
  });
</script>

<?php include('inc/footer.php') ?>