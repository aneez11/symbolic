<?php include('header.php') ?>
<style media="screen">

</style>
<div id="breadcrumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
    </div>
</div>
<section id="details_body">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
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
                <div class="blog-post-list">
                    <?php
                    for ($i = 0; $i<3; $i++) {
                        ?>
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-3 text-center">
                                    <img src="assets/images/products/<?php echo $i+5; ?>.png" class="card-img" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title post-title font-weight-bold">Post Title <?php echo $i+1; ?></h5>
                                        <p class="card-text update-time"><small class="text-muted"><i class="fas fa-clock"></i> <?php echo $i*5+12; ?> mins ago</small></p>
                                        <p class="card-text post-content text-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur....</p>
                                        <a href="blog_details.php" class="btn btn-primary btn-md float-right mb-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
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
    </div>
</section>

<?php include('footer.php') ?>
