<div class="navbar flex justify-around">
    <div class="navbar-item">
        <a href="{{route('home')}}">Home</a>
    </div>
    <div class="navbar-item">
        <a href="#" id="about-dropdown">About</a>
        <div class="navbar-dropdown flex flex-col items-start">
            <div class="navbar-dropdown-item">
                <a href="@article(committee)">Committee</a>
            </div>
            <div class="navbar-dropdown-item">
                <a href="@article(aims_objectives)">Aims & Objectives</a>
            </div>
            <div class="navbar-dropdown-item">
                <a href="@article(geographic_area)">Geographic Area</a>
            </div>
            <div class="navbar-dropdown-item">
                <a href="@article(history_of_the_society)">History Of The Society</a>
            </div>
            <div class="navbar-dropdown-item">
                <a href="@article(constitution)">Constitution</a>
            </div>
            <div class="navbar-dropdown-item">
                <a href="@article(annual_reports)">Annual Reports</a>
            </div>
            <div class="navbar-dropdown-item">
                <a href="@article(takedown_policy)">Takedown Policy</a>
            </div>
        </div>
    </div>
    <div class="navbar-item">
        <a href="{{route('news.index')}}">News</a>
    </div>
    <div class="navbar-item">
        <a href="#">Museum</a>
        <div class="navbar-dropdown flex flex-col items-start">
            <div class="navbar-dropdown-item">
                <a href="@article(where_when_to_find_us)">Where and When to Find Us</a>
            </div>
            <div class="navbar-dropdown-item">
                <a href="@article(what_to_see_do)">What to See & Do</a>
            </div>
            <div class="navbar-dropdown-item">
                <a href="@article(books_for_sale)">Books For Sale</a>
            </div>
        </div>
    </div>
    <div class="navbar-item">
        <a href="{{route('event.index')}}">Events</a>
    </div>
    <div class="navbar-item">
        <a href="@article(contact)">Contact</a>
    </div>
    <div class="navbar-item">
        <a href="@article(membership)">Membership</a>
    </div>
    <div class="navbar-item">
        <a href="@article(donate)">Donate</a>
    </div>
    <div class="navbar-item">
        <a href="{{route('exhibitions.app')}}">Exhibitions</a>
    </div>
    {{-- <ul class="navbar-menu flex justify-around">
        <li>
            <a href="{{route('home')}}">Home</a>
        </li>
        <li>
            <a href="#" id="about-dropdown">About</a>
            <ul class="navbar-dropdown flex flex-col items-start">
                <li>
                    <a href="@article(committee)">Committee</a>
                </li>
                <li>
                <a href="@article(aims_objectives)">Aims & Objectives</a>
                </li>
                <li>
                <a href="@article(geographic_area)">Geographic Area</a>
                </li>
                <li>
                <a href="@article(history_of_the_society)">History Of The Society</a>
                </li>
                <li>
                <a href="@article(constitution)">Constitution</a>
                </li>
                <li>
                <a href="@article(annual_reports)">Annual Reports</a>
                </li>
                <li>
                <a href="@article(takedown_policy)">Takedown Policy</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('news.index')}}">News</a>
        </li>
        <li class="nav-item dropdown">
                <a href="#">Museum</a>

                <ul>
                    <li><a href="@article(where_when_to_find_us)">Where and When to Find Us</a></li>
                    <li><a href="@article(what_to_see_do)">What to See & Do</a></li>
                    <li><a href="@article(books_for_sale)">Books For Sale</a></li>
                </ul>
            </li>
        <li class="nav-item">
        <a href="{{route('event.index')}}">Events</a>
        </li>
        <li class="nav-item">
            <a href="@article(contact)">Contact</a>
        </li>
        <li class="nav-item">
            <a href="@article(membership)">Membership</a>
        </li>
        <li class="nav-item">
            <a href="@article(donate)">Donate</a>
        </li>
        <li class="nav-item">
            <a href="{{route('exhibitions.app')}}">Exhibitions</a>
        </li>
    </ul> --}}

</div>
