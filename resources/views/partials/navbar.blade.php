<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="navbar" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="about-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="{{route('about_committee')}}">Committee</a>
                    <a class="dropdown-item" href="{{route('about_objectives')}}">Aims & Objectives</a>
                    <a class="dropdown-item" href="{{route('about_area')}}">Geographic Area</a>
                    <a class="dropdown-item" href="{{route('about_constitution')}}">Constitution</a>
                    <a class="dropdown-item" href="{{route('about_reports')}}">Annual Reports</a>
                    <a class="dropdown-item" href="{{route('about_takedown')}}">Takedown Policy</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('news.index')}}">News</a>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="museum-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Museum</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{route('museum_find_us')}}">Where and When to Find Us</a>
                        <a class="dropdown-item" href="{{route('museum_what_to_do')}}">What to See & Do</a>
                        <a class="dropdown-item" href="{{route('museum_books')}}">Books For Sale</a>
                    </div>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="/events">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('membership')}}">Membership</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('donate')}}">Donate</a>
            </li>
        </ul>
    </div>
</nav>
