<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['card_number', 'expiring', 'CVV'];

    /**
     * Get the user associated with this payment information.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
