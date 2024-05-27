


<div>
    <div class="dropdown">
        <button class="btn btn-main dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            @auth <span>{{ Auth::user()->name }}</span>
            @else
            <span>Guest</span>
            @endauth <i data-feather="user"></i>
        </button>
        <ul class="dropdown-menu">
            @if(Route::has('login'))
            @auth
            @if(Auth::user()->utype === 'ADM')
            <li>
                <a class="dropdown-item" href="{{route('user.dashboard')}}" class="d-block">My Account</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{route('admin.blogdashboard')}}" class="d-block">Blog Dashboard</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{route('admin.cardashboard')}}" class="d-block">Car Dashboard</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{route('admin.emailmarketing')}}" class="d-block">Email Marketing</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{route('admin.contactUsform')}}" class="d-block">Contact US Form</a>
            </li>

            @else
            <li>
                <a class="dropdown-item" href="{{route('user.dashboard')}}" class="d-block">My Account</a>
            </li>
            @endif
            <li>
                <a class="dropdown-item" href="{{route('logout')}}"
                    onclick="event.preventDefault();document.getElementById('frmlogout').submit();"
                    class="d-block">Logout</a>
                <form id="frmlogout" action="{{route('logout')}}" method="POST">
                    @csrf
                </form>
            </li>
            @else
            <li>
                <a class="dropdown-item" href="{{route('login')}}" class="d-block">Login</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{route('register')}}" class="d-block">Register</a>
            </li>
            @endauth
            @endif
        </ul>
    </div>

</div>
