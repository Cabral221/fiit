<header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">
            <img src="{{ asset('img/LogoFPI.png') }}" class="img" /> FIIT Protection Internationale
        </a> 
        
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list grid">
                <li class="nav__item">
                    <a href="#home" class="nav__link">
                        <i class="uil uil-estate nav__icon"></i> Accueil
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">
                        <i class="uil uil-user nav__icon"></i> Agence
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#services" class="nav__link">
                        <i class="uil uil-briefcase nav__icon"></i> Nos Services
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#gallery" class="nav__link">
                        <i class="uil uil-scenery nav__icon"></i> Gallerie
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">
                        <i class="uil uil-message nav__icon"></i> Contactez-nous
                    </a>
                </li>
            </ul>
            <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>
        <div class="nav__btns">
            <!-- Theme change Button -->
            {{-- <i class="uil uil-moon change-theme" id="theme-button"></i> --}}

            <div class="nav__toggle" id="nav-toggle">
                <i class="uil uil-apps"></i>
            </div>
        </div>
    </nav>
</header>

@if (config('boilerplate.frontend_breadcrumbs'))
    @include('frontend.includes.partials.breadcrumbs')
@endif
