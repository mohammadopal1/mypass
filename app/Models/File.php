<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class File extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'card_number',
        'cvv',
        'note',
    ];

    // Encrypt card number before saving
    public function setCardNumberAttribute($value)
    {
        $this->attributes['card_number'] = Crypt::encryptString($value);
    }

    // Decrypt card number when retrieving
    public function getCardNumberAttribute($value)
    {
        return Crypt::decryptString($value);
    }

    // Encrypt CVV before saving
    public function setCvvAttribute($value)
    {
        $this->attributes['cvv'] = Crypt::encryptString($value);
    }

    // Decrypt CVV when retrieving
    public function getCvvAttribute($value)
    {
        return Crypt::decryptString($value);
    }
}
