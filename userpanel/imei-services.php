<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css" />

<?php include('inc/header.php') ?>

<!--srart sidebar -->
<div class="container-fluid ">
  <div class="row flex-nowrap">
    <!--side bar -->
    <?php include('inc/sidebar.php') ?>


    <!-- start-main content -->
    <div class="col-md-8 flex-shrink-1 mx-auto">
      <div class="card shadow my-3">
        <div class="card-header">
          <h3 class="pt-3"><i class="fa-solid fa-server"></i> IMEI Services </h3>
        </div>
        <div class="card-body">
          <div>
            <label for="formGroupExampleInput" class="form-label mt-4"><i class="fa-solid fa-list"></i> Select
              Service</label>
            <div class="input-group flex-nowrap">
              <div class="input-group-text bg-secondary"><i class="fa-solid fa-list text-white"></i></div>
              <select class="form-control choices-single2 w-100">
                <option value="" selected>Choose...</option>
                <optgroup label="Hot Services">
                  <option value="iCloud Clean Mode Service All Models Supported">iCloud Clean Mode Service All Models
                    Supported</option>
                  <option value="Samsung Network Lock WorldWide Service">Samsung Network Lock WorldWide Service
                  </option>
                  <option value="Motorola Nck Service 24/7">Motorola Nck Service 24/7</option>
                </optgroup>
              </select>
            </div>
          </div>
          <div>
            <label class="form-label mt-4" for="autoSizingInputGroup"><i class="fa-solid fa-barcode"></i> IMEI
              Nubmer</label>
            <div class="input-group">
              <div class="input-group-text bg-secondary"><i class="fa-solid fa-barcode text-white"></i></div>
              <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="IMEI number type here">
            </div>
          </div>
          <div>
            <label for="formGroupExampleInput" class="form-label mt-4"><i class="fa-solid fa-bars"></i> Bulk
              Order</label>
            <div class="input-group">
              <div class="input-group-text bg-secondary"><i class="fa-solid fa-bars text-white"></i></div>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="1 IMEI Number each line and at the end must use comma ,
  837269104529842,
  837269104529842,
  837269104529842"></textarea>

            </div>
          </div>
          <div>
            <label class="form-label mt-4" for="autoSizingInputGroup"><i class="fa-regular fa-newspaper"></i>
              Note</label>
            <div class="input-group">
              <div class="input-group-text bg-secondary"><i class="fa-regular fa-newspaper text-white"></i></div>
              <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Your can any note if you want to add">
            </div>
          </div>
          <div class="py-4">
            <h5><i class="fa-solid fa-circle-info"></i> Service Info</h5>
            <small class="border border-light bg-warning ps-1 pe-1"><b>Important:</b> Please fill in the IMEI or
              serial
              number field carefully when submitting your order, as incorrect entries cannot be refunded. Orders
              cannot
              be
              canceled once they are in process.</small>

            <div class="col-auto mt-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                <label class="form-check-label" for="autoSizingCheck2">
                  <i class="fa-regular fa-handshake"></i> I agree to terms and conditions
                </label>
              </div>
            </div>
            <div class="col-auto mt-4">
              <button type="submit" class="btn btn-primary rounded-4"><i class="fa-solid fa-thumbs-up"></i>
                Submit</button>
              <button type="reset" class="btn btn-secondary rounded-4"><i class="fa-solid fa-rotate-left"></i>
                Reset</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end-main content -->
  </div>
</div>


<!-- end sidebar -->
<!-- serarchable seclect box -->
<script src="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/scripts/choices.min.js"></script>
<script>
  new Choices(document.querySelector(".choices-single2"));
</script>


<?php include('inc/footer.php') ?>