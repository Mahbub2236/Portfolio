@extends('master.layout')
@section('content')
    <!-- Projects Section -->
    <section id="projects" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 fade-in">
                <h2 class="display-5 fw-bold mb-3">Featured Projects</h2>
                <p class="lead">Some of my recent work that showcases my skills</p>
            </div>
            
            <!-- Project Filters -->
            <div class="text-center mb-5 fade-in">
                <div class="btn-group" role="group" aria-label="Project filters">
                    <button type="button" class="btn btn-outline-primary active" data-filter="all">All</button>
                    <button type="button" class="btn btn-outline-primary" data-filter="laravel">Laravel</button>
                    <button type="button" class="btn btn-outline-primary" data-filter="vue">Vue.js</button>
                    <button type="button" class="btn btn-outline-primary" data-filter="fullstack">Full-Stack</button>
                </div>
            </div>
            
            <div class="row g-4" id="projectsGrid">
                <div class="col-lg-4 col-md-6 project-item fade-in" data-category="laravel fullstack">
                    <div class="card h-100 border-0 shadow-sm project-card">
                        <!-- Replaced placeholder with real e-commerce project image -->
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=250&fit=crop&auto=format&q=80" 
                             class="card-img-top" alt="E-commerce Platform" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">E-commerce Platform</h5>
                            <p class="card-text">Full-featured e-commerce solution with inventory management, payment integration, and admin dashboard.</p>
                            <div class="mb-3">
                                <span class="badge bg-primary me-1">Laravel</span>
                                <span class="badge bg-success me-1">Vue.js</span>
                                <span class="badge bg-info me-1">MySQL</span>
                                <span class="badge bg-warning">Stripe</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-primary btn-sm">Live Demo</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-github"></i> Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 project-item fade-in" data-category="vue">
                    <div class="card h-100 border-0 shadow-sm project-card">
                        <!-- Replaced placeholder with real task management app image -->
                        <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=400&h=250&fit=crop&auto=format&q=80" 
                             class="card-img-top" alt="Task Management App" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Task Management SPA</h5>
                            <p class="card-text">Progressive web app for team collaboration with real-time updates and drag-and-drop functionality.</p>
                            <div class="mb-3">
                                <span class="badge bg-success me-1">Vue.js</span>
                                <span class="badge bg-primary me-1">Laravel API</span>
                                <span class="badge bg-info me-1">WebSocket</span>
                                <span class="badge bg-secondary">PWA</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-primary btn-sm">Live Demo</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-github"></i> Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 project-item fade-in" data-category="laravel">
                    <div class="card h-100 border-0 shadow-sm project-card">
                        <!-- Replaced placeholder with real restaurant management image -->
                        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=400&h=250&fit=crop&auto=format&q=80" 
                             class="card-img-top" alt="Restaurant Management" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Restaurant Management System</h5>
                            <p class="card-text">Complete restaurant solution with POS, inventory tracking, and customer management features.</p>
                            <div class="mb-3">
                                <span class="badge bg-primary me-1">Laravel</span>
                                <span class="badge bg-info me-1">MySQL</span>
                                <span class="badge bg-warning me-1">Bootstrap</span>
                                <span class="badge bg-success">bKash</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-primary btn-sm">Live Demo</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-github"></i> Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 project-item fade-in" data-category="fullstack">
                    <div class="card h-100 border-0 shadow-sm project-card">
                        <!-- Replaced placeholder with real learning management system image -->
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400&h=250&fit=crop&auto=format&q=80" 
                             class="card-img-top" alt="Learning Management System" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Learning Management System</h5>
                            <p class="card-text">Educational platform with course management, video streaming, and progress tracking capabilities.</p>
                            <div class="mb-3">
                                <span class="badge bg-primary me-1">Laravel</span>
                                <span class="badge bg-success me-1">Vue.js</span>
                                <span class="badge bg-info me-1">MySQL</span>
                                <span class="badge bg-danger">Redis</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-primary btn-sm">Live Demo</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-github"></i> Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 project-item fade-in" data-category="laravel">
                    <div class="card h-100 border-0 shadow-sm project-card">
                        <!-- Replaced placeholder with real inventory management image -->
                        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=400&h=250&fit=crop&auto=format&q=80" 
                             class="card-img-top" alt="Inventory Management" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Inventory Management API</h5>
                            <p class="card-text">RESTful API for warehouse management with barcode scanning and automated reorder points.</p>
                            <div class="mb-3">
                                <span class="badge bg-primary me-1">Laravel</span>
                                <span class="badge bg-info me-1">MySQL</span>
                                <span class="badge bg-secondary me-1">REST API</span>
                                <span class="badge bg-warning">JWT</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-primary btn-sm">Live Demo</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-github"></i> Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 project-item fade-in" data-category="vue fullstack">
                    <div class="card h-100 border-0 shadow-sm project-card">
                        <!-- Replaced placeholder with real real estate platform image -->
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=400&h=250&fit=crop&auto=format&q=80" 
                             class="card-img-top" alt="Real Estate Platform" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Real Estate Platform</h5>
                            <p class="card-text">Property listing platform with advanced search, virtual tours, and agent management system.</p>
                            <div class="mb-3">
                                <span class="badge bg-primary me-1">Laravel</span>
                                <span class="badge bg-success me-1">Vue.js</span>
                                <span class="badge bg-info me-1">MySQL</span>
                                <span class="badge bg-warning">Maps API</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-primary btn-sm">Live Demo</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-github"></i> Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection