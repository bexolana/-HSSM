<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use str;
class Service extends Model {
    protected $table = 'services';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'uuid';
    protected $fillable = [ 'name', 'icon', 'status', 'created_by' ];

    public function socialMediaServices(): HasMany {
        return $this->hasMany( SocialMediaService::class );
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($service) {
            $service->id = (string) Str::uuid();
        });
    }
}