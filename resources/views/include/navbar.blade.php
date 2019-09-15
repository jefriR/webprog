
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('books.all') }}">{{config('app.name', 'Bookstore')}}</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        {{-- <li><a href="#">Books</a></li> --}}
        {{-- <li><a href="#">Genres</a></li> --}}
        @if(Session::has('user'))
          <li><a href="#">Profile</a></li>
        @if(Session::get('user')->role == 1)
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin Manage<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('books.all') }}">Books</a></li>
            <li><a href="{{ route('genres.all') }}">Genres</a></li>
            <li><a href="{{ route('authors.all') }}">Authors</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Users</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Transaction History</a></li>
          </ul>
        </li>
        @endif
        @endif
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <i class="fa fa-calender-alt"></i><li class="nav-item disabled"><a href="#" class="nav-link disabled" id="serverTime"></a></li>
        <li class="dropdown">
          
<!--          <ul class="dropdown-menu">-->
            @if(!Session::has('user'))
            <li class="nav-link" ><a href="{{ route('login') }}">Login</a></li>
            <li class="nav-link" ><a href="{{ route('register') }}">Register</a></li>
            @elseif(Session::has('user'))
            <li class="nav-link disabled"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome, 
            {{ (Auth::check() == null) ? "Guest" : Auth::user()->name }} 
           
                </a></li>
            <li class="nav-link" ><a href="{{ route('logout') }}">Logout</a></li>
            @endif
            @if(Session::has('user'))            
            @if(Session::get('user')->role == 1)
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('books.insert') }}">Create Book</a></li>
            <li><a href="{{ route('genres.insert') }}">Create Genre</a></li>
            <li><a href="{{ route('authors.insert') }}">Create Author</a></li>
            @endif
            @endif
<!--          </ul>-->
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>