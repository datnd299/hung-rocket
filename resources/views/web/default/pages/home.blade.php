@extends(getTemplate() . '.layouts.app')

@php

@endphp

@push('styles_top')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <link rel="stylesheet" href="/assets/home.css?v=1.0.2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{--
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/owl-carousel2/owl.carousel.min.css"> --}}

    <link rel="stylesheet" href="/assets/home-tw.css?v=1.0.3">
    <link rel="stylesheet" href="/assets/home.css?v=1.0.3">
    <style>
        :root {
            --gold: #C9A84C;
            --gold-light: #F0D080;
            --obsidian: #080808;
            --charcoal: #111111;
            --smoke: #1A1A1A;
            --ash: #888888;
            --white: #F5F0E8;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Be Vietnam Pro', sans-serif;
            background: var(--obsidian);
            color: var(--white);
            overflow-x: hidden;
            cursor: none;
        }

        /* CUSTOM CURSOR */
        #cursor {
            position: fixed;
            width: 10px;
            height: 10px;
            background: var(--gold);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: width .2s, height .2s, background .2s;
        }

        #cursor-ring {
            position: fixed;
            width: 40px;
            height: 40px;
            border: 1px solid var(--gold);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9998;
            transform: translate(-50%, -50%);
            transition: all .15s ease;
            opacity: .5;
        }

        body:hover #cursor {
            opacity: 1;
        }

        /* NAVBAR */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            padding: 1.2rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(to bottom, rgba(8, 8, 8, .9), transparent);
            backdrop-filter: blur(0px);
        }

        .nav-logo {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 1.5rem;
            letter-spacing: .15em;
            color: var(--gold);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            font-size: .75rem;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--ash);
            text-decoration: none;
            transition: color .3s;
        }

        .nav-links a:hover {
            color: var(--gold);
        }

        /* ======== SECTION 1 — HERO ======== */
        #hero {
            position: relative;
            height: 100vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        #bg-video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: .35;
            filter: saturate(.4) contrast(1.2);
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom,
                    rgba(8, 8, 8, .2) 0%,
                    rgba(8, 8, 8, .5) 60%,
                    rgba(8, 8, 8, 1) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 0 1rem;
        }

        .hero-eyebrow {
            font-family: 'Space Mono', monospace;
            font-size: .65rem;
            letter-spacing: .4em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 1.5rem;
            opacity: 0;
            transform: translateY(20px);
        }

        .hero-title {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: clamp(4rem, 14vw, 14rem);
            line-height: 1;
            letter-spacing: -.01em;
            background: linear-gradient(135deg, var(--white) 30%, var(--gold-light) 70%, var(--gold) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            opacity: 0;
            transform: translateY(40px);
        }

        .hero-sub {
            font-size: clamp(.8rem, 2vw, 1rem);
            letter-spacing: .15em;
            color: var(--ash);
            margin-top: 1.5rem;
            opacity: 0;
            transform: translateY(20px);
        }

        .btn-primary1 {
            display: inline-block;
            margin-top: 2.5rem;
            padding: .9rem 3rem;
            font-family: 'Space Mono', monospace;
            font-size: .75rem;
            letter-spacing: .25em;
            text-transform: uppercase;
            color: var(--obsidian);
            background: var(--gold);
            border: none;
            cursor: none;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(20px);
            transition: color .3s;
            text-decoration: none;
        }

        .btn-primary1::before {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--white);
            transform: translateX(-101%);
            transition: transform .4s cubic-bezier(.77, 0, .175, 1);
        }

        .btn-primary1:hover::before {
            transform: translateX(0);
        }

        .btn-primary1 span {
            position: relative;
            z-index: 1;
        }

        .btn-outline {
            display: inline-block;
            padding: .85rem 2.5rem;
            font-family: 'Space Mono', monospace;
            font-size: .7rem;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--gold);
            background: transparent;
            border: 1px solid var(--gold);
            cursor: none;
            position: relative;
            overflow: hidden;
            text-decoration: none;
            transition: color .3s;
        }

        .btn-outline::before {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--gold);
            transform: translateX(-101%);
            transition: transform .4s cubic-bezier(.77, 0, .175, 1);
        }

        .btn-outline:hover {
            color: var(--obsidian);
        }

        .btn-outline:hover::before {
            transform: translateX(0);
        }

        .btn-outline span {
            position: relative;
            z-index: 1;
        }

        /* SCROLL INDICATOR */
        .scroll-ind {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: .5rem;
            z-index: 2;
        }

        .scroll-ind span {
            font-family: 'Space Mono', monospace;
            font-size: .55rem;
            letter-spacing: .3em;
            color: var(--ash);
            text-transform: uppercase;
        }

        .scroll-line {
            width: 1px;
            height: 60px;
            background: linear-gradient(to bottom, var(--gold), transparent);
            animation: scrollPulse 2s ease infinite;
        }

        @keyframes scrollPulse {

            0%,
            100% {
                opacity: .3;
                transform: scaleY(1);
            }

            50% {
                opacity: 1;
                transform: scaleY(.6);
            }
        }

        /* ======== SECTION 2 — GALLERY ======== */
        /* ======== SECTION 2 — GALLERY ======== */
        #gallery {
            padding: 5rem 0;
            background: var(--obsidian);
        }

        .gallery-label {
            text-align: center;
            font-family: 'Space Mono', monospace;
            font-size: .65rem;
            letter-spacing: .4em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 3rem;
        }

        .gallery-row {
            overflow: hidden;
            margin-bottom: 1rem;
        }

        .gallery-strip {
            display: flex;
            flex-wrap: nowrap;
            gap: 1rem;
            width: max-content;
            will-change: transform;
        }

        .gallery-strip.left {
            animation: scrollLeft 30s linear infinite;
        }

        .gallery-strip.right {
            animation: scrollRight 30s linear infinite;
        }

        @keyframes scrollLeft {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        @keyframes scrollRight {
            from {
                transform: translateX(-50%);
            }

            to {
                transform: translateX(0);
            }
        }

        .gallery-row:hover .gallery-strip {
            animation-play-state: paused;
        }

        .img-card {
            width: 280px;
            height: 190px;
            flex-shrink: 0;
            overflow: hidden;
            position: relative;
        }

        @media(max-width: 640px) {
            .img-card {
                width: 200px;
                height: 140px;
            }
        }

        .img-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: saturate(.6) contrast(1.1);
            transition: filter .4s, transform .4s;
            display: block;
        }

        .img-card:hover img {
            filter: saturate(1.2) contrast(1);
            transform: scale(1.05);
        }

        .img-card::after {
            content: '';
            position: absolute;
            inset: 0;
            border: 1px solid rgba(201, 168, 76, .15);
            pointer-events: none;
        }

        /* ======== SECTION 3 — ABOUT ======== */
        #about {
            position: relative;
            min-height: 85vh;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        #about .about-bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: .25;
            filter: saturate(.3) contrast(1.3);
        }

        #about .about-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(105deg, rgba(8, 8, 8, .97) 40%, rgba(8, 8, 8, .6) 100%);
        }

        .about-content {
            position: relative;
            z-index: 2;
            max-width: 640px;
            padding: 4rem 2rem;
        }

        @media(min-width: 768px) {
            .about-content {
                padding: 6rem 5rem;
            }
        }

        .about-tag {
            font-family: 'Space Mono', monospace;
            font-size: .6rem;
            letter-spacing: .4em;
            color: var(--gold);
            text-transform: uppercase;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .about-tag::before {
            content: '';
            width: 40px;
            height: 1px;
            background: var(--gold);
            display: inline-block;
        }

        .about-heading {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: clamp(2.8rem, 7vw, 6rem);
            line-height: 1;
            letter-spacing: .02em;
            margin-bottom: 1.5rem;
            color: var(--white);
        }

        .about-text {
            font-size: .95rem;
            line-height: 1.8;
            color: var(--ash);
            margin-bottom: 2.5rem;
            font-weight: 400;
        }

        .about-stats {
            display: flex;
            gap: 3rem;
            margin-bottom: 2.5rem;
        }

        .stat-num {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 3rem;
            color: var(--gold);
            line-height: 1;
        }

        .stat-label {
            font-size: .65rem;
            letter-spacing: .15em;
            color: var(--ash);
            text-transform: uppercase;
            margin-top: .3rem;
        }

        /* ======== SECTION 4 — SERVICES ======== */
        #services {
            padding: 7rem 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(0, 0, 0, 0.5);
        }

        .sec-heading-wrap {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 4rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .sec-tag {
            font-family: 'Space Mono', monospace;
            font-size: .6rem;
            letter-spacing: .4em;
            color: var(--gold);
            text-transform: uppercase;
            margin-bottom: .8rem;
        }

        .sec-heading {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: clamp(3rem, 8vw, 7rem);
            line-height: 1;
            letter-spacing: .02em;
            color: var(--white);
        }

        .service-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 0;
        }

        @media(min-width: 768px) {
            .service-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .service-item {
            padding: 2.5rem 2rem;
            border-top: 1px solid rgba(201, 168, 76, .15);
            position: relative;
            overflow: hidden;
            cursor: none;
            transition: background .4s;
        }

        .service-item:last-child,
        .service-item:nth-last-child(-n+1) {
            border-bottom: 1px solid rgba(201, 168, 76, .15);
        }

        @media(min-width: 768px) {
            .service-item:nth-child(odd) {
                border-right: 1px solid rgba(201, 168, 76, .15);
            }
        }

        .service-item::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(201, 168, 76, .04);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .5s cubic-bezier(.77, 0, .175, 1);
        }

        .service-item:hover::before {
            transform: scaleX(1);
        }

        .service-num {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: .9rem;
            letter-spacing: .2em;
            color: var(--gold);
            margin-bottom: .8rem;
            opacity: .6;
        }

        .service-name {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-size: 1.1rem;
            font-weight: 800;
            letter-spacing: .05em;
            color: var(--white);
            margin-bottom: .8rem;
            text-transform: uppercase;
            transition: color .3s;
        }

        .service-item:hover .service-name {
            color: var(--gold);
        }

        .service-desc {
            font-size: .85rem;
            line-height: 1.75;
            color: white;
        }

        .service-arrow {
            position: absolute;
            right: 1.5rem;
            top: 50%;
            transform: translateY(-50%) translateX(20px);
            opacity: 0;
            transition: opacity .3s, transform .3s;
            font-size: 1.2rem;
            color: var(--gold);
        }

        .service-item:hover .service-arrow {
            opacity: 1;
            transform: translateY(-50%) translateX(0);
        }

        /* ======== SECTION 5 — STACKED CARDS ======== */
        #projects {
            padding: 5rem 1.5rem 0;
            background: var(--obsidian);
        }

        .projects-header {
            max-width: 1200px;
            margin: 0 auto 3rem;
        }

        .sticky-stack {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            padding-bottom: 3rem;
        }

        .stack-card {
            position: sticky;
            top: 80px;
            height: auto;
            min-height: 480px;
            border-radius: 2px;
            overflow: hidden;
            margin-bottom: 1.5rem;
            will-change: transform;
            box-shadow: 0 30px 80px rgba(0, 0, 0, .8);
        }

        @media(max-width: 640px) {
            .stack-card {
                min-height: 360px;
                top: 70px;
            }
        }

        /* 3-photo grid inside each project card */
        .card-img-grid {
            display: grid;
            grid-template-columns: 1.6fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 3px;
            height: 340px;
            background: #000;
        }

        @media(max-width: 640px) {
            .card-img-grid {
                height: 240px;
            }
        }

        .card-img-grid .ci {
            overflow: hidden;
            position: relative;
        }

        .card-img-grid .ci:first-child {
            grid-row: 1 / 3;
            /* ảnh lớn bên trái, chiếm 2 hàng */
        }

        .card-img-grid .ci img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .6s ease, filter .4s;
            filter: saturate(.7);
            display: block;
        }

        .stack-card:hover .card-img-grid .ci img {
            transform: scale(1.06);
            filter: saturate(1);
        }

        /* subtle dark vignette on main image */
        .card-img-grid .ci:first-child::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(8, 8, 8, .6) 0%, transparent 50%);
            pointer-events: none;
        }

        .card-body {
            background: var(--smoke);
            padding: 1.8rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
            border-top: 1px solid rgba(201, 168, 76, .2);
        }

        .card-meta {}

        .card-index {
            font-family: 'Space Mono', monospace;
            font-size: .6rem;
            letter-spacing: .3em;
            color: var(--gold);
            margin-bottom: .4rem;
            opacity: .7;
        }

        .card-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.8rem;
            letter-spacing: .05em;
            color: var(--white);
            line-height: 1;
        }

        @media(max-width: 640px) {
            .card-title {
                font-size: 1.4rem;
            }
        }

        /* FOOTER */
        footer {
            background: var(--charcoal);
            padding: 3rem 2rem;
            text-align: center;
            border-top: 1px solid rgba(201, 168, 76, .1);
        }

        .footer-logo {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 2.5rem;
            letter-spacing: .2em;
            color: var(--gold);
            margin-bottom: .8rem;
        }

        .footer-sub {
            font-size: .7rem;
            letter-spacing: .2em;
            color: var(--ash);
            text-transform: uppercase;
        }


        /* mobile nav hide */
        @media(max-width: 640px) {
            .nav-links {
                display: none;
            }
        }

        /* section divider */
        .divider {
            width: 100%;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--gold), transparent);
            opacity: .2;
            margin: 0 auto;
        }

        /* ======== SECTION COURSES ======== */
        #courses {
            padding: 7rem 1.5rem;
            background: var(--charcoal);
            position: relative;
            overflow: hidden;
        }

        #courses::before {
            content: 'ƯU ĐÃI';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(8rem, 20vw, 18rem);
            color: rgba(201, 168, 76, .04);
            white-space: nowrap;
            pointer-events: none;
            letter-spacing: .1em;
            line-height: 1;
        }

        .courses-inner {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }

        .courses-header {
            margin-bottom: 4rem;
        }

        .course-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        @media(min-width: 768px) {
            .course-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .course-card {
            position: relative;
            background: var(--smoke);
            overflow: hidden;
            cursor: none;
            border: 1px solid rgba(201, 168, 76, .1);
            transition: border-color .4s, transform .4s;
        }

        .course-card:hover {
            border-color: rgba(201, 168, 76, .5);
            transform: translateY(-6px);
        }

        .course-thumb {
            position: relative;
            width: 100%;
            aspect-ratio: 16/10;
            overflow: hidden;
        }

        .course-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: saturate(.65) contrast(1.1);
            transition: transform .6s ease, filter .4s;
            display: block;
        }

        .course-card:hover .course-thumb img {
            transform: scale(1.07);
            filter: saturate(1) contrast(1);
        }

        .course-thumb-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(8, 8, 8, .85) 0%, transparent 55%);
        }

        /* badge trên ảnh */
        .course-badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            font-family: 'Space Mono', monospace;
            font-size: .55rem;
            letter-spacing: .25em;
            text-transform: uppercase;
            padding: .35rem .8rem;
            background: var(--gold);
            color: var(--obsidian);
            font-weight: 700;
            z-index: 2;
        }

        .course-body {
            padding: 1.5rem 1.6rem 2rem;
        }

        .course-name {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-size: 1.05rem;
            font-weight: 800;
            color: var(--white);
            line-height: 1.35;
            margin-bottom: .6rem;
            transition: color .3s;
        }

        .course-card:hover .course-name {
            color: var(--gold-light);
        }

        .course-desc {
            font-size: .8rem;
            line-height: 1.7;
            color: var(--ash);
            margin-bottom: 1.4rem;
        }

        .course-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .course-price-wrap {}

        .course-price-old {
            font-family: 'Space Mono', monospace;
            font-size: .65rem;
            color: #555;
            text-decoration: line-through;
            letter-spacing: .05em;
            display: block;
            margin-bottom: .15rem;
        }

        .course-price {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2rem;
            color: var(--gold);
            letter-spacing: .05em;
            line-height: 1;
        }

        .course-price span {
            font-family: 'Space Mono', monospace;
            font-size: .7rem;
            color: var(--ash);
            margin-left: .2rem;
            letter-spacing: .05em;
        }

        .course-enroll {
            display: inline-block;
            padding: .65rem 1.4rem;
            font-family: 'Space Mono', monospace;
            font-size: .65rem;
            letter-spacing: .15em;
            text-transform: uppercase;
            color: var(--obsidian);
            background: var(--gold);
            border: none;
            cursor: none;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            transition: color .3s;
            white-space: nowrap;
        }

        .course-enroll::before {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--white);
            transform: translateX(-101%);
            transition: transform .35s cubic-bezier(.77, 0, .175, 1);
        }

        .course-enroll:hover::before {
            transform: translateX(0);
        }

        .course-enroll em {
            position: relative;
            z-index: 1;
            font-style: normal;
        }

        /* divider line under price */
        .course-body-divider {
            width: 100%;
            height: 1px;
            background: rgba(201, 168, 76, .12);
            margin-bottom: 1.4rem;
        }

        @media (max-width: 991px) {
            .navbar .navbar-toggle-content {
                height: 100vh;
                width: 100vw;
                top: 110vh;
            }
        }

        @media (max-width: 991px) {
            .navbar .navbar-toggle-content.show {
                top: 0;
            }
        }
    </style>
