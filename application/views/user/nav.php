<?php
defined("BASEPATH") or exit("no direct script access is allowed");
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAKEUCA CA/CS/CMA Test Series and Mentoring – MAKEUCA CA/CS/CMA Test Series and Mentoring</title>
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>public/user_assets/assets/images/fav.png"> -->

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>public/upload/class_logo/<?= $basic_info[0]['class_logo'] ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>public/upload/class_logo/<?= $basic_info[0]['class_logo'] ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>public/upload/class_logo/<?= $basic_info[0]['class_logo'] ?>">
    <link rel="manifest" href="<?= base_url() ?>public/upload/class_logo/<?= $basic_info[0]['class_logo'] ?>">
    <link rel="mask-icon" href="<?= base_url() ?>public/upload/class_logo/<?= $basic_info[0]['class_logo'] ?>" color="#5bbad5">
    <link rel="stylesheet" href="<?= base_url() ?>public/user_assets/assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/user_assets/assets/css/plugins/fontawesome-5.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/user_assets/assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/user_assets/assets/css/plugins/unicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/user_assets/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/user_assets/assets/css/style.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>

<body class="home-blue">
  
    <!-- start header area -->
    <header class="header-two header--sticky">
        <div class="header-top">
            <div class="content">
                <div class="left-header-top">
                    <p class="top-details">
                        <marquee behavior="scroll" direction="left">
                            <?php
                            if(count($basic_info)>0){
                                echo $basic_info[0]['important_info'];
                            }else{
                                ?>
                            Read our success stories on new Testimonial page.

                                <?php
                            }
                            ?>
                        </marquee>
                    </p>
                </div>
                <div class="right-header-top">
                    <div class="working-time">
                        <!-- <i class="far fa-clock"></i>
                        <span>Working: 8.00am - 5.00pm</span> -->
                        <i class="ri-phone-fill" style="font-size:20px"></i>
                        <?php
                            if(count($basic_info)>0){
                                ?>
                                <span>+91 <?= $basic_info[0]['whatsapp_number'] ?></span>
                                <?php
                            }else{
                                ?>
                                <span>+91 75867874674</span>
                                <?php
                            }
                        ?>

                    </div>
                    <div class="ht-social">
                        <span>Visit Us:</span>
                        <ul style="display:flex">
                            <li style="margin:10px 0px">
                            <?php
                            if(count($basic_info)>0){
                                ?>
                                <a href="tel:<?= $basic_info[0]['whatsapp_number'] ?>">
                                    <i class="ri-whatsapp-line" style="font-size:22px"></i>
                                </a>
                                <?php
                            }else{
                                ?>
                                <a href="">
                                    <i class="ri-whatsapp-line" style="font-size:22px"></i>
                                </a>
                                <?php
                            }
                            ?>
                                
                            </li>
                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="main-header">
            <div class="content" style="height:83px">
                <div class="header-left">
                    <a class='thumbnail' href='<?= base_url() ?>usercontroller/'>
                        <?php
                            if(count($basic_info)>0){
                                ?>
                                <img src="<?= base_url() ?>public/upload/class_logo/<?= $basic_info[0]['class_logo'] ?>"  style="margin-top:-10pxheight:150px;width:150px" alt="">

                                <?php
                            }else{
                                ?>
                               <img src="http://localhost/PROJECT/MAKEUCA_Website/public/upload/class_logo/17210280782533make-u-ca-logo-education-1024x405.png" alt="">
                                <?php
                            }
                            ?>
                    </a>
                    <nav class="nav-main mainmenu-nav d-none d-xl-block">
                        <ul class="mainmenu">
                            <!-- <li class="has-droupdown">
                                <a class="nav-link" href="#">Home</a>
                                <ul class="submenu menu-link1">
                                    <li class="menu-item">
                                        <a class="tag" href="#">Multipages</a>
                                        <ul>
                                            <li><a href='index.html'>Main Home</a></li>
                                            <li><a href='index-two.html'>Consulting Home</a></li>
                                            <li><a href='index-three.html'>Corporate Home</a></li>
                                            <li><a href='index-four.html'>Insurance Home</a></li>
                                            <li><a href='index-five.html'>Marketing Home</a></li>
                                            <li><a href='index-six.html'>Home finance</a></li>
                                            <li><a href='index-seven.html'>Human Resources</a></li>
                                            <li><a href='index-eight.html'>IT Solutions</a></li>
                                            <li><a href='index-nine.html'>Modern Agency</a></li>
                                            <li><a href='index-ten.html'>Startup Agency</a></li>
                                            <li><a href='index-eleven.html'>Branding Agency</a></li>
                                            <li><a href='index-twelve.html'>Business Agency</a></li>
                                            <li><a href='index-thirteen.html'>Business Management</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="tag" href="#">Onepages</a>
                                        <ul>
                                            <li><a href='onepage-one.html'>Main Home</a></li>
                                            <li><a href='onepage-two.html'>Consulting Home</a></li>
                                            <li><a href='onepage-three.html'>Corporate Home</a></li>
                                            <li><a href='onepage-four.html'>Insurance Home</a></li>
                                            <li><a href='onepage-five.html'>Marketing Home</a></li>
                                            <li><a href='onepage-six.html'>Finance Home</a></li>
                                            <li><a href='onepage-seven.html'>Human resource</a></li>
                                            <li><a href='onepage-eight.html'>IT Solutions</a></li>
                                            <li><a href='onepage-nine.html'>Modern Agency</a></li>
                                            <li><a href='onepage-ten.html'>Startup Agency</a></li>
                                            <li><a href='onepage-eleven.html'>Branding Agency</a></li>

                                            <li><a href='onepage-twelve.html'>Business Agency</a></li>
                                            <li><a href='index-thirteen.html'>Business Management</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-droupdown">
                                <a class="nav-link" href="#">Services</a>
                                <ul class="submenu menu-link3">
                                    <li class="sub-droupdown">
                                        <a class="sub-menu-link" href="#">Our Service</a>
                                        <ul class="submenu third-lvl">
                                            <li><a href='our-service.html'>Service 1</a></li>
                                            <li><a href='service-2.html'>Service 2</a></li>
                                            <li><a href='service-3.html'>Service 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href='service-details.html'>Service Details</a></li>
                                </ul>
                            </li>
                            <li class="has-droupdown">
                                <a class="nav-link" href="#">Pages</a>
                                <ul class="submenu menu-link">
                                    <li class="menu-item">
                                        <a class="tag" href="#">Pages</a>
                                        <ul>
                                            <li><a href='appoinment.html'>Appoinment</a></li>
                                            <li><a href='about-us.html'>About Us</a></li>
                                            <li><a href='price-plan.html'>Price Plans</a></li>
                                            <li><a href='our-service.html'>Our Services</a></li>
                                            <li><a href='testimonial-style-1.html'>Testimonial</a></li>
                                            <li><a href='404.html'>404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="tag" href="#">Portfolio</a>
                                        <ul>
                                            <li><a href='project.html'>Portfolio Style 1</a></li>
                                            <li><a href='portfolio-style-2.html'>Portfolio Style 2</a></li>
                                            <li><a href='portfolio-style-3.html'>Portfolio Style 3</a></li>
                                            <li><a href='portfolio-style-4.html'>Portfolio Style 4</a></li>
                                            <li><a href='portfolio-style-5.html'>Portfolio Style 5</a></li>
                                            <li><a href='project-details.html'>Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="tag" href="#">Our Teams</a>
                                        <ul>
                                            <li><a href='team.html'>Team Style 1</a></li>
                                            <li><a href='team-style-2.html'>Team Style 2</a></li>
                                            <li><a href='team-style-3.html'>Team Style 3</a></li>
                                            <li><a href='team-style-4.html'>Team Style 4</a></li>
                                            <li><a href='team-style-5.html'>Team Style 5</a></li>
                                            <li><a href='team-details.html'>Team Details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-droupdown">
                                <a class="nav-link" href="#">Blog</a>
                                <ul class="submenu">
                                    <li><a href='blog-list.html'>Blog List</a></li>
                                    <li><a href='blog-grid.html'>Blog Grid</a></li>
                                    <li><a href='blog-details.html'>Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="has-droupdown">
                                <a class="nav-link" href="#">Elements</a>
                                <ul class="submenu menu-link2">
                                    <li class="menu-item">
                                        <ul>
                                            <li><a href='accordion.html'>Accordion</a></li>
                                            <li><a href='address-box.html'>Address Box</a></li>
                                            <li><a href='button.html'>Button</a></li>
                                            <li><a href='blog-grid.html'>Blog Grid</a></li>
                                            <li><a href='blog-slider.html'>Blog Slider</a></li>
                                            <li><a href='blog-quote.html'>Blog Quote</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <ul>
                                            <li><a href='heading.html'>Heading</a></li>
                                            <li><a href='cta.html'>Call To Action</a></li>
                                            <li><a href='contact-form.html'>Contact Form</a></li>
                                            <li><a href='counter.html'>Counter Up</a></li>
                                            <li><a href='brand.html'>Brand Logo</a></li>
                                            <li><a href='video.html'>Video Addon</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <ul>
                                            <li><a href='pricing.html'>Pricing Table</a></li>
                                            <li><a href='typography.html'>Typography</a></li>
                                            <li><a href='tab-addon.html'>Tab Addon</a></li>
                                            <li><a href='progress-bar.html'>Progress Bar</a></li>
                                            <li><a href='testimonial.html'>Testimonial</a></li>
                                            <li><a href='working-process.html'>Working Process</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                            <li><a class='nav-item' href='contactus.html'>Home</a></li>
                            <li><a class='nav-item' href='contactus.html'>CA Test</a></li>
                            <li><a class='nav-item' href='contactus.html'>CS Test</a></li>
                            <li><a class='nav-item' href='contactus.html'>CMA Test</a></li>
                            <li><a class='nav-item' href='contactus.html'>Buy Now</a></li>
                            <li><a class='nav-item' href='contactus.html'>Gurukul</a></li>
                            <li><a class='nav-item' href='contactus.html'>FMU</a></li>
                            <li><a class='nav-item' href='contactus.html'>Career</a></li>
                            <li><a class='nav-item' href='contactus.html'>Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <!-- <div class="call-area">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M14.2251 11.5362C13.7279 11.5914 13.3688 12.061 13.3965 12.5858C13.4517 13.083 13.8936 13.4697 14.4461 13.4144C14.9985 13.3592 15.5509 13.5249 15.9376 13.9116C16.352 14.3259 16.5177 14.8784 16.4624 15.4308C16.4072 15.9832 16.7939 16.4252 17.2911 16.4804C17.5949 16.508 17.8711 16.3975 18.0645 16.2042C18.2026 16.0661 18.3131 15.8451 18.3407 15.6518C18.4512 14.4917 18.0645 13.3868 17.2635 12.5858C16.4901 11.8124 15.3852 11.4257 14.2251 11.5362ZM13.866 7.80729C13.3136 7.86253 12.9545 8.3321 13.0098 8.82928C13.0374 9.35409 13.507 9.71317 14.0318 9.68554C15.7443 9.51982 17.3739 10.0999 18.5617 11.2876C19.7218 12.4477 20.3294 14.105 20.1637 15.8175C20.1085 16.3147 20.4675 16.7842 20.9923 16.8119C21.2962 16.8395 21.5448 16.7566 21.7381 16.5633C21.9038 16.3975 21.9867 16.2042 22.042 15.9832C22.2905 13.7459 21.5171 11.5362 19.9151 9.93414C18.3131 8.3321 16.131 7.58632 13.866 7.80729ZM13.507 4.07841C12.9821 4.10603 12.6231 4.57559 12.6507 5.1004C12.7059 5.59758 13.1479 5.98428 13.6727 5.95666C16.4901 5.68045 19.2522 6.61957 21.2409 8.60831C23.202 10.5694 24.1688 13.3592 23.8926 16.1766C23.865 16.7014 24.2517 17.1433 24.7488 17.1986C25.0527 17.2262 25.3289 17.1157 25.5222 16.9223C25.6603 16.7842 25.7432 16.5909 25.7708 16.3423C26.1299 13.0001 24.9698 9.68554 22.5668 7.28249C20.1361 4.85181 16.8768 3.74695 13.507 4.07841ZM10.3581 15.0165C10.662 14.7679 10.8001 14.2983 10.6343 13.9116L9.22564 10.6799C9.05991 10.238 8.56273 10.017 8.14841 10.0999L5.11006 10.818C4.69574 10.9009 4.3919 11.3152 4.3919 11.7571C4.3919 19.3254 10.5515 25.485 18.1197 25.485C18.5617 25.485 18.976 25.1811 19.0588 24.7668L19.777 21.7285C19.8599 21.3141 19.6389 20.817 19.197 20.6512L15.9653 19.2425C15.5786 19.0768 15.109 19.2149 14.8604 19.5187L13.5346 21.1208C11.4353 20.1264 9.75045 18.4415 8.75608 16.3423L10.3581 15.0165Z" fill="#0B4DF5" />
                            </svg>
                        </div>
                        <div class="number-area">
                            <span>Call us anytime</span>
                            <a href="tel:123-456-7890">
                                <h6 class="call">+256 21458.2146</h6>
                            </a>
                        </div>
                    </div> -->
                    <a class="rts-btn btn-primary-2 menu-block-none" href="#">Book a Meeting</a>
                    <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20">
                        <img class="menu-dark" src="<?= base_url() ?>public/user_assets/assets/images/icon/menu.png" alt="Menu-icon">
                        <img class="menu-light" src="<?= base_url() ?>public/user_assets/assets/images/icon/menu-light.png" alt="Menu-icon">
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div id="anywhere-home"></div>
    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <?php
            if(count($basic_info)>0){
                ?>
                <a class='logo-1' href='<?= base_url() ?>usercontroller/'>
                <img class="logo" src="<?= base_url() ?>public/upload/class_logo/<?= $basic_info[0]['class_logo'] ?>" alt="makeuca_logo" style="height:100px;width:156px">
                </a>
                <a class='logo-2' href='<?= base_url() ?>usercontroller/'><img class="logo" src="<?= base_url() ?>public/upload/class_logo/<?= $basic_info[0]['class_logo'] ?>" alt="makeuca_logo"></a>
                <a class='logo-3' href='<?= base_url() ?>usercontroller/'><img class="logo" src="<?= base_url() ?>public/upload/class_logo/<?= $basic_info[0]['class_logo'] ?>" alt="makeuca_logo"></a>
                <a class='logo-4' href='<?= base_url() ?>usercontroller/'><img class="logo" src="<?= base_url() ?>public/upload/class_logo/<?= $basic_info[0]['class_logo'] ?>" alt="makeuca_logo"></a>
                <?php
            }else{
                ?>
            <a class='logo-1' href='<?= base_url() ?>usercontroller/'>
                <img class="logo" src="https://makeuca.live/wp-content/uploads/2023/11/make-u-ca-logo-education-1024x405.png" alt="makeuca_logo" style="height:100px;width:156px">
            </a>
            <a class='logo-2' href='<?= base_url() ?>usercontroller/'><img class="logo" src="https://makeuca.live/wp-content/uploads/2023/11/make-u-ca-logo-education-1024x405.png" alt="makeuca_logo"></a>
            <a class='logo-3' href='<?= base_url() ?>usercontroller/'><img class="logo" src="https://makeuca.live/wp-content/uploads/2023/11/make-u-ca-logo-education-1024x405.png" alt="makeuca_logo"></a>
            <a class='logo-4' href='<?= base_url() ?>usercontroller/'><img class="logo" src="https://makeuca.live/wp-content/uploads/2023/11/make-u-ca-logo-education-1024x405.png" alt="makeuca_logo"></a>
                <?php
            }
            ?>
            
            <div class="body d-none d-xl-block">
            <?php
                if(count($basic_info)>0){
                    ?>
                    <p class="disc">
                        <?= $basic_info[0]['about_information'] ?>
                    </p>
                    <?php
                }else{
                    ?>
                    <p class="disc">
                    Expert and Experience Paper Setter and Paper Checker Team · Sharpen yourself with our Cumulative Tests · Get world class evaluation from
                    </p>

                    <?php
                }
            ?>
                
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <?php
                            if(count($basic_info)>0){
                                ?>
                                <?= $basic_info[0]['whatsapp_number'] ?>
                                <?php
                            }else{
                                ?>
                                <a href="#">+8801234566789</a>
                                <?php
                            }
                            ?>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            
                            <?php
                            if(count($basic_info)>0){
                                ?>
                                <a href="#"><?= $basic_info[0]['email_address'] ?></a>
                                <?php
                            }else{
                                ?>
                                <a href="#">example@gmail.com</a>
                                <?php
                            }
                            ?>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <?php
                            if(count($basic_info)>0){
                                ?>
                                 <a href="<?= $basic_info[0]['map_link'] ?>">
                                    <?= $basic_info[0]['class_add'] ?>
                                 </a>
                                <?php
                            }else{
                                ?>
                             <a href="#">13/A, New Pro State, NYC</a>
                                <?php
                            }
                            ?>
                           
                        </div>
                        <!-- single ENd -->
                    </div>
                    <div class="social-wrapper-two menu">
                        <a href="<?= $basic_info[0]['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?= $basic_info[0]['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                        <a href="<?= $basic_info[0]['insta_link'] ?>"><i class="fab fa-instagram"></i></a>
                        <a href="tel:<?= $basic_info[0]['whatsapp_number'] ?>"><i class="fab fa-whatsapp"></i></a>
                        <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="body-mobile d-block d-xl-none">
                <nav class="nav-main mainmenu-nav">
                    <ul class="mainmenu">
                        <li class="menu-item menu-item"><a class='menu-link' href='contactus.html'>Home</a></li>
                        <!-- <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Home</a>
                            <ul class="submenu">
                                <li>
                                    <ul>
                                        <a href="#0" class="tag">Homepages</a>
                                        <li class="mobile-menu-link"><a href='index.html'>Main Home</a></li>
                                        <li class="mobile-menu-link"><a href='index-two.html'>Consulting Home</a></li>
                                        <li class="mobile-menu-link"><a href='index-three.html'>Corporate Home</a></li>
                                        <li class="mobile-menu-link"><a href='index-four.html'>Insurance Home</a></li>
                                        <li class="mobile-menu-link"><a href='index-five.html'>Marketing Home</a></li>
                                        <li class="mobile-menu-link"><a href='index-six.html'>Finance Home</a></li>
                                        <li class="mobile-menu-link"><a href='index-seven.html'>Human Resources</a></li>
                                        <li class="mobile-menu-link"><a href='index-eight.html'>IT Solutions</a></li>
                                        <li class="mobile-menu-link"><a href='onepage-nine.html'>Modern Agency</a></li>
                                        <li class="mobile-menu-link"><a href='onepage-ten.html'>Startup Agency</a></li>
                                        <li class="mobile-menu-link"><a href='onepage-eleven.html'>Branding-Agency</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <a href="#0" class="tag">Onepages</a>
                                        <li class="mobile-menu-link"><a href='onepage-one.html'>Main Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href='onepage-two.html'>Consulting Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href='onepage-three.html'>Corporate Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href='onepage-four.html'>Insurance Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href='onepage-five.html'>Marketing Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href='onepage-six.html'>Finance Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href='onepage-seven.html'>Human Resources Onepage</a></li>
                                        <li class="mobile-menu-link"><a href='onepage-eight.html'>IT Solutions Onepage</a></li>
                                        <li class="mobile-menu-link"><a href='onepage-nine.html'>Modern Agency</a></li>
                                        <li class="mobile-menu-link"><a href='onepage-ten.html'>Startup Agency</a></li>
                                        <li class="mobile-menu-link"><a href='onepage-eleven.html'>Branding-Agency</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a class='menu-link' href='about-us.html'>About Us</a></li>
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Services</a>
                            <ul class="submenu">
                                <li class="has-droupdown sub-droupdown">
                                    <a href="#">Our Service</a>
                                    <ul class="submenu third-lvl mobile-menu">
                                        <li><a href='our-service.html'>Service 1</a></li>
                                        <li><a href='service-2.html'>Service 2</a></li>
                                        <li><a href='service-3.html'>Service 3</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-link"><a href='service-details.html'>Service Details</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Pages</a>
                            <ul class="submenu">
                                <li class="mobile-menu-link"><a href='project.html'>Project</a></li>
                                <li class="mobile-menu-link"><a href='project-details.html'>Project Details</a></li>
                                <li class="mobile-menu-link"><a href='team.html'>Team</a></li>
                                <li class="mobile-menu-link"><a href='team-details.html'>Team Details</a></li>
                                <li class="mobile-menu-link"><a href='appoinment.html'>appoinment</a></li>
                                <li class="mobile-menu-link"><a href='price-plan.html'>Price Plan</a></li>
                                <li class="mobile-menu-link"><a href='404.html'>404 Page</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Blog</a>
                            <ul class="submenu">
                                <li class="mobile-menu-link"><a href='blog-list.html'>Blog List</a></li>
                                <li class="mobile-menu-link"><a href='blog-grid.html'>Blog Grid</a></li>
                                <li class="mobile-menu-link"><a href='blog-details.html'>Blog Details</a></li>
                            </ul>
                        </li> -->
                        <li class="menu-item menu-item"><a class='menu-link' href='contactus.html'>Contact</a></li>
                    </ul>
                </nav>
                <div class="social-wrapper-two menu mobile-menu">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
                <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a>
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>
    <!-- ENd Header Area -->