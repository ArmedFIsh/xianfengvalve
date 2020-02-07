<a href="{{ route('users.show', $user->id) }}">
    <img src='{{ $user->avatar_loc }}'>
</a>
<h1>{{ $user->user_name }}</h1>