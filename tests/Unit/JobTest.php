<?php

// test and it -> do the same thing !
// php artisan make:test
// php artisan test

use App\Models\Employer;
use App\Models\Job;

// test('example', function () {
//     expect(true)->toBeTrue();
// });
// it('', function () {});

test('', function() {
// AAA -> Arrange, Act, Assert
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act and Assert
    expect($job->employer->is($employer))->toBeTrue();
});


