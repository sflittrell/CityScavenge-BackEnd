<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waypoint extends Model
{
    use HasFactory;

    protected $table = 'waypoints';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $with = [
        'clues'
    ];

    public function hunt() {
        return $this->belongsTo(Hunt::class);
    }

    public function clues() {
        return $this->hasMany(Clue::class, 'waypoint_id', 'id');
    }
}
