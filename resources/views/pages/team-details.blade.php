@extends('layouts.app')

@section('title', $member['nom'] . ' – CS SALANON')

@section('content')

    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb-bg.png') }}');">
        <div class="shape-1"><img src="{{ asset('assets/img/shape1.png') }}" alt=""></div>
        <div class="shape-2"><img src="{{ asset('assets/img/shape-2.png') }}" alt=""></div>
        <div class="shape-3"><img src="{{ asset('assets/img/shape-3.png') }}" alt=""></div>
        <div class="shape-4"><img src="{{ asset('assets/img/shape-4.png') }}" alt=""></div>
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ $member['nom'] }}</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a></li>
                    <li>/</li>
                    <li><a href="{{ route('team') }}">Enseignants</a></li>
                    <li>/</li>
                    <li>{{ $member['nom'] }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="team-details-section fix section-padding">
        <div class="container">
            <div class="team-details-wrapper">

                <div class="team-author-items">
                    <div class="thumb">
                        <img src="{{ asset('assets/img/inner-page/' . $member['image_detail']) }}" alt="{{ $member['nom'] }}">
                    </div>
                    <div class="content">
                        <h2>{{ $member['nom'] }}</h2>
                        <span>{{ $member['role'] }}</span>
                        <p>{{ $member['bio'] }}</p>
                        <ul>
                            <li>Expérience : {{ $member['experience'] }}</li>
                            <li><i class="fas fa-user"></i> {{ $member['eleves'] }} élèves accompagnés</li>
                            <li><i class="fa-solid fa-star color-star"></i> {{ $member['note'] }}</li>
                        </ul>
                        <div class="social-icon d-flex align-items-center">
                            <a href="{{ $member['social']['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $member['social']['twitter'] }}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $member['social']['linkedin'] }}"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="{{ $member['social']['youtube'] }}"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="details-info-items">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="info-content">
                                <h2>Informations professionnelles</h2>
                                <p>{{ $member['info'] }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="progress-area">
                                <div class="progress-wrap">
                                    @foreach ($member['competences'] as $comp)
                                    <div class="pro-items">
                                        <div class="pro-head">
                                            <span class="title">{{ $comp['titre'] }}</span>
                                            <span class="point">{{ $comp['point'] }}</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-value {{ $comp['style'] }}"></div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @if(count($others) > 0)
    <section class="team-section-4 fix section-padding pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">Autres enseignants</h2>
                </div>
                <div class="swiper-dot"><div class="dot"></div></div>
            </div>
            <div class="swiper team-slider-inner2">
                <div class="swiper-wrapper">
                    @foreach ($others as $i => $other)
                    <div class="swiper-slide wow fadeInUp" data-wow-delay="{{ ($i * 0.2 + 0.2) . 's' }}">
                        <div class="team-items">
                            <div class="team-image">
                                <div class="shape-img"><img src="{{ asset('assets/img/inner-page/team-shape.png') }}" alt=""></div>
                                <img src="{{ asset('assets/img/home-1/' . $other['image']) }}" alt="{{ $other['nom'] }}">
                                <div class="social-profile">
                                    <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                    <ul>
                                        <li><a href="{{ $other['social']['facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ $other['social']['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3><a href="{{ route('team.show', $other['slug']) }}">{{ $other['nom'] }}</a></h3>
                                <p>{{ $other['role'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

@endsection