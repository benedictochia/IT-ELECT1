<p>{{ $user->name }} — {{ $user->email }}</p>

@isset($user->bio)
    <small>Has bio</small>
@else
    <small>No bio yet</small>
@endisset
