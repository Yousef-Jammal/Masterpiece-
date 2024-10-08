<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'offer_type',
        'discrption',
        'product_id',
    ];

    /**
     * Get the product associated with the offer.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}