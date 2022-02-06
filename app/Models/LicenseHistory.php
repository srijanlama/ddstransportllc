<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenseHistory extends Model
{
    use HasFactory;
    protected $table= 'license';
    protected $guarded = ['id'];
}
