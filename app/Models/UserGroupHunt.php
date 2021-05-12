<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroupHunt extends Model
{
    use HasFactory;

    protected $table = 'user_group_hunts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $with = [
        'hunts'
    ];

    public function users() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function hunts() {
        return $this->belongsTo(Hunt::class, 'hunt_id', 'id');
    }
}
