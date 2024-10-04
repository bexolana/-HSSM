<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialMediaServiceDescription extends Model
{
    protected $table = 'social_media_service_descriptions';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = ['sms_id', 'description', 'created_by'];

    public function socialMediaService(): BelongsTo
    {
        return $this->belongsTo(SocialMediaService::class, 'sms_id');
    }
}