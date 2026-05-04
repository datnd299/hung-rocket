@extends(getTemplate() . '.layouts.app')

@php
    $news = [
        [
            'img' => '/assets/home/1451839840638484493.jpg',
            'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7622659979786374418?is_from_webapp=1&web_id=7390783194650838546',
            'title' => 'Tiềm năng phát triển của AI trong thương mại điện tử',
            'desc' => 'Những cơ hội và thách thức của người mẫu AI trong ngành thương mại điện tử. Cùng xem chia sẻ của mình và những anh em làm nghề trên chương trình Cuộc sống số kênh VTV1',
            'date' => '28 tháng 4, 2026'
        ],
        [
            'img' => '/assets/home/4055357805047286866.jpg',
            'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7619337517392825601?is_from_webapp=1&web_id=7390783194650838546',
            'title' => 'Tiểm năng phim lịch sử Việt Nam nhờ công nghệ AI',
            'desc' => 'Series Kỳ tài Đại Việt đã được giới thiệu trên VTV, mình muốn thay đổi nhận thức mọi người về các nội dung từ AI, nếu nghiêm túc nghiên cứu, đầy đủ kĩ thuật AI và các kỹ thuật truyền thống thì hoàn toàn có thể tạo ra nội dung chất lượng, hi vọng trong hành trình tiếp theo được sự góp ý của mọi người để tạo ra các sản phẩm chất lượng hơn nữa',
            'date' => '28 tháng 4, 2026'
        ],
        [
            'img' => '/assets/home/3702513486554390110.jpg',
            'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7617132436182322439?is_from_webapp=1&web_id=7390783194650838546',
            'title' => 'Hai Bà Trưng - Kỳ tài Đại Việt đã lên sóng VTV!',
            'desc' => 'Tập 1 "Trưng Trắc - Trưng Nhị" mở đầu series "Kỳ tài Đại Việt". Sản phẩm Phim lịch sử AI được hoàn thành bởi đội ngũ Color Mind.',
            'date' => '28 tháng 4, 2026'
        ],
        [
            'img' => '/assets/home/2095479259908344158.jpg',
            'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7633057278618291474?is_from_webapp=1&web_id=7390783194650838546',
            'title' => 'Phim ngắn kinh dị "Tễu" ',
            'desc' => 'Một dự án collab giữa Vũ Duy Hưng (Colormind) và Mạnh Hồ (AZF Studio), kịch bản được cải biên từ một câu truyện dân gian về rối nước',
            'date' => '28 tháng 4, 2026'
        ]
    ];
    $tutorials = [
        [
            'img' => '/assets/home/2342091894727595683.jpg',
            'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7550693855754997010?is_from_webapp=1&web_id=7390783194650838546',
            'title' => 'Lập trình siêu dễ dàng với AI',
            'source' => 'Vibe Code'
        ],
        [
            'img' => '/assets/home/863830210835487379.jpg',
            'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7595226945818758420?is_from_webapp=1&sender_device=pc&web_id=7390783194650838546',
            'title' => 'Cuộc gọi Deepfake Realtime',
            'source' => 'Deepfake'
        ],
        [
            'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7554756780484545810?is_from_webapp=1&web_id=7390783194650838546',
            'img' => '/assets/home/2781776388507519137.jpg',
            'title' => 'Hướng dẫn Copy cử động',
            'source' => 'Video'
        ],
        [
            'link' => 'https://www.tiktok.com/@hung_ai_creative/video/7595226945818758420?is_from_webapp=1&sender_device=pc&web_id=7390783194650838546',
            'img' => '/assets/home/4557663950185781679.jpg',
            'title' => 'Workflow đồng bộ nhận Affiliate',
            'source' => 'Affiliate'
        ],
    ];
    $imgs = [
        [
            'src' => '/assets/home/848470293938957201.jpg',
        ],
        [
            'src' => '/assets/home/2095479259908344158.jpg',
        ],
        [
            'src' => '/assets/home/3044614876448037620.jpg',
        ],
        [
            'src' => '/assets/home/3702513486554390110.jpg',
        ]
    ]
