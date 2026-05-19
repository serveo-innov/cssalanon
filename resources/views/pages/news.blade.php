@extends('layouts.app')

@section('title', 'Actualités – CS SALANON')

@section('content')

    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb-bg.png') }}');">
        <div class="shape-1"><img src="{{ asset('assets/img/shape1.png') }}" alt=""></div>
        <div class="shape-2"><img src="{{ asset('assets/img/shape-2.png') }}" alt=""></div>
        <div class="shape-3"><img src="{{ asset('assets/img/shape-3.png') }}" alt=""></div>
        <div class="shape-4"><img src="{{ asset('assets/img/shape-4.png') }}" alt=""></div>
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Actualités</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a></li>
                    <li>/</li>
                    <li>Actualités</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="news-standard-section section-padding">
        <div class="container">
            <div class="gt-news-standard-wrapper">
                <div class="row g-4">

                    <div class="col-12 col-lg-8">
                        <div class="gt-news-standard-items">
                            @foreach ($articles as $i => $article)
                            <div class="gt-news-card-items-4 {{ $i === count($articles) - 1 ? 'mb-0' : '' }}">
                                <div class="gt-news-image">
                                    <img src="{{ asset('assets/img/inner-page/' . $article['image']) }}" alt="{{ $article['titre'] }}">
                                </div>
                                <div class="gt-news-content">
                                    <ul class="gt-date-list">
                                        <li><i class="fa-solid fa-calendar-days"></i> {{ $article['date'] }}</li>
                                        <li><i class="fa-solid fa-comments"></i> {{ $article['commentaires'] }} Commentaires</li>
                                        <li><i class="fa-solid fa-tag"></i> {{ $article['categorie'] }}</li>
                                    </ul>
                                    <h2 class="news-title">
                                        <a href="{{ route('news.show', $article['slug']) }}">{{ $article['titre'] }}</a>
                                    </h2>
                                    <p>{{ $article['intro'] }}</p>
                                    <a href="{{ route('news.show', $article['slug']) }}" class="theme-btn">
                                        <span class="theme-bg"><svg width="170" height="59" viewBox="0 0 170 59" fill="none"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"/></svg></span>
                                        <span class="theme-text">Lire la suite <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                        <span class="theme-text2">Lire la suite <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="gt-main-sideber sticky-style">
                            <div class="gt-single-sideber-widget">
                                <div class="gt-widget-title"><h3>Recherche</h3></div>
                                <div class="gt-search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Rechercher...">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="gt-single-sideber-widget">
                                <div class="gt-widget-title"><h3>Catégories</h3></div>
                                <ul class="gt-category-list">
                                    @foreach ([['Éducation', 10], ['Activités', 8], ['Bien-être', 6], ['Événements', 12], ['Enseignants', 5]] as [$cat, $nb])
                                    <li><a href="#">{{ $cat }}</a><span>({{ $nb }})</span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="gt-single-sideber-widget">
                                <div class="gt-widget-title"><h3>Articles récents</h3></div>
                                <div class="gt-recent-post-area">
                                    @foreach ($articles as $recent)
                                    <div class="gt-recent-items">
                                        <div class="gt-recent-thumb">
                                            <img src="{{ asset('assets/img/inner-page/' . $recent['image']) }}" alt="">
                                        </div>
                                        <div class="gt-recent-content">
                                            <h4 class="title">
                                                <a href="{{ route('news.show', $recent['slug']) }}">{{ Str::limit($recent['titre'], 50) }}</a>
                                            </h4>
                                            <span><i class="fa-solid fa-calendar-days"></i> {{ $recent['date'] }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="gt-single-sideber-widget">
                                <div class="gt-widget-title"><h3>Tags populaires</h3></div>
                                <div class="tagcloud">
                                    <a href="#">Éducation</a>
                                    <a href="#">Enfants</a>
                                    <a href="#">Activités</a>
                                    <a href="#">Bien-être</a>
                                    <a href="#">Événements</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection