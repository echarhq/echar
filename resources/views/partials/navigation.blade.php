<!--li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
    <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li class="dropdown-header">Nav header</li>
        <li><a href="#">Separated link</a></li>
        <li><a href="#">One more separated link</a></li>
    </ul>
</li-->
<li class="active"><a href="#">Dashboard</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        HR Manager <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li class="dropdown-header">MANAGE</li>
        <li>
            <a href="#">Leave</a>
        </li>
        <li>
            <a href="#">Claim</a>
        </li>
</ul>
</li>

<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li>
            <a href="#">My Leave</a>
        </li>
        <li>
            <a href="#">My Claim</a>
        </li>
        <li role="separator" class="divider"></li>
        <li>
            <a href="#">Profile</a>
        </li>
        <li>
            <a href="{{ url('/logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
</ul>
</li>