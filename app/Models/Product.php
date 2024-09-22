<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'brand_id',
        'modeles_id',
        'type_id',
        'size_id',
        'color_id',
        'certification_id',
        'name',
        'purchase_price',
        'wholesale_price ',
        'retail_price',
        'stock_qty',
        'vat',
        'tax',
        'desc',
        'status',
    ];
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public function modeles(): BelongsTo
    {
        return $this->belongsTo(Modeles::class,'modeles_id');
    }
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class,'type_id');
    }
    public function size(): BelongsTo
    {
        return $this->belongsTo(Size::class,'size_id');
    }
    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class,'color_id');
    }
    public function certification(): BelongsTo
    {
        return $this->belongsTo(Certification::class,'certification_id');
    }
}
