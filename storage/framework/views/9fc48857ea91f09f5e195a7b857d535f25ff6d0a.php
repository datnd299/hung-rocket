<meta charset="utf-8">
<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<meta name='robots' content="<?php echo e($pageRobot ?? 'NOODP, nofollow, noindex'); ?>">

<?php if(isset($pageDescription) and !empty($pageDescription)): ?>
    <meta name="description" content="<?php echo e($pageDescription); ?>">
    <meta property="og:description" content="<?php echo e((!empty($ogDescription)) ? $ogDescription : $pageDescription); ?>">
    <meta name='twitter:description' content='<?php echo e((!empty($ogDescription)) ? $ogDescription : $pageDescription); ?>'>
<?php endif; ?>
<?php
    $generalSettings['fav_icon'] = '/assets/fav.png'
?>

<link rel='shortcut icon' type='image/x-icon' href="<?php echo e(url(!empty($generalSettings['fav_icon']) ? $generalSettings['fav_icon'] : '')); ?>">
<link rel="manifest" href="/mix-manifest.json?v=4">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<meta name="theme-color" content="#FFF">
<!-- Windows Phone -->
<meta name="msapplication-starturl" content="/">
<meta name="msapplication-TileColor" content="#FFF">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-title" content="<?php echo e(!empty($generalSettings['site_name']) ? $generalSettings['site_name'] : ''); ?>">
<link rel="apple-touch-icon" href="<?php echo e(url(!empty($generalSettings['fav_icon']) ? $generalSettings['fav_icon'] : '')); ?>">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<!-- Android -->
<link rel='icon' href='<?php echo e(url(!empty($generalSettings['fav_icon']) ? $generalSettings['fav_icon'] : '')); ?>'>
<meta name="application-name" content="<?php echo e(!empty($generalSettings['site_name']) ? $generalSettings['site_name'] : ''); ?>">
<meta name="mobile-web-app-capable" content="yes">
<!-- Other -->
<meta name="layoutmode" content="fitscreen/standard">
<link rel="home" href="<?php echo e(url('')); ?>">

<!-- Open Graph -->
<meta property='og:title' content='<?php echo e($pageTitle ?? ''); ?>'>
<meta name='twitter:card' content='summary'>
<meta name='twitter:title' content='<?php echo e($pageTitle ?? ''); ?>'>

<?php
    if (empty($pageMetaImage)) {
        $pageMetaImage = !empty($generalSettings['fav_icon']) ? $generalSettings['fav_icon'] : '/';
    }
?>

<meta property='og:site_name' content='<?php echo e(url(!empty($generalSettings['site_name']) ? $generalSettings['site_name'] : '')); ?>'>
<meta property='og:image' content='<?php echo e(url($pageMetaImage)); ?>'>
<meta name='twitter:image' content='<?php echo e(url($pageMetaImage)); ?>'>
<meta property='og:locale' content='<?php echo e(url(!empty($generalSettings['locale']) ? $generalSettings['locale'] : 'en_US')); ?>'>
<meta property='og:type' content='website'>

<?php echo getSeoMetas('extra_meta_tags'); ?>


<?php /**PATH /var/www/rocket/resources/views/web/default/includes/metas.blade.php ENDPATH**/ ?>