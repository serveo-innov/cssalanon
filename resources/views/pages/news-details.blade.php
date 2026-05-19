@extends('layouts.app')

@section('title', $article['titre'] . ' – CS SALANON')

@section('content')

    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb-bg.png') }}');">
        <div class="shape-1"><img src="{{ asset('assets/img/shape1.png') }}" alt=""></div>
        <div class="shape-2"><img src="{{ asset('assets/img/shape-2.png') }}" alt=""></div>
        <div class="shape-3"><img src="{{ asset('assets/img/shape-3.png') }}" alt=""></div>
        <div class="shape-4"><img src="{{ asset('assets/img/shape-4.png') }}" alt=""></div>
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Détail de l'article</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a></li>
                    <li>/</li>
                    <li><a href="{{ route('news') }}">Actualités</a></li>
                    <li>/</li>
                    <li>{{ Str::limit($article['titre'], 40) }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="news-standard-section section-padding">
        <div class="container">
            <div class="news-details-area">
                <div class="row g-4">

                    <div class="col-12 col-lg-8">
                        <div class="blog-post-details">
                            <div class="single-blog-post">
                                <div class="post-featured-thumb fix">
                                    <img src="{{ asset('assets/img/inner-page/' . $article['image_detail']) }}" alt="{{ $article['titre'] }}">
                                </div>
                                <div class="post-content">
                                    <ul class="post-list d-flex align-items-center">
                                        <li><i class="fa-regular fa-user"></i> Par {{ $article['auteur'] }}</li>
                                        <li><i class="fa-solid fa-calendar-days"></i> {{ $article['date'] }}</li>
                                        <li><i class="fa-solid fa-tag"></i> {{ $article['categorie'] }}</li>
                                    </ul>
                                    <h2>{{ $article['titre'] }}</h2>
                                    <p class="mb-3">{{ $article['contenu1'] }}</p>
                                    <p class="mb-3">{{ $article['contenu2'] }}</p>
                                    <div class="hilight-text mt-4 mb-4">
                                        <p>{{ $article['citation'] }}</p>
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"><path d="M0 20.3698H7.71428L2.57139 30.5546H10.2857L15.4286 20.3698V5.09247H0V20.3698Z" fill="#fff"/><path d="M20.5703 5.09247V20.3698H28.2846L23.1417 30.5546H30.856L35.9989 20.3698V5.09247H20.5703Z" fill="#fff"/></svg>
                                    </div>
                                    <p class="mt-4 mb-5">{{ $article['contenu3'] }}</p>
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="details-image">
                                                <img src="{{ asset('assets/img/inner-page/' . $article['image2']) }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="details-image">
                                                <img src="{{ asset('assets/img/inner-page/' . $article['image3']) }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row tag-share-wrap mt-4 mb-5">
                                <div class="col-lg-8 col-12">
                                    <div class="tagcloud">
                                        @foreach ($article['tags'] as $tag)
                                        <a href="#">{{ $tag }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                    <div class="social-share">
                                        <span class="me-3">Partager :</span>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="comments-area">
                                <div class="comments-heading">
                                    <h3>{{ count($article['commentaires_list']) }} Commentaires</h3>
                                </div>
                                @foreach ($article['commentaires_list'] as $comment)
                                <div class="blog-single-comment d-flex gap-4 pt-4 pb-5">
                                    <div class="content">
                                        <div class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div class="con">
                                                <h4><a href="#">{{ $comment['auteur'] }}</a></h4>
                                                <span>{{ $comment['date'] }}</span>
                                            </div>
                                            <div class="star">
                                                @for ($s = 0; $s < $comment['note']; $s++)
                                                <i class="fa-solid fa-star"></i>
                                                @endfor
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-4">{{ $comment['texte'] }}</p>
                                        <a href="#" class="reply">Répondre</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="comment-form-wrap">
                                <h3>Laisser un commentaire</h3>
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="name" placeholder="Votre nom">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="email" name="email" placeholder="Votre email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <textarea name="message" placeholder="Votre commentaire"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="theme-btn">
                                                <span class="theme-bg"><svg width="170" height="59" viewBox="0 0 170 59" fill="none"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"/></svg></span>
                                                <span class="theme-text">Envoyer <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                                <span class="theme-text2">Envoyer <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                                <div class="gt-widget-title"><h3>Articles récents</h3></div>
                                <div class="gt-recent-post-area">
                                    @foreach ($recents as $recent)
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
                                    @foreach ($article['tags'] as $tag)
                                    <a href="#">{{ $tag }}</a>
                                    @endforeach
                                    <a href="#">Éducation</a>
                                    <a href="#">Enfants</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection