<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Match extends Model
{
    use LogsActivity;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'matches';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['team_1','team_2','match_date','season_id','venue','toss_winner','toss_decision',
                            'win_type','win_margin','outcome_type','match_winner','man_of_the_match'];

    

    public function team1(){
        return $this->belongsTo('\App\Team','team_1');
    }


    public function team2(){
        return $this->belongsTo('\App\Team','team_2');
    }

    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}
