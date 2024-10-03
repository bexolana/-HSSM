<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model {
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'uuid';
    protected $fillable = [
        'user_id', 'deposite_amount', 'transaction_code',
        'approved_by', 'approved_at', 'rejected_by',
        'rejected_at', 'reject_reason', 'payment_agent_id'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo( User::class );
    }

    public function paymentAgent(): BelongsTo {
        return $this->belongsTo( PaymentAgent::class );
    }
}