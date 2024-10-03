<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialMediaServiceDescription extends Model
{
    protected $fillable = ['sms_id', 'description', 'created_by'];

    public function socialMediaService(): BelongsTo
    {
        return $this->belongsTo(SocialMediaService::class, 'sms_id');
    }
}