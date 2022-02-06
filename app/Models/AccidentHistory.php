<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentHistory extends Model
{
    use HasFactory;
    protected $table= 'accident_history';
    protected $guarded = ['id'];
}
