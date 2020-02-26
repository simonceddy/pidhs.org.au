<div class="nav-toggle md:hidden w-11/12">
    <button type="button" id="toggle-menu-button" class="w-full border rounded py-1 px-3 hover:text-white hover:bg-black flex flex-row justify-between items-center">
        <span>☰</span> <span>Menu</span>
    </button>
</div>
<ul class="navbar md:flex hidden flex-col md:flex-row flex-wrap justify-around text-center lg:pb-4 pt-4 pb-1 font-bold my-2 mx-auto md:items-center" id="main-menu">
    <li class="navbar-item">
        <a class="navbar-link" href="{{route('home')}}">Home</a>
    </li>
    <li class="navbar-item">
        <a class="navbar-link" href="#" id="about-dropdown">About</a>
        <ul class="navbar-dropdown flex flex-col items-start">
            <li class="navbar-dropdown-item w-full">
                <a class="navbar-link" href="{{route('article.show', 'committee')}}">Committee</a>
            </li>
            <li class="navbar-dropdown-item w-full">
                <a class="navbar-link" href="{{route('article.show', 'aims_objectives')}}">Aims & Objectives</a>
            </li>
            <li class="navbar-dropdown-item w-full">
                <a class="navbar-link" href="{{route('article.show', 'geographic_area')}}">Geographic Area</a>
            </li>
            <li class="navbar-dropdown-item w-full">
                <a class="navbar-link" href="{{route('article.show', 'history_of_the_society')}}">History Of The Society</a>
            </li>
            <li class="navbar-dropdown-item w-full">
                <a class="navbar-link" href="{{route('article.show', 'constitution')}}">Constitution</a>
            </li>
            <li class="navbar-dropdown-item w-full">
                <a class="navbar-link" href="{{route('article.show', 'annual_reports')}}">Annual Reports</a>
            </li>
            <li class="navbar-dropdown-item w-full">
                <a class="navbar-link" href="{{route('article.show', 'takedown_policy')}}">Takedown Policy</a>
            </li>
        </ul>
    </li>
    <li class="navbar-item">
        <a class="navbar-link" href="{{route('news.index')}}">News</a>
    </li>
    <li class="navbar-item">
        <a class="navbar-link" href="#">Museum</a>
        <ul class="navbar-dropdown flex flex-col items-start">
            <li class="navbar-dropdown-item w-full">
                <a class="navbar-link" href="{{route('article.show', 'where_when_to_find_us')}}">Where and When to Find Us</a>
            </li>
            <li class="navbar-dropdown-item w-full">
                <a class="navbar-link" href="{{route('article.show', 'what_to_see_do')}}">What to See & Do</a>
            </li>
            <li class="navbar-dropdown-item w-full">
                <a class="navbar-link" href="{{route('article.show', 'books_for_sale')}}">Books For Sale</a>
            </li>
        </ul>
    </li>
    <li class="navbar-item">
        <a class="navbar-link" href="{{route('event.upcoming')}}">Events</a>
    </li>
    <li class="navbar-item">
        <a class="navbar-link" href="{{route('article.show', 'contact')}}">Contact</a>
    </li>
    <li class="navbar-item">
        <a class="navbar-link" href="{{route('article.show', 'membership')}}">Membership</a>
    </li>
    <li class="navbar-item">
        <a class="navbar-link" href="{{route('article.show', 'donate')}}">Donate</a>
    </li>
    <li class="navbar-item">
        <a class="navbar-link" href="{{route('exhibitions.index')}}">Online Exhibitions</a>
    </li>
    <li class="navbar-item md:hidden">
        <a href="{{route('article.show', 'services')}}" class="navbar-link">Services</a>
    </li>

    <li class="navbar-item md:hidden">
        <a href="{{route('collection.index')}}" class="navbar-link">Collection</a>
    </li>

    <li class="navbar-item md:hidden">
        <a href="{{route('essay.index')}}" class="navbar-link">Essays &amp; Talks</a>
    </li>

    <li class="navbar-item md:hidden">
        <a href="{{route('article.show', 'links')}}" class="navbar-link">Links</a>
    </li>

</ul>
