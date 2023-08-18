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
