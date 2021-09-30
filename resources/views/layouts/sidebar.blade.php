<div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
        <li @if(Request::is('/')) class="active" @endif>
            <a href="{{ route('home') }}">
                <i class="now-ui-icons design_app"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li @if(Request::is('icons')) class="active" @endif>
            <a href="{{ route('icons') }}">
                <i class="now-ui-icons education_atom"></i>
                <p>Icons</p>
            </a>
        </li>
        <li @if(Request::is('notifications')) class="active" @endif>
            <a href="{{ route('notifications') }}">
                <i class="now-ui-icons ui-1_bell-53"></i>
                <p>Notifications</p>
            </a>
        </li>
        <li @if(Request::is('account')) class="active" @endif>
            <a href="{{ route('account') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p>User Profile</p>
            </a>
        </li>
        <li @if(Request::is('active')) class="active" @endif>
            <a href="{{ route('lists') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>Table List</p>
            </a>
        </li>
        <li @if(Request::is('typography')) class="active" @endif>
            <a href="{{ route('typography') }}">
                <i class="now-ui-icons text_caps-small"></i>
                <p>Typography</p>
            </a>
        </li>
    </ul>
</div>
