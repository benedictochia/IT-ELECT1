@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5" style="font-weight: 600;"></h1>

    <section class="mb-5">
        <h3 style="font-weight: 500;">What is Laravel?</h3>
        <p>
            Laravel is an open-source PHP framework that helps developers build web applications quickly 
            and with clean, maintainable code.
        </p>
    </section>

    <section>
        <h3 style="font-weight: 500;">How to Set Up Laravel</h3>
        <ol class="ps-3">
            <li>Install <strong>XAMPP</strong> (PHP + Apache).</li>
            <li>Install <strong>Composer</strong>.</li>
            <li>Run: <code>composer create-project laravel/laravel mysite</code></li>
            <li>Go to project folder: <code>cd mysite</code></li>
            <li>Start server: <code>php artisan serve</code></li>
            <li>Open in browser: <a href="http://127.0.0.1:8000">http://127.0.0.1:8000</a></li>
        </ol>
    </section>
</div>

<style>
ol li {
    margin-bottom: 0.5rem;
}
p {
    line-height: 1.6;
}
</style>
@endsection
