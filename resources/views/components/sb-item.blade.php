<li class="nav-item">
    <a class="nav-link active {{ Request::is($link) ? 'active' : '' }}" href="{{ $link }}" style="min-width: 100px">
        <i class="{{ $icon }}"></i>
        {{ $title }}
    </a>
</li>