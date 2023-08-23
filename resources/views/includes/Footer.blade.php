     <div class="footer-content">
            <div class="logo">
                <img src="{{ URL::asset('assets/logo.svg') }}" alt="Logo">
            </div>
            <div class="footer-links">
                <div class="footer-column">
                    <h3>My Account</h3>
                    <a href="/login">Log in</a>
                </div>
                <div class="footer-column">
                    <h3>Shop</h3>
                    <a href="/plants">Plants</a>
                </div>
                <div class="footer-column">
                    <h3>Customer Service</h3>
                    <a href="#">FAQ</a>
                    <a href="#assistant">Contact Us</a>
                </div>
                <div class="footer-column">
                    <h3>About</h3>
                    <a href="#">Blog</a>
                    <a href="#">Careers</a>
                    <a href="#">About us</a>
                </div>
            </div>
            <div class="footer-links-mobile">
                <div class="footer-column-mobile" id="myDropdown1">
                    <h3 onclick="myFunction1()" class="dropbtn">
                        Customer Service
                        <span class="footer-col-mob-plus dropbtn">+</span>
                    </h3>
                    <a href="#">FAQ</a>
                    <a href="#assistant">Contact Us</a>
                </div>
                <div class="footer-column-mobile" id="myDropdown2">
                    <h3 onclick="myFunction2()" class="dropbtn">
                        Shop
                        <span class="footer-col-mob-plus dropbtn">+</span>
                    </h3>
                    <a href="/plants">Plants</a>
                </div>
                <div class="footer-column-mobile" id="myDropdown3">
                    <h3 onclick="myFunction3()" class="dropbtn">
                        About
                        <span class="footer-col-mob-plus dropbtn">+</span>
                    </h3>
                    <a href="#">Blog</a>
                    <a href="#">Careers</a>
                    <a href="#">About us</a>
                </div>
                <div class="footer-column-mobile-login">
                    <a href="/login">Log in</a>
                </div>
            </div>
            <div class="soc-media">
                <a href="#" class="facebook">
                    <i class="fa fa-brands fa-facebook-f" aria-hidden="true"></i>
                </a>
                <a href="#" class="instagram">
                    <i class="fa fa-brands fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#" class="twitter">
                    <i class="fa fa-brands fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
        </div>
