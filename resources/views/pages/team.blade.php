@extends('layouts.app')

@section('title', 'Notre Équipe – CS SALANON')

@section('content')

    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb-bg.png') }}');">
        <div class="shape-1"><img src="{{ asset('assets/img/shape1.png') }}" alt=""></div>
        <div class="shape-2"><img src="{{ asset('assets/img/shape-2.png') }}" alt=""></div>
        <div class="shape-3"><img src="{{ asset('assets/img/shape-3.png') }}" alt=""></div>
        <div class="shape-4"><img src="{{ asset('assets/img/shape-4.png') }}" alt=""></div>
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Nos Enseignants</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a></li>
                    <li>/</li>
                    <li>Nos Enseignants</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="team-section-inner section-padding">
        <div class="top-line"><img src="{{ asset('assets/img/inner-page/top-line.png') }}" alt=""></div>
        <div class="container">
            <div class="section-title text-center">
                <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Notre équipe pédagogique</span>
                <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">Des enseignants passionnés<br>au service de vos enfants</h2>
            </div>
            <div class="row">
                @foreach ($members as $i => $member)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{ ($i % 3 * 0.2 + 0.3) . 's' }}">
                    <div class="team-single-items">
                        <div class="bg-shape">
                            <img src="{{ asset('assets/img/home-1/' . $member['bg']) }}" alt="">
                            <div class="items">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/home-1/' . $member['image']) }}" alt="{{ $member['nom'] }}">
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="{{ $member['social']['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ $member['social']['twitter'] }}"><i class="fab fa-twitter"></i></a>
                                        <a href="{{ $member['social']['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="{{ $member['social']['youtube'] }}"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('team.show', $member['slug']) }}">{{ $member['nom'] }}</a></h3>
                                    <p>{{ $member['role'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="bottom-line"><img src="{{ asset('assets/img/inner-page/bottom-line.png') }}" alt=""></div>
    </section>

    <section class="choose-us-section-2 section-padding">
        <div class="men-shape bz-gsap-animate-circle"><img src="{{ asset('assets/img/home-2/shape/man.png') }}" alt=""></div>
        <div class="girl-shape bz-gsap-animate-circle"><img src="{{ asset('assets/img/home-2/shape/girl.png') }}" alt=""></div>
        <div class="container">
            <div class="choose-us-wrapper-2">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="choose-us-thumb">
                            <div class="shape1"><img src="{{ asset('assets/img/home-2/shape/choose-shape.png') }}" alt=""></div>
                            <div class="thumb"><img src="{{ asset('assets/img/home-2/choose-us.jpg') }}" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-us-content">
                            <div class="section-title mb-0">
                                <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Pourquoi nous choisir ?</span>
                                <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">Pourquoi choisir notre école</h2>
                            </div>
                            <p class="choose-text wow fadeInUp" data-wow-delay=".3s">
                                Des enseignants qualifiés qui comprennent les besoins de chaque enfant, grâce à un apprentissage ludique et académique personnalisé.
                            </p>
                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                <li>
                                    <div class="icon"><img src="{{ asset('assets/img/home-2/choose-icon1.png') }}" alt=""></div>
                                    <div class="title"><h3 class="icon-title">Environnement <br>adapté à l'enfant</h3></div>
                                </li>
                                <li>
                                    <div class="icon"><img src="{{ asset('assets/img/home-2/choose-icon2.png') }}" alt=""></div>
                                    <div class="title"><h3 class="icon-title">Priorité à une éducation<br>sûre et de qualité</h3></div>
                                </li>
                            </ul>
                            <a href="{{ route('programs') }}" class="theme-btn hover-header wow fadeInUp" data-wow-delay=".3s">
                                <span class="theme-bg"><svg width="170" height="59" viewBox="0 0 170 59" fill="none"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#385469"/></svg></span>
                                <span class="theme-text">Les programmes <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                <span class="theme-text2">Les programmes <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection