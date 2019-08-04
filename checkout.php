<?php include('header.php') ?>

<style type="text/css">
    .btn-login{
        background: white;
        color: black;
        border-radius: 0;
        border-color: #ced4da;
    }
</style>
<section id="checkout_ls">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 login-signup mb-4 br-gray">
                <div>
                    <h5>Login/Signup</h5>
                    <p>Please Provide Your Mobile Number/Email to Login/Signup before you place the order.</p>
                </div>
                <div class="form-login">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mobile No/Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <a href="checkout_shipping.php" class="btn btn-primary btn-login">Login</a>
                    </form>
                </div>
                <div class="social-logins mt-3">
                    <button class="loginBtn loginBtn--facebook">
                        Facebook
                    </button>

                    <button class="loginBtn loginBtn--google">
                        Google
                    </button>
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
