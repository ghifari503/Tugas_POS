<nav class="main-header navbar navbar-expand navbar-cyan navbar-light">

    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">

            <p style="color: hsl(0, 0%, 1%);">{{ auth()->user()->name }}</p>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            <li class="user-header bg-white">

            <p style="color: hsl(0, 0%, 6%);">{{ auth()->user()->name }}</p>
            </li>

            <li class="user-footer">
                <a href="{{ route('user.profile') }}" class="btn btn-default btn-flat">Profile</a>
                <a href="#" class="btn btn-default btn-flat text-right"
            onclick="document.getElementById('logout-form').submit()">Keluar</a>
                </li>




    </ul>
    </nav>

 <form action="{{ route('logout') }}" id="logout-form" method="post" style="display: none;">
    @csrf
</form>


