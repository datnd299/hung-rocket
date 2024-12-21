@php
    $userLanguages = !empty($generalSettings['site_language']) ? [$generalSettings['site_language'] => getLanguages($generalSettings['site_language'])] : [];

    if (!empty($generalSettings['user_languages']) and is_array($generalSettings['user_languages'])) {
        $userLanguages = getLanguages($generalSettings['user_languages']);
    }

    $localLanguage = [];

    foreach($userLanguages as $key => $userLanguage) {
        $localLanguage[localeToCountryCode($key)] = $userLanguage;
    }

@endphp

<div class="top-navbar d-flex border-bottom">
    <div class="container d-flex justify-content-between flex-column flex-lg-row">
        <div class="top-contact-box border-bottom d-flex flex-column flex-md-row align-items-center justify-content-center">

            @if(getOthersPersonalizationSettings('platform_phone_and_email_position') == 'footer')
                <div class="d-flex align-items-center justify-content-center mr-15 mr-md-30">
                    @if(!empty($generalSettings['site_phone']))
                        <div class="d-flex align-items-center py-10 py-lg-0 text-dark-blue font-14">
                            <i data-feather="phone" width="20" height="20" class="mr-10"></i>
                            {{ $generalSettings['site_phone'] }}
                        </div>
                    @endif

                    @if(!empty($generalSettings['site_email']))
                        <div class="border-left mx-5 mx-lg-15 h-100"></div>

                        <div class="d-flex align-items-center py-10 py-lg-0 text-dark-blue font-14">
                            <i data-feather="mail" width="20" height="20" class="mr-10"></i>
                            {{ $generalSettings['site_email'] }}
                        </div>
                    @endif
                </div>
            @endif
        </div>

        <div class="xs-w-100 d-flex align-items-center justify-content-between ">
            <div class="d-flex">

                @include(getTemplate().'.includes.shopping-cart-dropdwon')

                <div class="border-left mx-5 mx-lg-15"></div>

                @include(getTemplate().'.includes.notification-dropdown')
            </div>

            {{-- User Menu --}}
            @include('web.default.includes.top_nav.user_menu')
        </div>
    </div>
</div>


@push('scripts_bottom')
    <link href="/assets/default/vendors/flagstrap/css/flags.css" rel="stylesheet">
    <script src="/assets/default/vendors/flagstrap/js/jquery.flagstrap.min.js"></script>
    <script src="/assets/default/js/parts/top_nav_flags.min.js"></script>
@endpush
