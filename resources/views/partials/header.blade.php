{{-- Offcanvas Area --}}
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo/salanon-logo.png') }}" alt="CS SALANON" style="width:120px; filter: brightness(0) invert(1);">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button><i class="fa-thin fa-times"></i></button>
                    </div>
                </div>
                <p class="text d-none d-xl-block">
                    École SALANON – Un cadre d'apprentissage sûr et épanouissant pour vos enfants.
                </p>
                <div class="mobile-menu fix"></div>
                <div class="off-contact-info">
                    <span class="info-title">Nous contacter</span>
                    <div class="contact-details">
                        <span class="sub-info">Téléphone</span>
                        <p><a href="tel:+2290167725898">+229 01 93 83 83 92 / 01 67 72 58 98</a></p>
                    </div>
                    <div class="contact-details">
                        <span class="sub-info">Email</span>
                        <p><a href="mailto:contact@cssalanon.com">contact@cssalanon.com</a></p>
                    </div>
                    <div class="contact-details">
                        <span class="sub-info">Adresse</span>
                        <p>Sainte Rita Tonato, Cotonou-Bénin</p>
                    </div>
                </div>
            </div>
            <div class="social-icon-list">
                <span class="follow-title">Suivez-nous :</span>
                <div class="social-icon d-flex align-items-center">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

{{-- Header --}}
<header id="header-sticky" class="header-1">
    <div class="top-bar">
        <img src="{{ asset('assets/img/header/top-bar.png') }}" alt="">
    </div>
    <div class="container">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('assets/img/logo/salanon-logo.png') }}" alt="CS SALANON" style="width:90px;">
                </a>
                <div class="mean__menu-wrapper">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a href="{{ route('home') }}">Accueil</a>
                                </li>
                                <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                    <a href="{{ route('about') }}">À propos</a>
                                </li>
                                <li class="{{ request()->routeIs('programs', 'program.show') ? 'active' : '' }}">
                                    <a href="{{ route('programs') }}">Programmes</a>
                                </li>
                                <li class="{{ request()->routeIs('events', 'event.show') ? 'active' : '' }}">
                                    <a href="{{ route('events') }}">Événements</a>
                                </li>
                                <li class="{{ request()->routeIs('news', 'news.show') ? 'active' : '' }}">
                                    <a href="{{ route('news') }}">Actualités</a>
                                </li>
                                <li class="{{ request()->routeIs('team', 'team.show') ? 'active' : '' }}">
                                    <a href="{{ route('team') }}">Enseignants</a>
                                </li>
                                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <a href="#" class="main-header__search search-toggler">
                        <i class="fa-regular fa-magnifying-glass"></i>
                    </a>
                    <a href="{{ route('contact') }}" class="theme-btn">
                        <span class="theme-bg">
                            <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"/>
                            </svg>
                        </span>
                        <span class="theme-text">Nous contacter <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                        <span class="theme-text2">Nous contacter <img src="{{ asset('assets/img/icon/arrow1.svg') }}" alt=""></span>
                    </a>
                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>