<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SellingOrder extends Model {
    protected $table = 'selling_order';
    protected $fillable = [
        'user_id', 'social_media_id',
        'type', 'link', 'follower_number',
        'selling_price', 'media_image',
        'media_name', 'media_description',
        'service_fee', 'approved_by',
        'rejected_by', 'completed_by', 'reject_reason',
        'is_completed'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo( User::class );
    }

    public function socialMedia(): BelongsTo {
        return $this->belongsTo( SocialMedia::class );
    }
}