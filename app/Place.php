<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Place
 *
 * @package App
 * @property string $nom
 * @property integer $nombre_de_place
 * @property tinyInteger $disponibilite
 * @property string $localisation
*/
class Place extends Model
{
    use SoftDeletes;

    protected $fillable = ['nom', 'nombre_de_place', 'disponibilite', 'localisation_address', 'localisation_latitude', 'localisation_longitude'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Place::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setNombreDePlaceAttribute($input)
    {
        $this->attributes['nombre_de_place'] = $input ? $input : null;
    }
    
}
