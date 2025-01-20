<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'image',
        'price',
        'discount',
        'cuisine_id',
    ];

    public function cuisine(): BelongsTo
    {
        return $this->belongsTo(Cuisine::class);
    }
    public function type(): BelongsTo
    {
        return $this->belongsTo(TypeMenu::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryMenu::class);
    }

    public function scopeSearch($query, $value)
    {
        $query->where('name', 'like', "%{$value}%")
            ->orWhere('price', 'like', "%{$value}%")
            ->orWhere('discount', 'like', "%{$value}%")
            ->orWhereHas('type', function ($query) use ($value) {
                $query->where('name', 'like', "%{$value}%");
            })->orWhereHas('category', function ($query) use ($value) {
                $query->where('name', 'like', "%{$value}%");
            })->orWhereHas('cuisine', function ($query) use ($value) {
                $query->where('name', 'like', "%{$value}%");
            });
    }

    public function wishlists(): HasMany
    {
        return $this->hasMany(Wishlist::class);
    }
    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }
}
