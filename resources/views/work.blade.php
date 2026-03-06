@extends('layouts.base')

@section('content')
<!-- Hero -->
<section class="hero">
    <div class="hero-badge">
        <span></span>
        Portfolio
    </div>
    <h1>Our Work</h1>
    <p>A selection of projects we've had the privilege to work on.</p>
</section>

<!-- Work Filter -->
<section style="padding-top: 0;">
    <div style="display: flex; gap: 0.75rem; flex-wrap: wrap; margin-bottom: 3rem;">
        <button style="padding: 0.6rem 1.25rem; background: var(--text-primary); color: var(--bg-primary); border: none; border-radius: 50px; cursor: pointer; font-size: 0.8rem; font-weight: 500;">All</button>
        <button style="padding: 0.6rem 1.25rem; background: transparent; color: var(--text-secondary); border: 1px solid var(--border); border-radius: 50px; cursor: pointer; font-size: 0.8rem;">Branding</button>
        <button style="padding: 0.6rem 1.25rem; background: transparent; color: var(--text-secondary); border: 1px solid var(--border); border-radius: 50px; cursor: pointer; font-size: 0.8rem;">Development</button>
        <button style="padding: 0.6rem 1.25rem; background: transparent; color: var(--text-secondary); border: 1px solid var(--border); border-radius: 50px; cursor: pointer; font-size: 0.8rem;">Social Media</button>
        <button style="padding: 0.6rem 1.25rem; background: transparent; color: var(--text-secondary); border: 1px solid var(--border); border-radius: 50px; cursor: pointer; font-size: 0.8rem;">Advertising</button>
    </div>

    <div class="work-grid">
        @php
        $projects = [
            ['category' => 'Branding', 'title' => 'Luxe Cosmetics'],
            ['category' => 'Development', 'title' => 'Fashion Retailer'],
            ['category' => 'Social Media', 'title' => 'Tech Startup'],
            ['category' => 'Advertising', 'title' => 'SaaS Company'],
            ['category' => 'Branding', 'title' => 'Restaurant Group'],
            ['category' => 'Development', 'title' => 'Health & Wellness'],
            ['category' => 'Social Media', 'title' => 'Fitness Brand'],
            ['category' => 'Advertising', 'title' => 'Real Estate'],
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

<!-- Testimonial -->
<section class="about-section">
    <div style="max-width: 700px; margin: 0 auto; text-align: center;">
        <p class="section-label">Testimonials</p>
        <blockquote style="font-size: clamp(1.25rem, 2.5vw, 1.75rem); line-height: 1.5; margin: 1.5rem 0; color: var(--text-primary);">
            "Working with this team transformed our digital presence. They delivered beyond our expectations."
        </blockquote>
        <p style="color: var(--text-secondary);">John Smith, CEO of Tech Startup</p>
    </div>
</section>

<!-- CTA -->
<section>
    <div class="section-header">
        <h2 class="section-title">Have a project?</h2>
        <p style="color: var(--text-secondary); margin-top: 1rem; max-width: 400px;">We'd love to hear from you.</p>
    </div>
    <a href="{{ route('say-hi') }}" class="btn btn-primary">
        Let's Discuss
        <i class="ph ph-arrow-right"></i>
    </a>
</section>
@endsection
