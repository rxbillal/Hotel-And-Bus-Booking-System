<?php
header ("Content-Type:text/css");
$color = "#746EF1"; // Change your Color Here


function checkhexcolor($color) {
    return preg_match('/^#[a-f0-9]{6}$/i', $color);
}

if( isset( $_GET[ 'color' ] ) AND $_GET[ 'color' ] != '' ) {
    $color = "#".$_GET[ 'color' ];
}

if( !$color OR !checkhexcolor( $color ) ) {
    $color = "#746EF1";
}

?>
.index-2 .i-s-t-content {
  background: <?php echo $color ?>;
}
.index-2 .i-s-t-nav {
  background: <?php echo $color ?>;
}
.index-2 .nav-tabs .nav-item.show .nav-link, .index-2 .nav-tabs .nav-link.active {
    background: #fff;
    border-color: #fff;
    color: black;
}
.section-heading::before {
  background: <?php echo $color ?>;
}
#choose-us .c-box i {
  color: <?php echo $color ?>;
}
#choose-us .c-box:hover i {
    background: <?php echo $color ?>;
    border-color: <?php echo $color ?>;
}
#popular_turs .c-box article .footer span {
  color: <?php echo $color ?>;
}
#popular_turs .c-box article .footer a:hover {
    background: <?php echo $color ?>;
    border-color: <?php echo $color ?>;
}

#popular_turs .c-box article .footer span {
    color: <?php echo $color ?>;
}
#popular_turs .c-box article .footer a {
    border: 1px solid <?php echo $color ?>;
}
#popular_destinations .c-box:hover article {
    background: <?php echo $color ?>;
}
#popular_destinations .c-box p {
    color: <?php echo $color ?>;
}
.newsletter .n-box .mamunur_rashid_form.mr-btn {
    background: <?php echo $color ?>;
    border-color: <?php echo $color ?>;
}
#top_travell a:hover {
  color: <?php echo $color ?>;
}
.totop>a {
  background-color: <?php echo $color ?>;
}
#main-menu .navbar-nav li a:hover {
  color: <?php echo $color ?>;
}
#main-menu nav .navbar-nav .nav-item .nav-link.active::before {
    border-bottom: 12px solid <?php echo $color ?>;
}
.bc #breadcrumb .active {
  color: <?php echo $color ?>;
}
.base-bg {
  background-color: <?php echo $color ?> !important;
  color: #fff !important;
}
.base-txt {
  color: <?php echo $color ?> !important;
}
#tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
  color: <?php echo $color ?>;
}
.hotel #popular_turs .c-box .img .sd-box {
    background: <?php echo $color ?>;
}
.hotel #popular_turs .c-box article .footer .right {
    color: <?php echo $color ?>;
}
.book-now {
    background: <?php echo $color ?>;
    border: 2px solid <?php echo $color ?>;
}
.site-preloader {
    background-color: <?php echo $color ?>;
}
#contact-main .contact-address {
    background: <?php echo $color ?> !important; 
}
#contact-main .contact-address p {
    color: white;
}
#contact-main .con-num a {
    color: white;
}
#contact-main .con-num a {
    color: white;
}