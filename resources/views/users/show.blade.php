@extends('layouts.app')
@section('title', '你好，' . $user->user_name)

@section('content')
{{ var_dump($user) }}
@endsection