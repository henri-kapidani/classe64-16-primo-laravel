<nav>
    <ul>
        @foreach ($arr as $menuItem)
            <li><a href="{{ route($menuItem['route']) }}">{{ $menuItem['menuName'] }}</a></li>
        @endforeach
    </ul>
</nav>
