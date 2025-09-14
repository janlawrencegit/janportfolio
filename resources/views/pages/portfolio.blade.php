@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5 fw-bold">My Portfolio</h1>

    <div class="row g-4">
        <!-- Project Card 1 -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('images/project1.jpg') }}" class="card-img-top" alt="Project 1">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-semibold">Project Title 1</h5>
                    <p class="card-text flex-grow-1">
                        A short description of the project goes here. Example: A Laravel + Bootstrap portfolio website.
                    </p>
                    <a href="https://github.com/yourusername/project1" target="_blank" 
                    class="btn btn-primary btn-sm mt-auto">
                        <i class="bi bi-github"></i> View on GitHub
                    </a>
                </div>
            </div>
        </div>

</div>
@endsection
