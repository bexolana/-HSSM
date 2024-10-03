<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $fillable = ['name', 'status', 'created_by'];

    public function socialMediaServices(): HasMany
    {
        return $this->hasMany(SocialMediaService::class);
    }
}