<li class="nav-item">
    <a class="nav-link active {{ Request::is($link) ? 'active' : '' }}" href="{{ $link }}">
        <i class="{{ $icon }}"></i>
        {{ $title }}
    </a>
</li>