<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentAgent extends Model {
    protected $table = 'payment_agents';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = [ 'name', 'icon', 'account_number', 'status', 'created_by' ];

    public function transactions(): HasMany {
        return $this->hasMany( Transaction::class );
    }
}