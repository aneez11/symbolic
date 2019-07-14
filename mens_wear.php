<?php include('header.php') ?>
<style media="screen">

</style>
<div id="breadcrumbs">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Product</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shirt</li>
      </ol>
    </nav>
  </div>
</div>
<section id="details_body">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="range-slider">
          <h3 class="text-center">FILTER BY <grey>PRICE</grey></h3>
          <div id="advance_slide"></div>
          <div class="variable">
            <span id="state"></span>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-6">
            <h3 class="">PRODUCT <grey>MEN'S WEAR</grey></h3>
          </div>
          <div class="col-6">
            <div class="search seperate-search">
              <form class="" action="" method="post">
                <div>
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Product Search" aria-describedby="inputGroupPrepend2" required>
                    <div class="input-group-prepend">
                      <button class="input-group-text" id="inputGroupPrepend2" style=" "><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="indexing">
          <div class="row">
            <div class="col-6">
              <div class="dropdown sort-drop">
                Sort By:
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Default
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="dropdown show-drop">
                Showing:
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  8
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="side-filter">
          <div class="card category-card">
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
        <div class="name_top" style="border-top:2px solid black;">
          <a href="#" class="btn" type="button" name="button">T-Shirts <i class="fas fa-chevron-down"></i> </a>

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
    </div>
  </div>
</section>

<?php include('footer.php') ?>
