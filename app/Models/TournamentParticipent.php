<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TournamentParticipent extends Model
{
    protected $fillable = [
        'tournament_id',
        'user_id',
        'is_winner'
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournaments::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getIsWinnerAttribute($value)
    {
        return $value == '1' ? 'Yes' : 'No';
    }
}
