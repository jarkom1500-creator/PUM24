@extends('layouts.app')

@section('title', 'Beranda - Katalog Karya Mahasiswa')

@section('content')

    {{-- =========================================================
         Ambient Backdrop + Hero Section
    ========================================================== --}}
    <div class="relative w-full max-w-container-max mx-auto px-gutter-mobile lg:px-gutter-desktop pt-space-xl pb-space-3xl overflow-hidden">
        {{-- =====================================================
             Hero Section
        ====================================================== --}}
        <section class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-space-xl lg:gap-space-2xl items-center pt-space-xs pb-space-xl">

            {{-- Hero Left: Text Column --}}
            <div class="lg:col-span-12 flex flex-col items-center text-center gap-space-md">

                {{-- Campus Micro Badge --}}
                <div class="inline-flex items-center gap-space-2xs px-space-md py-1.5 rounded-full bg-surface-container text-primary font-label-sm text-label-sm">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    <span>Etalase Komunitas &amp; Karya Kreatif Kampus</span>
                </div>

                {{-- Main Headline --}}
                <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface tracking-tight leading-tight">
                    Temukan Produk Kreatif Mahasiswa
                </h1>

                {{-- Supporting Body Text --}}
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl leading-relaxed mx-auto">
                “Jelajahi beragam produk inovatif dan karya kreatif mahasiswa. Temukan ide-ide unik, dukung karya lokal, dan kenali potensi mahasiswa yang terus berkembang.”</p>

                {{-- CTA Action Cluster --}}
                <div class="flex flex-wrap items-center justify-center gap-space-sm pt-space-xs w-full sm:w-auto">
                    <a href="{{ route('products.index') }}"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs px-7 py-3.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all shadow-sm group">
                        <span>Lihat Katalog</span>
                        <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                    <a href="{{ route('about') }}"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs px-6 py-3.5 rounded-xl bg-surface-container-lowest text-primary font-label-md text-label-md hover:bg-surface-container transition-all shadow-sm">
                        <span>Pelajari Lebih Lanjut</span>
                    </a>
                </div>

                {{-- Metric / Trust Micro Bar --}}
                <div class="pt-space-md grid grid-cols-3 gap-space-lg w-full max-w-lg mx-auto">
                    <div>
                        <span class="block font-headline-md text-headline-md text-primary font-bold leading-none">40+</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant mt-1 block">Karya Aktif</span>
                    </div>
                    <div>
                        <span class="block font-headline-md text-headline-md text-secondary font-bold leading-none">0%</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant mt-1 block">Biaya Potongan</span>
                    </div>
                    <div>
                        <span class="block font-headline-md text-headline-md text-tertiary font-bold leading-none">100%</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant mt-1 block">Original Maker</span>
                    </div>
                </div>

            </div>
        </section>

        {{-- =====================================================
             Highlights Bar: Campus Value Props
        ====================================================== --}}
        <section class="mt-space-2xl bg-surface-container-lowest rounded-2xl p-space-lg shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg items-center">

                {{-- Value Prop 1: Langsung ke Penjual --}}
                <div class="flex items-start gap-space-md p-space-xs">
                    <div class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-primary text-[24px]">chat</span>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="font-title-md text-title-md text-on-surface">Langsung ke Penjual</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">
                            Chat WhatsApp langsung tanpa perantara.
                        </p>
                    </div>
                </div>

                {{-- Value Prop 2: Harga Ramah Kantong --}}
                <div class="flex items-start gap-space-md p-space-xs">
                    <div class="w-12 h-12 rounded-xl bg-secondary-fixed flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-secondary text-[24px]">savings</span>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="font-title-md text-title-md text-on-surface">Harga Ramah Kantong</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">
                            Kualitas rasa dan kerajinan istimewa yang tetap ramah anggaran mahasiswa.
                        </p>
                    </div>
                </div>

                {{-- Value Prop 3: Kreativitas Asli Kampus --}}
                <div class="flex items-start gap-space-md p-space-xs">
                    <div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-tertiary text-[24px]">handshake</span>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="font-title-md text-title-md text-on-surface">Kreativitas Asli Kampus</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">
                            Produk homemade dan handmade orisinal racikan Mahasiswa kampus.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        {{-- =====================================================
             Featured Products Section
        ====================================================== --}}
        <section class="mt-space-3xl flex flex-col gap-space-xl">

            {{-- Section Header --}}
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm">
                <div>
                    <div class="inline-flex items-center gap-1 text-primary font-label-sm text-label-sm uppercase tracking-wider mb-1">
                        <span class="material-symbols-outlined text-[16px]">stars</span>
                        <span>Kurasi Pilihan</span>
                    </div>
                    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface">
                        Produk Pilihan
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mt-1">
                        Koleksi camilan homemade dan kerajinan tangan terfavorit minggu ini
                    </p>
                </div>

                {{-- Category Filter Chips --}}
                <div class="flex items-center gap-space-xs">
                    <span class="px-space-md py-1.5 rounded-full bg-primary text-on-primary font-label-sm text-label-sm">
                        Semua Rekomendasi
                    </span>
                    <a href="{{ route('products.index', ['category' => 'makanan']) }}"
                       class="px-space-md py-1.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm hover:text-on-surface hover:bg-surface-container-high transition-all">
                        Kuliner
                    </a>
                    <a href="{{ route('products.index', ['category' => 'kerajinan']) }}"
                       class="px-space-md py-1.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm hover:text-on-surface hover:bg-surface-container-high transition-all">
                        Kriya
                    </a>
                </div>
            </div>

            {{-- Product Cards Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-xl">

                @forelse ($featuredProducts as $product)
                <article class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                    <div class="relative w-full aspect-[4/3] overflow-hidden bg-surface-container">
                        @php 
                            $firstImage = $product->images->first()->image ?? ''; 
                            $imgSrc = $firstImage ? (filter_var($firstImage, FILTER_VALIDATE_URL) ? $firstImage : asset($firstImage)) : 'https://placehold.co/600x400?text=No+Image';
                        @endphp
                        <img
                            src="{{ $imgSrc }}"
                            alt="{{ $product->name }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"
                        />
                        <div class="absolute top-3 left-3 {{ $product->category === 'makanan' ? 'bg-surface-container-lowest/95 text-primary' : 'bg-secondary-fixed text-on-secondary-fixed' }} backdrop-blur-sm font-label-sm text-label-sm font-semibold px-2.5 py-1 rounded-full shadow-sm capitalize">
                            {{ ucfirst($product->category) }}
                        </div>
                        @if ($product->variants->first() && $product->variants->first()->net_weight)
                        <div class="absolute bottom-3 right-3 bg-on-surface/75 backdrop-blur-sm text-white font-label-sm text-label-sm px-2 py-0.5 rounded-md flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">scale</span>
                            <span>{{ $product->variants->first()->net_weight }}</span>
                        </div>
                        @endif
                    </div>
                    <div class="p-space-lg flex flex-col flex-1 justify-between gap-space-md">
                        <div class="flex flex-col gap-space-2xs">
                            <div class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px] text-primary">storefront</span>
                                    {{ $product->seller_name }}{{ $product->faculty ? ' • ' . $product->faculty : '' }}
                                </span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">
                                {{ $product->name }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 leading-relaxed">
                                {{ $product->description }}
                            </p>
                        </div>
                        <div class="pt-space-sm flex flex-col gap-space-md">
                            <div class="flex items-baseline justify-between">
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Harga Satuan</span>
                                <span class="font-headline-sm text-headline-sm text-primary font-bold">{{ $product->formattedPrice() }}</span>
                            </div>
                            <a href="{{ route('products.show', $product) }}"
                               class="w-full py-2.5 bg-surface-container-lowest text-primary border border-primary hover:bg-primary hover:text-on-primary rounded-xl font-label-md text-label-md transition-all text-center flex items-center justify-center gap-1.5 shadow-sm">
                                <span>Lihat Detail</span>
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </article>
                @empty
                <div class="col-span-3 text-center py-space-2xl text-on-surface-variant font-body-lg text-body-lg">
                    Belum ada produk tersedia.
                </div>
                @endforelse

            </div>

            {{-- View All Button --}}
            <div class="flex justify-center pt-space-md">
                <a href="{{ route('products.index') }}"
                   class="inline-flex items-center justify-center gap-space-xs px-8 py-3.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all shadow-md group">
                    <span>Lihat Semua Produk</span>
                    <span class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">grid_view</span>
                </a>
            </div>

        </section>

        {{-- =====================================================
             About Preview Section
        ====================================================== --}}
        <section class="mt-space-3xl">
            <div class="bg-surface-container-low rounded-2xl p-space-xl md:p-space-2xl shadow-sm relative overflow-hidden">

                {{-- Soft Decorative Glow --}}
                <div class="absolute -right-20 -bottom-20 w-72 h-72 bg-secondary-fixed/50 rounded-full blur-2xl pointer-events-none"></div>

                <div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center text-center gap-space-md">
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container-lowest text-primary font-label-sm text-label-sm shadow-sm">
                        <span class="material-symbols-outlined text-[16px]">favorite</span>
                        <span>Semangat Kolaborasi Kampus</span>
                    </div>

                    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface">
                        Mendukung Wirausaha Mahasiswa
                    </h2>

                    <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                        Katalog ini dibuat khusus untuk memfasilitasi mahasiswa yang memproduksi makanan homemade dan
                        karya kerajinan tangan. Tanpa perantara dan biaya potongan, pengunjung dapat langsung menemukan
                        produk kreatif favorit dan menghubungi mahasiswa penjual via WhatsApp.
                    </p>

                    <div class="pt-space-xs flex flex-col sm:flex-row flex-wrap items-center justify-center gap-space-md">
                        <a href="{{ route('about') }}"
                           class="inline-flex items-center justify-center gap-space-xs px-7 py-3.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all shadow-sm">
                            <span>Pelajari Lebih Lanjut Tentang Kami</span>
                            <span class="material-symbols-outlined text-[18px]">info</span>
                        </a>
                        <div class="flex items-center gap-2 font-body-sm text-body-sm text-on-surface-variant">
                            <span class="material-symbols-outlined text-[18px] text-primary">bolt</span>
                            <span>Respon Cepat via WhatsApp Mahasiswa</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>

@endsection