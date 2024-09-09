<?php
use Illuminate\support\Arr;
use Illuminate\Support\Facades\Route;

class Job {
    public static function all() :array
    {
        return [
            [
        
                'title' => 'full stack',
                'id' => '1',
                'salary' => 'ksh.50,000'
            ],
        
            [
                'title' => 'managing partner',
                'id' => '2',
                'salary' => 'ksh.60,000'
            ],
        
            [
                'title' => 'ui/ux',
                'id' => '3',
                'salary' => 'ksh.45,000'
                
            ]
        ];
    }
}



Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});


Route::get('/jobs/{id}', function ($id) {
   

       $job = Arr::first(Job::all(), fn($jobs)=> $job['id'] = $id);

    
        return view('job', ['job' => $job]);
});



Route::get('/contact', function () {
    return view('contact');
});