@endpush

@section('content')
    <div id="cursor"></div>
    <div id="cursor-ring"></div>
    <div class="intro-loader" id="introLoader">
        <div class="intro-grid"></div>
        <div class="intro-backdrop"></div>
        <div class="intro-ring"></div>
        <div class="intro-ring intro-ring-2"></div>
        <div class="intro-logo-wrap">
            <div class="intro-logo-icon">
                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" fill="none">
                    <defs>
                        <linearGradient id="logoGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#fbcb1c" />
                            <stop offset="100%" stop-color="#ffffff" />
                        </linearGradient>
                    </defs>
                    <circle cx="50" cy="50" r="45" stroke="url(#logoGrad)" stroke-width="2" stroke-dasharray="4 8"
                        opacity="0.6">
                        <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="4s"
                            repeatCount="indefinite" />
                    </circle>
                    <path d="M50 15 L60 40 L85 50 L60 60 L50 85 L40 60 L15 50 L40 40 Z" fill="url(#logoGrad)" />
                    <circle cx="50" cy="50" r="6" fill="#050505" />
                </svg>
            </div>
            <div class="intro-logo-text">
                HUNG<span style="color: #fbcb1c; -webkit-text-fill-color: #fbcb1c;">AI</span>CREATIVE
                <span class="intro-scan"></span>
            </div>
        </div>

        <div class="intro-particle" style="...; animation-delay: 0.6s;"></div> <!-- 1.2s → 0.6s -->
        <div class="intro-particle" style="...; animation-delay: 0.625s;"></div> <!-- 1.25s -->
        <div class="intro-particle" style="...; animation-delay: 0.65s;"></div>
        <div class="intro-particle" style="...; animation-delay: 0.675s;"></div>
        <div class="intro-particle" style="...; animation-delay: 0.7s;"></div>
        <div class="intro-particle" style="...; animation-delay: 0.725s;"></div>
        <div class="intro-particle" style="...; animation-delay: 0.75s;"></div>
        <div class="intro-particle" style="...; animation-delay: 0.775s;"></div>
        <div class="intro-particle" style="...; animation-delay: 0.8s;"></div>
        <div class="intro-particle" style="...; animation-delay: 0.825s;"></div>
        <div class="intro-particle" style="...; animation-delay: 0.85s;"></div>
        <div class="intro-particle" style="...; animation-delay: 0.875s;"></div>

        <div class="intro-loading-bar"></div>
        <div class="intro-loading-text">LOADING EXPERIENCE</div>

        <div class="intro-curtain intro-curtain-left"></div>
        <div class="intro-curtain intro-curtain-right"></div>
    </div>
    <main id="mainContent" class="overflow-x-hidden">
        <video class="fixed top-0 left-0 w-full h-full object-cover -z-10" src="/assets/public/FGF.mp4" autoplay loop muted
            playsinline></video>

        <section id="hero">
            <div class="hero-overlay"></div>

            <div class="hero-content">
                <p class="hero-eyebrow">HUNG AI CREATIVE x COLOR MIND — EST. 2020</p>
                <h1 class="hero-title">SÁNG TẠO<br />KHÔNG<br />GIỚI HẠN</h1>
                <p class="hero-sub">Ứng dụng AI vào điện ảnh · Đào tạo · Doanh nghiệp</p>
                <a href="/classes" class="btn-primary1"><span>Học Ngay →</span></a>
            </div>

            <div class="scroll-ind">
                <span>Scroll</span>
                <div class="scroll-line"></div>
            </div>
        </section>
        @php
            $row1Original = [
                [
                    'src' => '/assets/public/a1.jpg',
                    'link' => 'https://vov.vn/xa-hoi/mat-thay-tai-nghe-chua-chac-la-that-canh-bao-bay-lua-dao-deepfake-dip-tet-post1265271.vov'
                ],
                [
                    'src' => '/assets/public/a2.jpg',
                    'link' => 'https://web.facebook.com/share/v/18AzKqkvRu/'
                ],
                [
                    'src' => '/assets/public/a3.jpg',
                    'link' => 'https://www.youtube.com/watch?v=zcYhOb8J_nI'
                ],
                [
                    'src' => '/assets/public/a4.jpg',
                    'link' => 'https://web.facebook.com/share/p/1CRjxdM7DU/'
                ],
                [
                    'src' => '/assets/public/a5.png',
                    'link' => 'https://www.youtube.com/watch?v=CEnmcdc6pQA&t=8s'
                ]
            ];

            $row2Original = [
                [
                    'src' => '/assets/public/b1.jpeg',
                    'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7604333787417382164?is_from_webapp=1&sender_device=pc&web_id=7390783194650838546'
                ],
                [
                    'src' => '/assets/public/b2.png',
                    'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7596681714534059284?is_from_webapp=1&sender_device=pc&web_id=7390783194650838546'
                ],
                [
                    'src' => '/assets/public/b3.jpeg',
                    'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7554756780484545810?is_from_webapp=1&sender_device=pc&web_id=7390783194650838546'
                ],
                [
                    'src' => '/assets/public/b4.jpeg',
                    'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7550693855754997010?is_from_webapp=1&sender_device=pc&web_id=7390783194650838546'
                ],
                [
                    'src' => '/assets/public/b5.jpeg',
                    'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7595226945818758420?is_from_webapp=1&sender_device=pc&web_id=7390783194650838546'
                ]
            ];
        @endphp

        <!-- ====== SECTION 2: GALLERY ====== -->
        <section id="gallery">
            <p class="gallery-label">— Dự án được vinh danh —</p>

            <!-- Row 1: scroll left -->
            <div class="gallery-row" id="row1">
                <div class="gallery-strip left" id="track1">
                    @foreach ([...$row1Original, ...$row1Original] as $item)
                        <div class="img-card">
                            <a href="{{ $item['link'] }}" target="_blank" rel="noopener noreferrer">
                                <img src="{{ $item['src'] }}" alt="" />
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Row 2: scroll right -->
            <div class="gallery-row" id="row2">
                <div class="gallery-strip right" id="track2">
                    @foreach ([...$row2Original, ...$row2Original] as $item)
                        <div class="img-card">
                            <a href="{{ $item['link'] }}" target="_blank" rel="noopener noreferrer">
                                <img src="{{ $item['src'] }}" alt="" />
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @php
            $courses = [
                [
                    'title' => 'LÀM PHIM AI CƠ BẢN - AI FILM MAKING BASIC',
                    'desc' => 'Làm chủ toàn bộ quy trình sản xuất phim AI: từ kịch bản, tạo hình nhân vật đến render cảnh quay điện ảnh chất lượng cao.',
                    'old_price' => '1.880.000₫',
                    'new_price' => '880.000₫',
                    'badge' => 'Hot 🔥',
                    'thumb' => 'https://hungaicreative.com/store/1016/freepik__to-1-thumbnail-kha-hc-lm-phim-ai-c-bnsiu-ngu-v-n-t__33825.png',
                    'link' => 'https://hungaicreative.com/course/asdfasdf-Copy-Copy'
                ],
                [
                    'title' => 'BẬC THẦY TẠO NHẠC AI - AI MUSIC MASTERC',
                    'desc' => 'Từ người mới bắt đầu đến chuyên gia: Khám phá cách tạo nhạc AI độc đáo, từ giai điệu đơn giản đến bản phối phức tạp, mở ra thế giới âm nhạc không giới hạn.',
                    'old_price' => '1.000.000₫',
                    'new_price' => '380.000₫',
                    'badge' => 'Bán Chạy',
                    'thumb' => 'https://hungaicreative.com/store/1016/freepik__to-1-thumbnail-kha-hc-bc-thy-to-nhc-ai-ai-music-ma__35309.png',
                    'link' => 'https://hungaicreative.com/course/asdfasdf'
                ],
                [
                    'title' => 'KHÓA HỌC LÀM PHIM NÂNG CAO - AI FILM MAKING PRO',
                    'desc' => 'Nâng tầm kỹ năng làm phim AI của bạn với khóa học chuyên sâu, bao gồm kỹ thuật tạo hình nhân vật, dựng cảnh phức tạp và tối ưu hóa quy trình sản xuất để đạt chất lượng điện ảnh đỉnh cao.',
                    'old_price' => '2.000.000₫',
                    'new_price' => '980.000₫',
                    'badge' => 'Mới Ra',
                    'thumb' => 'https://hungaicreative.com/store/1016/freepik__xa-ch-hng-ai-creative__96679.jpg',
                    'link' => 'https://hungaicreative.com/course/AI-FILM-MAKING-ADVANCE'
                ]
            ];
        @endphp

        <div class="divider"></div>
        <section id="courses">
            <div class="courses-inner">

                <div class="courses-header">
                    <p class="sec-tag">— Đăng ký ngay hôm nay</p>
                    <h2 class="sec-heading">Ưu Đãi<br />Hiện Hành</h2>
                </div>

                <div class="course-grid">
                    @foreach ($courses as $course)
                        <div class="course-card">
                            <div class="course-thumb">
                                <span class="course-badge">{{ $course['badge'] }}</span>
                                <img src="{{ $course['thumb'] }}" alt="{{ $course['title'] }}" />
                                <div class="course-thumb-overlay"></div>
                            </div>
                            <div class="course-body">
                                <div class="course-name">{{ $course['title'] }}</div>
                                <p class="course-desc">{{ $course['desc'] }}</p>
                                <div class="course-body-divider"></div>
                                <div class="course-footer">
                                    <div class="course-price-wrap">
                                        <s class="course-price-old">{{ $course['old_price'] }}</s>
                                        <div class="course-price">{{ $course['new_price'] }}<span>₫</span></div>
                                    </div>
                                    <a href="{{ $course['link'] }}" class="course-enroll"><em>Đăng ký →</em></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Khóa 1 -->


                </div>
            </div>
        </section>

        <div class="divider"></div>

        <!-- ====== SECTION 3: ABOUT ====== -->
        <section id="about">
            <img class="about-bg" src="/assets/public/ad2.jpg" alt="AI background" />
            <div class="about-overlay"></div>

            <div class="about-content">
                <div class="about-tag">Về chúng tôi</div>
                <h2 class="about-heading">4 Năm<br />Kinh Nghiệm</h2>
                <p class="about-text">
                    Ứng dụng AI vào các sản phẩm thực tế, các quy trình tự động hóa doanh nghiệp, đặc biệt là thế mạnh về AI
                    trong sản xuất sản phẩm điện ảnh. Chúng tôi kết hợp công nghệ tiên tiến với tư duy sáng tạo để tạo ra
                    những sản phẩm vượt tầm mong đợi.
                </p>
                <div class="about-stats">
                    <div>
                        <div class="stat-num">4+</div>
                        <div class="stat-label">Năm kinh nghiệm</div>
                    </div>
                    <div>
                        <div class="stat-num">200+</div>
                        <div class="stat-label">Dự án hoàn thành</div>
                    </div>
                    <div>
                        <div class="stat-num">50+</div>
                        <div class="stat-label">Đối tác tin tưởng</div>
                    </div>
                </div>
                <a href="mailto:contact@aistudio.vn" class="btn-outline"><span>Liên hệ tôi →</span></a>
            </div>
        </section>

        <div class="divider"></div>

        <!-- ====== SECTION 4: SERVICES ====== -->
        <section id="services">
            <div class="sec-heading-wrap">
                <div>
                    <p class="sec-tag">— Những gì chúng tôi làm</p>
                    <h2 class="sec-heading">Dịch Vụ</h2>
                </div>
                <p style="color:white;font-size:.85rem;max-width:300px;line-height:1.7">
                    Chúng tôi cung cấp giải pháp AI toàn diện từ sản xuất nội dung đến vận hành doanh nghiệp.
                </p>
            </div>

            <div class="service-grid">
                <div class="service-item">
                    <div class="service-num">01</div>
                    <div class="service-name">AI Trong Điện Ảnh</div>
                    <p class="service-desc">Sản xuất các sản phẩm phim AI điện ảnh, phim giới thiệu doanh nghiệp, kể câu
                        truyện về doanh nhân và bất cứ ai.</p>
                    <span class="service-arrow">→</span>
                </div>
                <div class="service-item">
                    <div class="service-num">02</div>
                    <div class="service-name">Đào Tạo AI</div>
                    <p class="service-desc">Đào tạo tay nghề thực chiến tạo các sản phẩm AI chất lượng cao đầu ra đáp ứng
                        yêu cầu của các khách hàng khó tính.</p>
                    <span class="service-arrow">→</span>
                </div>
                <div class="service-item">
                    <div class="service-num">03</div>
                    <div class="service-name">Tư Vấn Doanh Nghiệp</div>
                    <p class="service-desc">Hãy nêu ra các khó khăn trong khâu vận hành, chúng tôi sẽ đồng hành xây dựng ứng
                        dụng và áp dụng AI trong quy trình hoạt động để tối ưu chi phí và tiết kiệm thời gian.</p>
                    <span class="service-arrow">→</span>
                </div>
                <div class="service-item">
                    <div class="service-num">04</div>
                    <div class="service-name">Livestream AI Thời Gian Thực</div>
                    <p class="service-desc">Chúng tôi cung cấp giải pháp giúp các KOL, KOC tạo ra một phiên bản AI của chính
                        mình có thể tương tác với khách hàng thời gian thực 24/24 không mệt mỏi.</p>
                    <span class="service-arrow">→</span>
                </div>
                <div class="service-item" style="grid-column: 1 / -1; border-bottom: 1px solid rgba(201,168,76,.15)">
                    <div class="service-num">05</div>
                    <div class="service-name">AI Quảng Cáo – Tiếp Thị</div>
                    <p class="service-desc">Chúng tôi cung cấp các gói TVC cho doanh nghiệp và các nhãn hàng đồng thời đào
                        tạo về quy trình sử dụng mẫu ảo AI trong tiếp thị liên kết.</p>
                    <span class="service-arrow">→</span>
                </div>
            </div>
        </section>
        @php
            $projects = [
                [
                    'num' => '01',
                    'category' => 'projectCategory1',
                    'name' => 'KỲ TÀI ĐẠI VIỆT',
                    'images' => [
                        'col1_1' => '/assets/public/j1.jpg',
                        'col1_2' => '/assets/public/j2.jpg',
                        'col2' => '/assets/public/j3.jpg',
                    ],
                    'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7617132436182322439?is_from_webapp=1&sender_device=pc&web_id=7390783194650838546',
                ],
                [
                    'num' => '02',
                    'category' => 'projectCategory2',
                    'name' => 'TỄU',
                    'images' => [
                        'col1_1' => '/assets/public/H (1).jpg',
                        'col1_2' => '/assets/public/H (2).jpg',
                        'col2' => '/assets/public/H (3).jpg',
                    ],
                    'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7633057278618291474?is_from_webapp=1&sender_device=pc&web_id=7390783194650838546',
                ],
                [
                    'num' => '03',
                    'category' => 'projectCategory3',
                    'name' => 'YÊU TỔ QUỐC TRONG TIM LẶNG THẦM',
                    'images' => [
                        'col1_1' => '/assets/public/P1.jpg',
                        'col1_2' => '/assets/public/P2.png',
                        'col2' => '/assets/public/P3.png',
                    ],
                    'link' => 'https://www.youtube.com/watch?v=6iP8jMQ85y0',
                ],
                [
                    'num' => '04',
                    'category' => 'projectCategory4',
                    'name' => 'ZORO x SASUKE',
                    'images' => [
                        'col1_1' => '/assets/public/gh1.png',
                        'col1_2' => '/assets/public/gh2.jpg',
                        'col2' => '/assets/public/gh3.png',
                    ],
                    'link' => 'https://www.youtube.com/watch?v=gkZKdf3ft3k&t=24s',
                ],
                [
                    'num' => '05',
                    'category' => 'projectCategory5',
                    'name' => 'TÁI TẠO DEEPFAKE NGHỆ SĨ TRẦN LẬP',
                    'images' => [
                        'col1_1' => '/assets/public/ft (1).webp',
                        'col1_2' => '/assets/public/ft (2).webp',
                        'col2' => '/assets/public/ft (3).webp',
                    ],
                    'link' => 'https://www.tiktok.com/@buctuong.official/video/7488175965206629687?is_from_webapp=1&sender_device=pc&web_id=7390783194650838546',
                ],
            ];
        @endphp
        <!-- ====== SECTION 5: STACKED CARDS ====== -->
        <section id="projects" style="padding-top:6rem">
            <div class="projects-header">
                <p class="sec-tag">— Portfolio</p>
                <h2 class="sec-heading">Dự Án</h2>
            </div>

            <div class="sticky-stack">
                @foreach ($projects as $project)
                    <div class="stack-card" style="background:#0e0e0e">
                        <div class="card-img-grid">
                            <div class="ci"><img src="{{ $project['images']['col1_1'] }}" alt="" /></div>
                            <div class="ci"><img src="{{ $project['images']['col1_2'] }}" alt="" /></div>
                            <div class="ci"><img src="{{ $project['images']['col2'] }}" alt="" /></div>
                        </div>
                        <div class="card-body">
                            <div class="card-meta">
                                <div class="card-index">{{ $project['num'] }}</div>
                                <div class="card-title">{{ $project['name'] }}</div>
                            </div>
                            <a href="{{ $project['link'] }}" class="btn-outline" style="white-space:nowrap"
                                target="_blank"><span>Xem chi tiết</span></a>
                        </div>
                    </div>
                @endforeach

            </div>
    </main>

    {{-- ===== SCROLL REVEAL OBSERVER SCRIPT ===== --}}
    <script>
        function runIntro() {
            document.body.classList.add('intro-active');
            const introLoader = document.getElementById('introLoader');
            const mainContent = document.getElementById('mainContent');

            // Reset
            introLoader.classList.remove('intro-done');
            mainContent.classList.remove('content-revealed');
            introLoader.style.transition = '';

            // Force reflow để restart animations
            void introLoader.offsetWidth;

            // Reveal content khi curtain mở
            setTimeout(() => mainContent.classList.add('content-revealed'), 1350);

            // Hide intro hoàn toàn
            setTimeout(() => {
                introLoader.classList.add('intro-done');
                document.body.classList.remove('intro-active');
            }, 1800);
        }

        runIntro();
    </script>
    <script>
        // GSAP + ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // --- CURSOR ---
        const cursor = document.getElementById('cursor');
        const ring = document.getElementById('cursor-ring');
        let mx = 0, my = 0, rx = 0, ry = 0;

        document.addEventListener('mousemove', e => {
            mx = e.clientX; my = e.clientY;
            cursor.style.left = mx + 'px';
            cursor.style.top = my + 'px';
        });

        function animRing() {
            rx += (mx - rx) * 0.12;
            ry += (my - ry) * 0.12;
            ring.style.left = rx + 'px';
            ring.style.top = ry + 'px';
            requestAnimationFrame(animRing);
        }
        animRing();

        document.querySelectorAll('a, button, .service-item, .stack-card').forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursor.style.width = '20px';
                cursor.style.height = '20px';
                ring.style.width = '60px';
                ring.style.height = '60px';
                ring.style.opacity = '1';
            });
            el.addEventListener('mouseleave', () => {
                cursor.style.width = '10px';
                cursor.style.height = '10px';
                ring.style.width = '40px';
                ring.style.height = '40px';
                ring.style.opacity = '.5';
            });
        });

        // Hide cursor on mobile
        if ('ontouchstart' in window) {
            cursor.style.display = 'none';
            ring.style.display = 'none';
            document.body.style.cursor = 'auto';
        }

        // --- HERO ANIMATIONS ---
        const tl = gsap.timeline({ delay: .3 });
        tl.to('.hero-eyebrow', { opacity: 1, y: 0, duration: .8, ease: 'power3.out' })
            .to('.hero-title', { opacity: 1, y: 0, duration: 1, ease: 'power3.out' }, '-=.4')
            .to('.hero-sub', { opacity: 1, y: 0, duration: .8, ease: 'power3.out' }, '-=.5')
            .to('.btn-primary1', { opacity: 1, y: 0, duration: .6, ease: 'power3.out' }, '-=.4');

        // --- GALLERY AUTO-SCROLL ---

        // --- SCROLL ANIMATIONS ---
        // About section
        gsap.from('.about-tag, .about-heading, .about-text, .about-stats, .about-content .btn-outline', {
            scrollTrigger: { trigger: '#about', start: 'top 70%' },
            opacity: 0,
            y: 40,
            stagger: .12,
            duration: .9,
            ease: 'power3.out'
        });

        // Services
        gsap.from('.sec-heading-wrap > *', {
            scrollTrigger: { trigger: '#services', start: 'top 75%' },
            opacity: 0, y: 30, stagger: .1, duration: .7, ease: 'power3.out'
        });
        gsap.from('.service-item', {
            scrollTrigger: { trigger: '.service-grid', start: 'top 80%' },
            opacity: 0, y: 20, stagger: .08, duration: .6, ease: 'power3.out'
        });

        // Projects header
        gsap.from('.projects-header > *', {
            scrollTrigger: { trigger: '#projects', start: 'top 80%' },
            opacity: 0, y: 30, stagger: .1, duration: .7, ease: 'power3.out'
        });

        // Stacked cards scale effect
        document.querySelectorAll('.stack-card').forEach((card, i, all) => {
            gsap.to(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top top+=80',
                    end: 'bottom top+=80',
                    scrub: true,
                },
                scale: 1 - (all.length - i - 1) * 0.03,
                opacity: i < all.length - 1 ? .7 : 1,
                ease: 'none'
            });
        });

        // Navbar backdrop on scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.style.background = 'rgba(8,8,8,.95)';
                nav.style.backdropFilter = 'blur(10px)';
            } else {
                nav.style.background = 'linear-gradient(to bottom, rgba(8,8,8,.9), transparent)';
                nav.style.backdropFilter = 'blur(0px)';
            }
        });
    </script>
@endsection

@push('scripts_bottom')

    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>

    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
@endpush