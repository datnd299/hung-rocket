<?php
    $statisticsSettings = getStatisticsSettings();
?>

<?php if(!empty($statisticsSettings['enable_statistics'])): ?>
    <?php if(!empty($statisticsSettings['display_default_statistics']) and !empty($homeDefaultStatistics)): ?>
        <div  id="home-contact" class="stats-container <?php echo e(($heroSection == "2") ? 'page-has-hero-section-2' : ''); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-3 col-lg-3 mt-25 mt-lg-0">
                        <a href="https://www.tiktok.com/@hung_ai_creative?is_from_webapp=1&sender_device=pc" target="_blank" class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                            <div class="stat-icon-box teacher">
                                <img src="/assets/tiktok.png" alt="" class="img-fluid"/>
                            </div>

                            <h4 class="stat-title mt-1">Kênh Tiktok</h4>

                        </a>
                    </div>

                    <div class="col-6 col-sm-3 col-lg-3 mt-25 mt-lg-0">
                        <a href="https://web.facebook.com/profile.php?id=61569987181492" target="_blank" class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                            <div class="stat-icon-box student">
                                <img src="/assets/fb.png" alt="" class="img-fluid"/>
                            </div>

                            <h4 class="stat-title mt-1">Fanpage</h4>
                        </a>
                    </div>

                    <div class="col-6 col-sm-3 col-lg-3 mt-25 mt-lg-0">
                        <a href="https://www.youtube.com/@HungAIcreative/videos" target="_blank" class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                            <div class="stat-icon-box video">
                                <img src="/assets/yt.png" alt="" class="img-fluid"/>
                            </div>

                            <h4 class="stat-title mt-1">Kênh youtube</h4>
                        </a>
                    </div>

                    <div class="col-6 col-sm-3 col-lg-3 mt-25 mt-lg-0">
                        <a href="tel:0377028539" class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                            <div class="stat-icon-box course">
                                <img src="/assets/phone.png" alt="" class="img-fluid"/>
                            </div>

                            <h4 class="stat-title mt-1">Liên hệ</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php elseif(!empty($homeCustomStatistics)): ?>
        <div class="stats-container">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $homeCustomStatistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeCustomStatistic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-6 col-lg-3 mt-25 mt-lg-0">
                            <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                                <div class="stat-icon-box " style="background-color: <?php echo e($homeCustomStatistic->color); ?>">
                                    <img src="<?php echo e($homeCustomStatistic->icon); ?>" alt="<?php echo e($homeCustomStatistic->title); ?>" class="img-fluid"/>
                                </div>
                                <strong class="stat-number mt-10"><?php echo e($homeCustomStatistic->count); ?></strong>
                                <h4 class="stat-title"><?php echo e($homeCustomStatistic->title); ?></h4>
                                <p class="stat-desc mt-10"><?php echo e($homeCustomStatistic->description); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="my-40"></div>
    <?php endif; ?>
<?php else: ?>
    <div class="my-40"></div>
<?php endif; ?>
<?php /**PATH /var/www/rocket/resources/views/web/default/pages/includes/home_statistics.blade.php ENDPATH**/ ?>