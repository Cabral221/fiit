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
                    <h1 class="swiper__caption--title">FIIT PROTECTION INTERNATIONALE</h1>
                    <h3 class="swiper__caption--subtitle">Voir - Analyser - Juger - Agir</h3>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_2.jpeg') }});">
                <div class="swiper__caption">
                    <h1 class="swiper__caption--title">FIIT PROTECTION INTERNATIONALE</h1>
                    <h3 class="swiper__caption--subtitle">Voir - Analyser - Juger - Agir</h3>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_3.jpeg') }});">
                <div class="swiper__caption">
                    <h1 class="swiper__caption--title">FIIT PROTECTION INTERNATIONALE</h1>
                    <h3 class="swiper__caption--subtitle">Voir - Analyser - Juger - Agir</h3>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_4.jpeg') }});">
                <div class="swiper__caption">
                    <h1 class="swiper__caption--title">FIIT PROTECTION INTERNATIONALE</h1>
                    <h3 class="swiper__caption--subtitle">Voir - Analyser - Juger - Agir</h3>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url({{ asset('img/slide_5.jpeg') }});">
                <div class="swiper__caption">
                    <h1 class="swiper__caption--title">FIIT PROTECTION INTERNATIONALE</h1>
                    <h3 class="swiper__caption--subtitle">Voir - Analyser - Juger - Agir</h3>
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
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

            <h2 class="about__title">NOS RESSOURCES HUMAINES</h2>
            <p class="about__subtitle">
                <p>
                    Formation : nous avons pour ambition de faire le recyclage de compétences des agents ceux deux fois par ans par des professionnels de sécurité.
                </p>
                <p>    
                    Compétence du personnel de l’encadrement : <span class="skills__line">Monsieur Mactar DIOP</span> gérant, avec 22 ans d’expériences depuis 1998 dans le domaine de la sécurité, il fut membre de la garde rapprochée de Cheikh Sultan Ben Zaid al Nahya (<span class="skills__line">1er ministre des Emirats arabes unis à Abu Dhabi, garde rapprochée du Président Macky SALL 2009 à 2012</span>) 
                </p>
                <p>    
                    <span class="skills__line">Maitre Modou GUEYE</span> : 1 e DAN de Taekwondo et 3e DAN KUNGFU entraineur équipe national du kungfu Sénégalais. 
                </p>
                <p>
                    <span class="skills__line">Monsieur  Ansoumané  COLY</span>  -  responsable  à FIIT  PROTECTION  INTERNATIONALE  connaissance du terrain ; 10 ans d’expérience dans le métier de la protection rapprochée. 
                </p>
                <p>
                    Sécurité : Chaque Agent aura une copie d’un plan de Prévention signé par Mactar DIOP, gérant « FIIT PROTECTION INTERNATIONALE ». Cela afin de nous assurer que l’agent a bel et bien pris connaissance du plan de prévention. Des audits seront effectués par la direction de façon inopinée ainsi que des visites et des contrôles de sites. 
                </p>
                <p>
                    Management : notre politique de Management qualificative passe par des  tenues impeccables. Des contrôles réguliers seront effectués afin de veiller à la bonne tenue des Agents, sur le site. Des sanctions pécuniaires seront envisagées en cas de manquement à cette consigne. Des  objectifs seront fixés à chaque Agent afin de les motiver dans leur travail et de façon à pouvoir récompenser à l’atteinte de ces objectifs. 
                </p>
                <p>
                    La société Fiit  PROTECTION  INTERNATIONALE a comme moyens de diffusion  des documents et des informations :
                    <br> -  Le moyen « oral » : passation des informations aux Agents et vice versa par téléphone ;
                    <br> -  Le moyen « écrit » : passation des informations par le biais du cahier d’anomalies.
                    <br>
                    Le suivi et le contrôle du travail des Agents affectés sur un site donné  seront effectués de façon permanente. Les Agents pourront être prévenus de ce contrôle, mais seront également contrôlés de manière aléatoire et sans être prévenus au préalable. 
                </p>
                <p>
                    Effectif : 
                    L’effectif est de : 
                    
                    Encadrement :  
                    <br> - <span class="skills__line"> 01 gérant ;</span>
                    <br> - <span class="skills__line"> 03 responsables de sites et d’Agents ;</span>
                    <br> - <span class="skills__line"> 01 assistant de gestions ;</span>
                    <br> - <span class="skills__line"> 01 comptable ;</span>
                    <br> - <span class="skills__line"> 01 secrétaire ;</span> 
                    
                    Personnel de sécurité :  Soixante (60) personnes habilitées reparties de la manière suivante : 
                    <br> - <span class="skills__line"> Agent de Prévention ;</span> 
                    <br> - <span class="skills__line"> Agents de sécurité ;</span> 
                    <br> - <span class="skills__line"> Agents de cérémonies, d’évènements et salon.</span> 
                </p>
            </p>

            <h2 class="about__title">Références</h2>
            <p class="about__subtitle">
                « FIIT PROTECTION INTERNATIONALE » est : 
                <br> La surveillance – gardiennage – évènementiel ; 
                <br> Protection physique de personne ;
                <br> Discothèque – manifestation sportive. 
                <br> Formation : nos Agents reçoivent de l’encadrement de <span class="skills__line">Maitre Dame SECK</span> dans les : 
                <br>&nbsp; -  Techniques de close combat ; 
                <br>&nbsp; -  Technique de bâton télescopique ; 
                <br>&nbsp; -  Techniques d’Aïkido ; 
                <br>&nbsp; -  Techniques de Krav Maga. 
            </p>
        
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

                    <!--==================== SKILLS 4 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-check-circle skills__icon"></i>
                            
                            <div>
                                <h1 class="skills__titles">Assurance qualité et capacité financière</h1>
                            </div>
    
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
    
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <p>
                                    <h3 class="skills__line">Assurance de qualité</h3> 
                                    
                                    L’organisation de l’assurance qualité sera effectuée de la manière suivante :
                                    <br> -  Par des audits du personnel et des agents de sécurité affectés au  site, ce qui nous permettra de proposer des méthodes ou des moyens pour améliorer les éventuelles remarques ou demandes ;
                                    <br> -  Un questionnaire qualité sera remis à nos clients afin d’avoir une meilleure connaissance de leurs appréciations sur notre travail. De plus, ce questionnaire nous permettra à nos clients de poser des problèmes, auxquels des solutions et des réponses seront proposés dans les meilleurs délais,
                                    <br> -  Un responsable sera présent plusieurs fois par mois sur le site afin de pouvoir se rendre compte de lui-même du travail des Agents, des corrections ou des modifications à apporter au plan de progrès. Il fera également la coordination entre le siège social, le salarié et le client. 
                                    
                                    <span class="skills__line"> Les documents mis à disposition du personnel sont : </span>
                                    <br> -  Règlement intérieur
                                    <br> -  Plan de Prévention 
                                    <br> Les contrôles réalisés par le responsable seront aléatoires et inopinés et le suivi de ces visites fera l’objet d’un rapport qui sera transmis à la Direction. 
                                    
                                    <h3 class="skills__line">Capacités financières : </h3>
                                    
                                    <span class="skills__line">Politique financière</span>
                                    <br> Une bonne politique financière consiste à assurer la solvabilité de notre service au moindre coût ; cela signifie que nous devons être en mesure d’honorer nos échéances financières à tout moment, en maintenant une encaisse minimum. Par ailleurs, elle appelle, ou au contraire à maximiser le rendement, les placements de ses excédents de trésorerie éventuels.
                                    <br> La dite politique financière nous permettra de faire face aux aléas de la conjoncture qui se traduisent par des déséquilibres entre les encaissements et les décaissements prévus pour la bonne exécution de nos missions.  
                                </p>
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

    <!--==================== GALLERY iMAGES ====================-->
    <section class="gallery section" id="gallery">
        <h2 class="section__title">Gallerie</h2>
        <span class="section__subtitle">FPI en images et vidéos</span>
        
        <div class="container">
            <h3 class="gallery__title">En Image (40)</h3>
            <div class="card-columns">
                <div class="card"><img src="{{ asset('gallery/imgs/1.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/2.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/3.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/4.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/5.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/6.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/7.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/8.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/9.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/10.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/11.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/12.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/13.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/14.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/15.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/16.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/17.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/18.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/19.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/20.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/21.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/22.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/23.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/24.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/25.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/26.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/27.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/28.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/29.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/30.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/31.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/32.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/33.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/34.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/35.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/36.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/37.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/38.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/39.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/40.jpeg') }}" class="card-img-top" alt="Image"></div>
            </div>

            <h3 class="gallery__title">En Video (27)</h3>
             <div class="card-columns">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/1.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/2.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/3.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/4.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/5.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/6.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/7.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/8.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/9.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/10.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/11.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/12.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/12.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/13.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/14.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/15.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/16.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/17.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/18.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/19.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/20.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/21.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/22.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/23.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/24.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/25.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/26.mp4') }}" allowfullscreen sandbox></iframe></div>
                </div>
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="{{ asset('gallery/videos/27.mp4') }}" allowfullscreen sandbox></iframe></div>
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
                        <span class="contact__subtitle"> fiitprotectioninternationale@gmail.com</span>
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

            <form action="{{ route('frontend.contact') }}" method="POST" class="contact__form grid">
                @csrf
                <div class="contact__inputs grid">
                    <div class="contact__content">
                        <label for="name" class="contact__label">Nom</label>
                        <input type="text" name="name" id="" class="contact__input">
                    </div>
                    <div class="contact__content">
                        <label for="name" class="contact__label">Email</label>
                        <input type="email" name="email" id="" class="contact__input">
                    </div>
                </div>
                
                <div class="contact__content">
                    <label for="name" class="contact__label">Message</label>
                    <textarea name="message" id="" cols="0" rows="7" class="contact__input"></textarea>
                </div>

                <div>
                    <button type="submit" class="button button--flex">
                        Envoyé Message
                        <i class="uil uil-message button__icon"></i>
                    </button>
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
                        'title' => 'FIIT PROTECTION INTERNATIONALE',
                        'lat' => 14.782549217596985,
                        'lng' => -17.393616857949606,
                        'url' => 'https://fiit-protection,com',
                    ],
                ],
            ])
        </div>
    </section>


@endsection