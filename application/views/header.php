<?php
$CI =& get_instance();
$CI->load->model('Coffee_m');
$general = $CI->Coffee_m->general();
// echo "<pre>";
// var_dump($general);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KOPPEE - Coffee Shop HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url('assets/'); ?>img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('assets/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/'); ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet">
</head>

<body>

<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="<?php echo base_url(''); ?>" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white"><?php echo $general->name; ?></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="<?php echo base_url(''); ?>" class="nav-item nav-link <?php if ($this->uri->segment(1)=="") { echo "active"; } ?>">Home</a>
                <a href="<?php echo base_url(''); ?>about" class="nav-item nav-link <?php if ($this->uri->segment(1)=="about") { echo "active"; } ?>">About</a>
                <a href="<?php echo base_url(''); ?>service" class="nav-item nav-link <?php if ($this->uri->segment(1)=="service") { echo "active"; } ?>">Service</a>
                <a href="<?php echo base_url(''); ?>menu" class="nav-item nav-link <?php if ($this->uri->segment(1)=="menu") { echo "active"; } ?>">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?php if ($this->uri->segment(1)=="reservation" || $this->uri->segment(1)=="testimonial") { echo "active"; } ?>" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="<?php echo base_url(''); ?>reservation" class="dropdown-item ">Reservation</a>
                        <a href="<?php echo base_url(''); ?>testimonial" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="<?php echo base_url(''); ?>contact" class="nav-item nav-link <?php if ($this->uri->segment(1)=="contact") { echo "active"; } ?>">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->