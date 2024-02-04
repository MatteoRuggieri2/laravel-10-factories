<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerInfo extends Model
{
    use HasFactory;

    protected $table = 'customers_info';

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
