<style media="screen">
    .magnum-modal .modal-content{
        border: none;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        box-shadow: 0 0 16px 2px #464646;
    }
    .magnum-modal .modal-body{
        height: 80vh;
        padding: 0px;
        overflow: hidden;
    }
    .magnum-modal .modal-body .img-row{
        height: 80vh;
    }
    .magnum-modal .img-row{
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .magnum-modal .create-content{
        text-align: center;
    }
    .magnum-modal .modal-dismiss-login{
        position: absolute;
        top: 0;
        right: 0;
        margin: 10px;
        border: 1px solid black;
        padding: 2px 10px;
    }
    .magnum-modal .modal-dismiss-signup{
        position: absolute;
        top: 0;
        left: 0;
        margin: 10px;
        border: 1px solid black;
        padding: 2px 10px;
    }
    
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

    <a class="navbar-brand" href="#"> <img style="height:50px;" src="assets/images/logo.jpg" alt=""> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Men's Wear
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
          <li class="nav-item">
              <a data-toggle="popover" data-container="body" data-placement="right" type="button" data-html="true" href="#" id="login">
                  popover
              </a>
              <div id="popover-content" style="display: none;">
                  <div class="form-group" style="padding-left:0px">
                      <div class="row">
                          <div class="col-xs-6 col-md-6 col-lg-6">
                              kjlkjljlk
                          </div>
                      </div>
                  </div>
              </div>
              <script>
                  $(function() {
                      $("[data-toggle=popover]").popover({
                          html: true,
                          content: function() {
                              return $('#popover-content').html();
                          }
                      });
                      $(document).on('click', "#button2", function() {
                          $('#exampleModalCenter').modal('show');
                      });
                  });
              </script>
          </li>
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
        <li class="nav-item text-center" style="border-left:1px solid black;width: 60px;">
          <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> &nbsp; <span>4</span> </a>
        </li>
        <li class="nav-item text-center" style="border-left:1px solid black;width: 60px;">
          <a class="nav-link pop" href="#"><i class="fas fa-user"></i></a>
            <div class="login-container" style="display: none;">
                <ul class='login-popper'>
                    <li><button type="button" id="button2" class="btn pull-right">btn2</button></li>
                    <li><a href=''>Signup</a></li>
                </ul>
            </div>
        </li>
        <script type="text/javascript">
        $(document).ready(function(){
          $('.fa-user').popover({title: "Header", content: "Blabla", container: ".parent"});
        });
        $(document).ready(function(){
          $('.pop').popover({
            content: $( ".login-container" ).html(),
            html: true,
            placement: "bottom"});
          });
        $(document).on('click', "#button2", function() {
            $('#exampleModalCenter').modal('show');
        });
          </script>
          <li class="nav-item text-center" style="border-left:1px solid black;width: 60px;">
            <a class="nav-link logged-pop" href="#"><i class="fas fa-user"></i></a>
          </li>
          <script type="text/javascript">
          $(document).ready(function(){
            $('.fa-user').popover({title: "Header", content: "Blabla", container: ".parent"});
          });
          $(document).ready(function(){
            $('.logged-pop').popover({
              content: "<ul class='loggedin-popper'><li><b>Magnum Hunter</b></li><li><a href=''>My Profile</a></li><li><a href=''>Logout</a></li></ul>",
              html: true,
              trigger: "focus",
              placement: "bottom"});
            });
            </script>
          </ul>
        </div>
      </div>
    </nav>
<a onclick="$('#login').modal('show');" >Login</a>
<a onclick="$('#signup').modal('show');" >Signup</a>
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
                                    <a href="#" class="btn btn-primary btn-login-signup">Signup</a>
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
                                    <p><a href="#">Signup</a> | <a href="#">Forgot Password</a></p>
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
                                    <p><a href="#" onclick="$('#signup').modal('hide');$('#login').modal('show');" >Login</a> | <a href="#">Forgot Password</a></p>
                                </div>
                            </form>
                        </div>
                        <div class="col-6 img-row" style="background-image: url('assets/images/signup.jpg');">
                            <div class="row">
                                <div class="col-12 create-content p-5 text-right">
                                    <h4>Have and Account?</h4>
                                    <a href="#" class="btn btn-primary btn-login-signup">Login</a>
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
