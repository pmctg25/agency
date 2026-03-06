@extends('layouts.base')

@section('content')
<!-- Hero -->
<section class="hero">
    <div class="hero-badge">
        <span></span>
        Services
    </div>
    <h1>Capabilities</h1>
    <p>Comprehensive digital solutions tailored to elevate your brand.</p>
</section>

<!-- Services Detail -->
<section style="padding-top: 0;">
    <div class="services-grid">
        @php
        $services = [
            [
                'icon' => 'ph ph-share-network',
                'title' => 'Social Media Management',
                'desc' => 'We build and nurture your online presence through strategic content planning and community engagement.',
                'features' => ['Content Strategy', 'Community Management', 'Influencer Partnerships', 'Analytics']
            ],
            [
                'icon' => 'ph ph-chart-line-up',
                'title' => 'Digital Advertising',
                'desc' => 'Maximize your advertising budget with targeted campaigns across major platforms.',
                'features' => ['Facebook & Instagram', 'Google Ads', 'TikTok', 'Retargeting']
            ],
            [
                'icon' => 'ph ph-paint-brush',
                'title' => 'Creative Design',
                'desc' => 'Visually stunning designs that communicate your unique value proposition effectively.',
                'features' => ['Brand Identity', 'Visual Design', 'Marketing Collateral', 'Social Graphics']
            ],
            [
                'icon' => 'ph ph-code',
                'title' => 'Web Development',
                'desc' => 'Fast, responsive, and user-friendly websites that convert visitors into customers.',
                'features' => ['Custom Websites', 'E-commerce', 'Web Applications', 'CMS']
            ],
            [
                'icon' => 'ph ph-device-mobile',
                'title' => 'App Development',
                'desc' => 'Native and cross-platform mobile applications deliver seamless user experiences.',
                'features' => ['iOS Development', 'Android Development', 'React Native', 'App Store Optimization']
            ],
            [
                'icon' => 'ph ph-megaphone',
                'title' => 'Brand Strategy',
                'desc' => 'Comprehensive branding solutions that define your market position and voice.',
                'features' => ['Brand Identity', 'Brand Guidelines', 'Positioning', 'Messaging']
            ],
            [
                'icon' => 'ph ph-video',
                'title' => 'Video Production',
                'desc' => 'Professional video content that tells your story and engages your audience.',
                'features' => ['Commercials', 'Social Videos', 'Animation', 'Post-Production']
            ],
            [
                'icon' => 'ph ph-magnifying-glass',
                'title' => 'SEO & Analytics',
                'desc' => 'Search optimization and data analytics for measurable growth and insights.',
                'features' => ['Technical SEO', 'Content SEO', 'Google Analytics', 'Performance Tracking']
            ],
            [
                'icon' => 'ph ph-shopping-cart',
                'title' => 'E-commerce',
                'desc' => 'Online store solutions that drive sales and deliver exceptional shopping experiences.',
                'features' => ['Shopify', 'WooCommerce', 'Payment Integration', 'Inventory Management']
            ],
        ];
        @endphp

        @foreach($services as $service)
        <div class="service-card reveal">
            <div class="service-icon"><i class="ph {{ $service['icon'] }}"></i></div>
            <h3>{{ $service['title'] }}</h3>
            <p>{{ $service['desc'] }}</p>
            <ul style="margin-top: 1.25rem; padding-left: 1rem;">
                @foreach($service['features'] as $feature)
                <li style="color: var(--text-muted); font-size: 0.85rem; margin-bottom: 0.4rem;">{{ $feature }}</li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
</section>

<!-- Process -->
<section class="about-section">
    <div class="section-header">
        <p class="section-label">Our Process</p>
        <h2 class="section-title">How We Work</h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem;">
        @php
        $process = [
            ['step' => '01', 'title' => 'Discover', 'desc' => 'Understanding your business, goals, and audience.'],
            ['step' => '02', 'title' => 'Strategy', 'desc' => 'Developing a customized strategy aligned with objectives.'],
            ['step' => '03', 'title' => 'Create', 'desc' => 'Bringing the strategy to life with creative execution.'],
            ['step' => '04', 'title' => 'Launch', 'desc' => 'Deploying and monitoring performance for success.'],
        ];
        @endphp

        @foreach($process as $p)
        <div class="reveal" style="padding: 2rem; background: var(--bg-tertiary); border-radius: 16px;">
            <p style="font-size: 2.5rem; font-weight: 600; color: var(--text-muted); margin-bottom: 1rem;">{{ $p['step'] }}</p>
            <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">{{ $p['title'] }}</h3>
            <p style="color: var(--text-secondary); font-size: 0.9rem;">{{ $p['desc'] }}</p>
        </div>
        @endforeach
    </div>
</section>

<!-- CTA -->
<section>
    <div class="section-header">
        <h2 class="section-title">Ready to start?</h2>
        <p style="color: var(--text-secondary); margin-top: 1rem; max-width: 400px;">Let's discuss your project and find the perfect solution.</p>
    </div>
    <a href="{{ route('say-hi') }}" class="btn btn-primary">
        Get Started
        <i class="ph ph-arrow-right"></i>
    </a>
</section>
@endsection
