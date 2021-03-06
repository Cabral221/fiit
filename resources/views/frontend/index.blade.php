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
        <span class="section__subtitle">Pr??sentation</span>
        
        <div class="about__container container grid">
            <div class="about__dg">
                <img src="{{ asset('img/pdg.jpeg') }}" alt="Pr??sident" class="about__img">
                <h2 class="about__title">Monsieur Mactar Diop</h2>
                <p class="about__subtitle">G??rant</p>
            </div>
            
            <div class="about__data">

                <div class="about__info">
                    <div>
                        <span class="about__info-title">22+</span>
                        <span class="about__info-name">Ann??es <br> d'experiences</span>
                    </div>
                    <div>
                        <span class="about__info-title">250+</span>
                        <span class="about__info-name">Agents <br> form??s</span>
                    </div>
                    <div>
                        <span class="about__info-title">02+</span>
                        <span class="about__info-name">soci??t??s <br> partenaires</span>
                    </div>
                </div>
                
                <div class="about__buttons">
                    <a download="" href="{{ asset('pdf/CV-Mactar-Diop.pdf') }}" class="button nutton--flex">
                        T??l??charge mon CV<i class="uil uil-download-alt button__icon"></i>
                    </a>
                </div>
                <br>
                <p class="about__description">L???entreprise FIIT PROTECTION INTERNATIONALE est une soci??t?? SUARL s??n??galaise, dynamique, n??e d???une v??ritable passion pour la conception et la s??curit??. Notre savoir-faire et nos comp??tences reposent sur un bureau d?????tudes, sur le terrain et des personnels exp??riment??s et motiv??s.</p>
            </div>
        </div>
        
        <div class="about__content container">
            <h2 class="about__title">Historique et Date de cr??ation</h2>
            <p class="about__subtitle">FIIT PROTECTION INTERNATIONALE a fourni aux instances comp??tentes les pi??ces justificatives en application aux actes uniformes sur le droit commercial g??n??ral et ont ??t?? v??rifi??e par le greffier en chef soussign?? qui a proc??d?? ?? l???inscription au registre de commerce le 26/09/2018 sous le num??ro RCCM N?? SN DKR 2018B 25776 avec comme NINEA le num??ro 007024839..</p>
        
            <h2 class="about__title">NOS METHODES DE TRAVAIL</h2>
            <p class="about__subtitle">Nous adoptons notre mode de travail en fonction de la mission qui nous est confi??e. De fa??on g??n??rale, nous proc??dons comme suit : <br> Notre personnel en tenue, a essentiellement un r??le de pr??vention et de dissuasion. Nos agents ont des expertises compte tenu de leur formation ant??rieur et un savoir-faire qui leur facilite le travail d?????quipe, ainsi ils  peuvent  demander un renfort aupr??s de leurs coll??gues; en cas de situation extr??me ou de violente altercation nos agents peuvent alerter les services de la police nationale, la gendarmerie, les pompiers...<br> Dans tous les cas notre personnel est tenu d?????viter un usage abusif de la violence.</p>

            <h2 class="about__title">NOS RESSOURCES HUMAINES</h2>
            <p class="about__subtitle">
                <p>
                    Formation : nous avons pour ambition de faire le recyclage de comp??tences des agents ceux deux fois par ans par des professionnels de s??curit??.
                </p>
                <p>    
                    Comp??tence du personnel de l???encadrement : <span class="skills__line">Monsieur Mactar DIOP</span> g??rant, avec 22 ans d???exp??riences depuis 1998 dans le domaine de la s??curit??, il fut membre de la garde rapproch??e de Cheikh Sultan Ben Zaid al Nahya (<span class="skills__line">1er ministre des Emirats arabes unis ?? Abu Dhabi, garde rapproch??e du Pr??sident Macky SALL 2009 ?? 2012</span>) 
                </p>
                <p>    
                    <span class="skills__line">Maitre Modou GUEYE</span> : 1 e DAN de Taekwondo et 3e DAN KUNGFU entraineur ??quipe national du kungfu S??n??galais. 
                </p>
                <p>
                    <span class="skills__line">Monsieur  Ansouman??  COLY</span>  -  responsable  ?? FIIT  PROTECTION  INTERNATIONALE  connaissance du terrain ; 10 ans d???exp??rience dans le m??tier de la protection rapproch??e. 
                </p>
                <p>
                    S??curit?? : Chaque Agent aura une copie d???un plan de Pr??vention sign?? par Mactar DIOP, g??rant ?? FIIT PROTECTION INTERNATIONALE ??. Cela afin de nous assurer que l???agent a bel et bien pris connaissance du plan de pr??vention. Des audits seront effectu??s par la direction de fa??on inopin??e ainsi que des visites et des contr??les de sites. 
                </p>
                <p>
                    Management : notre politique de Management qualificative passe par des  tenues impeccables. Des contr??les r??guliers seront effectu??s afin de veiller ?? la bonne tenue des Agents, sur le site. Des sanctions p??cuniaires seront envisag??es en cas de manquement ?? cette consigne. Des  objectifs seront fix??s ?? chaque Agent afin de les motiver dans leur travail et de fa??on ?? pouvoir r??compenser ?? l???atteinte de ces objectifs. 
                </p>
                <p>
                    La soci??t?? Fiit  PROTECTION  INTERNATIONALE a comme moyens de diffusion  des documents et des informations :
                    <br> -  Le moyen ?? oral ?? : passation des informations aux Agents et vice versa par t??l??phone ;
                    <br> -  Le moyen ?? ??crit ?? : passation des informations par le biais du cahier d???anomalies.
                    <br>
                    Le suivi et le contr??le du travail des Agents affect??s sur un site donn??  seront effectu??s de fa??on permanente. Les Agents pourront ??tre pr??venus de ce contr??le, mais seront ??galement contr??l??s de mani??re al??atoire et sans ??tre pr??venus au pr??alable. 
                </p>
                <p>
                    Effectif : 
                    L???effectif est de : 
                    
                    Encadrement :  
                    <br> - <span class="skills__line"> 01 g??rant ;</span>
                    <br> - <span class="skills__line"> 03 responsables de sites et d???Agents ;</span>
                    <br> - <span class="skills__line"> 01 assistant de gestions ;</span>
                    <br> - <span class="skills__line"> 01 comptable ;</span>
                    <br> - <span class="skills__line"> 01 secr??taire ;</span> 
                    
                    Personnel de s??curit?? :  Soixante (60) personnes habilit??es reparties de la mani??re suivante : 
                    <br> - <span class="skills__line"> Agent de Pr??vention ;</span> 
                    <br> - <span class="skills__line"> Agents de s??curit?? ;</span> 
                    <br> - <span class="skills__line"> Agents de c??r??monies, d?????v??nements et salon.</span> 
                </p>
            </p>

            <h2 class="about__title">R??f??rences</h2>
            <p class="about__subtitle">
                ?? FIIT PROTECTION INTERNATIONALE ?? est : 
                <br> La surveillance ??? gardiennage ??? ??v??nementiel ; 
                <br> Protection physique de personne ;
                <br> Discoth??que ??? manifestation sportive. 
                <br> Formation : nos Agents re??oivent de l???encadrement de <span class="skills__line">Maitre Dame SECK</span> dans les : 
                <br>&nbsp; -  Techniques de close combat ; 
                <br>&nbsp; -  Technique de b??ton t??lescopique ; 
                <br>&nbsp; -  Techniques d???A??kido ; 
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
                                <p>L???entreprise FIIT PROTECTION INTERNATIONALE est constitu??e des agents de s??curit??s et des adeptes d???arts martiaux dispos??s ?? mettre en ??uvre leurs comp??tences afin de r??pondre ?? vos besoins de s??curit??s </p>
                                <p>L???entreprise vous accompagne, identifie l???ensemble de vos besoins et vous propose une large gamme de solutions, pour vous permettre de vous adapter rapidement et efficacement aux ??volutions du march?? et obtenir un avantage comp??titif durable.
                                    Nous proposons ?? nos clients des services les plus compl??tes possibles pour am??liorer leur s??curit?? et faciliter leur travail.</p>
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
                                <p>La politique de FIIT PROTECT INTERNATIONALE est ax??e sur l???avenir.</p>
                                <p><span class="skills__line">*Professionnelle :</span> FIIT PROTECTION INTERNATIONALE met un point d???honneur a ??quip?? ses agents des derni??res nouveaut??s techniques afin d???effectuer un travail dans les meilleurs conditions possibles (pr??sentement FPI dispose d???armes ?? feux, de bombe a gaz, de matraques ??lectriques...)</p>
                                <p><span class="skills__line">*Formation :</span> Nos agents sont tous, soit des agents ayant fait au minimum deux (2) ans de services militaire ou paramilitaire, soit des adeptes d???arts martiaux avec au minimum le grade de 1er DAN dans la discipline respective. Il faut aussi pr??ciser que le personnel est r??guli??rement form?? et recycl?? aux nouvelles techniques de s??curit??.</p>
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
                                <h3 class="skills__line">Moyens mat??riels</h3>
                                <p><span class="skills__line">*Cahier de d???anomalie :</span> Il permet une tra??abilit?? des ??v??nements chronologiques de la mission de l???agent. Effectivement, l???agent doit y noter sa prise de services, l???ensemble des ??v??nements qui se sont d??roul??s durant son service et bien entendu, sa fin de service. Cela nous permet d???avoir ??crite des ??v??nements qui se passent sur son site, et pour nous, c???est un excellent moyen de contr??ler notre personnel. </p>
                                <p><span class="skills__line">*T??l??phone portable :</span> FIIT PROTECTION INTERNATIONALE mettra en place un syst??me de communication qui permettra ?? l???agent d?????tre joignable tout au long de son service aussi bien pour les responsables de FIIT PROTECTION INTERNATIONALE ou de l???agent sur le site.</p>

                                <h3 class="skills__line">Moyens humains</h3>
                                <p><span class="skills__line">Qualification des agents :</span> FIIT PROTECTION INTERNATIONALE mettra ?? la disposition de ses clients des agents de pr??vention et de s??curit??; l???ensemble de son personnel poss??de un casier judiciaire vierge. Nos agents sont soit des anciens militaires ou des adeptes d???arts martiaux 1er dan comme grade minimum de la discipline pratiqu??e par l???agent concern??.</p>
                                <p><span class="skills__line">Tenue des agents :</span> La tenue des agents sera compos??e en p??riode de : 
                                    <br><span class="skills__line"> *Chaleur : </span> 
                                    <br> -  T-shirt noir avec ??cusson FIIT PROTECTION INTERNATIONALE  
                                    <br> -  Treillis  
                                    <br> -  Rangers  
                                    <br> -  Lacoste  
                                    <br><span class="skills__line"> *Fraicheur : </span>
                                    <br> -  Un pull noir avec ??cusson de FIIT PROTECTION INTERNATIONALE  
                                    <br> -  Treillis  
                                    <br> -  Rangers  
                                    <br> -  Chemise (longue ou courte) ; casquette 
                                    <br> -  Costume cravate (pour les ??v??nementiels) </p>
                            </div>
                        </div>
                    </div>

                    <!--==================== SKILLS 4 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-check-circle skills__icon"></i>
                            
                            <div>
                                <h1 class="skills__titles">Assurance qualit?? et capacit?? financi??re</h1>
                            </div>
    
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
    
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <p>
                                    <h3 class="skills__line">Assurance de qualit??</h3> 
                                    
                                    L???organisation de l???assurance qualit?? sera effectu??e de la mani??re suivante :
                                    <br> -  Par des audits du personnel et des agents de s??curit?? affect??s au  site, ce qui nous permettra de proposer des m??thodes ou des moyens pour am??liorer les ??ventuelles remarques ou demandes ;
                                    <br> -  Un questionnaire qualit?? sera remis ?? nos clients afin d???avoir une meilleure connaissance de leurs appr??ciations sur notre travail. De plus, ce questionnaire nous permettra ?? nos clients de poser des probl??mes, auxquels des solutions et des r??ponses seront propos??s dans les meilleurs d??lais,
                                    <br> -  Un responsable sera pr??sent plusieurs fois par mois sur le site afin de pouvoir se rendre compte de lui-m??me du travail des Agents, des corrections ou des modifications ?? apporter au plan de progr??s. Il fera ??galement la coordination entre le si??ge social, le salari?? et le client. 
                                    
                                    <span class="skills__line"> Les documents mis ?? disposition du personnel sont : </span>
                                    <br> -  R??glement int??rieur
                                    <br> -  Plan de Pr??vention 
                                    <br> Les contr??les r??alis??s par le responsable seront al??atoires et inopin??s et le suivi de ces visites fera l???objet d???un rapport qui sera transmis ?? la Direction. 
                                    
                                    <h3 class="skills__line">Capacit??s financi??res : </h3>
                                    
                                    <span class="skills__line">Politique financi??re</span>
                                    <br> Une bonne politique financi??re consiste ?? assurer la solvabilit?? de notre service au moindre co??t ; cela signifie que nous devons ??tre en mesure d???honorer nos ??ch??ances financi??res ?? tout moment, en maintenant une encaisse minimum. Par ailleurs, elle appelle, ou au contraire ?? maximiser le rendement, les placements de ses exc??dents de tr??sorerie ??ventuels.
                                    <br> La dite politique financi??re nous permettra de faire face aux al??as de la conjoncture qui se traduisent par des d??s??quilibres entre les encaissements et les d??caissements pr??vus pour la bonne ex??cution de nos missions.  
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
            <p class="services__describe">L???entreprise vous accompagne, identifie l???ensemble de vos besoins et vous propose une large gamme de solutions, pour vous permettre de vous adapter rapidement et efficacement aux ??volutions du march?? et obtenir un avantage comp??titif  durable.</p>

            <!--==================== SERVICE 1 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-shield-check services__icon"></i>
                    <h3 class="services__title">S??curit?? <br> gardiennage</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Voir Plus
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">S??curit?? <br> gardiennage</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un r??le de pr??vention et de dissuasion.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Expertises compte tenu de leur formation ant??rieur.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un savoir-faire qui leur facilite le travail d?????quipe.</p>
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
                    <h3 class="services__title">Protection <br> rapproch??e</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Voir Plus
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Protection <br> rapproch??e</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un r??le de pr??vention et de dissuasion.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Expertises compte tenu de leur formation ant??rieur.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un savoir-faire qui leur facilite le travail d?????quipe.</p>
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
                    <h3 class="services__title">Formation d???agent de s??curit??</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Voir Plus
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Formation d???agent de s??curit??</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un r??le de pr??vention et de dissuasion.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Expertises compte tenu de leur formation ant??rieur.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un savoir-faire qui leur facilite le travail d?????quipe.</p>
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
                                <p>Un r??le de pr??vention et de dissuasion.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Expertises compte tenu de leur formation ant??rieur.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un savoir-faire qui leur facilite le travail d?????quipe.</p>
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
                    <h3 class="services__title">Mise en disposition d???agents de s??curit??</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Voir Plus
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Mise en disposition d???agents de s??curit??</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un r??le de pr??vention et de dissuasion.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Expertises compte tenu de leur formation ant??rieur.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un savoir-faire qui leur facilite le travail d?????quipe.</p>
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
                                <p>Un r??le de pr??vention et de dissuasion.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Expertises compte tenu de leur formation ant??rieur.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Un savoir-faire qui leur facilite le travail d?????quipe.</p>
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
        <span class="section__subtitle">FPI en images et vid??os</span>
        
        <div class="container">
            <h3 class="gallery__title">En Image (44)</h3>
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
                <div class="card"><img src="{{ asset('gallery/imgs/27-1.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/28-1.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/29-1.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/30-1.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/31.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/32.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/33.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/34-1.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/35.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/36.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/37.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/38.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/39.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/40.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/41.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/42.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/40.jpeg') }}" class="card-img-top" alt="Image"></div>
                <div class="card"><img src="{{ asset('gallery/imgs/44.jpeg') }}" class="card-img-top" alt="Image"></div>
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
                        <h3 class="contact__title">T??l??phone</h3>
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
                        <span class="contact__subtitle">Villa n?? 110, cit?? Sentenac ??? Golf Nord-Est Gu??diawaye Dakar </span>
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
                        Envoy?? Message
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