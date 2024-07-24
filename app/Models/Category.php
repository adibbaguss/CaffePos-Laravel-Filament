<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
