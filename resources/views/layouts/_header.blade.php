<nav>
    <div>
        <a href="{{ route('home') }}">Isaias</a>
        <ul>
            @if(Auth::check())
                <li><a href="#">用户列表</a></li>
                <li><a href="#">{{ Auth::user()->name }}</a>
                    <a href="{{ route('users.show',Auth::user()) }}">个人中心</a>
                    <a href="#">编辑资料</a>
                    <a href="#">
                        <form action="{{ route('logout') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" name="button">退出</button>
                        </form>
                    </a>
                </li>
            @else
                <li><a href="{{ route('help') }}">帮助</a></li>
                <li><a href="{{ route('about') }}">关于</a></li>
                <li><a href="{{ route('login') }}">登录</a></li>
            @endif
        </ul>
    </div>
</nav>
