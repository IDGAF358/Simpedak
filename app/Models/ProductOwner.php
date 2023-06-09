<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ProductOwner extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ["id"];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    public function ProductType()
    {
        return $this->hasOne(ProductType::class);
    }

    public function ProductHistories()
    {
        return $this->hasMany(ProductHistory::class);
    }

    public function ProductPrice()
    {
        return $this->hasOne(ProductPrice::class);
    }

    public function Recipes()
    {
        return $this->hasMany(Recipe::class);
    }

    public function TransactionDetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection("product-image");
    }
}
