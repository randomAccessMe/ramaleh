<ul class="nav nav-tabs">
    <li role="presentation" class="{{ routeIs('admin::resume') ? 'active' : '' }}">
        <a href="{{ route('admin::resume') }}">Info</a>
    </li>
    <li role="presentation" class="{{ routeIs('admin::experience') ? 'active' : '' }}">
        <a href="{{ route('admin::experience') }}">Experience</a>
    </li>
    <li role="presentation" class="{{ routeIs('admin::skills') ? 'active' : '' }}">
        <a href="{{ route('admin::skills') }}">Skills</a>
    </li>
</ul>