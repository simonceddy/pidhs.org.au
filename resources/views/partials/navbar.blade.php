{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> --}}
    <div id="menu">
        <ul id="nav-menu">
            <li>
                <a href="@article(home)">Home</a>
            </li>
            <li>
                <a href="#" id="about-dropdown">About</a>
                <ul>
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
                        <li><a href="@article(where_and_when_to_find_us)}}">Where and When to Find Us</a></li>
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
                <a href="{{route('exhibitions.index')}}">Exhibitions</a>
            </li>
        </ul>

    </div>
</nav>
