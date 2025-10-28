@extends('layouts.app')

@section('title', 'About You')

@section('content')
<div class="container py-4">
    <h1 class="text-center mb-4" style="font-weight: 600;">My Curriculum Vitae</h1>


    <div class="card mb-3 shadow-sm border-0">
        <div class="card-header bg-light text-dark" style="font-weight: 500;">
            Personal Information
        </div>
        <div class="card-body">
            <ul class="list-unstyled mb-0">
                <li><strong>Name:</strong> Benedict Ochia</li>
                <li><strong>Email:</strong> benedictochia24.com</li>
                <li><strong>Phone:</strong> 0992 633 9923</li>
                <li><strong>Address:</strong> Marigondon, Lapu-lapu City, Philippines</li>
            </ul>
        </div>
    </div>

 
    <div class="row">
  
        <div class="col-lg-6 col-md-12 mb-3">
            <div class="card shadow-sm h-100 border-0">
                <div class="card-header bg-light text-dark" style="font-weight: 500;">
                    Education
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li><strong>Bachelor of Science in Information Technology</strong></li>
                        <li>University of Cebu</li>
                     
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-lg-6 col-md-12 mb-3">
            <div class="card shadow-sm h-100 border-0">
                <div class="card-header bg-light text-dark" style="font-weight: 500;">
                    Skills
                </div>
                <div class="card-body">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item badge bg-secondary me-1 mb-1">PHP / Laravel</li>
                        <li class="list-inline-item badge bg-secondary me-1 mb-1">HTML / CSS / JavaScript</li>
                        <li class="list-inline-item badge bg-secondary me-1 mb-1">MySQL / Database Management</li>
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.badge {
    padding: 0.4em 0.6em;
    border-radius: 0.25rem;
    font-size: 0.85rem;
}
</style>
@endsection
