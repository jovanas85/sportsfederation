<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;
use App\Club;


class Game extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'eventId',   
        'date',
        'place',
        'homeClubId',
        'guestClubId',
        'category',
        'referee1Id',
        'referee2Id',
        'delegateId',
        'round',
        'scoresGuest',
        'scoresHome',
        'note',
        'created_at',
        'updated_at',
        ];

    public function event() {
        return $this->belongsTo('App\Event','eventId');
    }
    public function homeClub() {
        return $this->belongsTo('App\Club','homeClubId', 'id');
    }
    public function guestClub() {
        return $this->belongsTo('App\Club','guestClubId', 'id');
    }

}
