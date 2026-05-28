@extends('layouts.app')

@section('title', 'À propos – École SALANON')

@section('content')

    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb-bg.png') }}');">
        <div class="shape-1"><img src="{{ asset('assets/img/shape1.png') }}" alt=""></div>
        <div class="shape-2"><img src="{{ asset('assets/img/shape-2.png') }}" alt=""></div>
        <div class="shape-3"><img src="{{ asset('assets/img/shape-3.png') }}" alt=""></div>
        <div class="shape-4"><img src="{{ asset('assets/img/shape-4.png') }}" alt=""></div>
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">À propos de nous</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ route('home') }}">
                            <i class="fa-solid fa-house"></i> Accueil
                        </a>
                    </li>
                    <li>/</li>
                    <li>À propos</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Feature Section --}}
    <section class="feature-section fix section-padding pb-0">
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

    {{-- About Section --}}
    <section class="about-section fix section-padding">
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
                            <a href="{{ route('contact') }}" class="theme-btn">
                                <span class="theme-bg">
                                    <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"/>
                                    </svg>
                                </span>
                                <span class="theme-text">En savoir plus <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                <span class="theme-text2">En savoir plus <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                            </a>
                            <div class="author-icon">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/home-1/icon/telephone.svg') }}" alt="">
                                </div>
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

    {{-- ==================== COUNTER SECTION ==================== --}}
    @php
    $counters = [
        [
            'count'  => '100',
            'label'  => 'Salles confortables',
            'fill'   => '#FEF4DE',
            'active' => false,
            'bg'     => '',
            'img'    => 'counter-bg.png',
        ],
        [
            'count'  => '95',
            'label'  => 'Aire de jeux bientôt',
            'fill'   => '#C0EEFF',
            'active' => true,
            'bg'     => 'bg-2',
            'img'    => 'counter1-bg.png',
        ],
        [
            'count'  => '100',
            'label'  => 'Sécurité des enfants',
            'fill'   => '#E6E8FC',
            'active' => false,
            'bg'     => 'bg-3',
            'img'    => 'counter2-bg.png',
        ],
        [
            'count'  => '99',
            'label'  => 'Environnement propre',
            'fill'   => '#FEDFEF',
            'active' => false,
            'bg'     => 'bg-4',
            'img'    => 'counter3-bg.png',
        ],
    ];
    @endphp

    <section class="counter-section fix section-padding pt-0">
        <div class="container">
            <div class="row g-4">
                @foreach ($counters as $i => $counter)
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{ ($i + 1) * 0.2 }}s">
                    <div class="counter-box-items {{ $counter['active'] ? 'active' : '' }}">
                        <svg width="330" height="330" viewBox="0 0 330 330" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M330 200.106C330 297.696 240.218 330 154.752 330C69.2846 330 0 297.696 0 200.106C0 102.516 69.2846 0 154.752 0C240.218 0 330 102.516 330 200.106Z" fill="{{ $counter['fill'] }}"/>
                        </svg>
                        <div class="counter-box">
                            <h2><span class="count">{{ $counter['count'] }}</span>%</h2>
                            <p>{{ $counter['label'] }}</p>
                            <div class="bg-shape {{ $counter['bg'] }}"></div>
                        </div>
                        <div class="bg-image">
                            <img src="{{ asset('assets/img/home-1/' . $counter['img']) }}" alt="{{ $counter['label'] }}">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why Choose Us Section --}}
    <section class="why-choose-us-section-3 inner-style fix section-padding how-work-section-3 bg-cover"
             style="background-image: url('{{ asset('assets/img/inner-page/choose-us-bg.png') }}');">
        <div class="doll-shape bz-gsap-animate-circle">
            <img src="{{ asset('assets/img/home-3/ball.png') }}" alt="">
        </div>
        <div class="girl-shape bz-gsap-animate-circle">
            <img src="{{ asset('assets/img/home-3/girl.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Pourquoi nous choisir</span>
                <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                    Pourquoi les familles<br>nous font confiance
                </h2>
            </div>
            <div class="why-choose-wrapper-3">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <ul class="values-list">
                            <li>
                                <div class="icon"><img src="{{ asset('assets/img/home-2/icon/check3.svg') }}" alt=""></div>
                                <div class="content">
                                    <h3 class="title">Priorité à une éducation sûre et de qualité</h3>
                                </div>
                            </li>
                            <li class="active">
                                <div class="icon"><img src="{{ asset('assets/img/home-2/icon/check3.svg') }}" alt=""></div>
                                <div class="content">
                                    <h3 class="title">Enseignants qualifiés et vérifiés</h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><img src="{{ asset('assets/img/home-2/icon/check3.svg') }}" alt=""></div>
                                <div class="content">
                                    <h3 class="title">L'enfant au cœur de chaque décision</h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 order-2 order-xl-1 wow fadeInUp" data-wow-delay=".5s">
                        <div class="choose-us-image">
                            <img src="{{ asset('assets/img/home-3/choose-us.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 order-1 order-xl-2 wow fadeInUp" data-wow-delay=".7s">
                        <ul class="values-list style-2">
                            <li>
                                <div class="icon"><img src="{{ asset('assets/img/home-2/icon/check3.svg') }}" alt=""></div>
                                <div class="content">
                                    <h3 class="title">Environnement bienveillant et stimulant</h3>
                                </div>
                            </li>
                            <li class="active">
                                <div class="icon"><img src="{{ asset('assets/img/home-2/icon/check3.svg') }}" alt=""></div>
                                <div class="content">
                                    <h3 class="title">Suivi personnalisé de chaque élève</h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><img src="{{ asset('assets/img/home-2/icon/check3.svg') }}" alt=""></div>
                                <div class="content">
                                    <h3 class="title">Valeurs morales et sociales au programme</h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== SCHEDULE SECTION ==================== --}}
    {{--
        GUIDE : Les 3 onglets correspondent aux 3 niveaux de l'école.
        Chaque onglet a :
        • 'label'       → nom affiché sur le bouton
        • 'slug_program'→ lie vers la page détail du programme correspondant
        • 'active'      → true = affiché par défaut
        • 'slots'       → liste des créneaux horaires avec 'time' et 'desc' distincts
    --}}
    @php
    $scheduleTabs = [
        'Maternelle' => [
            'label'        => 'Maternelle',
            'slug_program' => 'maternelle',
            'active'       => true,
            'slots'        => [
                ['time' => '8h30 – 9h30',   'desc' => '',          'bg' => '',     'delay' => '.2s'],
                ['time' => '10h00 – 11h30',   'desc' => '', 'bg' => 'bg-2', 'delay' => '.4s'],
                ['time' => '15h00 – 15h30',  'desc' => '',                 'bg' => 'bg-3', 'delay' => '.6s'],
                ['time' => '16h00 – 16h30', 'desc' => '',             'bg' => 'bg-4', 'delay' => '.8s'],
            ],
        ],
        'Primaire' => [
            'label'        => 'Primaire',
            'slug_program' => 'primaire',
            'active'       => false,
            'slots'        => [
                ['time' => '7h00 – 10h00',   'desc' => '',         'bg' => '',     'delay' => '.2s'],
                ['time' => '10h30 – 12h00',  'desc' => '', 'bg' => 'bg-2', 'delay' => '.4s'],
                ['time' => '15h00 – 16h00', 'desc' => '',         'bg' => 'bg-3', 'delay' => '.6s'],
                ['time' => '16h30 – 17h00', 'desc' => '',       'bg' => 'bg-4', 'delay' => '.8s'],
            ],
        ],
        'Secondaire' => [
            'label'        => 'Secondaire',
            'slug_program' => 'secondaire',
            'active'       => false,
            'slots'        => [
                ['time' => '7h00 – 10h00',   'desc' => '',         'bg' => '',     'delay' => '.2s'],
                ['time' => '10h30 – 12h00',  'desc' => '',   'bg' => 'bg-2', 'delay' => '.4s'],
                ['time' => '15h00 – 17h00', 'desc' => '',               'bg' => 'bg-3', 'delay' => '.6s'],
                ['time' => '17h00 – 19h00', 'desc' => '',       'bg' => 'bg-4', 'delay' => '.8s'],
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
                        <a href="#schedule-{{ $tabId }}" data-bs-toggle="tab" class="nav-link {{ $tab['active'] ? 'active' : '' }}">
                            {{ $tab['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="tab-content">
                @foreach ($scheduleTabs as $tabId => $tab)
                <div id="schedule-{{ $tabId }}" class="tab-pane fade {{ $tab['active'] ? 'show active' : '' }}">
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
                    {{-- Lien vers la page détail du programme correspondant --}}
                    <div class="text-center mt-4 wow fadeInUp" data-wow-delay=".3s">
                        <a href="{{ route('program.show', $tab['slug_program']) }}" class="theme-btn">
                            <span class="theme-bg"><svg width="170" height="59" viewBox="0 0 170 59" fill="none"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"/></svg></span>
                            <span class="theme-text">En savoir plus<img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                            <span class="theme-text2">En savoir plus<img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                        </a>
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

    {{-- Team Section --}}
    <section class="team-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Notre équipe pédagogique</span>
                <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">Nos enseignants experts</h2>
            </div>
        </div>
        <div class="swiper team-slider-inner wow fadeInUp" data-wow-delay=".3s">
            <div class="swiper-wrapper">
                @foreach ([
                    ['img' => 'team-1.png', 'bg' => 'team-bg.png',  'name' => 'Dawson Timms',   'role' => 'Professeur de sport'],
                    ['img' => 'team-2.png', 'bg' => 'team-bg2.png', 'name' => 'Michele Bailey', 'role' => 'Directrice'],
                    ['img' => 'team-3.png', 'bg' => 'team-bg3.png', 'name' => 'Brian Marsh',    'role' => 'Enseignant senior'],
                    ['img' => 'team-4.png', 'bg' => 'team-bg4.png', 'name' => 'Sarah Dupont',   'role' => 'Enseignante'],
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
                                    <h3><a href="{{ route('team') }}">{{ $member['name'] }}</a></h3>
                                    <p>{{ $member['role'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="swiper-dot text-center mt-5">
            <div class="dotss"></div>
        </div>
    </section>

    {{-- Testimonial Section --}}
    <section class="testimonial-section-inner section-padding">
        <div class="container">
            <div class="testimonial-wrapper-3 p-0 mb-0">
                <div class="section-title-area">
                    <div class="section-title">
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Témoignages</span>
                        <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                            Ce que disent les parents<br>de nos élèves
                        </h2>
                    </div>
                    <div class="array-button wow fadeInUp">
                        <button class="array-prev">
                            <img src="{{ asset('assets/img/home-3/arrow-left.png') }}" alt="">
                        </button>
                        <button class="array-next">
                            <img src="{{ asset('assets/img/home-3/arrow-right.png') }}" alt="">
                        </button>
                    </div>
                </div>
                <div class="swiper testimonial-slider-inner">
                    <div class="swiper-wrapper">
                        @foreach ([
                            [
                                'text'   => 'Depuis que mon fils est au CS SALANON, il a fait des progrès remarquables. Les enseignants sont attentifs et bienveillants. Je recommande cette école à toutes les familles de Cotonou.',
                                'author' => 'Mme Ahouansou',
                                'city'   => 'Maternelle',
                                'img'    => 'client-1.png',
                            ],
                            [
                                'text'   => "Ma fille a été suivie avec soin tout au long de son cycle primaire. Grâce au CS SALANON, elle a obtenu d'excellents résultats au CEP. Une école sérieuse qui tient ses promesses.",
                                'author' => 'M. Dossou',
                                'city'   => 'Primaire',
                                'img'    => 'client-2.png',
                            ],
                            [
                                'text'   => "L'ambiance de l'école est chaleureuse et rassurante. Mon enfant part le matin avec enthousiasme. Les activités créatives proposées sont vraiment adaptées à son âge.",
                                'author' => 'Mme Houédanou',
                                'city'   => 'Secondaire',
                                'img'    => 'client-3.png',
                            ],
                            [
                                'text'   => "Le cadre est propre, sécurisé et bien organisé. Le personnel est à l'écoute des parents. Je suis fier d'avoir choisi le CS SALANON pour l'éducation de mes enfants.",
                                'author' => 'M. Agbessi',
                                'city'   => 'Maternelle',
                                'img'    => 'client-4.png',
                            ],
                            [
                                'text'   => "Les résultats de mon enfant se sont nettement améliorés depuis son entrée au CS SALANON. Les cours sont bien structurés et les enseignants très qualifiés. Merci à toute l'équipe.",
                                'author' => 'Mme Kpêdé',
                                'city'   => 'Primaire',
                                'img'    => 'client-5.png',
                            ],
                        ] as $testimonial)
                        <div class="swiper-slide">
                            <div class="testimonial-box-items-3">
                                <div class="quote-icon">
                                    <svg width="39" height="30" viewBox="0 0 39 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.64725 1.65902C10.0126 0.301374 11.2931 -0.225102 12.5042 0.0873093C13.7037 0.399721 14.4654 1.16148 14.7836 2.36677C15.096 3.57206 14.6236 4.85834 13.3662 6.21791C10.4311 9.36517 8.54119 12.4546 7.70809 15.4977C9.5922 15.7098 11.1099 16.4658 12.267 17.7772C13.4183 19.0885 13.9968 20.7431 13.9968 22.7333C13.9968 24.8295 13.3354 26.5613 12.0298 27.919C10.7184 29.2824 9.01173 29.9631 6.91548 29.9631C4.71896 29.9631 3.01034 29.2072 1.80697 27.6837C0.601682 26.166 0 24.1449 0 21.6283C0 17.8543 0.784887 14.2153 2.35659 10.7016C3.93407 7.18792 6.02454 4.17567 8.64725 1.65902ZM32.7107 1.65902C34.0683 0.301374 35.3565 -0.225102 36.5618 0.0873093C37.7671 0.399721 38.5289 1.16148 38.8413 2.36677C39.1537 3.57206 38.687 4.85834 37.4296 6.21791C34.4887 9.36517 32.6046 12.4546 31.7657 15.4977C33.6556 15.7098 35.1733 16.4658 36.3266 17.7772C37.4778 19.0885 38.0564 20.7431 38.0564 22.7333C38.0564 24.8295 37.4007 26.5613 36.0893 27.919C34.778 29.2824 33.0771 29.9631 30.9808 29.9631C28.7766 29.9631 27.0699 29.2072 25.8723 27.6837C24.6612 26.166 24.0596 24.1449 24.0596 21.6283C24.0596 17.8543 24.8502 14.2153 26.4219 10.7016C27.9917 7.18792 30.088 4.17567 32.7107 1.65902Z" fill="#F39F5F"/>
                                    </svg>
                                </div>
                                <p class="text">{{ $testimonial['text'] }}</p>
                                <div class="testimonial-bottom">
                                    <div class="client-info">
                                        <div class="client-img">
                                            <img src="{{ asset('assets/img/home-1/' . $testimonial['img']) }}" alt="">
                                        </div>
                                        <div class="info-content">
                                            <p><b>{{ $testimonial['author'] }},</b> {{ $testimonial['city'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Brand Section --}}
    <div class="brand-section fix style-2 section-padding">
        <div class="container">
            <p class="text-center wow fadeInUp" data-wow-delay=".3s">Nos partenaires</p>
            <div class="swiper brand-slider wow fadeInUp" data-wow-delay=".5s">
                <div class="swiper-wrapper">
                    @for ($b = 1; $b <= 7; $b++)
                    <div class="swiper-slide">
                        <div class="brand-box-1">
                            <span class="brand-img-1">
                                <img src="{{ asset('assets/img/home-1/brand-' . $b . '.png') }}" alt="">
                            </span>
                            <span class="brand-img-1">
                                <img src="{{ asset('assets/img/home-1/brand-hover-' . $b . '.png') }}" alt="">
                            </span>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    {{-- Instagram Gallery --}}
    <div class="instagram-wrapper section-padding pt-0 wow fadeInUp" data-wow-delay=".3s">
        <div class="instagram-section">
            @for ($ig = 1; $ig <= 5; $ig++)
            <div class="instagram-image">
                <img src="{{ asset('assets/img/home-1/instagram-' . $ig . '.jpg') }}" alt="">
                <img src="{{ asset('assets/img/home-1/instagram-' . $ig . '.jpg') }}" alt="">
                <a href="https://web.facebook.com/CSSALANON" target="_blank" class="icon">
                    <i class="fa-brands fa-facebook"></i> Facebook
                </a>
            </div>
            @endfor
        </div>
    </div>

@endsection