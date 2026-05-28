@extends('layouts.app')

@section('title', 'Nos Programmes – CS SALANON')

@section('content')

    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb-bg.png') }}');">
        <div class="shape-1"><img src="{{ asset('assets/img/shape1.png') }}" alt=""></div>
        <div class="shape-2"><img src="{{ asset('assets/img/shape-2.png') }}" alt=""></div>
        <div class="shape-3"><img src="{{ asset('assets/img/shape-3.png') }}" alt=""></div>
        <div class="shape-4"><img src="{{ asset('assets/img/shape-4.png') }}" alt=""></div>
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Nos Programmes</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a></li>
                    <li>/</li>
                    <li>Nos Programmes</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="program-section-inner section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Nos Programmes</span>
                <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">Nos Programmes & Classes</h2>
            </div>

            @php
                $thumbStyles   = ['', '', 'style-left', ''];
                $contentStyles = ['', 'style-2', 'style-3', 'style-4'];
                $delays        = ['.2s', '.4s', '.6s', '.8s'];
            @endphp

<div class="row">
    @foreach ($programs as $i => $program)
    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $delays[$i] ?? '.2s' }}">
        <div class="program-box-items-2 {{ $i === 0 ? 'active' : '' }}">
            <div class="thumb {{ $thumbStyles[$i] ?? '' }}">
                <img src="{{ asset('assets/img/home-2/' . $program['thumb']) }}" alt="{{ $program['titre'] }}">
            </div>
            <div class="content {{ $contentStyles[$i] ?? '' }}">
                <div class="hand-image">
                    <img src="{{ asset('assets/img/home-2/' . $program['hand']) }}" alt="">
                </div>
                <div class="year-text">{{ $program['age'] }}</div>
                <h3 class="title">
                    <a href="{{ route('program.show', $program['slug']) }}">{{ $program['titre'] }}</a>
                </h3>
                <p>{{ Str::limit($program['description'], 100) }}</p>
                <div class="duration-text">Durée : {{ $program['duree'] }}</div>
                <div class="arrow-btn">
                    <a href="{{ route('program.show', $program['slug']) }}" class="icon">
                        <span class="bg"></span>
                        <div class="arrow-icon">
                            <img src="{{ asset('assets/img/home-2/icon/arrow.svg') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

            <div class="program-bottom-area">
                <h4 class="title wow fadeInUp" data-wow-delay=".3s">
                    Découvrez tous nos programmes passionnants – trouvez le parcours idéal pour votre enfant !
                </h4>
                <div class="program-button wow fadeInUp" data-wow-delay=".5s">
                    <a href="{{ route('contact') }}" class="theme-btn">
                        <span class="theme-bg"><svg width="170" height="59" viewBox="0 0 170 59" fill="none"><path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"/></svg></span>
                        <span class="theme-text">Inscrire <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                    </a>
                    <div class="author-icon">
                        <div class="icon"><img src="{{ asset('assets/img/home-1/icon/telephone.svg') }}" alt=""></div>
                        <div class="content">
                            <span>Appelez-nous</span>
                            <h4><a href="tel:+2290167725898">+229 01 93 83 83 92</a></h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection