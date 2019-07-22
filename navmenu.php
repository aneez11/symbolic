<style media="screen">


</style>
<div class="nav-top my-auto">
    <div class="container">
        <div class="nav-top-holder text-right">
            <p class="nav-top-text inline"><i class="fas fa-phone"></i> &nbsp;&nbsp;98123456789,98xxxxxxxx,xxxxxxxxxx</p>
            <div class="top-social inline">
                <ul>
                    <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                    <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                    <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
                    <li> <a href="#"><i class="fab fa-youtube"></i></a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light " style="border-bottom:1px solid grey;">
    <div class="container">
        <a class="navbar-brand" href="#"> <img src="assets/images/logo.jpg" alt=""> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="mobile-login">
            <li class="nav-item text-center" style="border-left:1px solid black;width: 60px;">
                <a class="nav-link login-pop" href="#"><i class="fas fa-user"></i></a>
                <div class="login-container" style="display: none;">
                    <ul class='login-popper'>
                        <li><a href='#' class="login_btn">Login</a></li>
                        <li><a href='#' class="signup_btn">Signup</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item text-center" style="border-left:1px solid black;width: 60px;">
                <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i><span style="position: absolute;top: 5px;" class="badge badge-light">9</span> </a>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Men's Wear
                    </a>
                    <ul class="dropdown-menu mega-menu">
                        <li class="mega-menu-column">
                            <h6>Our Best Selling</h6>
                            <img src="assets/images/products/1.png">
                        </li>
                        <li class="mega-menu-column">
                            <ul style="display: grid;">
                                <li class="nav-header"><h6>Shoes</h6></li>
                                <li><a href="#">Party</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Casual</a></li>
                            </ul>
                        </li>
                        <li class="mega-menu-column">
                            <ul style="display: grid;">
                                <li class="nav-header"><h6>Watches</h6></li>
                                <li><a href="#">Party</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Casual</a></li>
                            </ul>
                        </li>
                    </ul><!-- dropdown-menu -->

                </li><!-- /.dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Women's Wear
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item text-center not-mobile" style="border-left:1px solid black;width: 60px;">
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-cart"></i>
                        <span style="position: absolute;top: 10px;" class="badge badge-light">9</span>
                    </a>
                </li>
                <li class="nav-item text-center not-mobile" style="border-left:1px solid black;width: 60px;">
                    <a class="nav-link login-pop" href="#"><i class="fas fa-user"></i></a>
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
                <li class="nav-item text-center not-mobile" style="border-left:1px solid black;width: 60px;">
                    <a class="nav-link logged-pop" href="#"><i class="fas fa-user"></i></a>
                    <div class="logged-container" style="display: none;">
                        <ul class='loggedin-popper'>
                            <li><b>Magnum Hunter</b></li>
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $('.logged-pop').popover({
                                content: $( ".logged-container" ).html(),
                                html: true,
                                trigger: "focus",
                                placement: "bottom"});
                        });
                    </script>
                </li>
            </ul>
        </div>

    </div>
</nav>

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
                                    <button class="btn btn-primary" style="width: 50%;">Submit</button>
                                    <p><a href="#" data-toggle="modal" data-target="#signup" data-dismiss="modal">Signup</a> | <a href="#">Forgot Password</a></p>
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
                                    <button class="btn btn-primary" style="width: 50%;">Submit</button>
                                    <p><a href="#"  data-toggle="modal" data-target="#login" data-dismiss="modal">Login</a> | <a href="#">Forgot Password</a></p>
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
<script>
    // $(document).ready(function(){
    //     $(".dropdown").hover(
    //         function() { $('.dropdown-menu', this).fadeIn("fast");
    //         },
    //         function() { $('.dropdown-menu', this).fadeOut("slow");
    //         });
    // });
</script>