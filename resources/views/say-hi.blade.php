@extends('layouts.base')

@section('content')
<!-- Hero -->
<section class="hero">
    <div class="hero-badge">
        <span></span>
        Contact
    </div>
    <h1>Get in Touch</h1>
    <p>Ready to start your next project? Let's create something great together.</p>
</section>

<!-- Contact Section -->
<section class="contact-section" style="padding-top: 20; margin-top: 0;">
    <div class="contact-grid">
        <div class="contact-info">
            <p class="section-label">Let's Talk</p>
            <h2>Start a conversation</h2>
            <p>Whether you have a specific project or just want to explore possibilities, we're here to help.</p>
            
            <div class="contact-details" style="margin-top: 2rem;">
                <a href="mailto:hello@agency.com" class="contact-item">
                    <div class="contact-item-icon"><i class="ph ph-envelope"></i></div>
                    <div>
                        <p style="font-weight: 500;">Email</p>
                        <p style="font-size: 0.85rem; color: var(--text-secondary);">hello@agency.com</p>
                    </div>
                </a>
                <a href="tel:+15551234567" class="contact-item">
                    <div class="contact-item-icon"><i class="ph ph-phone"></i></div>
                    <div>
                        <p style="font-weight: 500;">Phone</p>
                        <p style="font-size: 0.85rem; color: var(--text-secondary);">+1 (555) 123-4567</p>
                    </div>
                </a>
            </div>
        </div>

        <form class="contact-form">
            <div class="form-group">
                <label>Name *</label>
                <input type="text" placeholder="Your name" required>
            </div>
            <div class="form-group">
                <label>Email *</label>
                <input type="email" placeholder="your@email.com" required>
            </div>
            <div class="form-group">
                <label>Company</label>
                <input type="text" placeholder="Your company">
            </div>
            <div class="form-group">
                <label>Service</label>
                <select>
                    <option value="">Select a service...</option>
                    <option value="social">Social Media</option>
                    <option value="ads">Digital Advertising</option>
                    <option value="creative">Creative Design</option>
                    <option value="web">Web Development</option>
                </select>
            </div>
            <div class="form-group">
                <label>Message *</label>
                <textarea placeholder="Tell us about your project..." required></textarea>
            </div>
            <button type="submit" class="btn-submit">Send Message</button>
        </form>
    </div>
</section>

<!-- Office Hours -->
<section>
    <div class="section-header">
        <p class="section-label">Info</p>
        <h2 class="section-title">Office Hours</h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
        <div class="reveal" style="padding: 1.5rem; background: var(--bg-secondary); border-radius: 12px;">
            <h3 style="font-size: 1rem; margin-bottom: 0.75rem; font-family: 'DM Sans', sans-serif; font-weight: 600;">Business Hours</h3>
            <p style="color: var(--text-secondary); font-size: 0.9rem;">Monday - Friday<br>9:00 AM - 6:00 PM</p>
        </div>
        <div class="reveal" style="padding: 1.5rem; background: var(--bg-secondary); border-radius: 12px;">
            <h3 style="font-size: 1rem; margin-bottom: 0.75rem; font-family: 'DM Sans', sans-serif; font-weight: 600;">Response Time</h3>
            <p style="color: var(--text-secondary); font-size: 0.9rem;">We typically respond within 24 hours.</p>
        </div>
        <div class="reveal" style="padding: 1.5rem; background: var(--bg-secondary); border-radius: 12px;">
            <h3 style="font-size: 1rem; margin-bottom: 0.75rem; font-family: 'DM Sans', sans-serif; font-weight: 600;">Location</h3>
            <p style="color: var(--text-secondary); font-size: 0.9rem;">Remote-first agency, serving globally.</p>
        </div>
    </div>
</section>
@endsection
