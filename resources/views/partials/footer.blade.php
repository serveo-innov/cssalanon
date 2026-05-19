<footer class="footer-section">
    <div class="footer-top">
        <img src="{{ asset('assets/img/home-1/footer-top.png') }}" alt="">
    </div>
    <div class="bottom-shape">
        <img src="{{ asset('assets/img/home-1/bottom-line-3.png') }}" alt="">
    </div>
    <div class="bear-shape float-bob-y">
        <img src="{{ asset('assets/img/home-1/bear-1.png') }}" alt="">
    </div>
    <div class="bag-shape float-bob-y">
        <img src="{{ asset('assets/img/home-1/bag1.png') }}" alt="">
    </div>
    <div class="vec-shape float-bob-y">
        <img src="{{ asset('assets/img/home-1/vec1.png') }}" alt="">
    </div>
    <div class="container">
        <div class="footer-info-wrapper">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="footer-content">
                        <a href="{{ route('home') }}" class="footer-logo">
                            <img src="{{ asset('assets/img/logo/salanon-logo.png') }}" alt="CS SALANON" style="width:100px;">
                        </a>
                        <p>École SALANON – Un cadre d'apprentissage sûr, joyeux et épanouissant pour chaque enfant.</p>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="footer-info-items">
                        <h2 class="title">Siège principal</h2>
                        <ul>
                            <li><i class="fa-solid fa-location-dot"></i> Sainte Rita Tonato, Cotonou-Bénin</li>
                            <li><i class="fa-solid fa-phone"></i> <a href="tel:+2290167725898">+229 01 93 83 83 92 / 01 67 72 58 98</a></li>
                            <li><i class="fa-solid fa-envelope"></i> <a href="mailto:contact@cssalanon.com">contact@cssalanon.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="footer-widget-items">
                        <div class="widget-head"><h3>Liens rapides</h3></div>
                        <ul class="gt-list-area">
                            <li><a href="{{ route('programs') }}">Nos Programmes</a></li>
                            <li><a href="{{ route('news') }}">Actualités</a></li>
                            <li><a href="{{ route('team') }}">Enseignants</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('about') }}">À propos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p class="footer-text wow fadeInUp" data-wow-delay=".3s">
            Copyright &copy; <b>École SALANON</b> – Tous droits réservés.
        </p>
    </div>
</footer>