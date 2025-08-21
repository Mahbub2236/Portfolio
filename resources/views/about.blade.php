@extends('master.layout')
@section('content')
    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5 fade-in">
                    <h2 class="display-5 fw-bold mb-3">About Me</h2>
                    <p class="lead">
                        With over 5 years of experience in full-stack development, I specialize in creating robust, 
                        scalable web applications using Laravel and modern JavaScript frameworks. I've helped businesses 
                        across various industries build efficient digital solutions that drive growth and enhance user experience.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 fade-in">
                    <div class="card h-100 border-0 shadow-sm glass-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-primary text-white rounded-circle mx-auto mb-3">
                                <i class="bi bi-server"></i>
                            </div>
                            <h5 class="card-title">API-First Backend</h5>
                            <p class="card-text">Building scalable REST APIs with Laravel, implementing clean architecture and best practices for maintainable code.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in">
                    <div class="card h-100 border-0 shadow-sm glass-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-success text-white rounded-circle mx-auto mb-3">
                                <i class="bi bi-phone"></i>
                            </div>
                            <h5 class="card-title">SPA & PWA</h5>
                            <p class="card-text">Creating responsive single-page applications and progressive web apps using Vue.js with seamless user experiences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in">
                    <div class="card h-100 border-0 shadow-sm glass-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-info text-white rounded-circle mx-auto mb-3">
                                <i class="bi bi-database-gear"></i>
                            </div>
                            <h5 class="card-title">Scalable MySQL Schema</h5>
                            <p class="card-text">Designing optimized database structures and queries that handle high traffic while maintaining data integrity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection