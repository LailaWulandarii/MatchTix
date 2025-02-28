<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user1_id',
        'user2_id',
        'event_id',
        'secret_code',
        'status',
    ];

    /**
     * Get the user1 associated with the matchup.
     */
    public function user1()
    {
        return $this->belongsTo(User::class, 'user1_id');
    }

    /**
     * Get the user2 associated with the matchup.
     */
    public function user2()
    {
        return $this->belongsTo(User::class, 'user2_id');
    }

    /**
     * Get the event associated with the matchup.
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
