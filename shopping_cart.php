<?php include ('header.php') ?>
<style>
    #shopping_cart .buttons a{
        height: 38px;
        padding: 6px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
    }
    #shopping_cart .btn-payable{
        display: flex;
        height: 38px;
        font-size: 18px;
        border: none;
        color: #000;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
    }
    #shopping_cart .coupon-form{
        display: flex;
        height: 38px;
        flex-wrap: nowrap;
    }
    #shopping_cart .coupon-form button{
        margin-left: 5px;
        background: white;
        border-radius: 0;
        color: black;
        font-size: 1vw;
    }
    #shopping_cart .coupon-form button:hover{
        color: #f47c2b;
    }
    #shopping_cart .coupon-form input{
        border-radius: 0;
        background: #eae9e9;
    }
</style>
<div id="breadcrumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>
</div>
<section id="shopping_cart">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-4">
                        <div class="image-box">
                            <img src="assets/images/products/1.png" style="background-color: #f3f2f2;">
                        </div>
                    </div>
                    <div class="col-8">
                        <h4>Black Boots</h4>
                        <table class="table table-borderless table-sm m-0">
                            <tbody style="border:1px solid lightgrey;">
                            <tr>
                                <td class="text-left">Total Price: <b>Rs.1200.00</b></td>
                                <td class="text-right"><small>Delivery in 3-4 days | Free</small></td>
                            </tr>
                            <tr>
                                <td class="text-left">Quantity: <b>2</b></td>
                                <td class="text-right"><small>10 days replacement policy.</small></td>
                            </tr>
                            <tr>
                                <td class="text-left">Size: <b>XL</b></td>
                                <td class="text-right"><small><a href="#" class="btn btn-danger btn-disabled btn-sm p-0 px-2">Delete Item</a></small></td>
                            </tr>
                            <tr>
                                <td class="text-left">Color: <b>Yellow</b></td>
                                <td class="text-right"></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="quantity">
                                    <button class="btn value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</button>
                                    <input type="number" id="number" value="0" style="width: 50%;" />
                                    <button class="btn value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</button>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="buttons text-right">
                                    <a href="index.php" class="btn btn-primary btn-sm">Continue Shopping</a>
                                    <a href="checkout.php" class="btn btn-primary btn-sm">Checkout</a>
                                </div>
                            </div>
                            <div class="col-12 pt-3">
                                <h6>Discount Codes</h6>
                                <p>Enter your coupon code of you have one.</p>
                                <form class="coupon-form">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <button type="submit" class="btn btn-info float-right">Apply Coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-12">
                        <h4 style="visibility: hidden">Black Boots</h4>
                        <table class="table table-borderless table-sm m-0">
                            <tbody style="border:1px solid lightgrey;">
                            <tr>
                                <td class="text-left"><b>Price Details</b></td>
                            </tr>
                            <tr>
                                <td class="text-left">Price (1 item ): <b>Rs.1200.00</b></td>
                            </tr>
                            <tr>
                                <td class="text-left">Special Discount: <b>Rs.0000.00</b></td>
                            </tr>
                            <tr>
                                <td class="text-left">Delivery Charges (Free all around Nepal): <b>Rs.0000.00</b></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-12">
                                <a class="btn btn-primary btn-sm btn-warning btn-payable" disabled>Amount Payable <b>&nbsp; Rs.1200.00</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ('footer.php') ?>
