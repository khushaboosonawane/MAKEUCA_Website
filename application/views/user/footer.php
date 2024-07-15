<!-- footer area start -->
    <div class="rts-footer-area p-5 footer-two footer-bg-two  mt_md--80 mt_sm--60">
        <div class="container">
            <div class="row d-flex justify-content-around align-items-center">
                <!-- single wized -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-two-single-wized left">
                        <h3 class="title">
                            <img src="<?= base_url() ?>public/upload/class_logo/<?= $basic_info[0]['class_logo'] ?>" style="height:150px;width:150px;object-fit:contain" alt="">
                        </h3>
                        <p class="disc" style="margin-top:-44px">
                            <?= $basic_info[0]['about_information'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 my-5">
                    <div class="footer-two-single-wized two">
                        <div class="wized-title-area">
                            <h5 class="wized-title">Our Services</h5>
                            <!-- <img src="<?= base_url() ?>public/user_assets/assets/images/footer/under-title-2.png" alt="finbiz_footer"> -->
                        </div>
                        <div class="wized-2-body">
                            <ul>
                                <li><a href='service-details.html'><i class="fal fa-chevron-double-right"></i>CA Test Series</a></li>
                                <li><a href='service-details.html'><i class="fal fa-chevron-double-right"></i>CMA Test Series</a></li>
                                <li><a href='service-details.html'><i class="fal fa-chevron-double-right"></i>CS Test Series</a></li>
                                <li><a href='service-details.html'><i class="fal fa-chevron-double-right"></i>Gurukul</a></li>
                                <li><a href='service-details.html'><i class="fal fa-chevron-double-right"></i>FMU</a></li>

                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12 col-12 my-5">
                    <div class="footer-two-single-wized">
                        <div class="wized-title-area">
                            <h5 class="wized-title">Contact Us</h5>
                            <!-- <img src="<?= base_url() ?>public/user_assets/assets/images/footer/under-title-2.png" alt="finbiz_footer"> -->
                        </div>
                        <div class="wized-2-body">
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="disc">
                                    <span>Call Us 24/7</span>
                                    <a href="tel:<?= $basic_info[0]['whatsapp_number'] ?>"><?= $basic_info[0]['whatsapp_number'] ?></a>
                                </div>
                            </div>
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="disc">
                                    <span>Work with us</span>
                                    <a href="mailto:<?= $basic_info[0]['email_address'] ?>"><?= $basic_info[0]['email_address'] ?></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- single wized -->
                <!-- single wized -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 my-5">
                    <div class="footer-two-single-wized right">
                        <div class="wized-2-body">
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="disc">
                                    <span>Our Location</span>
                                    <a href="<?= $basic_info[0]['map_link'] ?>"><?= $basic_info[0]['class_add'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
            </div>

        </div>
    </div>

    <!-- copyright-area start -->
    <div class="rts-copy-right ptb--30 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-h-2-wrapper">
                        <p class="disc text-white">
                            Made By @A2Z Infotech
                        </p>
                        <!-- <div class="right">
                            <ul>
                                <li><a href='blog-list.html'>Company News</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href='contactus.html'>Contact</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright-area end -->
    <!-- ENd Header Area -->


    <!-- start loader -->
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End loader -->

    <!-- progress Back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- progress Back to top End -->


    <!-- scripts start form hear -->
    <script src="<?= base_url() ?>public/user_assets/assets/js/vendor/jquery.min.js"></script>
    <script src="<?= base_url() ?>public/user_assets/assets/js/vendor/jqueryui.js"></script>
    <script src="<?= base_url() ?>public/user_assets/assets/js/vendor/waypoint.js"></script>
    <script src="<?= base_url() ?>public/user_assets/assets/js/plugins/swiper.js"></script>
    <script src="<?= base_url() ?>public/user_assets/assets/js/plugins/counterup.js"></script>
    <script src="<?= base_url() ?>public/user_assets/assets/js/plugins/sal.min.js"></script>
    <script src="<?= base_url() ?>public/user_assets/assets/js/vendor/bootstrap.min.js"></script>

    <script src="<?= base_url() ?>public/user_assets/assets/js/vendor/waw.js"></script>
    <script src="<?= base_url() ?>public/user_assets/assets/js/plugins/contact.form.js"></script>
    <!-- main Js -->
    <script src="<?= base_url() ?>public/user_assets/assets/js/main.js"></script>
    <!-- scripts end form hear -->
</body>
</html>