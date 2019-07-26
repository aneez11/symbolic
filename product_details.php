<?php include('header.php') ?>
<style media="screen">

</style>
<div id="breadcrumbs">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product Page</li>
      </ol>
    </nav>
  </div>
</div>
<section id="product_details">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="side-filter">
          <div class="card">
            <article class="card-group-item">
              <header class="card-header">
                <h4 class="title">Categories </h4>
              </header>
              <div class="filter-content">
                <div class="card-body">
                  <div class="men">
                    <h6>Men's Wear</h6>
                    <ul>
                      <li> <a href="#">Shirts</a> </li>
                      <li> <a href="#">T-Shirts</a> </li>
                      <li> <a href="#">Pants</a> </li>
                      <li> <a href="#">Hoodies</a> </li>
                      <li> <a href="#">Shoes</a> </li>
                    </ul>
                  </div>
                  <div class="women">
                    <h6>Women's Wear</h6>
                    <ul>
                      <li> <a href="#">Shirts</a> </li>
                      <li> <a href="#">T-Shirts</a> </li>
                      <li> <a href="#">Pants</a> </li>
                      <li> <a href="#">Hoodies</a> </li>
                      <li> <a href="#">Shoes</a> </li>
                    </ul>
                  </div>
                  <div class="offer">
                    <h6>Best Offers</h6>
                    <ul>
                      <li> <a href="#">Shirts</a> </li>
                      <li> <a href="#">T-Shirts</a> </li>
                      <li> <a href="#">Pants</a> </li>
                      <li> <a href="#">Hoodies</a> </li>
                      <li> <a href="#">Shoes</a> </li>
                    </ul>
                  </div>
                  <div class="collection">
                    <h6>Best Collection</h6>
                    <ul>
                      <li> <a href="#">Shirts</a> </li>
                      <li> <a href="#">T-Shirts</a> </li>
                      <li> <a href="#">Pants</a> </li>
                      <li> <a href="#">Hoodies</a> </li>
                      <li> <a href="#">Shoes</a> </li>
                    </ul>
                  </div>
                </div> <!-- card-body.// -->
              </div>
            </article> <!-- card-group-item.// -->
          </div> <!-- card.// -->
        </div>
      </div>
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="row details-image ">
              <div class="col-12 p-0 m-0 h-100">
                <div class="my-auto">
                  <img class="" id="expandedImg" src="assets/img/Tshirt_Product%20Details.png" alt="">
                </div>
              </div>
            </div>
            <div class="row sub-details">
                <div class="owl-carousel owl-theme owl-carousel-product">
                    <div class="item">
                        <img src="assets/img/Tshirt_Product%20Details.png" alt="" onclick="myFunction(this);">
                    </div>
                    <?php
                    for ($i=0; $i<5; $i++){
                        ?>
                    <div class="item">
                        <img src="assets/images/products/<?php echo $i+1;?>.png" alt="" onclick="myFunction(this);">
                    </div>
                    <?php
                    };
                    ?>
                    <div style="display: none" class="item"><h4>!!!Do not Remove!!!</h4></div>
                </div>
            </div>
          </div>
          <div class="col-md-8 details-div">
            <h2 class="product-title">Boots of Leather</h2>
            <div class="cat-price">
              <p class="category">Boots of Foots</p>
              <p class="Price">Rs.3,000.00</p>
            </div>
            <div class="cart-button">
              <button class="add-to-cart-btn" type="button" name="button">Add To Cart</button>
            </div>
            <div class="colors">
              <h6>Color</h6>
              <div class="color-pallet">
                <div class="color yellow" style="background:yellow;"></div>
                <div class="color green" style="background:green;"></div>
                <div class="color black" style="background:black;"></div>
                <div class="color red" style="background:red;"></div>
              </div>
            </div>
            <div class="size">
              <h6>Size</h6>
              <div class="size-group">
                <ul>
                  <li>XXXXL</li>
                  <li>XXL</li>
                  <li>XL</li>
                  <li>L</li>
                  <li>M</li>
                  <li>S</li>
                </ul>
              </div>
            </div>
            <div class="quantity">
              <button class="btn value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</button>
              <input type="number" id="number" value="0" />
              <button class="btn value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</button>
            </div>
            <div class="wish-compare">
              <button type="button" name="button">Add to Wishlist</button>
              <button type="button" name="button">Compare</button>
            </div>
            <div class="ratings">
              <h6>Oerall Rating</h6>
              <ul class="item-rating">
                <li> <i class="fas fa-star"></i> </li>
                <li> <i class="fas fa-star"></i> </li>
                <li> <i class="fas fa-star"></i> </li>
                <li> <i class="fas fa-star"></i> </li>
                <li> <i class="fas fa-star"></i> </li>
              </ul>
            </div>
            <div class="Comments">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Additional Information</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">reviews</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
      <div class="heading text-center">
          <h2>Related Products</h2>
      </div>
    <div class="owl-carousel owl-theme">
      <?php for ($i=1; $i <=6 ; $i++) {
        ?>
        <div class="text-center item">
          <div class="item-col">
            <div class="image">
              <img src="assets/images/products/7.png" alt="">
            </div>
            <div class="text">
              <h5 class="item-name">Shirt <?php echo 2*$i-1; ?></h5>
              <p class="item-sub-name">Product category <?php echo 2*$i-1; ?></p>
              <p class="item-price">Rs. <?php echo 2*$i-1; ?>,000.00</p>
              <ul class="item-rating">
                <li> <i class="fas fa-star"></i> </li>
                <li> <i class="fas fa-star"></i> </li>
                <li> <i class="fas fa-star"></i> </li>
                <li> <i class="fas fa-star"></i> </li>
                <li> <i class="fas fa-star"></i> </li>
              </ul>
              <a  class="page-link" href="#" style="display:none;">URL for details page</a>
              <a href="#" class="btn" type="button" name="button">Add to Cart</a>
            </div>
            <div class="new-product">
              <p>NEW</p>
            </div>
          </div>
        </div>
        <div class=" text-center item">
          <div class="item-col">
            <div class="image">
              <img src="assets/images/products/7.png" alt="">
            </div>
            <div class="text">
              <h5 class="item-name">Shirt <?php echo 2*$i; ?></h5>
              <p class="item-sub-name">Product category <?php echo 2*$i; ?></p>
              <p class="item-price">Rs. <?php echo 2*$i; ?>,000.00</p>
              <ul class="item-rating">
                <li> <i class="fas fa-star"></i> </li>
                <li> <i class="fas fa-star"></i> </li>
                <li> <i class="fas fa-star"></i> </li>
                <li> <i class="fas fa-star"></i> </li>
                <li> <i class="fas fa-star"></i> </li>
              </ul>
              <a  class="page-link" href="#" style="display:none;">URL for details page</a>
              <a href="#" class="btn" type="button" name="button">Add to Cart</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>
<?php include('footer.php') ?>
