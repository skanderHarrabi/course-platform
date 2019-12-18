<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categorie
 *
 * @package App
 * @property string $name
 * @property text $description
*/
class Categorie extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'description'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Categorie::observe(new \App\Observers\UserActionsObserver);
    }
    
}
