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

test('belongs to an employer', function() {
// AAA -> Arrange, Act, Assert
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act and Assert
    expect($job->employer->is($employer))->toBeTrue();
});

test('can have tags', function () {

    $job = Job::factory()->create();
    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
