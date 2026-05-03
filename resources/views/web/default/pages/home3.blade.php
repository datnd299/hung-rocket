@extends(getTemplate() . '.layouts.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/owl-carousel2/owl.carousel.min.css">
@endpush

@section('content')
    <!DOCTYPE html>
    <html lang="vi">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AhKi.io - Khám Phá Vô Vàn Khả Năng</title>

        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Lucide Icons -->
        <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>

        <!-- AOS (Animate On Scroll) - thay thế cho framer-motion -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
            rel="stylesheet">

        <style>
            :root {
                --bg-main: #070707;
                --bg-section: #0a0a0a;
                --bg-card: #111111;
                --bg-card-hover: #1a1a1a;
                --border-color: rgba(255, 255, 255, 0.05);
                --border-hover: rgba(255, 255, 255, 0.1);
                --text-gray: #9ca3af;
                --text-light: #d1d5db;
            }

            * {
                box-sizing: border-box;
            }

            body {
                background-color: var(--bg-main);
                color: #e5e7eb;
                font-family: 'Inter', sans-serif;
                margin: 0;
                padding: 0;
                min-height: 100vh;
                overflow-x: hidden;
            }

            ::selection {
                background-color: rgba(249, 115, 22, 0.3);
            }

            .font-display {
                font-family: 'Space Grotesk', sans-serif;
            }

            /* Navigation */
            .navbar-custom {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1050;
                background-color: rgba(0, 0, 0, 0.5);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border-bottom: 1px solid var(--border-color);
                height: 64px;
            }

            .nav-link-custom {
                color: var(--text-gray);
                text-decoration: none;
                font-weight: 500;
                letter-spacing: 0.025em;
                transition: color 0.2s;
                font-size: 14px;
            }

            .nav-link-custom:hover,
            .nav-link-custom.active {
                color: white;
            }

            .btn-pill {
                border-radius: 9999px;
                padding: 8px 20px;
                font-weight: 500;
                font-size: 14px;
                border: 1px solid rgba(255, 255, 255, 0.1);
                background-color: rgba(255, 255, 255, 0.05);
                color: white;
                transition: all 0.2s;
                display: inline-flex;
                align-items: center;
                gap: 8px;
            }

            .btn-pill:hover {
                background-color: rgba(255, 255, 255, 0.1);
                color: white;
            }

            .btn-pill-white {
                background-color: white;
                color: black;
                border: none;
            }

            .btn-pill-white:hover {
                background-color: #e5e7eb;
                color: black;
            }

            /* Hero */
            .hero-section {
                position: relative;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                overflow: hidden;
                border-bottom: 1px solid var(--border-color);
            }

            .hero-bg {
                position: absolute;
                inset: 0;
                z-index: 0;
            }

            .hero-bg img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                opacity: 0.6;
                mix-blend-mode: luminosity;
            }

            .hero-overlay-1 {
                position: absolute;
                inset: 0;
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6), var(--bg-main));
            }

            .hero-overlay-2 {
                position: absolute;
                inset: 0;
                background: radial-gradient(ellipse at center, rgba(249, 115, 22, 0.1), transparent 70%);
            }

            .hero-content {
                position: relative;
                z-index: 10;
                text-align: center;
                max-width: 56rem;
                padding: 0 16px;
                margin-top: 80px;
            }

            .hero-title {
                font-family: 'Space Grotesk', sans-serif;
                font-size: clamp(2.5rem, 6vw, 4.5rem);
                font-weight: 700;
                color: white;
                margin-bottom: 24px;
                letter-spacing: -0.025em;
                line-height: 1.1;
            }

            .hero-subtitle {
                font-size: clamp(1rem, 2vw, 1.25rem);
                color: var(--text-light);
                font-weight: 300;
                margin-bottom: 40px;
                max-width: 42rem;
                margin-left: auto;
                margin-right: auto;
                line-height: 1.6;
            }

            .btn-hero {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 12px;
                background-color: rgba(255, 255, 255, 0.1);
                border: 1px solid rgba(255, 255, 255, 0.2);
                color: white;
                padding: 14px 32px;
                border-radius: 9999px;
                font-weight: 500;
                transition: all 0.3s;
                text-decoration: none;
            }

            .btn-hero:hover {
                background-color: rgba(255, 255, 255, 0.2);
                color: white;
            }

            .btn-hero:hover .arrow-move {
                transform: translateX(4px);
            }

            .arrow-move {
                transition: transform 0.3s;
            }

            /* Sections */
            .section-padding {
                padding: 96px 16px;
            }

            .section-bg-alt {
                background-color: var(--bg-section);
                border-top: 1px solid var(--border-color);
                border-bottom: 1px solid var(--border-color);
            }

            .section-title {
                font-family: 'Space Grotesk', sans-serif;
                font-size: 2.25rem;
                font-weight: 700;
                color: white;
                text-align: center;
                margin-bottom: 64px;
                letter-spacing: -0.025em;
            }

            .section-subtitle {
                color: var(--text-gray);
                font-weight: 500;
                text-align: center;
            }

            /* News Cards */
            .news-card {
                cursor: pointer;
                transition: all 0.3s;
            }

            .news-card-image {
                position: relative;
                aspect-ratio: 16/9;
                border-radius: 1rem;
                overflow: hidden;
                margin-bottom: 16px;
                background-color: #111;
                border: 1px solid var(--border-color);
            }

            .news-card-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.5s;
            }

            .news-card:hover .news-card-image img {
                transform: scale(1.05);
            }

            .news-card:hover h3 {
                color: #60a5fa;
            }

            .news-card h3 {
                font-weight: 700;
                color: white;
                margin-bottom: 8px;
                line-height: 1.4;
                transition: color 0.2s;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }

            .news-card p {
                font-size: 14px;
                color: var(--text-gray);
                margin-bottom: 12px;
                line-height: 1.5;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }

            .news-card span {
                font-size: 12px;
                color: #6b7280;
                font-weight: 500;
            }

            /* Tags */
            .tags-row {
                display: flex;
                align-items: center;
                gap: 12px;
                overflow-x: auto;
                padding-bottom: 24px;
                scrollbar-width: none;
            }

            .tags-row::-webkit-scrollbar {
                display: none;
            }

            .tag-btn {
                white-space: nowrap;
                padding: 8px 20px;
                border-radius: 9999px;
                border: 1px solid var(--border-color);
                background: transparent;
                color: var(--text-gray);
                font-size: 14px;
                font-weight: 500;
                transition: all 0.2s;
                cursor: pointer;
            }

            .tag-btn:hover {
                color: white;
                border-color: rgba(255, 255, 255, 0.2);
            }

            .tag-btn.active {
                border-color: white;
                color: white;
                background-color: rgba(255, 255, 255, 0.05);
            }

            /* Tutorial Cards */
            .tutorial-card {
                cursor: pointer;
                background-color: var(--bg-card);
                border-radius: 1rem;
                border: 1px solid var(--border-color);
                overflow: hidden;
                transition: border-color 0.3s;
                display: flex;
                flex-direction: column;
                height: 100%;
            }

            .tutorial-card:hover {
                border-color: var(--border-hover);
            }

            .tutorial-card-image {
                position: relative;
                aspect-ratio: 16/9;
                background-color: #111;
                overflow: hidden;
            }

            .tutorial-card-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                opacity: 0.8;
            }

            .play-btn {
                position: absolute;
                inset: 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .play-btn-circle {
                width: 48px;
                height: 48px;
                background-color: #dc2626;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                padding-left: 4px;
            }

            .tutorial-card-body {
                padding: 20px;
                flex: 1;
                display: flex;
                flex-direction: column;
            }

            .tutorial-category {
                font-size: 12px;
                color: #6b7280;
                margin-bottom: 8px;
                text-transform: uppercase;
                letter-spacing: 0.05em;
                font-weight: 600;
            }

            .tutorial-card h3 {
                font-weight: 700;
                color: white;
                margin-bottom: 4px;
            }

            .tutorial-card-meta {
                display: flex;
                align-items: center;
                justify-content: space-between;
                font-size: 12px;
                color: #6b7280;
                font-weight: 500;
                margin-top: 16px;
            }

            .dot {
                width: 4px;
                height: 4px;
                border-radius: 50%;
                background-color: #6b7280;
            }

            .coming-soon-card {
                aspect-ratio: 16/9;
                background-color: var(--bg-card-hover);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                border-bottom: 1px solid var(--border-color);
            }

            .coming-soon-circle {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                border: 2px solid rgba(255, 255, 255, 0.2);
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 12px;
                transition: border-color 0.3s;
            }

            .tutorial-card:hover .coming-soon-circle {
                border-color: rgba(255, 255, 255, 0.4);
            }

            .coming-text-1 {
                font-family: 'Space Grotesk', sans-serif;
                font-weight: 700;
                font-size: 1.5rem;
                letter-spacing: 0.1em;
                color: rgba(255, 255, 255, 0.2);
            }

            .coming-text-2 {
                font-family: 'Space Grotesk', sans-serif;
                font-weight: 700;
                font-size: 1.875rem;
                letter-spacing: 0.05em;
                color: rgba(255, 255, 255, 0.5);
            }

            .coming-brand {
                font-weight: 700;
                font-size: 0.875rem;
                letter-spacing: 0.1em;
                color: rgba(255, 255, 255, 0.1);
                margin-top: 8px;
            }

            /* Pricing */
            .pricing-card {
                background-color: var(--bg-card);
                border-radius: 1rem;
                border: 1px solid var(--border-color);
                overflow: hidden;
                display: flex;
                flex-direction: column;
                transition: all 0.3s;
                position: relative;
                height: 100%;
            }

            .pricing-card:hover {
                border-color: var(--border-hover);
            }

            .save-badge {
                position: absolute;
                top: 12px;
                right: 12px;
                z-index: 10;
                background-color: #dc2626;
                color: white;
                font-size: 12px;
                font-weight: 700;
                padding: 4px 8px;
                border-radius: 6px;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
            }

            .pricing-banner {
                height: 128px;
                background-color: var(--bg-card-hover);
                position: relative;
                border-bottom: 1px solid var(--border-color);
                overflow: hidden;
            }

            .pricing-banner-bg {
                position: absolute;
                inset: 0;
                opacity: 0.4;
                mix-blend-mode: screen;
                background-size: cover;
                background-position: center;
            }

            .pricing-banner-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(to top, var(--bg-card), transparent);
            }

            .pricing-banner-content {
                position: absolute;
                inset: 0;
                padding: 16px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .gradient-text {
                font-family: 'Space Grotesk', sans-serif;
                font-weight: 700;
                font-size: 1.25rem;
                letter-spacing: 0.1em;
                background: linear-gradient(to right, #60a5fa, #4ade80, #facc15);
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
            }

            .avatar-row {
                margin-top: 8px;
                display: flex;
                gap: 8px;
            }

            .avatar-small {
                width: 32px;
                height: 32px;
                border-radius: 50%;
                background-color: rgba(0, 0, 0, 0.5);
                overflow: hidden;
            }

            .avatar-small img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                opacity: 0.8;
            }

            .pricing-body {
                padding: 24px;
                flex: 1;
                display: flex;
                flex-direction: column;
            }

            .pricing-title {
                font-weight: 700;
                font-size: 14px;
                color: var(--text-light);
                margin-bottom: 16px;
                min-height: 40px;
            }

            .pricing-price {
                display: flex;
                align-items: flex-end;
                gap: 8px;
                margin-bottom: 24px;
            }

            .pricing-price-main {
                font-size: 1.5rem;
                font-weight: 700;
                color: white;
            }

            .pricing-price-old {
                font-size: 12px;
                color: #6b7280;
                text-decoration: line-through;
                margin-bottom: 4px;
            }

            .pricing-details {
                border-top: 1px solid var(--border-color);
                padding-top: 16px;
                font-size: 14px;
                color: var(--text-gray);
                flex: 1;
            }

            .pricing-detail-row {
                display: flex;
                justify-content: space-between;
                margin-bottom: 12px;
            }

            .pricing-detail-row .value {
                color: white;
                font-weight: 500;
            }

            .pricing-footer {
                margin-top: 24px;
                padding-top: 16px;
                border-top: 1px solid var(--border-color);
                display: flex;
                flex-direction: column;
                gap: 8px;
            }

            .green-status {
                display: flex;
                align-items: center;
                gap: 8px;
                color: #34d399;
                font-size: 12px;
                font-weight: 500;
            }

            .green-dot {
                width: 6px;
                height: 6px;
                border-radius: 50%;
                background-color: #34d399;
                flex-shrink: 0;
            }

            .pricing-savings {
                font-size: 12px;
                color: #6b7280;
                font-style: italic;
            }

            /* Creative Journey */
            .journey-card {
                position: relative;
                aspect-ratio: 16/9;
                border-radius: 1rem;
                overflow: hidden;
                cursor: pointer;
                border: 1px solid var(--border-hover);
            }

            @media (min-width: 768px) {
                .journey-card {
                    aspect-ratio: auto;
                    height: 320px;
                }
            }

            .journey-card img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                mix-blend-mode: luminosity;
                opacity: 0.6;
                transition: transform 0.7s;
            }

            .journey-card:hover img {
                transform: scale(1.05);
            }

            .journey-card-yellow {
                background-color: rgba(250, 204, 21, 0.1);
            }

            .journey-card-yellow .yellow-overlay {
                position: absolute;
                inset: 0;
                background-color: rgba(234, 179, 8, 0.2);
                mix-blend-mode: overlay;
            }

            .journey-card-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2), transparent);
            }

            .journey-content-bottom {
                position: absolute;
                inset-inline: 0;
                bottom: 0;
                padding: 32px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .journey-title-yellow {
                font-family: 'Space Grotesk', sans-serif;
                font-size: 3rem;
                font-weight: 700;
                color: #fde047;
                margin-bottom: 8px;
                text-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
                letter-spacing: 0.05em;
                transform: skewX(-6deg);
            }

            .journey-subtitle-yellow {
                color: rgba(254, 240, 138, 0.8);
                font-size: 14px;
                letter-spacing: 0.1em;
                font-weight: 500;
            }

            .journey-card-red .journey-overlay-red {
                position: absolute;
                inset: 0;
                background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.4), transparent);
            }

            .journey-content-left {
                position: absolute;
                inset-block: 0;
                left: 0;
                padding: 32px;
                display: flex;
                align-items: center;
            }

            .red-text-stack {
                display: flex;
                flex-direction: column;
                transform: rotate(-12deg);
            }

            .red-text-stack span {
                font-family: 'Space Grotesk', sans-serif;
                font-size: 2.25rem;
                font-weight: 900;
                line-height: 1;
                text-transform: uppercase;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            }

            .red-text-white {
                color: white;
            }

            .red-text-gradient {
                background: linear-gradient(to right, #ef4444, #f97316);
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
            }

            .floating-chat {
                position: absolute;
                right: 0;
                top: 0;
                transform: translateY(-50%);
                background-color: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(8px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                padding: 8px;
                border-radius: 8px;
                display: flex;
                align-items: center;
                gap: 8px;
                cursor: pointer;
                transition: background-color 0.2s;
            }

            .floating-chat:hover {
                background-color: rgba(255, 255, 255, 0.2);
            }

            .floating-chat-avatar {
                width: 32px;
                height: 32px;
                border-radius: 50%;
                background-size: cover;
                background-position: center;
            }

            .floating-chat-text {
                font-size: 12px;
                font-weight: 600;
                margin-right: 4px;
            }

            .floating-chat-badge {
                position: absolute;
                top: -4px;
                right: -4px;
                width: 16px;
                height: 16px;
                background-color: #ef4444;
                border-radius: 50%;
                border: 2px solid var(--bg-card);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 8px;
                font-weight: 700;
                color: white;
            }

            /* Community */
            .community-card {
                background-color: var(--bg-card);
                border-radius: 1rem;
                padding: 32px;
                border: 1px solid var(--border-color);
                display: flex;
                flex-direction: column;
                transition: border-color 0.2s;
                height: 100%;
            }

            .community-card:hover {
                border-color: var(--border-hover);
            }

            .community-card h3 {
                font-family: 'Space Grotesk', sans-serif;
                font-size: 1.25rem;
                font-weight: 700;
                color: white;
                margin-bottom: 12px;
            }

            .community-subtitle {
                font-size: 14px;
                color: var(--text-gray);
                margin-bottom: 32px;
                line-height: 1.6;
                min-height: 60px;
            }

            .community-list {
                list-style: none;
                padding: 0;
                margin: 0 0 40px 0;
                display: flex;
                flex-direction: column;
                gap: 16px;
                flex: 1;
            }

            .community-list li {
                display: flex;
                align-items: flex-start;
                gap: 12px;
            }

            .community-list li i {
                width: 20px;
                height: 20px;
                color: #6b7280;
                flex-shrink: 0;
            }

            .community-list span {
                font-size: 14px;
                color: var(--text-light);
                line-height: 1.4;
            }

            .community-btn {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                border: none;
                transition: background-color 0.2s;
                cursor: pointer;
            }

            .community-btn-default {
                background-color: rgba(255, 255, 255, 0.05);
                color: white;
            }

            .community-btn-default:hover {
                background-color: rgba(255, 255, 255, 0.1);
            }

            .community-btn-yellow {
                background-color: #facc15;
                color: black;
            }

            .community-btn-yellow:hover {
                background-color: #eab308;
            }

            /* Partners */
            .partners-section {
                position: relative;
                overflow: hidden;
            }

            .partners-glow {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 800px;
                height: 500px;
                background-color: rgba(59, 130, 246, 0.05);
                border-radius: 50%;
                filter: blur(100px);
                pointer-events: none;
            }

            .partners-display {
                position: relative;
                margin-bottom: 48px;
            }

            .partners-row {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 24px;
                opacity: 0.4;
                filter: blur(1px);
                transform: scale(0.9);
            }

            .partner-avatar {
                width: 64px;
                height: 64px;
                border-radius: 50%;
                overflow: hidden;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            .partner-avatar img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .partner-main {
                width: 256px;
                height: 320px;
                border-radius: 2rem;
                overflow: hidden;
                border: 2px solid rgba(255, 255, 255, 0.2);
                opacity: 1;
                filter: blur(0);
                transform: scale(1.1);
                z-index: 20;
                margin: 0 32px;
                position: relative;
                box-shadow: 0 25px 50px -12px rgba(249, 115, 22, 0.1);
            }

            .partner-main img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .partner-tag {
                position: absolute;
                inset-inline: 0;
                bottom: 0;
                padding: 16px;
                background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
            }

            .partner-tag span {
                background-color: rgba(0, 0, 0, 0.5);
                backdrop-filter: blur(4px);
                padding: 2px 8px;
                border-radius: 4px;
                font-size: 10px;
                text-transform: uppercase;
                font-weight: 700;
                letter-spacing: 0.1em;
                display: inline-block;
            }

            .partner-card {
                width: 100%;
                max-width: 48rem;
                background-color: rgba(17, 17, 17, 0.8);
                backdrop-filter: blur(8px);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 1rem;
                padding: 32px;
                margin-bottom: 32px;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 32px;
            }

            @media (min-width: 768px) {
                .partner-card {
                    flex-direction: row;
                    align-items: flex-start;
                    text-align: left;
                }
            }

            .partner-card h3 {
                font-family: 'Space Grotesk', sans-serif;
                font-size: 1.5rem;
                font-weight: 700;
                color: white;
                display: flex;
                align-items: center;
                gap: 12px;
                margin-bottom: 8px;
            }

            .partner-badge {
                padding: 4px 8px;
                background-color: rgba(255, 255, 255, 0.1);
                font-size: 10px;
                border-radius: 4px;
                text-transform: uppercase;
                font-weight: 600;
                color: var(--text-light);
            }

            .partner-card p {
                font-size: 14px;
                color: var(--text-gray);
            }

            .partner-card-right {
                width: 100%;
                height: 96px;
                background-color: rgba(255, 255, 255, 0.05);
                border-radius: 8px;
                border: 1px solid var(--border-color);
            }

            @media (min-width: 768px) {
                .partner-card-right {
                    width: 66%;
                }
            }

            .dots-row {
                display: flex;
                gap: 8px;
            }

            .dot-pagination {
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background-color: rgba(255, 255, 255, 0.2);
            }

            .dot-pagination.active {
                background-color: white;
                box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            }

            /* Footer */
            .footer-custom {
                border-top: 1px solid var(--border-hover);
                background-color: var(--bg-main);
                padding: 80px 16px 40px;
            }

            .footer-grid {
                border-bottom: 1px solid var(--border-hover);
                padding-bottom: 64px;
            }

            .footer-heading {
                font-weight: 700;
                font-size: 14px;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: white;
                margin-bottom: 24px;
            }

            .footer-list {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
                flex-direction: column;
                gap: 16px;
            }

            .footer-list a {
                font-size: 14px;
                color: var(--text-gray);
                font-weight: 500;
                text-decoration: none;
                transition: color 0.2s;
            }

            .footer-list a:hover {
                color: white;
            }

            .newsletter-input-wrap {
                position: relative;
            }

            .newsletter-input {
                width: 100%;
                background-color: var(--bg-card);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 8px;
                padding: 12px 48px 12px 16px;
                font-size: 14px;
                color: white;
                outline: none;
                transition: border-color 0.2s;
            }

            .newsletter-input:focus {
                border-color: rgba(255, 255, 255, 0.3);
            }

            .newsletter-input::placeholder {
                color: #6b7280;
            }

            .newsletter-btn {
                position: absolute;
                right: 8px;
                top: 50%;
                transform: translateY(-50%);
                width: 32px;
                height: 32px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: rgba(255, 255, 255, 0.1);
                border: none;
                border-radius: 4px;
                color: white;
                transition: background-color 0.2s;
                cursor: pointer;
            }

            .newsletter-btn:hover {
                background-color: rgba(255, 255, 255, 0.2);
            }

            .footer-bottom {
                padding-top: 32px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
                gap: 16px;
                font-size: 12px;
                color: #6b7280;
            }

            @media (min-width: 768px) {
                .footer-bottom {
                    flex-direction: row;
                }
            }

            /* Logo */
            .brand-logo {
                font-family: 'Space Grotesk', sans-serif;
                font-weight: 700;
                font-size: 1.25rem;
                letter-spacing: 0.1em;
                color: white;
                text-decoration: none;
            }

            .brand-logo-large {
                font-size: 1.5rem;
            }

            /* Utilities */
            .max-w-7xl {
                max-width: 80rem;
                margin-left: auto;
                margin-right: auto;
            }

            .center-btn-wrap {
                margin-top: 64px;
                display: flex;
                justify-content: center;
            }

            .btn-outline-pill {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: transparent;
                border: 1px solid rgba(255, 255, 255, 0.1);
                color: var(--text-light);
                padding: 10px 24px;
                border-radius: 9999px;
                font-size: 14px;
                font-weight: 500;
                transition: all 0.2s;
                text-decoration: none;
                cursor: pointer;
            }

            .btn-outline-pill:hover {
                background-color: rgba(255, 255, 255, 0.05);
                color: var(--text-light);
            }

            .btn-outline-pill:hover .arrow-move {
                transform: translateX(4px);
            }

            .icon-sm {
                width: 16px;
                height: 16px;
            }

            .icon-md {
                width: 20px;
                height: 20px;
            }

            /* Mobile menu */
            @media (max-width: 768px) {

                .nav-links-desktop,
                .nav-actions-desktop {
                    display: none !important;
                }

                .section-padding {
                    padding: 64px 16px;
                }

                .section-title {
                    font-size: 1.875rem;
                    margin-bottom: 40px;
                }

                .partners-row {
                    flex-wrap: wrap;
                }

                .partner-avatar {
                    width: 48px;
                    height: 48px;
                }

                .partner-main {
                    width: 200px;
                    height: 260px;
                    margin: 0 8px;
                }

                .red-text-stack span {
                    font-size: 1.75rem;
                }

                .journey-title-yellow {
                    font-size: 2rem;
                }
            }

            /* Aspect ratio fallback */
            .aspect-video {
                aspect-ratio: 16 / 9;
            }

            @supports not (aspect-ratio: 16 / 9) {
                .aspect-video::before {
                    float: left;
                    padding-top: 56.25%;
                    content: '';
                }

                .aspect-video::after {
                    display: block;
                    content: '';
                    clear: both;
                }
            }
        </style>
    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar-custom" data-aos="fade-down" data-aos-duration="600">
            <div class="max-w-7xl px-3 h-100 d-flex align-items-center justify-content-between" style="height: 64px;">
                <div class="d-flex align-items-center gap-4">
                    <a href="#" class="brand-logo">AhKi.io</a>
                    <div class="nav-links-desktop d-flex gap-4 align-items-center">
                        <a href="#" class="nav-link-custom">Tin Tức</a>
                        <a href="#" class="nav-link-custom active">Hướng Dẫn</a>
                        <a href="#" class="nav-link-custom">Sáng Tạo</a>
                        <a href="#" class="nav-link-custom">Đối Tác</a>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <a href="#" class="nav-link-custom nav-actions-desktop d-none d-md-flex">Đăng Về AI Tools</a>
                    <button class="btn-pill">Liên Hệ</button>
                    <button class="btn-pill btn-pill-white">Đăng Nhập</button>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-bg">
                <img src="https://images.unsplash.com/photo-1682695796954-bad0d0f59ff1?q=80&w=2940&auto=format&fit=crop"
                    alt="Hero Background">
                <div class="hero-overlay-1"></div>
                <div class="hero-overlay-2"></div>
            </div>
            <div class="hero-content">
                <h1 class="hero-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    Khám Phá Vô Vàn Khả Năng
                </h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    Tạo ra những khoảnh khắc đậm chất điện ảnh bằng công nghệ tạo video tiên tiến
                </p>
                <button class="btn-hero" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="600">
                    Khám Phá Ngay
                    <i data-lucide="arrow-right" class="icon-md arrow-move"></i>
                </button>
            </div>
        </section>

        <!-- Tin Tức (News) -->
        <section class="section-padding">
            <div class="max-w-7xl">
                <h2 class="section-title" data-aos="fade-up">Tin Tức</h2>
                <div class="row g-4">
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                        <div class="news-card">
                            <div class="news-card-image">
                                <img src="https://images.unsplash.com/photo-1497005367839-6e852de72767?w=500&q=80"
                                    alt="News">
                            </div>
                            <h3>Vlog Cannes năm chúng ta đã làm mạng rồ UI</h3>
                            <p>Vlog Cannes năm chúng ta đã làm mạng rồ UI! Hành trình Halos Kriya INAPE.</p>
                            <span>28 tháng 6, 2024</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="news-card">
                            <div class="news-card-image">
                                <img src="https://images.unsplash.com/photo-1485846234645-a62644f84728?w=500&q=80"
                                    alt="News">
                            </div>
                            <h3>Tình yêu trông như thế nào khi con người trở thành vật?</h3>
                            <p>Tình yêu trông như thế nào khi con người trở thành vật? Trạng thái bấp bênh thoắt ẩn thoắt
                                hiện...</p>
                            <span>28 tháng 6, 2024</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="news-card">
                            <div class="news-card-image">
                                <img src="https://images.unsplash.com/photo-1542204165-65bf26472b9b?w=500&q=80" alt="News">
                            </div>
                            <h3>730p đã ghi lại cảnh phố mưa, nhưng LK nhìn thấy từng tia sáng lấp lánh trong sương</h3>
                            <p>730p đã ghi lại cảnh phố mưa, nhưng LK nhìn thấy từng tia sáng lấp lánh trong sương.</p>
                            <span>28 tháng 6, 2024</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="news-card">
                            <div class="news-card-image">
                                <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=500&q=80" alt="News">
                            </div>
                            <h3>AI @Roblox: Đã thử tái tạo Initial D thành trò chơi lái xe thế giới mở</h3>
                            <p>AI @Roblox: Đã thử tái tạo Initial D thành trò chơi lái xe thế giới mở. Sử dụng GPT-4...</p>
                            <span>28 tháng 6, 2024</span>
                        </div>
                    </div>
                </div>
                <div class="center-btn-wrap">
                    <button class="btn-outline-pill">
                        Tin tức
                        <i data-lucide="arrow-right" class="icon-sm arrow-move"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Hướng Dẫn (Tutorials) -->
        <section class="section-padding section-bg-alt">
            <div class="max-w-7xl">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title" style="margin-bottom: 16px;">Hướng dẫn</h2>
                    <p class="section-subtitle">Bí Kíp - AI Thực Chiến, Kho Tàng Kiến Thức & Hình Ảnh Cùng Cộng Đồng AI</p>
                </div>

                <!-- Tags -->
                <div class="tags-row" data-aos="fade-right">
                    <button class="tag-btn">Suno AI</button>
                    <button class="tag-btn active">Freepik</button>
                    <button class="tag-btn">Pika</button>
                    <button class="tag-btn">Adobe Firefly</button>
                    <button class="tag-btn">CapCut</button>
                    <button class="tag-btn">NotebookLM</button>
                    <button class="tag-btn">ChatGPT</button>
                    <button class="tag-btn">Midjourney</button>
                    <button class="tag-btn">Runway</button>
                    <button class="tag-btn">Gemini</button>
                    <button class="tag-btn">Kling AI</button>
                </div>

                <!-- Video Grid -->
                <div class="row g-4 mt-2">
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                        <div class="tutorial-card">
                            <div class="tutorial-card-image">
                                <img src="https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?w=500&q=80"
                                    alt="Video">
                                <div class="play-btn">
                                    <div class="play-btn-circle">
                                        <i data-lucide="play"
                                            style="fill: white; color: white; width: 20px; height: 20px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="tutorial-card-body">
                                <div class="tutorial-category">Freepik</div>
                                <h3>Giới thiệu về bộ công cụ AI Suite</h3>
                                <p style="font-size: 14px; color: var(--text-gray);">Freepik Academy</p>
                                <div class="tutorial-card-meta">
                                    <span class="d-flex align-items-center gap-2">
                                        <span class="dot"></span> 32 Bài giảng
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Coming soon cards -->
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="tutorial-card">
                            <div class="coming-soon-card">
                                <div class="coming-soon-circle">
                                    <i data-lucide="play"
                                        style="fill: rgba(255,255,255,0.2); color: rgba(255,255,255,0.5); width: 20px; height: 20px;"></i>
                                </div>
                                <div class="coming-text-1">COMING</div>
                                <div class="coming-text-2">SOON</div>
                                <div class="coming-brand">AhKi.io</div>
                            </div>
                            <div class="tutorial-card-body" style="opacity: 0.5;">
                                <div class="tutorial-category">Coming Soon</div>
                                <h3>Coming Soon</h3>
                                <p style="font-size: 14px; color: var(--text-gray);">Coming Soon</p>
                                <div class="tutorial-card-meta">
                                    <span class="d-flex align-items-center gap-2">
                                        <span class="dot"></span> Video giảng
                                    </span>
                                    <i data-lucide="arrow-right" class="icon-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="tutorial-card">
                            <div class="coming-soon-card">
                                <div class="coming-soon-circle">
                                    <i data-lucide="play"
                                        style="fill: rgba(255,255,255,0.2); color: rgba(255,255,255,0.5); width: 20px; height: 20px;"></i>
                                </div>
                                <div class="coming-text-1">COMING</div>
                                <div class="coming-text-2">SOON</div>
                                <div class="coming-brand">AhKi.io</div>
                            </div>
                            <div class="tutorial-card-body" style="opacity: 0.5;">
                                <div class="tutorial-category">Coming Soon</div>
                                <h3>Coming Soon</h3>
                                <p style="font-size: 14px; color: var(--text-gray);">Coming Soon</p>
                                <div class="tutorial-card-meta">
                                    <span class="d-flex align-items-center gap-2">
                                        <span class="dot"></span> Video giảng
                                    </span>
                                    <i data-lucide="arrow-right" class="icon-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="tutorial-card">
                            <div class="coming-soon-card">
                                <div class="coming-soon-circle">
                                    <i data-lucide="play"
                                        style="fill: rgba(255,255,255,0.2); color: rgba(255,255,255,0.5); width: 20px; height: 20px;"></i>
                                </div>
                                <div class="coming-text-1">COMING</div>
                                <div class="coming-text-2">SOON</div>
                                <div class="coming-brand">AhKi.io</div>
                            </div>
                            <div class="tutorial-card-body" style="opacity: 0.5;">
                                <div class="tutorial-category">Coming Soon</div>
                                <h3>Coming Soon</h3>
                                <p style="font-size: 14px; color: var(--text-gray);">Coming Soon</p>
                                <div class="tutorial-card-meta">
                                    <span class="d-flex align-items-center gap-2">
                                        <span class="dot"></span> Video giảng
                                    </span>
                                    <i data-lucide="arrow-right" class="icon-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="center-btn-wrap">
                    <button class="btn-outline-pill">
                        Xem thêm hướng dẫn
                        <i data-lucide="arrow-right" class="icon-sm arrow-move"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Ưu Đãi Hiện Hành (Pricing) -->
        <section class="section-padding">
            <div class="max-w-7xl">
                <h2 class="section-title" data-aos="fade-up">Ưu Đãi Hiện Hành</h2>
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                        <div class="pricing-card">
                            <div class="save-badge">SAVE 15%</div>
                            <div class="pricing-banner">
                                <div class="pricing-banner-bg"
                                    style="background-image: url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=500')">
                                </div>
                                <div class="pricing-banner-overlay"></div>
                                <div class="pricing-banner-content">
                                    <span class="gradient-text">GOOGLE ULTRA</span>
                                    <div class="avatar-row">
                                        <div class="avatar-small"><img
                                                src="https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?w=100&q=80">
                                        </div>
                                        <div class="avatar-small"><img
                                                src="https://images.unsplash.com/photo-1542204165-65bf26472b9b?w=100&q=80">
                                        </div>
                                        <div class="avatar-small"><img
                                                src="https://images.unsplash.com/photo-1497005367839-6e852de72767?w=100&q=80">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <h3 class="pricing-title">1-Mid Google Ultra, 35.000 Credits/Tháng</h3>
                                <div class="pricing-price">
                                    <span class="pricing-price-main">11.000.000đ</span>
                                    <span class="pricing-price-old">13.000.000đ</span>
                                </div>
                                <div class="pricing-details">
                                    <div class="pricing-detail-row"><span>Thời hạn:</span><span class="value">1 Năm</span>
                                    </div>
                                    <div class="pricing-detail-row"><span>Phân loại:</span><span class="value">AI</span>
                                    </div>
                                    <div class="pricing-detail-row"><span>Giá bản gốc:</span><span class="value"
                                            style="text-decoration: line-through;">13.000.000đ</span></div>
                                </div>
                                <div class="pricing-footer">
                                    <span class="green-status"><span class="green-dot"></span> Đặt hàng ngay</span>
                                    <span class="pricing-savings">Tiết kiệm 13.000.000đ vào chi phí AhKi.io!</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-card">
                            <div class="save-badge">SAVE 85%</div>
                            <div class="pricing-banner">
                                <div class="pricing-banner-bg"
                                    style="background-image: url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=500')">
                                </div>
                                <div class="pricing-banner-overlay"></div>
                                <div class="pricing-banner-content">
                                    <span class="gradient-text">GOOGLE ULTRA</span>
                                    <div class="avatar-row">
                                        <div class="avatar-small"><img
                                                src="https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?w=100&q=80">
                                        </div>
                                        <div class="avatar-small"><img
                                                src="https://images.unsplash.com/photo-1542204165-65bf26472b9b?w=100&q=80">
                                        </div>
                                        <div class="avatar-small"><img
                                                src="https://images.unsplash.com/photo-1497005367839-6e852de72767?w=100&q=80">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <h3 class="pricing-title">O Credits/ Tháng</h3>
                                <div class="pricing-price">
                                    <span class="pricing-price-main">2.190.000đ</span>
                                    <span class="pricing-price-old">15.000.000đ</span>
                                </div>
                                <div class="pricing-details">
                                    <div class="pricing-detail-row"><span>Thời hạn:</span><span class="value">1 Năm</span>
                                    </div>
                                    <div class="pricing-detail-row"><span>Phân loại:</span><span class="value">AI</span>
                                    </div>
                                    <div class="pricing-detail-row"><span>Giá bản gốc:</span><span class="value"
                                            style="text-decoration: line-through;">15.000.000đ</span></div>
                                </div>
                                <div class="pricing-footer">
                                    <span class="green-status"><span class="green-dot"></span> Đặt hàng ngay</span>
                                    <span class="pricing-savings">Tiết kiệm 15.000.000đ vào chi phí AhKi.io!</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-card">
                            <div class="save-badge">SAVE 18%</div>
                            <div class="pricing-banner">
                                <div class="pricing-banner-bg"
                                    style="background-image: url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=500')">
                                </div>
                                <div class="pricing-banner-overlay"></div>
                                <div class="pricing-banner-content">
                                    <span class="gradient-text">GOOGLE ULTRA</span>
                                    <div class="avatar-row">
                                        <div class="avatar-small"><img
                                                src="https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?w=100&q=80">
                                        </div>
                                        <div class="avatar-small"><img
                                                src="https://images.unsplash.com/photo-1542204165-65bf26472b9b?w=100&q=80">
                                        </div>
                                        <div class="avatar-small"><img
                                                src="https://images.unsplash.com/photo-1497005367839-6e852de72767?w=100&q=80">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <h3 class="pricing-title">33M Credits/ Tháng</h3>
                                <div class="pricing-price">
                                    <span class="pricing-price-main">2.290.000đ</span>
                                    <span class="pricing-price-old">2.790.000đ</span>
                                </div>
                                <div class="pricing-details">
                                    <div class="pricing-detail-row"><span>Thời hạn:</span><span class="value">1 Tháng</span>
                                    </div>
                                    <div class="pricing-detail-row"><span>Phân loại:</span><span class="value">AI</span>
                                    </div>
                                    <div class="pricing-detail-row"><span>Giá bản gốc:</span><span class="value"
                                            style="text-decoration: line-through;">2.790.000đ</span></div>
                                </div>
                                <div class="pricing-footer">
                                    <span class="green-status"><span class="green-dot"></span> Đặt hàng ngay</span>
                                    <span class="pricing-savings">Tiết kiệm 2.790.000đ vào chi phí AhKi.io!</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="pricing-card">
                            <div class="save-badge">SAVE 92%</div>
                            <div class="pricing-banner">
                                <div class="pricing-banner-bg"
                                    style="background-image: url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=500')">
                                </div>
                                <div class="pricing-banner-overlay"></div>
                                <div class="pricing-banner-content">
                                    <span class="gradient-text">GOOGLE ULTRA</span>
                                    <div class="avatar-row">
                                        <div class="avatar-small"><img
                                                src="https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?w=100&q=80">
                                        </div>
                                        <div class="avatar-small"><img
                                                src="https://images.unsplash.com/photo-1542204165-65bf26472b9b?w=100&q=80">
                                        </div>
                                        <div class="avatar-small"><img
                                                src="https://images.unsplash.com/photo-1497005367839-6e852de72767?w=100&q=80">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <h3 class="pricing-title">Premium Credit/ Tháng</h3>
                                <div class="pricing-price">
                                    <span class="pricing-price-main">3.290.000đ</span>
                                    <span class="pricing-price-old">43.000.000đ</span>
                                </div>
                                <div class="pricing-details">
                                    <div class="pricing-detail-row"><span>Thời hạn:</span><span class="value">1 Năm</span>
                                    </div>
                                    <div class="pricing-detail-row"><span>Phân loại:</span><span class="value">AI</span>
                                    </div>
                                    <div class="pricing-detail-row"><span>Giá bản gốc:</span><span class="value"
                                            style="text-decoration: line-through;">43.000.000đ</span></div>
                                </div>
                                <div class="pricing-footer">
                                    <span class="green-status"><span class="green-dot"></span> Đặt hàng ngay</span>
                                    <span class="pricing-savings">Tiết kiệm 43.000.000đ vào chi phí AhKi.io!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="center-btn-wrap">
                    <button class="btn-outline-pill">
                        Bảng giá AI tools
                        <i data-lucide="arrow-right" class="icon-sm arrow-move"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Hành Trình Sáng Tạo (Creative Journey) -->
        <section class="section-padding section-bg-alt">
            <div class="max-w-7xl">
                <h2 class="section-title" data-aos="fade-up">Hành Trình Sáng Tạo</h2>
                <div class="row g-4">
                    <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="0">
                        <div class="journey-card journey-card-yellow">
                            <img src="https://images.unsplash.com/photo-1549490349-8643362247b5?q=80&w=1000"
                                alt="Họa Sĩ Điện">
                            <div class="yellow-overlay"></div>
                            <div class="journey-card-overlay"></div>
                            <div class="journey-content-bottom">
                                <h3 class="journey-title-yellow">Hỏa Sĩ Điện</h3>
                                <p class="journey-subtitle-yellow">NGƯỜI THỔI HỒN CHO NÉT VẼ AI</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="journey-card journey-card-red">
                            <img src="https://images.unsplash.com/photo-1520113412646-044afba8fbce?q=80&w=1000"
                                alt="Kiếp Nạn Đồng Bọn Tội" style="opacity: 0.7;">
                            <div class="journey-overlay-red"></div>
                            <div class="journey-content-left">
                                <div class="red-text-stack">
                                    <span class="red-text-white">Kiếp</span>
                                    <span class="red-text-white" style="margin-left: 16px;">Nạn</span>
                                    <span class="red-text-gradient" style="margin-left: 32px;">Đồng</span>
                                    <span class="red-text-gradient" style="margin-left: 48px;">Bọn Tội</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="center-btn-wrap" style="position: relative;">
                    <button class="btn-outline-pill" style="padding: 12px 32px; font-size: 16px;">
                        Khám Phá
                        <i data-lucide="arrow-right" class="icon-md arrow-move"></i>
                    </button>
                    <div class="floating-chat" style="right: 16px;">
                        <div class="floating-chat-avatar"
                            style="background-image: url('https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&q=80')">
                        </div>
                        <span class="floating-chat-text">Trực tuyến</span>
                        <div class="floating-chat-badge">1</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tham Gia Cộng Đồng (Community) -->
        <section class="section-padding">
            <div class="max-w-7xl">
                <h2 class="section-title" data-aos="fade-up">Tham Gia Cộng Đồng</h2>
                <div class="row g-4">
                    <!-- Website -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                        <div class="community-card">
                            <h3>Website</h3>
                            <p class="community-subtitle">Tổng hợp các bài viết chia sẻ kiến thức, kinh nghiệm ứng dụng AI
                                vào hệ thống sinh thái AhKi.io cung cấp.</p>
                            <ul class="community-list">
                                <li><i data-lucide="check-circle-2"></i><span>Không mất phí tham gia.</span></li>
                                <li><i data-lucide="check-circle-2"></i><span>Cập nhật ưu đãi mới nhất tại AhKi.io</span>
                                </li>
                                <li><i data-lucide="check-circle-2"></i><span>Định vị AI Creator thị trường phân phối AI
                                        Tools</span></li>
                                <li><i data-lucide="check-circle-2"></i><span>Tổng hợp thông tin hữu ích về AI</span></li>
                            </ul>
                            <button class="community-btn community-btn-default">
                                <i data-lucide="arrow-right" class="icon-sm"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Facebook -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="community-card">
                            <h3>Facebook</h3>
                            <p class="community-subtitle">Cộng đồng những nhà sáng tạo AhKi.io trên Facebook, chia sẻ kiến
                                thức, kinh nghiệm và những tin tức sáng tạo liên quan đến AI.</p>
                            <ul class="community-list">
                                <li><i data-lucide="check-circle-2"></i><span>Cuộc thi/sự kiện liên quan đến AI có giải
                                        thưởng</span></li>
                                <li><i data-lucide="check-circle-2"></i><span>Cập nhật ưu đãi mới nhất tại AhKi.io</span>
                                </li>
                                <li><i data-lucide="check-circle-2"></i><span>Định vị tạo lập tin tức AI nhanh chóng</span>
                                </li>
                                <li><i data-lucide="check-circle-2"></i><span>Tổng hợp thông tin hữu ích về AI</span></li>
                                <li><i data-lucide="check-circle-2"></i><span>Chia sẻ kiến thức và kinh nghiệm cùng người
                                        dùng khác</span></li>
                            </ul>
                            <button class="community-btn community-btn-yellow">
                                <i data-lucide="plus" class="icon-md"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Zalo -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="community-card">
                            <h3>Nhóm Zalo</h3>
                            <p class="community-subtitle">Cộng đồng nhà sáng tạo AhKi.io trên Zalo, không gian chia sẻ kiến
                                thức, kinh nghiệm ứng dụng AI.</p>
                            <ul class="community-list">
                                <li><i data-lucide="check-circle-2"></i><span>Cuộc thi/sự kiện liên quan đến AI có giải
                                        thưởng</span></li>
                                <li><i data-lucide="check-circle-2"></i><span>Cập nhật ưu đãi mới nhất tại AhKi.io</span>
                                </li>
                                <li><i data-lucide="check-circle-2"></i><span>Định vị tạo lập tin tức AI nhanh chóng</span>
                                </li>
                                <li><i data-lucide="check-circle-2"></i><span>Tổng hợp thông tin hữu ích về AI</span></li>
                                <li><i data-lucide="check-circle-2"></i><span>Chia sẻ kiến thức và kinh nghiệm cùng người
                                        dùng khác</span></li>
                            </ul>
                            <button class="community-btn community-btn-default">
                                <i data-lucide="arrow-right" class="icon-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Đối Tác Sáng Tạo (Partners) -->
        <section class="section-padding partners-section"
            style="background-color: var(--bg-section); border-top: 1px solid var(--border-color);">
            <div class="partners-glow"></div>
            <div class="max-w-7xl" style="position: relative; z-index: 10;">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title" style="margin-bottom: 16px;">Đối Tác Sáng Tạo</h2>
                    <p class="section-subtitle">
                        Xây Dựng Hệ Tự Động Hóa Thực Tế Với Các Đối Tác<br>
                        Hãy lấy cảm hứng từ những nhà sáng tạo xuất sắc của chúng tôi!
                    </p>
                </div>

                <div class="d-flex flex-column align-items-center" data-aos="fade-up">
                    <div class="partners-display">
                        <div class="partners-row">
                            <div class="partner-avatar"><img
                                    src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=100&q=80"></div>
                            <div class="partner-avatar"><img
                                    src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?w=100&q=80"></div>

                            <div class="partner-main">
                                <img src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?w=300&q=80">
                                <div class="partner-tag">
                                    <span>MR. TUYẾN</span>
                                </div>
                            </div>

                            <div class="partner-avatar"><img
                                    src="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?w=100&q=80"></div>
                            <div class="partner-avatar"><img
                                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&q=80"></div>
                        </div>
                    </div>

                    <div class="partner-card">
                        <div style="flex: 1;">
                            <h3>Mr. Tuyến <span class="partner-badge">Creator</span></h3>
                            <p>AI Creator</p>
                        </div>
                        <div class="partner-card-right"></div>
                    </div>

                    <div class="dots-row">
                        <div class="dot-pagination"></div>
                        <div class="dot-pagination active"></div>
                        <div class="dot-pagination"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer-custom">
            <div class="max-w-7xl">
                <div class="row g-5 footer-grid">
                    <div class="col-12 col-md-6 col-lg-2">
                        <a href="#" class="brand-logo brand-logo-large">AhKi.io</a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <h4 class="footer-heading">HƯỚNG DẪN</h4>
                        <ul class="footer-list">
                            <li><a href="#">Thông tin</a></li>
                            <li><a href="#">Tin Tức</a></li>
                            <li><a href="#">Hướng dẫn</a></li>
                            <li><a href="#">Dự án &</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <h4 class="footer-heading">LIÊN HỆ</h4>
                        <ul class="footer-list">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Zalo</a></li>
                            <li><a href="mailto:support@ahki.io">support@ahki.io</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <h4 class="footer-heading">CHÍNH SÁCH</h4>
                        <ul class="footer-list">
                            <li><a href="#">Điều khoản & Điều lệ</a></li>
                            <li><a href="#">Chính sách bảo hành</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <h4 class="footer-heading">Nhận thông tin mới nhất từ AhKi.io</h4>
                        <div class="newsletter-input-wrap">
                            <input type="email" class="newsletter-input" placeholder="Nhập Email của bạn tại đây">
                            <button class="newsletter-btn">
                                <i data-lucide="arrow-right" class="icon-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>© 2024 AhKi.io. All rights reserved. | Bản quyền thuộc về AhKi.io.</p>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            // Initialize Lucide icons
            lucide.createIcons();

            // Initialize AOS animations
            AOS.init({
                duration: 600,
                easing: 'ease-out',
                once: true,
                offset: 100
            });

            // Tag button toggle
            document.querySelectorAll('.tag-btn').forEach(btn => {
                btn.addEventListener('click', function () {
                    document.querySelectorAll('.tag-btn').forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        </script>
    </body>

    </html>
@endsection

@push('scripts_bottom')
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
@endpush