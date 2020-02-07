@extends('layouts.app')
@section('title', __('Register'))

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
              <input type="text" name="user_name" class="@error('user_name') is-invalid @enderror form-control" value="{{ old('user_name') }}">
            </div>
            @error('user_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
  
            <div class="form-group">
              <label for="user_account">账号：</label>
              <input type="text" name="user_account" class="@error('user_account') is-invalid @enderror form-control" value="{{ old('user_account') }}">
            </div>
            @error('user_account')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
  
            <div class="form-group">
              <label for="password">密码：</label>
              <input type="password" name="password" class="@error('password') is-invalid @enderror form-control" value="{{ old('password') }}">
            </div>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
  
            <div class="form-group">
              <label for="password_confirmation">确认密码：</label>
              <input type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror form-control" value="{{ old('password_confirmation') }}">
            </div>
            @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
  
            <button type="submit" class="btn btn-primary">注册</button>
        </form>
      </div>
    </div>
  </div>
@endsection