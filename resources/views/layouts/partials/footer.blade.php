<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <a href="index.html" class="logo">
                        <h3>Logo</h3>
                    </a>

                    <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua consec.</p>

                    <ul class="social-icon">
                        <li>
                            <a href="#">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-linkedin-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Services</h3>

                    <ul class="import-link">
                        <li>
                            <a href="#">Sea Freight</a>
                        </li>
                        <li>
                            <a href="#">Air Freight</a>
                        </li>
                        <li>
                            <a href="#">Road Freight</a>
                        </li>
                        <li>
                            <a href="#">Local Delivery</a>
                        </li>
                        <li>
                            <a href="#">Bus Freight</a>
                        </li>
                        <li>
                            <a href="#">Car Freight</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Company</h3>

                    <ul class="import-link">
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Team</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Terms And Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Address</h3>

                    <ul class="address">
                        <li class="location">
                            <i class="bx bxs-location-plus"></i> {{(isset($setting->address)?$setting->address:'' )}}
                        </li>
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <a href="#">{{(isset($setting->email)?$setting->email:'' )}}</a>
                        </li>
                        <li>
                            <i class="bx bxs-phone-call"></i>
                            <a href="#">{{(isset($setting->phone)?$setting->phone:'' )}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>