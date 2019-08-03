<?php include('header.php') ?>

<style type="text/css">

</style>
<section id="checkout_payment">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 payment-method mb-4 br-gray">
                <div>
                    <h5>Payment Method</h5>
                </div>
                <div class="form-payment mt-4">
                    <form>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                esewa <img src="assets/images/esewa.png" width="70">
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Bank Deposit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios23" value="option3">
                            <label class="form-check-label" for="exampleRadios3">
                                Cash On Delivery
                            </label>
                        </div>
                        <a href="success_page.php" class="btn btn-primary float-right">Send</a>
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
