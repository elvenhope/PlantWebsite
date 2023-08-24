<div class="searchComponent">
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <form class="searchForm" autocomplete="off" method="GET" action="{{ route('plants') }}">
        <input maxlength="25" type="search" placeholder="Search ..." name="query" value="{{ $query }}" />
        <button>
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </form>
</div>

<style>

    /* Input field */
    .searchForm input {
        padding: 11px;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        min-width: 200px;
        margin-bottom: 20px;
        border: 1px solid white;
        flex-grow: 2;
        overflow: hidden;
        width: 20%;
        border: 1px solid #ccc;
        transition-duration: 0.4s;
    }
    
    .searchForm input:hover {
        border: 1px solid #ccc;
        transition-duration: 0.4s;
    }
    .searchForm input:active{
        border: none;
        outline: none;
        transition-duration: 0.4s;
    }

    .searchForm input:focus {
        border: none;
        outline: none;
        transition-duration: 0.4s;
    }
    
    /* Input button */
    .searchForm button {
        width: 3%;
        padding: 5px;
        min-width: 80px;
        font-size: 1em;
        border-radius: 4px;
        height: 40px;
        background: transparent;
        color: #ccc;
        margin-left: -70px;
        border: 1px solid transparent;
        z-index: -1;
    }

    /* Clears the X from the input field */

    input[type=search]::-ms-clear { display: none; width : 0; height: 0; }
    input[type=search]::-ms-reveal { display: none; width : 0; height: 0; }
    input[type="search"]::-webkit-search-decoration,
    input[type="search"]::-webkit-search-cancel-button,
    input[type="search"]::-webkit-search-results-button,
    input[type="search"]::-webkit-search-results-decoration { display: none; }

    @media (max-width: 700px) {
        .searchForm button {
            display: none;
        }

        .searchForm input {
            width: 100%;
        }
    }
</style>
