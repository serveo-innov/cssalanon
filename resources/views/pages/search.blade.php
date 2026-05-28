@extends('layouts.app')

@section('title', 'Recherche' . ($query ? ' : ' . $query : '') . ' – CS SALANON')

@section('content')

    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb-bg.png') }}');">
        <div class="shape-1"><img src="{{ asset('assets/img/shape1.png') }}" alt=""></div>
        <div class="shape-2"><img src="{{ asset('assets/img/shape-2.png') }}" alt=""></div>
        <div class="shape-3"><img src="{{ asset('assets/img/shape-3.png') }}" alt=""></div>
        <div class="shape-4"><img src="{{ asset('assets/img/shape-4.png') }}" alt=""></div>
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Résultats de recherche</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a></li>
                    <li>/</li>
                    <li>Recherche</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="news-standard-section section-padding">
        <div class="container">

            {{-- Barre de recherche --}}
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7">
                    <form action="{{ route('search') }}" method="GET">
                        <div class="gt-search-widget">
                            <input type="text"
                                   name="q"
                                   value="{{ $query }}"
                                   placeholder="Rechercher un article, programme, événement..."
                                   style="width:100%; padding:14px 20px; border:2px solid #F39F5F; border-radius:50px; font-size:15px; outline:none;">
                            <button type="submit" style="display:none;"></button>
                        </div>
                    </form>
                </div>
            </div>

            @if (empty($query))

                <div class="text-center py-5">
                    <i class="fa-regular fa-magnifying-glass" style="font-size:48px; color:#ddd;"></i>
                    <p class="mt-4" style="color:#888; font-size:16px;">Saisissez un mot-clé pour lancer la recherche.</p>
                </div>

            @elseif ($total === 0)

                <div class="text-center py-5">
                    <i class="fa-regular fa-face-frown" style="font-size:48px; color:#ddd;"></i>
                    <h3 class="mt-4" style="color:#385469;">Aucun résultat pour « {{ $query }} »</h3>
                    <p class="mt-2" style="color:#888;">Essayez avec d\'autres mots-clés ou consultez nos rubriques directement.</p>
                    <div class="mt-4 d-flex justify-content-center gap-3 flex-wrap">
                        <a href="{{ route('news') }}"     class="theme-btn" style="font-size:13px;">Actualités</a>
                        <a href="{{ route('programs') }}" class="theme-btn" style="font-size:13px;">Programmes</a>
                        <a href="{{ route('events') }}"   class="theme-btn" style="font-size:13px;">Événements</a>
                    </div>
                </div>

            @else

                <div class="mb-4">
                    <p style="color:#666; font-size:15px;">
                        <strong style="color:#385469;">{{ $total }}</strong> résultat{{ $total > 1 ? 's' : '' }}
                        pour la recherche <strong style="color:#F39F5F;">« {{ $query }} »</strong>
                    </p>
                </div>

                <div class="row g-4">
                    @foreach ($results as $result)
                    <div class="col-12">
                        <div class="gt-news-card-items-4" style="border-bottom:1px solid #f0f0f0; padding-bottom:24px;">
                            <div class="gt-news-content">
                                <ul class="gt-date-list">
                                    <li>
                                        <span style="background:#{{ $result['type'] === 'Actualité' ? 'F39F5F' : ($result['type'] === 'Programme' ? '385469' : ($result['type'] === 'Événement' ? '5a9e6f' : '8e6abf')) }};
                                                     color:#fff; padding:3px 12px; border-radius:20px; font-size:12px; font-weight:bold;">
                                            {{ $result['type'] }}
                                        </span>
                                    </li>
                                    @if ($result['date'])
                                    <li><i class="fa-solid fa-calendar-days"></i> {{ $result['date'] }}</li>
                                    @endif
                                </ul>
                                <h3 class="news-title mt-2">
                                    <a href="{{ $result['url'] }}" style="color:#385469;">{{ $result['titre'] }}</a>
                                </h3>
                                <p style="color:#666; line-height:1.7; margin: 8px 0 16px;">{{ $result['extrait'] }}</p>
                                <a href="{{ $result['url'] }}" class="theme-btn" style="font-size:13px;">
                                    <span class="theme-bg"><svg width="170" height="59" viewBox="0 0 170 59" fill="none"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"/></svg></span>
                                    <span class="theme-text">Voir le contenu <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                    <span class="theme-text2">Voir le contenu <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            @endif

        </div>
    </section>

@endsection