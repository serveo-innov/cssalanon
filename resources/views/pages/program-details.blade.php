@extends('layouts.app')

@section('title', $program['titre'] . ' – CS SALANON')

@section('content')

    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb-bg.png') }}');">
        <div class="shape-1"><img src="{{ asset('assets/img/shape1.png') }}" alt=""></div>
        <div class="shape-2"><img src="{{ asset('assets/img/shape-2.png') }}" alt=""></div>
        <div class="shape-3"><img src="{{ asset('assets/img/shape-3.png') }}" alt=""></div>
        <div class="shape-4"><img src="{{ asset('assets/img/shape-4.png') }}" alt=""></div>
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ $program['titre'] }}</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a></li>
                    <li>/</li>
                    <li><a href="{{ route('programs') }}">Programmes</a></li>
                    <li>/</li>
                    <li>{{ $program['titre'] }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="program-details-section fix section-padding">
        <div class="container">
            <div class="program-details-wrapper">
                <div class="row g-5">

                    <div class="col-lg-8">
                        <div class="program-details-items">
                            <div class="details-image">
                                <img src="{{ asset('assets/img/home-1/' . $program['image']) }}" alt="{{ $program['titre'] }}">
                            </div>
                            <div class="details-content">
                                <div class="post"><span>{{ $program['categorie'] }}</span></div>
                                <h2 class="mb-0">{{ $program['titre'] }}</h2>
                                <div class="details-author-area">
                                    <div class="author-items">
                                        <img src="{{ asset('assets/img/inner-page/' . $program['enseignant']['image']) }}" alt="">
                                        <p>{{ $program['enseignant']['nom'] }}</p>
                                    </div>
                                    <ul class="class-list">
                                        <li><i class="fa-regular fa-circle-play me-2"></i> {{ $program['seances'] }} Séances</li>
                                        <li><i class="fas fa-star me-2"></i> {{ $program['avis'] }}</li>
                                    </ul>
                                </div>
                                <h2>Description</h2>
                                <p class="mb-3">{{ $program['description'] }}</p>
                                <h2>Prérequis</h2>
                                <p class="mb-4">{{ $program['prerequis'] }}</p>
                                <h2>Ce que vous apprendrez</h2>
                                <ul class="list-items">
                                    @foreach ($program['points'] as $point)
                                    <li><i class="fa-solid fa-check"></i> {{ $point }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="details-list-area">
                            <h3>Informations :</h3>
                            <ul class="details-list">
                                <li><span><i class="fa-solid fa-chart-simple me-2"></i> Âge</span> {{ $program['age'] }}</li>
                                <li><span><i class="fa-regular fa-clock me-2"></i> Horaires :</span> {{ $program['horaires'] }}</li>
                                <li><span><i class="fa-solid fa-book me-2"></i> Séances :</span> {{ $program['seances'] }}</li>
                                <li><span><i class="fa-solid fa-users me-2"></i> Élèves max :</span> {{ $program['max_eleves'] }}</li>
                                <li><span><i class="fa-solid fa-certificate me-2"></i> Certificat :</span> {{ $program['certificat'] }}</li>
                                <li><span><i class="fa-solid fa-globe me-2"></i> Langue :</span> {{ $program['langue'] }}</li>
                            </ul>
                            <a href="{{ route('contact') }}" class="theme-btn w-100 mb-3">
                                <span class="theme-bg"><svg width="170" height="59" viewBox="0 0 170 59" fill="none"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"/></svg></span>
                                <span class="theme-text">Inscription <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                <span class="theme-text2">Inscription <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                            </a>
                            <div class="social-icon d-flex align-items-center mt-3">
                                <span>Partager : </span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="program-author-items">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/inner-page/' . $program['enseignant']['image']) }}" alt="{{ $program['enseignant']['nom'] }}">
                            </div>
                            <div class="content">
                                <h2>{{ $program['enseignant']['nom'] }}</h2>
                                <span>{{ $program['enseignant']['role'] }}</span>
                                <p>{{ $program['enseignant']['bio'] }}</p>
                                <ul>
                                    <li>Expérience : {{ $program['enseignant']['experience'] }}</li>
                                    <li><i class="fas fa-user"></i> {{ $program['enseignant']['eleves'] }} élèves accompagnés</li>
                                    <li><i class="fa-solid fa-star color-star"></i> {{ $program['enseignant']['note'] }}</li>
                                </ul>
                                <div class="social-icon d-flex align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(count($others) > 0)
                    <div class="col-lg-12">
                        <h2 class="mb-4">Autres programmes</h2>
                        <div class="row g-4">
                            @foreach ($others as $other)
                            <div class="col-md-6 col-lg-4 wow fadeInUp">
                                <div class="news-box-items">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/home-1/' . $other['image']) }}" alt="{{ $other['titre'] }}">
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><i class="fa-regular fa-user"></i> {{ $other['age'] }}</li>
                                            <li><i class="fa-regular fa-clock"></i> {{ $other['duree'] }}</li>
                                        </ul>
                                        <h3><a href="{{ route('program.show', $other['slug']) }}">{{ $other['titre'] }}</a></h3>
                                        <div class="arrow-btn text-end">
                                            <a href="{{ route('program.show', $other['slug']) }}" class="icon">
                                                <span class="bg"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

@endsection