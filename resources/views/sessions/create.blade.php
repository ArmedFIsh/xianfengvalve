@extends('layouts.default')
@section('title', '登录')

@section('content')
<div class="offset-md-2 col-md-8">
    <div class="card">
        <div class="card-header">
            <h5>登录</h5>
        </div>
        <div class="card-body">
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="user_account">账号：</label>
                    <input type="text" name="user_account" class="form-control @error('user_account') is-valid @enderror" value="{{ old('user_account') }}">
                    @error('user_account')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">密码：</label>
                    <input type="text" name="password" class="form-control @error('password') is-valid @enderror" value="{{ old('password') }}">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </form>
        </div>
    </div>
</div>
@endsection