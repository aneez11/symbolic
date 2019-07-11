<?php include('header.php'); ?>
<style media="screen">
#user_dashboard{
  margin: 50px 0px;
}
.update-p-pw {
    display: flex;
    justify-content: center;
    text-align: center;
    border-top: 1px solid red;
    border-bottom: 1px solid red;
    margin: 10px 0px;
}
.update-p-pw a {
    padding: 10px;
}
.tab-content{
  margin: 30px 0px;
}
.image img{
  max-height: 150px;
}
.comments{
  font-size: 12px;
  text-align: justify;
}
.comments ul{
  list-style: circle;
}
.wishlist img{
  max-height: 100px;
}
#user_dashboard .reviews .table th,#user_dashboard  .reviews .table td {
  vertical-align: top;
}
#user_dashboard .table th,#user_dashboard .table td {
  vertical-align: middle;
}
</style>
<section id="user_dashboard">
  <div class="container">
    <div class="Comments">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile and Settings</a>
          <a class="nav-item nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false">Orders</a>
          <a class="nav-item nav-link" id="wishlist-tab" data-toggle="tab" href="#wishlist" role="tab" aria-controls="wishlist" aria-selected="false">Wishlist</a>
          <a class="nav-item nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews and Ratings</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="row p-0 m-0">
            <div class="col-md-4">
              <div class="profile">
                <h6>Profile Details</h6>
                <table style="width:100%;">
                  <tr>
                    <th style="width:50%">Name:</th>
                    <td>Magnum Hunter</td>
                  </tr>
                  <tr>
                    <th>Email: </th>
                    <td>Abc@123.com</td>
                  </tr>
                  <tr>
                    <th>Mobile: </th>
                    <td>9812345678</td>
                  </tr>
                </table>
                <div class="update-p-pw">
                  <a href="#" data-toggle="collapse" data-target="#update" aria-expanded="false" aria-controls="update">Update Profile Info</a>
                  <a>|</a>
                  <a href="#" data-toggle="collapse" data-target="#password" aria-expanded="false" aria-controls="password">Change Password</a>
                </div>


                <div class="collapse" id="update">
                  <div class="card card-body">
                    <form class="" action="" method="post">
                      <table class="table">
                        <tr>
                          <th>Name</th>
                          <td><input type="text" class="form-control" id="" placeholder=""></td>
                        </tr>
                        <tr>
                          <th>Primary Email</th>
                          <td><input type="email" class="form-control" id="" placeholder=""></td>
                        </tr>
                        <tr>
                          <th>Mobile</th>
                          <td><input type="text" class="form-control" id="" placeholder=""></td>
                        </tr>
                      </table>
                      <button style="float:right" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
                <div class="collapse" id="password">
                  <div class="card card-body">
                    <form class="" action="" method="post">
                    <table class="table">
                      <tr>
                        <th>Enter Old Password</th>
                        <td><input type="password" class="form-control" id="" placeholder=""></td>
                      </tr>
                      <tr>
                        <th>Enter New Password</th>
                        <td><input type="password" class="form-control" id="" placeholder=""></td>
                      </tr>
                      <tr>
                        <th>Confirm New Password</th>
                        <td><input type="password" class="form-control" id="" placeholder=""></td>
                      </tr>
                    </table>
                    <button style="float:right;" type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="acc-details">
                <h6>Account Details</h6>
                <form class="" action="" method="post">
                  <table style="width:100%">
                    <tr>
                      <th>Gender</th>
                      <td>
                        <div class="form-group">
                          <select class="form-control" id="">
                            <option>Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>Date of Birth </th>
                      <td>
                        <div class="form-group">
                          <input type="text" class="form-control" id="" placeholder="DD/MM/YY">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>Secondary Email </th>
                      <td>
                        <div class="form-group">
                          <input type="email" class="form-control" id="" placeholder="">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>District </th>
                      <td>
                        <div class="form-group">
                          <input type="text" class="form-control" id="" placeholder="">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>City </th>
                      <td>
                        <div class="form-group">
                          <input type="text" class="form-control" id="" placeholder="">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>Address 1 </th>
                      <td>
                        <div class="form-group">
                          <input type="text" class="form-control" id="" placeholder="">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>Address 2 </th>
                      <td>
                        <div class="form-group">
                          <input type="text" class="form-control" id="" placeholder="">
                        </div>
                      </td>
                    </tr>
                  </table>
                  <button style="float:right;width:50%;" type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
            <div class="col-md-3">
              <div class="sub_unsub">
                <h6>Subscribe/Unsubscribe</h6>
                <p>(Turn on/off notification for newsletters,offers,coupons from the Symbolic Fashion)</p>
                <div class="radios">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
          <div class="orders">
            <table class="table text-center">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Product</th>
                  <th scope="col">Order Date</th>
                  <th scope="col">Order Status</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i=0; $i < 5; $i++) {
                  // code...
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i+1; ?></th>
                    <td class="text-center">
                      <div class="image">
                        <img src="assets/images/products/<?php echo $i+4; ?>.png" alt="">
                      </div>
                    </td>
                    <td>05/10/2019</td>
                    <td>Pending</td>
                  </tr>
                  <?php
                } ?>
              </tbody>
            </table>
            <section id="pagination">
              <div class="container">
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <i class="fas fa-chevron-left"></i> </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"> <i class="fas fa-chevron-right"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </section>
          </div>
        </div>
        <div class="tab-pane fade" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
          <div class="wishlist text-center">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i=0; $i < 5; $i++) {  ?>
                  <tr>
                    <th scope="row"><?php echo $i+1; ?></th>
                    <td><img src="assets/images/products/<?php echo $i+1; ?>.png" alt=""></td>
                    <td>Rs. 3,500.00</td>
                    <td style="display:inline-grid; padding-top:30px;">
                      <button style="" type="submit" class="btn btn-primary">Submit</button>
                      <!-- <button style="" type="submit" class="btn btn-warning">Remove from Wishlist</button> -->
                      <a href="#">Remove from Wishlist</a>
                    </td>
                  </tr>
                <?php  } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
          <div class="reviews">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" width="5%">#</th>
                  <th scope="col">Date</th>
                  <th scope="col"  class="text-center" >Product</th>
                  <th scope="col"  class="text-center" width="15%">Rating</th>
                  <th scope="col" width="35%">Comment</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i=0; $i <3 ; $i++) {
                  // code...
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i+1; ?></th>
                    <td><h6>Date: <br><small>2072/12/12</small> </h6></td>
                    <td class="text-center">
                      <div class="image">
                        <img src="assets/images/products/<?php echo $i+1; ?>.png" alt="">
                      </div>
                    </td>
                    <td>
                      <div class="ratings text-center">
                        <ul class="item-rating">
                          <li> <i class="fas fa-star"></i> </li>
                          <li> <i class="fas fa-star"></i> </li>
                          <li> <i class="fas fa-star"></i> </li>
                          <li> <i class="fas fa-star"></i> </li>
                          <li> <i class="fas fa-star"></i> </li>
                        </ul>
                      </div>
                    </td>
                    <td style="font-size:12px;">
                      <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                      </ul>
                    </td>
                  </tr>
                  <?php
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
