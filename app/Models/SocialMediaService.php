<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialMediaService extends Model
{
    protected $fillable = [
        'social_media_id', 'service_id', 'max_number', 
        'min_number', 'start_time', 'acceptable_link', 
        'FeePerOne', 'created_by'
    ];

    public function socialMedia(): BelongsTo
    {
        return $this->belongsTo(SocialMedia::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}