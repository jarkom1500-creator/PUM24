<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ProductImage;
use App\Models\ProductVariant;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'seller_name',
        'whatsapp',
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class)
                    ->orderBy('sort_order');
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    /**
     * Format harga terendah dari varian sebagai string rupiah.
     */
    public function formattedPrice(): string
    {
        $minPrice = $this->variants->min('price') ?? 0;
        
        // Jika ada lebih dari 1 harga berbeda, tambahkan prefix "Mulai"
        $uniquePrices = $this->variants->pluck('price')->unique();
        $prefix = $uniquePrices->count() > 1 ? 'Mulai Rp' : 'Rp';

        return $prefix . number_format($minPrice, 0, ',', '.');
    }

    /**
     * WhatsApp link dengan pesan otomatis.
     */
    public function whatsappLink(): string
    {
        $message = urlencode("Halo {$this->seller_name}, saya tertarik dengan produk {$this->name} di Katalog Karya. Apakah masih tersedia?");

        return "https://wa.me/{$this->whatsapp}?text={$message}";
    }
}