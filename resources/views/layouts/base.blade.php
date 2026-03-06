<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Agency</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=DM+Serif+Display&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script>
        window.va = window.va || function () { (window.vaq = window.vaq || []).push(arguments); };
    </script>
    <script defer src="/_vercel/insights/script.js"></script>
    <style>
        :root {
            --bg-primary: #0C0C0C;
            --bg-secondary: #141414;
            --bg-tertiary: #1C1C1C;
            --text-primary: #FFFFFF;
            --text-secondary: #888888;
            --text-muted: #555555;
            --accent: #FFFFFF;
            --accent-hover: #CCCCCC;
            --border: #2A2A2A;
            --gradient-1: #FF6B35;
            --gradient-2: #F7C94B;
            --gradient-3: #4ECDC4;
            --nav-bg: rgba(255, 255, 255, 0.05);
            --nav-border: rgba(255, 255, 255, 0.08);
        }

        [data-theme="light"] {
            --bg-primary: #F5F5F5;
            --bg-secondary: #FFFFFF;
            --bg-tertiary: #FAFAFA;
            --text-primary: #0A0A0A;
            --text-secondary: #666666;
            --text-muted: #999999;
            --accent: #0A0A0A;
            --accent-hover: #333333;
            --border: #E5E5E5;
            --nav-bg: rgba(255, 255, 255, 0.8);
            --nav-border: rgba(0, 0, 0, 0.08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            overflow-x: hidden;
            line-height: 1.5;
            padding-bottom: 120px;
            cursor: none;
        }

        /* Custom Cursor */
        .cursor {
            position: fixed;
            width: 20px;
            height: 20px;
            border: 1.5px solid var(--text-primary);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.15s ease, opacity 0.15s ease;
            mix-blend-mode: difference;
        }

        .cursor-dot {
            position: fixed;
            width: 6px;
            height: 6px;
            background: var(--text-primary);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
        }

        .cursor.hover {
            transform: scale(1.5);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-secondary);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--text-muted);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--text-secondary);
        }

        /* Animated Background Lines */
        .bg-tunnel {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -3;
            background: var(--bg-primary);
        }

        /* Tunnel Effect - Lines converging to center */
        .tunnel-lines {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 200%;
            height: 200%;
            transform: translate(-50%, -50%);
            perspective: 1000px;
        }

        .tunnel-line {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 2px;
            height: 100%;
            background: linear-gradient(to bottom, transparent 0%, var(--accent) 20%, var(--accent) 80%, transparent 100%);
            opacity: 0.1;
            transform-origin: center;
            animation: tunnelMove 3s linear infinite;
        }

        .tunnel-line:nth-child(1) { transform: translate(-50%, -50%) rotate(0deg); animation-duration: 3s; }
        .tunnel-line:nth-child(2) { transform: translate(-50%, -50%) rotate(30deg); animation-duration: 3.2s; }
        .tunnel-line:nth-child(3) { transform: translate(-50%, -50%) rotate(60deg); animation-duration: 2.8s; }
        .tunnel-line:nth-child(4) { transform: translate(-50%, -50%) rotate(90deg); animation-duration: 3.1s; }
        .tunnel-line:nth-child(5) { transform: translate(-50%, -50%) rotate(120deg); animation-duration: 2.9s; }
        .tunnel-line:nth-child(6) { transform: translate(-50%, -50%) rotate(150deg); animation-duration: 3.3s; }
        .tunnel-line:nth-child(7) { transform: translate(-50%, -50%) rotate(180deg); animation-duration: 2.7s; }
        .tunnel-line:nth-child(8) { transform: translate(-50%, -50%) rotate(210deg); animation-duration: 3.4s; }
        .tunnel-line:nth-child(9) { transform: translate(-50%, -50%) rotate(240deg); animation-duration: 3s; }
        .tunnel-line:nth-child(10) { transform: translate(-50%, -50%) rotate(270deg); animation-duration: 3.2s; }
        .tunnel-line:nth-child(11) { transform: translate(-50%, -50%) rotate(300deg); animation-duration: 2.8s; }
        .tunnel-line:nth-child(12) { transform: translate(-50%, -50%) rotate(330deg); animation-duration: 3.1s; }

        @keyframes tunnelMove {
            0% {
                transform: translate(-50%, -50%) rotate(var(--rotation)) scale(0.1);
                opacity: 0;
            }
            20% {
                opacity: 0.15;
            }
            80% {
                opacity: 0.15;
            }
            100% {
                transform: translate(-50%, -50%) rotate(var(--rotation)) scale(2);
                opacity: 0;
            }
        }

        /* Center Light / End of Tunnel */
        .tunnel-light {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 600px;
            height: 600px;
            transform: translate(-50%, -50%);
            background: radial-gradient(circle, var(--accent) 0%, transparent 70%);
            opacity: 0.15;
            animation: lightPulse 4s ease-in-out infinite;
            pointer-events: none;
            z-index: -2;
        }

        @keyframes lightPulse {
            0%, 100% { 
                opacity: 0.1;
                transform: translate(-50%, -50%) scale(1);
            }
            50% { 
                opacity: 0.2;
                transform: translate(-50%, -50%) scale(1.2);
            }
        }

        /* Moving rings towards light */
        .tunnel-rings {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100vmax;
            height: 100vmax;
            pointer-events: none;
            z-index: -1;
        }

        .ring {
            position: absolute;
            top: 50%;
            left: 50%;
            border: 1px solid var(--accent);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            animation: ringMove 4s linear infinite;
        }

        .ring:nth-child(1) { width: 100px; height: 100px; animation-delay: 0s; }
        .ring:nth-child(2) { width: 250px; height: 250px; animation-delay: 0.5s; }
        .ring:nth-child(3) { width: 400px; height: 400px; animation-delay: 1s; }
        .ring:nth-child(4) { width: 550px; height: 550px; animation-delay: 1.5s; }
        .ring:nth-child(5) { width: 700px; height: 700px; animation-delay: 2s; }
        .ring:nth-child(6) { width: 850px; height: 850px; animation-delay: 2.5s; }
        .ring:nth-child(7) { width: 1000px; height: 1000px; animation-delay: 3s; }
        .ring:nth-child(8) { width: 1150px; height: 1150px; animation-delay: 3.5s; }

        @keyframes ringMove {
            0% {
                width: 0;
                height: 0;
                opacity: 0;
            }
            10% {
                opacity: 0.2;
            }
            90% {
                opacity: 0.05;
            }
            100% {
                width: 100vmax;
                height: 100vmax;
                opacity: 0;
            }
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'DM Serif Display', serif;
            font-weight: 400;
            line-height: 1.1;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        /* Logo */
        .logo {
            position: fixed;
            top: 2rem;
            left: 2rem;
            font-size: 1.25rem;
            font-weight: 600;
            letter-spacing: -0.02em;
            z-index: 100;
            color: var(--text-primary);
            transition: opacity 0.3s;
        }

        .logo:hover {
            opacity: 0.7;
        }

        /* Floating Navigation */
        nav {
            position: fixed;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 100;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1rem;
            background: var(--nav-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 100px;
            border: 1px solid var(--nav-border);
        }

        .nav-item {
            padding: 0.6rem 1.25rem;
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-secondary);
            border-radius: 50px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-item:hover {
            color: var(--text-primary);
        }

        .nav-item.active {
            background: var(--text-primary);
            color: var(--bg-primary);
        }

        /* Theme Toggle */
        .theme-toggle {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--bg-tertiary);
            border: 1px solid var(--border);
            border-radius: 50%;
            cursor: pointer;
            margin-left: 0.5rem;
            transition: all 0.3s;
        }

        .theme-toggle:hover {
            background: var(--text-primary);
            color: var(--bg-primary);
        }

        .theme-toggle i {
            font-size: 1.1rem;
            color: var(--text-primary);
            transition: color 0.3s;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 4rem 2rem;
            position: relative;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: var(--bg-secondary);
            border: 1px solid var(--border);
            border-radius: 50px;
            font-size: 0.8rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
            opacity: 0;
            transform: translateY(20px);
        }

        .hero-badge span {
            width: 6px;
            height: 6px;
            background: var(--gradient-1);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }

        .hero h1 {
            font-size: clamp(3rem, 10vw, 7rem);
            letter-spacing: -0.03em;
            margin-bottom: 1.5rem;
            line-height: 1;
            opacity: 0;
            transform: translateY(40px);
        }

        .hero h1 .word {
            display: inline-block;
            overflow: hidden;
        }

        .hero h1 .char {
            display: inline-block;
            opacity: 0;
            transform: translateY(100%);
        }

        .hero p {
            font-size: 1.125rem;
            color: var(--text-secondary);
            max-width: 480px;
            margin-bottom: 2.5rem;
            opacity: 0;
            transform: translateY(20px);
        }

        .hero-cta {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
            opacity: 0;
            transform: translateY(20px);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.875rem 1.75rem;
            font-size: 0.9rem;
            font-weight: 500;
            border-radius: 50px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-primary {
            background: var(--text-primary);
            color: var(--bg-primary);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.15);
        }

        .btn-secondary {
            background: transparent;
            color: var(--text-primary);
            border: 1px solid var(--border);
        }

        .btn-secondary:hover {
            background: var(--bg-secondary);
            border-color: var(--text-secondary);
        }

        /* Scroll indicator */
        .scroll-hint {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-muted);
            font-size: 0.7rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            opacity: 0;
        }

        .scroll-line {
            width: 1px;
            height: 40px;
            background: linear-gradient(to bottom, var(--text-secondary), transparent);
            animation: scrollLine 2s infinite;
        }

        @keyframes scrollLine {
            0% { transform: scaleY(0); transform-origin: top; }
            50% { transform: scaleY(1); transform-origin: top; }
            51% { transform: scaleY(1); transform-origin: bottom; }
            100% { transform: scaleY(0); transform-origin: bottom; }
        }

        /* Sections */
        section {
            padding: 8rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            margin-bottom: 4rem;
        }

        .section-label {
            display: inline-block;
            font-size: 0.75rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--text-muted);
            margin-bottom: 1rem;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 3rem);
            letter-spacing: -0.02em;
        }

        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .service-card {
            padding: 2rem;
            background: var(--bg-secondary);
            border: 1px solid var(--border);
            border-radius: 16px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--text-primary), transparent);
            opacity: 0;
            transition: opacity 0.4s;
        }

        .service-card:hover {
            transform: translateY(-4px);
            border-color: var(--text-secondary);
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--bg-tertiary);
            border-radius: 12px;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .service-icon i {
            font-size: 1.5rem;
        }

        .work-placeholder i {
            font-size: 3rem;
            opacity: 0.15;
        }

        .contact-item-icon i {
            font-size: 1.2rem;
        }

        .service-card h3 {
            font-size: 1.35rem;
            margin-bottom: 0.75rem;
            font-family: 'DM Sans', sans-serif;
            font-weight: 600;
        }

        .service-card p {
            color: var(--text-secondary);
            font-size: 0.9rem;
            line-height: 1.6;
        }

        /* About Section */
        .about-section {
            background: var(--bg-secondary);
            border-radius: 24px;
            margin: 4rem 2rem;
            padding: 6rem;
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-content h2 {
            font-size: clamp(2rem, 3vw, 2.5rem);
            margin-bottom: 1.5rem;
            letter-spacing: -0.02em;
        }

        .about-content p {
            color: var(--text-secondary);
            margin-bottom: 1.25rem;
            line-height: 1.7;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .stat-item {
            padding: 1.5rem;
            background: var(--bg-tertiary);
            border-radius: 12px;
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 600;
            letter-spacing: -0.02em;
            margin-bottom: 0.25rem;
            background: linear-gradient(135deg, var(--gradient-1), var(--gradient-2));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        /* Work */
        .work-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .work-item {
            position: relative;
            aspect-ratio: 4/3;
            border-radius: 16px;
            overflow: hidden;
            background: var(--bg-secondary);
        }

        .work-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .work-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-tertiary) 100%);
            font-size: 4rem;
            transition: transform 0.6s;
        }

        .work-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 60%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 2rem;
            opacity: 0;
            transition: opacity 0.4s;
        }

        .work-item:hover .work-placeholder {
            transform: scale(1.05);
        }

        .work-item:hover .work-overlay {
            opacity: 1;
        }

        .work-category {
            font-size: 0.7rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--gradient-2);
            margin-bottom: 0.5rem;
        }

        .work-title {
            font-size: 1.5rem;
            font-family: 'DM Sans', sans-serif;
            font-weight: 600;
        }

        /* Contact */
        .contact-section {
            background: var(--bg-secondary);
            border-radius: 24px;
            margin: 4rem 2rem;
            padding: 6rem;
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }

        .contact-info h2 {
            font-size: clamp(2rem, 3vw, 2.5rem);
            margin-bottom: 1rem;
        }

        .contact-info > p {
            color: var(--text-secondary);
            margin-bottom: 2rem;
            line-height: 1.7;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: var(--bg-tertiary);
            border-radius: 12px;
            color: var(--text-primary);
            transition: all 0.3s;
        }

        .contact-item:hover {
            background: var(--bg-primary);
            transform: translateX(4px);
        }

        .contact-item-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--bg-secondary);
            border-radius: 10px;
            font-size: 1.1rem;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group label {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            padding: 1rem;
            background: var(--bg-tertiary);
            border: 1px solid var(--border);
            border-radius: 10px;
            color: var(--text-primary);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.95rem;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--text-primary);
            background: var(--bg-primary);
        }

        .form-group select {
            cursor: pointer;
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .btn-submit {
            padding: 1rem 2rem;
            background: var(--text-primary);
            color: var(--bg-primary);
            border: none;
            border-radius: 10px;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            align-self: flex-start;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.1);
        }

        /* Footer */
        footer {
            padding: 3rem 2rem;
            border-top: 1px solid var(--border);
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-copy {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .footer-links {
            display: flex;
            gap: 2rem;
        }

        .footer-links a {
            font-size: 0.85rem;
            color: var(--text-secondary);
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--text-primary);
        }

        /* Animations */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .about-grid,
            .contact-grid,
            .work-grid {
                grid-template-columns: 1fr;
            }

            .about-section,
            .contact-section {
                margin: 2rem;
                padding: 3rem 2rem;
            }
        }

        @media (max-width: 768px) {
            .logo {
                top: 1.5rem;
                left: 1.5rem;
            }

            nav {
                bottom: 1.5rem;
                padding: 0.5rem 0.75rem;
                gap: 0.25rem;
            }

            .nav-item {
                padding: 0.5rem 0.75rem;
                font-size: 0.75rem;
            }

            .footer-content {
                flex-direction: column;
                gap: 1.5rem;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Custom Cursor -->
    <div class="cursor"></div>
    <div class="cursor-dot"></div>

    <!-- Tunnel/Lorong Background Effect -->
    <div class="bg-tunnel">
        <div class="tunnel-light"></div>
        <div class="tunnel-rings">
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
        </div>
        <div class="tunnel-lines">
            <div class="tunnel-line"></div>
            <div class="tunnel-line"></div>
            <div class="tunnel-line"></div>
            <div class="tunnel-line"></div>
            <div class="tunnel-line"></div>
            <div class="tunnel-line"></div>
            <div class="tunnel-line"></div>
            <div class="tunnel-line"></div>
            <div class="tunnel-line"></div>
            <div class="tunnel-line"></div>
            <div class="tunnel-line"></div>
            <div class="tunnel-line"></div>
        </div>
    </div>
    <!-- Logo -->
    <a href="{{ route('landing') }}" class="logo">Agency.</a>

    <!-- Floating Navigation -->
    <nav>
        <a href="{{ route('landing') }}" class="nav-item">Home</a>
        <a href="{{ route('capabilities') }}" class="nav-item">Services</a>
        <a href="{{ route('work') }}" class="nav-item">Work</a>
        <a href="{{ route('say-hi') }}" class="nav-item">Contact</a>
        <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
            <i class="ph ph-moon"></i>
        </button>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p class="footer-copy">&copy; 2026 Agency. All rights reserved.</p>
            <div class="footer-links">
                <a href="{{ route('landing') }}">Home</a>
                <a href="{{ route('capabilities') }}">Services</a>
                <a href="{{ route('work') }}">Work</a>
                <a href="{{ route('say-hi') }}">Contact</a>
            </div>
        </div>
    </footer>

    <script>
        // Custom Cursor
        const cursor = document.querySelector('.cursor');
        const cursorDot = document.querySelector('.cursor-dot');
        
        let mouseX = 0, mouseY = 0;
        let cursorX = 0, cursorY = 0;
        
        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            cursorDot.style.left = mouseX - 3 + 'px';
            cursorDot.style.top = mouseY - 3 + 'px';
        });
        
        function animateCursor() {
            cursorX += (mouseX - cursorX) * 0.1;
            cursorY += (mouseY - cursorY) * 0.1;
            cursor.style.left = cursorX - 10 + 'px';
            cursor.style.top = cursorY - 10 + 'px';
            requestAnimationFrame(animateCursor);
        }
        animateCursor();
        
        // Cursor hover effect
        document.querySelectorAll('a, button, .service-card, .work-item, .nav-item').forEach(el => {
            el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
            el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
        });

        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = themeToggle.querySelector('i');
        
        // Check for saved theme preference or use system preference
        const savedTheme = localStorage.getItem('theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        
        if (savedTheme) {
            document.documentElement.setAttribute('data-theme', savedTheme);
            updateThemeIcon(savedTheme);
        } else if (!systemPrefersDark) {
            document.documentElement.setAttribute('data-theme', 'light');
            updateThemeIcon('light');
        }
        
        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeIcon(newTheme);
        });
        
        function updateThemeIcon(theme) {
            if (theme === 'light') {
                themeIcon.className = 'ph ph-sun';
            } else {
                themeIcon.className = 'ph ph-moon';
            }
        }

        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);

        // Hero animations
        gsap.to('.hero-badge', { opacity: 1, y: 0, duration: 0.8, delay: 0.2 });
        
        // Split text animation
        const title = document.querySelector('.hero h1');
        const text = title.textContent;
        title.innerHTML = text.split('').map(char => 
            `<span class="char">${char === ' ' ? '&nbsp;' : char}</span>`
        ).join('');
        
        gsap.to('.hero h1 .char', {
            opacity: 1,
            y: 0,
            duration: 0.8,
            stagger: 0.02,
            delay: 0.3,
            ease: 'power3.out'
        });

        gsap.to('.hero p', { opacity: 1, y: 0, duration: 0.8, delay: 0.8 });
        gsap.to('.hero-cta', { opacity: 1, y: 0, duration: 0.8, delay: 1 });
        gsap.to('.scroll-hint', { opacity: 1, delay: 1.5 });

        // Reveal animations
        document.querySelectorAll('.reveal').forEach(el => {
            gsap.to(el, {
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%',
                },
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: 'power3.out'
            });
        });

        // Active nav link
        const currentPath = window.location.pathname;
        document.querySelectorAll('.nav-item').forEach(item => {
            if (item.getAttribute('href') === currentPath) {
                item.classList.add('active');
            }
        });
    </script>
</body>
</html>
