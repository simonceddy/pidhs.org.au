<div class="m-2 flex flex-row justify-between items-center">
    <span>
        Logged in as {{Auth::user()->username}}
    </span>
    <a class="button button-danger" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>