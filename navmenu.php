<style>
    .wsmenu>.wsmenu-list>li:hover>a {
        background-color: transparent;
    }
    .wsmenu>.wsmenu-list>li>.navtext>span+span:hover,.wsmenu>.wsmenu-list>li>.navtext>span+span:active {
        border-bottom: 2px solid darkblue;
    }
    .wsmenu::-webkit-scrollbar{
        display: none;
    }
    div.popover {
        z-index:10002 ;
    }
    .wsmobileheader .wssearch.wsopensearch {
        left: unset;
        right: 0;
        width: auto;
        height: 60px;
        background-color: transparent;
    }
    .login-btn{
        width: 50%;
        border-radius: 20px;
        background: #9d9cfa;
        border: none;
        color: black;
        font-weight: bold;
    }
    .signup-btn{
        width: 90%;
        border-radius: 20px;
        color: black;
        background: #9a98f9;
        border: navajowhite;
    }
    .btn-login-signup{
        border-radius: 20px;
        padding: 6px 50px;
        background: lightgray;
        color: black;
        border-color: gray;
    }
    .wsmobileheader .wssearch i {
        font-size: 18px;
        color: #000000;
    }
    .wsmenu>.wsmenu-list>.wsshopmyaccount>a i {
        color: #000000;
    }
    .cart-badge2 {
        position: absolute;
        top: 10px;
        right: 14px;
    }
    .pc-nav-user{
        padding: 0 14px 0 21px !important;
        border-left: 1px solid;
        border-right: 1px solid;
    }
    .pc-nav-cart{
        padding: 0 14px 0 21px !important;
        border-left: 1px solid;
    }
</style>
<!-- Mobile Header -->
<div class="wsmobileheader clearfix">
    <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
    <span class="smllogo"><img src="assets/images/logo.png" width="150" alt="" /></span>
    <div class="wssearch clearfix">
        <!--        <i class="wsclosesearch fas fa-times"></i>-->
        <a href="shopping_cart.php"><i class="fas fa-shopping-basket mobile-basket"></i> <em class="badge badge-info cart-badge">8</em></a>
        <a href="#" class="login-pop"><i class="fas fa-user"></i></a>
    </div>
</div>
<!-- Mobile Header -->

<div class="headtoppart clearfix">
    <div class="headerwp clearfix">
        <div class="headertopright clearfix ml-3">
            <a class="facebookicon" title="AAA" href="#"><i class="fab fa-facebook-f"></i> <span class="mobiletext02">Facebook</span></a>
            <a class="twittericon" title="Twitter" href="#"><i class="fab fa-twitter"></i> <span class="mobiletext02">Twitter</span></a>
            <a class="linkedinicon" title="Linkedin" href="#"><i class="fab fa-linkedin-in"></i> <span class="mobiletext02">Linkedin</span></a>
            <a class="googleicon" title="Google" href="#"><i class="fab fa-google"></i> <span class="mobiletext02">Google</span></a>
        </div>
        <div class="headertopleft clearfix">
            <div class="address clearfix"><span><i class="fas fa-map-marker-alt"></i> 3982 Aspen Court,
            Boston, MA 02114 </span> <a href="#"><i class="fas fa-phone"></i> 123-456-7890</a></div>
        </div>
    </div>
</div>

