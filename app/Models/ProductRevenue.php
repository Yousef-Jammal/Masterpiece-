<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRevenue extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'amount',
    ];

    /**
     * Get the product associated with the revenue record.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
