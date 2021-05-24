<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home*') ? 'active' : '' }}">
        <p>Dashboard</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('peringatans.index') }}" class="nav-link {{ Request::is('peringatans*') ? 'active' : '' }}">
        <p>Peringatans</p>
    </a>
</li>