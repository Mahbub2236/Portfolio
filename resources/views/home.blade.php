@extends('master.layout')
@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero-section py-5">
        <div class="container py-5">
            <!-- Reduced hero height from min-vh-100 to align-items-center for better spacing -->
            <div class="row align-items-center" style="min-height: 80vh;">
                <div class="col-lg-6 fade-in">
                    <h1 class="display-4 fw-bold mb-3">
                        Building robust <span class="text-primary">Laravel apps</span> with elegant UX
                    </h1>
                    <p class="lead mb-4 text-muted">
                        Full-Stack Laravel Developer — PHP • Laravel • JavaScript • Vue.js • MySQL
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#projects" class="btn btn-primary btn-lg">View Projects</a>
                        <a href="#" class="btn btn-outline-primary btn-lg">Download CV</a>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-primary-subtle text-primary px-3 py-2">
                            <i class="bi bi-code-slash me-1"></i>Laravel
                        </span>
                        <span class="badge bg-success-subtle text-success px-3 py-2">
                            <i class="bi bi-filetype-php me-1"></i>PHP
                        </span>
                        <span class="badge bg-warning-subtle text-warning px-3 py-2">
                            <i class="bi bi-filetype-js me-1"></i>JavaScript
                        </span>
                        <span class="badge bg-info-subtle text-info px-3 py-2">
                            <i class="bi bi-bootstrap me-1"></i>Vue.js
                        </span>
                        <span class="badge bg-secondary-subtle text-secondary px-3 py-2">
                            <i class="bi bi-database me-1"></i>MySQL
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 text-center fade-in">
                    <div class="hero-image">
                        <!-- Replaced placeholder with real professional developer image -->
                        <img src="https://i.postimg.cc/Gm392vKw/mahbub300-X300.jpg" 
                             alt="Md. Mahbubur Rahman - Laravel Developer" 
                             class="img-fluid rounded-circle shadow-lg"
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection