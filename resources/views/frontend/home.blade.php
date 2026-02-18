@extends('frontend.template')

@section('content')
<section id="hero" class="hero section light-background">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-md-start" data-aos="fade-up">
                <h2>CREATING WEBSITES THAT MAKE YOU STOP & STARE</h2>
                <p>
                    Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. 
                    Maecen aliquam, risus at semper. Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                </p>
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
@endsection