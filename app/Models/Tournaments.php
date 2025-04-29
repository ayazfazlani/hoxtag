<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournaments extends Model
{

    protected $fillable = [
        'title',
        'game',
        'entry_fee',
        'prize_pool',
        'max_players',
        'start_date',
        'end_date',
        'status'
    ];

    public function participents()
    {
        return $this->hasMany(TournamentParticipent::class);
    }
    public function getStatusAttribute($value)
    {
        return $value == 'upcoming' ? 'Upcoming' : ($value == 'ongoing' ? 'Ongoing' : 'Completed');
    }
}
