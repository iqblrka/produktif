@extends('frontend.layouts.template')

@section('title', 'Home - Butterfly')
@section('body-class', 'index-page')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section light-background">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-md-start" data-aos="fade-up">
                <h2>CREATING WEBSITES THAT MAKE YOU STOP & STARE</h2>
                <p>We are team of talented designers making websites with Bootstrap</p>
                <div class="d-flex mt-4 justify-content-center justify-content-md-start">
                    <a href="#about" class="cta-btn">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                <img src="{{ asset('frontend/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
            </div>
            <div class="col-lg-6 ps-lg-4 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <h3>About Us</h3>
                <p>Dolor iure expedita id fuga asperiores qui sunt consequatur minima.</p>
                <ul>
                    <li><i class="bi bi-diagram-3"></i><div><h5>Ullamco laboris</h5><p>Magni facilis facilis repellendus</p></div></li>
                    <li><i class="bi bi-fullscreen-exit"></i><div><h5>Magnam soluta</h5><p>Quo totam dolorum at pariatur</p></div></li>
                    <li><i class="bi bi-broadcast"></i><div><h5>Voluptatem et</h5><p>Et velit et eos maiores est</p></div></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section id="stats" class="stats section light-background">
    <img src="{{ asset('frontend/assets/img/stats-bg.jpg') }}" alt="" data-aos="fade-in">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Projects</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Workers</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services section light-background">
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-cash-stack" style="color: #0dcaf0;"></i></div>
                    <h3>Nesciunt Mete</h3>
                    <p>Provident nihil minus qui consequatur non omnis maiores.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-calendar4-week" style="color: #fd7e14;"></i></div>
                    <h3>Eosle Commodi</h3>
                    <p>Ut autem aut autem non a. Sint sint sit facilis.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-chat-text" style="color: #20c997;"></i></div>
                    <h3>Ledo Markt</h3>
                    <p>Ut excepturi voluptatem nisi sed. Quidem fuga.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('frontend/assets/img/portfolio/app-1.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('frontend/assets/img/portfolio/product-1.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Product 1</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('frontend/assets/img/portfolio/branding-1.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Branding 1</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="team section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <img src="{{ asset('frontend/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                    <img src="{{ asset('frontend/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                    <div class="member-info">
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <img src="{{ asset('frontend/assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                    <div class="member-info">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="member">
                    <img src="{{ asset('frontend/assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                    <div class="member-info">
                        <h4>Amanda Jepson</h4>
                        <span>Accountant</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div><h3>Address</h3><p>A108 Adam Street, New York, NY 535022</p></div>
                </div>
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div><h3>Call Us</h3><p>+1 5589 55488 55</p></div>
                </div>
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div><h3>Email Us</h3><p>info@example.com</p></div>
                </div>
            </div>
            <div class="col-lg-8">
                <form action="{{ route('contact.submit') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Your Name" required></div>
                        <div class="col-md-6"><input type="email" name="email" class="form-control" placeholder="Your Email" required></div>
                        <div class="col-md-12"><input type="text" name="subject" class="form-control" placeholder="Subject" required></div>
                        <div class="col-md-12"><textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea></div>
                        <div class="col-md-12 text-center"><button type="submit">Send Message</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection