<?php include('header.php') ?>
<style media="screen">
    #contact_us iframe{
        width: 100%;
        height: 60vh;
    }
    .contact-table i{
        background: #efeeee;
        font-size: 37px;
        border-radius: 50%;
        padding: 10px;
        display: flex;
        justify-content: center;
        width: 50%;
    }
</style>
<div id="breadcrumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>

<section id="contact_us">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14241.348710863944!2d87.29134833491827!3d26.8292259763107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1563123366466!5m2!1sen!2snp" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <h3>Contact</h3>
                    <p>If you need any help, please contact us or send us an email. We are sure that you can receive our reply as soon as possible.</p>
                </div>
                <table class="table table-borderless contact-table">
                    <tr>
                        <td><i class="fas fa-map-marker-alt"></i></td>
                        <td>
                            <h4>Address</h4>
                            <p>Maitidevi, Kathmandu, Nepal</p>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-mobile"></i></td>
                        <td>
                            <h4>Mobile</h4>
                            <p>+977 98.........</p>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-viber"></i></td>
                        <td>
                            <h4>Viber/Whatsapp</h4>
                            <p>+977 98.........</p>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="far fa-envelope"></i></td>
                        <td>
                            <h4>E-Mail</h4>
                            <p>info@symbolic.com</p>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="far fa-clock"></i></td>
                        <td>
                            <h4>Support Hours</h4>
                            <p>Sun-Sat 8:00am - 8:00pm</p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <div>
                    <h3>Get in Touch with us</h3>
                    <p>If you have any questions, Please don't hesitate to send us a message.</p>
                </div>
                <div>
                    <form class="" action="" method="post">
                        <table style="width:100%">
                            <tr>
                                <th>First Name</th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Lat Name</th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Delivery Comment</th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <button style="float:right;" type="submit" class="btn btn-primary">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>
