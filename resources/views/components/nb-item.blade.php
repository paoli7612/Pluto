<li class="nav-item">
    <a class="nav-link {{ Request::is($name) ? 'active' : ''}}" href="{{ route($name) }}">{{ $name }}</a>
</li>