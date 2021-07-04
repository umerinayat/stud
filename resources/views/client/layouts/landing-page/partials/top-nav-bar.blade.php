<section class="d-flex flex-row align-items-center top-nav-bar shadow-lg" id="topNavBar">
    <div class="top-nav-item text-center home">
        <i class="fas fa-home fa-2x"></i>
    </div>
    <div class="top-nav-item">
        How it works?
    </div>
    <div class="top-nav-item">
        Find Talent
    </div>
    <div class="top-nav-item">
        Find Jobs
    </div>

    @guest
    @if (Route::has('register'))
    <div class="top-nav-item ml-auto sign-up">
        <div class="mt-2"> <a href="{{ route('register') }}"> Sign Up </a> </div>
    </div>
    @endif

    <div class="top-nav-item sign-in">
        <div class="mt-2"> <a href="{{ route('login') }}"> Sign In </a> </div>
    </div>
    @else
    <div class="top-nav-item ml-auto sign-up">

        <div class="mt-2">
            <a class="sign-up" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    @endguest
</section>