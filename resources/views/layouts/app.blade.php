<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'ZENVYOR | Industrial Solutions' }}</title>
    @isset($meta)<meta name="description" content="{{ $meta }}">@endisset
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ZENVYOR">
    <meta property="og:locale" content="pt_PT">
    <meta property="og:title" content="{{ $title ?? 'ZENVYOR | Industrial Solutions' }}">
    @isset($meta)<meta property="og:description" content="{{ $meta }}">@endisset
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ url('/media/banner2-scaled.jpg') }}">
    <meta name="twitter:card" content="summary_large_image">
    @verbatim
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "ZENVYOR",
        "description": "Soluções industriais integradas: construção civil e obras públicas, energia solar, energia eólica, AVAC, electricidade geral e metalomecânica.",
        "url": "https://zenvyor.com",
        "logo": "https://zenvyor.com/media/logo-main.png",
        "image": "https://zenvyor.com/media/banner2-scaled.jpg",
        "telephone": "+351912510164",
        "email": "geral@zenvyor.com",
        "priceRange": "$$",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Caves de Coimbra, Rua das Areias nº 24, Armazém Move On",
            "postalCode": "3025-137",
            "addressLocality": "Coimbra",
            "addressCountry": "PT"
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"]
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Serviços ZENVYOR",
            "itemListElement": [
                { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Construção Civil e Obras Públicas", "url": "https://zenvyor.com/construcao-civil" } },
                { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Energia Solar", "url": "https://zenvyor.com/energia-solar" } },
                { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Energia Eólica", "url": "https://zenvyor.com/energia-eolica" } },
                { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "AVAC — Aquecimento, Ventilação e Ar Condicionado", "url": "https://zenvyor.com/avac" } },
                { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Electricidade Geral", "url": "https://zenvyor.com/electricidade-geral" } },
                { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Metalomecânica", "url": "https://zenvyor.com/metalomecanica" } }
            ]
        }
    }
    </script>
    @endverbatim
    <link rel="icon" type="image/png" href="/media/cropped-favico.png">
    <link rel="stylesheet" href="/fonts/google/css/rem.css">
    <link rel="stylesheet" href="/fonts/google/css/poppins.css">
    <link rel="stylesheet" href="/fonts/google/css/roboto.css">
    <link rel="stylesheet" href="/fonts/google/css/robotoslab.css">
    <link rel="stylesheet" href="/css/app.css">
    <!-- Google tag (gtag.js) — Consent Mode v2: só ativa após consentimento -->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('consent', 'default', { ad_storage: 'denied', analytics_storage: 'denied' });
        (function () {
            var c = localStorage.getItem('zenvyor_consent');
            if (c === 'all') {
                gtag('consent', 'update', { ad_storage: 'granted', analytics_storage: 'granted' });
            }
            if (c) {
                var s = document.createElement('script');
                s.async = true;
                s.src = 'https://www.googletagmanager.com/gtag/js?id=AW-17102141885';
                document.head.appendChild(s);
                gtag('js', new Date());
                gtag('config', 'AW-17102141885');
            }
        })();
    </script>
    @stack('head')
</head>
<body class="{{ request()->routeIs('home') ? 'is-home' : '' }}">

    <header id="myHeader">
        <div class="header-container">
            <div class="logo-container">
                <a href="/" style="display:inline-block;">
                    <picture><source srcset="/media/Zenvyor-Logo_White-1.avif" type="image/avif"><source srcset="/media/Zenvyor-Logo_White-1.webp" type="image/webp"><img src="/media/Zenvyor-Logo_White-1.png" alt="Zenvyor"></picture>
                </a>
            </div>
            <div class="my-menu-container">
                <nav id="menuItems" class="menu-items">
                    <a href="/sobre-nos">Sobre Nós</a>
                    <div class="dropdown-group" id="dropdownGroup">
                        <a href="/servicos" class="dropdown-toggle" id="servicesToggle">
                            Serviços <span class="arrow">▾</span>
                        </a>
                        <div id="servicesSubMenu" class="sub-menu">
                            <a href="/construcao-civil">Construção Civil</a>
                            <a href="/energia-solar">Energia Solar</a>
                            <a href="/energia-eolica">Energia Eólica</a>
                            <a href="/avac">AVAC</a>
                            <a href="/electricidade-geral">Electricidade Geral</a>
                            <a href="/metalomecanica">Metalomecânica</a>
                        </div>
                    </div>
                    <a href="/contacto">Contactos</a>
                </nav>
                <button id="desktopMenuBtn" class="menu-btn" type="button">Menu</button>
                <button id="hamburgerBtn" class="menu-button" type="button" aria-label="Menu">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </button>
            </div>
        </div>
    </header>
    <div id="overlay" class="overlay"></div>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-left">
            <a href="/"><picture><source srcset="/media/Zenvyor-Logo_White.avif" type="image/avif"><source srcset="/media/Zenvyor-Logo_White.webp" type="image/webp"><img src="/media/Zenvyor-Logo_White.png" alt="Zenvyor"></picture></a>
            <span class="footer-copy">&copy; {{ date('Y') }}</span>
        </div>
        <nav class="footer-menu">
            <a href="/politica-privacidade">Política de Privacidade</a>
            <a href="/politica-de-cookies-ue">Política de Cookies</a>
            <a href="/contacto">Contactos</a>
        </nav>
        <div class="crafted-by">
            <em>Crafted by</em>
            <a href="https://metamorph.one" target="_blank" rel="noopener">
                <span class="meta-bold">METAMORPH</span><span class="meta-light">.ONE</span>
            </a>
        </div>
    </footer>

    @include('partials.cookie-banner')
    <script src="/js/app.js"></script>
    @stack('scripts')
</body>
</html>
