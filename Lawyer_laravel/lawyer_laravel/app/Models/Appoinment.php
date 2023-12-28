<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;

class Appoinment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_address',
        'lawyer_name',
        'lawyer_email',
        'request',
        'message',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
