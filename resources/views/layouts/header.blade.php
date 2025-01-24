<header style="background-color:#c5c6c7" class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">T<b>M</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">{{ config('app.name') }}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset ('AdminLTE-2\AdminLTE-2\dist\img\user2-160x160.jpg')}}" class="user-image"
                    alt="User Image">
                <span class="hidden-xs">{{ auth()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                <img src="{{ asset ('AdminLTE-2\AdminLTE-2\dist\img\user2-160x160.jpg')}}" class="img-circle"
                    alt="User Image">

                <p>
                    {{ auth()->user()->name }}  - {{ auth()->user()->email }}
                </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer" style="background-color:#4ca5d8">
                <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat" style="background-color:rgb(225, 238, 247)">Profil</a>
                </div>
                <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat" style="background-color:rgb(225, 238, 247)" 
                        onclick="$('#logout-form').submit()">Keluar</style></a>
                </div>
                </li>
            </ul>
        </li>
    </nav>
</header>

<form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
    @csrf
</form>