@php
    $statisticsSettings = getStatisticsSettings();
@endphp

@if(!empty($statisticsSettings['enable_statistics']))
    @if(!empty($statisticsSettings['display_default_statistics']) and !empty($homeDefaultStatistics))
        <div class="stats-container {{ ($heroSection == "2") ? 'page-has-hero-section-2' : '' }}">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-3 col-lg-3 mt-25 mt-lg-0">
                        <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                            <div class="stat-icon-box teacher">
                                <img src="/assets/tiktok.png" alt="" class="img-fluid"/>
                            </div>
                            <strong class="stat-number mt-10">56K+</strong>
                            <h4 class="stat-title">Tiktok Follower</h4>
{{--                            <p class="stat-desc mt-10">{{ trans('home.skillful_teachers_hint') }}</p>--}}
                        </div>
                    </div>

                    <div class="col-6 col-sm-3 col-lg-3 mt-25 mt-lg-0">
                        <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                            <div class="stat-icon-box student">
                                <img src="/assets/video.png" alt="" class="img-fluid"/>
                            </div>
                            <strong class="stat-number mt-10">50M+</strong>
                            <h4 class="stat-title">Lượt xem video</h4>
                        </div>
                    </div>

                    <div class="col-6 col-sm-3 col-lg-3 mt-25 mt-lg-0">
                        <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                            <div class="stat-icon-box video">
                                <img src="/assets/student.png" alt="" class="img-fluid"/>
                            </div>
                            <strong class="stat-number mt-10">1000+</strong>
                            <h4 class="stat-title">Học viên</h4>
                        </div>
                    </div>

                    <div class="col-6 col-sm-3 col-lg-3 mt-25 mt-lg-0">
                        <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                            <div class="stat-icon-box course">
                                <img src="/assets/video2.png" alt="" class="img-fluid"/>
                            </div>
                            <strong class="stat-number mt-10">10+</strong>
                            <h4 class="stat-title">Video/tuần</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif(!empty($homeCustomStatistics))
        <div class="stats-container">
            <div class="container">
                <div class="row">
                    @foreach($homeCustomStatistics as $homeCustomStatistic)
                        <div class="col-sm-6 col-lg-3 mt-25 mt-lg-0">
                            <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                                <div class="stat-icon-box " style="background-color: {{ $homeCustomStatistic->color }}">
                                    <img src="{{ $homeCustomStatistic->icon }}" alt="{{ $homeCustomStatistic->title }}" class="img-fluid"/>
                                </div>
                                <strong class="stat-number mt-10">{{ $homeCustomStatistic->count }}</strong>
                                <h4 class="stat-title">{{ $homeCustomStatistic->title }}</h4>
                                <p class="stat-desc mt-10">{{ $homeCustomStatistic->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <div class="my-40"></div>
    @endif
@else
    <div class="my-40"></div>
@endif
