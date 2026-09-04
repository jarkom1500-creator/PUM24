@extends('layouts.app')

@section('title', $product->name . ' - Katalog Karya Mahasiswa')

@section('content')

    <div class="max-w-container-max mx-auto px-gutter-mobile lg:px-gutter-desktop w-full py-space-xl">

        {{-- =====================================================
             Breadcrumb
        ====================================================== --}}
        <nav aria-label="Breadcrumb" class="flex items-center gap-space-xs mb-space-xl text-on-surface-variant font-label-md text-label-md">
            <a href="{{ route('home') }}" class="hover:text-primary-container transition-colors flex items-center gap-space-2xs">
                <span class="material-symbols-outlined text-[18px]">home</span>
                <span>Beranda</span>
            </a>
            <span class="material-symbols-outlined text-[16px] text-outline-variant">chevron_right</span>
            <a href="{{ route('products.index') }}" class="hover:text-primary-container transition-colors">Katalog</a>
            <span class="material-symbols-outlined text-[16px] text-outline-variant">chevron_right</span>
            <span class="text-on-surface font-title-md font-semibold truncate max-w-[240px] sm:max-w-none">
                {{ $product->name }}
            </span>
        </nav>

        {{-- =====================================================
             Main Showcase: Two-Column Grid
        ====================================================== --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl lg:gap-space-2xl items-start">

            {{-- LEFT COLUMN: Product Image Showcase --}}
            <div class="lg:col-span-6 flex flex-col gap-space-lg">

                {{-- Main Image --}}
                <div class="relative bg-surface-container-lowest rounded-xl overflow-hidden shadow-md group">
                    <div class="aspect-[4/3] w-full overflow-hidden relative">
                        @php 
                            $firstImage = $product->images->first()->image ?? ''; 
                            $imgSrc = $firstImage ? (filter_var($firstImage, FILTER_VALIDATE_URL) ? $firstImage : asset($firstImage)) : 'https://placehold.co/600x400?text=No+Image';
                        @endphp
                        <img 
                             id="main-product-image"
                             src="{{ $imgSrc }}"
                             alt="{{ $product->name }}"
                             class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-105" />
                    </div>

                    {{-- Floating Badges --}}
                    <div class="absolute top-space-md left-space-md right-space-md flex flex-wrap items-center justify-between gap-space-xs pointer-events-none">
                        <div class="inline-flex items-center gap-space-2xs px-space-sm py-space-2xs rounded-full bg-primary text-on-primary font-label-sm text-label-sm shadow-md backdrop-blur-sm pointer-events-auto">
                            <span class="material-symbols-outlined text-[16px] text-on-primary">verified</span>
                            <span>Produk Mahasiswa Terverifikasi</span>
                        </div>
                        <div class="inline-flex items-center gap-space-2xs px-space-sm py-space-2xs rounded-full bg-surface-container-lowest/90 text-on-surface-variant font-label-sm text-label-sm shadow-sm backdrop-blur-md pointer-events-auto">
                            <span class="material-symbols-outlined text-[16px] {{ $product->category === 'makanan' ? 'text-secondary' : 'text-tertiary' }}">{{ $product->category_icon }}</span>
                            <span>{{ ucfirst($product->category) }}</span>
                        </div>
                    </div>
                </div>

                {{-- Thumbnails Grid --}}
                @if($product->images->count() > 1)
                <div class="grid grid-cols-4 gap-space-sm mt-space-2xs">
                    @foreach($product->images as $loop_index => $img)
                    @php $thumbSrc = filter_var($img->image, FILTER_VALIDATE_URL) ? $img->image : asset($img->image); @endphp
                    <div class="aspect-[4/3] rounded-lg overflow-hidden border-2 cursor-pointer transition-all bg-surface-container thumbnail-item {{ $loop_index === 0 ? 'border-primary' : 'border-outline-variant hover:border-primary/60' }}"
                         onclick="switchImage(this, '{{ $thumbSrc }}')">
                        <img src="{{ $thumbSrc }}" 
                             alt="{{ $product->name }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                    </div>
                    @endforeach
                </div>

                <script>
                    function switchImage(thumbnail, src) {
                        const mainImg = document.getElementById('main-product-image');

                        // Fade out
                        mainImg.style.opacity = '0';
                        mainImg.style.transform = 'scale(0.97)';

                        setTimeout(() => {
                            mainImg.src = src;
                            // Fade in
                            mainImg.style.opacity = '1';
                            mainImg.style.transform = 'scale(1)';
                        }, 150);

                        // Update active border on thumbnails
                        document.querySelectorAll('.thumbnail-item').forEach(el => {
                            el.classList.remove('border-primary');
                            el.classList.add('border-outline-variant');
                        });
                        thumbnail.classList.remove('border-outline-variant');
                        thumbnail.classList.add('border-primary');
                    }

                    // Setup smooth transition on main image
                    document.addEventListener('DOMContentLoaded', () => {
                        const mainImg = document.getElementById('main-product-image');
                        mainImg.style.transition = 'opacity 0.15s ease, transform 0.15s ease';
                    });
                </script>
                @endif

                {{-- Trust Badges --}}
                <div class="bg-surface-container-low rounded-xl p-space-md flex items-center justify-around gap-space-md text-center">
                    <div class="flex flex-col items-center gap-space-2xs">
                        <span class="material-symbols-outlined text-primary-container text-[24px]">workspace_premium</span>
                        <span class="font-label-sm text-label-sm text-on-surface font-semibold">Higienis &amp; Bersih</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Produksi Dapur Mandiri</span>
                    </div>
                    <div class="w-px h-10 bg-outline-variant/30"></div>
                    <div class="flex flex-col items-center gap-space-2xs">
                        <span class="material-symbols-outlined text-secondary text-[24px]">handshake</span>
                        <span class="font-label-sm text-label-sm text-on-surface font-semibold">Dukung Teman</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">100% Karya Mahasiswa</span>
                    </div>
                    <div class="w-px h-10 bg-outline-variant/30"></div>
                    <div class="flex flex-col items-center gap-space-2xs">
                        <span class="material-symbols-outlined text-tertiary-container text-[24px]">local_shipping</span>
                        <span class="font-label-sm text-label-sm text-on-surface font-semibold">COD Kampus</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Titik Kumpul Praktis</span>
                    </div>
                </div>

            </div>

            {{-- RIGHT COLUMN: Product Info, Seller & CTA --}}
            <div class="lg:col-span-6 flex flex-col gap-space-lg">

                {{-- Header Info --}}
                <div class="flex flex-col gap-space-2xs">
                    <div class="flex items-center gap-space-xs flex-wrap">
                        <span class="bg-primary-container/10 text-primary-container font-label-sm text-label-sm px-space-md py-space-2xs rounded-full inline-flex items-center gap-space-2xs font-semibold">
                            <span class="material-symbols-outlined text-[14px]">{{ $product->category_icon }}</span>
                            {{ ucfirst($product->category) }}
                        </span>
                        <span class="bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm px-space-sm py-space-2xs rounded-full inline-flex items-center gap-space-2xs">
                            <span class="material-symbols-outlined text-[14px]">local_fire_department</span>
                            Favorit Mahasiswa
                        </span>
                    </div>
                    <h1 class="font-headline-lg text-headline-lg lg:text-display-lg text-on-surface mt-space-xs tracking-tight">
                        {{ $product->name }}
                    </h1>
                    <div class="flex items-baseline gap-space-sm mt-space-xs">
                        <span class="font-headline-lg text-headline-lg text-primary-container font-bold">{{ $product->formattedPrice() }}</span>
                    </div>
                </div>

                {{-- Variants Grid --}}
                @if($product->variants->isNotEmpty())
                <div class="flex flex-col gap-space-xs">
                    <h2 class="font-label-md text-label-md text-on-surface uppercase tracking-wider font-semibold">Pilihan Varian &amp; Harga</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                        @foreach($product->variants as $variant)
                        <div class="bg-surface-container-lowest p-space-sm rounded-xl shadow-sm flex flex-col gap-space-2xs border border-outline-variant/30 hover:border-primary/50 transition-colors">
                            <div class="flex items-center justify-between">
                                <span class="font-title-md text-title-md text-on-surface font-semibold">{{ $variant->variant_name ?: 'Pilihan Standar' }}</span>
                                <span class="font-label-sm text-label-sm text-primary font-bold">Rp{{ number_format($variant->price, 0, ',', '.') }}</span>
                            </div>
                            @if($variant->net_weight)
                            <div class="flex items-center gap-1 text-on-surface-variant font-body-sm text-body-sm">
                                <span class="material-symbols-outlined text-[14px]">scale</span>
                                <span>{{ $variant->net_weight }}</span>
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                @else
                <div class="bg-surface-container-lowest p-space-sm rounded-xl shadow-sm flex items-start gap-space-xs">
                    <div class="p-space-2xs rounded-lg bg-surface-container text-primary-container">
                        <span class="material-symbols-outlined text-[20px]">inventory</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Ketersediaan</span>
                        <span class="font-title-md text-title-md text-primary font-semibold">Ready Stock</span>
                    </div>
                </div>
                @endif

                {{-- Product Description --}}
                <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col gap-space-xs">
                    <h2 class="font-label-md text-label-md text-on-surface uppercase tracking-wider font-semibold flex items-center gap-space-2xs">
                        <span class="material-symbols-outlined text-[18px] text-primary-container">description</span>
                        Deskripsi Produk
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        {{ $product->description }}
                    </p>
                </div>

                {{-- Seller Profile --}}
                <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                    <div class="flex items-center justify-between">
                        <span class="font-label-md text-label-md text-on-surface uppercase tracking-wider font-semibold">Informasi Penjual</span>
                        <span class="inline-flex items-center gap-space-2xs text-primary font-label-sm text-label-sm bg-primary-fixed px-space-xs py-space-2xs rounded-md">
                            <span class="material-symbols-outlined text-[14px]">school</span>
                            Mahasiswa Aktif
                        </span>
                    </div>
                    <div class="flex items-start gap-space-md">
                        <div class="relative w-14 h-14 rounded-full overflow-hidden bg-primary-fixed flex-shrink-0 shadow-inner flex items-center justify-center">
                            <span class="font-headline-sm text-headline-sm text-on-primary-fixed font-bold">
                                {{ strtoupper(substr($product->seller_name, 0, 1)) }}
                            </span>
                        </div>
                        <div class="flex flex-col flex-1 min-w-0">
                            <div class="flex items-center gap-space-2xs">
                                <h3 class="font-title-md text-title-md text-on-surface font-semibold truncate">{{ $product->seller_name }}</h3>
                                <span class="material-symbols-outlined text-primary text-[16px]" title="Identitas Mahasiswa Terkonfirmasi">check_circle</span>
                            </div>
                            @if ($product->faculty)
                            <p class="font-body-sm text-body-sm text-on-surface-variant">{{ $product->faculty }}</p>
                            @endif
                            <div class="flex flex-wrap items-center gap-y-1 gap-x-space-md mt-space-xs font-body-sm text-body-sm text-on-surface-variant">
                                <div class="flex items-center gap-space-2xs text-primary-container font-medium">
                                    <span class="material-symbols-outlined text-[16px]">schedule</span>
                                    <span>Biasanya membalas ± 15 menit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- WhatsApp CTA --}}
                <div class="flex flex-col gap-space-sm">
                    <a href="{{ $product->whatsappLink() }}"
                       target="_blank" rel="noopener noreferrer"
                       style="background-color: #25D366;"
                       class="w-full py-space-md px-space-xl rounded-xl font-headline-sm text-headline-sm font-bold text-surface-container-lowest shadow-md hover:shadow-xl hover:scale-[1.01] active:scale-[0.99] transition-all flex items-center justify-center gap-space-sm group">
                        <svg class="w-7 h-7 fill-current transition-transform group-hover:rotate-6" viewBox="0 0 24 24">
                            <path d="M12.031 0C5.394 0 0 5.394 0 12.031c0 2.119.554 4.185 1.606 6.008L.062 24l6.143-1.611a11.96 11.96 0 005.826 1.503h.005c6.632 0 12.026-5.394 12.026-12.031C24.062 5.394 18.668 0 12.031 0zm.005 21.874a9.89 9.89 0 01-5.042-1.378l-.362-.215-3.744.982.999-3.65-.236-.376A9.876 9.876 0 012.16 12.03c0-5.442 4.428-9.87 9.876-9.87 5.443 0 9.871 4.428 9.871 9.87 0 5.443-4.428 9.874-9.871 9.874zm5.409-7.393c-.296-.149-1.756-.867-2.028-.966-.272-.099-.47-.148-.668.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.478 1.065 2.875 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.756-.718 2.004-1.412.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                        </svg>
                        <span>Hubungi Penjual via WhatsApp</span>
                    </a>
                </div>

            </div>
        </div>

        {{-- =====================================================
             Related Products Section
        ====================================================== --}}
        @if ($relatedProducts->isNotEmpty())
        <div class="mt-space-3xl pt-space-2xl flex flex-col gap-space-xl">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-space-xs">
                <div>
                    <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-semibold">Kreasi Serupa</span>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mt-space-2xs">Produk Serupa dari Mahasiswa</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Jelajahi produk {{ ucfirst($product->category) }} lainnya karya rekan mahasiswa.</p>
                </div>
                <a href="{{ route('products.index') }}" class="inline-flex items-center gap-space-2xs font-label-md text-label-md text-primary-container hover:underline group">
                    <span>Lihat Semua Produk</span>
                    <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
                @foreach ($relatedProducts as $related)
                <div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">
                    <div class="aspect-[4/3] w-full overflow-hidden relative bg-surface-container">
                        @php 
                            $relImage = $related->images->first()->image ?? ''; 
                            $relSrc = $relImage ? (filter_var($relImage, FILTER_VALIDATE_URL) ? $relImage : asset($relImage)) : 'https://placehold.co/600x400?text=No+Image';
                        @endphp
                        <img src="{{ $relSrc }}"
                             alt="{{ $related->name }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                        <span class="absolute top-space-sm left-space-sm bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm px-space-sm py-space-2xs rounded-full capitalize">
                            {{ ucfirst($related->category) }}
                        </span>
                    </div>
                    <div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
                        <div>
                            <div class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm mb-space-2xs">
                                <span>{{ $related->seller_name }}{{ $related->faculty ? ' • ' . $related->faculty : '' }}</span>
                                <span class="text-primary font-semibold">Ready</span>
                            </div>
                            <h3 class="font-title-md text-title-md text-on-surface group-hover:text-primary-container transition-colors">{{ $related->name }}</h3>
                            <p class="font-headline-sm text-headline-sm font-bold text-primary-container mt-space-2xs">{{ $related->formattedPrice() }}</p>
                        </div>
                        <a href="{{ route('products.show', $related) }}"
                           class="w-full py-space-xs px-space-md rounded-lg bg-surface-container hover:bg-primary-container hover:text-on-primary text-on-surface font-label-md text-label-md transition-colors flex items-center justify-center gap-space-2xs">
                            <span class="material-symbols-outlined text-[16px]">visibility</span>
                            <span>Lihat Detail</span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>

@endsection