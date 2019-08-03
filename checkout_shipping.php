<?php include('header.php') ?>

<style type="text/css">

</style>
<section id="checkout_ls">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 checkout-shipping mb-4 br-gray">
                <div>
                    <h5>Shipping Details</h5>
                </div>
                <div class="shipping-details">
                    <form class="" action="" method="post">
                        <table style="width:100%">
                            <tr>
                                <th>First Name</th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Lat Name</th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th style="display: block;margin-top: 5px">Delivery Comment</th>
                                <td>
                                    <div class="form-group">
                                        <textarea style="width: 100%" rows="2" placeholder="Eg. Please deliver soon."></textarea>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <a href="checkout_payment.php" style="float:right;" class="btn btn-primary">Next</a>
                    </form>
                </div>
            </div>
            <div class="col-md-6 cart-summary">
                <div class="summary pt-3">
                    <h6 class="font-weight-bolder">Order Summary</h6>
                    <h3 class="font-weight-light">1 Item in Cart</h3>
                </div>
                <div class="order-list-table">
                    <table class="table table-borderless table-hover table-striped" style="width: 100%;">
                        <tbody>
                        <?php
                        for ($i = 0; $i<3; $i++) {
                            ?>
                            <tr>
                                <td width="30%" class="text-center"><img src="assets/images/products/<?php echo $i+3; ?>.png"></td>
                                <td>
                                    <p class="mb-0"><b><a href="#">Login/Signup</a></b></p>
                                    <p><small>Qty: 1</small></p>
                                </td>
                                <td class="text-right"><b>Rs. 1200.00</b></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="order-price-table">
                    <table class="table table-borderless table-sm" style="width: 100%;">
                        <tbody>
                        <tr>
                            <th colspan="4">Cart Subtotal</th>
                            <td class="text-right"><b>Rs. 2000.00</b></td>
                        </tr>
                        <tr>
                            <th colspan="4">Shipping</th>
                            <td class="text-right"><b>Rs. 0.00</b></td>
                        </tr>
                        <tr class="total">
                            <th colspan="4"><b>Order Total</b></th>
                            <td class="text-right"><b>Rs. 2000.00</b></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>
