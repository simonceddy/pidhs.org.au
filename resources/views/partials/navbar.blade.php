<div class="navbar flex justify-around text-center p-5 font-bold my-2 max-w-lg">
    <div class="navbar-item">
        <a href="{{route('home')}}">Home</a>
    </div>
    <div class="navbar-item">
        <a href="#" id="about-dropdown">About</a>
        <div class="navbar-dropdown flex flex-col items-start">
            <div class="navbar-dropdown-item w-full">
                <a href="{{route('article.show', 'committee')}}">Committee</a>
            </div>
            <div class="navbar-dropdown-item w-full">
                <a href="{{route('article.show', 'aims_objectives')}}">Aims & Objectives</a>
            </div>
            <div class="navbar-dropdown-item w-full">
                <a href="{{route('article.show', 'geographic_area')}}">Geographic Area</a>
            </div>
            <div class="navbar-dropdown-item w-full">
                <a href="{{route('article.show', 'history_of_the_society')}}">History Of The Society</a>
            </div>
            <div class="navbar-dropdown-item w-full">
                <a href="{{route('article.show', 'constitution')}}">Constitution</a>
            </div>
            <div class="navbar-dropdown-item w-full">
                <a href="{{route('article.show', 'annual_reports')}}">Annual Reports</a>
            </div>
            <div class="navbar-dropdown-item w-full">
                <a href="{{route('article.show', 'takedown_policy')}}">Takedown Policy</a>
            </div>
        </div>
    </div>
    <div class="navbar-item">
        <a href="{{route('news.index')}}">News</a>
    </div>
    <div class="navbar-item">
        <a href="#">Museum</a>
        <div class="navbar-dropdown flex flex-col items-start">
            <div class="navbar-dropdown-item w-full">
                <a href="{{route('article.show', 'where_when_to_find_us')}}">Where and When to Find Us</a>
            </div>
            <div class="navbar-dropdown-item w-full">
                <a href="{{route('article.show', 'what_to_see_do')}}">What to See & Do</a>
            </div>
            <div class="navbar-dropdown-item w-full">
                <a href="{{route('article.show', 'books_for_sale')}}">Books For Sale</a>
            </div>
        </div>
    </div>
    <div class="navbar-item">
        <a href="{{route('event.upcoming')}}">Events</a>
    </div>
    <div class="navbar-item">
        <a href="{{route('article.show', 'contact')}}">Contact</a>
    </div>
    <div class="navbar-item">
        <a href="{{route('article.show', 'membership')}}">Membership</a>
    </div>
    <div class="navbar-item">
        <a href="{{route('article.show', 'donate')}}">Donate</a>
    </div>
    {{-- <div class="navbar-item">
        <a href="{{route('exhibitions.index')}}">Online Exhibitions</a>
    </div> --}}
</div>
