<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/e63de0730d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}"></script>
    <title>Mage's Greens</title>
</head>
<body>
    <header>
        <nav>
            <div class="top-nav">
                <div>
                  <a href="/" class="logo"><b>Mage's Greens</b></a>
                </div>
                <input id="menu-toggle" type="checkbox" />
                <label class='menu-button-container' for="menu-toggle">
                <div class='menu-button'></div>
              </label>
                <ul class="menu">
                  <li>
                    <a href="/plants">Plants</a>
                    <svg class="h-5 w-5 text-sold-out" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </li>
                  <li>
                    <a href="#">Pots</a>
                    <svg class="h-5 w-5 text-sold-out" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </li>
                  <li>
                    <a href="#">Log In</a>
                    <svg class="h-5 w-5 text-sold-out" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </li>
                  <li>
                    <a href="#">Cart</a>
                    <svg class="h-5 w-5 text-sold-out" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </li>
                </ul>
              </div>
        </nav>
    </header>
    <main>
        <div class="wallpaper">
            <h1>touching the hearts of all plants</h1>
            <div class="overlay">
                <h2>Summer sale</h2>
                <p>Enim aliqua occaecat est et magna ex voluptate id minim magna do tempor.</p>
                <button>Let's go</button>
            </div>
        </div>
        <div class="products">
            <div class="product">
                <div class="productImage">
                    <img src="{{ URL::asset('images/plant1.jpg') }}" alt="">
                </div>
                <div class="productInfo">
                    <h2>Grape</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="product">
                <div class="productImage">
                    <img src="{{ URL::asset('images/plant2.jpg') }}" alt="">
                </div>
            <button>View all</button>
        </div>
        <div class="shipping-notice">
            <img src="{{ URL::asset('images/shipping-notice.png') }}" alt="">
            <p>Free shipping from €50,-</p>
        </div>
        <div class="featured-image">
            <img src="{{ URL::asset('images/featured-image.jpg') }}" alt="">
        <div>
        <div class="google-review">
            <h2><b>Magesgreens.com</b> is rated <b>excellent</b> by our customers.</h2>
        </div>
        <div class="assistant">
            <img src="{{ URL::asset('images/assistant.jpg') }}" alt="">
            <h2>Hi, I'm Alex, your Mage's Greens guide!</h2>
            <button>Can I help you?</button>
        </div>
    </main>
    <footer class="myFooter">
        <div class="footer-content">
            <div class="logo">
                <img src="" alt="Logo">
            </div>
            <div class="footer-links">
                <div class="footer-column">
                    <h3>My Account</h3>
                    <a href="#">Log in</a>
                    <a href="#">Cart</a>
                </div>
                <div class="footer-column">
                    <h3>Shop</h3>
                    <a href="#">Plants</a>
                    <a href="#">Pots</a>
                </div>
                <div class="footer-column">
                    <h3>Customer Service</h3>
                    <a href="#">FAQ</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Shipping</a>
                </div>
                <div class="footer-column">
                    <h3>About</h3>
                    <a href="#">Blog</a>
                    <a href="#">Careers</a>
                    <a href="#">About us</a>
                </div>
            </div>
            <div class="soc-media">
                <a href="#" class="facebook">
                    <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                </a>
                <a href="#" class="instagram">
                    <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#" class="twitter">
                    <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
