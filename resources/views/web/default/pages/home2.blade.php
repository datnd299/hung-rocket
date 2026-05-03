@extends(getTemplate() . '.layouts.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/owl-carousel2/owl.carousel.min.css">
@endpush
@php
    $videoDemos = [
        [
            'name' => 'Trí tuệ nhân tạo không chỉ là công cụ, mà là cánh cửa mở ra tiềm năng vô hạn của con người.',
            'desc' => '',
            'source' => '/assets/a1.jpg',
            'type' => 'image'
        ],
        [
            'name' => 'AI không thay thế con người, mà khuếch đại sức mạnh tư duy và khả năng sáng tạo của chúng ta.',
            'desc' => '',
            'source' => '/assets/a6.jpg',
            'type' => 'image'
        ],
        [
            'name' => 'Trong thời đại AI, giới hạn duy nhất là trí tưởng tượng của chúng ta.',
            'desc' => '',
            'source' => '/assets/a3.jpg',
            'type' => 'image'
        ],
        [
            'name' => 'Sức mạnh thực sự của AI nằm ở khả năng biến dữ liệu thành tri thức và tri thức thành hành động.',
            'desc' => '',
            'source' => '/assets/a4.jpg',
            'type' => 'image'
        ]
    ];
    $fanpageUrl = 'https://web.facebook.com/profile.php?id=61569987181492';
    $contactNowUrl = 'https://web.facebook.com/profile.php?id=61569987181492';
    $phoneUrl = 'tel:0377028539'
@endphp

@section('content')

    @if(!empty($heroSectionData))

        @if(!empty($heroSectionData['has_lottie']) and $heroSectionData['has_lottie'] == "1")
            @push('scripts_bottom')
                <script src="/assets/default/vendors/lottie/lottie-player.js"></script>
            @endpush
        @endif

        <section class="slider-container  {{ ($heroSection == "2") ? 'slider-hero-section2' : '' }}"
            @if(empty($heroSectionData['is_video_background'])) style="background-image: url('/assets/bg4.jpg')" @endif>

            @if($heroSection == "2")
                @if(true || !empty($heroSectionData['is_video_background']))
                    <video playsinline autoplay muted loop id="homeHeroVideoBackground" class="img-cover">
                        <source src="/assets/car.mp4" type="video/mp4">
                    </video>
                @endif

                <div class="mask"></div>
            @endif

            <div class="container user-select-none">

                @if($heroSection == "2")
                    <div class="row slider-content align-items-center hero-section2 flex-md-row">
                        <div class="col-12 col-md-6 col-lg-5">
                            <h1 class="text-gray font-weight-bold">Biến AI thành tay sai của bạn</h1>
                            <p class="slide-hint text-gray mt-20">Chào mừng bạn đến với Hưng AI Creative – nơi biến đam mê thành sức
                                mạnh sáng tạo vượt bậc! Học cách làm chủ AI, tạo video siêu ấn tượng, tăng năng suất tối đa và bứt
                                phá từ nghiệp dư thành chuyên gia. Tự tay tạo ra những content triệu view, chinh phục mọi xu hướng!
                            </p>

                        </div>
                        <div class="col-12 col-md-5 col-lg-6 d-flex justify-content-center">
                            <a href="https://learn.hungaicreative.com/classes" class="btn-learn-banner btn btn-primary mt-15">Học
                                ngay</a>
                        </div>
                    </div>
                @else
                    <div class="text-center slider-content">
                        <h1>Biến AI thành tay sai của bạn</h1>
                        <div class="row h-100 align-items-center justify-content-center text-center">
                            <div class="col-12 col-md-9 col-lg-7">
                                <p class="mt-30 slide-hint">Chào mừng bạn đến với Hưng AI Creative – nơi biến đam mê thành sức mạnh
                                    sáng tạo vượt bậc! Học cách làm chủ AI, tạo video siêu ấn tượng, tăng năng suất tối đa và bứt
                                    phá từ nghiệp dư thành chuyên gia. Tự tay tạo ra những content triệu view, chinh phục mọi xu
                                    hướng!</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    @endif


    {{-- Statistics --}}
    @include('web.default.pages.includes.home_statistics')
    <section class="home-sections home-sections-swiper container mt-0">
        <div class="px-20 px-md-0">
            <h2 class="section-title">Cùng tôi chinh phục AI</h2>
        </div>

        <div class="feature-slider-container position-relative d-flex justify-content-center mt-10">
            <div class="swiper-container features-swiper-container pb-25">
                <div class="swiper-wrapper py-10">
                    @foreach($videoDemos as $videoDemo)
                        <div class="swiper-slide">
                            <div class="h-100">
                                <div class="feature-slider d-flex h-100" @if($videoDemo['type'] == 'image')
                                style="background-image: url('{{$videoDemo['source']}}')" @endif">
                                    {{-- <div class="mask"></div>--}}
                                    <div class="p-5 p-md-25 feature-slider-card card-ai-hint" style="width: 435px">
                                        <div class="d-flex flex-column feature-slider-body position-relative h-200">
                                            <div>
                                                <h3 class="card-title mt-1">{{ $videoDemo['name'] }}</h3>
                                            </div>

                                            <div>
                                                {{ $videoDemo['desc'] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="swiper-pagination features-swiper-pagination"></div>
        </div>
    </section>
    <section class="home-sections home-sections-swiper container">
        <div class="d-flex justify-content-between ">
            <div>
                <h2 class="section-title">Khoá học nổi bật</h2>
                <p class="section-hint">Học online tiết kiệm 90% chi phí</p>
            </div>

            <a href="/classes" class="btn btn-border-white">Xem tất cả</a>
        </div>

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
    </section>
    <section class="home-sections home-sections-swiper container find-instructor-section position-relative">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="">
                    <h2 class="font-36 font-weight-bold text-dark">Khóa học đào tạo 1:1 AI</h2>
                    <p class="font-16 font-weight-normal text-gray mt-10">
                        Đồng hành cùng chuyên gia trong khóa học 1:1, bạn sẽ chinh phục công nghệ AI nhanh chóng và ứng dụng
                        hiệu quả trong công việc, mở ra cánh cửa đến tương lai số.
                    </p>

                    <div class="mt-35 d-flex align-items-center">
                        @if(!empty($findInstructorSection['button1']) and !empty($findInstructorSection['button1']['title']) and !empty($findInstructorSection['button1']['link']))
                            <a href="{{$phoneUrl}}" target="_blank" class="btn btn-primary mr-15">Liên hệ ngay</a>
                        @endif

                        {{-- @if(!empty($findInstructorSection['button2']) and
                        !empty($findInstructorSection['button2']['title']) and
                        !empty($findInstructorSection['button2']['link']))--}}
                        {{-- <a href="{{ $findInstructorSection['button2']['link'] }}" class="btn btn-outline-primary">{{
                            $findInstructorSection['button2']['title'] }}</a>--}}
                        {{-- @endif--}}
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 mt-20 mt-lg-0">
                <div class="position-relative ">
                    <img src="/assets/coaching.jpg" class="find-instructor-section-hero" alt="Khóa học đào tạo 1:1 AI">
                    <img src="/assets/default/img/home/circle-4.png" class="find-instructor-section-circle" alt="circle">
                    <img src="/assets/default/img/home/dot.png" class="find-instructor-section-dots" alt="dots">

                    <div
                        class="example-instructor-card bg-white rounded-sm shadow-lg  p-5 p-md-15 d-flex align-items-center">
                        <div class="example-instructor-card-avatar">
                            <img src="/assets/help.png" class="img-cover rounded-circle">
                        </div>

                        <div class="flex-grow-1 ml-15">
                            <span class="font-14 font-weight-bold text-secondary d-block">Thực hành trực tiếp cùng
                                tôi</span>
                            <span class="text-gray font-12 font-weight-500">Sửa lỗi nhanh chóng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-sections home-sections-swiper container find-instructor-section position-relative">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 mt-20 mt-lg-0">
                <div class="position-relative ">
                    <img src="/assets/bg1.jpg" class="find-instructor-section-hero" alt="Đào tạo doanh nghiệp">
                    <img src="/assets/default/img/home/circle-4.png" class="find-instructor-section-circle" alt="circle">
                    <img src="/assets/default/img/home/dot.png" class="find-instructor-section-dots" alt="dots">
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="">
                    <h2 class="font-36 font-weight-bold text-dark">Đào tạo doanh nghiệp</h2>
                    <p class="font-16 font-weight-normal text-gray mt-10">
                        Training nhân sự áp dụng AI nâng cao hiệu quả công việc
                    </p>
                    <p class="font-16 font-weight-normal text-gray mt-10">
                        Hợp tác thương mại hoá sản phẩm từ AI
                    </p>

                    <div class="mt-35 d-flex align-items-center">
                        @if(!empty($forumSection['button1']) and !empty($forumSection['button1']['title']) and !empty($forumSection['button1']['link']))
                            <a href="{{$contactNowUrl}}" target="_blank" class="btn btn-primary mr-15">Liên hệ ngay</a>
                        @endif

                        {{-- @if(!empty($forumSection['button2']) and !empty($forumSection['button2']['title']) and
                        !empty($forumSection['button2']['link']))--}}
                        {{-- <a href="{{ $forumSection['button2']['link'] }}" class="btn btn-outline-primary">{{
                            $forumSection['button2']['title'] }}</a>--}}
                        {{-- @endif--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-sections home-sections-swiper position-relative">
        <div class="home-video-mask"></div>
        <div class="container position-relative videoWrapper">
            {{-- <div
                class="container home-video-container d-flex flex-column align-items-center justify-content-center position-relative"
                style="background-image: url('/assets/bg3.jpg'">--}}
                {{-- <a href="{{ $boxVideoOrImage['link'] ?? '' }}"
                    class="home-video-play-button d-flex align-items-center justify-content-center position-relative">--}}
                    {{-- <i data-feather="play" width="36" height="36" class=""></i>--}}
                    {{-- </a>--}}
                <iframe width="560" height="315"
                    src="https://www.youtube-nocookie.com/embed/F7Mof11BdGk?si=jPaQlFPpv2zb_BPu"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                {{-- <div class="mt-50 pt-10 text-center">--}}
                    {{-- <h2 class="home-video-title">{{ $boxVideoOrImage['title'] ?? '' }}</h2>--}}
                    {{-- <p class="home-video-hint mt-10">{{ $boxVideoOrImage['description'] ?? '' }}</p>--}}
                    {{-- </div>--}}
            </div>
    </section>
    <div class="home-sections container">
        <div class="row">
            <div class="col-12 col-md-6 videoWrapper ">
                <iframe width="560" height="315"
                    src="https://www.youtube-nocookie.com/embed/mmfQY0V98kI?si=5L_Y71sDQMQvZ9Kt"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-12 col-md-6 videoWrapper">
                <iframe width="560" height="315"
                    src="https://www.youtube-nocookie.com/embed/YNkMC_fqbL0?si=2xiYqDk_AZ_FOKAw"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <section class="home-sections container">
        <div class="d-flex justify-content-between">
            <div>
                <h2 class="section-title">Bài viết</h2>
                <p class="section-hint">Những thông tin mới nhất về AI</p>
            </div>

            <a href="/blog" class="btn btn-border-white">Tất cả bài viết</a>
        </div>

        <div class="row mt-35">

            @foreach($blog as $post)
                <div class="col-12 col-md-4 col-lg-4 mt-20 mt-lg-0">
                    @include('web.default.blog.grid-list', ['post' => $post])
                </div>
            @endforeach

        </div>
    </section>
@endsection

@push('scripts_bottom')
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
@endpush