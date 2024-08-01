<div class="header">
    <div class="container">
        <div class="w3layouts_logo">
            <a href="{{ route('home') }}">
                <h1>One<span>Movies</span></h1>
            </a>
        </div>
        <div class="w3_search">
            <form action="{{ route('film.search') }}" method="get">
                <input type="text" name="search" placeholder="Search" required="">
                <input type="submit" value="Go">
            </form>
        </div>
        <div class="w3l_sign_in_register">
            <ul>
                <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
