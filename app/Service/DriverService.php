<?php

namespace App\Service;

use App\Models\Driver;
use App\Models\EmploymentHistory;
use App\Models\AccidentHistory;
use App\Models\ExperienceHistory;
use App\Models\EducationHistory;
use App\Models\LicenseHistory;

class DriverService
{
    public static function store()
    {
        // validate basic info
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:drivers',
            'phone' => 'required',
            'date_of_application' => 'required',
            'working_in_us' => 'required',
            'dob' => 'required',
            'age' => 'required',
            'expected_salary' => 'required',
            'pre_drug_test' => 'required',
            'jail_term' => 'required',
            'position' => 'sometimes',
        ]);
        if (request()->has('id')) {
        } else {
            $driver = new Driver($data);
            if ($driver->save()) {
                // get the additional data
                $employment_history = request('employment_history');
                $accident_history = request('accident_history');
                $experience_history = request('experience_history');
                $education_history = request('education_history');
                $license_history = request('license_history');
                // add employment history
                if (filled($employment_history)) {
                    $emp_history_models = [];
                    foreach ($employment_history as $item) {
                        $emp_history_models[] = new EmploymentHistory($item);
                    }
                    $driver->employment_histories()->saveMany($emp_history_models);
                }
                //add if exist accident history
                if (filled($accident_history)) {
                    $accident_history_models = [];
                    foreach ($accident_history as $item) {
                        $accident_history_models[] = new AccidentHistory($item);
                    }
                    $driver->accident_histories()->saveMany($accident_history_models);
                }
                //add if exist experience history
                if (filled($experience_history)) {
                    $exp_history_models = [];
                    foreach ($experience_history as $item) {
                        $exp_history_models[] = new ExperienceHistory($item);
                    }
                    $driver->experience_histories()->saveMany($exp_history_models);
                }
                //add if exist education history
                if (filled($education_history)) {
                    $edu_models = [];
                    foreach ($education_history as $item) {
                        $edu_models[] = new EducationHistory($item);
                    }
                    $driver->education_histories()->saveMany($edu_models);
                }
                //add if exist license history
                if (filled($license_history)) {
                    $models = [];
                    foreach ($license_history as $item) {
                        $models[] = new LicenseHistory($item);
                    }
                    $driver->license_histories()->saveMany($models);
                }
                return response()->json([
                    'status' => 'success',
                    'message' =>  'Driver Created Successfully',
                    'payload' => $driver
                ]);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'something went wrong',
            ]);
        }
    }

}
