<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="<?php echo base_url('assets/img/'); ?>carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
                    <h1 class="display-1 text-white m-0">COFFEE</h1>
                    <h2 class="text-white m-0">* SINCE 1950 *</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?php echo base_url('assets/img/'); ?>carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
                    <h1 class="display-1 text-white m-0">COFFEE</h1>
                    <h2 class="text-white m-0">* SINCE 1950 *</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
            <h1 class="display-4">Serving Since 1950</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 py-0 py-lg-5">
                <h1 class="mb-3">Our Story</h1>
                <h5 class="mb-3"><?php echo $about->story_head; ?></h5>
                <p><?php echo $about->story_details; ?></p>
                <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
            </div>
            <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="<?php echo base_url('assets/img/'); ?><?php echo $about->img; ?>" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4 py-0 py-lg-5">
                <h1 class="mb-3">Our Vision</h1>
                <p><?php echo $about->vision_details; ?></p>
                <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i><?php echo $about->vision_p1; ?></h5>
                <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i><?php echo $about->vision_p2; ?></h5>
                <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i><?php echo $about->vision_p3; ?></h5>
                <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Services</h4>
            <h1 class="display-4">Fresh & Organic Beans</h1>
        </div>
        <div class="row">
            <?php
            foreach ($service as $serv) { ?>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="<?php echo base_url('assets/img/'); ?><?php echo $serv->img; ?>" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><?php echo $serv->icon; ?><?php echo $serv->head; ?></h4>
                            <p class="m-0"><?php echo $serv->details; ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Offer Start -->
<div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
    <div class="container py-5">
        <h1 class="display-3 text-primary mt-3">50% OFF</h1>
        <h1 class="text-white mb-3">Sunday Special Offer</h1>
        <h4 class="text-white font-weight-normal mb-4 pb-3">Only for Sunday from 1st Jan to 30th Jan 2045</h4>
        <form class="form-inline justify-content-center mb-4">
            <div class="input-group">
                <input type="text" class="form-control p-4" placeholder="Your Email" style="height: 60px;">
                <div class="input-group-append">
                    <button class="btn btn-primary font-weight-bold px-4" type="submit">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Offer End -->


<!-- Menu Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
            <h1 class="display-4">Competitive Pricing</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h1 class="mb-5">Hot Coffee</h1>
                <?php
                foreach ($menu as $m) {
                    if ($m->type == 'hot') { ?>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo base_url('assets/img/'); echo $m->img; ?>" alt="">
                                <h5 class="menu-price">$<?php echo $m->price ?></h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <h4><?php echo $m->name ?></h4>
                                <p class="m-0"><?php echo $m->details ?></p>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

            </div>
            <div class="col-lg-6">
                <h1 class="mb-5">Cold Coffee</h1>
                <?php
                foreach ($menu as $m) {
                    if ($m->type == 'cold') { ?>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo base_url('assets/img/'); echo $m->img;?>" alt="">
                                <h5 class="menu-price">$<?php echo $m->price ?></h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <h4><?php echo $m->name ?></h4>
                                <p class="m-0"><?php echo $m->details ?></p>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->


<!-- Reservation Start -->
<div class="container-fluid my-5">
    <div class="container">
        <div class="reservation position-relative overlay-top overlay-bottom">
            <div class="row align-items-center">
                <div class="col-lg-6 my-5 my-lg-0">
                    <div class="p-5">
                        <div class="mb-4">
                            <h1 class="display-3 text-primary">30% OFF</h1>
                            <h1 class="text-white">For Online Reservation</h1>
                        </div>
                        <p class="text-white">Lorem justo clita erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                            ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea</p>
                        <ul class="list-inline text-white m-0">
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                        <h1 class="text-white mb-4 mt-5">Book Your Table</h1>
                        <form class="mb-5">
                            <div class="form-group">
                                <input type="text" class="form-control bg-transparent border-primary p-4" placeholder="Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control bg-transparent border-primary p-4" placeholder="Email" required="required" />
                            </div>
                            <div class="form-group">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select bg-transparent border-primary px-4" style="height: 49px;">
                                    <option selected>Person</option>
                                    <option value="1">Person 1</option>
                                    <option value="2">Person 2</option>
                                    <option value="3">Person 3</option>
                                    <option value="3">Person 4</option>
                                </select>
                            </div>

                            <div>
                                <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reservation End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h4>
            <h1 class="display-4">Our Clients Say</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <?php
            foreach ($client as $cli) {?>
                <div class="testimonial-item">
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid" src="<?php echo base_url('assets/img/'); echo $cli->img; ?>" alt="">
                    <div class="ml-3">
                        <h4><?php echo $cli->name ?></h4>
                        <i><?php echo $cli->designation ?></i>
                    </div>
                </div>
                <p class="m-0"><?php echo $cli->details ?></p>
            </div>
            <?php
            }
            ?>
            
        </div>
    </div>
</div>
<!-- Testimonial End -->