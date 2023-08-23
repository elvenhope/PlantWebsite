<div class="searchComponent">
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <form class="searchForm" method="GET" action="{{ route('search') }}">
        <input type="search" placeholder="Search!" name="query" value="{{ $query }}" />
        <button>
            <div>
                <span>Search</span>
                <img src="https://e0.pxfuel.com/wallpapers/542/270/desktop-wallpaper-macbook-air-background-aesthetic-plants-novocom-top-cute-plant.jpg">
            </div>
        </button>
    </form>
</div>

<style>
    .searchForm {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .searchForm input {
        padding: 10px 20px 10px 15px;
        font-family: proxima-nova,sans-serif;
        border-radius: 10px;
        font-size: 16px;
        border: 2px solid #E3C257;
        transition-duration: 0.5s ;
        box-shadow: inset 0px 0px 0px 0px #E3C257;
    }

    .searchForm input:hover {
        box-shadow: inset 0px 0px 10px 0px #E3C257;
    }

    .searchForm input:focus-visible {
        box-shadow: inset 0px 0px 10px 0px #E3C257;
        outline: none;
    }

    .searchForm button {
        background-color: transparent;
        margin: 0;
        cursor: pointer;
        color: #60BB68;
    }


    .searchForm button div {
        position: relative;
        overflow: hidden;
        padding: 10px;
        border-radius: 10px;
        transition: ease-out 0.5s;
    }

    .searchForm button div img {
        object-fit: cover;
        opacity: 100%;
        width: 100%;
        height: auto;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .searchForm button:hover {
        outline: none;
        border: none;
    }

    .searchForm button:hover div {
        box-shadow: inset 0px 0px 20px 0px #60BB68;
    }

    .searchForm button:hover div img {
        opacity: 70%;
    }
</style>
