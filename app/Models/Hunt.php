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
}
