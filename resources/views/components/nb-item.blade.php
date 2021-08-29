<li class="nav-item">
    <a class="nav-link {{ Request::is($active) ? 'active' : '' }}" href="{{ $link }}">
        <i class="{{ $icon }}"></i>
        {{ $title }}
    </a>
</li>