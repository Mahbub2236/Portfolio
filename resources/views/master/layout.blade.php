<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md. Mahbubur Rahman | Full-Stack Laravel Developer</title>
    <meta name="description" content="Full-Stack Laravel Developer specializing in PHP, Laravel, JavaScript, Vue.js, and MySQL. Building robust web applications with elegant UX.">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Md. Mahbubur Rahman | Full-Stack Laravel Developer">
    <meta property="og:description" content="Full-Stack Laravel Developer specializing in PHP, Laravel, JavaScript, Vue.js, and MySQL.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://yourwebsite.com">
    <meta property="og:image" content="https://yourwebsite.com/assets/img/og-image.jpg">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Md. Mahbubur Rahman | Full-Stack Laravel Developer">
    <meta name="twitter:description" content="Full-Stack Laravel Developer specializing in PHP, Laravel, JavaScript, Vue.js, and MySQL.">
    <meta name="twitter:image" content="https://yourwebsite.com/assets/img/og-image.jpg">
    
    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Person",
        "name": "Md. Mahbubur Rahman",
        "jobTitle": "Full-Stack Laravel Developer",
        "description": "Full-Stack Laravel Developer specializing in PHP, Laravel, JavaScript, Vue.js, and MySQL",
        "url": "https://yourwebsite.com",
        "sameAs": [
            "https://github.com/mahbub2236",
            "https://linkedin.com/in/mahbub508",
            "https://twitter.com/yourusername",
            "https://stackoverflow.com/users/yourid"
        ],
        "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Dhaka",
            "addressCountry": "Bangladesh"
        }
    }
    </script>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70">

    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <span class="text-primary">MAHBUB</span>
            </a>
            
            <div class="d-flex align-items-center order-lg-3">
                <!-- Dark Mode Toggle -->
                <button class="btn btn-outline-secondary me-2" id="darkModeToggle" aria-label="Toggle dark mode">
                    <i class="bi bi-moon-fill"></i>
                </button>
                <!-- Hire Me Button -->
                <a href="#contact" class="btn btn-primary me-3">Hire Me</a>
                <!-- Mobile Menu Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            
            <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="{{ route('project') }}">Projects</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link" href="#services">Services</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

   
    <!-- Page Content-->
    @yield('content')
    

    

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="mb-3">Md. Mahbubur Rahman</h5>
                    <p class="text-muted">Full-Stack Laravel Developer passionate about creating robust web applications that solve real-world problems.</p>
                    <div class="social-links">
                        <a href="#" class="btn btn-outline-light btn-sm me-2" aria-label="GitHub">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm me-2" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm me-2" aria-label="Twitter">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm" aria-label="Stack Overflow">
                            <i class="bi bi-stack-overflow"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-muted text-decoration-none">Home</a></li>
                        <li><a href="#about" class="text-muted text-decoration-none">About</a></li>
                        <li><a href="#projects" class="text-muted text-decoration-none">Projects</a></li>
                        <li><a href="#services" class="text-muted text-decoration-none">Services</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="mb-3">Services</h6>
                    <ul class="list-unstyled">
                        <li><a href="#services" class="text-muted text-decoration-none">Laravel APIs</a></li>
                        <li><a href="#services" class="text-muted text-decoration-none">Vue.js Apps</a></li>
                        <li><a href="#services" class="text-muted text-decoration-none">E-commerce</a></li>
                        <li><a href="#services" class="text-muted text-decoration-none">Optimization</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6 class="mb-3">Newsletter</h6>
                    <p class="text-muted small">Subscribe to get updates about new blog posts and projects.</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Your email" aria-label="Email">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                    <small class="text-muted">No backend integration yet</small>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0 text-muted">&copy; 2025 Md. Mahbubur Rahman. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <button class="btn btn-outline-light btn-sm" id="backToTop" aria-label="Back to top">
                        <i class="bi bi-arrow-up"></i> Back to Top
                    </button>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
