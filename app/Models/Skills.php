<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $table = 'skills';
    protected $primaryKey = 'id';
    protected $fillable = ['skill_name','percentage'];
    use HasFactory;
    use HasFactory;
}
