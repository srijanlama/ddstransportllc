<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceHistory extends Model
{
    use HasFactory;
    protected $table= 'experiences';
    protected $guarded = ['id'];
}
