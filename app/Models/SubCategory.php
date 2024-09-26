<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category_id',
        'name',
        'status',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
