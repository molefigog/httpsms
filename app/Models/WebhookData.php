<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebhookData extends Model
{
    protected $fillable = [
        'content',
        'from',
        'sim',
        'timestamp',
        'to',
        'transact_id', // Add the new fields to the fillable array
        'received_amount',
        'from_number',
        'used',
    ];
    public function markAsUsed()
    {
        $this->used = true;
        $this->save();
    }
}
