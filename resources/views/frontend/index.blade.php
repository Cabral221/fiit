@extends('frontend.layouts.app')
@section('title') Accueil @endsection


@section('content')
    <!-- Slider main container -->
    <div class="swiper-container swiper__carousel">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_1.jpeg') }});">FIIT Protection Internationale</div>
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_2.jpeg') }});">FIIT Protection Internationale</div>
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_3.jpeg') }});">FIIT Protection Internationale</div>
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_4.jpeg') }});">FIIT Protection Internationale</div>
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_5.jpeg') }});">FIIT Protection Internationale</div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>

    
    <!--==================== SERVICES ====================-->
    <section class="services section" id="services">
        <h2 class="section__title">Nos Services</h2>
        <span class="section__subtitle">Ce que nous offrons</span>
        
        <div class="services__container container grid">
            <p class="services__describe">L’entreprise  vous  accompagne,  identifie  l’ensemble  de  vos  besoins  et  vous  propose  une  large  gamme de 
                solutions, pour vous permettre de vous adapter rapidement et efficacement aux évolutions du marché et 
                obtenir un avantage compétitif durable.</p>

            <!--==================== SERVICE 1 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-shield-check services__icon"></i>
                    <h3 class="services__title">Sécurité <br> gardiennage</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Voir Plus
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Sécurité <br> gardiennage</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un rôle de prévention et de dissuasion.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Expertises compte tenu de leur formation antérieur.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un savoir-faire qui leur facilite le travail d’équipe.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Alerter les services de la police  nationale, la gendarmerie, les pompiers...</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--==================== SERVICE 2 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-shield-check services__icon"></i>
                    <h3 class="services__title">Protection <br> rapprochée</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Voir Plus
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Protection <br> rapprochée</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un rôle de prévention et de dissuasion.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Expertises compte tenu de leur formation antérieur.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un savoir-faire qui leur facilite le travail d’équipe.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Alerter les services de la police  nationale, la gendarmerie, les pompiers...</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--==================== SERVICE 3   ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-shield-check services__icon"></i>
                    <h3 class="services__title">Formation d’agent de sécurité</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Voir Plus
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Formation d’agent de sécurité</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un rôle de prévention et de dissuasion.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Expertises compte tenu de leur formation antérieur.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un savoir-faire qui leur facilite le travail d’équipe.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Alerter les services de la police  nationale, la gendarmerie, les pompiers...</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--==================== SERVICE 4 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-shield-check services__icon"></i>
                    <h3 class="services__title">Escorte et transfert de fonds</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Voir Plus
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Escorte et transfert de fonds</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un rôle de prévention et de dissuasion.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Expertises compte tenu de leur formation antérieur.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un savoir-faire qui leur facilite le travail d’équipe.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Alerter les services de la police  nationale, la gendarmerie, les pompiers...</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--==================== SERVICE 5 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-shield-check services__icon"></i>
                    <h3 class="services__title">Mise en disposition d’agents de sécurité</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Voir Plus
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Mise en disposition d’agents de sécurité</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un rôle de prévention et de dissuasion.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Expertises compte tenu de leur formation antérieur.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un savoir-faire qui leur facilite le travail d’équipe.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Alerter les services de la police  nationale, la gendarmerie, les pompiers...</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--==================== SERVICE 6 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-shield-check services__icon"></i>
                    <h3 class="services__title">Nettoyage et entretien</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Voir Plus
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Nettoyage et entretien</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un rôle de prévention et de dissuasion.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Expertises compte tenu de leur formation antérieur.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un savoir-faire qui leur facilite le travail d’équipe.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Alerter les services de la police  nationale, la gendarmerie, les pompiers...</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