@endphp

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/owl-carousel2/owl.carousel.min.css">

    <link rel="stylesheet" href="/assets/home.css?v=1.0.2">
@endpush

@section('content')
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
        {{-- ===== HERO SECTION ===== --}}
        <section class="relative h-screen overflow-hidden" id="scroll-video-section">
            <video id="scroll-video" class="absolute inset-0 w-full h-full object-cover" muted playsinline preload="auto"
                disablepictureinpicture disableremoteplayback>
                <source src="/assets/hero.mov" type="video/mp4; codecs=hvc1">
                <source src="/assets/hero.mp4" type="video/mp4">
            </video>

            {{-- Overlay tối --}}
            <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-black/40 to-black z-[1]"></div>

            {{-- Floating blobs --}}
            <div class="floating-blob blob-1 z-[2]"></div>
            <div class="floating-blob blob-2 z-[2]"></div>

            {{-- Nội dung --}}
            <div class="relative z-10 h-full flex items-center justify-center">
                <div class="text-center max-w-4xl px-6">
                    <h1 class="hero-title text-5xl md:text-7xl font-bold tracking-tight mb-6 font-heading">
                        Khám Phá Vô Vàn Khả Năng
                    </h1>
                    <p class="hero-subtitle text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
                        Tạo ra những khoảnh khắc đậm chất điện ảnh bằng công nghệ tạo video tiên tiến
                    </p>
                    <a href="/classes"
                        class="hero-button inline-flex items-center gap-2 px-8 py-3 rounded-full border border-white/30 bg-white/5 backdrop-blur-md hover:bg-white hover:text-black transition-all group font-semibold">
                        Khám Phá Ngay
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="group-hover:translate-x-1 transition-transform" aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Scroll indicator --}}
            <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 animate-bounce">
                <div class="w-6 h-10 border-2 border-white/30 rounded-full flex items-start justify-center p-1.5">
                    <div class="w-1 h-2 bg-white/60 rounded-full"></div>
                </div>
            </div>
        </section>
        <script>
            (function () {
                const video = document.getElementById('scroll-video');
                const section = document.getElementById('scroll-video-section');

                if (!video || !section) return;

                const INTRO_DURATION = 2; // giây
                let phase = 'waiting';    // 'waiting' → 'playing-intro' → 'scrubbing'
                let isReady = false;
                let targetTime = INTRO_DURATION;
                let currentTime = INTRO_DURATION;
                let savedScrollY = 0;

                // ===== Lock / Unlock scroll (cách mạnh hơn) =====
                const preventScroll = (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    return false;
                };

                const preventKeys = (e) => {
                    const blocked = ['ArrowDown', 'ArrowUp', 'PageDown', 'PageUp', 'Space', 'End', 'Home'];
                    if (blocked.includes(e.key) || e.keyCode === 32) {
                        e.preventDefault();
                        return false;
                    }
                };

                const lockScroll = () => {
                    savedScrollY = window.scrollY;
                    // Cách mạnh: fix body, chặn cả wheel/touch/key
                    document.body.style.position = 'fixed';
                    document.body.style.top = `-${savedScrollY}px`;
                    document.body.style.left = '0';
                    document.body.style.right = '0';
                    document.body.style.width = '100%';

                    window.addEventListener('wheel', preventScroll, { passive: false });
                    window.addEventListener('touchmove', preventScroll, { passive: false });
                    window.addEventListener('keydown', preventKeys, { passive: false });
                };

                const unlockScroll = () => {
                    document.body.style.position = '';
                    document.body.style.top = '';
                    document.body.style.left = '';
                    document.body.style.right = '';
                    document.body.style.width = '';
                    window.scrollTo(0, savedScrollY);

                    window.removeEventListener('wheel', preventScroll);
                    window.removeEventListener('touchmove', preventScroll);
                    window.removeEventListener('keydown', preventKeys);
                };

                // ===== Phase 1: Intro animation (dùng play thật) =====
                const playIntro = () => {
                    phase = 'playing-intro';
                    lockScroll();

                    video.currentTime = 0;
                    video.playbackRate = 2;
                    video.play().catch(() => {
                        // Nếu autoplay bị block (hiếm vì đã muted), fallback bằng seek
                        fallbackIntro();
                    });

                    // Theo dõi thời gian, pause khi đạt INTRO_DURATION
                    const checkTime = () => {
                        if (phase !== 'playing-intro') return;

                        if (video.currentTime >= INTRO_DURATION) {
                            video.pause();
                            video.currentTime = INTRO_DURATION;
                            video.playbackRate = 1;
                            currentTime = INTRO_DURATION;
                            targetTime = INTRO_DURATION;
                            phase = 'scrubbing';
                            unlockScroll();
                            requestAnimationFrame(scrubTick);
                            return;
                        }

                        requestAnimationFrame(checkTime);
                    };
                    requestAnimationFrame(checkTime);
                };

                // Fallback nếu play() fail
                const fallbackIntro = () => {
                    const start = performance.now();
                    const tick = (now) => {
                        if (phase !== 'playing-intro') return;
                        const elapsed = (now - start) / 1000;
                        if (elapsed >= INTRO_DURATION) {
                            video.currentTime = INTRO_DURATION;
                            currentTime = INTRO_DURATION;
                            targetTime = INTRO_DURATION;
                            phase = 'scrubbing';
                            unlockScroll();
                            requestAnimationFrame(scrubTick);
                            return;
                        }
                        try { video.currentTime = elapsed; } catch (e) { }
                        requestAnimationFrame(tick);
                    };
                    requestAnimationFrame(tick);
                };

                // ===== Phase 2: Scrub theo scroll =====
                const getProgress = () => {
                    const rect = section.getBoundingClientRect();
                    return Math.max(0, Math.min(1, -rect.top / rect.height));
                };

                const scrubTick = () => {
                    if (phase !== 'scrubbing') return;

                    const progress = getProgress();
                    targetTime = INTRO_DURATION + progress * (video.duration - INTRO_DURATION);

                    currentTime += (targetTime - currentTime) * 0.15;

                    if (Math.abs(video.currentTime - currentTime) > 0.01) {
                        try { video.currentTime = currentTime; } catch (e) { }
                    }

                    requestAnimationFrame(scrubTick);
                };

                // ===== Detect lần đầu user muốn scroll =====
                const onFirstScrollAttempt = (e) => {
                    if (phase !== 'waiting') return;

                    const isScrollingDown =
                        (e.type === 'wheel' && e.deltaY > 0) ||
                        (e.type === 'keydown' && ['ArrowDown', 'PageDown', 'Space'].includes(e.key)) ||
                        (e.type === 'touchstart');

                    if (!isScrollingDown) return;

                    e.preventDefault();

                    window.removeEventListener('wheel', onFirstScrollAttempt);
                    window.removeEventListener('keydown', onFirstScrollAttempt);
                    window.removeEventListener('touchstart', onFirstScrollAttempt);

                    playIntro();
                };

                // ===== Init =====
                const onReady = () => {
                    if (isReady) return;
                    isReady = true;
                    video.pause();
                    video.currentTime = 0;

                    window.addEventListener('wheel', onFirstScrollAttempt, { passive: false });
                    window.addEventListener('keydown', onFirstScrollAttempt, { passive: false });
                    window.addEventListener('touchstart', onFirstScrollAttempt, { passive: false });
                };

                video.addEventListener('loadedmetadata', onReady);
                video.addEventListener('canplay', onReady);

                video.load();
            })();
        </script>

        {{-- ===== NEWS SECTION ===== --}}
        <section class="py-24 max-w-7xl mx-auto px-6">
            <h2 class="section-title reveal text-4xl font-bold text-center mb-16 font-heading mx-auto block!">Showcase</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($news as $new)
                    <div class="news-card reveal stagger-1 group cursor-pointer">
                        <div class="news-img-wrapper rounded-2xl overflow-hidden mb-4 aspect-[4/3] bg-gray-900">
                            <img alt="{{ $new['title'] }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                src="{{ $new['img'] }}">
                        </div>
                        <h3 class="font-bold text-lg mb-2 line-clamp-2 leading-tight">{{ $new['title'] }}</h3>
                        <p class="text-gray-400 text-sm mb-3 line-clamp-2">{{ $new['desc'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="mt-12 text-center reveal">
                <a href="https://www.tiktok.com/@hung_ai_creative?is_from_webapp=1&sender_device=pc" target="_blank"
                    class="cta-btn inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-white/20 transition-colors text-sm font-medium">
                    <span>Showcase</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-arrow-right" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </section>

        {{-- ===== TUTORIAL SECTION ===== --}}
        <section class="py-24 bg-[#0a0a0a] relative overflow-hidden">
            <div class="floating-blob blob-1" style="top: 50%; left: -200px; width: 300px; height: 300px; opacity: 0.15;">
            </div>
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="text-center mb-12">
                    <h2 class="section-title reveal text-4xl font-bold mb-4 font-heading mx-auto">Hướng dẫn</h2>
                    <p class="reveal stagger-1 text-gray-400">Bí Kíp AI Thực Chiến, Kho Tàng Kiến Thức &amp; Kinh Nghiệm Sử
                        Dụng AI</p>
                </div>
                <div class="relative overflow-hidden mb-12 reveal stagger-2 group">
                    <!-- Gradient fade hai bên (tùy chọn, đẹp hơn) -->
                    <div
                        class="absolute left-0 top-0 bottom-0 w-20 bg-gradient-to-r from-black to-transparent z-10 pointer-events-none">
                    </div>
                    <div
                        class="absolute right-0 top-0 bottom-0 w-20 bg-gradient-to-l from-black to-transparent z-10 pointer-events-none">
                    </div>

                    <div class="flex gap-2 animate-marquee group-hover:[animation-play-state:paused] w-max">
                        <!-- Lần 1 -->
                        <button
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Canva
                            AI</button>
                        <button
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm bg-white text-black font-medium">Freepik</button>
                        <button
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Pika</button>
                        <button
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Adobe
                            Firefly</button>
                        <button
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Copilot</button>
                        <button
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">NotebookLM</button>
                        <button
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">ChatGPT</button>
                        <button
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Midjourney</button>
                        <button
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Runway</button>
                        <button
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Gemini</button>
                        <button
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Kling
                            AI</button>
                        <button
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Suno</button>

                        <!-- Lần 2 (nhân đôi để loop liền mạch) - aria-hidden vì là bản sao -->
                        <button aria-hidden="true"
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Canva
                            AI</button>
                        <button aria-hidden="true"
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm bg-white text-black font-medium">Freepik</button>
                        <button aria-hidden="true"
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Pika</button>
                        <button aria-hidden="true"
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Adobe
                            Firefly</button>
                        <button aria-hidden="true"
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Copilot</button>
                        <button aria-hidden="true"
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">NotebookLM</button>
                        <button aria-hidden="true"
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">ChatGPT</button>
                        <button aria-hidden="true"
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Midjourney</button>
                        <button aria-hidden="true"
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Runway</button>
                        <button aria-hidden="true"
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Gemini</button>
                        <button aria-hidden="true"
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Kling
                            AI</button>
                        <button aria-hidden="true"
                            class="tab-btn shrink-0 px-4 py-1.5 rounded-full text-sm text-gray-400 hover:text-white hover:bg-white/10">Suno</button>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($tutorials as $tutorial)
                        <div
                            class="tutorial-card reveal-scale stagger-2 bg-[#151515] rounded-2xl border border-white/5 group cursor-pointer">
                            <div
                                class="aspect-video bg-gray-800 rounded-xl mb-4 relative overflow-hidden flex items-center justify-center">
                                <img alt="bg"
                                    class="absolute inset-0 w-full h-full object-cover group-hover:opacity-60 group-hover:scale-110 transition-all duration-700"
                                    src="{{ $tutorial['img'] }}">
                                <div class="text-center relative z-10">
                                    <div
                                        class="play-button absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 border border-white/50 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-play ml-1" aria-hidden="true">
                                            <path
                                                d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4">
                                <div class="text-xs text-gray-500 mb-1">{{ $tutorial['source'] }}</div>
                                <h3 class="font-semibold text-sm mb-6">{{ $tutorial['title'] }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-12 text-center reveal">
                    <a href="https://www.tiktok.com/@hung_ai_creative?is_from_webapp=1&sender_device=pc"
                        class="cta-btn inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-white/20 transition-colors text-sm font-medium">
                        <span>Xem thêm hướng dẫn</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-right" aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        {{-- ===== PRICING SECTION ===== --}}
        <section class="py-24 max-w-7xl mx-auto px-6 relative">
            <h2 class="section-title reveal text-4xl font-bold text-center mb-16 font-heading mx-auto block">Ưu Đãi Hiện
                Hành</h2>
            <div>
                <div class="mt-10 position-relative">
                    <div class="swiper-container latest-bundle-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            @foreach($featureWebinars as $latestBundle)
                                <div class="swiper-slide">
                                    @include('web.default.includes.webinar.grid-card', ['webinar' => $latestBundle->webinar])
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination bundle-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="mt-[70px] text-center reveal">
                <a href="/classes"
                    class="cta-btn inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-white/20 transition-colors text-sm font-medium">
                    <span>Xem tất cả</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-arrow-right" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </section>

        {{-- ===== CREATIVE JOURNEY ===== --}}
        <section class="py-24 mx-auto px-6">
            <h2
                class="section-title reveal block text-4xl font-bold text-center mb-16 font-heading mx-auto block text-center">
                Hành Trình Sáng
                Tạo</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mx-auto gap-2">
                @foreach ($imgs as $img)

                    <div
                        class="journey-card reveal-right rounded-2xl overflow-hidden aspect-video bg-gray-900 border border-white/10 group cursor-pointer relative">
                        <img alt="Creative"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            src="{{ $img['src'] }}">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                    </div>
                @endforeach
            </div>
            <div class="mt-12 text-center reveal">
                <a href="https://www.tiktok.com/@hung_ai_creative?is_from_webapp=1&sender_device=pc"
                    class="cta-btn inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-white/20 transition-colors text-sm font-medium">
                    <span>Khám Phá</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-arrow-right" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </section>

        {{-- ===== COMMUNITY SECTION ===== --}}
        <section class="py-24 bg-[#0a0a0a] relative overflow-hidden">
            <div class="floating-blob blob-2" style="top: 20%; right: -200px; width: 400px; height: 400px; opacity: 0.1;">
            </div>
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <h2 class="section-title reveal text-4xl font-bold text-center mb-16 font-heading mx-auto block">Tham Gia
                    Cộng Đồng</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div
                        class="community-card reveal-left stagger-1 bg-[#151515] p-8 rounded-3xl border flex flex-col border-white/5">
                        <div class="relative z-10 flex flex-col flex-1">
                            <h3 class="text-2xl font-bold mb-4">Website</h3>
                            <p class="text-gray-400 text-sm mb-8 leading-relaxed h-20">Tổng hợp các bài viết chia sẻ kiến
                                thức, kinh nghiệm ứng dụng AI cùng thông tin về các gói AI tools do HungAiCreative cung cấp.
                            </p>
                            <ul class="space-y-4 mb-20 flex-1">
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Không mất phí tham gia.</span>
                                </li>
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Cập nhật ưu đãi mới nhất tại
                                        HungAiCreative</span>
                                </li>
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Định vị HungAiCreative trên thị trường
                                        phân phối
                                        AI tools</span>
                                </li>
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Tổng hợp thông tin hữu ích về AI</span>
                                </li>
                            </ul>
                            <div>
                                <button
                                    class="arrow-btn w-10 h-10 rounded-full flex items-center justify-center transition-colors bg-white/10 text-white hover:bg-white/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                                        <path d="M7 7h10v10"></path>
                                        <path d="M7 17 17 7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="community-card featured reveal stagger-2 bg-[#151515] p-8 rounded-3xl border flex flex-col border-primary/50 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-primary/10 blur-3xl rounded-full"></div>
                        <div class="relative z-10 flex flex-col flex-1">
                            <h3 class="text-2xl font-bold mb-4">Facebook</h3>
                            <p class="text-gray-400 text-sm mb-8 leading-relaxed h-20">Cộng đồng thông tin chính thức của
                                HungAiCreative trên Facebook, nơi tổ chức các sự kiện và chương trình có thưởng liên quan
                                đến AI.
                            </p>
                            <ul class="space-y-4 mb-20 flex-1">
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Cuộc thi/sự kiện liên quan đến AI có giải
                                        thưởng</span>
                                </li>
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Cập nhật ưu đãi mới nhất tại
                                        HungAiCreative</span>
                                </li>
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Đội hỗ trợ tận tâm và nhanh chóng</span>
                                </li>
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Tổng hợp thông tin hữu ích về AI</span>
                                </li>
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Chia sẻ kiến thức và kinh nghiệm cùng
                                        người dùng khác</span>
                                </li>
                            </ul>
                            <div>
                                <button
                                    class="arrow-btn w-10 h-10 rounded-full flex items-center justify-center transition-colors bg-[#fbcb1c] text-black hover:bg-[#e5b610]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="community-card reveal-right stagger-3 bg-[#151515] p-8 rounded-3xl border flex flex-col border-white/5">
                        <div class="relative z-10 flex flex-col flex-1">
                            <h3 class="text-2xl font-bold mb-4">Nhóm Zalo</h3>
                            <p class="text-gray-400 text-sm mb-8 leading-relaxed h-20">Cộng đồng người dùng HungAiCreative
                                trên
                                Zalo, không gian chia sẻ kiến thức và kinh nghiệm sử dụng AI.</p>
                            <ul class="space-y-4 mb-20 flex-1">
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Cuộc thi/sự kiện liên quan đến AI có giải
                                        thưởng</span>
                                </li>
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Cập nhật ưu đãi mới nhất tại
                                        HungAiCreative</span>
                                </li>
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Đội hỗ trợ tận tâm và nhanh chóng</span>
                                </li>
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Tổng hợp thông tin hữu ích về AI</span>
                                </li>
                                <li class="flex gap-3 text-sm text-gray-300 items-start">
                                    <span class="text-gray-600 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="leading-snug relative top-[-1px]">Chia sẻ kiến thức và kinh nghiệm cùng
                                        người dùng khác</span>
                                </li>
                            </ul>
                            <div>
                                <button
                                    class="arrow-btn w-10 h-10 rounded-full flex items-center justify-center transition-colors bg-white/10 text-white hover:bg-white/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                                        <path d="M7 7h10v10"></path>
                                        <path d="M7 17 17 7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        document.addEventListener('DOMContentLoaded', function () {
            const observerOptions = {
                threshold: 0.15,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function (entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                    }
                });
            }, observerOptions);

            // Observe all reveal elements
            document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale, .section-title').forEach(el => {
                observer.observe(el);
            });

            // Parallax effect on hero image
            const heroBg = document.querySelector('.hero-bg-img');
            if (heroBg) {
                window.addEventListener('scroll', () => {
                    const scrolled = window.pageYOffset;
                    if (scrolled < window.innerHeight) {
                        heroBg.style.transform = `translateY(${scrolled * 0.4}px) scale(${1 + scrolled * 0.0005})`;
                    }
                });
            }

            // Tab buttons interaction
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.addEventListener('click', function () {
                    document.querySelectorAll('.tab-btn').forEach(b => {
                        b.classList.remove('bg-white', 'text-black', 'font-medium');
                        b.classList.add('text-gray-400', 'hover:text-white', 'hover:bg-white/10');
                    });
                    this.classList.remove('text-gray-400', 'hover:text-white', 'hover:bg-white/10');
                    this.classList.add('bg-white', 'text-black', 'font-medium');
                });
            });
        });
    </script>
@endsection

@push('scripts_bottom')
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
@endpush