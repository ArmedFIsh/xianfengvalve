@extends('layouts.app')
@section('title', '注册')

@section('content')
<div class="offset-md-2 col-md-8">
    <div class="card ">
      <div class="card-header">
        <h5>注册</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="form-group">
              <label for="user_name">姓名：</label>
              <input type="text" name="user_name" class="form-control" value="{{ old('user_name') }}">
            </div>
  
            <div class="form-group">
              <label for="user_account">账号：</label>
              <input type="text" name="user_account" class="form-control" value="{{ old('user_account') }}">
            </div>
  
            <div class="form-group">
              <label for="user_password">密码：</label>
              <input type="password" name="user_password" class="form-control" value="{{ old('user_password') }}">
            </div>
  
            <div class="form-group">
              <label for="password_confirmation">确认密码：</label>
              <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
            </div>
  
            <button type="submit" class="btn btn-primary">注册</button>
        </form>
      </div>
    </div>
  </div>
@endsection