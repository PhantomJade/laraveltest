    @extends('layouts.default')
    @section('title','登录')
    @section('content')
        @include('shared._errors')
        <form action="{{ route('login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="email">邮箱</label>
                <input type="text" class="form-controller" name="email" value="{{ old('email') }}">
            </div>
            <div>
                <label for="password">密码</label>
                <input type="password" class="form-controller" name="password" value="{{ old('password') }}">
            </div>
            <div>
                <input type="checkbox" name="remember" id="exampleCheck1">
                <label for="exampleCheck1">记住我</label>
            </div>
            <button type="submit" class="primary">登录</button>
        </form>
        <hr>
        <div>
            <p>还没账户？<a href="{{ route('signup') }}">注册</a></p>
        </div>
    @stop
