@extends('frontend.layouts.app')
@section('title') Accueil @endsection


@section('content')
    <!-- Slider main container -->
    <section class="swiper-container swiper__carousel" id="home">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_1.jpeg') }});">
                <div class="swiper__caption">
                    <h1 class="swiper__caption--title">FIIT PROTECTION INTERNATIONNALE</h1>
                    <h3 class="swiper__caption--subtitle">Voir - Analyser - Juger - Agir</h3>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_2.jpeg') }});">
                <div class="swiper__caption">
                    <h1 class="swiper__caption--title">FIIT PROTECTION INTERNATIONNALE</h1>
                    <h3 class="swiper__caption--subtitle">Voir - Analyser - Juger - Agir</h3>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_3.jpeg') }});">
                <div class="swiper__caption">
                    <h1 class="swiper__caption--title">FIIT PROTECTION INTERNATIONNALE</h1>
                    <h3 class="swiper__caption--subtitle">Voir - Analyser - Juger - Agir</h3>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_4.jpeg') }});">
                <div class="swiper__caption">
                    <h1 class="swiper__caption--title">FIIT PROTECTION INTERNATIONNALE</h1>
                    <h3 class="swiper__caption--subtitle">Voir - Analyser - Juger - Agir</h3>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_5.jpeg') }});">
                <div class="swiper__caption">
                    <h1 class="swiper__caption--title">FIIT PROTECTION INTERNATIONNALE</h1>
                    <h3 class="swiper__caption--subtitle">Voir - Analyser - Juger - Agir</h3>
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
        <h2 class="section__title">A propos de l'agence</h2>
        <span class="section__subtitle">Présentation</span>
        
        <div class="about__container container grid">
            <div class="about__dg">
                <img src="{{ asset('img/pdg.jpeg') }}" alt="Président" class="about__img">
                <h2 class="about__title">Monsieur Mactar Diop</h2>
                <p class="about__subtitle">Gérant</p>
            </div>
            
            <div class="about__data">

                <div class="about__info">
                    <div>
                        <span class="about__info-title">22+</span>
                        <span class="about__info-name">Années <br> d'experiences</span>
                    </div>
                    <div>
                        <span class="about__info-title">250+</span>
                        <span class="about__info-name">Agents <br> formés</span>
                    </div>
                    <div>
                        <span class="about__info-title">02+</span>
                        <span class="about__info-name">sociétés <br> partenaires</span>
                    </div>
                </div>
                
                <div class="about__buttons">
                    <a download="" href="{{ asset('pdf/CV-Mactar-Diop.pdf') }}" class="button nutton--flex">
                        Télécharge mon CV<i class="uil uil-download-alt button__icon"></i>
                    </a>
                </div>
                <br>
                <p class="about__description">L’entreprise FIIT PROTECTION INTERNATIONALE est une société SUARL sénégalaise, dynamique, née d’une véritable passion pour la conception et la sécurité. Notre savoir-faire et nos compétences reposent sur un bureau d’études, sur le terrain et des personnels expérimentés et motivés.</p>
            </div>
        </div>
        
        <div class="about__content container">
            <h2 class="about__title">Historique et Date de création</h2>
            <p class="about__subtitle">FIIT PROTECTION INTERNATIONALE a fourni aux instances compétentes les pièces justificatives en application aux actes uniformes sur le droit commercial général et ont été vérifiée par le greffier en chef soussigné qui a procédé à l’inscription au registre de commerce le 26/09/2018 sous le numéro RCCM N° SN DKR 2018B 25776 avec comme NINEA le numéro 007024839..</p>
        
            <h2 class="about__title">NOS METHODES DE TRAVAIL</h2>
            <p class="about__subtitle">Nous adoptons notre mode de travail en fonction de la mission qui nous est confiée. De façon générale, nous procédons comme suit : <br> Notre personnel en tenue, a essentiellement un rôle de prévention et de dissuasion. Nos agents ont des expertises compte tenu de leur formation antérieur et un savoir-faire qui leur facilite le travail d’équipe, ainsi ils  peuvent  demander un renfort auprès de leurs collègues; en cas de situation extrême ou de violente altercation nos agents peuvent alerter les services de la police nationale, la gendarmerie, les pompiers...<br> Dans tous les cas notre personnel est tenu d’éviter un usage abusif de la violence.</p>
        
            <div class="skills__container grid">
                <div>
                    <!--==================== SKILLS 1 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-check-circle skills__icon"></i>
                            
                            <div>
                                <h1 class="skills__titles">Pourquoi nous ?</h1>
                            </div>
    
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
    
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <p>L’entreprise FIIT PROTECTION INTERNATIONALE est constituée des agents de sécurités et des adeptes d’arts martiaux disposés á mettre en œuvre leurs compétences afin de répondre à vos besoins de sécurités </p>
                                <p>L’entreprise vous accompagne, identifie l’ensemble de vos besoins et vous propose une large gamme de solutions, pour vous permettre de vous adapter rapidement et efficacement aux évolutions du marché et obtenir un avantage compétitif durable.
                                    Nous proposons à nos clients des services les plus complètes possibles pour améliorer leur sécurité et faciliter leur travail.</p>
                            </div>
                        </div>
                    </div>
    
                    <!--==================== SKILLS 2 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-check-circle skills__icon"></i>
                            
                            <div>
                                <h1 class="skills__titles">Notre politique</h1>
                            </div>
    
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
    
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <p>La politique de FIIT PROTECT INTERNATIONALE est axée sur l’avenir.</p>
                                <p><span class="skills__line">*Professionnelle :</span> FIIT PROTECTION INTERNATIONALE met un point d’honneur a équipé ses agents des dernières nouveautés techniques afin d’effectuer un travail dans les meilleurs conditions possibles (présentement FPI dispose d’armes à feux, de bombe a gaz, de matraques électriques...)</p>
                                <p><span class="skills__line">*Formation :</span> Nos agents sont tous, soit des agents ayant fait au minimum deux (2) ans de services militaire ou paramilitaire, soit des adeptes d’arts martiaux avec au minimum le grade de 1er DAN dans la discipline respective. Il faut aussi préciser que le personnel est régulièrement formé et recyclé aux nouvelles techniques de sécurité.</p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div>
                    <!--==================== SKILLS 3 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-check-circle skills__icon"></i>
                            
                            <div>
                                <h1 class="skills__titles">Nos moyens</h1>
                            </div>
    
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
    
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <h3 class="skills__line">Moyens matériels</h3>
                                <p><span class="skills__line">*Cahier de d’anomalie :</span> Il permet une traçabilité des évènements chronologiques de la mission de l’agent. Effectivement, l’agent doit y noter sa prise de services, l’ensemble des évènements qui se sont déroulés durant son service et bien entendu, sa fin de service. Cela nous permet d’avoir écrite des évènements qui se passent sur son site, et pour nous, c’est un excellent moyen de contrôler notre personnel. </p>
                                <p><span class="skills__line">*Téléphone portable :</span> FIIT PROTECTION INTERNATIONALE mettra en place un système de communication qui permettra à l’agent d’être joignable tout au long de son service aussi bien pour les responsables de FIIT PROTECTION INTERNATIONALE ou de l’agent sur le site.</p>

                                <h3 class="skills__line">Moyens humains</h3>
                                <p><span class="skills__line">Qualification des agents :</span> FIIT PROTECTION INTERNATIONALE mettra à la disposition de ses clients des agents de prévention et de sécurité; l’ensemble de son personnel possède un casier judiciaire vierge. Nos agents sont soit des anciens militaires ou des adeptes d’arts martiaux 1er dan comme grade minimum de la discipline pratiquée par l’agent concerné.</p>
                                <p><span class="skills__line">Tenue des agents :</span> La tenue des agents sera composée en période de : 
                                    <br><span class="skills__line"> *Chaleur : </span> 
                                    <br> -  T-shirt noir avec écusson FIIT PROTECTION INTERNATIONALE  
                                    <br> -  Treillis  
                                    <br> -  Rangers  
                                    <br> -  Lacoste  
                                    <br><span class="skills__line"> *Fraicheur : </span>
                                    <br> -  Un pull noir avec écusson de FIIT PROTECTION INTERNATIONALE  
                                    <br> -  Treillis  
                                    <br> -  Rangers  
                                    <br> -  Chemise (longue ou courte) ; casquette 
                                    <br> -  Costume cravate (pour les évènementiels) </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--==================== SERVICES ====================-->
    <section class="services section" id="services">
        <h2 class="section__title">Nos Services</h2>
        <span class="section__subtitle">Ce que nous offrons</span>
        
        <div class="services__container container grid">
            <p class="services__describe">L’entreprise vous accompagne, identifie l’ensemble de vos besoins et vous propose une large gamme de solutions, pour vous permettre de vous adapter rapidement et efficacement aux évolutions du marché et obtenir un avantage compétitif  durable.</p>

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

    <!--==================== SERVICES ====================-->
    <section class="gallery section" id="gallery">
        <h2 class="section__title">Gallerie</h2>
        <span class="section__subtitle">FPI en images</span>
        
        <div class="swiper__container container">
            <div class="swiper mySwiperGalleryImg swiper-initialized swiper-ios">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/20.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/21.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/22.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/23.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/1.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/2.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/3.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/4.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/5.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/6.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/7.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/8.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/9.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/10.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/11.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/12.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/13.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/14.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/15.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/16.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/17.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/18.jpeg') }}" alt="Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('gallery/imgs/19.jpeg') }}" alt="Image">
                    </div>
                    
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                {{-- <div class="swiper-scrollbar"></div> --}}
                <div class="swiper-pagination"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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
                        <span class="contact__subtitle"> fiitprotectioninternationnale@gmail.com</span>
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

        <div class="contact__map">
            @map([
                'lat' => 14.782549217596985,
                'lng' => -17.393616857949606,
                'zoom' => 17,
                'markers' => [
                    [
                        'title' => 'FIIT PROTECTION INTERNATIONNALE',
                        'lat' => 14.782549217596985,
                        'lng' => -17.393616857949606,
                        'url' => 'https://fiit-protection,com',
                    ],
                ],
            ])
        </div>
    </section>


@endsection