<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SocialMedia extends Model {
    protected $table = 'social_medias';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $table = 'social_medias';

    protected $fillable = [ 'name', 'icon', 'status', 'service_fee', 'created_by' ];

    public function services(): HasMany {
        return $this->hasMany( SocialMediaService::class );
    }
}