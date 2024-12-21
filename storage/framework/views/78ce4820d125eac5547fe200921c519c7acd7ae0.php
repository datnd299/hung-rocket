<?php
    $socials = getSocials();
    if (!empty($socials) and count($socials)) {
        $socials = collect($socials)->sortBy('order')->toArray();
    }

    $footerColumns = getFooterColumns();
?>

<footer class="footer bg-secondary position-relative user-select-none">

    <div class="container">
        <div class="row text-white">

                <div class="col-6 col-md-3 mt-40">
                    <span class="header d-block text-white font-weight-bold">
                        Hung AI Creative
                    </span>
                    <div class="mt-20 text-white">
                        Biến AI thành tay sai của bạn
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-40 text-white">
                    <a class=" text-white" href="/pages/dieu-khoan-va-dieu-kien">Điều khoản và điều kiện</a>
                </div>
                <div class="col-6 col-md-3 mt-40 text-white">
                    <a class=" text-white" href="/pages/chinh-sach-bao-mat">Chính sách bảo mật</a>
                </div>

        </div>

        <div class="mt-40 border-blue py-25 d-flex align-items-center justify-content-between">
            <div class="footer-logo">
                <a href="/">
                    <?php if(!empty($generalSettings['footer_logo'])): ?>
                        <img src="<?php echo e($generalSettings['footer_logo']); ?>" class="img-cover" alt="footer logo">
                    <?php endif; ?>
                </a>
            </div>

            <div class="footer-social">
                <a href="tel:0377028539" target="_blank">
                    <img src="/store/1/default_images/social/whatsapp.svg" alt="Whatsapp" class="mr-15">
                </a>
                <a href="https://web.facebook.com/profile.php?id=61569987181492" target="_blank">
                    <img src="/store/1/default_images/social/facebook.svg" alt="Facebook" class="mr-15">
                </a>
            </div>
        </div>
    </div>

    <?php if(getOthersPersonalizationSettings('platform_phone_and_email_position') == 'footer'): ?>
        <div class="footer-copyright-card">
            <div class="container d-flex align-items-center justify-content-between py-15">
                <div class="font-14 text-white">
                    Hung AI Creative - Copyright 2024 all rights reserved
                </div>


















            </div>
        </div>
    <?php endif; ?>

</footer>
<?php /**PATH /var/www/rocket/resources/views/web/default/includes/footer.blade.php ENDPATH**/ ?>