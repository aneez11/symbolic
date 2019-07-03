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
<nav class="navbar navbar-expand-lg navbar-light ">
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
        </li>
        <script type="text/javascript">
        $(document).ready(function(){
          $('.fa-user').popover({title: "Header", content: "Blabla", container: ".parent"});
        });
        $(document).ready(function(){
          $('.pop').popover({
            content: "<ul class='login-popper'><li><a href=''>Login</a></li><li><a href=''>Signup</a></li></ul>",
            html: true,
            trigger: "focus",
            placement: "bottom"});
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
