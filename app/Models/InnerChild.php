<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InnerChild extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category_id',
        'subcategory_id',
        'childcategory_id',
        'name',
        'status',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }
    public function childcategory(): BelongsTo
    {
        return $this->belongsTo(hildcategory::class,'category_id');
    }
}


