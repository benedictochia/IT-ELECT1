@extends('layouts.app')

@section('title', 'Users')

@section('content')

<h1>Users</h1>

@each('partials.user-row', $users, 'user', 'partials.no-users')

<p>Total Users: {{ count($users) }}</p>

<x-button class="btn-lg">Add User</x-button>

@push('scripts')
<script>
    console.log("Users loaded");
</script>
@endpush

@endsection
