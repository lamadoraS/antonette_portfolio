<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    protected $table = 'webinars';
    protected $primaryKey = 'id';
    protected $fillable = ['title','agenda','host_name','date'];
    use HasFactory;
}
