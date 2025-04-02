<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'user_id',
        'difficulty',
        'capacity',
        'is_recurring',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];


    public function instructor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function attendees()
    {
        return $this->belongsToMany(User::class, 'training_user');
    }
}
