@extends('layouts.app')

@section('content')

<x-alert type="success" message="User loaded successfully!">
    Additional info here...
</x-alert>

<x-card>
    <x-slot name="header">User Profile</x-slot>

    <p>Name: {{ $user->name }}</p>

    @if($user->active)
        <p>Status: Active</p>
    @endif

    @unless($user->active)
        <p>Inactive user</p>
    @endunless

    @isset($user->bio)
        <p>Bio: {{ $user->bio }}</p>
    @endisset

    @empty($user->phone)
        <p>No phone number.</p>
    @endempty

    <x-slot name="footer">
        <button>Close</button>
    </x-slot>
</x-card>

@php
    $componentType = $user->active ? 'alert' : 'button';
@endphp

<x-dynamic-component :component="$componentType" type="info">
    {{ $user->name }} is {{ $user->active ? 'active' : 'inactive' }}.
</x-dynamic-component>

@endsection
