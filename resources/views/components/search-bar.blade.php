<div class="searchComponent">
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <form class="searchForm" method="GET" action="{{ route('search') }}">
        <input type="search" placeholder="Search!" name="query" value="{{ $query }}" />
        <button>Search</button>
    </form>
</div>

<style>
    .searchForm {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .searchForm input {
        padding: 10px;
        font-family: 'Lora', serif;
        border-radius: 10px;
        font-size: 16px;
        border-color: #E3C257;
    }

    .searchForm button {
        padding: 15px;
        background-color: #E3C257;
    }

    .searchForm button:hover {
        background-color: #a58f47;
    }
</style>