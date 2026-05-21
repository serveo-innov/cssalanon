@extends('layouts.app')

@section('title', 'Accueil – École SALANON')

@section('content')

    {{-- ==================== HERO SECTION ==================== --}}
    <section class="hero-section hero-1">
        <div class="hero-line"><img src="{{ asset('assets/img/home-1/hero-line-2.png') }}" alt=""></div>
        <div class="shape1 float-bob-y"><img src="{{ asset('assets/img/home-1/shape-1.png') }}" alt=""></div>
        <div class="shape3 float-bob-x"><img src="{{ asset('assets/img/home-1/shape-3.png') }}" alt=""></div>
        <div class="shape2"><img src="{{ asset('assets/img/home-1/shape-2.png') }}" alt=""></div>
        <div class="shape4"><img src="{{ asset('assets/img/home-1/shape-4.png') }}" alt=""></div>
        <div class="shape5"><img src="{{ asset('assets/img/home-1/shape-5.png') }}" alt=""></div>
        <div class="swiper-dot"><div class="hero-dot"></div></div>
        <div class="container">
            <div class="swiper hero-slider">
                <div class="swiper-wrapper">
                    @foreach ([
                        [
                            'img'   => 'hero-1.png',
                            'sub'   => 'Un environnement d\'apprentissage sûr et joyeux.',
                            'title' => 'Épanouir les jeunes esprits<br>pour un avenir radieux',
                            'desc'  => 'L\'École SALANON est dédiée à construire des bases solides à travers un apprentissage ludique et académique.',
                            'btn1'  => 'S\'informer',
                            'link1' => 'about',
                            'btn2'  => 'Visiter l\'école',
                            'link2' => 'contact',
                        ],
                        [
                            'img'   => 'hero-2.png',
                            'sub'   => 'Premier au CEP 2025, un élève de notre école.',
                            'title' => 'La fierté du Bénin<br>est parmi nous',
                            'desc'  => 'Félicitations à notre élève GYENOU Djafar, classé premier du Littoral au Certificat d\'Études Primaires (CEP) 2025 à l\'échelle nationale. Un résultat qui témoigne de l\'excellence de notre encadrement pédagogique.',
                            'btn1'  => 'Nos Dirigeants',
                            'link1' => 'team',
                            'btn2'  => 'Nos programmes',
                            'link2' => 'programs',
                        ],
                        [
                            'img'   => 'hero-3.png',
                            'sub'   => 'Excellence académique et épanouissement personnel.',
                            'title' => 'Des programmes adaptés <br>à chaque niveau',
                            'desc'  => 'Bientôt le groupe éveil au primaire, le CS SALANON proposera des stratégies modernes pour préparer vos enfants au succès.',
                            'btn1'  => 'Nos Dirigeants',
                            'link1' => 'team',
                            'btn2'  => 'Les programmes',
                            'link2' => 'programs',
                        ],
                    ] as $slide)
                    <div class="swiper-slide">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="hero-content">
                                    <span class="hero-sub">{{ $slide['sub'] }}</span>
                                    <h1 class="hero-title">{!! $slide['title'] !!}</h1>
                                    <p>{{ $slide['desc'] }}</p>
                                    <div class="hero-button">
                                        <a href="{{ route($slide['link1']) }}" class="theme-btn">
                                            <span class="theme-bg">
                                                <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"/></svg>
                                            </span>
                                            <span class="theme-text">{{ $slide['btn1'] }} <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                            <span class="theme-text2">{{ $slide['btn1'] }} <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                        </a>
                                        <a href="{{ route($slide['link2']) }}" class="theme-btn hover-header">
                                            <span class="theme-bg">
                                                <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#385469"/></svg>
                                            </span>
                                            <span class="theme-text">{{ $slide['btn2'] }} <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                            <span class="theme-text2">{{ $slide['btn2'] }} <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="hero-image">
                                    <img src="{{ asset('assets/img/home-1/' . $slide['img']) }}" alt="{!! $slide['title'] !!}">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== FEATURE SECTION ==================== --}}
    <section class="feature-section fix section-padding">
        <div class="penil-shape"><img src="{{ asset('assets/img/home-1/pencil1.png') }}" alt=""></div>
        <div class="zirap-shape float-bob-y"><img src="{{ asset('assets/img/home-1/zirap1.png') }}" alt=""></div>
        <div class="container">
            <div class="row g-4">
                @foreach ([
                    ['bg' => '',     'icon' => 'icon-1.svg', 'title' => 'Apprentissage actif',   'delay' => '.2s'],
                    ['bg' => 'bg-2', 'icon' => 'icon-2.svg', 'title' => 'Enseignants experts',   'delay' => '.4s'],
                    ['bg' => 'bg-3', 'icon' => 'icon-3.svg', 'title' => 'École 100% sécurisée', 'delay' => '.6s'],
                    ['bg' => 'bg-4', 'icon' => 'icon-4.svg', 'title' => 'Programme moderne',    'delay' => '.8s'],
                ] as $feature)
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $feature['delay'] }}">
                    <div class="feature-box-items">
                        <div class="feature-bg {{ $feature['bg'] }}"></div>
                        <div class="border-circle"><img src="{{ asset('assets/img/home-1/icon/border-circle.png') }}" alt=""></div>
                        <div class="icon-box">
                            <img src="{{ asset('assets/img/home-1/icon/icon-box.png') }}" alt="">
                            <div class="icon"><img src="{{ asset('assets/img/home-1/icon/' . $feature['icon']) }}" alt=""></div>
                        </div>
                        <h2>{{ $feature['title'] }}</h2>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== ABOUT SECTION ==================== --}}
    <section class="about-section fix section-padding pt-0">
        <div class="about-vec"><img src="{{ asset('assets/img/home-1/about-vec.png') }}" alt=""></div>
        <div class="about-vec2"><img src="{{ asset('assets/img/home-1/about-vec2.png') }}" alt=""></div>
        <div class="about-vec3"><img src="{{ asset('assets/img/home-1/about-3.png') }}" alt=""></div>
        <div class="about-wrapper">
            <div class="about-line"><img src="{{ asset('assets/img/home-2/about-line.png') }}" alt=""></div>
            <div class="bg-shape"></div>
            <div class="row align-items-center">
                <div class="col-xl-6 order-2 order-xl-1">
                    <div class="about-image">
                        <img src="{{ asset('assets/img/home-1/about-1.png') }}" alt="" class="wow fadeInUp">
                        <div class="about-image-2">
                            <img src="{{ asset('assets/img/home-1/about-2.png') }}" alt="" class="wow fadeInUp" data-wow-delay=".3s">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-1 order-xl-2">
                    <div class="about-content">
                        <div class="section-title mb-0">
                            <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">À propos de nous</span>
                            <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                                Inspirer la croissance par l'apprentissage au quotidien
                            </h2>
                        </div>
                        <p class="about-text wow fadeInUp">
                            L'École SALANON est dédiée à construire des bases solides à travers un apprentissage ludique et académique, dans un environnement bienveillant.
                        </p>
                        <ul class="icon-box">
                            <li class="wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon"><img src="{{ asset('assets/img/home-1/icon/check.svg') }}" alt=""></div>
                                <div class="content"><h3>Maternelle (Section I & II) <br> Milieu éducatif pensé pour l'enfant en maternelle</h3></div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon"><img src="{{ asset('assets/img/home-1/icon/check.svg') }}" alt=""></div>
                                <div class="content"><h3>Priorité à une éducation sûre <br>du 6ᵉ à Terminale ABCD</h3></div>
                            </li>
                        </ul>
                        <p class="about-text-2 wow fadeInUp" data-wow-delay=".4s">
                            À l'École SALANON, notre objectif est d'offrir à chaque enfant les meilleures chances de réussite. Notre équipe pédagogique qualifiée conçoit des activités enrichissantes et ludiques pour accompagner chaque élève vers l'excellence.
                        </p>
                        <div class="about-button wow fadeInUp" data-wow-delay=".6s">
                            <a href="{{ route('about') }}" class="theme-btn">
                                <span class="theme-bg">
                                    <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"/></svg>
                                </span>
                                <span class="theme-text">En savoir plus <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                <span class="theme-text2">En savoir plus <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                            </a>
                            <div class="author-icon">
                                <div class="icon"><img src="{{ asset('assets/img/home-1/icon/telephone.svg') }}" alt=""></div>
                                <div class="content">
                                    <span>Appelez-nous</span>
                                    <h4><a href="tel:+2290167725898">+229 01 93 83 83 92 / 01 67 72 58 98</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== PROGRAM SECTION ==================== --}}
    <section class="program-section">
        <div class="top-line"><img src="{{ asset('assets/img/home-1/top-line-1.png') }}" alt=""></div>
        <div class="bottom-line"><img src="{{ asset('assets/img/home-1/bottom-line-1.png') }}" alt=""></div>
        <div class="cat-shape"><img src="{{ asset('assets/img/home-1/cat1.png') }}" alt=""></div>
        <div class="star-shape"><img src="{{ asset('assets/img/home-1/star1-1.png') }}" alt=""></div>
        <div class="container">
            <div class="section-title text-center">
                <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Nos Programmes</span>
            </div>
        </div>
        <div class="marquee-section mt-3 mt-md-0">
            <div class="marquee wow fadeInUp" data-wow-delay=".3s">
                @for ($m = 0; $m < 2; $m++)
                <div class="marquee-group">
                    @for ($i = 0; $i < 5; $i++)
                    <div class="text">
                        <span><img src="{{ asset('assets/img/home-1/star.svg') }}" alt=""></span>
                        Nos Programmes / Classes
                    </div>
                    @endfor
                </div>
                @endfor
            </div>
        </div>
        <div class="container">
            <div class="program-wrapper">
                <div class="border-shape"><img src="{{ asset('assets/img/home-1/border-shape.png') }}" alt=""></div>
                <div class="program-bg"></div>
                <div class="program-wrap-items swiper program-slider">
                    <div class="swiper-wrapper wow fadeInUp" data-wow-delay=".3s">
                        @foreach ([
                            ['img' => 'program-01.jpg', 'bg' => '',     'age' => '3-5 ans',  'title' => 'Maternelle I & II',          'slug' => 'maternelle',  'color' => '',        'delay' => '.2s'],
                            ['img' => 'program-02.jpg', 'bg' => 'bg-2', 'age' => '5-10 ans', 'title' => 'Primaire',                   'slug' => 'primaire',    'color' => 'color-2', 'delay' => '.4s'],
                            ['img' => 'program-03.jpg', 'bg' => 'bg-3', 'age' => '10 ans+',  'title' => 'Secondaire (Cycle I & II)',  'slug' => 'secondaire', 'color' => 'color-3', 'delay' => '.6s'],
                        ] as $program)
                        <div class="swiper-slide">
                            <div class="program-main-box-items">
                                <div class="program-box-items">
                                    <div class="item-bg {{ $program['bg'] }}"></div>
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/home-1/' . $program['img']) }}" alt="">
                                        <img src="{{ asset('assets/img/home-1/' . $program['img']) }}" alt="">
                                    </div>
                                    <div class="content">
                                        <span class="post-box">{{ $program['age'] }}</span>
                                        <h2><a href="{{ route('program.show', $program['slug']) }}">{{ $program['title'] }}</a></h2>
                                        <p>Enseignement de qualité à travers des cours, des ateliers et des activités pour développer les compétences scolaires et l'épanouissement personnel.</p>
                                        <span class="duration-text {{ $program['color'] }}">durée : Définie</span>
                                    </div>
                                </div>
                                <div class="arrow-btn">
                                    <a href="{{ route('program.show', $program['slug']) }}" class="icon">
                                        <span class="bg {{ $program['bg'] }}"></span>
                                        <div class="arrow-icon">
                                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.9" d="M10.4774 0.235515C10.4486 0.324309 10.3906 0.401968 10.3481 0.413358C10.3039 0.425186 10.2772 0.456482 10.2854 0.487064C10.2932 0.516037 10.3487 0.527039 10.4092 0.51083C10.5024 0.48586 10.5282 0.516891 10.5826 0.719701C10.6417 0.940217 10.6354 0.962599 10.5003 1.01432C10.4052 1.05187 10.3572 1.10788 10.3643 1.18016C10.3684 1.24118 10.334 1.34182 10.2881 1.40588C10.1502 1.59118 10.2828 1.69366 10.5608 1.61919C10.7684 1.56355 10.7947 1.5703 10.7964 1.66818C10.7973 1.73694 10.7444 1.80114 10.6604 1.83402C10.551 1.87712 10.5242 1.92744 10.5304 2.08794C10.5331 2.19592 10.5645 2.33932 10.5969 2.40137C10.6469 2.49664 10.6946 2.50456 10.9022 2.44893C11.1802 2.37446 11.2363 2.43359 11.042 2.5978C10.885 2.73129 10.8869 2.90847 11.0481 2.96708C11.1124 2.99125 11.1439 3.01731 11.1161 3.02476C10.9858 3.06142 7.91162 4.06627 6.70975 4.46594C4.75645 5.11526 0.833265 6.46321 0.706193 6.53176C0.568108 6.60499 0.554427 6.75012 0.680896 6.82319C0.755711 6.86698 0.865862 6.85299 1.09001 6.77395C1.37008 6.67475 1.36156 6.68221 0.982483 6.86314C0.458688 7.11218 0.32957 7.21233 0.386872 7.32809C0.446671 7.44663 0.61575 7.39098 2.14734 6.73734C2.85502 6.43558 3.69849 6.10434 4.02443 5.99975L4.61668 5.81001L3.82596 6.12884C3.1397 6.40588 1.19342 7.27759 0.669029 7.54404C0.534555 7.61113 0.495859 7.6629 0.517423 7.74338C0.554083 7.8802 0.574906 7.87289 2.06431 7.1926C2.7509 6.87752 3.76737 6.44644 4.31993 6.23283C5.44304 5.80078 8.64131 4.72298 9.27782 4.56106L9.68827 4.45798L9.3738 4.59227C8.90884 4.79276 5.0965 6.27317 2.94114 7.0905C1.48737 7.6422 1.01337 7.84166 0.868177 7.96683C0.658035 8.1439 0.510962 8.43863 0.605576 8.49091C0.675827 8.53074 2.90589 7.71755 6.77693 6.24039C8.52083 5.57472 9.57125 5.19838 9.73587 5.17842L9.9906 5.14812L9.69969 5.26575C9.54017 5.33092 7.88996 5.94733 6.0348 6.63592C4.17963 7.3245 2.34985 8.00973 1.97032 8.15628C1.58958 8.30488 1.13433 8.46309 0.94958 8.5126C0.601343 8.60591 0.351623 8.79876 0.553279 8.81891C0.605436 8.82391 1.91433 8.35933 3.46215 7.78587C7.37985 6.33244 8.39974 6.00568 5.65794 7.0802C4.86997 7.38967 4.01929 7.7332 3.75867 7.84616C3.50013 7.96029 2.67446 8.27296 1.92778 8.54032C-0.077117 9.25867 -0.0192129 9.2328 0.00731647 9.41029C0.0360925 9.6027 0.137387 9.60143 0.658203 9.40668C0.997382 9.27957 1.08412 9.26322 1.14148 9.32031C1.20133 9.38018 1.26543 9.35783 1.65886 9.14545C2.26815 8.81658 2.2555 8.82169 5.04582 7.84975C9.12026 6.43195 9.55635 6.31338 6.35332 7.49769C3.6095 8.51237 1.19337 9.46167 1.13017 9.55279C1.1024 9.59301 0.971624 9.66083 0.838514 9.70685C0.602494 9.78734 0.598883 9.79348 0.64805 9.97698L0.698512 10.1653L1.20068 10.0187L1.70122 9.87248L1.79541 10.0801C1.84651 10.1924 1.92575 10.2919 1.96723 10.2963C2.01035 10.3003 3.02498 9.94734 4.2178 9.51386C6.92919 8.52857 9.53322 7.61346 10.4829 7.31241C10.882 7.1865 11.3173 7.03881 11.447 6.98679C11.6257 6.91475 11.6737 6.91054 11.6404 6.96948C11.6144 7.01614 10.5803 7.42087 9.04874 7.98307C4.4149 9.68705 1.45548 10.8061 1.40225 10.8756C1.37361 10.9126 1.38273 11.0447 1.42204 11.1652C1.47895 11.3449 1.51599 11.3851 1.61263 11.373C1.67734 11.366 3.98261 10.5326 6.72815 9.52438C9.4737 8.51614 11.8504 7.65504 12.0048 7.6102C12.1953 7.55573 12.3338 7.54966 12.4414 7.59156C12.62 7.66275 12.8203 7.9265 12.8738 8.15887C12.8934 8.24505 12.9699 8.35395 13.0439 8.40139C13.118 8.44883 13.2256 8.55627 13.2842 8.64409C13.38 8.78576 13.3798 8.80478 13.2817 8.83107C13.2212 8.84728 13.1686 8.89934 13.1643 8.94879C13.1501 9.08543 13.324 9.17857 13.4551 9.10549C13.5479 9.05301 13.5863 9.07205 13.6851 9.21812C13.7964 9.38496 13.8132 9.38907 14.0025 9.31075C14.1649 9.24309 14.2129 9.24575 14.2566 9.32375C14.3254 9.44332 14.5385 9.39486 14.5539 9.25617C14.5597 9.1994 14.5225 9.14554 14.4566 9.12181C14.363 9.0865 14.3887 9.04511 14.6663 8.79302C14.8394 8.63451 15.1032 8.45513 15.2468 8.39595C15.3937 8.33589 15.5499 8.26472 15.6012 8.23373C15.6964 8.17716 15.6742 8.01577 15.561 7.95294C15.5072 7.92248 15.5325 7.87948 15.6472 7.8039C15.7367 7.74543 15.8552 7.68433 15.9124 7.669C16.0073 7.64359 16.0208 7.58303 15.9608 7.44386C15.9464 7.40976 16.0319 7.32992 16.154 7.26268C16.6041 7.01961 16.6275 6.99606 16.6023 6.82341C16.5893 6.73547 16.6192 6.61185 16.6709 6.5497C17.3886 5.67077 17.6967 5.36222 17.9656 5.25394C18.2659 5.13208 18.425 4.94108 18.331 4.81272C18.2784 4.74057 18.4645 4.45434 18.5839 4.42236C18.6133 4.41447 18.7131 4.29631 18.8004 4.16424C19.1129 3.69578 19.8074 2.82824 19.8859 2.80721C20.0592 2.76078 19.9105 2.61776 19.5482 2.48195C19.2501 2.3703 19.1583 2.30866 19.1335 2.20316C19.1056 2.07952 19.0863 2.07263 18.909 2.13048C18.7591 2.17926 18.6556 2.1656 18.4476 2.06952C17.5219 1.63611 15.0025 0.905172 12.5915 0.36946C12.1628 0.273845 11.7681 0.16742 11.7189 0.134037C11.6696 0.100653 11.5567 0.091231 11.4684 0.114887C11.3703 0.141171 11.2478 0.122234 11.1556 0.0658578C10.922 -0.0734017 10.5508 0.0191645 10.4774 0.235515Z" fill="#385469"/></svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-dot"><div class="dot2"></div></div>
            </div>
        </div>
    </section>

    {{-- ==================== CHOOSE US SECTION ==================== --}}
    {{-- Chaque onglet a son propre texte, sa propre liste et ses propres boutons --}}
    @php
    $chooseTabs = [
        'Facilities' => [
            'label'  => 'Nos installations',
            'active' => true,
            'desc'   => 'Nos salles de classe sont confortables, lumineuses et équipées de matériel pédagogique adapté à chaque niveau. Les élèves évoluent dans un cadre sûr et stimulant.',
            'items'  => [
                'Salles confortables et bien équipées',
                'Espace de récréation sécurisé',
                'Bibliothèque et salle informatique',
                'Sanitaires propres et accessibles',
            ],
            'btn1_label' => 'Visiter l\'école',
            'btn1_route' => 'contact',
            'btn2_label' => 'Nos programmes',
            'btn2_route' => 'programs',
        ],
        'Curriculum' => [
            'label'  => 'Programme & Pédagogie',
            'active' => false,
            'desc'   => 'Nos programmes suivent le cursus officiel béninois, enrichi de méthodes pédagogiques actives. Chaque élève progresse à son rythme grâce à un encadrement individualisé.',
            'items'  => [
                'Programme officiel béninois respecté',
                'Méthodes pédagogiques modernes',
                'Activités parascolaires intégrées',
                'Suivi personnalisé de chaque élève',
            ],
            'btn1_label' => 'Voir les programmes',
            'btn1_route' => 'programs',
            'btn2_label' => 'Nos enseignants',
            'btn2_route' => 'team',
        ],
        'Mission' => [
            'label'  => 'Mission & Vision',
            'active' => false,
            'desc'   => 'Notre mission est de former des citoyens épanouis, cultivés et responsables. Notre vision : être l\'école de référence au Bénin, alliant excellence académique et valeurs humaines.',
            'items'  => [
                'Former des élèves complets et épanouis',
                'Promouvoir les valeurs morales et civiques',
                'Viser l\'excellence à chaque niveau',
                'Tisser des liens forts avec les familles',
            ],
            'btn1_label' => 'À propos de nous',
            'btn1_route' => 'about',
            'btn2_label' => 'Nous contacter',
            'btn2_route' => 'contact',
        ],
    ];
    $checkSvg = '<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.8836 2.14995C19.8708 2.0905 19.8439 2.03311 19.782 1.98439C19.2172 1.53727 17.882 -0.265658 17.0051 0.0332479C15.7819 0.450643 9.05689 9.29809 7.56608 11.248C7.04547 10.504 2.70927 4.55606 2.4917 4.68941C1.7465 5.14479 0.977351 5.53411 0.265592 6.04811C0.185911 6.10591 0.145039 6.18063 0.133066 6.25701C0.0356327 6.33298 -0.0267081 6.4589 0.0112744 6.61289C0.622297 9.09414 2.69978 11.0482 4.18357 13.0026C5.0452 14.1376 6.2466 16.9945 7.86622 15.6457C7.89388 15.6226 7.9104 15.5962 7.92856 15.5693C8.24646 15.4397 8.51853 15.1874 8.8034 14.8803C10.0378 13.5509 11.1245 12.0902 12.2697 10.6816C13.4938 9.17547 14.8517 7.76558 16.1964 6.37509C17.3705 5.16089 18.4134 3.55324 19.7973 2.60367C19.9698 2.48436 19.9703 2.28743 19.8836 2.14995Z" fill="#F39F5F"/></svg>';
    @endphp

    <section class="choose-us-section fix section-padding">
        <div class="shape1"><img src="{{ asset('assets/img/home-1/choose-us-shape1.png') }}" alt=""></div>
        <div class="shape2 float-bob-y"><img src="{{ asset('assets/img/home-1/choose-us-shape2.png') }}" alt=""></div>
        <div class="shape3 float-bob-y"><img src="{{ asset('assets/img/home-1/choose-us-shape3.png') }}" alt=""></div>
        <div class="container">
            <div class="choose-us-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-us-content">
                            <div class="section-title mb-0">
                                <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Pourquoi nous choisir ?</span>
                                <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">Pourquoi choisir notre école</h2>
                            </div>
                            <ul class="nav wow fadeInUp" data-wow-delay=".3s">
                                @foreach ($chooseTabs as $tabId => $tab)
                                <li class="nav-item">
                                    <a href="#{{ $tabId }}" data-bs-toggle="tab" class="nav-link {{ $tab['active'] ? 'active' : '' }}">
                                        {{ $tab['label'] }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach ($chooseTabs as $tabId => $tab)
                                <div id="{{ $tabId }}" class="tab-pane fade {{ $tab['active'] ? 'show active' : '' }}">
                                    <div class="choose-items {{ $tab['active'] ? 'wow fadeInUp' : '' }}" {{ $tab['active'] ? 'data-wow-delay=".3s"' : '' }}>
                                        <p>{{ $tab['desc'] }}</p>
                                        <div class="about-list-items">
                                            <ul>
                                                @foreach (array_slice($tab['items'], 0, 2) as $item)
                                                <li>
                                                    <div class="icon">{!! $checkSvg !!}</div>
                                                    {{ $item }}
                                                </li>
                                                @endforeach
                                            </ul>
                                            <ul>
                                                @foreach (array_slice($tab['items'], 2) as $item)
                                                <li>
                                                    <div class="icon">{!! $checkSvg !!}</div>
                                                    {{ $item }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="choose-us-button {{ $tab['active'] ? 'wow fadeInUp' : '' }}" {{ $tab['active'] ? 'data-wow-delay=".5s"' : '' }}>
                                        <a href="{{ route($tab['btn1_route']) }}" class="theme-btn">
                                            <span class="theme-bg"><svg width="170" height="59" viewBox="0 0 170 59" fill="none"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"/></svg></span>
                                            <span class="theme-text">{{ $tab['btn1_label'] }} <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                            <span class="theme-text2">{{ $tab['btn1_label'] }} <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                        </a>
                                        <a href="{{ route($tab['btn2_route']) }}" class="theme-btn hover-header">
                                            <span class="theme-bg"><svg width="170" height="59" viewBox="0 0 170 59" fill="none"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#385469"/></svg></span>
                                            <span class="theme-text">{{ $tab['btn2_label'] }} <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                            <span class="theme-text2">{{ $tab['btn2_label'] }} <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-us-image-items wow fadeInUp" data-wow-delay=".3s">
                            <div class="choose-us-image">
                                <img src="{{ asset('assets/img/home-1/choose-us.jpg') }}" alt="">
                            </div>
                            <div class="vec-shape"><img src="{{ asset('assets/img/home-1/vac-shape.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== COUNTER SECTION ==================== --}}
    <section class="counter-section fix section-padding pt-0">
        <div class="container">
            <div class="row g-4">
                @foreach ([
                    ['count' => '100', 'label' => 'Salles confortables',  'fill' => '#FEF4DE', 'active' => false, 'bg' => ''],
                    ['count' => '95',  'label' => 'Aire de jeux bientôt', 'fill' => '#C0EEFF', 'active' => true,  'bg' => 'bg-2'],
                    ['count' => '100', 'label' => 'Sécurité des enfants', 'fill' => '#E6E8FC', 'active' => false, 'bg' => 'bg-3'],
                    ['count' => '99',  'label' => 'Environnement propre', 'fill' => '#FEDFEF', 'active' => false, 'bg' => 'bg-4'],
                ] as $i => $counter)
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{ ($i + 1) * 0.2 }}s">
                    <div class="counter-box-items {{ $counter['active'] ? 'active' : '' }}">
                        <svg width="330" height="330" viewBox="0 0 330 330" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M330 200.106C330 297.696 240.218 330 154.752 330C69.2846 330 0 297.696 0 200.106C0 102.516 69.2846 0 154.752 0C240.218 0 330 102.516 330 200.106Z" fill="{{ $counter['fill'] }}"/></svg>
                        <div class="counter-box">
                            <h2><span class="count">{{ $counter['count'] }}</span>%</h2>
                            <p>{{ $counter['label'] }}</p>
                            <div class="bg-shape {{ $counter['bg'] }}"></div>
                        </div>
                        <div class="bg-image"><img src="{{ asset('assets/img/home-1/counter-bg.png') }}" alt=""></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== ACTIVITIES SECTION ==================== --}}
    <section class="activities-section fix section-padding bg-cover" style="background-image: url('{{ asset('assets/img/home-1/classes-bg.png') }}');">
        <div class="container">
            <div class="section-title text-center">
                <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Nos projets périscolaires</span>
                <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">Nos projets périscolaires pour les enfants</h2>
            </div>
            @foreach ([
                ['num' => '01', 'title' => 'Art & Artisanat',  'img' => 'activities-image.jpg',   'active' => false, 'delay' => '.3s'],
                ['num' => '02', 'title' => 'Musique & Danse',  'img' => 'activities-image-2.jpg', 'active' => true,  'delay' => '.5s'],
                ['num' => '03', 'title' => 'Journée sportive', 'img' => 'activities-image-3.jpg', 'active' => false, 'delay' => '.7s'],
            ] as $activity)
            <div class="activities-wrapper-items {{ $activity['active'] ? 'active' : '' }} wow fadeInUp" data-wow-delay="{{ $activity['delay'] }}">
                <div class="bg-shape"></div>
                <div class="content">
                    <span>{{ $activity['num'] }}</span>
                    <h3><a href="{{ route('events') }}">{{ $activity['title'] }}</a></h3>
                </div>
                <div class="right-items">
                    <div class="thumb-items">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/home-1/' . $activity['img']) }}" alt="">
                            <img src="{{ asset('assets/img/home-1/' . $activity['img']) }}" alt="">
                        </div>
                        <a href="{{ route('events') }}" class="icon">
                            <span class="bg"></span>
                            <div class="arrow-icon">
                                <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.9" d="M10.4774 0.235515C10.4486 0.324309 10.3906 0.401968 10.3481 0.413358C10.3039 0.425186 10.2772 0.456482 10.2854 0.487064C10.2932 0.516037 10.3487 0.527039 10.4092 0.51083C10.5024 0.48586 10.5282 0.516891 10.5826 0.719701C10.6417 0.940217 10.6354 0.962599 10.5003 1.01432C10.4052 1.05187 10.3572 1.10788 10.3643 1.18016C10.3684 1.24118 10.334 1.34182 10.2881 1.40588C10.1502 1.59118 10.2828 1.69366 10.5608 1.61919C10.7684 1.56355 10.7947 1.5703 10.7964 1.66818C10.7973 1.73694 10.7444 1.80114 10.6604 1.83402C10.551 1.87712 10.5242 1.92744 10.5304 2.08794C10.5331 2.19592 10.5645 2.33932 10.5969 2.40137C10.6469 2.49664 10.6946 2.50456 10.9022 2.44893C11.1802 2.37446 11.2363 2.43359 11.042 2.5978C10.885 2.73129 10.8869 2.90847 11.0481 2.96708C11.1124 2.99125 11.1439 3.01731 11.1161 3.02476C10.9858 3.06142 7.91162 4.06627 6.70975 4.46594C4.75645 5.11526 0.833265 6.46321 0.706193 6.53176C0.568108 6.60499 0.554427 6.75012 0.680896 6.82319C0.755711 6.86698 0.865862 6.85299 1.09001 6.77395C1.37008 6.67475 1.36156 6.68221 0.982483 6.86314C0.458688 7.11218 0.32957 7.21233 0.386872 7.32809C0.446671 7.44663 0.61575 7.39098 2.14734 6.73734C2.85502 6.43558 3.69849 6.10434 4.02443 5.99975L4.61668 5.81001L3.82596 6.12884C3.1397 6.40588 1.19342 7.27759 0.669029 7.54404C0.534555 7.61113 0.495859 7.6629 0.517423 7.74338C0.554083 7.8802 0.574906 7.87289 2.06431 7.1926C2.7509 6.87752 3.76737 6.44644 4.31993 6.23283C5.44304 5.80078 8.64131 4.72298 9.27782 4.56106L9.68827 4.45798L9.3738 4.59227C8.90884 4.79276 5.0965 6.27317 2.94114 7.0905C1.48737 7.6422 1.01337 7.84166 0.868177 7.96683C0.658035 8.1439 0.510962 8.43863 0.605576 8.49091C0.675827 8.53074 2.90589 7.71755 6.77693 6.24039C8.52083 5.57472 9.57125 5.19838 9.73587 5.17842L9.9906 5.14812L9.69969 5.26575C9.54017 5.33092 7.88996 5.94733 6.0348 6.63592C4.17963 7.3245 2.34985 8.00973 1.97032 8.15628C1.58958 8.30488 1.13433 8.46309 0.94958 8.5126C0.601343 8.60591 0.351623 8.79876 0.553279 8.81891C0.605436 8.82391 1.91433 8.35933 3.46215 7.78587C7.37985 6.33244 8.39974 6.00568 5.65794 7.0802C4.86997 7.38967 4.01929 7.7332 3.75867 7.84616C3.50013 7.96029 2.67446 8.27296 1.92778 8.54032C-0.077117 9.25867 -0.0192129 9.2328 0.00731647 9.41029C0.0360925 9.6027 0.137387 9.60143 0.658203 9.40668C0.997382 9.27957 1.08412 9.26322 1.14148 9.32031C1.20133 9.38018 1.26543 9.35783 1.65886 9.14545C2.26815 8.81658 2.2555 8.82169 5.04582 7.84975C9.12026 6.43195 9.55635 6.31338 6.35332 7.49769C3.6095 8.51237 1.19337 9.46167 1.13017 9.55279C1.1024 9.59301 0.971624 9.66083 0.838514 9.70685C0.602494 9.78734 0.598883 9.79348 0.64805 9.97698L0.698512 10.1653L1.20068 10.0187L1.70122 9.87248L1.79541 10.0801C1.84651 10.1924 1.92575 10.2919 1.96723 10.2963C2.01035 10.3003 3.02498 9.94734 4.2178 9.51386C6.92919 8.52857 9.53322 7.61346 10.4829 7.31241C10.882 7.1865 11.3173 7.03881 11.447 6.98679C11.6257 6.91475 11.6737 6.91054 11.6404 6.96948C11.6144 7.01614 10.5803 7.42087 9.04874 7.98307C4.4149 9.68705 1.45548 10.8061 1.40225 10.8756C1.37361 10.9126 1.38273 11.0447 1.42204 11.1652C1.47895 11.3449 1.51599 11.3851 1.61263 11.373C1.67734 11.366 3.98261 10.5326 6.72815 9.52438C9.4737 8.51614 11.8504 7.65504 12.0048 7.6102C12.1953 7.55573 12.3338 7.54966 12.4414 7.59156C12.62 7.66275 12.8203 7.9265 12.8738 8.15887C12.8934 8.24505 12.9699 8.35395 13.0439 8.40139C13.118 8.44883 13.2256 8.55627 13.2842 8.64409C13.38 8.78576 13.3798 8.80478 13.2817 8.83107C13.2212 8.84728 13.1686 8.89934 13.1643 8.94879C13.1501 9.08543 13.324 9.17857 13.4551 9.10549C13.5479 9.05301 13.5863 9.07205 13.6851 9.21812C13.7964 9.38496 13.8132 9.38907 14.0025 9.31075C14.1649 9.24309 14.2129 9.24575 14.2566 9.32375C14.3254 9.44332 14.5385 9.39486 14.5539 9.25617C14.5597 9.1994 14.5225 9.14554 14.4566 9.12181C14.363 9.0865 14.3887 9.04511 14.6663 8.79302C14.8394 8.63451 15.1032 8.45513 15.2468 8.39595C15.3937 8.33589 15.5499 8.26472 15.6012 8.23373C15.6964 8.17716 15.6742 8.01577 15.561 7.95294C15.5072 7.92248 15.5325 7.87948 15.6472 7.8039C15.7367 7.74543 15.8552 7.68433 15.9124 7.669C16.0073 7.64359 16.0208 7.58303 15.9608 7.44386C15.9464 7.40976 16.0319 7.32992 16.154 7.26268C16.6041 7.01961 16.6275 6.99606 16.6023 6.82341C16.5893 6.73547 16.6192 6.61185 16.6709 6.5497C17.3886 5.67077 17.6967 5.36222 17.9656 5.25394C18.2659 5.13208 18.425 4.94108 18.331 4.81272C18.2784 4.74057 18.4645 4.45434 18.5839 4.42236C18.6133 4.41447 18.7131 4.29631 18.8004 4.16424C19.1129 3.69578 19.8074 2.82824 19.8859 2.80721C20.0592 2.76078 19.9105 2.61776 19.5482 2.48195C19.2501 2.3703 19.1583 2.30866 19.1335 2.20316C19.1056 2.07952 19.0863 2.07263 18.909 2.13048C18.7591 2.17926 18.6556 2.1656 18.4476 2.06952C17.5219 1.63611 15.0025 0.905172 12.5915 0.36946C12.1628 0.273845 11.7681 0.16742 11.7189 0.134037C11.6696 0.100653 11.5567 0.091231 11.4684 0.114887C11.3703 0.141171 11.2478 0.122234 11.1556 0.0658578C10.922 -0.0734017 10.5508 0.0191645 10.4774 0.235515Z" fill="white"/></svg>
                            </div>
                        </a>
                    </div>
                    <p class="text">Des enseignants qualifiés qui comprennent les besoins de chaque enfant, grâce à un apprentissage ludique et académique.</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- ==================== SCHEDULE SECTION ==================== --}}
    {{-- Chaque onglet a ses propres créneaux horaires --}}
    @php
    $scheduleTabs = [
        'Play' => [
            'label'  => 'Groupe Éveil',
            'active' => true,
            'slots'  => [
                ['time' => '7h00 – 8h00',   'desc' => 'Accueil des enfants, jeux libres et éveil sensoriel.', 'bg' => '',     'delay' => '.2s'],
                ['time' => '8h00 – 9h30',   'desc' => 'Activités créatives : dessin, peinture, modelage.', 'bg' => 'bg-2', 'delay' => '.4s'],
                ['time' => '9h30 – 10h30',  'desc' => 'Éveil musical, comptines et mouvements rythmés.', 'bg' => 'bg-3', 'delay' => '.6s'],
                ['time' => '10h30 – 12h00', 'desc' => 'Jeux éducatifs, lecture d\'images et sieste.', 'bg' => 'bg-4', 'delay' => '.8s'],
            ],
        ],
        'Nursery' => [
            'label'  => 'Maternelle',
            'active' => false,
            'slots'  => [
                ['time' => '7h00 – 8h00',   'desc' => 'Accueil, révision des leçons et rituels matinaux.', 'bg' => '',     'delay' => '.2s'],
                ['time' => '8h00 – 10h00',  'desc' => 'Cours de lecture, écriture et calcul élémentaire.', 'bg' => 'bg-2', 'delay' => '.4s'],
                ['time' => '10h00 – 11h00', 'desc' => 'Récréation, sport et activités libres surveillées.', 'bg' => 'bg-3', 'delay' => '.6s'],
                ['time' => '11h00 – 12h30', 'desc' => 'Activités d\'expression : chant, dessin, narration.', 'bg' => 'bg-4', 'delay' => '.8s'],
            ],
        ],
        'Kindergarten' => [
            'label'  => 'Primaire (KG)',
            'active' => false,
            'slots'  => [
                ['time' => '7h00 – 8h00',   'desc' => 'Accueil et révisions, devoirs surveillés.', 'bg' => '',     'delay' => '.2s'],
                ['time' => '8h00 – 10h30',  'desc' => 'Cours de français, mathématiques et sciences.', 'bg' => 'bg-2', 'delay' => '.4s'],
                ['time' => '10h30 – 11h00', 'desc' => 'Récréation et collation.', 'bg' => 'bg-3', 'delay' => '.6s'],
                ['time' => '11h00 – 13h00', 'desc' => 'Histoire-géographie, éducation civique et arts.', 'bg' => 'bg-4', 'delay' => '.8s'],
            ],
        ],
    ];
    @endphp

    <section class="schedule-section fix section-padding">
        <div class="vec-5 bz-gsap-animate-circle d-none d-xl-block"><img src="{{ asset('assets/img/home-1/vec5.png') }}" alt=""></div>
        <div class="container">
            <div class="section-title-area bb-bottom align-items-end">
                <div class="section-title">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Emploi du temps</span>
                    <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">Notre emploi du temps journalier</h2>
                </div>
                <ul class="nav mt-0 justify-content-center justify-content-lg-start wow fadeInUp" data-wow-delay=".3s">
                    @foreach ($scheduleTabs as $tabId => $tab)
                    <li class="nav-item">
                        <a href="#{{ $tabId }}" data-bs-toggle="tab" class="nav-link {{ $tab['active'] ? 'active' : '' }}">
                            {{ $tab['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="tab-content">
                @foreach ($scheduleTabs as $tabId => $tab)
                <div id="{{ $tabId }}" class="tab-pane fade {{ $tab['active'] ? 'show active' : '' }}">
                    <div class="row">
                        @foreach ($tab['slots'] as $slot)
                        <div class="col-xl-3 col-lg-4 col-md-6 {{ $tab['active'] ? 'wow fadeInUp' : '' }}" {{ $tab['active'] ? 'data-wow-delay="' . $slot['delay'] . '"' : '' }}>
                            <div class="schedule-box-items">
                                <div class="bg-shape {{ $slot['bg'] }}"></div>
                                <div class="icon"><img src="{{ asset('assets/img/home-1/pocket-watch.png') }}" alt=""></div>
                                <div class="content">
                                    <h3>{{ $slot['time'] }}</h3>
                                    <p>{{ $slot['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== BOOK ADMISSION BANNER ==================== --}}
    <section class="book-admission-banner bg-cover section-padding" style="background-image: url('{{ asset('assets/img/home-1/book-admission-bg.png') }}');">
        <div class="container">
            <div class="book-admission-content">
                <div class="bg-shape">
                    <img src="{{ asset('assets/img/home-1/book-bg.png') }}" alt="">
                    <div class="bg-shape2"><img src="{{ asset('assets/img/home-1/book-bg2.png') }}" alt=""></div>
                </div>
                <div class="content">
                    <div class="section-title mb-0">
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Inscriptions ouvertes</span>
                        <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">Inscription à l'école<br>SALANON</h2>
                    </div>
                    <div class="info-content wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon"><img src="{{ asset('assets/img/home-1/icon/phone.svg') }}" alt=""></div>
                        <div class="info-cont">
                            <p>Appelez-nous dès maintenant</p>
                            <h3><a href="tel:+2290167725898">+229 01 93 83 83 92</a></h3>
                        </div>
                    </div>
                </div>
                <div class="vec-1"><img src="{{ asset('assets/img/home-1/vec6.png') }}" alt=""></div>
                <div class="vec-2"><img src="{{ asset('assets/img/home-1/vec7.png') }}" alt=""></div>
            </div>
        </div>
    </section>

    {{-- ==================== TEAM SECTION ==================== --}}
    <section class="team-section fix section-padding">
        <div class="pencil-shape"><img src="{{ asset('assets/img/home-1/pencil2.png') }}" alt=""></div>
        <div class="vec-shape"><img src="{{ asset('assets/img/home-1/vec8.png') }}" alt=""></div>
        <div class="vec-shape2"><img src="{{ asset('assets/img/home-1/vec9.png') }}" alt=""></div>
        <div class="container">
            <div class="section-title text-center">
                <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Nos enseignants</span>
                <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">Notre équipe pédagogique</h2>
            </div>
            <div class="swiper team-slider wow fadeInUp" data-wow-delay=".3s">
                <div class="swiper-wrapper">
                    @foreach ([
                        ['img' => 'team-1.png', 'bg' => 'team-bg.png',  'name' => 'Dawson Timms',   'role' => 'Professeur de sport', 'slug' => 'dawson-timms'],
                        ['img' => 'team-2.png', 'bg' => 'team-bg2.png', 'name' => 'Michele Bailey', 'role' => 'Directrice',          'slug' => 'michele-bailey'],
                        ['img' => 'team-3.png', 'bg' => 'team-bg3.png', 'name' => 'Brian Marsh',    'role' => 'Enseignant senior',   'slug' => 'brian-marsh'],
                        ['img' => 'team-4.png', 'bg' => 'team-bg4.png', 'name' => 'Sarah Dupont',   'role' => 'Enseignante',         'slug' => 'aria-sophia'],
                    ] as $member)
                    <div class="swiper-slide">
                        <div class="team-single-items">
                            <div class="bg-shape">
                                <img src="{{ asset('assets/img/home-1/' . $member['bg']) }}" alt="">
                                <div class="items">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/home-1/' . $member['img']) }}" alt="">
                                        <div class="social-icon d-flex align-items-center">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="{{ route('team.show', $member['slug']) }}">{{ $member['name'] }}</a></h3>
                                        <p>{{ $member['role'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-dot text-center mt-5"><div class="dotss"></div></div>
        </div>
    </section>

    {{-- ==================== FAQ SECTION ==================== --}}
    {{-- Chaque question a sa propre réponse distinctive --}}
    @php
    $faqs = [
        [
            'q'      => 'À quel âge mon enfant peut-il s\'inscrire ?',
            'a'      => 'Le CS SALANON accueille les enfants dès l\'âge de 3 ans en Maternelle Section I. Les inscriptions sont ouvertes toute l\'année sous réserve des places disponibles.',
            'active' => true,
        ],
        [
            'q'      => 'Quels sont les horaires de l\'école ?',
            'a'      => 'L\'école est ouverte du lundi au samedi de 7h00 à 19h30. Les cours se déroulent de 7h30 à 12h30 le matin et de 14h30 à 17h30 l\'après-midi selon les niveaux.',
            'active' => false,
        ],
        [
            'q'      => 'Un service de transport est-il disponible ?',
            'a'      => 'Un service de ramassage scolaire est en cours de mise en place pour les familles du quartier et des environs. Contactez-nous pour en savoir plus sur les disponibilités.',
            'active' => false,
        ],
        [
            'q'      => 'Comment faire une demande d\'admission ?',
            'a'      => 'Il vous suffit de vous présenter directement à l\'école avec les documents requis (acte de naissance, carnet de santé, photos d\'identité) ou de nous contacter par téléphone pour prendre rendez-vous.',
            'active' => false,
        ],
    ];
    $faqSvg = '<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.23648 0.105787C9.05424 0.810401 9.17318 1.66949 9.18478 2.39223C9.19887 3.26717 9.24767 4.15775 9.42971 5.01705C8.15505 5.1307 6.91117 5.15039 5.66719 5.15515C3.85535 5.16168 2.06982 5.13754 0.28512 5.23928C0.261498 5.24063 0.248651 5.25441 0.231867 5.26415C0.156339 5.28135 0.0928289 5.33781 0.0963515 5.43893C0.154474 7.08707 0.0382291 8.73458 0.0754233 10.3822C-0.0380241 10.4403 -0.0201005 10.6369 0.106401 10.6492C0.159965 10.7292 0.279111 10.7221 0.322314 10.6312C2.55075 10.37 4.80996 10.7056 7.04078 10.6689C7.94007 10.6516 8.77544 10.5828 9.60335 10.406C9.4438 11.9811 8.82237 13.776 9.29481 15.2288C9.31584 15.2937 9.39293 15.3144 9.44328 15.2681C9.576 15.2102 13.2202 13.1551 16.8216 10.4453C19.9434 7.65212 20.0426 7.56333 19.9982 7.44419L19.9115 7.38741C18.4433 5.18323 16.0637 4.06399 13.924 2.62669C12.5897 1.73062 11.06 0.606093 9.56698 0.0100574C9.52647 -0.00610542 9.4928 0.00466919 9.46359 0.0238361C9.38578 -0.0253754 9.26352 0.00145817 9.23648 0.105787Z" fill="#385469"/></svg>';
    @endphp

    <section class="faq-section">
        <div class="top-shape"><img src="{{ asset('assets/img/home-1/faq-top.png') }}" alt=""></div>
        <div class="bottom-shape"><img src="{{ asset('assets/img/home-1/faq-bottom.png') }}" alt=""></div>
        <div class="plane-shape"><img src="{{ asset('assets/img/home-1/plane.png') }}" alt=""></div>
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="faq-image wow fadeInUp" data-wow-delay=".3s">
                        <div class="faq-shape"><img src="{{ asset('assets/img/home-1/faq-shape.png') }}" alt=""></div>
                        <img src="{{ asset('assets/img/home-1/faq-image.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-content-1">
                        <div class="section-title mb-0">
                            <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">FAQ</span>
                            <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">Questions fréquemment posées</h2>
                        </div>
                        <p class="faq-text wow fadeInUp" data-wow-delay=".3s">
                            Retrouvez les réponses claires aux interrogations les plus courantes sur notre complexe, nos programmes et nos inscriptions.
                        </p>
                        <ul class="accordion-box">
                            @foreach ($faqs as $i => $faq)
                            <li class="accordion block {{ $faq['active'] ? 'active-block' : '' }} wow fadeInUp" data-wow-delay="{{ $i * 0.2 }}s">
                                <div class="acc-btn {{ $faq['active'] ? 'active' : '' }}">
                                    {{ $faq['q'] }}
                                    <div class="icon">{!! $faqSvg !!}</div>
                                </div>
                                <div class="acc-content {{ $faq['active'] ? 'current' : '' }}">
                                    <div class="content">
                                        <div class="text">{{ $faq['a'] }}</div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== TESTIMONIAL SECTION ==================== --}}
    {{-- Chaque témoignage a son propre texte distinctif --}}
    @php
    $testimonials = [
        [
            'img'  => 'client-1.png',
            'name' => 'Mme Ahouansou — Maternelle',
            'text' => 'Depuis que mon fils est au CS SALANON, il a fait des progrès remarquables. Les enseignants sont attentifs et bienveillants. Je recommande cette école à toutes les familles de Cotonou.',
        ],
        [
            'img'  => 'client-2.png',
            'name' => 'M. Dossou — Primaire',
            'text' => 'Ma fille a été suivie avec soin tout au long de son cycle primaire. Grâce au CS SALANON, elle a obtenu d\'excellents résultats au CEP. Une école sérieuse qui tient ses promesses.',
        ],
        [
            'img'  => 'client-3.png',
            'name' => 'Mme Houédanou — Groupe Éveil',
            'text' => 'L\'ambiance de l\'école est chaleureuse et rassurante. Mon enfant part le matin avec enthousiasme. Les activités créatives proposées sont vraiment adaptées à son âge.',
        ],
        [
            'img'  => 'client-4.png',
            'name' => 'M. Agbessi — Maternelle',
            'text' => 'Le cadre est propre, sécurisé et bien organisé. Le personnel est à l\'écoute des parents. Je suis fier d\'avoir choisi le CS SALANON pour l\'éducation de mes enfants.',
        ],
        [
            'img'  => 'client-5.png',
            'name' => 'Mme Kpêdé — Primaire',
            'text' => 'Les résultats de mon enfant se sont nettement améliorés depuis son entrée au CS SALANON. Les cours sont bien structurés et les enseignants très qualifiés. Merci à toute l\'équipe.',
        ],
    ];
    @endphp

    <section class="testimonial-section section-padding">
        <div class="container">
            <div class="section-title-area justify-content-center justify-content-md-between">
                <div class="section-title text-center text-md-start">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Témoignages</span>
                    <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">Les parents parlent<br>de notre école</h2>
                </div>
                <div class="swiper-dot"><div class="dot"></div></div>
            </div>
        </div>
        <div class="swiper testimonial-slider wow fadeInUp" data-wow-delay=".3s">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $testi)
                <div class="swiper-slide">
                    <div class="tetsimonial-box-items">
                        <div class="bg-shape">
                            <svg width="450" height="300" viewBox="0 0 450 300" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M77.7685 247.017L284.532 240.901C304.533 293.733 351.651 300 389.691 300C353.7 279.414 341.525 253.992 337.398 239.338L385.784 237.906C408.797 238.889 429.115 221.682 433.91 197.155L448.955 120.229C454.074 94.0514 439.935 67.9614 416.414 60.1912L256.779 7.44649C231.174 -1.01557 204.019 -2.28806 177.84 3.74434L37.5302 36.0696C12.673 41.7958 -3.59179 67.8778 0.680723 95.1489L32.9692 204.201C36.7378 228.204 55.4236 246.062 77.7685 247.017Z" fill="#FEF4DE"/></svg>
                        </div>
                        <div class="content">
                            <div class="client-img"><img src="{{ asset('assets/img/home-1/' . $testi['img']) }}" alt=""></div>
                            <h3>{{ $testi['name'] }}</h3>
                            <p>{{ $testi['text'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== NEWSLETTER SECTION ==================== --}}
    <section class="newsletter-section section-padding pt-0">
        <div class="zirap-shape float-bob-y d-none d-xl-block"><img src="{{ asset('assets/img/home-1/zirap2.png') }}" alt=""></div>
        <div class="container">
            <div class="newsletter-wrapper">
                <div class="newsletter-bg"><img src="{{ asset('assets/img/home-1/cta-newsletter-bg.jpg') }}" alt=""></div>
                <div class="border-shape"><img src="{{ asset('assets/img/home-1/border-shape2.png') }}" alt=""></div>
                <div class="vec-1"><img src="{{ asset('assets/img/home-1/vec2.png') }}" alt=""></div>
                <div class="vec-2"><img src="{{ asset('assets/img/home-1/vec3.png') }}" alt=""></div>
                <div class="vec-3 float-bob-y"><img src="{{ asset('assets/img/home-1/vec4.png') }}" alt=""></div>
                <div class="content">
                    <div class="section-title mb-0">
                        <span class="text-white sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Newsletter</span>
                        <h2 class="text-white tx-title sec_title tz-itm-title tz-itm-anim">Abonnez-vous à notre newsletter</h2>
                    </div>
                    <form action="#" class="newsletter-items wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon"><i class="fa-light fa-envelope"></i></div>
                        <div class="form-clt"><input type="text" name="email" placeholder="Votre adresse email"></div>
                        <button class="subscribe-btn">S'abonner</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== NEWS SECTION ==================== --}}
    <section class="news-section">
        <div class="top-line-1"><img src="{{ asset('assets/img/home-1/top-line-2.png') }}" alt=""></div>
        <div class="bottom-line-1"><img src="{{ asset('assets/img/home-1/bottom-line-2.png') }}" alt=""></div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Actualités</span>
                    <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">Dernières nouvelles et articles</h2>
                </div>
            </div>
            <div class="row">
                @foreach ([
                    ['img' => 'news-1.jpg', 'slug' => 'importance-education-prescolaire',    'title' => 'Pourquoi l\'éducation préscolaire est essentielle pour votre enfant', 'delay' => '.3s'],
                    ['img' => 'news-2.jpg', 'slug' => 'activites-ludiques-creativite',        'title' => 'Activités ludiques qui stimulent la créativité des enfants',         'delay' => '.5s'],
                    ['img' => 'news-3.jpg', 'slug' => 'environnement-positif-jeunes-esprits', 'title' => 'Comment un environnement scolaire positif façonne les jeunes esprits', 'delay' => '.7s'],
                ] as $news)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{ $news['delay'] }}">
                    <div class="news-box-items">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/home-1/' . $news['img']) }}" alt="">
                            <img src="{{ asset('assets/img/home-1/' . $news['img']) }}" alt="">
                        </div>
                        <div class="content">
                            <ul>
                                <li><i class="fa-regular fa-calendar"></i> 22 Déc, 2025</li>
                                <li><i class="fa-regular fa-comment"></i> 25 Commentaires</li>
                            </ul>
                            <h3><a href="{{ route('news.show', $news['slug']) }}">{{ $news['title'] }}</a></h3>
                            <div class="arrow-btn">
                                <a href="{{ route('news.show', $news['slug']) }}" class="icon">
                                    <span class="bg"></span>
                                    <div class="arrow-icon">
                                        <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.9" d="M10.4774 0.235515C10.4486 0.324309 10.3906 0.401968 10.3481 0.413358C10.3039 0.425186 10.2772 0.456482 10.2854 0.487064C10.2932 0.516037 10.3487 0.527039 10.4092 0.51083C10.5024 0.48586 10.5282 0.516891 10.5826 0.719701C10.6417 0.940217 10.6354 0.962599 10.5003 1.01432C10.4052 1.05187 10.3572 1.10788 10.3643 1.18016C10.3684 1.24118 10.334 1.34182 10.2881 1.40588C10.1502 1.59118 10.2828 1.69366 10.5608 1.61919C10.7684 1.56355 10.7947 1.5703 10.7964 1.66818C10.7973 1.73694 10.7444 1.80114 10.6604 1.83402C10.551 1.87712 10.5242 1.92744 10.5304 2.08794C10.5331 2.19592 10.5645 2.33932 10.5969 2.40137C10.6469 2.49664 10.6946 2.50456 10.9022 2.44893C11.1802 2.37446 11.2363 2.43359 11.042 2.5978C10.885 2.73129 10.8869 2.90847 11.0481 2.96708C11.1124 2.99125 11.1439 3.01731 11.1161 3.02476C10.9858 3.06142 7.91162 4.06627 6.70975 4.46594C4.75645 5.11526 0.833265 6.46321 0.706193 6.53176C0.568108 6.60499 0.554427 6.75012 0.680896 6.82319C0.755711 6.86698 0.865862 6.85299 1.09001 6.77395C1.37008 6.67475 1.36156 6.68221 0.982483 6.86314C0.458688 7.11218 0.32957 7.21233 0.386872 7.32809C0.446671 7.44663 0.61575 7.39098 2.14734 6.73734C2.85502 6.43558 3.69849 6.10434 4.02443 5.99975L4.61668 5.81001L3.82596 6.12884C3.1397 6.40588 1.19342 7.27759 0.669029 7.54404C0.534555 7.61113 0.495859 7.6629 0.517423 7.74338C0.554083 7.8802 0.574906 7.87289 2.06431 7.1926C2.7509 6.87752 3.76737 6.44644 4.31993 6.23283C5.44304 5.80078 8.64131 4.72298 9.27782 4.56106L9.68827 4.45798L9.3738 4.59227C8.90884 4.79276 5.0965 6.27317 2.94114 7.0905C1.48737 7.6422 1.01337 7.84166 0.868177 7.96683C0.658035 8.1439 0.510962 8.43863 0.605576 8.49091C0.675827 8.53074 2.90589 7.71755 6.77693 6.24039C8.52083 5.57472 9.57125 5.19838 9.73587 5.17842L9.9906 5.14812L9.69969 5.26575C9.54017 5.33092 7.88996 5.94733 6.0348 6.63592C4.17963 7.3245 2.34985 8.00973 1.97032 8.15628C1.58958 8.30488 1.13433 8.46309 0.94958 8.5126C0.601343 8.60591 0.351623 8.79876 0.553279 8.81891C0.605436 8.82391 1.91433 8.35933 3.46215 7.78587C7.37985 6.33244 8.39974 6.00568 5.65794 7.0802C4.86997 7.38967 4.01929 7.7332 3.75867 7.84616C3.50013 7.96029 2.67446 8.27296 1.92778 8.54032C-0.077117 9.25867 -0.0192129 9.2328 0.00731647 9.41029C0.0360925 9.6027 0.137387 9.60143 0.658203 9.40668C0.997382 9.27957 1.08412 9.26322 1.14148 9.32031C1.20133 9.38018 1.26543 9.35783 1.65886 9.14545C2.26815 8.81658 2.2555 8.82169 5.04582 7.84975C9.12026 6.43195 9.55635 6.31338 6.35332 7.49769C3.6095 8.51237 1.19337 9.46167 1.13017 9.55279C1.1024 9.59301 0.971624 9.66083 0.838514 9.70685C0.602494 9.78734 0.598883 9.79348 0.64805 9.97698L0.698512 10.1653L1.20068 10.0187L1.70122 9.87248L1.79541 10.0801C1.84651 10.1924 1.92575 10.2919 1.96723 10.2963C2.01035 10.3003 3.02498 9.94734 4.2178 9.51386C6.92919 8.52857 9.53322 7.61346 10.4829 7.31241C10.882 7.1865 11.3173 7.03881 11.447 6.98679C11.6257 6.91475 11.6737 6.91054 11.6404 6.96948C11.6144 7.01614 10.5803 7.42087 9.04874 7.98307C4.4149 9.68705 1.45548 10.8061 1.40225 10.8756C1.37361 10.9126 1.38273 11.0447 1.42204 11.1652C1.47895 11.3449 1.51599 11.3851 1.61263 11.373C1.67734 11.366 3.98261 10.5326 6.72815 9.52438C9.4737 8.51614 11.8504 7.65504 12.0048 7.6102C12.1953 7.55573 12.3338 7.54966 12.4414 7.59156C12.62 7.66275 12.8203 7.9265 12.8738 8.15887C12.8934 8.24505 12.9699 8.35395 13.0439 8.40139C13.118 8.44883 13.2256 8.55627 13.2842 8.64409C13.38 8.78576 13.3798 8.80478 13.2817 8.83107C13.2212 8.84728 13.1686 8.89934 13.1643 8.94879C13.1501 9.08543 13.324 9.17857 13.4551 9.10549C13.5479 9.05301 13.5863 9.07205 13.6851 9.21812C13.7964 9.38496 13.8132 9.38907 14.0025 9.31075C14.1649 9.24309 14.2129 9.24575 14.2566 9.32375C14.3254 9.44332 14.5385 9.39486 14.5539 9.25617C14.5597 9.1994 14.5225 9.14554 14.4566 9.12181C14.363 9.0865 14.3887 9.04511 14.6663 8.79302C14.8394 8.63451 15.1032 8.45513 15.2468 8.39595C15.3937 8.33589 15.5499 8.26472 15.6012 8.23373C15.6964 8.17716 15.6742 8.01577 15.561 7.95294C15.5072 7.92248 15.5325 7.87948 15.6472 7.8039C15.7367 7.74543 15.8552 7.68433 15.9124 7.669C16.0073 7.64359 16.0208 7.58303 15.9608 7.44386C15.9464 7.40976 16.0319 7.32992 16.154 7.26268C16.6041 7.01961 16.6275 6.99606 16.6023 6.82341C16.5893 6.73547 16.6192 6.61185 16.6709 6.5497C17.3886 5.67077 17.6967 5.36222 17.9656 5.25394C18.2659 5.13208 18.425 4.94108 18.331 4.81272C18.2784 4.74057 18.4645 4.45434 18.5839 4.42236C18.6133 4.41447 18.7131 4.29631 18.8004 4.16424C19.1129 3.69578 19.8074 2.82824 19.8859 2.80721C20.0592 2.76078 19.9105 2.61776 19.5482 2.48195C19.2501 2.3703 19.1583 2.30866 19.1335 2.20316C19.1056 2.07952 19.0863 2.07263 18.909 2.13048C18.7591 2.17926 18.6556 2.1656 18.4476 2.06952C17.5219 1.63611 15.0025 0.905172 12.5915 0.36946C12.1628 0.273845 11.7681 0.16742 11.7189 0.134037C11.6696 0.100653 11.5567 0.091231 11.4684 0.114887C11.3703 0.141171 11.2478 0.122234 11.1556 0.0658578C10.922 -0.0734017 10.5508 0.0191645 10.4774 0.235515Z" fill="white"/></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== BRAND SECTION ==================== --}}
    <div class="brand-section fix section-padding">
        <div class="container">
            <p class="text-center wow fadeInUp" data-wow-delay=".3s">Nos partenaires</p>
            <div class="swiper brand-slider wow fadeInUp" data-wow-delay=".5s">
                <div class="swiper-wrapper">
                    @for ($b = 1; $b <= 7; $b++)
                    <div class="swiper-slide">
                        <div class="brand-box-1">
                            <span class="brand-img-1"><img src="{{ asset('assets/img/home-1/brand-' . $b . '.png') }}" alt=""></span>
                            <span class="brand-img-1"><img src="{{ asset('assets/img/home-1/brand-hover-' . $b . '.png') }}" alt=""></span>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    {{-- ==================== INSTAGRAM SECTION ==================== --}}
    <div class="instagram-wrapper section-padding pt-0 wow fadeInUp" data-wow-delay=".3s">
        <div class="instagram-section">
            @for ($ig = 1; $ig <= 5; $ig++)
                @for ($r = 1; $r <= 4; $r++)
                <div class="instagram-image">
                    <img src="{{ asset('assets/img/home-1/instagram-' . $ig . '.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/home-1/instagram-' . $ig . '.jpg') }}" alt="">
                    <a href="#" class="icon">
                        <i class="fa-brands fa-instagram"></i> Instagram, galerie
                    </a>
                </div>
                @endfor
            @endfor
        </div>
    </div>

@endsection