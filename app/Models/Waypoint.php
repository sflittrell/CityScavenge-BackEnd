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

    public function hunt() {
        return $this->belongsTo(Hunt::class);
    }
}
