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

    <!--==================== CONTACT US ====================-->
    <section class="contact section container" id="contact">
        <h2 class="section__title">Contactez Nous</h2>
        <span class="section__subtitle">Entrez en contact avec l'agence</span>

        <div class="contact__container container grid">
            <div>
                <div class="contact__information">
                    <i class="uil uil-phone contact__icon"></i>

                    <div>
                        <h3 class="contact__title">Téléphone</h3>
                        <span class="contact__subtitle">+221 77 454 69 22</span>
                    </div>
                </div>
                <div class="contact__information">
                    <i class="uil uil-envelope contact__icon"></i>

                    <div>
                        <h3 class="contact__title">Email</h3>
                        <span class="contact__subtitle"> mactardiop35@gmail.com</span>
                    </div>
                </div>
                <div class="contact__information">
                    <i class="uil uil-map-marker contact__icon"></i>

                    <div>
                        <h3 class="contact__title">Adresse</h3>
                        <span class="contact__subtitle">Villa n° 110, cité Sentenac – Golf Nord-Est Guédiawaye Dakar </span>
                    </div>
                </div>
            </div>

            <form action="#" class="contact__form grid">
                <div class="contact__inputs grid">
                    <div class="contact__content">
                        <label for="name" class="contact__label">Nom</label>
                        <input type="text" name="" id="" class="contact__input">
                    </div>
                    <div class="contact__content">
                        <label for="name" class="contact__label">Email</label>
                        <input type="email" name="" id="" class="contact__input">
                    </div>
                </div>
                
                <div class="contact__content">
                    <label for="name" class="contact__label">Message</label>
                    <textarea name="" id="" cols="0" rows="7" class="contact__input"></textarea>
                </div>

                <div>
                    <a href="#" class="button button--flex">
                        Envoyé Message
                        <i class="uil uil-message button__icon"></i>
                    </a>
                </div>
            </form>
        </div>
    </section>

@endsection
