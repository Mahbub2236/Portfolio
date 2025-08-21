@extends('master.layout')
@section('content')
    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="text-center mb-5 fade-in">
                <h2 class="display-5 fw-bold mb-3">Get In Touch</h2>
                <p class="lead">Ready to start your next project? Let's discuss how I can help</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 fade-in">
                    <div class="contact-info">
                        <h4 class="mb-4">Contact Information</h4>
                        <div class="d-flex align-items-center mb-3">
                            <div class="contact-icon bg-primary text-white rounded-circle me-3">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Location</h6>
                                <p class="mb-0 text-muted">Dhaka, Bangladesh</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="contact-icon bg-success text-white rounded-circle me-3">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Email</h6>
                                <p class="mb-0 text-muted">mahbub6508@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="contact-icon bg-info text-white rounded-circle me-3">
                                <i class="bi bi-phone"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Phone</h6>
                                <p class="mb-0 text-muted">+880 1838046508</p>
                            </div>
                        </div>
                        
                        <h5 class="mb-3">Follow Me</h5>
                        <div class="social-links">
                            <a href="#" class="btn btn-outline-primary me-2" aria-label="GitHub">
                                <i class="bi bi-github"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary me-2" aria-label="LinkedIn">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary me-2" aria-label="Twitter">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary" aria-label="Stack Overflow">
                                <i class="bi bi-stack-overflow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 fade-in">
                    <form class="contact-form" action="#" method="POST" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div class="invalid-feedback">Please provide your name.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">Please provide a valid email.</div>
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label">Subject *</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                                <div class="invalid-feedback">Please provide a subject.</div>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                <div class="invalid-feedback">Please provide a message.</div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-send me-2"></i>Send Message
                                </button>
                            </div>
                        </div>
                        <small class="text-muted mt-2 d-block">* Form will be wired to backend later</small>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection