@extends('layouts.app')

@section('title', 'Tentang Kami - Katalog Karya Mahasiswa')

@section('content')

    {{-- =====================================================
         Hero Section: About Page Header
    ====================================================== --}}
    <section class="relative w-full overflow-hidden bg-gradient-to-b from-surface-container-low via-surface to-surface pb-space-2xl pt-space-xl">
        <div class="max-w-container-max mx-auto px-gutter-mobile lg:px-gutter-desktop">

            {{-- Page Title Block --}}
            <div class="flex flex-col items-center text-center max-w-3xl mx-auto mb-space-2xl">
                <div class="inline-flex items-center gap-space-2xs px-space-md py-space-2xs rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm mb-space-md shadow-sm">
                    <span class="material-symbols-outlined text-[16px] text-secondary">info</span>
                    <span>Inisiatif Mahasiswa Kreatif Kampus</span>
                </div>
                <h1 class="font-display-lg text-display-lg-mobile lg:text-display-lg text-on-surface tracking-tight leading-tight mb-space-md">
                    Tentang <span class="text-primary-container relative inline-block">
                        PUM
                        <svg class="absolute left-0 -bottom-2 w-full h-3 text-secondary-container/60 fill-none stroke-current"
                             viewBox="0 0 120 12" preserveAspectRatio="none">
                            <path d="M3 9C25 3 85 3 117 9" stroke-linecap="round" stroke-width="5"></path>
                        </svg>
                    </span>
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                    Etalase digital sederhana untuk mendukung kemandirian dan kreativitas wirausaha mahasiswa.
                </p>
            </div>

            {{-- Mission Card --}}
            <div class="flex flex-col gap-space-xl bg-surface-container-lowest rounded-3xl p-space-lg lg:p-space-2xl shadow-sm">

                {{-- Top: Hero Image (Landscape) --}}
                <div class="relative w-full rounded-2xl overflow-hidden shadow-md group">
                    <div class="aspect-[16/9] md:aspect-[21/9] w-full overflow-hidden">
                        <img src="angkatan-24.jpg"
                             alt="Foto Bersama Angkatan Mahasiswa 24"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-on-surface/60 via-transparent to-transparent pointer-events-none"></div>
                    <div class="absolute bottom-space-md left-space-md right-space-md flex items-center justify-between pointer-events-none">
                        <div class="bg-surface-container-lowest/90 backdrop-blur-sm p-space-sm rounded-xl shadow-sm inline-flex items-center gap-space-sm pointer-events-auto">
                            <div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed">
                                <span class="material-symbols-outlined text-[20px]">groups</span>
                            </div>
                            <div>
                                <p class="font-title-md text-title-md text-on-surface">Angkatan Mahasiswa 24</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Solidaritas &amp; Kreativitas Tiada Henti</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bottom: Mission Text --}}
                <div class="flex flex-col items-center text-center gap-space-md max-w-4xl mx-auto">
                    <div class="inline-flex items-center gap-space-2xs text-primary-container font-label-md text-label-md uppercase tracking-wider">
                        <span class="material-symbols-outlined text-[18px]">workspace_premium</span>
                        <span>Tentang Kami</span>
                    </div>
                    
                    <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface font-title-md">
                        Semangat Juang Angkatan 24
                    </h2>
                    
                    <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                        PUM (Proyek Usaha Mandiri) merupakan salah satu kegiatan yang dilaksanakan oleh mahasiswa Program Studi Agroindustri angkatan 2024 sebagai wadah untuk menerapkan pengetahuan, keterampilan, dan kreativitas yang telah diperoleh selama perkuliahan ke dalam kegiatan usaha secara langsung. Melalui kegiatan PUM, mahasiswa mendapatkan kesempatan untuk mengembangkan ide usaha, mengelola produk, serta memperkenalkan dan memasarkan produk kepada masyarakat.
                    </p>
                    <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                        Melalui PUM, mahasiswa tidak hanya memperoleh pemahaman mengenai konsep kewirausahaan, tetapi juga mendapatkan pengalaman nyata dalam menjalankan proses usaha, mulai dari pengembangan produk hingga pemasaran. Produk yang ditampilkan dalam katalog ini merupakan hasil usaha mahasiswa, baik berupa produk makanan maupun kerajinan tangan.
                    </p>
                    <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                        Website ini dibuat sebagai media digital untuk memperkenalkan berbagai produk hasil PUM, sehingga produk mahasiswa dapat lebih mudah dikenal dan diakses oleh masyarakat maupun calon konsumen. Kehadiran katalog digital ini diharapkan dapat membantu mahasiswa dalam memperluas jangkauan pemasaran sekaligus meningkatkan daya tarik dan potensi penjualan produk.    
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md pt-space-xs w-full mt-space-sm">
                        <div class="p-space-md rounded-2xl bg-surface-container-low flex flex-col items-center text-center">
                            <div class="flex items-center justify-center gap-space-xs mb-space-2xs">
                                <span class="material-symbols-outlined text-primary text-[22px]">cookie</span>
                                <span class="font-title-md text-title-md text-on-surface">Rasa Khas Angkatan</span>
                            </div>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Kreasi kuliner dan camilan unik hasil resep rahasia mahasiswa.</span>
                        </div>
                        <div class="p-space-md rounded-2xl bg-surface-container-low flex flex-col items-center text-center">
                            <div class="flex items-center justify-center gap-space-xs mb-space-2xs">
                                <span class="material-symbols-outlined text-secondary text-[22px]">palette</span>
                                <span class="font-title-md text-title-md text-on-surface">Karya Autentik</span>
                            </div>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Kerajinan tangan, suvenir, dan desain eksklusif yang tak lekang waktu.</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- =====================================================
         Why This Platform?
    ====================================================== --}}
    <section class="w-full py-space-3xl bg-surface">
        <div class="max-w-container-max mx-auto px-gutter-mobile lg:px-gutter-desktop">

            <div class="flex flex-col items-center text-center max-w-2xl mx-auto mb-space-2xl">
                <span class="font-label-md text-label-md uppercase tracking-wider text-secondary">Tujuan &amp; Manfaat</span>
                <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface mt-space-2xs">
                    Mengapa Platform Ini Dibuat?
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
                    Tiga pilar komitmen kami untuk menghadirkan ekosistem jual beli kampus yang adil, suportif, dan ramah mahasiswa.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">

                {{-- Pillar 1 --}}
                <div class="bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm hover:shadow-md transition-all flex flex-col h-full group">
                    <div class="w-14 h-14 rounded-2xl bg-primary-fixed/60 text-primary flex items-center justify-center mb-space-lg group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[28px]">rocket_launch</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs font-title-md">
                        Dukungan Kewirausahaan Kampus
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mt-auto">
                        Memberikan panggung nyata bagi ide bisnis mahasiswa tanpa terbebani biaya langganan aplikasi atau kerumitan teknis.
                    </p>
                </div>

                {{-- Pillar 2 --}}
                <div class="bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm hover:shadow-md transition-all flex flex-col h-full group">
                    <div class="w-14 h-14 rounded-2xl bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center mb-space-lg group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[28px]">savings</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs font-title-md">
                        100% Bebas Biaya Komisi
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mt-auto">
                        Pembeli langsung terhubung dengan penjual mahasiswa melalui WhatsApp tanpa potongan biaya admin e-commerce. Keuntungan utuh untuk mahasiswa.
                    </p>
                </div>

                {{-- Pillar 3 --}}
                <div class="bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm hover:shadow-md transition-all flex flex-col h-full group">
                    <div class="w-14 h-14 rounded-2xl bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center mb-space-lg group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[28px]">verified_user</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs font-title-md">
                        Kualitas Terkurasi &amp; Autentik
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mt-auto">
                        Setiap produk dibuat secara homemade dengan passion dan dedikasi tinggi oleh rekan mahasiswa terverifikasi dari berbagai fakultas.
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- =====================================================
         How It Works
    ====================================================== --}}
    <section class="w-full py-space-3xl bg-surface">
        <div class="max-w-container-max mx-auto px-gutter-mobile lg:px-gutter-desktop">

            <div class="flex flex-col items-center text-center max-w-2xl mx-auto mb-space-2xl">
                <span class="font-label-md text-label-md uppercase tracking-wider text-primary">Proses Sederhana</span>
                <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface mt-space-2xs">
                    Cara Kerja Sederhana
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
                    Tanpa ribet instal aplikasi tambahan atau registrasi kartu kredit. Cukup pilih, pelajari, dan langsung kontak penjual.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg relative">

                {{-- Step 1 --}}
                <div class="bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm relative flex flex-col items-center text-center">
                    <div class="w-12 h-12 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-sm mb-space-md shadow-sm">1</div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Jelajahi Produk</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Lihat foto, harga, dan spesifikasi produk di halaman Katalog sesuai kategori yang kamu inginkan.
                    </p>
                    <div class="mt-space-md flex items-center gap-space-2xs text-primary font-label-sm text-label-sm">
                        <span class="material-symbols-outlined text-[18px]">search</span>
                        <span>Filter Kategori &amp; Pencarian</span>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm relative flex flex-col items-center text-center">
                    <div class="w-12 h-12 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-sm mb-space-md shadow-sm">2</div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Pilih &amp; Baca Detail</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Cek varian, berat bersih, serta informasi profil mahasiswa penjual dan asal fakultasnya.
                    </p>
                    <div class="mt-space-md flex items-center gap-space-2xs text-primary font-label-sm text-label-sm">
                        <span class="material-symbols-outlined text-[18px]">menu_book</span>
                        <span>Spesifikasi &amp; Komposisi Terang</span>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm relative flex flex-col items-center text-center">
                    <div class="w-12 h-12 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-sm mb-space-md shadow-sm">3</div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Hubungi via WhatsApp</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Klik tombol WhatsApp untuk langsung terhubung dengan penjual untuk pesan atau janjian COD kampus.
                    </p>
                    <div class="mt-space-md flex items-center gap-space-2xs text-primary font-label-sm text-label-sm">
                        <span class="material-symbols-outlined text-[18px]">chat</span>
                        <span>Fast Response &amp; COD Kampus</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection