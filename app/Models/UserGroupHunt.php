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

    public function users() {
        return $this->hasMany(User::class);
    }

    public function hunts() {
        return $this->hasMany(UserGroupHunt::class);
    }
}
