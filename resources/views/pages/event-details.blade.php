@extends('layouts.app')

@section('title', $event['titre'] . ' – CS SALANON')

@section('content')

    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb-bg.png') }}');">
        <div class="shape-1"><img src="{{ asset('assets/img/shape1.png') }}" alt=""></div>
        <div class="shape-2"><img src="{{ asset('assets/img/shape-2.png') }}" alt=""></div>
        <div class="shape-3"><img src="{{ asset('assets/img/shape-3.png') }}" alt=""></div>
        <div class="shape-4"><img src="{{ asset('assets/img/shape-4.png') }}" alt=""></div>
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ $event['titre'] }}</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a></li>
                    <li>/</li>
                    <li><a href="{{ route('events') }}">Événements</a></li>
                    <li>/</li>
                    <li>{{ $event['titre'] }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="event-details-section fix section-padding">
        <div class="container">
            <div class="event-details-wrapper">
                <div class="row g-4">

                    <div class="col-lg-8">
                        <div class="event-details-items">
                            <div class="thumb fix">
                                <img src="{{ asset('assets/img/home-1/' . $event['image']) }}" alt="{{ $event['titre'] }}">
                            </div>
                            <div class="content">
                                <h2>{{ $event['titre'] }}</h2>
                                <ul class="list-items">
                                    <li><i class="fa-light fa-user"></i> Places disponibles : {{ $event['places'] }}</li>
                                    <li><i class="fa-regular fa-calendar"></i> {{ $event['date_full'] }}, {{ $event['heure'] }}</li>
                                </ul>
                                <p class="mb-3">{{ $event['description'] }}</p>
                                <p class="mt-4">{{ $event['description2'] }}</p>

                                <div class="highlight-text">
                                    <img src="{{ asset('assets/img/inner-page/quote.png') }}" alt="">
                                    <div class="text">
                                        <h3>{{ $event['citation'] }}</h3>
                                        <span>La direction du CS SALANON</span>
                                    </div>
                                </div>

                                <div class="check-list mt-4">
                                    <ul>
                                        @foreach (array_slice($event['points'], 0, 2) as $point)
                                        <li><i class="fa-regular fa-circle-check"></i> {{ $point }}</li>
                                        @endforeach
                                    </ul>
                                    <ul>
                                        @foreach (array_slice($event['points'], 2) as $point)
                                        <li><i class="fa-regular fa-circle-check"></i> {{ $point }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="speaker-items mt-5">
                                    <span class="title">Intervenants</span>
                                    @foreach ($event['intervenants'] as $intervenant)
                                    <div class="speaker-box-items">
                                        <div class="left-items">
                                            <div class="left-content">
                                                <h3>{{ $intervenant['nom'] }}</h3>
                                                <p class="mt-1">{{ $intervenant['role'] }}</p>
                                            </div>
                                        </div>
                                        <div class="social-icon d-flex align-items-center">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </div>
                                        <a href="{{ route('contact') }}" class="theme-btn hover-header">
                                            <span class="theme-bg"><svg width="170" height="59" viewBox="0 0 170 59" fill="none"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"/></svg></span>
                                            <span class="theme-text">S'inscrire <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                            <span class="theme-text2">S'inscrire <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>

                                <div class="event-details-items mt-4">
                                    <div class="tag-list">
                                        <span><i class="fa-sharp fa-regular fa-tag"></i> Tags :</span>
                                        <a href="{{ route('events') }}">École, Enfants, Événement</a>
                                    </div>
                                    <a href="#" class="share-text"><i class="fa-regular fa-share"></i> Partager</a>
                                </div>
                            </div>
                        </div>

                        @if(count($others) > 0)
                        <div class="mt-5">
                            <h2 class="mb-4">Autres événements</h2>
                            <div class="row g-4">
                                @foreach ($others as $other)
                                <div class="col-md-4 wow fadeInUp">
                                    <div class="news-box-items">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/img/home-1/' . $other['image']) }}" alt="{{ $other['titre'] }}">
                                            <img src="{{ asset('assets/img/home-1/' . $other['image']) }}" alt="">
                                        </div>
                                        <div class="content">
                                            <ul>
                                                <li><i class="fa-regular fa-calendar"></i> {{ $other['date_full'] }}</li>
                                                <li><i class="fa-regular fa-clock"></i> {{ $other['heure'] }}</li>
                                            </ul>
                                            <h3><a href="{{ route('event.show', $other['slug']) }}">{{ $other['titre'] }}</a></h3>
                                            <div class="arrow-btn text-end">
                                                <a href="{{ route('event.show', $other['slug']) }}" class="icon">
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

                    <div class="col-lg-4">
                        <div class="details-list-area">
                            <h3>Informations :</h3>
                            <ul class="details-list">
                                <li><span><i class="fa-regular fa-calendar me-2"></i> Date :</span> {{ $event['date_full'] }}</li>
                                <li><span><i class="fa-regular fa-clock me-2"></i> Horaires :</span> {{ $event['heure'] }}</li>
                                <li><span><i class="fa-regular fa-location-dot me-2"></i> Lieu :</span> {{ $event['lieu'] }}</li>
                                <li><span><i class="fa-light fa-user me-2"></i> Places :</span> {{ $event['places'] }}</li>
                                <li><span><i class="fa-regular fa-ticket me-2"></i> Entrée :</span> {{ $event['entree'] }}</li>
                            </ul>
                            <a href="{{ route('contact') }}" class="theme-btn w-100 mb-3">
                                <span class="theme-bg"><svg width="170" height="59" viewBox="0 0 170 59" fill="none"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"/></svg></span>
                                <span class="theme-text">S'inscrire <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                <span class="theme-text2">S'inscrire <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                            </a>
                            <div class="social-icon d-flex align-items-center mt-3">
                                <span>Partager : </span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection