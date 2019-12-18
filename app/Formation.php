<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Formation
 *
 * @package App
 * @property string $title
 * @property string $featured
 * @property string $category
 * @property string $date_debut_formation
 * @property integer $duree
 * @property string $place
 * @property text $description
*/
class Formation extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','prix','slug', 'featured', 'date_debut_formation','date_fin_formation', 'duree', 'description', 'category_id', 'place_id','heure_debut_formation','formateur'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Formation::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCategoryIdAttribute($input)
    {
        $this->attributes['category_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateDebutFormationAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['date_debut_formation'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['date_debut_formation'] = null;
        }
    }
    public function setDateFinFormationAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['date_fin_formation'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['date_fin_formation'] = null;
        }
    }
    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateDebutFormationAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }
    public function getDateFinFormationAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDureeAttribute($input)
    {
        $this->attributes['duree'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setPlaceIdAttribute($input)
    {
        $this->attributes['place_id'] = $input ? $input : null;
    }
    
    public function category()
    {
        return $this->belongsTo(Categorie::class, 'category_id')->withTrashed();
    }
    
    public function tag_id()
    {
        return $this->belongsToMany(Tag::class, 'formation_tag')->withTrashed();
    }
    
    public function place()
    {
        return $this->belongsTo(Place::class, 'place_id')->withTrashed();
    }
    public function user()
    {
       return $this->belongTo(User::class,'user_id')->withTrashed();
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function discussions()
    {
        return $this->hasMany('App\Discussion');
    }
}
