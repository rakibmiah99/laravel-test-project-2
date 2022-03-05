<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QIXER - Service Based Business HTML Template</title>

    <!-- favicon -->
    <link rel=icon href="{{asset("favicons.ico")}}" sizes="16x16" type="icon/ico">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset("assets/css/animate.css")}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <!-- slick carousel  -->
    <link rel="stylesheet" href="{{asset("assets/css/slick.css")}}">
    <!-- LineAwesome -->
    <link rel="stylesheet" href="{{asset("assets/css/line-awesome.min.css")}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{asset("assets/css/nice-select.css")}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">

</head>

<body>
    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="loader_bars">
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
    <!-- Header area Starts -->
    <header class="header-style-01">
        <!-- Menu area Starts -->
        <nav class="navbar navbar-area navbar-two navbar-expand-lg section-bg-2">
            <div class="container container-two nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo-wrapper">
                        <a href="index.html" class="logo">
                            <img src="assets/img/logo-03.png" alt="">
                        </a>
                    </div>
                    <a href="#0" class="click_show_icon">
                        <i class="las la-ellipsis-v"></i>
                    </a>
                    <button class="navbar-toggler black-color" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                    <ul class="navbar-nav">
                        <li class="menu-item-has-children">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="02_index.html">Home 02</a></li>
                                <li><a href="03_index.html">Home 03</a></li>
                                <li><a href="04_index.html">Home 04</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="service_list.html">Service List</a></li>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Others</a>
                            <ul class="sub-menu">
                                <li><a href="service_details.html">Service Details</a></li>
                                <li><a href="02_service_details.html">Service Details Two</a></li>
                                <li><a href="03_service_details.html">Service Details Three</a></li>
                                <li><a href="04_service_details.html">Service Details Four</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="seller_profile.html">Seller Profile</a></li>
                                <li><a href="seller_order_view.html">Seller View</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="signup.html">Signup</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="error.html">404</a></li>
                                <li><a href="multistep_form.html">multistep Form</a></li>
                                <li><a href="02_multistep_form.html">multistep Form Two</a></li>
                                <li><a href="register_step_form.html">RegisterStep Form</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog_details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </div>
                <div class="nav-right-content">
                    <div class="info-bar-item">
                        <div class="notification-icon icon">
                            <a class="single-icon" href="javascript:void(0)"> <i class="las la-bell"></i> </a>
                            <span class="notification-number"> 5 </span>
                            <div class="notification-list-wrapper">
                                <h6 class="notification-title"> Notifications </h6>
                                <ul class="notification-list">
                                    <li class="list">
                                        <div class="notification-list-flex">
                                            <div class="item-icon">
                                                <i class="las la-bell"></i>
                                            </div>
                                            <div class="notification-contents">
                                                <a class="list-title" href="javascript:void(0)"> Notification One </a>
                                                <span class="list-sub"> 4 hours ago </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list">
                                        <div class="notification-list-flex">
                                            <div class="item-icon">
                                                <i class="las la-bell"></i>
                                            </div>
                                            <div class="notification-contents">
                                                <a class="list-title" href="javascript:void(0)"> Notification Two </a>
                                                <span class="list-sub"> 8 hours ago </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list">
                                        <div class="notification-list-flex">
                                            <div class="item-icon">
                                                <i class="las la-bell"></i>
                                            </div>
                                            <div class="notification-contents">
                                                <a class="list-title" href="javascript:void(0)"> Notification Three </a>
                                                <span class="list-sub"> 1 day ago </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list">
                                        <div class="notification-list-flex">
                                            <div class="item-icon">
                                                <i class="las la-bell"></i>
                                            </div>
                                            <div class="notification-contents">
                                                <a class="list-title" href="javascript:void(0)"> Notification Four </a>
                                                <span class="list-sub"> 3 day ago </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list">
                                        <div class="notification-list-flex">
                                            <div class="item-icon">
                                                <i class="las la-bell"></i>
                                            </div>
                                            <div class="notification-contents">
                                                <a class="list-title" href="javascript:void(0)"> Notification Five </a>
                                                <span class="list-sub"> 7 day ago </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="javascript:void(0)" class="all-notification"> See All Notification </a>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="info-bar-item-two">
                        <div class="author-thumb">
                            <img src="assets/img/author-nav.jpg" alt="">
                        </div>
                        <div class="author-nav-content">
                            <span class="title"> Alex Jerin </span>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Menu area end -->
    </header>
    <div class="overlays"></div>
    <!-- Header area end -->
    <!-- Location Overview area starts -->
    <section class="location-overview-area padding-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="msform" class="msform">
                        <ul class="overview-list step-list">
                            <li class="list active" id="account">
                                <a class="list-click" href="javascript:void(0)"> <span class="list-number">1</span> Location </a>
                            </li>
                            <li class="list">
                                <a class="list-click" href="javascript:void(0)"> <span class="list-number">2</span> Service </a>
                            </li>
                            <li class="list">
                                <a class="list-click" href="javascript:void(0)"> <span class="list-number">3</span> Date & Time </a>
                            </li>
                            <li class="list">
                                <a class="list-click" href="javascript:void(0)"> <span class="list-number">4</span> Information </a>
                            </li>
                            <li class="list">
                                <a class="list-click" href="javascript:void(0)"> <span class="list-number">5</span> Confirmation </a>
                            </li>
                        </ul>
                        <!-- Location -->
                        <fieldset class="padding-top-50 padding-bottom-100">
                            <div class="overview-list-all">
                                <div class="overview-location">
                                    <div class="single-location active margin-top-30 wow fadeInUp" data-wow-delay=".3s">
                                        <span class="location"> New York, </span>
                                        <span class="location"> New York </span>
                                    </div>
                                    <div class="single-location margin-top-30 wow fadeInDown" data-wow-delay=".3s">
                                        <span class="location"> Los Angeles, </span>
                                        <span class="location"> California </span>
                                    </div>
                                    <div class="single-location margin-top-30 wow fadeInUp" data-wow-delay=".3s">
                                        <span class="location"> Chicago, </span>
                                        <span class="location"> New York </span>
                                    </div>
                                    <div class="single-location margin-top-30 wow fadeInDown" data-wow-delay=".3s">
                                        <span class="location"> Houston, </span>
                                        <span class="location"> Texas </span>
                                    </div>
                                    <div class="single-location margin-top-30 wow fadeInUp" data-wow-delay=".3s">
                                        <span class="location"> Phoenix, </span>
                                        <span class="location"> Arizona </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Map Starts -->
                            <div class="contact-map-area padding-top-100">
                                <div class="container">
                                    <div class="contact-map">
                                        <span class="select-location"> Select Current Location </span>
                                        <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=82.83142089843751%2C22.243344409235693%2C92.00500488281251%2C26.652368294008866&amp;layer=mapnik"></iframe>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Map end -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <!-- Service -->
                        <fieldset class="padding-top-50 padding-bottom-100">
                            <div class="row">
                                <div class="col-lg-8 margin-top-30">
                                    <div class="service-overview-wrapper padding-bottom-30">
                                        <div class="overview-author overview-author-border">
                                            <div class="overview-flex-author">
                                                <div class="overview-thumb">
                                                    <img src="assets/img/service/overview1.jpg" alt="">
                                                </div>
                                                <div class="overview-contents">
                                                    <h4 class="overview-title"> <a href="javascript:void(0)"> Lorem ipsum dolor sit amet, consectetur adipiscing about Aelit</a> </h4>
                                                    <span class="overview-review"> <i class="las la-star"></i> 4.9 <b>(231)</b> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overview-single padding-top-40">
                                            <h4 class="title"> What's Included </h4>
                                            <div class="include-contents margin-top-30">
                                                <div class="single-include">
                                                    <ul class="include-list">
                                                        <li class="lists">
                                                            <div class="list-single">
                                                                <span class="rooms"> 3 Bed Room </span>
                                                            </div>
                                                            <div class="list-single">
                                                                <span class="values"> $30 </span>
                                                                <span class="value-input"> <input type="text" value="3"> </span>
                                                            </div>
                                                        </li>
                                                        <li class="lists"> <a class="remove" href="javascript:void(0)">Remove</a> </li>
                                                    </ul>
                                                </div>
                                                <div class="single-include">
                                                    <ul class="include-list">
                                                        <li class="lists">
                                                            <div class="list-single">
                                                                <span class="rooms"> 2 Bed Room </span>
                                                            </div>
                                                            <div class="list-single">
                                                                <span class="values"> $20 </span>
                                                                <span class="value-input"> <input type="text" value="2"> </span>
                                                            </div>
                                                        </li>
                                                        <li class="lists"> <a class="remove" href="javascript:void(0)">Remove</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overview-single padding-top-60">
                                            <h4 class="title"> Upgrade your order with extras </h4>
                                            <div class="row">
                                                <div class="col-lg-6 margin-top-30">
                                                    <div class="overview-extra">
                                                        <div class="checkbox-inlines">
                                                            <input class="check-input" type="checkbox" id="check4">
                                                            <label class="checkbox-label" for="check4"> Kitchen Cleaning </label>
                                                        </div>
                                                        <div class="overview-extra-flex-content">
                                                            <div class="list-single">
                                                                <span class="values"> $25 </span>
                                                                <span class="value-input"> <input type="text" value="3"> </span>
                                                            </div>
                                                            <span class="price-value"> $50 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 margin-top-30">
                                                    <div class="overview-extra">
                                                        <div class="checkbox-inlines">
                                                            <input class="check-input" type="checkbox" id="check5">
                                                            <label class="checkbox-label" for="check5"> Kitchen Cleaning </label>
                                                        </div>
                                                        <div class="overview-extra-flex-content">
                                                            <div class="list-single">
                                                                <span class="values"> $25 </span>
                                                                <span class="value-input"> <input type="text" value="3"> </span>
                                                            </div>
                                                            <span class="price-value"> $50 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 margin-top-30">
                                                    <div class="overview-extra">
                                                        <div class="checkbox-inlines">
                                                            <input class="check-input" type="checkbox" id="check6">
                                                            <label class="checkbox-label" for="check6"> Kitchen Cleaning </label>
                                                        </div>
                                                        <div class="overview-extra-flex-content">
                                                            <div class="list-single">
                                                                <span class="values"> $25 </span>
                                                                <span class="value-input"> <input type="text" value="3"> </span>
                                                            </div>
                                                            <span class="price-value"> $50 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 margin-top-30">
                                                    <div class="overview-extra">
                                                        <div class="checkbox-inlines">
                                                            <input class="check-input" type="checkbox" id="check7">
                                                            <label class="checkbox-label" for="check7"> Kitchen Cleaning </label>
                                                        </div>
                                                        <div class="overview-extra-flex-content">
                                                            <div class="list-single">
                                                                <span class="values"> $25 </span>
                                                                <span class="value-input"> <input type="text" value="3"> </span>
                                                            </div>
                                                            <span class="price-value"> $50 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overview-single padding-top-60">
                                            <h4 class="title"> Benifits of the Package: </h4>
                                            <ul class="overview-benefits margin-top-30">
                                                <li class="list"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. </li>
                                                <li class="list"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. </li>
                                                <li class="list"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 margin-top-30">
                                    <div class="service-overview-summery">
                                        <h4 class="title"> Booking Summery </h4>
                                        <div class="overview-summery-contents">
                                            <div class="single-summery">
                                                <span class="summery-title"> Appointment Package Service </span>
                                                <div class="summery-list-all">
                                                    <ul class="summery-list">
                                                        <li class="list">
                                                            <span class="rooms"> Bed Room</span>
                                                            <span class="room-count">3</span>
                                                            <span class="value-count">$90</span>
                                                        </li>
                                                        <li class="list">
                                                            <span class="rooms"> Bath Room</span>
                                                            <span class="room-count">2</span>
                                                            <span class="value-count">$60</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="summery-result-list">
                                                        <li class="result-list">
                                                            <span class="rooms"> Pagckage Fee</span>
                                                            <span class="value-count">$150</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="single-summery">
                                                <span class="summery-title"> Extra Service </span>
                                                <div class="summery-list-all">
                                                    <ul class="summery-list">
                                                        <li class="list">
                                                            <span class="rooms"> Kitchen</span>
                                                            <span class="room-count">1</span>
                                                            <span class="value-count">$50</span>
                                                        </li>
                                                        <li class="list">
                                                            <span class="rooms"> Fridge</span>
                                                            <span class="room-count">1</span>
                                                            <span class="value-count">$20</span>
                                                        </li>
                                                        <li class="list">
                                                            <span class="rooms"> Garden</span>
                                                            <span class="room-count">1</span>
                                                            <span class="value-count">$60</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="summery-result-list result-border padding-bottom-20">
                                                        <li class="result-list">
                                                            <span class="rooms"> Subtotal</span>
                                                            <span class="value-count">$280</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="summery-result-list result-border padding-bottom-20">
                                                        <li class="result-list">
                                                            <span class="rooms"> Tax(+)15%</span>
                                                            <span class="value-count">$42</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="summery-result-list">
                                                        <li class="result-list">
                                                            <span class="rooms"> <strong>Total</strong></span>
                                                            <span class="value-count">$280</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="btn-wrapper">
                                                <a href="javascript:void(0)" class="cmn-btn btn-appoinment btn-bg-1"> Continue </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <!-- Date & Time -->
                        <fieldset class="padding-top-50 padding-bottom-100">
                            <div class="date-overview">
                                <div class="single-date-overview margin-top-30">
                                    <h4 class="date-time-title"> Available on December 20201 </h4>
                                    <ul class="date-time-list margin-top-20">
                                        <li class="list"> <a href="javascript:void(0)"> 05 dec,2021 - Sun </a> </li>
                                        <li class="list active"> <a href="javascript:void(0)"> 06 dec,2021 - Sun </a> </li>
                                        <li class="list"> <a href="javascript:void(0)"> 07 dec,2021 - Sun </a> </li>
                                        <li class="list"> <a href="javascript:void(0)"> 08 dec,2021 - Sun </a> </li>
                                        <li class="list"> <a href="javascript:void(0)"> 09 dec,2021 - Sun </a> </li>
                                    </ul>
                                </div>
                                <div class="single-date-overview margin-top-30">
                                    <h4 class="date-time-title"> Available schedule on 06 September, 2021 </h4>
                                    <ul class="date-time-list margin-top-20">
                                        <li class="list"> <a href="javascript:void(0)"> 10.00AM-11.00AM </a> </li>
                                        <li class="list"> <a href="javascript:void(0)"> 12.00AM-01.00PM </a> </li>
                                        <li class="list"> <a href="javascript:void(0)"> 04.00AM-05.00AM </a> </li>
                                        <li class="list active"> <a href="javascript:void(0)"> 06.00AM-07.00AM </a> </li>
                                    </ul>
                                </div>
                                <div class="btn-wrapper margin-top-30">
                                    <a href="javascript:void(0)" class="cmn-btn btn-bg-1">Book Appoinmnent</a>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <!-- Information -->
                        <fieldset class="padding-top-50 padding-bottom-100">
                            <div class="Info-overview padding-top-30">
                                <h3 class="date-time-title"> Booking Information </h3>
                                <div class="single-info-overview margin-top-30">
                                    <div class="single-info-input">
                                        <label class="info-title"> Your Name* </label>
                                        <input class="form--control" type="text" name="name" placeholder="Type Your Name">
                                    </div>
                                    <div class="single-info-input">
                                        <label class="info-title"> Your Email* </label>
                                        <input class="form--control" type="email" name="email" placeholder="Type Your Email">
                                    </div>
                                </div>
                                <div class="single-info-overview margin-top-30">
                                    <div class="single-info-input">
                                        <label class="info-title"> Phone Number* </label>
                                        <input class="form--control" type="tel" placeholder="Type Your Number">
                                    </div>
                                    <div class="single-info-input">
                                        <label class="info-title"> Your City* </label>
                                        <select>
                                                <option value="1">New York</option>
                                                <option value="2">London</option>
                                                <option value="2">Eden Garden</option>
                                                <option value="2">Paris</option>
                                                <option value="2">Barcelona</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="single-info-overview margin-top-30">
                                    <div class="single-info-input">
                                        <label class="info-title"> Your Area* </label>
                                        <input class="form--control" type="text" placeholder="Type Your Area">
                                    </div>
                                    <div class="single-info-input">
                                        <label class="info-title"> Post Code* </label>
                                        <input class="form--control" type="tel" placeholder="Type Post Code">
                                    </div>
                                </div>
                                <div class="single-info-overview margin-top-30">
                                    <div class="single-info-input">
                                        <label class="info-title"> Your Address* </label>
                                        <input class="form--control" type="text" placeholder="Type Your Address">
                                    </div>
                                </div>
                                <div class="single-info-overview margin-top-30">
                                    <div class="single-info-input">
                                        <label class="info-title"> Order Note* </label>
                                        <textarea class="form--control textarea--form" name="message" placeholder="Type Order Note"></textarea>
                                    </div>
                                </div>
                                <div class="btn-wrapper margin-top-35">
                                    <button type="submit" class="cmn-button btn-bg-1"> Continue </button>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <!-- Confirmation -->
                        <fieldset class="padding-top-50 padding-bottom-100">
                            <div class="confirm-overview padding-top-30">
                                <div class="overview-author overview-author-border">
                                    <div class="overview-flex-author">
                                        <div class="overview-thumb confirm-thumb">
                                            <img src="assets/img/service/overview1.jpg" alt="">
                                        </div>
                                        <div class="overview-contents">
                                            <h2 class="overview-title confirm-title"> <a href="javascript:void(0)">Lorem ipsum dolor sit amet, consectetur adipiscing about Aelit</a> </h2>
                                            <span class="overview-review"> <i class="las la-star"></i> 4.9 <b>(231)</b> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="confirm-overview-left margin-top-30">
                                        <div class="single-confirm-overview">
                                            <div class="single-confirm margin-top-30">
                                                <h3 class="titles"> Location </h3>
                                                <span class="details"> Los Angeles, </span>
                                                <span class="details"> California </span>
                                            </div>
                                            <div class="single-confirm margin-top-30">
                                                <h3 class="titles"> Date & Time </h3>
                                                <span class="details"> 06 Sep 2021 </span>
                                                <span class="details"> 6:00PM-7:00PM </span>
                                            </div>
                                        </div>
                                        <div class="booking-info padding-top-60">
                                            <h2 class="title"> Booking Information </h2>
                                            <div class="booking-details">
                                                <ul class="booking-list">
                                                    <li class="lists">
                                                        <span class="list-span"> Name: </span>
                                                        <span class="list-strong"> Jhon Dhoe </span>
                                                    </li>
                                                    <li class="lists">
                                                        <span class="list-span"> Email: </span>
                                                        <span class="list-strong"> Customer@mail.com </span>
                                                    </li>
                                                    <li class="lists">
                                                        <span class="list-span"> Phone: </span>
                                                        <span class="list-strong"> 011-2234567890 </span>
                                                    </li>
                                                    <li class="lists">
                                                        <span class="list-span"> City: </span>
                                                        <span class="list-strong"> New york </span>
                                                    </li>
                                                    <li class="lists">
                                                        <span class="list-span"> Area: </span>
                                                        <span class="list-strong"> New york </span>
                                                    </li>
                                                    <li class="lists">
                                                        <span class="list-span"> Post Code: </span>
                                                        <span class="list-strong"> 1122 </span>
                                                    </li>
                                                    <li class="lists">
                                                        <span class="list-span"> Address: </span>
                                                        <span class="list-strong"> 2608 Ritter Avenue Livonia, MI 48150 </span>
                                                    </li>
                                                    <li class="lists">
                                                        <span class="list-span"> Order Note: </span>
                                                        <span class="list-strong"> it is a long established fact that a reader will be distra
                                                            by the readable content of a page when looking at its
                                                            layout. The point of using Lorem Ipsum is that. </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 margin-top-60">
                                    <div class="service-overview-summery">
                                        <h4 class="title"> Booking Summery </h4>
                                        <div class="overview-summery-contents">
                                            <div class="single-summery">
                                                <span class="summery-title"> Appointment Service </span>
                                                <div class="summery-list-all">
                                                    <ul class="summery-list">
                                                        <li class="list">
                                                            <span class="rooms"> Bed Room</span>
                                                            <span class="room-count">3</span>
                                                            <span class="value-count">$90</span>
                                                        </li>
                                                        <li class="list">
                                                            <span class="rooms"> Bath Room</span>
                                                            <span class="room-count">2</span>
                                                            <span class="value-count">$60</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="summery-result-list">
                                                        <li class="result-list">
                                                            <span class="rooms"> Appoinment Fee</span>
                                                            <span class="value-count">$150</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="single-summery">
                                                <span class="summery-title"> Extra Service </span>
                                                <div class="summery-list-all">
                                                    <ul class="summery-list">
                                                        <li class="list">
                                                            <span class="rooms"> Kitchen</span>
                                                            <span class="room-count">1</span>
                                                            <span class="value-count">$50</span>
                                                        </li>
                                                        <li class="list">
                                                            <span class="rooms"> Fridge</span>
                                                            <span class="room-count">1</span>
                                                            <span class="value-count">$20</span>
                                                        </li>
                                                        <li class="list">
                                                            <span class="rooms"> Garden</span>
                                                            <span class="room-count">1</span>
                                                            <span class="value-count">$60</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="summery-result-list result-border padding-bottom-20">
                                                        <li class="result-list">
                                                            <span class="rooms"> Subtotal</span>
                                                            <span class="value-count">$280</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="summery-result-list result-border padding-bottom-20">
                                                        <li class="result-list">
                                                            <span class="rooms"> Tax(+)15%</span>
                                                            <span class="value-count">$42</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="summery-result-list">
                                                        <li class="result-list">
                                                            <span class="rooms"> <strong>Total</strong></span>
                                                            <span class="value-count">$280</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="confirm-bottom-content">
                                                <div class="confirm-payment payment-border">
                                                    <div class="single-checkbox">
                                                        <div class="checkbox-inlines">
                                                            <input class="check-input" type="checkbox" id="check1">
                                                            <label class="checkbox-label" for="check1"> Cash Payment </label>
                                                        </div>
                                                    </div>
                                                    <div class="single-checkbox">
                                                        <div class="checkbox-inlines">
                                                            <input class="check-input" type="checkbox" id="check2">
                                                            <label class="checkbox-label" for="check2"> <img src="assets/img/service/payment.png" alt=""> </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="checkbox-inlines bottom-checkbox">
                                                    <input class="check-input" type="checkbox" id="check3">
                                                    <label class="checkbox-label" for="check3"> I have read and agree to the website <a href="javascript:void(0)"> terms and
                                                        conditions * </a> </label>
                                                </div>
                                            </div>
                                            <div class="btn-wrapper">
                                                <a href="javascript:void(0)" class="cmn-btn btn-appoinment btn-bg-1"> Pay & Confirm Your Order </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="submit" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <!-- Successful Complete -->
                        <fieldset class="padding-top-80 padding-bottom-100">
                            <div class="form-card successful-card">
                                <h2 class="title-step"> SUCCESS ! </h2>
                                <div class="succcess-icon">
                                    <i class="las la-check"></i>
                                </div>
                                <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                <div class="btn-wrapper text-center margin-top-35">
                                    <a href="index.html" class="cmn-btn btn-bg-1"> Back To Home</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Location Overview area end -->
    <!-- footer area start -->
    <footer class="footer-area section-bg-2">
        <div class="footer-top padding-top-100 padding-bottom-70">
            <div class="container container-two">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget widget ">
                            <div class="about_us_widget">
                                <a href="index.html" class="footer-logo"> <img src="assets/img/logo-footer.png" alt="footer logo"></a>
                            </div>
                            <div class="footer-inner">
                                <p class="footer-para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget widget">
                            <h6 class="widget-title">Community</h6>
                            <div class="footer-inner">
                                <ul class="footer-link-list">
                                    <li class="list"><a href="#">Forum</a></li>
                                    <li class="list"><a href="#">Become a Seller</a></li>
                                    <li class="list"><a href="#">Become a Buyer</a></li>
                                    <li class="list"><a href="#">Affiliates</a></li>
                                    <li class="list"><a href="#">Events</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget widget">
                            <h6 class="widget-title">Category</h6>
                            <div class="footer-inner">
                                <ul class="footer-link-list">
                                    <li class="list"><a href="#">Cleaning</a></li>
                                    <li class="list"><a href="#">House Move</a></li>
                                    <li class="list"><a href="#">Electric</a></li>
                                    <li class="list"><a href="#">Painting</a></li>
                                    <li class="list"><a href="#">Salon & Spa</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget widget">
                            <h6 class="widget-title">Store Info</h6>
                            <div class="footer-inner">
                                <ul class="footer-link-address">
                                    <li class="list"><span class="address"> <i class="las la-map-marker-alt"></i> 41/1, Hilton Mall, NY City </span></li>
                                    <li class="list"> <span class="address"> <a href="tel:+012-78901234"> <i class="las la-mobile-alt"></i> +012-78901234</a> </span></li>
                                    <li class="list"> <span class="address"> <a href="mailto:help@mail.com"> <i class="las la-envelope"></i> help@mail.com</a> </span></li>
                                </ul>
                                <div class="footer-socials">
                                    <ul class="footer-social-list">
                                        <li class="lists">
                                            <a class="facebook" href="#0"> <i class="lab la-facebook-f"></i> </a>
                                        </li>
                                        <li class="lists">
                                            <a class="twitter" href="#0"> <i class="lab la-twitter"></i> </a>
                                        </li>
                                        <li class="lists">
                                            <a class="instagram" href="#0"> <i class="lab la-instagram"></i> </a>
                                        </li>
                                        <li class="lists">
                                            <a class="youtube" href="#0"> <i class="lab la-youtube"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area copyright-border">
            <div class="container container-two">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <ul class="copyright-list">
                            <li class="list">
                                <a href="javascript:void(0)"> Privacy Policy </a>
                            </li>
                            <li class="list">
                                <a href="javascript:void(0)"> Terms & Conditions </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="copyright-contents">
                            <span> All copyright (C) 2021 Reserved </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="copyright-payment">
                            <ul class="payment-list">
                                <li class="list">
                                    <a href="javascript:void(0)"> <img src="assets/img/footer/c1.png" alt=""> </a>
                                </li>
                                <li class="list">
                                    <a href="javascript:void(0)"> <img src="assets/img/footer/c2.png" alt=""> </a>
                                </li>
                                <li class="list">
                                    <a href="javascript:void(0)"> <img src="assets/img/footer/c3.png" alt=""> </a>
                                </li>
                                <li class="list">
                                    <a href="javascript:void(0)"> <img src="assets/img/footer/c4.png" alt=""> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="las la-angle-up"></i></span>
    </div>
    <!-- back to top area end -->



    <!-- jquery -->
    <script src="{{asset("assets/js/jquery-3.6.0.min.js")}}"></script>
    <!-- jquery Migrate -->
    <script src="{{asset("assets/js/jquery-migrate.min.js")}}"></script>
    <!-- bootstrap -->
    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    <!-- wow -->
    <script src="{{asset("assets/js/wow.min.js")}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset("assets/js/slick.js")}}"></script>
    <!-- Nice Select -->
    <script src="{{asset("assets/js/jquery.nice-select.js")}}"></script>
    <!-- Nice Scroll -->
    <script src="{{asset("assets/js/jquery.nicescroll.min.js")}}"></script>
    <!-- main js -->
    <script src="{{asset("assets/js/main.js")}}"></script>

</body>

</html>
