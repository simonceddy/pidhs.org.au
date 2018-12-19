{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> --}}
    <div id="menu">
        <ul id="nav-menu">
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="#" id="about-dropdown">About</a>
                <ul>
                    <li>
                        <a href="{{route('about_committee')}}">Committee</a>
                    </li>
                    <li>
                    <a href="{{route('about_objectives')}}">Aims & Objectives</a>
                    </li>
                    <li>
                    <a href="{{route('about_area')}}">Geographic Area</a>
                    </li>
                    <li>
                    <a href="{{route('about_constitution')}}">Constitution</a>
                    </li>
                    <li>
                    <a href="{{route('about_reports')}}">Annual Reports</a>
                    </li>
                    <li>
                    <a href="{{route('about_takedown')}}">Takedown Policy</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('news.index')}}">News</a>
            </li>
            <li class="nav-item dropdown">
                    <a href="#">Museum</a>

                    <ul>
                        <li><a href="{{route('museum_find_us')}}">Where and When to Find Us</a></li>
                        <li><a href="{{route('museum_what_to_do')}}">What to See & Do</a></li>
                        <li><a href="{{route('museum_books')}}">Books For Sale</a></li>
                    </ul>
                </li>
            <li class="nav-item">
                <a href="/events">Events</a>
            </li>
            <li class="nav-item">
                <a href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
                <a href="{{route('membership')}}">Membership</a>
            </li>
            <li class="nav-item">
                <a href="{{route('donate')}}">Donate</a>
            </li>
        </ul>

    </div>
</nav>
