    @extends('layouts.default')
    @section('title','注册')
    @section('content')
        <div class="content">
            <div class="content-header">
                <h1>注册</h1>
            </div>
            <div class="content-body">
                @include('shared._errors')
                <form action="{{ route('users.store') }}" method="post">
{{--                    {{ csrf_token() }}--}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="name">名称：</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">确认密码：</label>
                        <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                    </div>

                    <button type="submit" class="primary">注册</button>
                </form>
            </div>
        </div>
    @stop
