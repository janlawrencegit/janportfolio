@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="vh-100 d-flex align-items-center justify-content-center bg-primary text-white text-center mb-0">
        <div class="container">
            <h2 class="display-3 fw-bold mb-4">Hi, I'm Jan 👋</h2>
            <p class="lead mb-4">An aspiring full-stack developer with a passion for clean code and modern design.</p>
            <a href="#projects" class="btn btn-light btn-lg fw-bold shadow">View My Work</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container min-vh-100 d-flex flex-column justify-content-center py-5 mb-5">
        <h2 class="text-center fw-bold mb-4">About Me</h2>
        <p class="text-center fs-5 text-muted mb-0">
            I’m a programmer at House of Investment Inc. (YGC Cars Honda) with experience in OpenEdge Progress 4GL, 
            PL/SQL, Oracle Apex, and WordPress. Currently building skills in PHP, Laravel, and Bootstrap 
            while managing MySQL databases and Git version control.
        </p>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="min-vh-100 d-flex flex-column justify-content-center bg-dark py-5 mb-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 text-light">Projects</h2>

            <div class="masonry-grid row g-4">
                <div class="col-md-4 masonry-sizer"></div>

                <!-- Project 1 -->
                <div class="col-md-4 masonry-item mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Portfolio Website</h5>
                            <p class="card-text text-muted mb-3">
                                A personal portfolio built with PHP, Bootstrap, and MySQL.
                            </p>
                            <a href="#" class="btn btn-outline-primary">View Project →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-4 masonry-item mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Inventory System</h5>
                            <p class="card-text text-muted mb-3">
                                Ingredient-based inventory system for a milk tea shop using PHP & MySQL.
                            </p>
                            <a href="#" class="btn btn-outline-primary">View Project →</a>
                        </div>
                    </div>
                </div>

                <!-- Add more project cards here -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container text-center py-5 mb-0">
        <h2 class="fw-bold mb-3">Contact Me</h2>
        <p class="text-muted mb-4">Interested in working together? Let’s connect!</p>
        <a href="mailto:janlawrence@gmail.com" class="btn btn-primary btn-lg">Say Hello 👋</a>
    </section>
@endsection
