<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Str;

class ServiceOrder extends Model {
    protected $table = 'service_order';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'uuid';
    protected $fillable = [
        'user_id', 'sms_id', 'link',
        'quantity', 'FeePerOne', 'total_fee',
        'approved_by', 'rejected_by',
        'completed_by', 'is_completed'
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->id = (string) Str::uuid();
        });
    }
    public function user(): BelongsTo {
        return $this->belongsTo( User::class );
    }

    public function socialMediaService(): BelongsTo {
        return $this->belongsTo( SocialMediaService::class, 'sms_id' );
    }
}