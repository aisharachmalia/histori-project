<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html">Halaman Dashboard</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <ul class="nav navbar-right navbar-top-links">
        @guest
        @else
        <li class="dropdown">
            
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>{{Auth::user()->name}}<b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                
                <li class="divider"></li>
                <li><a class="btn btn-outline-light" href="{{url('logout')}}" class="text-white"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
                <form action="{{route('logout')}}" method="POST" id="logout-form">
                    @csrf
                </form>
            </ul>
        </li> 
        @endguest
        
        
        {{-- <div class="text-end">
            <li class="dropdown">
            @guest
            <li style="list-style: none"><a class="btn btn-outline-light" href="{{url('login')}}" class="text-white">Login</a>
                <a class="btn btn-outline-light" href="{{url('register')}}" class="text-white">Register</a>
            </li>
            @else
            <h4 class="text-white" style="color: white;">{{Auth::user()->name}}</h4>
            <li><a class="btn btn-outline-light" href="{{url('logout')}}" class="text-white"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </li>
            {{-- form untuk logout 
            <form action="{{route('logout')}}" method="POST" id="logout-form">
                @csrf
            </form>
            @endguest
        </li>
        </div> --}}
    </ul>
    <!-- /.navbar-top-links -->