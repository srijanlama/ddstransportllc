<?php

namespace App\Service;

use App\Models\Driver;
use App\Models\EmploymentHistory;
use App\Models\AccidentHistory;
use App\Models\ExperienceHistory;
use App\Models\EducationHistory;
use App\Models\LicenseHistory;
use PharIo\Manifest\License;

class DriverService
{
    public static function store()
    {
        // validate basic info
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required | unique:drivers',
            'phone' => 'required',
            'date_of_application' => 'required',
            'working_in_us' => 'required',
            'dob' => 'required',
            'age' => 'required',
            'expected_salary' => 'sometimes',
            'pre_drug_test' => 'required',
            'jail_term' => 'required',
            'position' => 'sometimes',
        ]);
        if (request()->has('id')) {
            $driver = Driver::findOrFail(request('id'));
            if ($driver->update($data)) {
                // get the additional data
                $employment_histories = request('employment_histories');
                $accident_histories = request('accident_histories');
                $experience_histories = request('experience_histories');
                $education_histories = request('education_histories');
                $license_histories = request('license_histories');
                if (filled($employment_histories)) {
                    $driver->employment_histories->each(function ($item) {
                        $item->delete();
                    });
                    $emp_history_models = [];
                    foreach ($employment_histories as $item) {
                        $emp_history_models[] = new EmploymentHistory($item);
                    }
                    $driver->employment_histories()->saveMany($emp_history_models);
                } else {
                    $driver->employment_histories->each(function ($item) {
                        $item->delete();
                    });
                }
                // for accident histories
                if (filled($accident_histories)) {
                    $driver->accident_histories->each(function ($item) {
                        $item->delete();
                    });
                    $models = [];
                    foreach ($accident_histories as $item) {
                        $models[] = new AccidentHistory($item);
                    }
                    $driver->accident_histories()->saveMany($models);
                } else {
                    $driver->accident_histories->each(function ($item) {
                        $item->delete();
                    });
                }
                // experience histories
                if (filled($experience_histories)) {
                    $driver->experience_histories->each(function ($item) {
                        $item->delete();
                    });
                    $models = [];
                    foreach ($experience_histories as $item) {
                        $models[] = new ExperienceHistory($item);
                    }
                    $driver->experience_histories()->saveMany($models);
                } else {
                    $driver->experience_histories->each(function ($item) {
                        $item->delete();
                    });
                }
                //education histories
                if (filled($education_histories)) {
                    $driver->education_histories->each(function ($item) {
                        $item->delete();
                    });
                    $models = [];
                    foreach ($education_histories as $item) {
                        $models[] = new EducationHistory($item);
                    }
                    $driver->education_histories()->saveMany($models);
                } else {
                    $driver->education_histories->each(function ($item) {
                        $item->delete();
                    });
                }
                //education histories
                if (filled($license_histories)) {
                    $driver->license_histories->each(function ($item) {
                        $item->delete();
                    });
                    $models = [];
                    foreach ($license_histories as $item) {
                        $models[] = new LicenseHistory($item);
                    }
                    $driver->license_histories()->saveMany($models);
                } else {
                    $driver->license_histories->each(function ($item) {
                        $item->delete();
                    });
                }
                return response()->json([
                    'status' => 'success',
                    'message' =>  'Driver Updated Successfully',
                    'payload' => $driver
                ]);
            }
        } else {
            $driver = new Driver($data);
            if ($driver->save()) {
                // get the additional data
                $employment_histories = request('employment_histories');
                $accident_histories = request('accident_histories');
                $experience_histories = request('experience_histories');
                $education_histories = request('education_histories');
                $license_histories = request('license_histories');
                // add employment history
                if (filled($employment_histories)) {
                    $emp_history_models = [];
                    foreach ($employment_histories as $item) {
                        $emp_history_models[] = new EmploymentHistory($item);
                    }
                    $driver->employment_histories()->saveMany($emp_history_models);
                }
                //add if exist accident history
                if (filled($accident_histories)) {
                    $accident_histories_models = [];
                    foreach ($accident_histories as $item) {
                        $accident_histories_models[] = new AccidentHistory($item);
                    }
                    $driver->accident_histories()->saveMany($accident_histories_models);
                }
                //add if exist experience history
                if (filled($experience_histories)) {
                    $exp_history_models = [];
                    foreach ($experience_histories as $item) {
                        $exp_history_models[] = new ExperienceHistory($item);
                    }
                    $driver->experience_histories()->saveMany($exp_history_models);
                }
                //add if exist education history
                if (filled($education_histories)) {
                    $edu_models = [];
                    foreach ($education_histories as $item) {
                        $edu_models[] = new EducationHistory($item);
                    }
                    $driver->education_histories()->saveMany($edu_models);
                }
                //add if exist license history
                if (filled($license_histories)) {
                    $models = [];
                    foreach ($license_histories as $item) {
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
