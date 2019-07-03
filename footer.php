

<style media="screen">
footer{
  /* height: 400px; */
  background: #0d234c;
  color: white;
  padding: 15px 0px 15px 0px;
}
.footer-row{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.b-l{
  border-left: 2px solid #0589c7;
}
.col-half h6,.col-half a,.col-half p{
  color: white;
}
.col-half h6{
  font-weight: 800;
  font-size: 20px;
}
.col-half ul{
  list-style: none;
  padding-left: 0px;
}
.footer-row .col-half{
  /* background-color: red; */
  width: 18.8%;
  margin: 5px;
  padding: 10px;
}

.footer-ext p{
  color: white;
  padding-top: 15px;
}
.footer-ext{
  height: 100%;
  background: #0a1e43;
  border-top: 2px solid #36425c;
}
.subscribe input{
  border-radius: 20px 0px 0px 20px;
    border-top: 2px solid grey;
    border-left: 2px solid grey;
    border-bottom: 2px solid grey;
    background-color: #959595; color: white;
    height: 40px;
}
.subscribe input::placeholder {
  color: black;
  font-size: 12px;
}
.subscribe button{
  background-color: #363636;
  border: none;
  border-radius: 0px 20px 20px 0px !important;
  border-top: 2px solid grey;
  border-right: 2px solid grey;
  border-bottom: 2px solid grey;
  color:white;
}
</style>
<footer>
  <div class="container">
    <div class="footer">
      <div class="row footer-row">
        <div class="col-half p-0">
          <img style="width:100%;" src="assets/images/logo2.jpg" alt="">
        </div>
        <div class="col-half b-l">
          <h6>Men's Collection</h6>
          <ul>
            <li> <a href="#">Hoodie</a> </li>
            <li> <a href="#">T-Shirts</a> </li>
            <li> <a href="#">Boots</a> </li>
          </ul>
        </div>
        <div class="col-half b-l">
          <h6>Women's Collection</h6>
          <ul>
            <li> <a href="#">Accessories</a> </li>
            <li> <a href="#">Jeans</a> </li>
            <li> <a href="#">Others</a> </li>
          </ul>
        </div>
        <div class="col-half b-l">
          <p>Follow us @</p>
          <div class="top-social inline">
            <ul>
              <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
              <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
              <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
              <li> <a href="#"><i class="fab fa-youtube"></i></a> </li>
            </ul>
          </div>
        </div>
        <div class="col-half b-l subscribe">
          Subscribe to Newletter
          <form class="" action="" method="post">
            <div>
              <div class="input-group">
                <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Enter Email Address.." aria-describedby="inputGroupPrepend2" required>
                  <div class="input-group-prepend">
                    <button class="input-group-text" id="inputGroupPrepend2" style=" ">Go!</button>
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="contaier-fluid p-0 m-0 footer-ext">
  <div class="container text-center">
    <p>Copyright &copy; Symbolic Fashion | Designed & Developed by Jata Media (p) Ltd.</p>
  </div>
</div>
</div>

<script src="assets/js/bootstrap.js" charset="utf-8"></script>
<script src="assets/js/bootstrap.bundle.js" charset="utf-8"></script>
<script src="assets/js/magnum-custom.js" charset="utf-8"></script>

</body>
</html>
