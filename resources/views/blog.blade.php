@extends('master.layout')
@section('content')
     <!-- Blog Section -->
    <section id="blog" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 fade-in">
                <h2 class="display-5 fw-bold mb-3">Latest Blog Posts</h2>
                <p class="lead">Sharing knowledge and insights about web development</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 fade-in">
                    <article class="card h-100 border-0 shadow-sm blog-card">
                        <!-- Replaced placeholder with real Laravel performance image -->
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=200&fit=crop&auto=format&q=80" 
                             class="card-img-top" alt="Laravel Performance Tips" loading="lazy">
                        <div class="card-body">
                            <div class="mb-2">
                                <span class="badge bg-primary me-1">Laravel</span>
                                <span class="badge bg-warning">Performance</span>
                            </div>
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none">10 Laravel Performance Optimization Tips</a>
                            </h5>
                            <p class="card-text">Learn how to optimize your Laravel applications for better performance and faster response times.</p>
                            <small class="text-muted">December 15, 2024</small>
                        </div>
                    </article>
                </div>
                
                <div class="col-lg-4 col-md-6 fade-in">
                    <article class="card h-100 border-0 shadow-sm blog-card">
                        <!-- Replaced placeholder with real Vue.js coding image -->
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=400&h=200&fit=crop&auto=format&q=80" 
                             class="card-img-top" alt="Vue.js Composition API" loading="lazy">
                        <div class="card-body">
                            <div class="mb-2">
                                <span class="badge bg-success me-1">Vue.js</span>
                                <span class="badge bg-info">Tutorial</span>
                            </div>
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none">Mastering Vue.js Composition API</a>
                            </h5>
                            <p class="card-text">A comprehensive guide to using Vue.js Composition API for better code organization and reusability.</p>
                            <small class="text-muted">December 10, 2024</small>
                        </div>
                    </article>
                </div>
                
                <div class="col-lg-4 col-md-6 fade-in">
                    <article class="card h-100 border-0 shadow-sm blog-card">
                        <!-- Replaced placeholder with real database design image -->
                        <img src="https://images.unsplash.com/photo-1544383835-bda2bc66a55d?w=400&h=200&fit=crop&auto=format&q=80" 
                             class="card-img-top" alt="Database Design" loading="lazy">
                        <div class="card-body">
                            <div class="mb-2">
                                <span class="badge bg-info me-1">MySQL</span>
                                <span class="badge bg-secondary">Database</span>
                            </div>
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none">Database Design Best Practices</a>
                            </h5>
                            <p class="card-text">Essential principles for designing scalable and efficient database schemas for web applications.</p>
                            <small class="text-muted">December 5, 2024</small>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

@endsection