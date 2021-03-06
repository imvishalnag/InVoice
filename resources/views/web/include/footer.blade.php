
    <footer id="footer" class="footer">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 footer-widget play-widget">
                        <h3 class="widget-title">About Us</h3>
                        <ul>
                            <li>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </li>                        
                        </ul>
                    </div><!-- Col end -->

                    <div class="col-lg-4 col-sm-12 footer-info text-center">
                        <div class="footer-info-content">
                            <div class="footer-logo">
                                <img class="img-fluid" src="{{asset('web/images/logos/logo.jpg')}}" alt="" />
                            </div>
                            <p class="footer-info-phone"><i class="fa fa-phone"></i> +(785) 238-4131</p>
                            <p class="footer-info-email"><i class="fa fa-envelope-o"></i> editor@news247.com</p>
                            <ul class="unstyled footer-social">
                                <li>
                                    <a title="Facebook" href="#">
                                    <span class="social-icon"><i class="fa fa-facebook"></i></span>
                                    </a>
                                    <a title="Twitter" href="#">
                                    <span class="social-icon"><i class="fa fa-twitter"></i></span>
                                    </a>
                                    <a title="Skype" href="#">
                                    <span class="social-icon"><i class="fa fa-instagram"></i></span>
                                    </a>
                                    <a title="Youtube" href="#">
                                    <span class="social-icon"><i class="fa fa-youtube"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- Footer info content end -->
                    </div><!-- Col end -->

                    <div class="col-lg-4 col-sm-12 footer-widget widget-categories">
                        <h3 class="widget-title">Hot Categories</h3>
                        <ul>
                            <li>
                                <a href="#"><span class="catTitle">ABOUT</span></a>
                            </li>
                            <li>
                                <a href="{{route('web.news', ['id'=> encrypt(12)])}}"><span class="catTitle">NATIONAL</span></a>
                            </li>
                            <li>
                                <a href="{{route('web.news', ['id'=> encrypt(13)])}}"><span class="catTitle">INTERNATIONAL</span></a>
                            </li>
                            <li>
                                <a href="{{route('web.news', ['id'=> encrypt(2)])}}"><span class="catTitle">NORTHEAST</span></a>
                            </li>
                            <li>
                                <a href="{{route('web.news', ['id'=> encrypt(1)])}}"><span class="catTitle">ASSAM</span></a>
                            </li>
                            <li>
                                <a href="{{route('web.news', ['id'=> encrypt(14)])}}"><span class="catTitle">POLITICS</span></a>
                            </li>
                            <li>
                                <a href="{{route('web.news', ['id'=> encrypt(16)])}}"><span class="catTitle">ECONOMY</span></a>
                            </li>
                            <li>
                                <a href="{{route('web.news', ['id'=> encrypt(15)])}}"><span class="catTitle">CRIME</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="catTitle">ABOUT</span></a>
                            </li>
                            <li>
                                <a target="_blank" href="{{route('web.livetv.livetv')}}"><span class="catTitle">Sports</span></a>
                            </li>
                            <li>
                                <a target="_blank" href="{{route('web.livetv.livetv')}}"><span class="catTitle">Editor's Desk</span></a>
                            </li>
                        </ul>   
                    </div><!-- Col end -->

                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer main end -->

        <div class="footer-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer info end -->
    </footer><!-- Footer end -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="copyright-info">
                    <span>Copyright © 2019 Invoice All Rights Reserved. Designed By <a href="" style="color:#ffe609">Webinfotech</a></span>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="footer-menu">
                    <ul class="nav unstyled">
                        <li><a href="#">Site Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Advertisement</a></li>
                        <li><a href="#">Cookies Policy</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    </div>
                </div>
            </div><!-- Row end -->

            <div id="back-to-top" class="back-to-top">
                <button class="btn btn-primary" title="Back to Top">
                    <i class="fa fa-angle-up"></i>
                </button>
            </div>

        </div><!-- Container end -->
    </div><!-- Copyright end -->


    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="{{asset('web/js/jquery.js')}}"></script>
    <!-- Popper js -->
    <script type="text/javascript" src="{{asset('web/js/popper.min.js')}}"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="{{asset('web/js/bootstrap.min.js')}}"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{asset('web/js/owl.carousel.min.js')}}"></script>
    <!-- Color box -->
    <script type="text/javascript" src="{{asset('web/js/jquery.colorbox.js')}}"></script>
    <!-- Template custom -->
    <script type="text/javascript" src="{{asset('web/js/custom.js')}}"></script>
    <script>
        var slideIndex = 0;
            showSlides();

            function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
        }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        
        </script>

</div><!-- Body inner end -->
</body> 

</html>