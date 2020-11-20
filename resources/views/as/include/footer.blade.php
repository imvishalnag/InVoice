
    <footer id="footer" class="footer">
        <div class="footer-main">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-sm-12 footer-widget play-widget">
                    <h3 class="widget-title">GET IT ON</h3>
                    <ul>
                        <li>
                            <p>Get our andoid application on google play. Click the logo to get the link.</p>
                            <img src="{{asset('web/images/andriod.jpg')}}" alt="">
                        </li>                        
                    </ul>
                    </div><!-- Col end -->

                    <div class="col-lg-3 col-sm-12 footer-widget widget-categories">
                    <h3 class="widget-title">Hot Categories</h3>
                    <ul>
                        <li>
                            <a href="#"><span class="catTitle">বিষয়ে</span></a>
                        </li>
                        <li>
                            <a href="{{route('ass.news', ['id'=> encrypt(12)])}}"><span class="catTitle">ভাৰতবৰ্ষ</span></a>
                        </li>
                        <li>
                            <a href="{{route('ass.news', ['id'=> encrypt(13)])}}"><span class="catTitle">বিশ্ব</span></a>
                        </li>
                        <li>
                            <a href="{{route('ass.news', ['id'=> encrypt(2)])}}"><span class="catTitle">গুৱাহাটী</span></a>
                        </li>
                        <li>
                            <a href="{{route('ass.news', ['id'=> encrypt(1)])}}"><span class="catTitle">অসম</span></a>
                        </li>
                        <li>
                            <a href="{{route('ass.news', ['id'=> encrypt(14)])}}"><span class="catTitle">উত্তৰপূব</span></a>
                        </li>
                        <li>
                            <a href="{{route('ass.news', ['id'=> encrypt(16)])}}"><span class="catTitle">ক্ৰীড়া</span></a>
                        </li>
                        <li>
                            <a href="{{route('ass.news', ['id'=> encrypt(15)])}}"><span class="catTitle">মনোৰঞ্জণ</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="catTitle">ভিডিও</span></a>
                        </li>
                        <li>
                            <a target="_blank" href="{{route('web.livetv.livetv')}}"><span class="catTitle">LIVE TV</span></a>
                        </li>
                    </ul>                    
                                
                    </div><!-- Col end -->

                    <div class="col-lg-5 col-sm-12 footer-info text-center">
                    <div class="footer-info-content">
                        <div class="footer-logo">
                            <img class="img-fluid" src="{{asset('web/images/logos/logo.png')}}" alt="" />
                        </div>
                        <p>News Time Northeast is a newsportal and going source for technical and digital content for its influential audience around the globe. You can reach us via email or phone.</p>
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
                    <span>Copyright © 2019 News Time Northeast All Rights Reserved. Designed By <a href="" style="color:#ffe609">Webinfotech</a></span>
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

</div><!-- Body inner end -->
</body> 

</html>