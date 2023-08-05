<?php include('inc/header.php') ?>

<!--srart sidebar -->
<div class="container-fluid ">
    <div class="row flex-nowrap">
        <!--side bar -->
        <?php include('inc/sidebar.php') ?>

        <!-- start-main content -->
        <div class="col-md-8 pl-5 flex-shrink-1 mx-auto pb-5  ">
            <div class="col-md-1"></div>
            <div class="card my-4 px-3">
                <div class="card-body">
                    <div class="invoice-title">
                        <h4 class="float-end font-size-15">Invoice No. #DS0204
                            <div class="mt-3">
                                <h5 class="font-size-15 mb-1">Invoice Date:</h5>
                                <p>12 Oct, 2020</p>
                            </div>
                        </h4>

                        <div class="mb-4">
                            <h2 class="mb-1 ">Demo Name</h2>
                        </div>
                        <div class="">
                            <p class="mb-1">3184 Spruce Drive Pittsburgh, PA 15201</p>
                            <p class="mb-1"><i class="uil uil-envelope-alt me-1"></i> xyz@987.com</p>
                            <p><i class="uil uil-phone me-1"></i> 012-345-6789</p>
                        </div>
                    </div>

                    <hr class="my-4">
                    <div class="">
                        <h5 class="fs-3 bold mb-3">Payment Details</h5>
                    </div>
                    <hr class="my-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="font-size-15 bold">Payment Method</h5>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="font-size-15">Paypal</h6>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-6">
                            <h5 class="font-size-15">Payment Date</h5>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="font-size-15">12 june 2023</h6>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-6">
                            <h5 class="font-size-15">Payment Date</h5>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="font-size-15">12 june 2023</h6>
                        </div>
                    </div>
                </div>
                <div class="py-2">
                    <h5 class="font-size-15">Order Summary</h5>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-centered mb-0 text-light">
                            <thead>
                                <tr>
                                    <th style="width: 70px;">No.</th>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th class="text-end" style="width: 120px;">Total</th>
                                </tr>
                            </thead><!-- end thead -->
                            <tbody>
                                <tr>
                                    <th scope="row">01</th>
                                    <td>
                                        <div>
                                            <h5 class="text-light font-size-14 mb-1"> iPhone Online Unlocking
                                                Service Worldwide</h5>
                                            <p class="text-muted mb-0">Watch, Black</p>
                                        </div>
                                    </td>
                                    <td>$ 245.50</td>
                                    <td>1</td>
                                    <td class="text-end">$ 245.50</td>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <th scope="row">02</th>
                                    <td>
                                        <div>
                                            <h5 class="text-light font-size-14 mb-1">Motorola
                                            </h5>
                                            <p class="text-muted mb-0">Watch, Gold</p>
                                        </div>
                                    </td>
                                    <td>$ 245.50</td>
                                    <td>2</td>
                                    <td class="text-end">$491.00</td>
                                </tr>
                                <!-- end tr -->
                                <!-- end tr -->
                                <tr>
                                    <th scope="row">03</th>
                                    <td>
                                        <div>
                                            <h5 class="text-light font-size-14 mb-1">Samsung
                                            </h5>
                                            <p class="text-muted mb-0">Watch, Gold</p>
                                        </div>
                                    </td>
                                    <td>$ 245.50</td>
                                    <td>2</td>
                                    <td class="text-end">$491.00</td>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <th scope="row" colspan="4" class="text-end">Sub Total</th>
                                    <td class="text-end">$732.50</td>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <th scope="row" colspan="4" class="border-0 text-end">
                                        Discount :</th>
                                    <td class="border-0 text-end">- $25.50</td>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <th scope="row" colspan="4" class="border-0 text-end">
                                        Shipping Charge :</th>
                                    <td class="border-0 text-end">$20.00</td>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <th scope="row" colspan="4" class="border-0 text-end">
                                        Tax</th>
                                    <td class="border-0 text-end">$12.00</td>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <th scope="row" colspan="4" class="border-0 text-end">Total</th>
                                    <td class="border-0 text-end">
                                        <h4 class="m-0 fw-semibold">$739.00</h4>
                                    </td>
                                </tr>
                                <!-- end tr -->
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end-main content -->
    </div>
</div>
<!-- end sidebar -->

<?php include('inc/footer.php') ?>