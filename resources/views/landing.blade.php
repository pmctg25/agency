@extends('layouts.base')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-badge">
        <span></span>
        Digital Agency
    </div>
    <h1>We Create Digital Experiences</h1>
    <p>Strategic design and development for brands that want to make an impact in the digital world.</p>
    <div class="hero-cta">
        <a href="{{ route('work') }}" class="btn btn-primary">
            View Work
            <i class="ph ph-arrow-right"></i>
        </a>
        <a href="{{ route('say-hi') }}" class="btn btn-secondary">
            Get in Touch
        </a>
    </div>
    <div class="scroll-hint">
        <span>Scroll</span>
        <div class="scroll-line"></div>
    </div>
</section>

<!-- Services Section -->
<section>
    <div class="section-header">
        <p class="section-label">What We Do</p>
        <h2 class="section-title">Services</h2>
    </div>

    <div class="services-grid">
        @php
        $services = [
            ['icon' => 'ph ph-share-network', 'title' => 'Social Media', 'desc' => 'Strategic content creation and community management that builds authentic connections.'],
            ['icon' => 'ph ph-chart-line-up', 'title' => 'Digital Ads', 'desc' => 'Data-driven ad campaigns designed to maximize your return on investment.'],
            ['icon' => 'ph ph-paint-brush', 'title' => 'Creative Design', 'desc' => 'Brand identity and visual design that captures your unique essence.'],
            ['icon' => 'ph ph-code', 'title' => 'Web Development', 'desc' => 'Custom websites built with modern technologies for optimal performance.'],
            ['icon' => 'ph ph-device-mobile', 'title' => 'App Development', 'desc' => 'Native and cross-platform mobile applications for iOS and Android.'],
            ['icon' => 'ph ph-megaphone', 'title' => 'Brand Strategy', 'desc' => 'Comprehensive branding solutions that define your market position.'],
            ['icon' => 'ph ph-video', 'title' => 'Video Production', 'desc' => 'Professional video content from scripting to final delivery.'],
            ['icon' => 'ph ph-magnifying-glass', 'title' => 'SEO & Analytics', 'desc' => 'Search optimization and data analytics for measurable growth.'],
            ['icon' => 'ph ph-shopping-cart', 'title' => 'E-commerce', 'desc' => 'Online store solutions that drive sales and customer engagement.'],
        ];
        @endphp

        @foreach($services as $service)
        <div class="service-card reveal">
            <div class="service-icon"><i class="ph {{ $service['icon'] }}"></i></div>
            <h3>{{ $service['title'] }}</h3>
            <p>{{ $service['desc'] }}</p>
        </div>
        @endforeach
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="about-grid">
        <div class="about-content">
            <p class="section-label">Who We Are</p>
            <h2>Crafting Digital Excellence</h2>
            <p>We are a full-service digital agency specializing in social media, advertising, creative design, and web development.</p>
            <p>Every project we undertake is driven by creativity, strategy, and a commitment to delivering exceptional results.</p>
        </div>
        <div class="stats-grid">
            <div class="stat-item reveal">
                <div class="stat-number">150+</div>
                <div class="stat-label">Projects</div>
            </div>
            <div class="stat-item reveal">
                <div class="stat-number">50+</div>
                <div class="stat-label">Clients</div>
            </div>
            <div class="stat-item reveal">
                <div class="stat-number">5+</div>
                <div class="stat-label">Years</div>
            </div>
            <div class="stat-item reveal">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Support</div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Work -->
<section>
    <div class="section-header">
        <p class="section-label">Selected Work</p>
        <h2 class="section-title">Featured Projects</h2>
    </div>

    <div class="work-grid">
        @php
        $projects = [
            ['category' => 'Branding', 'title' => 'Luxe Brand Identity'],
            ['category' => 'Development', 'title' => 'E-commerce Platform'],
            ['category' => 'Social', 'title' => 'Campaign Strategy'],
            ['category' => 'Advertising', 'title' => 'Performance Marketing'],
        ];
        @endphp

        @foreach($projects as $project)
        <div class="work-item reveal">
            <div class="work-placeholder"><i class="ph ph-star"></i></div>
            <div class="work-overlay">
                <p class="work-category">{{ $project['category'] }}</p>
                <h3 class="work-title">{{ $project['title'] }}</h3>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- CTA -->
<section class="contact-section" style="padding-top: 6rem;">
    <div class="contact-grid">
        <div class="contact-info">
            <p class="section-label">Let's Talk</p>
            <h2>Ready to start?</h2>
            <p>We'd love to hear about your project and discuss how we can help bring your vision to life.</p>
            
            <div class="contact-details">
                <a href="mailto:hello@agency.com" class="contact-item">
                    <div class="contact-item-icon"><i class="ph ph-envelope"></i></div>
                    <span>hello@agency.com</span>
                </a>
                <a href="tel:+15551234567" class="contact-item">
                    <div class="contact-item-icon"><i class="ph ph-phone"></i></div>
                    <span>+1 (555) 123-4567</span>
                </a>
            </div>
        </div>

        <form class="contact-form">
            <div class="form-group">
                <label>Name</label>
                <input type="text" placeholder="Your name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="your@email.com" required>
            </div>
            <div class="form-group">
                <label>Service</label>
                <select>
                    <option>Select a service...</option>
                    <option>Social Media</option>
                    <option>Digital Advertising</option>
                    <option>Creative Design</option>
                    <option>Web Development</option>
                </select>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea placeholder="Tell us about your project..."></textarea>
            </div>
            <button type="submit" class="btn-submit">Send Message</button>
        </form>
    </div>
</section>
@endsection
