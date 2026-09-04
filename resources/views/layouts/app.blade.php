<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Katalog Karya Mahasiswa')</title>

    {{-- Google Fonts: Preconnect --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    {{-- Google Fonts: Inter & Plus Jakarta Sans --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet" />

    {{-- Google Fonts: Material Symbols --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    {{-- Base Styles --}}
    <style>
        @layer base {
            html, body {
                margin: 0;
                padding: 0;
            }
            body {
                overscroll-behavior: none;
            }
            main > :first-child {
                margin-top: 0 !important;
            }
            main > :last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Tailwind Config --}}
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        // ── Primary: Forest Green ─────────────────────────────
                        "primary":                    "#125238",
                        "on-primary":                 "#ffffff",
                        "primary-container":          "#2f6b4f",
                        "on-primary-container":       "#aae9c6",
                        "primary-fixed":              "#b1f0cd",
                        "primary-fixed-dim":          "#96d4b2",
                        "on-primary-fixed":           "#002113",
                        "on-primary-fixed-variant":   "#105137",
                        "inverse-primary":            "#96d4b2",
                        "surface-tint":               "#2d694d",

                        // ── Secondary: Warm Orange ────────────────────────────
                        "secondary":                  "#8e4e14",
                        "on-secondary":               "#ffffff",
                        "secondary-container":        "#ffab69",
                        "on-secondary-container":     "#783d01",
                        "secondary-fixed":            "#ffdcc4",
                        "secondary-fixed-dim":        "#ffb780",
                        "on-secondary-fixed":         "#2f1400",
                        "on-secondary-fixed-variant": "#6f3800",

                        // ── Tertiary: Coral ───────────────────────────────────
                        "tertiary":                   "#852810",
                        "on-tertiary":                "#ffffff",
                        "tertiary-container":         "#a53f25",
                        "on-tertiary-container":      "#ffd1c6",
                        "tertiary-fixed":             "#ffdad2",
                        "tertiary-fixed-dim":         "#ffb4a2",
                        "on-tertiary-fixed":          "#3c0700",
                        "on-tertiary-fixed-variant":  "#83260e",

                        // ── Neutral / Surface ─────────────────────────────────
                        "surface":                    "#f8f9ff",
                        "on-surface":                 "#121c2a",
                        "surface-variant":            "#d9e3f6",
                        "on-surface-variant":         "#404943",
                        "surface-dim":                "#d0dbed",
                        "surface-bright":             "#f8f9ff",
                        "surface-container-lowest":   "#ffffff",
                        "surface-container-low":      "#eff4ff",
                        "surface-container":          "#e6eeff",
                        "surface-container-high":     "#dee9fc",
                        "surface-container-highest":  "#d9e3f6",
                        "inverse-surface":            "#27313f",
                        "inverse-on-surface":         "#eaf1ff",
                        "background":                 "#f8f9ff",
                        "on-background":              "#121c2a",
                        "outline":                    "#707972",
                        "outline-variant":            "#c0c9c1",

                        // ── Error ─────────────────────────────────────────────
                        "error":                      "#ba1a1a",
                        "on-error":                   "#ffffff",
                        "error-container":            "#ffdad6",
                        "on-error-container":         "#93000a",
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg:      "0.5rem",
                        xl:      "0.75rem",
                        full:    "9999px",
                    },
                    spacing: {
                        "container-max":  "75rem",
                        "gutter-mobile":  "1rem",
                        "gutter-desktop": "1.5rem",
                        "space-2xs":      "0.25rem",
                        "space-xs":       "0.5rem",
                        "space-sm":       "0.75rem",
                        "space-md":       "1rem",
                        "space-lg":       "1.5rem",
                        "space-xl":       "2rem",
                        "space-2xl":      "3rem",
                        "space-3xl":      "4rem",
                    },
                    fontFamily: {
                        "display-lg":        ["Plus Jakarta Sans", "sans-serif"],
                        "display-lg-mobile": ["Plus Jakarta Sans", "sans-serif"],
                        "headline-lg":       ["Plus Jakarta Sans", "sans-serif"],
                        "headline-md":       ["Plus Jakarta Sans", "sans-serif"],
                        "headline-sm":       ["Plus Jakarta Sans", "sans-serif"],
                        "title-md":          ["Plus Jakarta Sans", "sans-serif"],
                        "body-lg":           ["Inter", "sans-serif"],
                        "body-md":           ["Inter", "sans-serif"],
                        "body-sm":           ["Inter", "sans-serif"],
                        "label-md":          ["Inter", "sans-serif"],
                        "label-sm":          ["Inter", "sans-serif"],
                    },
                    fontSize: {
                        "display-lg":        ["48px", { lineHeight: "56px", letterSpacing: "-0.02em",  fontWeight: "700" }],
                        "display-lg-mobile": ["32px", { lineHeight: "40px", letterSpacing: "-0.015em", fontWeight: "700" }],
                        "headline-lg":       ["32px", { lineHeight: "40px", letterSpacing: "-0.01em",  fontWeight: "600" }],
                        "headline-lg-mobile":["24px", { lineHeight: "32px",                            fontWeight: "600" }],
                        "headline-md":       ["24px", { lineHeight: "32px",                            fontWeight: "600" }],
                        "headline-sm":       ["20px", { lineHeight: "28px",                            fontWeight: "600" }],
                        "title-md":          ["18px", { lineHeight: "26px",                            fontWeight: "600" }],
                        "body-lg":           ["16px", { lineHeight: "26px",                            fontWeight: "400" }],
                        "body-md":           ["14px", { lineHeight: "22px",                            fontWeight: "400" }],
                        "body-sm":           ["12px", { lineHeight: "18px",                            fontWeight: "400" }],
                        "label-md":          ["14px", { lineHeight: "20px", letterSpacing: "0.01em",   fontWeight: "600" }],
                        "label-sm":          ["12px", { lineHeight: "16px", letterSpacing: "0.02em",   fontWeight: "500" }],
                    },
                },
            },
        };
    </script>

    @stack('head')
</head>

<body class="bg-surface font-body-md text-on-surface antialiased">

    {{-- =========================================================
         NAVBAR
    ========================================================== --}}
    <header class="fixed top-0 left-0 right-0 z-50 bg-surface-container-lowest/95 backdrop-blur-md shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="max-w-container-max mx-auto px-gutter-mobile lg:px-gutter-desktop h-20 flex items-center justify-between gap-space-md">

            {{-- Brand / Logo --}}
            <div class="flex items-center gap-space-md">
                <a href="{{ route('home') }}" class="flex items-center gap-space-sm group">
                    <img
                        src="{{ asset('logo.jpg') }}"
                        alt="Katalog Mahasiswa Brand Logo"
                        class="h-12 w-auto object-contain"
                    />
                    <div class="flex flex-col">
                        <span class="font-title-md text-title-md text-on-surface tracking-tight leading-none group-hover:text-primary-container transition-colors">
                            Proyek Usaha Mandiri
                        </span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant leading-tight">
                            Pertanian Polsub
                        </span>
                    </div>
                </a>
            </div>

            {{-- Navigation Links --}}
            <nav class="hidden md:flex items-center gap-space-xs p-space-2xs" data-active-classes="text-primary-container bg-surface-container font-label-md rounded-full">
                <a href="{{ route('home') }}"
                   class="px-space-md py-space-xs transition-all font-label-md rounded-full {{ request()->routeIs('home') ? 'text-primary-container bg-surface-container' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low' }}">
                    Beranda
                </a>
                <a href="{{ route('products.index') }}"
                   class="px-space-md py-space-xs transition-all font-label-md text-label-md rounded-full {{ request()->routeIs('products.*') ? 'text-primary-container bg-surface-container' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low' }}">
                    Katalog
                </a>
                <a href="{{ route('about') }}"
                   class="px-space-md py-space-xs transition-all font-label-md text-label-md rounded-full {{ request()->routeIs('about') ? 'text-primary-container bg-surface-container' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low' }}">
                    Tentang
                </a>
            </nav>

            {{-- Right Side Actions --}}
            <div class="flex items-center gap-space-sm">
                <div class="hidden sm:inline-flex items-center gap-space-2xs px-space-md py-space-2xs rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm shadow-[0_1px_4px_rgba(0,0,0,0.04)]">
                    <span class="material-symbols-outlined text-[16px] text-secondary">workspace_premium</span>
                    <span>Wirausaha Kampus</span>
                </div>
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
                </div>
            </div>

        </div>
    </header>

    {{-- =========================================================
         MAIN CONTENT
    ========================================================== --}}
    <main class="w-full pt-20 bg-surface min-h-[calc(100vh-140px)]">
        <div class="flex flex-col w-full">
            @yield('content')
        </div>
    </main>

    {{-- =========================================================
         FOOTER
    ========================================================== --}}
    <footer class="w-full bg-surface-container-lowest shadow-[0_-1px_8px_rgba(0,0,0,0.03)] mt-space-3xl">
        <div class="max-w-container-max mx-auto px-gutter-mobile lg:px-gutter-desktop py-space-3xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-xl">

                {{-- Footer Col 1: Brand --}}
                <div class="flex flex-col gap-space-md">
                    <div class="flex items-center gap-space-sm">
                        <img
                            src="{{ asset('logo.jpg') }}"
                            alt="Katalog Mahasiswa Brand Logo"
                            class="h-8 w-auto object-contain"
                        />
                        <span class="font-headline-sm text-headline-sm text-on-surface font-title-md">Proyek Usaha Mandiri</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Platform etalase digital kreasi dan kewirausahaan mahasiswa. Memajukan produk kuliner dan kerajinan lokal kampus.
                    </p>
                    <div class="flex items-center gap-space-sm pt-space-xs">
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram Mahasiswa"
                           class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-[18px]">photo_camera</span>
                        </a>
                        <a href="https://tiktok.com" target="_blank" rel="noopener noreferrer" aria-label="TikTok Karya Mahasiswa"
                           class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-[18px]">play_circle</span>
                        </a>
                        <a href="https://wa.me/" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Hubungi Penjual"
                           class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                        </a>
                    </div>
                </div>

                {{-- Footer Col 2: Quick Navigation --}}
                <div class="flex flex-col gap-space-sm">
                    <h3 class="font-label-md text-label-md text-on-surface uppercase tracking-wider">Navigasi Cepat</h3>
                    <nav class="flex flex-col gap-space-2xs">
                        <a href="{{ route('home') }}" class="font-body-md text-body-md text-on-surface-variant hover:text-primary-container transition-colors py-space-2xs">Beranda</a>
                        <a href="{{ route('products.index') }}" class="font-body-md text-body-md text-on-surface-variant hover:text-primary-container transition-colors py-space-2xs">Katalog Produk</a>
                        <a href="{{ route('about') }}" class="font-body-md text-body-md text-on-surface-variant hover:text-primary-container transition-colors py-space-2xs">Tentang Kami</a>
                    </nav>
                </div>

                {{-- Footer Col 3: Product Categories --}}
                <div class="flex flex-col gap-space-sm">
                    <h3 class="font-label-md text-label-md text-on-surface uppercase tracking-wider">Kategori Produk</h3>
                    <div class="flex flex-col gap-space-2xs">
                        <a href="{{ route('products.index', ['category' => 'makanan']) }}" class="font-body-md text-body-md text-on-surface-variant hover:text-primary-container transition-colors py-space-2xs">Makanan &amp; Camilan</a>
                        <a href="{{ route('products.index', ['category' => 'kerajinan']) }}" class="font-body-md text-body-md text-on-surface-variant hover:text-primary-container transition-colors py-space-2xs">Aksesoris &amp; Kerajinan</a>
                    </div>
                </div>

                {{-- Footer Col 4: Contact --}}

            </div>

            {{-- Footer Bottom Bar --}}
            <div class="mt-space-2xl pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md text-center sm:text-left bg-surface-container-low p-space-md rounded-xl">
                <p class="font-body-sm text-body-sm text-on-surface-variant">
                    © 2025 Katalog Karya Mahasiswa. Dibuat dengan bangga untuk mendukung wirausaha muda kampus.
                </p>
                <div class="inline-flex items-center gap-space-2xs font-label-sm text-label-sm text-primary-container">
                    <span class="material-symbols-outlined text-[16px]"></span>
                    <span>by Ufutt</span>
                </div>
            </div>

        </div>
    </footer>

    @stack('scripts')
</body>

</html>