<div class="headerfull">
    <div class="wsmain clearfix">
        <div class="smllogo"><a href="index.php"><img src="assets/images/logo.png" alt="" /></a></div>
        <nav class="wsmenu clearfix">
            <ul class="wsmenu-list">


                <li aria-haspopup="true" class="wsshopmyaccount not-mobile">
                    <a href="#" class="login-pop pc-nav-user"><i class="fas fa-user"></i></a>
                    <!--                    <a class="nav-link login-pop" href="#"><i class="fas fa-user"></i></a>-->
                    <div class="login-container" style="display: none;">
                        <ul class='login-popper'>
                            <li><a href='#' class="login_btn">Login</a></li>
                            <li><a href='#' class="signup_btn">Signup</a></li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $('.login-pop').popover({
                                content: $( ".login-container" ).html(),
                                html: true,
                                trigger: "focus",
                                placement: "bottom"});
                        });
                        $(document).on("click", ".login_btn", function() {
                            $('#login').modal('show');
                        });
                        $(document).on("click", ".signup_btn", function() {
                            $('#signup').modal('show');
                        });
                    </script>
                </li>
                <li aria-haspopup="true" class="wsshopmyaccount not-mobile">
                    <a href="shopping_cart.php" class="pc-nav-cart">
                        <i class="fas fa-shopping-basket"></i> <em class="badge badge-info cart-badge2">8</em></a>
                </li>
                <li class="float-right"> <a href="contact_us.php" class="navtext single-nav"><span class="top-span"></span> <span>Contact Us</span></a> </li>
                <li class="float-right"> <a href="blog.php" class="navtext single-nav"><span class="top-span"></span> <span>Blog</span></a> </li>
                <li class="float-right" aria-haspopup="true"><a href="product_shirt.php" class="navtext"><span class="top-span"></span> <span>Women's Wear</span></a>
                    <div class="wsshoptabing wtsbrandmenu clearfix">
                        <div class="wsshoptabingwp clearfix">
                            <ul class="wstabitem02 clearfix">
                                <li class="wsshoplink-active"><a href="#"><i class="fab fa-apple brandcolor01"></i>Apple</a>
                                    <div class="wsshoptab-active wstbrandbottom clearfix">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Apple Products </li>
                                                        <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>
                                                        <li><a href="#">List Products 02</a></li>
                                                        <li><a href="#">List Products 03</a></li>
                                                        <li><a href="#">List Products 04</a> </li>
                                                        <li><a href="#">List Products 05</a> </li>
                                                        <li><a href="#">List Products 06</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Apple More Products</li>
                                                        <li><a href="#">List Products 07 </a></li>
                                                        <li><a href="#">List Products 08</a></li>
                                                        <li><a href="#">List Products 09</a></li>
                                                        <li><a href="#">List Products 10</a> </li>
                                                        <li><a href="#">List Products 11 </a></li>
                                                        <li><a href="#">List Products 12</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Apple More Products</li>
                                                        <li><a href="#">List Products 13 </a> <span class="wstmenutag orangetag">20% off</span></li>
                                                        <li><a href="#">List Products 14</a></li>
                                                        <li><a href="#">List Products 15</a></li>
                                                        <li><a href="#">List Products 16</a> </li>
                                                        <li><a href="#">List Products 17</a></li>
                                                        <li><a href="#">List Products 18</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Apple More Products</li>
                                                        <li><a href="#">List Products 19 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
                                                        <li><a href="#">List Products 20</a></li>
                                                        <li><a href="#">List Products 21</a></li>
                                                        <li><a href="#">List Products 22</a> </li>
                                                        <li><a href="#">List Products 23</a></li>
                                                        <li><a href="#">List Products 24</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fab fa-windows brandcolor02"></i> Windows</a>
                                    <div class="wstbrandbottom clearfix">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Windows Products </li>
                                                        <li><a href="#">List Products 25 <span class="wstmenutag bluetag">Popular</span></a></li>
                                                        <li><a href="#">List Products 26</a></li>
                                                        <li><a href="#">List Products 27</a> <span class="wstmenutag greentag">20% off</span></li>
                                                        <li><a href="#">List Products 28</a> </li>
                                                        <li><a href="#">List Products 29</a></li>
                                                        <li><a href="#">List Products 30</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Windows More Products</li>
                                                        <li><a href="#">List Products 31 </a></li>
                                                        <li><a href="#">List Products 32</a></li>
                                                        <li><a href="#">List Products 33</a></li>
                                                        <li><a href="#">List Products 34</a> </li>
                                                        <li><a href="#">List Products 35 </a></li>
                                                        <li><a href="#">List Products 36</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Windows More Products</li>
                                                        <li><a href="#">List Products 37 </a></li>
                                                        <li><a href="#">List Products 38</a></li>
                                                        <li><a href="#">List Products 39</a></li>
                                                        <li><a href="#">List Products 40</a> </li>
                                                        <li><a href="#">List Products 41</a></li>
                                                        <li><a href="#">List Products 42</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Windows More Products</li>
                                                        <li><a href="#">List Products 43 </a></li>
                                                        <li><a href="#">List Products 44</a></li>
                                                        <li><a href="#">List Products 45</a></li>
                                                        <li><a href="#">List Products 46</a> </li>
                                                        <li><a href="#">List Products 47</a></li>
                                                        <li><a href="#">List Products 48</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fab fa-skype brandcolor03"></i> Skype</a>
                                    <div class="wstbrandbottom clearfix">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Skype Products </li>
                                                        <li><a href="#">List Products 49 </a></li>
                                                        <li><a href="#">List Products 50</a> <span class="wstmenutag redtag">Popular</span></li>
                                                        <li><a href="#">List Products 51</a></li>
                                                        <li><a href="#">List Products 52</a> </li>
                                                        <li><a href="#">List Products 53</a></li>
                                                        <li><a href="#">List Products 54</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Skype More Products</li>
                                                        <li><a href="#">List Products 55 </a></li>
                                                        <li><a href="#">List Products 56</a></li>
                                                        <li><a href="#">List Products 57</a></li>
                                                        <li><a href="#">List Products 58</a> </li>
                                                        <li><a href="#">List Products 59 </a></li>
                                                        <li><a href="#">List Products 60</a> <span class="wstmenutag orangetag">20% off</span></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Skype More Products</li>
                                                        <li><a href="#">List Products 61 </a></li>
                                                        <li><a href="#">List Products 62</a></li>
                                                        <li><a href="#">List Products 63</a></li>
                                                        <li><a href="#">List Products 64</a> </li>
                                                        <li><a href="#">List Products 65</a></li>
                                                        <li><a href="#">List Products 66</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Skype More Products</li>
                                                        <li><a href="#">List Products 67 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
                                                        <li><a href="#">List Products 68</a></li>
                                                        <li><a href="#">List Products 69</a></li>
                                                        <li><a href="#">List Products 70</a> </li>
                                                        <li><a href="#">List Products 71</a></li>
                                                        <li><a href="#">List Products 72</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fab fa-paypal brandcolor04"></i>Paypal</a>
                                    <div class="wstbrandbottom clearfix">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Paypal Products </li>
                                                        <li><a href="#">List Products 73 <span class="wstmenutag bluetag">Popular</span></a></li>
                                                        <li><a href="#">List Products 74</a></li>
                                                        <li><a href="#">List Products 75</a></li>
                                                        <li><a href="#">List Products 76</a> </li>
                                                        <li><a href="#">List Products 77</a></li>
                                                        <li><a href="#">List Products 78</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Paypal More Products</li>
                                                        <li><a href="#">List Products 79 </a></li>
                                                        <li><a href="#">List Products 80</a></li>
                                                        <li><a href="#">List Products 81</a></li>
                                                        <li><a href="#">List Products 82</a> </li>
                                                        <li><a href="#">List Products 83 <span class="wstmenutag greentag">20% off</span></a></li>
                                                        <li><a href="#">List Products 84</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Paypal More Products</li>
                                                        <li><a href="#">List Products 85 </a></li>
                                                        <li><a href="#">List Products 86</a></li>
                                                        <li><a href="#">List Products 87</a></li>
                                                        <li><a href="#">List Products 89</a> </li>
                                                        <li><a href="#">List Products 90</a></li>
                                                        <li><a href="#">List Products 91</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Paypal More Products</li>
                                                        <li><a href="#">List Products 92 </a></li>
                                                        <li><a href="#">List Products 93</a></li>
                                                        <li><a href="#">List Products 94</a></li>
                                                        <li><a href="#">List Products 95</a> </li>
                                                        <li><a href="#">List Products 96</a></li>
                                                        <li><a href="#">List Products 97</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fab fa-quora brandcolor05"></i>Quora</a>
                                    <div class="wstbrandbottom clearfix">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Amazon Products </li>
                                                        <li><a href="#">List Products 98 </a></li>
                                                        <li><a href="#">List Products 99</a></li>
                                                        <li><a href="#">List Products 00</a></li>
                                                        <li><a href="#">List Products 01</a> </li>
                                                        <li><a href="#">List Products 02</a> <span class="wstmenutag redtag">Popular</span></li>
                                                        <li><a href="#">List Products 03</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Amazon More Products</li>
                                                        <li><a href="#">List Products 04 <span class="wstmenutag orangetag">20% off</span></a></li>
                                                        <li><a href="#">List Products 05</a></li>
                                                        <li><a href="#">List Products 06</a></li>
                                                        <li><a href="#">List Products 07</a> </li>
                                                        <li><a href="#">List Products 08 </a></li>
                                                        <li><a href="#">List Products 09</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Amazon More Products</li>
                                                        <li><a href="#">List Products 10 </a></li>
                                                        <li><a href="#">List Products 11</a></li>
                                                        <li><a href="#">List Products 12</a></li>
                                                        <li><a href="#">List Products 13</a> </li>
                                                        <li><a href="#">List Products 14</a></li>
                                                        <li><a href="#">List Products 15</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Amazon More Products</li>
                                                        <li><a href="#">List Products 16 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
                                                        <li><a href="#">List Products 17</a></li>
                                                        <li><a href="#">List Products 18</a></li>
                                                        <li><a href="#">List Products 19</a> </li>
                                                        <li><a href="#">List Products 20</a></li>
                                                        <li><a href="#">List Products 21</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fab fa-soundcloud brandcolor06"></i>Sound Cloud</a>
                                    <div class="wstbrandbottom clearfix">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">SoundCloud Products </li>
                                                        <li><a href="#">List Products 01 <span class="wstmenutag bluetag">Popular</span></a></li>
                                                        <li><a href="#">List Products 01</a></li>
                                                        <li><a href="#">List Products 01</a></li>
                                                        <li><a href="#">List Products 01</a> </li>
                                                        <li><a href="#">List Products 01</a></li>
                                                        <li><a href="#">List Products 01</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">SoundCloud More Products</li>
                                                        <li><a href="#">List Products 07 </a></li>
                                                        <li><a href="#">List Products 08</a></li>
                                                        <li><a href="#">List Products 09</a></li>
                                                        <li><a href="#">List Products 10</a> </li>
                                                        <li><a href="#">List Products 11 <span class="wstmenutag greentag">20% off</span></a></li>
                                                        <li><a href="#">List Products 12</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">SoundCloud More Products</li>
                                                        <li><a href="#">List Products 13 </a></li>
                                                        <li><a href="#">List Products 14</a></li>
                                                        <li><a href="#">List Products 15</a></li>
                                                        <li><a href="#">List Products 16</a> </li>
                                                        <li><a href="#">List Products 17</a></li>
                                                        <li><a href="#">List Products 18</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">SoundCloud More Products</li>
                                                        <li><a href="#">List Products 19 </a></li>
                                                        <li><a href="#">List Products 20</a></li>
                                                        <li><a href="#">List Products 21</a></li>
                                                        <li><a href="#">List Products 22</a> </li>
                                                        <li><a href="#">List Products 23</a></li>
                                                        <li><a href="#">List Products 24</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fab fa-houzz brandcolor07"></i>Houzz</a>
                                    <div class="wstbrandbottom clearfix">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Houzz Products </li>
                                                        <li><a href="#">List Products 01 </a></li>
                                                        <li><a href="#">List Products 01</a></li>
                                                        <li><a href="#">List Products 01</a></li>
                                                        <li><a href="#">List Products 01</a> </li>
                                                        <li><a href="#">List Products 01</a> <span class="wstmenutag redtag">Popular</span></li>
                                                        <li><a href="#">List Products 01</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Houzz More Products</li>
                                                        <li><a href="#">List Products 07 <span class="wstmenutag orangetag">20% off</span></a></li>
                                                        <li><a href="#">List Products 08</a></li>
                                                        <li><a href="#">List Products 09</a></li>
                                                        <li><a href="#">List Products 10</a> </li>
                                                        <li><a href="#">List Products 11 </a></li>
                                                        <li><a href="#">List Products 12</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Houzz More Products</li>
                                                        <li><a href="#">List Products 13 </a></li>
                                                        <li><a href="#">List Products 14</a></li>
                                                        <li><a href="#">List Products 15</a></li>
                                                        <li><a href="#">List Products 16</a> </li>
                                                        <li><a href="#">List Products 17</a></li>
                                                        <li><a href="#">List Products 18</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Houzz More Products</li>
                                                        <li><a href="#">List Products 19 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
                                                        <li><a href="#">List Products 20</a></li>
                                                        <li><a href="#">List Products 21</a></li>
                                                        <li><a href="#">List Products 22</a> </li>
                                                        <li><a href="#">List Products 23</a></li>
                                                        <li><a href="#">List Products 24</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fab fa-get-pocket brandcolor08"></i>Get Pocket</a>
                                    <div class="wstbrandbottom clearfix">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Get Pocket Products </li>
                                                        <li><a href="#">List Products 01 <span class="wstmenutag bluetag">Popular</span></a></li>
                                                        <li><a href="#">List Products 01</a></li>
                                                        <li><a href="#">List Products 01</a></li>
                                                        <li><a href="#">List Products 01</a> </li>
                                                        <li><a href="#">List Products 01</a></li>
                                                        <li><a href="#">List Products 01</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Get Pocket More Products</li>
                                                        <li><a href="#">List Products 07 </a></li>
                                                        <li><a href="#">List Products 08</a></li>
                                                        <li><a href="#">List Products 09</a></li>
                                                        <li><a href="#">List Products 10</a> </li>
                                                        <li><a href="#">List Products 11 <span class="wstmenutag greentag">20% off</span></a></li>
                                                        <li><a href="#">List Products 12</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Get Pocket More Products</li>
                                                        <li><a href="#">List Products 13 </a></li>
                                                        <li><a href="#">List Products 14</a></li>
                                                        <li><a href="#">List Products 15</a></li>
                                                        <li><a href="#">List Products 16</a> </li>
                                                        <li><a href="#">List Products 17</a></li>
                                                        <li><a href="#">List Products 18</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Get Pocket More Products</li>
                                                        <li><a href="#">List Products 19 </a></li>
                                                        <li><a href="#">List Products 20</a></li>
                                                        <li><a href="#">List Products 21</a></li>
                                                        <li><a href="#">List Products 22</a> </li>
                                                        <li><a href="#">List Products 23</a></li>
                                                        <li><a href="#">List Products 24</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>


                <li class="float-right" aria-haspopup="true"><a href="mens_wear.php" class="navtext"><span class="top-span"></span> <span>Men's Wear</span></a>
                    <div class="wsmegamenu clearfix">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-12">
                                    <ul class="wstliststy02 clearfix">
                                        <li class="wstheading clearfix"> Skype Products </li>
                                        <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>
                                        <li><a href="#">List Products 02</a></li>
                                        <li><a href="#">List Products 03</a></li>
                                        <li><a href="#">List Products 04</a> </li>
                                        <li><a href="#">List Products 05</a> </li>
                                        <li><a href="#">List Products 06</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <ul class="wstliststy02 clearfix">
                                        <li class="wstheading clearfix">Paypal Products</li>
                                        <li><a href="#">List Products 07 </a></li>
                                        <li><a href="#">List Products 08</a></li>
                                        <li><a href="#">List Products 09</a></li>
                                        <li><a href="#">List Products 10</a> </li>
                                        <li><a href="#">List Products 11 </a></li>
                                        <li><a href="#">List Products 12</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <ul class="wstliststy02 clearfix">
                                        <li class="wstheading clearfix">Sound Cloud Products</li>
                                        <li><a href="#">List Products 13 </a> <span class="wstmenutag orangetag">20% off</span></li>
                                        <li><a href="#">List Products 14</a></li>
                                        <li><a href="#">List Products 15</a></li>
                                        <li><a href="#">List Products 16</a> </li>
                                        <li><a href="#">List Products 17</a></li>
                                        <li><a href="#">List Products 18</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <ul class="wstliststy02 clearfix">
                                        <li class="wstheading clearfix">Get Pocket Products</li>
                                        <li><a href="#">List Products 19 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
                                        <li><a href="#">List Products 20</a></li>
                                        <li><a href="#">List Products 21</a></li>
                                        <li><a href="#">List Products 22</a> </li>
                                        <li><a href="#">List Products 23</a></li>
                                        <li><a href="#">List Products 24</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="float-right" aria-haspopup="true"><a href="product_shirt.php" class="navtext"><span class="top-span"></span> <span>All Categories</span></a>
                    <div class="wsshoptabing wtsdepartmentmenu clearfix">
                        <div class="wsshopwp clearfix">
                            <ul class="wstabitem clearfix">
                                <li class="wsshoplink-active"><a href="#"><i class="fas fa-female"></i> Women's Wear &amp; Items</a>
                                    <div class="wstitemright clearfix wstitemrightactive">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-12 clearfix">
                                                    <div class="wstheading clearfix">Women's Clothing</div>
                                                    <ul class="wstliststy01 clearfix">
                                                        <li><a href="#">Sweatshirt </a></li>
                                                        <li><a href="#">Fashion Hoodies <span class="wstmenutag greentag">New</span></a></li>
                                                        <li><a href="#">Jeans &amp; Trousers</a></li>
                                                        <li><a href="#">Capris and Shorts </a></li>
                                                        <li><a href="#">Leggings</a></li>
                                                        <li><a href="#">Swimsuits &amp; Cover Ups</a></li>
                                                        <li><a href="#">Lingerie &amp; Lounge</a></li>
                                                        <li><a href="#">Nightwear</a> <span class="wstmenutag redtag">Sale</span></li>
                                                        <li><a href="#">Jumpsuits, Rompers </a></li>
                                                        <li><a href="#">Jackets &amp; Vests <span class="wstmenutag bluetag">Trending</span></a></li>
                                                        <li><a href="#">Suiting &amp; Blazers </a></li>
                                                        <li><a href="#">Socks &amp; Hosiery</a></li>
                                                    </ul>
                                                    <div class="wstheading clearfix">Handbags & Wallets</div>
                                                    <ul class="wstliststy01 clearfix">
                                                        <li><a href="#">Clutches</a> </li>
                                                        <li><a href="#">Cross-Body Bags</a> </li>
                                                        <li><a href="#">Evening Bags</a> </li>
                                                        <li><a href="#">Shoulder Bags</a> <span class="wstmenutag orangetag">Hot</span></li>
                                                        <li><a href="#">Top-Handle Bags</a> </li>
                                                        <li><a href="#">Wristlets</a> </li>
                                                    </ul>
                                                    <div class="wstheading clearfix">Accessories</div>
                                                    <ul class="wstliststy01 clearfix">
                                                        <li><a href="#">Handbag Accessories</a> </li>
                                                        <li><a href="#">Sunglasses Accessories</a> </li>
                                                        <li><a href="#">Eyewear Accessories</a> </li>
                                                        <li><a href="#">Scarves & Wraps</a> </li>
                                                        <li><a href="#">Gloves & Mittens</a> </li>
                                                        <li><a href="#">Hats & Caps</a> </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-12 clearfix">
                                                    <div class="wstbootslider clearfix">
                                                        <div id="demo" class="carousel slide" data-ride="carousel">

                                                            <!-- The slideshow -->
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active"><img src="assets/images/woman-ad-img.jpg" alt="" />
                                                                    <div class="carousel-caption">
                                                                        <h3>Slider Caption 11</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item"><img src="assets/images/woman-ad-img02.jpg" alt="" />
                                                                    <div class="carousel-caption">
                                                                        <h3>Slider Caption 22</h3>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Left and right controls -->
                                                            <a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span>
                                                            </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fas fa-male"></i> Men's Wear &amp; Items</a>
                                    <div class="wstitemright clearfix">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-12 clearfix">
                                                    <div class="wstheading clearfix">Men's Clothing</div>
                                                    <ul class="wstliststy01 clearfix">
                                                        <li><a href="#">Shirts <span class="wstmenutag greentag">New</span></a></li>
                                                        <li><a href="#">Fashion Hoodies & Sweatshirts </a></li>
                                                        <li><a href="#">Pants &amp; Trousers</a></li>
                                                        <li><a href="#">Capris &amp; Shorts </a></li>
                                                        <li><a href="#">Swim</a></li>
                                                        <li><a href="#">Suits & Sport Coats</a></li>
                                                        <li><a href="#">Underwear</a></li>
                                                        <li><a href="#">Socks</a> </li>
                                                        <li><a href="#">Sleep & Lounge</a></li>
                                                        <li><a href="#">T-Shirts & Tanks <span class="wstmenutag redtag">20%</span></a></li>
                                                        <li><a href="#">Active</a></li>
                                                        <li><a href="#">Sport Coats <span class="wstmenutag bluetag">Trending</span></a></li>
                                                    </ul>
                                                    <div class="wstheading clearfix">Shoes & Wallets</div>
                                                    <ul class="wstliststy01 clearfix">
                                                        <li><a href="#">Athletic</a> </li>
                                                        <li><a href="#">Boots</a> <span class="wstmenutag orangetag">Exclusive</span></li>
                                                        <li><a href="#">Fashion Sneakers</a> </li>
                                                        <li><a href="#">Loafers & Slip-Ons</a> </li>
                                                        <li><a href="#">Mules & Clogs</a> </li>
                                                        <li><a href="#">Outdoor</a> </li>
                                                        <li><a href="#">Oxfords</a> </li>
                                                        <li><a href="#">Sandals</a> </li>
                                                        <li><a href="#">Slippers</a> </li>
                                                    </ul>
                                                    <div class="wstheading clearfix">Accessories</div>
                                                    <ul class="wstliststy01 clearfix">
                                                        <li><a href="#">Belts</a> </li>
                                                        <li><a href="#">Suspenders</a> </li>
                                                        <li><a href="#">Eyewear Accessories</a> </li>
                                                        <li><a href="#">Neckties</a> </li>
                                                        <li><a href="#">Bow Ties & Cummerbunds</a> </li>
                                                        <li><a href="#">Collar Stays</a> </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-12 clearfix"><a href="#" class="wstmegamenucolr"><img src="assets/images/man-ad-img.jpg"
                                                                                                                                  alt=""></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fas fa-play-circle"></i> Movies, Music &amp; Games</a>
                                    <div class="wstitemright clearfix">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12 clearfix">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Latest Movies</li>
                                                        <li><a href="#">Action & Adventure <span class="wstmenutag greentag">New</span></a></li>
                                                        <li><a href="#">Bollywood </a></li>
                                                        <li><a href="#">Documentary</a></li>
                                                        <li><a href="#">Educational</a></li>
                                                        <li><a href="#">Exercise & Fitness </a></li>
                                                        <li><a href="#">Faith & Spirituality</a></li>
                                                        <li><a href="#">Fantasy</a></li>
                                                        <li><a href="#">Romance</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12 clearfix">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Newest Games</li>
                                                        <li><a href="#">PlayStation 4 </a> </li>
                                                        <li><a href="#">Xbox 1 </a> <span class="wstmenutag orangetag">Most Viewed</span></li>
                                                        <li><a href="#">Nintendo DS</a> </li>
                                                        <li><a href="#">PlayStation Vita </a> </li>
                                                        <li><a href="#">Retro Gaming</a> </li>
                                                        <li><a href="#">Digital Games</a> </li>
                                                        <li><a href="#">Microconsoles</a> </li>
                                                        <li><a href="#">Kids & Family </a> </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12 clearfix">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Popular Music Genre</li>
                                                        <li><a href="#">Alternative & Indie Rock</a> </li>
                                                        <li><a href="#">Broadway & Vocalists</a> </li>
                                                        <li><a href="#">Children's Music</a> </li>
                                                        <li><a href="#">Christian <span class="wstmenutag bluetag">50% off</span></a> </li>
                                                        <li><a href="#">Classic Rock</a> </li>
                                                        <li><a href="#">Comedy & Miscellaneous </a> </li>
                                                        <li><a href="#">Country</a> </li>
                                                        <li><a href="#">Dance & Electronic</a> </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12 clearfix">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Popular Music Genre</li>
                                                        <li><a href="#">Alternative & Indie Rock</a> </li>
                                                        <li><a href="#">Broadway & Vocalists</a> </li>
                                                        <li><a href="#">Children's Music <span class="wstmenutag redtag">Discounted</span></a></li>
                                                        <li><a href="#">Classical</a> </li>
                                                        <li><a href="#">Classic Rock</a> </li>
                                                        <li><a href="#">Comedy & Miscellaneous</a> </li>
                                                        <li><a href="#">Country</a> </li>
                                                        <li><a href="#">Dance & Electronic</a> </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 wstadsize01 clearfix"><a href="#"><img src="assets/images/ad-size01.jpg" alt=""></a></div>
                                                <div class="col-lg-6 wstadsize02 clearfix"><a href="#"><img src="assets/images/ad-size02.jpg" alt=""></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fas fa-utensils"></i>Home &amp; Kitchen</a>
                                    <div class="wstitemright clearfix kitchenmenuimg">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Home Appliances</li>
                                                        <li><a href="#">Air Conditioners <span class="wstmenutag greentag">New</span></a></li>
                                                        <li><a href="#">Air Coolers </a></li>
                                                        <li><a href="#">Fans</a></li>
                                                        <li><a href="#">Microwaves</a></li>
                                                        <li><a href="#">Refrigerators</a></li>
                                                        <li><a href="#">Washing Machines </a></li>
                                                        <li><a href="#">Jars & Containers </a></li>
                                                        <li><a href="#">LED & CFL bulbs </a></li>
                                                        <li><a href="#">Drying Racks </a></li>
                                                        <li><a href="#">Laundry Baskets</a> <span class="wstmenutag orangetag">New</span></li>
                                                        <li><a href="#">Washing Machines </a></li>
                                                        <li><a href="#">Bedsheets </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li class="wstheading clearfix">Kitchen Appliances</li>
                                                        <li><a href="#">Air Fryers </a></li>
                                                        <li><a href="#">Espresso Machines</a></li>
                                                        <li><a href="#">Food Processors</a> <span class="wstmenutag bluetag">Popular</span></li>
                                                        <li><a href="#">Hand Blenders</a></li>
                                                        <li><a href="#">Induction Cooktops</a></li>
                                                        <li><a href="#">Microwave Ovens</a></li>
                                                        <li><a href="#">Mixers & Grinders</a></li>
                                                        <li><a href="#">Rice Cookers</a></li>
                                                        <li><a href="#">Stand Mixers</a></li>
                                                        <li><a href="#">Sandwich Makers</a></li>
                                                        <li><a href="#">Tandoor & Grills</a></li>
                                                        <li><a href="#">Toasters</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fas fa-tv"></i>Electronics Appliances</a>
                                    <div class="wstitemright clearfix">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li><img src="assets/images/ele-menu-img01.jpg" alt=" "></li>
                                                        <li class="wstheading clearfix">TV & Audio</li>
                                                        <li><a href="#">4K Ultra HD TVs </a></li>
                                                        <li><a href="#">LED & LCD TVs</a></li>
                                                        <li><a href="#">OLED TVs</a> <span class="wstmenutag bluetag">Popular</span></li>
                                                        <li><a href="#">Plasma TVs</a></li>
                                                        <li><a href="#">Smart TVs</a></li>
                                                        <li><a href="#">Home Theater</a></li>
                                                        <li><a href="#">Wireless & streaming</a></li>
                                                        <li><a href="#">Stereo System</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li><img src="assets/images/ele-menu-img02.jpg" alt=" "></li>
                                                        <li class="wstheading clearfix">Camera, Photo & Video</li>
                                                        <li><a href="#">Accessories <span class="wstcount">(1145)</span></a></li>
                                                        <li><a href="#">Bags & Cases <span class="wstcount">(445)</span></a></li>
                                                        <li><a href="#">Binoculars & Scopes <span class="wstcount">(45)</span></a></li>
                                                        <li><a href="#">Digital Cameras <span class="wstcount">(845)</span></a> </li>
                                                        <li><a href="#">Film Photography <span class="wstcount">(245)</span></a> </li>
                                                        <li><a href="#">Flashes <span class="wstcount">(105)</span></a></li>
                                                        <li><a href="#">Lenses <span class="wstcount">(445)</span></a></li>
                                                        <li><a href="#">Video <span class="wstcount">(145)</span> <span class="wstmenutag bluetag">Popular</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li><img src="assets/images/ele-menu-img03.jpg" alt=" "></li>
                                                        <li class="wstheading clearfix">Phones & Accessories</li>
                                                        <li><a href="#">Unlocked Cell Phones </a></li>
                                                        <li><a href="#">Smartwatches </a></li>
                                                        <li><a href="#">Carrier Phones</a></li>
                                                        <li><a href="#">Cell Phone Cases</a> <span class="wstmenutag orangetag">Hot</span></li>
                                                        <li><a href="#">Bluetooth Headsets</a></li>
                                                        <li><a href="#">Cell Phone Accessories</a></li>
                                                        <li><a href="#">Fashion Tech</a></li>
                                                        <li><a href="#">Headphone</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li><img src="assets/images/ele-menu-img04.jpg" alt=" "></li>
                                                        <li class="wstheading clearfix">Wearable Device</li>
                                                        <li><a href="#">Activity Trackers </a></li>
                                                        <li><a href="#">Sports & GPS Watches</a></li>
                                                        <li><a href="#">Smart Watches</a> <span class="wstmenutag greentag">New</span></li>
                                                        <li><a href="#">Virtual Reality Headsets</a></li>
                                                        <li><a href="#">Wearable Cameras</a></li>
                                                        <li><a href="#">Smart Glasses</a></li>
                                                        <li><a href="#">Kids & Pets</a></li>
                                                        <li><a href="#">Smart Sport Accessories</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fas fa-laptop"></i>Computers &amp; Game</a>
                                    <div class="wstitemright clearfix computermenubg">
                                        <div class="wstmegamenucoll01 clearfix">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="wstheading clearfix">Monitors <a href="#" class="wstmorebtn">View All</a></div>
                                                        <ul class="wstliststy03 clearfix">
                                                            <li><a href="#">50 Inches <span class="wstmenutag greentag">New</span></a></li>
                                                            <li><a href="#">40 to 49.9 Inches </a></li>
                                                            <li><a href="#">30 to 39.9 Inches</a></li>
                                                            <li><a href="#">26 to 29.9 Inches</a></li>
                                                            <li><a href="#">18 to 19.9 Inches</a></li>
                                                            <li><a href="#">16 to 17.9 Inches</a></li>
                                                            <li><a href="#">26 to 29.9 Inches</a></li>
                                                            <li><a href="#">18 to 19.9 Inches</a></li>
                                                            <li><a href="#">16 to 17.9 Inches</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="wstheading clearfix">Software <a href="#" class="wstmorebtn">View All</a></div>
                                                        <ul class="wstliststy03 clearfix">
                                                            <li><a href="#">Antivirus & Security</a> </li>
                                                            <li><a href="#">Business </a> <span class="wstmenutag orangetag">Exclusive</span></li>
                                                            <li><a href="#">Web Design</a> </li>
                                                            <li><a href="#">Digital Software</a> </li>
                                                            <li><a href="#">Education & Reference</a> </li>
                                                            <li><a href="#">Lifestyle & Hobbies</a> </li>
                                                            <li><a href="#">Digital Software</a> </li>
                                                            <li><a href="#">Education & Reference</a> </li>
                                                            <li><a href="#">Lifestyle & Hobbies</a> </li>
                                                        </ul>

                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="wstheading clearfix">Accessories <a href="#" class="wstmorebtn">View All</a></div>
                                                        <ul class="wstliststy03 clearfix">
                                                            <li><a href="#">Audio & Video Accessories</a> </li>
                                                            <li><a href="#">Cable Security Devices</a> </li>
                                                            <li><a href="#">Input Devices </a> </li>
                                                            <li><a href="#">Memory Cards</a> </li>
                                                            <li><a href="#">Monitor Accessories</a> </li>
                                                            <li><a href="#">USB Gadgets</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fas fa-car"></i>Auto accessories</a>
                                    <div class="wstitemright clearfix wstpngsml">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy04 clearfix">
                                                        <li><img src="assets/images/auto-menu-img01.jpg" alt=" "></li>
                                                        <li class="wstheading clearfix"><a href="#">Interior</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy04 clearfix">
                                                        <li><img src="assets/images/auto-menu-img02.jpg" alt=" "></li>
                                                        <li class="wstheading clearfix"><a href="#">Styling</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy04 clearfix">
                                                        <li><img src="assets/images/auto-menu-img03.jpg" alt=" "></li>
                                                        <li class="wstheading clearfix"><a href="#">Utility</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy04 clearfix">
                                                        <li><img src="assets/images/auto-menu-img04.jpg" alt=" "></li>
                                                        <li class="wstheading clearfix"><a href="#">Spare Parts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy04 clearfix">
                                                        <li><img src="assets/images/auto-menu-img05.jpg" alt=" "></li>
                                                        <li class="wstheading clearfix"><a href="#">Protection</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy04 clearfix">
                                                        <li><img src="assets/images/auto-menu-img06.jpg" alt=" "></li>
                                                        <li class="wstheading clearfix"><a href="#">Cleaning</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy04 clearfix">
                                                        <li><img src="assets/images/auto-menu-img07.jpg" alt=" "></li>
                                                        <li class="wstheading clearfix"><a href="#">Car Audio</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy04 clearfix">
                                                        <li><img src="assets/images/auto-menu-img08.jpg" alt=" "></li>
                                                        <li class="wstheading clearfix"><a href="#">Gear & Accessories</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fas fa-heartbeat"></i>Health Care Products</a>
                                    <div class="wstitemright clearfix wstpngsml">
                                        <div class="container-fluid">


                                            <div class="row">
                                                <div class="col-lg-4 col-md-12 wstmegamenucolr03 clearfix"><a href="#"><img src="assets/images/health-menu-img01.jpg"
                                                                                                                            alt=""></a></div>
                                                <div class="col-lg-8 col-md-12 clearfix">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-12">
                                                                <ul class="wstliststy05 clearfix">
                                                                    <li><img src="assets/images/health-menu-img02.jpg" alt=" "></li>
                                                                    <li class="wstheading clearfix">Health Care</li>
                                                                    <li><a href="#">Diabetes </a></li>
                                                                    <li><a href="#">Incontinence </a></li>
                                                                    <li><a href="#">Cough & Cold</a></li>
                                                                    <li><a href="#">Baby Care</a> <span class="wstmenutag orangetag">Hot</span></li>
                                                                    <li><a href="#">Women's Health</a></li>
                                                                    <li><a href="#">First Aid</a></li>
                                                                    <li><a href="#">Smoking Cessation</a></li>
                                                                    <li><a href="#">Sleep & Snoring</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-4 col-md-12">
                                                                <ul class="wstliststy05 clearfix">
                                                                    <li><img src="assets/images/health-menu-img03.jpg" alt=" "></li>
                                                                    <li class="wstheading clearfix">Personal Care</li>
                                                                    <li><a href="#">Hair Removal</a></li>
                                                                    <li><a href="#">Feminine Hygiene</a></li>
                                                                    <li><a href="#">Oral <span class="wstmenutag bluetag">Popular</span></a></li>
                                                                    <li><a href="#">Foot Care</a> </li>
                                                                    <li><a href="#">Hand Care</a></li>
                                                                    <li><a href="#">Personal Care Appliances</a></li>
                                                                    <li><a href="#">Foams & Creams</a></li>
                                                                    <li><a href="#">Hair Removal Creams</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-4 col-md-12">
                                                                <ul class="wstliststy05 clearfix">
                                                                    <li><img src="assets/images/health-menu-img04.jpg" alt=" "></li>
                                                                    <li class="wstheading clearfix">Medical Equipment</li>
                                                                    <li><a href="#">Tapes <span class="wstmenutag redtag">Sale</span></a></li>
                                                                    <li><a href="#">Neck Supports</a></li>
                                                                    <li><a href="#">Arm Supports</a> </li>
                                                                    <li><a href="#">Elbow Braces</a></li>
                                                                    <li><a href="#">Knee & Leg Braces</a></li>
                                                                    <li><a href="#">Ankle Braces</a></li>
                                                                    <li><a href="#">Foot Supports</a></li>
                                                                    <li><a href="#">Crepe Bandages</a></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!--                <li class="float-right" style="float: right;" aria-haspopup="true"><a href="#" class="navtext"><span class="top-span"></span> <span>Half Menu</span></a>-->
                <!--                    <div class="wsmegamenu clearfix halfmenu">-->
                <!--                        <div class="container-fluid">-->
                <!--                            <div class="row">-->
                <!--                                <div class="col-lg-6 col-md-12">-->
                <!--                                    <ul class="wstliststy06 clearfix">-->
                <!--                                        <li class="wstheading clearfix">Windows Products</li>-->
                <!--                                        <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>-->
                <!--                                        <li><a href="#">List Products 02</a></li>-->
                <!--                                        <li><a href="#">List Products 03</a></li>-->
                <!--                                        <li><a href="#">List Products 04</a> </li>-->
                <!--                                        <li><a href="#">List Products 05</a> </li>-->
                <!--                                        <li><a href="#">List Products 06</a></li>-->
                <!--                                    </ul>-->
                <!--                                </div>-->
                <!--                                <div class="col-lg-6 col-md-12">-->
                <!--                                    <ul class="wstliststy06 clearfix">-->
                <!--                                        <li class="wstheading clearfix">Apple More Products</li>-->
                <!--                                        <li><a href="#">List Products 07 </a></li>-->
                <!--                                        <li><a href="#">List Products 08</a></li>-->
                <!--                                        <li><a href="#">List Products 09</a></li>-->
                <!--                                        <li><a href="#">List Products 10</a> </li>-->
                <!--                                        <li><a href="#">List Products 11 </a></li>-->
                <!--                                        <li><a href="#">List Products 12</a></li>-->
                <!--                                    </ul>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <li class="float-right"> <a href="index.php" class="navtext single-nav"><span class="top-span"></span> <span>Home</span></a> </li>


                <!--                <li aria-haspopup="true" class="wsshopmyaccount"><a href="#"><i class="fas fa-align-justify"></i>My&nbsp;Account</a>-->
                <!--                    <ul class="sub-menu">-->
                <!--                        <li><a href="#"><i class="fas fa-user-tie"></i>View Profile</a></li>-->
                <!--                        <li><a href="#"><i class="fas fa-heart"></i>My Wishlist</a></li>-->
                <!--                        <li><a href="#"><i class="fas fa-bell"></i>Notification</a></li>-->
                <!--                        <li><a href="#"><i class="fas fa-question-circle"></i>Help Center</a></li>-->
                <!--                        <li><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->


            </ul>
        </nav>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg magnum-modal" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="login-modal">
                    <div class="row h-100">
                        <div class="col-6 img-row" style="background-image: url('assets/images/login_bg.jpg');">
                            <div class="row">
                                <div class="create-content p-5">
                                    <h4>Create Account</h4>
                                    <a href="#" class="btn btn-primary btn-login-signup" data-toggle="modal" data-target="#signup" data-dismiss="modal">Signup</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 my-auto p-5">
                            <h4>Login</h4>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  aria-describedby="emailHelp" placeholder="Password">
                                </div>
                                <div class="text-center">
                                    <p>Forgot Password</p>
                                    <button class="btn btn-primary login-btn" style="">Log In</button>
                                    <p><a href="#" data-toggle="modal" data-target="#signup" data-dismiss="modal">Signup</a> | <a href="forgot_password.php">Forgot Password</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <a href="#" class="modal-dismiss-login" data-dismiss="modal"><i class="fas fa-times"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg magnum-modal" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="login-modal">
                    <div class="row h-100">
                        <div class="col-6 my-auto p-5">
                            <h4>Signup</h4>
                            <form>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control"  aria-describedby="emailHelp" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <p>Password must be a combination of numbers, letters and special chareacters.</p>
                                    <button class="btn btn-primary signup-btn" style="">Submit</button>
                                    <p><a href="#"  data-toggle="modal" data-target="#login" data-dismiss="modal">Login</a> | <a href="forgot_password.php">Forgot Password</a></p>
                                </div>
                            </form>
                        </div>
                        <div class="col-6 img-row" style="background-image: url('assets/images/signup.jpg');">
                            <div class="row">
                                <div class="col-12 create-content p-5 text-right">
                                    <h4>Have and Account?</h4>
                                    <a href="#" class="btn btn-primary btn-login-signup" data-toggle="modal" data-target="#login" data-dismiss="modal">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="modal-dismiss-signup" data-dismiss="modal"><i class="fas fa-times"></i></a>
            </div>
        </div>
    </div>
</div>