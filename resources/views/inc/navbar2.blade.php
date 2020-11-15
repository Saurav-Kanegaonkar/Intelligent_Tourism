
<style>
    #myNavbar a{
        color:black !important;
        text-transform: capitalize;
        transition: .3s;
        font-weight: 600;
        font-size: x-large;
        font-family: 'Dancing Script', cursive;
    }
    #myNavbar a:hover{
        background-color: lightgray !important;
        color: #101010 !important;
        box-shadow: 0 0 5px gray,
                    0 0 40px gray,
                    0 0 40px gray;
        border-radius: 16px;
    }
</style>


<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/" style="color: black; font-weight: 800;">SmartTourister</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        {{-- <li><a href="/">Home</a></li> --}}
        {{-- <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li> --}}
        <li><a href="/about" style="font-weight: 900;">About</a></li>
        <li><a href="/posts" style="font-weight: 900;">Blog</a></li>
        <li><a href="/trips" style="font-weight: 900;">Trips</a></li>
        <li><a href="/Places" style="font-weight: 900;">Places</a></li>
        <li><a href="/fun"   style="font-weight: 900;">Fun</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        @else
            <li><a href="/posts/create">Create Posts</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu" style="background-color: #101010;">
                    <li><a href="/home" style="color: white !important">Dashboard</a></li>
                    <li>
                        <a href="{{ route('logout') }}" style="color: white !important" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif

      </ul>
    </div>
  </div>
</nav>