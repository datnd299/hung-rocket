<?php $__env->startPush('styles_top'); ?>
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/owl-carousel2/owl.carousel.min.css">
<?php $__env->stopPush(); ?>
<?php
$videoDemos = [
    [
        'name' => 'Video 1',
        'desc' => 'Ai đang làm việc 1',
        'source' => '/assets/a1.jpg',
        'type' => 'image'
    ],
    [
        'name' => 'Video 2',
        'desc' => 'Ai đang làm việc 2',
        'source' => '/assets/a2.jpg',
        'type' => 'image'
    ],
    [
        'name' => 'Video 3',
        'desc' => 'Ai đang làm việc 3',
        'source' => '/assets/a3.jpg',
        'type' => 'image'
    ],
    [
        'name' => 'Video 3',
        'desc' => 'Ai đang làm việc 3',
        'source' => '/assets/a4.jpg',
        'type' => 'image'
    ]
];
?>

<?php $__env->startSection('content'); ?>

    <?php if(!empty($heroSectionData)): ?>

        <?php if(!empty($heroSectionData['has_lottie']) and $heroSectionData['has_lottie'] == "1"): ?>
            <?php $__env->startPush('scripts_bottom'); ?>
                <script src="/assets/default/vendors/lottie/lottie-player.js"></script>
            <?php $__env->stopPush(); ?>
        <?php endif; ?>

        <section class="slider-container  <?php echo e(($heroSection == "2") ? 'slider-hero-section2' : ''); ?>" <?php if(empty($heroSectionData['is_video_background'])): ?> style="background-image: url('/assets/bg4.jpg')" <?php endif; ?>>

            <?php if($heroSection == "2"): ?>
                <?php if(true || !empty($heroSectionData['is_video_background'])): ?>
                    <video playsinline autoplay muted loop id="homeHeroVideoBackground" class="img-cover">
                        <source src="/assets/car.mp4" type="video/mp4">
                    </video>
                <?php endif; ?>

                <div class="mask"></div>
            <?php endif; ?>

            <div class="container user-select-none">

                <?php if($heroSection == "2"): ?>
                    <div class="row slider-content align-items-center hero-section2 flex-column-reverse flex-md-row">
                        <div class="col-12 col-md-6 col-lg-5">
                            <h1 class="text-secondary font-weight-bold">Biến AI thành tay sai của bạn</h1>
                            <p class="slide-hint text-gray mt-20">Chào mừng bạn đến với Hưng AI Creative – nơi biến đam mê thành sức mạnh sáng tạo vượt bậc! Học cách làm chủ AI, tạo video siêu ấn tượng, tăng năng suất tối đa và bứt phá từ nghiệp dư thành chuyên gia. Tự tay tạo ra những content triệu view, chinh phục mọi xu hướng!</p>







                        </div>







                    </div>
                <?php else: ?>
                    <div class="text-center slider-content">
                        <h1>Biến AI thành tay sai của bạn</h1>
                        <div class="row h-100 align-items-center justify-content-center text-center">
                            <div class="col-12 col-md-9 col-lg-7">
                                <p class="mt-30 slide-hint">Chào mừng bạn đến với Hưng AI Creative – nơi biến đam mê thành sức mạnh sáng tạo vượt bậc! Học cách làm chủ AI, tạo video siêu ấn tượng, tăng năng suất tối đa và bứt phá từ nghiệp dư thành chuyên gia. Tự tay tạo ra những content triệu view, chinh phục mọi xu hướng!</p>







                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>


    
    <?php echo $__env->make('web.default.pages.includes.home_statistics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="home-sections home-sections-swiper container mt-0">
        <div class="px-20 px-md-0">
            <h2 class="section-title">Dự án của tôi</h2>
        </div>

        <div class="feature-slider-container position-relative d-flex justify-content-center mt-10">
            <div class="swiper-container features-swiper-container pb-25">
                <div class="swiper-wrapper py-10">
                    <?php $__currentLoopData = $videoDemos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $videoDemo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <div class="h-100">
                                <div class="feature-slider d-flex h-100" <?php if($videoDemo['type'] == 'image'): ?> style="background-image: url('<?php echo e($videoDemo['source']); ?>')" <?php endif; ?>">

                                    <div class="p-5 p-md-25 feature-slider-card" style="width: 435px; height: 300px">
                                        <div class="d-flex flex-column feature-slider-body position-relative h-200">
                                            <div>
                                                <h3 class="card-title mt-1"><?php echo e($videoDemo['name']); ?></h3>
                                            </div>

                                            <div>
                                                <?php echo e($videoDemo['desc']); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="swiper-pagination features-swiper-pagination"></div>
        </div>
    </section>

    <?php $__currentLoopData = $homeSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($homeSection->name == \App\Models\HomeSection::$featured_classes and !empty($featureWebinars) and !$featureWebinars->isEmpty()): ?>

            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between ">
                    <div>
                        <h2 class="section-title">Khoá học nổi bật</h2>
                        <p class="section-hint">Học online tiết kiệm 90% chi phí</p>
                    </div>

                    <a href="/classes?type[]=bundle" class="btn btn-border-white">Xem tất cả</a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container latest-bundle-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            <?php $__currentLoopData = $featureWebinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestBundle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.grid-card',['webinar' => $latestBundle->webinar], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination bundle-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>












































































        <?php endif; ?>

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$latest_bundles and !empty($latestBundles) and !$latestBundles->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between ">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('update.latest_bundles')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('update.latest_bundles_hint')); ?></p>
                    </div>

                    <a href="/classes?type[]=bundle" class="btn btn-border-white"><?php echo e(trans('home.view_all')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container latest-bundle-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            <?php $__currentLoopData = $latestBundles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestBundle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.grid-card',['webinar' => $latestBundle], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination bundle-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        
        <?php if(false && $homeSection->name == \App\Models\HomeSection::$upcoming_courses and !empty($upcomingCourses) and !$upcomingCourses->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between ">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('update.upcoming_courses')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('update.upcoming_courses_home_section_hint')); ?></p>
                    </div>

                    <a href="/upcoming_courses?sort=newest" class="btn btn-border-white"><?php echo e(trans('home.view_all')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container upcoming-courses-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            <?php $__currentLoopData = $upcomingCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upcomingCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.upcoming_course_grid_card',['upcomingCourse' => $upcomingCourse], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination upcoming-courses-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$latest_classes and !empty($latestWebinars) and !$latestWebinars->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between ">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.latest_classes')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.latest_webinars_hint')); ?></p>
                    </div>

                    <a href="/classes?sort=newest" class="btn btn-border-white"><?php echo e(trans('home.view_all')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container latest-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            <?php $__currentLoopData = $latestWebinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestWebinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.grid-card',['webinar' => $latestWebinar], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination latest-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$best_rates and !empty($bestRateWebinars) and !$bestRateWebinars->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.best_rates')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.best_rates_hint')); ?></p>
                    </div>

                    <a href="/classes?sort=best_rates" class="btn btn-border-white"><?php echo e(trans('home.view_all')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container best-rates-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            <?php $__currentLoopData = $bestRateWebinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bestRateWebinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.grid-card',['webinar' => $bestRateWebinar], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination best-rates-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$trend_categories and !empty($trendCategories) and !$trendCategories->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <h2 class="section-title"><?php echo e(trans('home.trending_categories')); ?></h2>
                <p class="section-hint"><?php echo e(trans('home.trending_categories_hint')); ?></p>


                <div class="swiper-container trend-categories-swiper px-12 mt-40">
                    <div class="swiper-wrapper py-20">
                        <?php $__currentLoopData = $trendCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <a href="<?php echo e($trend->category->getUrl()); ?>">
                                    <div class="trending-card d-flex flex-column align-items-center w-100">
                                        <div class="trending-image d-flex align-items-center justify-content-center w-100" style="background-color: <?php echo e($trend->color); ?>">
                                            <div class="icon mb-3">
                                                <img src="<?php echo e($trend->getIcon()); ?>" width="10" class="img-cover" alt="<?php echo e($trend->category->title); ?>">
                                            </div>
                                        </div>

                                        <div class="item-count px-10 px-lg-20 py-5 py-lg-10"><?php echo e($trend->category->webinars_count); ?> <?php echo e(trans('product.course')); ?></div>

                                        <h3><?php echo e($trend->category->title); ?></h3>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="swiper-pagination trend-categories-swiper-pagination"></div>
                </div>
            </section>
        <?php endif; ?>

        
        <?php if(false && $homeSection->name == \App\Models\HomeSection::$full_advertising_banner and !empty($advertisingBanners1) and count($advertisingBanners1)): ?>
            <div class="home-sections container">
                <div class="row">
                    <?php $__currentLoopData = $advertisingBanners1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-<?php echo e($banner1->size); ?>">
                            <a href="<?php echo e($banner1->link); ?>">
                                <img src="<?php echo e($banner1->image); ?>" class="img-cover rounded-sm" alt="<?php echo e($banner1->title); ?>">
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>
        

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$best_sellers and !empty($bestSaleWebinars) and !$bestSaleWebinars->isEmpty()): ?>
            <section class="home-sections container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.best_sellers')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.best_sellers_hint')); ?></p>
                    </div>

                    <a href="/classes?sort=bestsellers" class="btn btn-border-white"><?php echo e(trans('home.view_all')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container best-sales-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            <?php $__currentLoopData = $bestSaleWebinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bestSaleWebinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.grid-card',['webinar' => $bestSaleWebinar], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination best-sales-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$discount_classes and !empty($hasDiscountWebinars) and !$hasDiscountWebinars->isEmpty()): ?>
            <section class="home-sections container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.discount_classes')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.discount_classes_hint')); ?></p>
                    </div>

                    <a href="/classes?discount=on" class="btn btn-border-white"><?php echo e(trans('home.view_all')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container has-discount-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            <?php $__currentLoopData = $hasDiscountWebinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasDiscountWebinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.grid-card',['webinar' => $hasDiscountWebinar], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination has-discount-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$free_classes and !empty($freeWebinars) and !$freeWebinars->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.free_classes')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.free_classes_hint')); ?></p>
                    </div>

                    <a href="/classes?free=on" class="btn btn-border-white"><?php echo e(trans('home.view_all')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container free-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">

                            <?php $__currentLoopData = $freeWebinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $freeWebinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.grid-card',['webinar' => $freeWebinar], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination free-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$store_products and !empty($newProducts) and !$newProducts->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('update.store_products')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('update.store_products_hint')); ?></p>
                    </div>

                    <a href="/products" class="btn btn-border-white"><?php echo e(trans('update.all_products')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container new-products-swiper px-12">
                        <div class="swiper-wrapper py-20">

                            <?php $__currentLoopData = $newProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.products.includes.card',['product' => $newProduct], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination new-products-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$testimonials and !empty($testimonials) and !$testimonials->isEmpty()): ?>
            <div class="position-relative home-sections testimonials-container">

                <div id="parallax1" class="ltr">
                    <div data-depth="0.2" class="gradient-box left-gradient-box"></div>
                </div>

                <section class="container home-sections home-sections-swiper">
                    <div class="text-center">
                        <h2 class="section-title"><?php echo e(trans('home.testimonials')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.testimonials_hint')); ?></p>
                    </div>

                    <div class="position-relative">
                        <div class="swiper-container testimonials-swiper px-12">
                            <div class="swiper-wrapper">

                                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                        <div class="testimonials-card position-relative py-15 py-lg-30 px-10 px-lg-20 rounded-sm shadow bg-white text-center">
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="testimonials-user-avatar">
                                                    <img src="<?php echo e($testimonial->user_avatar); ?>" alt="<?php echo e($testimonial->user_name); ?>" class="img-cover rounded-circle">
                                                </div>
                                                <h4 class="font-16 font-weight-bold text-secondary mt-30"><?php echo e($testimonial->user_name); ?></h4>
                                                <span class="d-block font-14 text-gray"><?php echo e($testimonial->user_bio); ?></span>
                                                <?php echo $__env->make('web.default.includes.webinar.rate',['rate' => $testimonial->rate, 'dontShowRate' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>

                                            <p class="mt-25 text-gray font-14"><?php echo nl2br($testimonial->comment); ?></p>

                                            <div class="bottom-gradient"></div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="swiper-pagination testimonials-swiper-pagination"></div>
                        </div>
                    </div>
                </section>

                <div id="parallax2" class="ltr">
                    <div data-depth="0.4" class="gradient-box right-gradient-box"></div>
                </div>

                <div id="parallax3" class="ltr">
                    <div data-depth="0.8" class="gradient-box bottom-gradient-box"></div>
                </div>
            </div>
        <?php endif; ?>

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$subscribes and !empty($subscribes) and !$subscribes->isEmpty()): ?>
            <div class="home-sections position-relative subscribes-container pe-none user-select-none">
                <div id="parallax4" class="ltr d-none d-md-block">
                    <div data-depth="0.2" class="gradient-box left-gradient-box"></div>
                </div>

                <section class="container home-sections home-sections-swiper">
                    <div class="text-center">
                        <h2 class="section-title"><?php echo e(trans('home.subscribe_now')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.subscribe_now_hint')); ?></p>
                    </div>

                    <div class="position-relative mt-30">
                        <div class="swiper-container subscribes-swiper px-12">
                            <div class="swiper-wrapper py-20">

                                <?php $__currentLoopData = $subscribes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscribe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $subscribeSpecialOffer = $subscribe->activeSpecialOffer();
                                    ?>

                                    <div class="swiper-slide">
                                        <div class="subscribe-plan position-relative bg-white d-flex flex-column align-items-center rounded-sm shadow pt-50 pb-20 px-20">
                                            <?php if($subscribe->is_popular): ?>
                                                <span class="badge badge-primary badge-popular px-15 py-5"><?php echo e(trans('panel.popular')); ?></span>
                                            <?php elseif(!empty($subscribeSpecialOffer)): ?>
                                                <span class="badge badge-danger badge-popular px-15 py-5"><?php echo e(trans('update.percent_off', ['percent' => $subscribeSpecialOffer->percent])); ?></span>
                                            <?php endif; ?>

                                            <div class="plan-icon">
                                                <img src="<?php echo e($subscribe->icon); ?>" class="img-cover" alt="">
                                            </div>

                                            <h3 class="mt-20 font-30 text-secondary"><?php echo e($subscribe->title); ?></h3>
                                            <p class="font-weight-500 text-gray mt-10"><?php echo e($subscribe->description); ?></p>

                                            <div class="d-flex align-items-start mt-30">
                                                <?php if(!empty($subscribe->price) and $subscribe->price > 0): ?>
                                                    <?php if(!empty($subscribeSpecialOffer)): ?>
                                                        <div class="d-flex align-items-end line-height-1">
                                                            <span class="font-36 text-primary"><?php echo e(handlePrice($subscribe->getPrice(), true, true, false, null, true)); ?></span>
                                                            <span class="font-14 text-gray ml-5 text-decoration-line-through"><?php echo e(handlePrice($subscribe->price, true, true, false, null, true)); ?></span>
                                                        </div>
                                                    <?php else: ?>
                                                        <span class="font-36 text-primary line-height-1"><?php echo e(handlePrice($subscribe->price, true, true, false, null, true)); ?></span>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <span class="font-36 text-primary line-height-1"><?php echo e(trans('public.free')); ?></span>
                                                <?php endif; ?>
                                            </div>

                                            <ul class="mt-20 plan-feature">
                                                <li class="mt-10"><?php echo e($subscribe->days); ?> <?php echo e(trans('financial.days_of_subscription')); ?></li>
                                                <li class="mt-10">
                                                    <?php if($subscribe->infinite_use): ?>
                                                        <?php echo e(trans('update.unlimited')); ?>

                                                    <?php else: ?>
                                                        <?php echo e($subscribe->usable_count); ?>

                                                    <?php endif; ?>
                                                    <span class="ml-5"><?php echo e(trans('update.subscribes')); ?></span>
                                                </li>
                                            </ul>

                                            <?php if(auth()->check()): ?>
                                                <form action="/panel/financial/pay-subscribes" method="post" class="w-100">
                                                    <?php echo e(csrf_field()); ?>

                                                    <input name="amount" value="<?php echo e($subscribe->price); ?>" type="hidden">
                                                    <input name="id" value="<?php echo e($subscribe->id); ?>" type="hidden">

                                                    <div class="d-flex align-items-center mt-50 w-100">
                                                        <button type="submit" class="btn btn-primary <?php echo e(!empty($subscribe->has_installment) ? '' : 'btn-block'); ?>"><?php echo e(trans('update.purchase')); ?></button>

                                                        <?php if(!empty($subscribe->has_installment)): ?>
                                                            <a href="/panel/financial/subscribes/<?php echo e($subscribe->id); ?>/installments" class="btn btn-outline-primary flex-grow-1 ml-10"><?php echo e(trans('update.installments')); ?></a>
                                                        <?php endif; ?>
                                                    </div>
                                                </form>
                                            <?php else: ?>
                                                <a href="/login" class="btn btn-primary btn-block mt-50"><?php echo e(trans('update.purchase')); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="swiper-pagination subscribes-swiper-pagination"></div>
                        </div>

                    </div>
                </section>

                <div id="parallax5" class="ltr d-none d-md-block">
                    <div data-depth="0.4" class="gradient-box right-gradient-box"></div>
                </div>

                <div id="parallax6" class="ltr d-none d-md-block">
                    <div data-depth="0.6" class="gradient-box bottom-gradient-box"></div>
                </div>
            </div>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$find_instructors and !empty($findInstructorSection)): ?>
            <section class="home-sections home-sections-swiper container find-instructor-section position-relative">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="">
                            <h2 class="font-36 font-weight-bold text-dark">Khóa học đào tạo 1:1 AI</h2>
                            <p class="font-16 font-weight-normal text-gray mt-10">
                                Đồng hành cùng chuyên gia trong khóa học 1:1, bạn sẽ chinh phục công nghệ AI nhanh chóng và ứng dụng hiệu quả trong công việc, mở ra cánh cửa đến tương lai số.
                            </p>

                            <div class="mt-35 d-flex align-items-center">
                                <?php if(!empty($findInstructorSection['button1']) and !empty($findInstructorSection['button1']['title']) and !empty($findInstructorSection['button1']['link'])): ?>
                                    <a href="<?php echo e($findInstructorSection['button1']['link']); ?>" class="btn btn-primary mr-15">Liên hệ ngay</a>
                                <?php endif; ?>




                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 mt-20 mt-lg-0">
                        <div class="position-relative ">
                            <img src="/assets/coaching.jpg" class="find-instructor-section-hero" alt="Khóa học đào tạo 1:1 AI">
                            <img src="/assets/default/img/home/circle-4.png" class="find-instructor-section-circle" alt="circle">
                            <img src="/assets/default/img/home/dot.png" class="find-instructor-section-dots" alt="dots">

                            <div class="example-instructor-card bg-white rounded-sm shadow-lg  p-5 p-md-15 d-flex align-items-center">
                                <div class="example-instructor-card-avatar">
                                    <img src="/assets/help.png" class="img-cover rounded-circle">
                                </div>

                                <div class="flex-grow-1 ml-15">
                                    <span class="font-14 font-weight-bold text-secondary d-block">Thực hành trực tiếp cùng tôi</span>
                                    <span class="text-gray font-12 font-weight-500">Sửa lỗi nhanh chóng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$reward_program and !empty($rewardProgramSection)): ?>
            <section class="home-sections home-sections-swiper container reward-program-section position-relative">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="position-relative reward-program-section-hero-card">
                            <img src="<?php echo e($rewardProgramSection['image']); ?>" class="reward-program-section-hero" alt="<?php echo e($rewardProgramSection['title']); ?>">

                            <div class="example-reward-card bg-white rounded-sm shadow-lg p-5 p-md-15 d-flex align-items-center">
                                <div class="example-reward-card-medal">
                                    <img src="/assets/default/img/rewards/medal.png" class="img-cover rounded-circle" alt="medal">
                                </div>

                                <div class="flex-grow-1 ml-15">
                                    <span class="font-14 font-weight-bold text-secondary d-block"><?php echo e(trans('update.you_got_50_points')); ?></span>
                                    <span class="text-gray font-12 font-weight-500"><?php echo e(trans('update.for_completing_the_course')); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 mt-20 mt-lg-0">
                        <div class="">
                            <h2 class="font-36 font-weight-bold text-dark"><?php echo e($rewardProgramSection['title'] ?? ''); ?></h2>
                            <p class="font-16 font-weight-normal text-gray mt-10"><?php echo e($rewardProgramSection['description'] ?? ''); ?></p>

                            <div class="mt-35 d-flex align-items-center">
                                <?php if(!empty($rewardProgramSection['button1']) and !empty($rewardProgramSection['button1']['title']) and !empty($rewardProgramSection['button1']['link'])): ?>
                                    <a href="<?php echo e($rewardProgramSection['button1']['link']); ?>" class="btn btn-primary mr-15"><?php echo e($rewardProgramSection['button1']['title']); ?></a>
                                <?php endif; ?>

                                <?php if(!empty($rewardProgramSection['button2']) and !empty($rewardProgramSection['button2']['title']) and !empty($rewardProgramSection['button2']['link'])): ?>
                                    <a href="<?php echo e($rewardProgramSection['button2']['link']); ?>" class="btn btn-outline-primary"><?php echo e($rewardProgramSection['button2']['title']); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$become_instructor and !empty($becomeInstructorSection)): ?>
            <section class="home-sections home-sections-swiper container find-instructor-section position-relative">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="">
                            <h2 class="font-36 font-weight-bold text-dark"><?php echo e($becomeInstructorSection['title'] ?? ''); ?></h2>
                            <p class="font-16 font-weight-normal text-gray mt-10"><?php echo e($becomeInstructorSection['description'] ?? ''); ?></p>

                            <div class="mt-35 d-flex align-items-center">
                                <?php if(!empty($becomeInstructorSection['button1']) and !empty($becomeInstructorSection['button1']['title']) and !empty($becomeInstructorSection['button1']['link'])): ?>
                                    <a href="<?php echo e(empty($authUser) ? '/login' : (($authUser->isUser()) ? $becomeInstructorSection['button1']['link'] : '/panel/financial/registration-packages')); ?>" class="btn btn-primary mr-15"><?php echo e($becomeInstructorSection['button1']['title']); ?></a>
                                <?php endif; ?>

                                <?php if(!empty($becomeInstructorSection['button2']) and !empty($becomeInstructorSection['button2']['title']) and !empty($becomeInstructorSection['button2']['link'])): ?>
                                    <a href="<?php echo e(empty($authUser) ? '/login' : (($authUser->isUser()) ? $becomeInstructorSection['button2']['link'] : '/panel/financial/registration-packages')); ?>" class="btn btn-outline-primary"><?php echo e($becomeInstructorSection['button2']['title']); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 mt-20 mt-lg-0">
                        <div class="position-relative ">
                            <img src="<?php echo e($becomeInstructorSection['image']); ?>" class="find-instructor-section-hero" alt="<?php echo e($becomeInstructorSection['title']); ?>">
                            <img src="/assets/default/img/home/circle-4.png" class="find-instructor-section-circle" alt="circle">
                            <img src="/assets/default/img/home/dot.png" class="find-instructor-section-dots" alt="dots">

                            <div class="example-instructor-card bg-white rounded-sm shadow-lg border p-5 p-md-15 d-flex align-items-center">
                                <div class="example-instructor-card-avatar">
                                    <img src="/assets/default/img/home/become_instructor.svg" class="img-cover rounded-circle" alt="user name">
                                </div>

                                <div class="flex-grow-1 ml-15">
                                    <span class="font-14 font-weight-bold text-secondary d-block"><?php echo e(trans('update.become_an_instructor')); ?></span>
                                    <span class="text-gray font-12 font-weight-500"><?php echo e(trans('update.become_instructor_tagline')); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$forum_section and !empty($forumSection)): ?>
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
                                <?php if(!empty($forumSection['button1']) and !empty($forumSection['button1']['title']) and !empty($forumSection['button1']['link'])): ?>
                                    <a href="<?php echo e($forumSection['button1']['link']); ?>" class="btn btn-primary mr-15">Liên hệ ngay</a>
                                <?php endif; ?>




                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$video_or_image_section and !empty($boxVideoOrImage)): ?>
            <section class="home-sections home-sections-swiper position-relative">
                <div class="home-video-mask"></div>
                <div class="container home-video-container d-flex flex-column align-items-center justify-content-center position-relative" style="background-image: url('/assets/bg3.jpg'">



                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/F7Mof11BdGk?si=jPaQlFPpv2zb_BPu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="mt-50 pt-10 text-center">
                        <h2 class="home-video-title"><?php echo e($boxVideoOrImage['title'] ?? ''); ?></h2>
                        <p class="home-video-hint mt-10"><?php echo e($boxVideoOrImage['description'] ?? ''); ?></p>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$instructors and !empty($instructors) and !$instructors->isEmpty()): ?>
            <section class="home-sections container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.instructors')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.instructors_hint')); ?></p>
                    </div>

                    <a href="/instructors" class="btn btn-border-white"><?php echo e(trans('home.all_instructors')); ?></a>
                </div>

                <div class="position-relative mt-20 ltr">
                    <div class="owl-carousel customers-testimonials instructors-swiper-container">

                        <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="shadow-effect">
                                    <div class="instructors-card d-flex flex-column align-items-center justify-content-center">
                                        <div class="instructors-card-avatar">
                                            <img src="<?php echo e($instructor->getAvatar(108)); ?>" alt="<?php echo e($instructor->full_name); ?>" class="rounded-circle img-cover">
                                        </div>
                                        <div class="instructors-card-info mt-10 text-center">
                                            <a href="<?php echo e($instructor->getProfileUrl()); ?>" target="_blank">
                                                <h3 class="font-16 font-weight-bold text-dark-blue"><?php echo e($instructor->full_name); ?></h3>
                                            </a>

                                            <p class="font-14 text-gray mt-5"><?php echo e($instructor->bio); ?></p>
                                            <div class="stars-card d-flex align-items-center justify-content-center mt-10">
                                                <?php
                                                    $i = 5;
                                                ?>
                                                <?php while(--$i >= 5 - $instructor->rates()): ?>
                                                    <i data-feather="star" width="20" height="20" class="active"></i>
                                                <?php endwhile; ?>
                                                <?php while($i-- >= 0): ?>
                                                    <i data-feather="star" width="20" height="20" class=""></i>
                                                <?php endwhile; ?>
                                            </div>

                                            <?php if(!empty($instructor->hasMeeting())): ?>
                                                <a href="<?php echo e($instructor->getProfileUrl()); ?>?tab=appointments" class="btn btn-primary btn-sm rounded-pill mt-15"><?php echo e(trans('home.reserve_a_live_class')); ?></a>
                                            <?php else: ?>
                                                <a href="<?php echo e($instructor->getProfileUrl()); ?>" class="btn btn-primary btn-sm rounded-pill mt-15"><?php echo e(trans('public.profile')); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </section>
        <?php endif; ?>

        
        <?php if($homeSection->name == \App\Models\HomeSection::$half_advertising_banner and !empty($advertisingBanners2) and count($advertisingBanners2)): ?>
            <div class="home-sections container">
                <div class="row">
                    <div class="col-12 col-md-6 videoWrapper ">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/mmfQY0V98kI?si=5L_Y71sDQMQvZ9Kt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-md-6 videoWrapper">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/YNkMC_fqbL0?si=2xiYqDk_AZ_FOKAw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        

        <?php if(false && $homeSection->name == \App\Models\HomeSection::$organizations and !empty($organizations) and !$organizations->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.organizations')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.organizations_hint')); ?></p>
                    </div>

                    <a href="/organizations" class="btn btn-border-white"><?php echo e(trans('home.all_organizations')); ?></a>
                </div>

                <div class="position-relative mt-20">
                    <div class="swiper-container organization-swiper-container px-12">
                        <div class="swiper-wrapper py-20">

                            <?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="home-organizations-card d-flex flex-column align-items-center justify-content-center">
                                        <div class="home-organizations-avatar">
                                            <img src="<?php echo e($organization->getAvatar(120)); ?>" class="img-cover rounded-circle" alt="<?php echo e($organization->full_name); ?>">
                                        </div>
                                        <a href="<?php echo e($organization->getProfileUrl()); ?>" class="mt-25 d-flex flex-column align-items-center justify-content-center">
                                            <h3 class="home-organizations-title"><?php echo e($organization->full_name); ?></h3>
                                            <p class="home-organizations-desc mt-10"><?php echo e($organization->bio); ?></p>
                                            <span class="home-organizations-badge badge mt-15"><?php echo e($organization->webinars_count); ?> <?php echo e(trans('panel.classes')); ?></span>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination organization-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$blog and !empty($blog) and !$blog->isEmpty()): ?>
            <section class="home-sections container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title">Bài viết</h2>
                        <p class="section-hint">Những thông tin mới nhất về AI</p>
                    </div>

                    <a href="/blog" class="btn btn-border-white">Tất cả bài viết</a>
                </div>

                <div class="row mt-35">

                    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-md-4 col-lg-4 mt-20 mt-lg-0">
                            <?php echo $__env->make('web.default.blog.grid-list',['post' =>$post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </section>
        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(getTemplate().'.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/rocket/resources/views/web/default/pages/home.blade.php ENDPATH**/ ?>