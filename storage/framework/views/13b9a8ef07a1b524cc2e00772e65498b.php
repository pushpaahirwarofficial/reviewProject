   
    <!-- Footer Area Start -->
    <footer class="footer">
        <div class="container">
            <div class="row section gy-5 gy-xl-0">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="about-company wow fadeInLeft" data-wow-duration="0.8s">
                        <div class="footer__logo mb-4">
                            <a href="<?php echo e(route('index')); ?>">
                                <img src="<?php echo e(asset('assets/images/new_logo.png')); ?>" alt="Logo">
                            </a>
                        </div>
                        <p>Welcome to Finview, your trusted resource for financial loan reviews and comparisons. Our dedicated team of experts analyzes</p>
                        <div class="social mt_32">
                            <a href="#" class="btn_theme social_box"><i class="bi bi-facebook"></i><span></span></a>
                            <a href="#" class="btn_theme social_box"><i class="bi bi-twitter"></i><span></span></a>
                            <a href="#" class="btn_theme social_box"><i class="bi bi-pinterest"></i><span></span></a>
                            <a href="#" class="btn_theme social_box"><i class="bi bi-twitch"></i><span></span></a>
                            <a href="#" class="btn_theme social_box"><i class="bi bi-skype"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer__contact ms-sm-4 ms-xl-0 wow fadeInUp" data-wow-duration="0.8s">
                        <h4 class="footer__title mb-4">Contact</h4>
                        <div class="footer__content">
                            <a href="tel:+1-234-567-891"> <span class="btn_theme social_box"> <i class="bi bi-telephone-plus"></i> </span> +1 234 567 891 <span></span> </a> 
                            <a href="https://pixner.net/cdn-cgi/l/email-protection#0f666169604f6a776e627f636a216c6062"> <span class="btn_theme social_box"> <i class="bi bi-envelope-open"></i> </span> <span class="__cf_email__" data-cfemail="9df4f3fbf2ddf8e5fcf0edf1f8b3fef2f0">[email&#160;protected]</span> <span></span> </a> 
                            <a href="#"> <span class="btn_theme social_box"> <i class="bi bi-geo-alt"></i> </span> 31 Brandy Way, Sutton, SM2 6SE <span></span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="newsletter wow fadeInDown" data-wow-duration="0.8s">
                        <h4 class="footer__title mb-4">Newsletter</h4>
                        <p class="mb_32">Subscribe our newsletter to get our latest update & news</p>
                        <form method="POST" autocomplete="off" id="frmSubscribe" class="newsletter__content-form">
                            <?php echo csrf_field(); ?>
                            <div class="input-group">
                                <input type="text" class="form-control" id="sMail" name="sMail" placeholder="Email Address">
                                <button type="submit" class="emailSubscribe btn_theme btn_theme_active" name="btnsbs" id="emailSubscribe"><i class="bi bi-cursor"></i> <span></span></button>
                            </div>
                            <span id="subscribeMsg"></span>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="quick-link ms-sm-4 ms-xl-0 wow fadeInRight" data-wow-duration="0.8s">
                        <h4 class="footer__title mb-4">Quick Link</h4>
                        <ul>
                            <li><a href="<?php echo e(route('aboutUs')); ?>">About us</a></li>
                            <li><a href="<?php echo e(route('review')); ?>">Reviews</a></li>
                            <li><a href="<?php echo e(route('comparison')); ?>">Comparison</a></li>
                            <li><a href="<?php echo e(route('faq')); ?>">FAQs</a></li>
                            <li><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer__copyright">
                        <p class="copyright text-center">Copyright © <span id="copyYear"></span> <a href="https://getazreview.com/" target="_blank" class="secondary_color">Get A2Z Review</a>. Designed By <a href="https://www.webreakglobal.com/" target="_blank" class="secondary_color">WeBreak Global</a></p>
                        <ul class="footer__copyright-conditions">
                            <li><a href="<?php echo e(route('contactUs')); ?>">Help & Support</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->



    <!-- scroll to top -->
    <a href="#" class="scrollToTop"><i class="bi bi-chevron-double-up"></i></a>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#frmSubscribe').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            $('#subscribeMsg').html('');
            $('#emailSubscribe').html('Please wait....');
            $('#emailSubscribe').attr('disabled', true);
            $.ajax({
                url: "<?php echo e(route('subscribe')); ?>", // Route defined in web.php
                method: "POST",
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',  // Laravel CSRF token
                    sMail: $('#sMail').val()      // Get the email value from the form
                },
                success: function(response) {
                    toastr.success(response.message); 
                    $('#emailSubscribe').html('Subscribe');
                    $('#emailSubscribe').attr('disabled', false);
                    $('#frmSubscribe')[0].reset();

                },
                error: function(response) {
                    let errors = response.responseJSON.errors;
                    toastr.error(errors.sMail[0]);
                    $('#emailSubscribe').html('Subscribe');
                    $('#emailSubscribe').attr('disabled', false); 
                    $('#frmSubscribe')[0].reset(); // Reset the form after success
                }
            });
        });
    });
</script>
<?php /**PATH G:\Laravel\reviewProject\resources\views////template/footer.blade.php ENDPATH**/ ?>