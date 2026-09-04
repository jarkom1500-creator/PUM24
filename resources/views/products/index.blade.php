@extends('layouts.app')

@section('title', 'Katalog Produk - Katalog Karya Mahasiswa')

@section('content')

    {{-- =========================================================
         Ambient Glow + Catalog Content
    ========================================================== --}}
    <div class="relative w-full overflow-hidden">

        {{-- Ambient Backdrop --}}
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[720px] h-[340px] bg-gradient-to-b from-primary/10 via-primary-fixed/20 to-transparent blur-3xl pointer-events-none rounded-full"></div>

        <div class="max-w-container-max mx-auto px-gutter-mobile lg:px-gutter-desktop py-space-xl lg:py-space-2xl">

            {{-- =====================================================
                 Page Header
            ====================================================== --}}
            <div class="flex flex-col items-center text-center max-w-2xl mx-auto mb-space-xl">
                <div class="inline-flex items-center gap-space-2xs px-space-md py-space-2xs rounded-full bg-surface-container text-primary font-label-sm text-label-sm mb-space-sm shadow-sm">
                    <span class="material-symbols-outlined text-[16px]">storefront</span>
                    <span>Etalase Wirausaha Mahasiswa</span>
                </div>
                <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight mb-space-xs">
                    Katalog Produk
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                    Temukan berbagai produk makanan dan kerajinan tangan karya mahasiswa.
                </p>
            </div>

            {{-- =====================================================
                 Category Filter Tabs
            ====================================================== --}}
            <div class="flex items-center justify-center mb-space-xl">
                <div id="categoryFilterGroup"
                     class="inline-flex flex-wrap items-center justify-center p-1.5 rounded-full bg-surface-container-high/80 backdrop-blur shadow-sm gap-1">

                    <button type="button" data-category="all"
                            onclick="filterCatalog('all', this)"
                            class="filter-tab active-tab px-space-md py-2 rounded-full font-label-md text-label-md transition-all duration-200 bg-primary-container text-on-primary shadow-sm flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[18px]">apps</span>
                        <span>Semua Produk</span>
                        <span class="ml-1 px-1.5 py-0.5 text-[11px] rounded-full bg-on-primary/20 text-on-primary">{{ $products->count() }}</span>
                    </button>

                    <button type="button" data-category="makanan"
                            onclick="filterCatalog('makanan', this)"
                            class="filter-tab px-space-md py-2 rounded-full font-label-md text-label-md transition-all duration-200 text-on-surface-variant hover:text-on-surface hover:bg-surface-container flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[18px]">restaurant</span>
                        <span>Makanan</span>
                        <span class="ml-1 px-1.5 py-0.5 text-[11px] rounded-full bg-surface-container-highest text-on-surface-variant">{{ $makananCount }}</span>
                    </button>

                    <button type="button" data-category="kerajinan"
                            onclick="filterCatalog('kerajinan', this)"
                            class="filter-tab px-space-md py-2 rounded-full font-label-md text-label-md transition-all duration-200 text-on-surface-variant hover:text-on-surface hover:bg-surface-container flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[18px]">palette</span>
                        <span>Kerajinan Tangan</span>
                        <span class="ml-1 px-1.5 py-0.5 text-[11px] rounded-full bg-surface-container-highest text-on-surface-variant">{{ $kerajinanCount }}</span>
                    </button>

                </div>
            </div>

            {{-- =====================================================
                 Product Grid
            ====================================================== --}}
            <div id="productGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">

                @forelse ($products as $product)
                <article class="product-card group flex flex-col bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1"
                         data-category="{{ $product->category }}">
                    <div class="relative w-full aspect-[4/3] overflow-hidden bg-surface-container-low">
                        @php 
                            $firstImage = $product->images->first()->image ?? ''; 
                            $imgSrc = $firstImage ? (filter_var($firstImage, FILTER_VALIDATE_URL) ? $firstImage : asset($firstImage)) : 'https://placehold.co/600x400?text=No+Image';
                        @endphp
                        <img src="{{ $imgSrc }}"
                             alt="{{ $product->name }}"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        <span class="absolute top-3 left-3 inline-flex items-center gap-1 px-3 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur-md font-label-sm text-label-sm {{ $product->category === 'makanan' ? 'text-secondary' : 'text-tertiary' }} font-medium shadow-sm">
                            <span class="material-symbols-outlined text-[14px]">{{ $product->category_icon }}</span>
                            {{ ucfirst($product->category) }}
                        </span>
                    </div>
                    <div class="flex flex-col flex-1 p-space-md justify-between">
                        <div>
                            @if ($product->variants->first() && $product->variants->first()->net_weight)
                            <div class="flex items-center gap-1.5 text-on-surface-variant mb-1 font-body-sm text-body-sm">
                                <span class="material-symbols-outlined text-[16px] text-primary">scale</span>
                                <span>{{ $product->variants->first()->net_weight }}</span>
                            </div>
                            @endif
                            <h2 class="font-headline-sm text-headline-sm text-on-surface tracking-tight mb-1.5 group-hover:text-primary-container transition-colors">
                                {{ $product->name }}
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 leading-relaxed">
                                {{ $product->description }}
                            </p>
                        </div>
                        <div class="mt-space-md pt-space-sm flex items-center justify-between gap-space-sm bg-surface-container-low/40 -mx-space-md -mb-space-md px-space-md py-space-sm rounded-b-2xl">
                            <div>
                                <span class="font-body-sm text-body-sm text-on-surface-variant block">Harga</span>
                                <span class="font-headline-sm text-headline-sm text-primary font-bold">{{ $product->formattedPrice() }}</span>
                            </div>
                            <a href="{{ route('products.show', $product) }}"
                               class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-surface-container-lowest text-primary hover:bg-primary-container hover:text-on-primary shadow-sm font-label-md text-label-md transition-all duration-200">
                                <span>Lihat Detail</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </article>
                @empty
                <div class="col-span-3 flex flex-col items-center justify-center py-space-3xl text-center gap-space-md">
                    <span class="material-symbols-outlined text-[48px] text-on-surface-variant/40">inventory_2</span>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">Belum ada produk tersedia.</p>
                </div>
                @endforelse

            </div>

        </div>
    </div>

@endsection

@push('scripts')
<script>
    function filterCatalog(category, btnElement) {
        const cards = document.querySelectorAll('.product-card');
        const tabs  = document.querySelectorAll('.filter-tab');

        // Reset all tabs
        tabs.forEach(tab => {
            tab.classList.remove('bg-primary-container', 'text-on-primary', 'shadow-sm');
            tab.classList.add('text-on-surface-variant', 'hover:text-on-surface', 'hover:bg-surface-container');
            const badge = tab.querySelector('span:last-child');
            if (badge) {
                badge.classList.remove('bg-on-primary/20', 'text-on-primary');
                badge.classList.add('bg-surface-container-highest', 'text-on-surface-variant');
            }
        });

        // Activate selected tab
        btnElement.classList.add('bg-primary-container', 'text-on-primary', 'shadow-sm');
        btnElement.classList.remove('text-on-surface-variant', 'hover:text-on-surface', 'hover:bg-surface-container');
        const activeBadge = btnElement.querySelector('span:last-child');
        if (activeBadge) {
            activeBadge.classList.add('bg-on-primary/20', 'text-on-primary');
            activeBadge.classList.remove('bg-surface-container-highest', 'text-on-surface-variant');
        }

        // Filter cards
        cards.forEach(card => {
            const itemCat = card.getAttribute('data-category');
            if (category === 'all' || itemCat === category) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>
@endpush