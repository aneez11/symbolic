<?php include('header.php') ?>
<style media="screen">
.breadcrumb {
  background-color: transparent;
}
.breadcrumb a{
  color: black;
}
.breadcrumb-item + .breadcrumb-item::before {
  content: ">>";
}
.image-div img{
  width: 100%;
}
.second{
  margin-top: 15px;
}
.second img{
  width: 100%;
}
.item-col{
  height: 200px;
  background-color:
}
.item-col img{

}
</style>
<section id="breadcrumbs">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product Page</li>
      </ol>
    </nav>
  </div>
</section>
<section id="details_body">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <article class="card-group-item">
            <header class="card-header">
              <h6 class="title">Brands </h6>
            </header>
            <div class="filter-content">
              <div class="card-body">
                <form>
                  <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label">
                      Mersedes Benz
                    </span>
                  </label> <!-- form-check.// -->
                  <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label">
                      Nissan Altima
                    </span>
                  </label>  <!-- form-check.// -->
                  <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label">
                      Another Brand
                    </span>
                  </label>  <!-- form-check.// -->
                </form>
              </div> <!-- card-body.// -->
            </div>
          </article> <!-- card-group-item.// -->
          <article class="card-group-item">
            <header class="card-header">
              <h6 class="title">Choose type </h6>
            </header>
            <div class="filter-content">
              <div class="card-body">
                <label class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadio" value="">
                  <span class="form-check-label">
                    First hand items
                  </span>
                </label>
                <label class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadio" value="">
                  <span class="form-check-label">
                    Brand new items
                  </span>
                </label>
                <label class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadio" value="">
                  <span class="form-check-label">
                    Some other option
                  </span>
                </label>
              </div> <!-- card-body.// -->
            </div>
          </article> <!-- card-group-item.// -->
        </div> <!-- card.// -->
      </div>
      <div class="col-md-8">
        <div class="image-div">
            <img src="assets/images/banner.png" alt="">
        </div>
        <div class="second row">
          <div class="col-md-4">
            <img src="assets/images/dummy/suit.jpeg" alt="">
          </div>
          <div class="col-md-6">
            <h4>Exclusive Men's Collection</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="item_list">
<div class="container">
  <div class="row">
<div class="col-md-3 item-col">
<div class="image">
  <img src="assets/images/dummy/top.png" alt="">
</div>
</div>
  </div>
</div>
</section>
<?php include('footer.php') ?>
