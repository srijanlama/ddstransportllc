<?php

namespace App\Models;

use App\Models\LicenseHistory;
use App\Models\EducationHistory;
use App\Models\EmploymentHistory;
use App\Models\ExperienceHistory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Driver extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function employment_histories(){
        return $this->hasMany(EmploymentHistory::class ,'driver_id');
    }
    public function accident_histories(){
        return $this->hasMany(AccidentHistory::class ,'driver_id');
    }
    public function experience_histories(){
        return $this->hasMany(ExperienceHistory::class ,'driver_id');
    }
    public function education_histories(){
        return $this->hasMany(EducationHistory::class ,'driver_id');
    }
    public function license_histories(){
        return $this->hasMany(LicenseHistory::class ,'driver_id');
    }
}
