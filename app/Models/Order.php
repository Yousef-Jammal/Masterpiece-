<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'product_id',
        'price',
        'phone_number',
        'alternative_number',
        'street_address',
        'city',
        'country',
        'zip_code',
        'delivery',
        'payments_information_id',
    ];

    /**
     * Get the user who placed the order.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the product associated with the order.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the payment information used for the order.
     */
    public function paymentInformation()
    {
        return $this->belongsTo(Payment::class, 'payments_information_id');
    }
}
