<?php include_once "../include/header.php" ?>
<!-- Intro Div Start -->
<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
        <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
            <img class="one-third js-fullheight align-self-end order-md-last img-fluid"
                src="../images/undraw_pair_programming_njlp.svg" alt="">
            <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
                <div class="text mt-5">
                    <span class="subheading">WELCOME TO PG FORMS</span>
                    <h2 class="mb-3"> <span>FOR GUIDANCE ON </span> <span>ATTENDANCE</span></h2>
                    <p>Welcome to PG School Attendance Registration page. We would guide you in filling out these forms.</p>
                    <!-- Had to change this and take the user straight to making a choice for the
                    forms to fill. There was no real UX need for taking users to .attendance.php -->
                    <!-- <p><a href="attendance.php" class="btn btn-primary px-4 py-3">Start Here</a> -->
                    <p><a href="choice.php" class="btn btn-primary px-4 py-3">Start Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro Div End -->
<!-- Search Forms Section Start -->
<section class="ftco-domain">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-5 heading-white mb-4 mb-sm-4 mb-lg-0 ftco-animate">
                <h2>Search Here</h2>
                <p>Find Your form</p>
            </div>
            <div class="col-lg-7 p-5 ftco-wrap ftco-animate">
                <form action="#" class="domain-form d-flex mb-3">
                    <div class="form-group domain-name">
                        <input type="text" class="form-control name px-4" placeholder="Enter form name here...">
                    </div>
                    <div class="form-group domain-select d-flex">
                        <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="" id="" class="form-control">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <input type="submit" class="search-domain btn btn-primary text-center" value="Search">
                    </div>
                </form>
                <p class="domain-price mt-2">
                    <span><small></small> </span>
                    <span><small></small> </span>
                    <span><small></small> </span>
                    <span><small></small> </span>
                    <span><small></small> </span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Search Forms Section End -->
<?php include_once "../include/footer.php" ?>