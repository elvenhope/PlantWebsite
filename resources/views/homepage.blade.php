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
<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 15930369;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/15930369/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->
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
                    <a href="/plants">
                        <i class="fa-solid fa-seedling mobile-icon" style="color: #434447;"></i>
                        <span class="nav-text">Plants<span>
                    </a>
                    <img src="{{ URL::asset('assets/product/greater-than-icon.svg') }}" class="list-arrow" alt="">
                  <li>
                    <a href="#">
                        <i class="fa-regular fa-address-book mobile-icon" style="color: #434447;"></i>
                        <span class="nav-text">Contacts<span>
                    </a>
                    <img src="{{ URL::asset('assets/product/greater-than-icon.svg') }}" class="list-arrow" alt="">
                  </li>
                  <li>
                    <a href="#">
                        <i class="fa-solid fa-right-to-bracket mobile-icon" style="color: #434447;"></i>
                        <span class="nav-text">Log In<span>
                        </a>
                        <img src="{{ URL::asset('assets/product/greater-than-icon.svg') }}" class="list-arrow" alt="">
                </li>
                  <li>
                    <a href="#">
                        <i class="fas fa-solid fa-sharp fa-light fa-cart-shopping mobile-icon" style="color: #434447;"></i>
                        <span class="nav-text">Cart<span>
                    </a>
                    <img src="{{ URL::asset('assets/product/greater-than-icon.svg') }}" class="list-arrow" alt="">
                  </li>
                </ul>
              </div>
        </nav>
    </header>
    <main>
        <div class="hwrap">
                <div class="hitem">
                    <span><strong>Free shipping</strong> for orders over €50,-</span>
                    <span>30 days Mage's <strong>health guarantee</strong></span>
                    <span><strong>Free returns</strong> for orders over €50,-</span>
                </div>
        </div>
        <div class="wallpaper">
            <h1 class="text-wrapper">touching the<br>hearts of<br>all plants</h1>
            <div class="overlay">
                <h2>Summer sale</h2>
                <p>Elevate your plant care game this summer with PLNTS, <br>your ultimate resource for all things green and vibrant!</p>
                <button>Let's go</button>
            </div>
        </div>
        <div class="mobile-overlay">
            <h2>Summer sale</h2>
            <p>Elevate your plant care game this summer with PLNTS, <br>your ultimate resource for all things green and vibrant!</p>
            <button>Let's go</button>
        </div>
        <div class="products"> 
            <h2>Product list</h2>
            <div class="product">
                <div class="productImage">
                    <img src="{{ URL::asset('images/plant1.jpg') }}" alt="">
                </div>
                <div class="productInfo">
                    <p>Product info</p>
                </div>
            </div>
            <div class="product">
                <div class="productImage">
                    <img src="{{ URL::asset('images/plant2.jpg') }}" alt="">
                </div>
                <button>View all</button>
            </div>
        </div>
        <div class="shipping-notice">
            <img src="{{ URL::asset('images/shipping-notice.png') }}" alt="">
            <p>Free shipping from €50,-</p>
        </div>
        <div class="featured-image">
            <div class="featured-plant-text">
                <h2>Plant of the month</h2>
                <h2>Anthurium Warocqueanum</h2>
            </div>
            <img src="{{ URL::asset('images/featured-image.jpg') }}" alt="">
        </div>
        <div id="review">
            <p><b>Magesgreens.com</b> is rated <b>excellent</b> by our customers.</p>
        </div>
        <div class='sk-ww-google-reviews reviews-list' data-embed-id='181499'></div><script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>        
        <div class="assistant">
            <div id="assistantImage">
                <img src="{{ URL::asset('assets/assistant.jpg') }}" alt="">
            </div>
            <div id="assistantGreet">
                <h2 id="assistantText">Hi, I'm Alex, your Mage's Greens guide!</h2>
                <button>Can I help you?</button>
            </div>
        </div>
    </main>
    <footer class="myFooter">
        <div class="footer-content">
            <div class="logo">
                <img src="assets/logo.svg" alt="Logo">
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
