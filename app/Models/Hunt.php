<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hunt extends Model
{
    use HasFactory;

    protected $table = 'hunts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $with = [
        'waypoints'
    ];

    public function waypoints() {
        return $this->hasMany(Waypoint::class, 'hunt_id', 'id');
    }

    public function userGroupHunts() {
        return $this->hasMany(userGroupHunt::class);
    }
}
