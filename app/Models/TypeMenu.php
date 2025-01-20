<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TypeMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'slug',
        'image',
    ];

    public function categoryMenus(): HasMany
    {
        return $this->hasMany(CategoryMenu::class);
    }

    public function menus(): HasOne
    {
        return $this->hasOne(Menu::class);
    }
}
