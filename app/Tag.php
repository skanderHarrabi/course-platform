<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tag
 *
 * @package App
 * @property string $tag
*/
class Tag extends Model
{
    use SoftDeletes;

    protected $fillable = ['tag'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Tag::observe(new \App\Observers\UserActionsObserver);
    }
    public function formations()
    {
        return $this->hasMnay(Formation::class,'formation_id');
    }
}
