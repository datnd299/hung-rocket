<?php
    $userLanguages = !empty($generalSettings['site_language']) ? [$generalSettings['site_language'] => getLanguages($generalSettings['site_language'])] : [];

    if (!empty($generalSettings['user_languages']) and is_array($generalSettings['user_languages'])) {
        $userLanguages = getLanguages($generalSettings['user_languages']);
    }

    $localLanguage = [];

    foreach($userLanguages as $key => $userLanguage) {
        $localLanguage[localeToCountryCode($key)] = $userLanguage;
    }

?>

<div class="top-navbar d-flex border-bottom">
    <div class="container d-flex justify-content-between flex-column flex-lg-row">
        <div class="top-contact-box border-bottom d-flex flex-column flex-md-row align-items-center justify-content-center">

            <?php if(getOthersPersonalizationSettings('platform_phone_and_email_position') == 'footer'): ?>
                <div class="d-flex align-items-center justify-content-center mr-15 mr-md-30">
                    <?php if(!empty($generalSettings['site_phone'])): ?>
                        <div class="d-flex align-items-center py-10 py-lg-0 text-dark-blue font-14">
                            <i data-feather="phone" width="20" height="20" class="mr-10"></i>
                            <?php echo e($generalSettings['site_phone']); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(!empty($generalSettings['site_email'])): ?>
                        <div class="border-left mx-5 mx-lg-15 h-100"></div>

                        <div class="d-flex align-items-center py-10 py-lg-0 text-dark-blue font-14">
                            <i data-feather="mail" width="20" height="20" class="mr-10"></i>
                            <?php echo e($generalSettings['site_email']); ?>

                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="xs-w-100 d-flex align-items-center justify-content-between ">
            <div class="d-flex">

                <?php echo $__env->make(getTemplate().'.includes.shopping-cart-dropdwon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="border-left mx-5 mx-lg-15"></div>

                <?php echo $__env->make(getTemplate().'.includes.notification-dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            
            <?php echo $__env->make('web.default.includes.top_nav.user_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>


<?php $__env->startPush('scripts_bottom'); ?>
    <link href="/assets/default/vendors/flagstrap/css/flags.css" rel="stylesheet">
    <script src="/assets/default/vendors/flagstrap/js/jquery.flagstrap.min.js"></script>
    <script src="/assets/default/js/parts/top_nav_flags.min.js"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/rocket/resources/views/web/default/includes/top_nav.blade.php ENDPATH**/ ?>